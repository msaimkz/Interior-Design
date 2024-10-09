<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view('Admin.Dashboard.index');
    }

    public function user(){

        return view('Admin.Dashboard.user');
    }
}
