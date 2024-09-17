<?php

namespace App\Http\Controllers\promote;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class promote extends Controller
{
    public function index()
    {

        return view('promote.index');
    }
    public function menu()
    {
        return view('promote.menu');
    }

    public function order()
    {

        return view('promote.order');
    }

    public function contact()
    {

        return view('promote.contact');
    }

    public function detail()
    {

        return view('promote.detail');
    }
}
