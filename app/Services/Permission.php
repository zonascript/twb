<?php

namespace App\Service;


use Spatie\Permission\Models\Permission as PermissionModel;

class Permission
{
    use DatatableParameters;

    protected $baseUrl = 'setting/permission';
    protected $prefixUrl;

    public function datatable()
    {
        $this->prefixUrl = config('misc.admin-prefix');
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