<?php

namespace App\Http\Controllers\Tester;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
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

    public function store(StoreUserRequest $request){
        //return 'cadastrando...';
        //dd($request->get('name'));
		//dd($request->all()); //[pega tds os dados]
		//dd($request->only('_token')); //[pega apenas isso]
		//dd($request->except('_token')); //[pega tds menos isso]
		//return User::create($request->all());
		//se precisasse de algo especifico
		//$user = User::create($request->all());
		User::create($request->all()); 
		return redirect()
            ->route('indexy.indexy')
            ->with('success', 'usuario criado com sucesso');
    }

    public function edit(string $id){
        //dd($id);
        //$user = User::where('id', '=', $id)->first();
        //$user = User::where('id', $id)->first();
        if (!$user = User::find($id)) {
            return redirect()->route('indexy.indexy')->with('message', 'usuario nao encontrado');
        }
        return view('tester.usertester.edit', compact('user'));
    }

    public function update(Request $request, string $id){
        //dd('atualizando');
        if (!$user = User::find($id)) {
            return back()->with('message', 'usuario nao encontrado');
        }
        //pode passar coluna por coluna
        //$user->name = $reqest->name
        $user->update($request->only([
            'name',
            'email',
        ]));

        return redirect()
            ->route('indexy.indexy')
            ->with('success', 'usuario atualizado com sucesso');
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
