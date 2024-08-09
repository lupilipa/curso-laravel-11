@extends('tester.layouts.app')

@section('title', 'Criar Novo usuário')

@section('content')
    <h1>Novo Usuário</h1>

    <form action="{{ route('users.create') }}" method="POST">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        @include('tester.usertester.partials.form')
    </form>
@endsection