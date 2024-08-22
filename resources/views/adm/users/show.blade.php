@extends('adm.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <div class="mb-4">
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
            </div>
        </div>
    </div>
</div>
@endsection