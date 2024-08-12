<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $users = User::paginate(20);

        return view('admin.users.index', compact('users'));
    }
    // create é um metodo (deve ter o mesmo nome da view)
    // abaixo é a action
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(request $request)
    {
    
        $user =User::create($request->all());
        return redirect()->route('users.index');
    }
}
