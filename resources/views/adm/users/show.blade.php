@extends('adm.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <div class="py-6">
		    <h2 class="font-semibold text-xl text-gray-800">
				    Informações de {{ $user->name }}
		    </h2>
    </div>
    <ul class="max-w-md space-y-1 text-purple-900 list-disc px-8">
        <li class="text-lg px-2">Nome: {{ $user->name }}</li>
        <li class="text-lg px-2">Email: {{ $user->email }}</li>
    </ul>
    <x-alert />
    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <x-third-button  type="submit">
                Deletar {{ $user->name }}
        </x-third-button>
    </form>
    @endcan
@endsection