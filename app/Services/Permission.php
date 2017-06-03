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
        $actions = $this->actionParameters([
            'setting.permission.edit' => 'edit',
            'setting.permission.delete' => 'delete'
        ]);

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
            'show_name' => $request->input('show_name'),
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
        $permission->show_name = $request->input('show_name');
        return $permission->save();
    }

    public function destroy($id)
    {
        return PermissionModel::destroy($id);
    }
}