@extends('tester.layouts.app')

@section('title', 'Editar usuário')

@section('content')
    <h1>Editar usuário {{ $user->name }}</h1>

    <x-alert/>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        @csrf()
        <!--<input type="text" name="_method" value="PUT">-->
        @method('put')
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
        <!--old eh um helper q identifca se ja existe um valor na sessão -->
        <input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
@endsection