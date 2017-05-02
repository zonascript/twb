<?php

namespace App\Service;


use Spatie\Permission\Models\Permission as PermissionModel;

class Permission
{
    use DatatableParameters;

    protected $baseUrl = 'setting/permission';

    public function datatable()
    {
        $data = $this->getList();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getList()
    {
        return PermissionModel::all();
    }

    public function store($request)
    {
        return PermissionModel::create([
            'name' => $request->input('name'),
            'guard_name' => $request->input('code')
        ]);
    }

    public function getById($id)
    {
        return PermissionModel::find($id);
    }

    public function update($request, $id)
    {
        $permission = $this->getById($id);
        $permission->name = $request->input('name');
        $permission->guard_name = $request->input('code');
        return $permission->save();
    }
}