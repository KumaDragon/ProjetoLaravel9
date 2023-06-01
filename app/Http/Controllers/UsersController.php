<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;

class UsersController extends Controller
{
    public function index()
    {
        //recupera os dados e salva na variavel $users
        $users = User::get();
        
        return view ('users.index', compact('users'));
        //aqui ele retorna na view os dados que puxou na variavel $users, coloca num array e manda pra view index
        
    }

    public function show($id)
    {
        if(!$user = User::find($id))
            return redirect()->route('users.index');
        
        return view ('users.show', compact('user'));//compact cria um array da variavel
        
    }
    public function create()
    {
        return view ('users.create');
    }
    public function store(StoreUpdateUserFormRequest $request)
    {
        //User::create($request->all());

        //tem essas duas formas de fazer, concatenando, e essa de cima ai mais fácil

        //$user = new User;
        //$user->name = $request->name;
        //$user->email = $request->email;
        //$user->password = $request->password;
        //$user->save();

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);
        return redirect()->route('users.index');
    }
    public function edit($id)
    {
        if(!$user = User::find($id))
            return redirect()->route('users.index');
        return view ('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if(!$user = User::find($id))
            return redirect()->route('users.index');
        $data = $request->only('name','email');
        if($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);
        return redirect()->route('users.index');
    }
    public function destroy($id)
    {
        if(!$user = User::find($id)) //o ! tem a função de negação no php, então ele transforma a afirmação em negação e vice-versa
            return redirect()->route('users.index');
        $user->delete();
        return redirect()->route('users.index');
    }
}