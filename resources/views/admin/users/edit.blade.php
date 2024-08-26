@extends('admin.layouts.app')

@section('title', 'Editar usuário')

@section('content')
    <div class="py-6 mb-4">
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
    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Excluir Usuário</button>
    </form>
    @endcan
@endsection