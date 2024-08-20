@extends('admin.layouts.app')

@section('title', 'Editar usuário')

@section('content')
    <div class="py-6">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-white">
                    Editar Usuário {{ $user->name }}
            </h2>
    </div>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        <!--<input type="text" name="_method" value="PUT">-->
        @method('put')
        @include('admin.users.partials.form')
    </form>
@endsection