<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

// namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
   
    public function index()
    {
    
        return view('admin.home');
    }
    public function adminHome()
    {
        return view('adminHome');
    }
}
