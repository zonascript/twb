<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNews;
use App\Service\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    /**
     * @var News
     */
    private $news;

    /**
     * NewsController constructor.
     */
    public function __construct(News $news)
    {
        $this->news = $news;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'News List';
        return view('admin.news.index', $data);
    }

    public function datatableList()
    {
        return $this->news->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageTitle'] = 'Add News';
        return view('admin.news.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNews $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNews $request)
    {
        if ($this->news->store($request)) {
            return backendRedirect('news');
        }
        return backendRedirect('news/create')->withInput();
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
        $data['post'] = $this->news->getById($id);
        $data['pageTitle'] = 'Edit News';
        return view('admin.news.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreNews $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNews $request, $id)
    {
        if ($this->news->update($request, $id)) {
            return backendRedirect('news/' . $id . '/edit')->with('message', 'News Saved.');;
        }
        return backendRedirect('news/' . $id . '/edit')->withErrors(['update' => 'Error when updating the data.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->news->destroy($id)) {
            return backendRedirect('news');
        }
        return backendRedirect('news')->withErrors(['delete_failed' => 'Error when delete the data.']);
    }

    public function newsPaginated(Request $request, $type = 'latest')
    {
        $newsQuery = $this->news->getList();
        if ($type == 'latest') {
            $newsQuery = $newsQuery->orderBy('publish_at', 'desc');
        } else {
            $newsQuery = $newsQuery->orderBy('views', 'desc');
        }
        if ($request->has('search')) {
            $search = $request->input('search');
            $newsQuery = $newsQuery->where('title', 'like', '%'.$search.'%');
        }
        if ($request->has('currentId')) {
            $newsQuery = $newsQuery->where('p.id', '<>', $request->input('currentId'));
        }
        $news = $newsQuery->paginate(4);
        $news->withPath('news-paginated/' . $type);
        return $news->toJson();
    }
}
