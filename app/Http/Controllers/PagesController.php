<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        // return view('admin.index');
        return view('landing.home');
        // return view('otentikasi.login');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function post()
    {
        return view('landing.post');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
