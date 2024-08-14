@extends('admin.users.partials.form')
@section('title', 'criar novo usuario usuarios')

@section('content')
    <h1>Novo Usuário</h1>
    <x-alert/> 
    <form action="{{ route('users.store') }}" method="POST">
    <!--input -token ta validando o token da sessao com o do form
    <input type="text" name="_token" value="{{ csrf_token() }}"> -->                
        @csrf()
        @include('admin.users.partials.form')
    </form>
@endsection

