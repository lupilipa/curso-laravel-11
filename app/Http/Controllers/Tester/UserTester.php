<?php

namespace App\Http\Controllers\Tester;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserTester extends Controller
{

    public function indexy(){
        //$users = User::all();
        //dd($users);
        //all e get funcionam do mesmo jeito
        //paginação
        $users = User::paginate(20);
        return view('tester.usertester.indexy', compact('users'));
    }

    public function create(){
        return view('tester.usertester.create');
    }

    public function store(Request $request){
        //return 'cadastrando...';
        //dd($request->get('name'));
		//dd($request->all()); //[pega tds os dados]
		//dd($request->only('_token')); //[pega apenas isso]
		//dd($request->except('_token')); //[pega tds menos isso]
		//return User::create($request->all());
		//se precisasse de algo especifico
		//$user = User::create($request->all());
		User::create($request->all()); 
		return redirect()->route('indexy.indexy');
    }

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
