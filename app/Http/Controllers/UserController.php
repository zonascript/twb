<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Service\User;

class UserController extends Controller
{
    /**
     * @var User
     */
    private $user;

    /**
     * UserController constructor.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'User List';
        return view('admin.users.index', $data);
    }

    public function datatableList()
    {
        return $this->user->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = $this->user->role()->getList();
        $data['pageTitle'] = 'Add User';
        return view('admin.users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        if ($this->user->store($request)) {
            return backendRedirect('setting/user');
        }
        return backendRedirect('setting/user/create')->withInput();
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
        $data['user'] = $this->user->getById($id);
        $data['roles'] = $this->user->role()->getList();
        $data['pageTitle'] = 'Edit User';
        return view('admin.users.edit', $data);
    }

    public function profile()
    {
        $data['pageTitle'] = 'My Profile';
        return view('admin.users.profile', $data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, $id)
    {
        if ($this->user->update($request, $id)) {
            return backendRedirect('setting/user');
        }
        return backendRedirect('setting/user/' . $id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->user->destroy($id)) {
            return backendRedirect('setting/user');
        }
        return backendRedirect('setting/user');
    }


}
