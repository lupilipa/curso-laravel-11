@extends('tester.layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')
    <h1>Detalhes do usuário</h1>
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
    </ul>
    <x-alert/>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Deletar</button>
    </form>
@endsection