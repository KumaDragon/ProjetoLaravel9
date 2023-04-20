<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get();
        dd($users);
        //return view('users.index');
    }

    public function show($id)
    {
        dd('users.show', $id);
    }
}