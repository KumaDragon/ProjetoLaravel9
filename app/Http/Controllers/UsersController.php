<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        //recupera os dados e salva na variavel $users
        $users = User::get();
        //dd($users);
        return view ('users.index', compact('users'));
        //aqui ele retorna na view os dados que puxou na variavel $users
        
    }

    public function show($id)
    {
        if(!$user = User::find($id))
            return redirect()->route('users.index');
        
        return view ('users.show', compact('user'));
        
    }
}