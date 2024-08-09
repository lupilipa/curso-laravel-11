@extends('tester.layouts.app')

@section('title', 'Editar usuário')

@section('content')
    <h1>Editar usuário {{ $user->name }}</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        <!--<input type="text" name="_method" value="PUT">-->
        @method('put')
        @include('tester.usertester.partials.form')
    </form>
@endsection