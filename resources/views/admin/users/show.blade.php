@extends('admin.layouts.app')
@section('title', 'Detalhes do Usuário')

@section('content')
    <h1>Editar o Usuário</h1> 
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>
    <x-alert>
    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Excluir</button>
    </form>
    @endcan
@endsection

