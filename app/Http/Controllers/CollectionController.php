<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        $user = \App\User::all();
        return view('users',compact('user'));
    }
}
