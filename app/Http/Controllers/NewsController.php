<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNews;
use App\Service\News;
use Illuminate\Http\Request;

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
        $data['pageTitle'] = 'Add New Post';
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
        $data['news'] = $this->news->getById($id);
        $data['new'] = $this->news->getById($id);
        $data['pageTitle'] = 'Edit Post';
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
}
