<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class adminController extends Controller
{
    function showAdminPanel(){
        return view('admin.main');
    }
}
