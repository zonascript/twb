<?php

namespace App\Http\Controllers;

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
        return view('admin.news.index');
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
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePermission $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermission $request)
    {
        if ($this->news->store($request)) {
            return backendRedirect('setting/new');
        }
        return backendRedirect('setting/news/create')->withInput();
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
        $data['new'] = $this->news->getById($id);
        return view('admin.news.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePermission $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermission $request, $id)
    {
        if ($this->news->update($request, $id)) {
            return backendRedirect('setting/news');
        }
        return backendRedirect('setting/news/' . $id . '/edit');
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
            return backendRedirect('setting/news');
        }
        return backendRedirect('setting/news');
    }
}
