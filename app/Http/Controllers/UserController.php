<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return $User = User::all();
    }


    public function store(Request $request)
    {
        $user = User::create($request->all());
  
        return $user;
    }


}

