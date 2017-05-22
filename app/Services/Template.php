<?php

namespace App\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Template
{
    use DatatableParameters;

    // News Post Type
    protected $postTypeId = 4;

    protected $baseUrl = 'template';

    /**
     * @var Post
     */
    private $post;
    /**
     * @var Media
     */
    private $media;

    /**
     * News constructor.
     */
    public function __construct(Post $post, Media $media)
    {
        $this->post = $post;
        $this->media = $media;
    }

    public function datatable()
    {
        $data = $this->getList();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getTemplateById($templateId)
    {
        return $this->post->getPostById($templateId);
    }

    private function getList()
    {
        $params = [
            'post_type_id' => $this->postTypeId
        ];
        $news = $this->post->getPostQuery($params)
            ->where('medias.type', 'featured')->get();
        return $news;
    }

    public function getById($id)
    {
        return $this->post->getPostQuery(['id' => $id])
            ->where('medias.type', 'featured')
            ->addSelect('medias.id AS media_id')
            ->first();
    }

    public function store(Request $request)
    {
        $publishDate = $request->input('publish_date');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['mediaId'][] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        // the template file
        if ($request->hasFile('template_file')) {
            $details['mediaId'][] = $this->storeTemplateFile($request->file('template_file'));
        }

        try {
            $this->post->store($this->postTypeId, $publishDate, $status, $details);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $id)
    {
        $publishDate = $request->input('publish_date');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['mediaId'][] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        // the template file
        if ($request->hasFile('template_file')) {
            $details['mediaId'][] = $this->storeTemplateFile($request->file('template_file'));
        } else {
            if ($request->has('template_file_old')) {
                $details['mediaId'][] = $request->input('template_file_old');
            }
        }
        try {
            $this->post->update($id, $publishDate, $status, $details);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        return $this->post->destroy($id);
    }

    private function storeTemplateFile($file)
    {
        if ($file->isValid()) {
            $folder = 'uploads/templates/';
            if (! File::exists(public_path($folder))) {
                File::makeDirectory(public_path($folder), 0775, true, true);
            }
            $imageName = $this->media->getUniqueFileName($file, $folder);
            $publicPath = public_path($folder);
            $imagePath = $folder . $imageName;
            $file->storeAs($publicPath, $imageName);
            $filename = pathinfo($imageName, PATHINFO_FILENAME);
            $media = $this->media->saveMedia($filename, $imageName, $imagePath, 'template_file');
            return $media->id;
        }
    }
}