<?php
namespace App\Http\Controllers\Admin_Controllers\Contactus_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contactus_Controller extends Controller
{
    public function index()
    {
        return view('admin_view.web_pages.contact_us');
    }
}
