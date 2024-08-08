<?php

namespace App\Http\Controllers\Tester;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserTester extends Controller
{
    public function index(){
        return 'view3';
    }

    public function index2(){
        $user = User::first();
        return $user->name;
        //pra testar por string (nunca passe assim)
        //return "Olá {$user->name}! ({$user->email})";
    }

    public function index3(){
        $user = User::first();
        //return view('tester.usertester.index3', [
        //    'user' => $user
        //]);
        //vc ta passando array de user, a funçao compact faz isso
        return view('tester.usertester.index3', compact('user'));
}

}
