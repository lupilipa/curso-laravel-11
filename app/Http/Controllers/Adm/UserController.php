<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        //$users = User::all();
        //dd($users);
        //all e get funcionam do mesmo jeito
        //paginação
        $users = User::paginate(20);
        return view('adm.users.index', compact('users'));
    }

    public function create(){
        return view('adm.users.create');
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
		User::create($request->validated()); 
		return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com sucesso!');
    }

    public function edit(string $id){
        //dd($id);
        //$user = User::where('id', '=', $id)->first();
        //$user = User::where('id', $id)->first();
        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado!');
        }
        return view('adm.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, string $id){
        //dd('atualizando');
        if (!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado!');
        }
        //pode passar coluna por coluna
        //$user->name = $request->name
        $data = $request->only('name', 'email');
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário atualizado com sucesso!');
    }

    public function show(string $id){
        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado!');
        }
        return view('adm.users.show', compact('user'));
    }

    public function destroy(string $id){
        //if(Gate::denies('is-admin')){
        //    return back()->with('message', 'vc nao eh admin');
        //}

        if (!$user = User::find($id)) {
            return redirect()
                ->route('users.index')
                ->with('message', 'Usuário não encontrado!');
        }

        if (Auth::user()->id === $user->id) {
            return back()->with('message', 'Você é administrador! 😅 Não pode se deletar...');
        }

        $user->delete();
        return redirect()
                ->route('users.index')
                ->with('message', 'Usuário deletado com sucesso!');
    }

    public function index1(){
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
        return view('adm.users.index1', compact('user'));
    }

}