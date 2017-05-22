<?php

namespace App\Service;

use Illuminate\Http\Request;

class Event
{
    use DatatableParameters;

    // News Post Type
    protected $postTypeId = 2;

    protected $baseUrl = 'event';

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

    public function getNewsById($newsId)
    {
        return $this->post->getPostById($newsId);
    }

    private function getList()
    {
        $params = [
            'post_type_id' => $this->postTypeId
        ];
        $news = $this->post->getPostQuery($params)
            ->leftJoin('post_metas AS pm', 'p.id', '=', 'pm.post_id')
            ->leftJoin('post_meta_translations AS pmt', function ($join) {
                $join->on('pm.id', '=', 'pmt.post_meta_id')
                    ->where('pm.meta_key', 'event_date');
            })
            ->addSelect('pm.meta_key', 'pmt.value AS event_date')
            ->get();
        return $news;
    }

    public function getById($id)
    {
        return $this->post->getPostQuery(['id' => $id])
            ->leftJoin('post_metas AS pm', 'p.id', '=', 'pm.post_id')
            ->leftJoin('post_meta_translations AS pmt', function ($join) {
                $join->on('pm.id', '=', 'pmt.post_meta_id')
                    ->where('pm.meta_key', 'event_date');
            })
            ->addSelect('pm.meta_key', 'pmt.value AS event_date')
            ->first();
    }

    public function store(Request $request)
    {
        $publishDate = $request->input('publish_date');
        $eventDate = $request->input('event_date');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['mediaId'] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        $metas['event_date']= $eventDate;
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
        $eventDate = $request->input('event_date');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['mediaId'] = $request->has('featured_image_id') ? $request->input('featured_image_id') : '';
        // use the key for the meta
        $metas['event_date']= $eventDate;
        try {
            $this->post->update($id, $publishDate, $status, $details, $metas);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        $post = $this->post->getPostById($id);
        return $post->delete();
    }
}