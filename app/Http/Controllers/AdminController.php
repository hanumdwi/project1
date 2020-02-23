<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tampil_admin(){
        return view('admin/admin');
    }
    
}
