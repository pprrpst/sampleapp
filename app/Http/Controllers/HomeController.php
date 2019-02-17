<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return view('home');
//        return view('home_top');
        return view('home_top_0');
    }

    public function mock_1()
    {
        return view('home_top_1');
    }
    public function mock_2()
    {
        return view('home_top_2');
    }
    public function mock_3()
    {
        return view('home_top_3');
    }
    public function mock_4()
    {
        return view('home_top_4');
    }
    public function mock_5()
    {
        return view('home_top_5');
    }
    public function mock_6()
    {
        return view('home_top_6');
    }
}
