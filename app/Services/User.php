<?php

namespace App\Service;


use App\Model\User as UserModel;

class User
{
    use DatatableParameters;

    protected $baseUrl = 'setting/user';

    /**
     * @var Role
     */
    private $role;

    /**
     * User constructor.
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

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
        return UserModel::all();
    }

    public function store($request)
    {
        try {
            $user = UserModel::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            $user->assignRole($request->input('roles'));

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getById($id)
    {
        return UserModel::find($id);
    }

    public function update($request, $id)
    {
        try {
            $user = $this->getById($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->save();
            $user->syncRoles($this->input('roles'));
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        return UserModel::destroy($id);
    }

    public function role()
    {
        return $this->role;
    }
}