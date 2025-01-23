<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMailController extends Controller
{
    public function index(){

        return view('Admin.Pages.mail');
    }
}
