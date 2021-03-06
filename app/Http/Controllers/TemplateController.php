<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemplate;
use App\Http\Requests\UpdateTemplate;
use App\Service\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * @var Template
     */
    private $template;

    /**
     * TemplateController constructor.
     */
    public function __construct(Template $template)
    {
        $this->template = $template;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'Template List';
        return view('admin.templates.index', $data);
    }

    public function datatableList()
    {
        return $this->template->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageTitle'] = 'Add Template';
        return view('admin.templates.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTemplate $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemplate $request)
    {
        if ($this->template->store($request)) {
            return backendRedirect('template');
        }
        return backendRedirect('template/create')->withInput();
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
        // $data['templateFile'] = getMedia($id, 'template_file');
        $data['post'] = $this->template->getById($id);
        $data['pageTitle'] = 'Edit Template';
        //dd($data);
        return view('admin.templates.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTemplate $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemplate $request, $id)
    {
        if ($this->template->update($request, $id)) {
            return backendRedirect('template/' . $id . '/edit')->with('message', 'Template Saved.');;
        }
        return backendRedirect('template/' . $id . '/edit')->withErrors(['update' => 'Error when updating the data.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->template->destroy($id)) {
            return backendRedirect('template');
        }
        return backendRedirect('template')->withErrors(['delete_failed' => 'Error when delete the data.']);
    }

    public function templatePaginated(Request $request)
    {
        $templateQuery = $this->template->getList();
        $templateQuery = $templateQuery->orderBy('publish_at', 'desc');
            //->where('p.id', '<', '200');
        $templates = $templateQuery->paginate(4);
        $templates->withPath('template-paginated');
        return $templates->toJson();
    }
}
