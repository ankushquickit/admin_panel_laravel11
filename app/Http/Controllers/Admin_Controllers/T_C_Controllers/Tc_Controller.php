<?php
namespace App\Http\Controllers\Admin_Controllers\T_C_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tc_Controller extends Controller
{
    public function index()
    {
        return view('admin_view.web_pages.terms_conditions');
    }
}
