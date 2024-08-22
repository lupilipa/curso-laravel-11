@extends('adm.layouts.app-form')

@section('title', 'Criar Novo usuário')
@section('msg', 'Informe os dados')

@section('content')

                <form action="{{ route('users.create') }}" method="POST">
                <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
                @include('adm.users.partials.form')
                </form>

@endsection