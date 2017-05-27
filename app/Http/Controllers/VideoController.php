<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideo;
use App\Service\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * @var Video
     */
    private $video;

    /**
     * VideoController constructor.
     */
    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'Video List';
        return view('admin.videos.index', $data);
    }

    public function datatableList()
    {
        return $this->video->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageTitle'] = 'Add Video';
        return view('admin.videos.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreVideo $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideo $request)
    {
        if ($this->video->store($request)) {
            return backendRedirect('video');
        }
        return backendRedirect('video/create')->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['id'] = $id;
        $data['videoLink'] = getMetaValue($id, 'video_link');
        $data['post'] = $this->video->getById($id);
        $data['pageTitle'] = 'Delete Video';
        return view('admin.videos.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreVideo $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVideo $request, $id)
    {
        if ($this->video->update($request, $id)) {
            return backendRedirect('video/' . $id . '/edit')->with('message', 'Video Saved.');
        }
        return backendRedirect('video/' . $id . '/edit')->withErrors(['error' => 'Error when updating the data.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->video->destroy($id)) {
            return backendRedirect('video');
        }
        return backendRedirect('video')->withErrors(['delete_failed' => 'Error when delete the data.']);
    }

    public function videosPaginated(Request $request)
    {
        $videoQuery = $this->video->getList();
        if ($request->has('search')) {
            $search = $request->input('search');
            $videoQuery = $videoQuery->where('title', 'like', '%'.$search.'%');
        }
        $videoQuery = $videoQuery->where('p.id', '<>', $request->input('currentId'));
        $videos = $videoQuery->orderBy('publish_at', 'desc')
            ->paginate(5);
        $videos->withPath('videos-paginated');
        return $videos->toJson();
    }
}
