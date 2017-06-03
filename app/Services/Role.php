<?php

namespace App\Service;


use Spatie\Permission\Models\Role as RoleModel;

class Role
{
    use DatatableParameters;

    protected $baseUrl = 'setting/role';
    /**
     * @var Permission
     */
    private $permission;

    /**
     * Role constructor.
     */
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function datatable()
    {
        $data = $this->getList();
        $actions = $this->actionParameters([
            'setting.role.edit' => 'edit',
            'setting.role.delete' => 'delete'
        ]);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function getList()
    {
        return RoleModel::all();
    }

    public function store($request)
    {
        try {
            $role = RoleModel::create([
                'name' => $request->input('name'),
            ]);

            $role->givePermissionTo($request->input('permissions'));
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getById($id)
    {
        return RoleModel::find($id);
    }

    public function update($request, $id)
    {
        try {
            $role = $this->getById($id);
            $role->name = $request->input('name');
            $role->save();

            $role->syncPermissions($request->input('permissions'));

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        return RoleModel::destroy($id);
    }

    public function permission()
    {
        return $this->permission;
    }
}