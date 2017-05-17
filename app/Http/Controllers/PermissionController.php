<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermission;
use App\Http\Requests\UpdatePermission;
use App\Service\Permission;

class PermissionController extends Controller
{
    /**
     * @var Permission
     */
    private $permission;

    /**
     * PermissionController constructor.
     */
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.permissions.index');
    }

    public function datatableList()
    {
        return $this->permission->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePermission $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermission $request)
    {
        if ($this->permission->store($request)) {
            return backendRedirect('setting/permission');
        }
        return backendRedirect('setting/permission/create')->withInput();
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
        $data['permission'] = $this->permission->getById($id);
        return view('admin.permissions.edit', $data);
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
        if ($this->permission->update($request, $id)) {
            return backendRedirect('setting/permission');
        }
        return backendRedirect('setting/permission/' . $id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->permission->destroy($id)) {
            return backendRedirect('setting/permission');
        }
        return backendRedirect('setting/permission');
    }
}
