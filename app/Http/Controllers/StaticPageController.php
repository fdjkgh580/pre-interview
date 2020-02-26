<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index($page)
    {
        return view("static.{$page}");
    }
}
