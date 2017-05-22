<?php

namespace App\Service;

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
        $data = $this->getList();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getVideoById($videoId)
    {
        return $this->post->getPostById($videoId);
    }

    private function getList()
    {
        $params = [
            'post_type_id' => $this->postTypeId
        ];
        $news = $this->post->getPostQuery($params)->get();
        return $news;
    }

    public function getById($id)
    {
        return $this->post->getPostQuery(['id' => $id])->first();
    }

    public function store(Request $request)
    {
        $publishDate = $request->input('publish_date');
        $videoLink = $request->has('video_link') ? $request->input('video_link') : '';
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
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
        $publishDate = $request->input('publish_date');
        $videoLink = $request->input('video_link');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
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