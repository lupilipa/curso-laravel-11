@extends('tester.layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')
    <div class="py-6">
		    <h2 class="font-semibold text-xl text-gray-800">
				    Detalhes do Usuário {{ $user->name }}
		    </h2>
    </div>
    <ul class="max-w-md space-y-1 text-gray-500 list-disc">
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
    </ul>
    <x-alert />
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit"
			       class ="text-black bg-red-700 hover:bg-red-800">Deletar</button>
    </form>
@endsection