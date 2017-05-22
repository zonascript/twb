<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // return view('admin/index');
        $data['pageTitle'] = 'Dashboard';
        return view('admin.index', $data);
    }
}
