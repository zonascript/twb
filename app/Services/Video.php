<?php

namespace App\Service;

use Carbon\Carbon;
use Illuminate\Http\Request;

class Video
{
    use DatatableParameters;

    // News Post Type
    protected $postTypeId = 3;

    protected $baseUrl = 'video';

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
            'video.edit' => 'edit',
            'video.delete' => 'delete'
        ]);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getVideoById($videoId)
    {
        return $this->post->getPostById($videoId);
    }

    public function getList($params = [])
    {
        $listParams = [
            'post_type_id' => $this->postTypeId
        ];
        if (isset($params['slug'])) {
            $listParams['slug'] = $params['slug'];
        }
        $videos = $this->post->getPostQuery($listParams)
            ->leftJoin('post_metas AS pm', function($join) {
                $join->on('p.id', '=', 'pm.post_id')
                    ->where('pm.meta_key', 'video_id');
            })
            ->leftJoin('post_meta_translations AS pmt', 'pm.id', '=', 'pmt.post_meta_id')
            ->addSelect('pm.meta_key', 'pmt.value AS video_id');
        return $videos;
    }

    public function getById($id)
    {
        return $this->post->getPostQuery(['id' => $id])->first();
    }

    public function store(Request $request)
    {
        $publishDate = Carbon::createFromFormat('d/m/Y', $request->input('publish_date'))->format('Y-m-d');
        $videoLink = $request->has('video_link') ? $request->input('video_link') : '';
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['excerpt'] = $request->input('excerpt');
        $details['pageTitle'] = $request->input('page_title');
        $details['metaDescription'] = $request->input('meta_description');
        // $details['mediaId'] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        if ($videoLink != '') {
            $videoId = $this->getVideoIdByLink($videoLink);
            $metas['video_link'] = $videoLink;
            $metas['video_id'] = $videoId;
        }
        try {
            $this->post->store($this->postTypeId, $publishDate, $status, $details, $metas);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function update($request, $id)
    {
        $publishDate = Carbon::createFromFormat('d/m/Y', $request->input('publish_date'))->format('Y-m-d');
        $videoLink = $request->input('video_link');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['excerpt'] = $request->input('excerpt');
        $details['pageTitle'] = $request->input('page_title');
        $details['metaDescription'] = $request->input('meta_description');
        $details['mediaId'] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        // use the key for the meta
        if ($videoLink != '') {
            $videoId = $this->getVideoIdByLink($videoLink);
            $metas['video_link'] = $videoLink;
            $metas['video_id'] = $videoId;
        }
        try {
            $this->post->update($id, $publishDate, $status, $details, $metas);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        return $this->post->destroy($id);
    }

    private function getVideoIdByLink($videoLink)
    {
        $xplodedLink = explode('v=', $videoLink);
        $queryVar = explode('&',$xplodedLink[1]);
        return isset($queryVar[0]) ? $queryVar[0] : '';
    }
}