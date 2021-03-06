<?php

namespace App\Service;


use App\Http\Requests\StoreNews;
use Carbon\Carbon;
use Illuminate\Http\Request;

class News
{
    use DatatableParameters;

    // News Post Type
    protected $postTypeId = 1;

    protected $baseUrl = 'news';

    /**
     * @var Post
     */
    private $post;

    /**
     * News constructor.
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function datatable()
    {
        $data = $this->getList()->get();
        $actions = $this->actionParameters([
            'news.edit' => 'edit',
            'news.delete' => 'delete'
        ]);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getNewsById($newsId)
    {
        return $this->post->getPostById($newsId);
    }

    public function getList($params = [])
    {
        $listParams = [
            'post_type_id' => $this->postTypeId
        ];
        if (isset($params['slug'])) {
            $listParams['slug'] = $params['slug'];
        }
        $news = $this->post->getPostQuery($listParams);
        return $news;
    }

    public function getById($id)
    {
        return $this->post->getPostQuery(['id' => $id])->first();
    }

    public function store(StoreNews $request)
    {
        $publishDate = Carbon::createFromFormat('d/m/Y', $request->input('publish_date'))->format('Y-m-d');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['excerpt'] = $request->input('excerpt');
        $details['pageTitle'] = $request->input('page_title');
        $details['metaDescription'] = $request->input('meta_description');
        $details['mediaId'] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        try {
            $this->post->store($this->postTypeId, $publishDate, $status, $details);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update(StoreNews $request, $id)
    {
        $publishDate = Carbon::createFromFormat('d/m/Y', $request->input('publish_date'))->format('Y-m-d');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['excerpt'] = $request->input('excerpt');
        $details['pageTitle'] = $request->input('page_title');
        $details['metaDescription'] = $request->input('meta_description');
        $details['mediaId'] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
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

    public function viewed($id)
    {
        $news = $this->post->getPostById($id);
        $news->views = $news->views + 1;
        $news->save();
    }

}