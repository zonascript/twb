<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        if ($user->roles->first()->name == 'Frontend') {
            return redirect(url('/account'));
        }
        // return view('admin/index');
        $data['pageTitle'] = 'Dashboard';
        return view('admin.index', $data);
    }
}
