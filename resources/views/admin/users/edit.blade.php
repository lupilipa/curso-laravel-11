@extends('admin.users.layouts.app')
@section('title', 'Editar o Usuário')

@section('content')
    <h1>Editar o Usuário {{ $user->name }}</h1>
 
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf()
        @method('put')
        <input type="text" name="name" placeholder="nome" value="{{ $user->name }}">
        <input type="text" name="email" placeholder="E-mail" value="{{ $user->email }}">
        <input type="text" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
    
@endsection

