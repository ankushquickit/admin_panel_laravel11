<?php
namespace App\Http\Controllers\Admin_Controllers\PP_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Privacy_Policy_Controller extends Controller
{
    public function index(){
        return view('admin_view.pages.privacy_policy');
    }
}
