<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function getSearch(){
        return view('search');
    }

    function postSearch(Request $request){
        return User::where('name', 'like', '%' . $request->q . '%')->get();
    }
}
