@extends('adm.layouts.app-form')

@section('title', 'Editar Usuário')
@section('msg', 'Editando: ' . $user->name . ' (' . $user->email . ')')

@section('content')

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        <!--<input type="text" name="_method" value="PUT">-->
        @method('put')
        @include('adm.users.partials.form')
    </form>
    
@endsection