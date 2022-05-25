<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opportunity;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome.index');
    }

    public function about()
    {
        return view('about.index');
    }
}
