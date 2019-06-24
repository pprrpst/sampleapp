<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\PostRegisterRequest;
//use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getRegister()
    {
//        $model = '\App\User' . '';
        $model = '\App\User' . '2';

        $all = $model::all();
//        $all = $model::where('unavailable', 0)->get();
//        $all = \App\User2::all();


        print_r($all);

        return view('user.register');
    }

    public function postRegister(PostRegisterRequest $request)
    {
//print_r($request->all());
//exit;
    }

}
