@extends('admin.layouts.app')

@section('title', 'Criar Novo usuário')

@section('content')
    <div class="py-6">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-white">
                    Novo Usuário
            </h2>
    </div>

    <form action="{{ route('users.store') }}" method="POST">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        @include('admin.users.partials.form')
    </form>
@endsection