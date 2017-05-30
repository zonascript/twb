<?php

namespace App\Service;

use Carbon\Carbon;
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
        $data = $this->getList()->get();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getEventById($eventId)
    {
        return $this->post->getPostById($eventId);
    }

    public function getList()
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
            ->addSelect('pm.meta_key', 'pmt.value AS event_date');
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
        $publishDate = Carbon::createFromFormat('d/m/Y', $request->input('publish_date'))->format('Y-m-d');
        $eventDate = Carbon::createFromFormat('d/m/Y', $request->input('event_date'))->format('Y-m-d');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['excerpt'] = $request->input('excerpt');
        $details['pageTitle'] = $request->input('page_title');
        $details['metaDescription'] = $request->input('meta_description');
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
        $publishDate = Carbon::createFromFormat('d/m/Y', $request->input('publish_date'))->format('Y-m-d');
        $eventDate = Carbon::createFromFormat('d/m/Y', $request->input('event_date'))->format('Y-m-d');
        $status = $request->input('status');
        $details['title'] = $request->input('title');
        $details['content'] = $request->input('content');
        $details['excerpt'] = $request->input('excerpt');
        $details['pageTitle'] = $request->input('page_title');
        $details['metaDescription'] = $request->input('meta_description');
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
        return $this->post->destroy($id);
    }
}