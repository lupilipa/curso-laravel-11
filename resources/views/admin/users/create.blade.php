@extends('admin.layouts.app')
@section('title', 'criar novo usuario usuarios')

@section('content')
    <h1>Novo Usuário</h1>
    <form action="{{ route('users.store') }}" method="POST">
    <!--input -token ta validando o token da sessao com o do form
    <input type="text" name="_token" value="{{ csrf_token() }}"> -->                
        @include('admin.users.partials.form')
    </form>
@endsection

