@extends('admin.users.layouts.app')
@section('title', 'criar novo usuario usuarios')

@section('content')
    <h1>Novo Mano Parceiro Truta Cria</h1>
    <x-alert/>
 
    <form action="{{ route('users.store') }}" method="POST">
    <!--input -token ta validando o token da sessao com o do form
    <input type="text" name="_token" value="{{ csrf_token() }}"> -->
                
         @csrf()
        <input type="text" name="name" placeholder="nome" value="{{old('name')}}">
        <input type="text" name="email" placeholder="E-mail" value="{{old('email')}}">
        <input type="text" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
    
    @endsection

