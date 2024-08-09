@extends('tester.layouts.app')

@section('title', 'Criar Novo usuário')

@section('content')
    <h1>Novo Usuário</h1>

    <form action="{{ route('users.create') }}" method="POST">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        @csrf()
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
@endsection