@extends('adm.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <div class="py-6">
		    <h2 class="font-semibold text-xl text-gray-600">
				    Editando: {{ $user->name }} ({{$user->email}})
		    </h2>
    </div>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        <!--<input type="text" name="_method" value="PUT">-->
        @method('put')
        @include('adm.users.partials.form')
    </form>
@endsection