<?php

namespace App\Http\Controllers;

use App\Service\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * @var Role
     */
    private $role;

    /**
     * RoleController constructor.
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.roles.index');
    }

    public function datatableList()
    {
        return $this->role->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['permissions'] = $this->role->permission()->getList();
        return view('admin.roles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->role->store($request)) {
            return redirect('setting/role');
        }
        return redirect('setting/role/create')->withInput();
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
        $data['role'] = $this->role->getById($id);
        $data['permissions'] = $this->role->permission()->getList();
        return view('admin.roles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($this->role->update($request, $id)) {
            return redirect('setting/role');
        }
        return redirect('setting/role/' . $id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->role->destroy($id)) {
            return redirect('setting/role');
        }
        return redirect('setting/role');
    }
}
