<?php

namespace App\Http\Controllers\Admin_Controllers\Aboutus_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aboutus_Controller extends Controller
{
    public function index()
    {
        return view('admin_view.web_pages.about_us');
    }
}
