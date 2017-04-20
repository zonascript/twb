<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        $data['pageTitle'] = 'Home';
        return view('frontend.home', $data);
    }
}
