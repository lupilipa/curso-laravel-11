@extends('adm.layouts.app')

@section('title', 'Listagem de Usuário')

@section('content')
    <div class="py-1 mb-4">
		    <h2 class="font-semibold text-xl text-gray-800">
				    Usuários
		    </h2>

		    <a href="{{ route('users.create') }}"
				    class="text-black bg-blue-700 hover:bg-blue-800">
				    <i class="fa-solid fa-plus" aria-hidden="true"></i>
		    Novo Usuário</a>
    </div>

    <x-alert />
		<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm">
		    <table class="w-full text-sm text-left text-gray-500">
		        <thead class="text-xs text-gray-700 uppercase bg-gray-500">
		            <tr>
		                <th scope="col" class="px-6 py-4">Nome</th>
		                <th scope="col" class="px-6 py-4">Email</th>
		                <th scope="col" class="px-6 py-4">Ações</th>
		            </tr>
		        </thead>
		        <tbody class="text-gray-600 text-sm font-light">
		            <!--@foreach ($users as $user)
		                <tr>
		                    <td>{{ $user->name }}</td>
		                    <td>{{ $user->email }}</td>
		                    <td>--</td>
		                </tr>
		            @endforeach-->

		            <!--vc pode usar o forelse e o empty, pra caso nao haja registro-->
		            @forelse ($users as $user)
		                <tr class="bg-white border-b">
		                    <td class="px-6 py-4">{{ $user->name }}</td>
		                    <td class="px-6 py-4">{{ $user->email }}</td>
		                    <td class="px-6 py-4">
		                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
		                        <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
		                    </td>
		                </tr>
		            @empty
		                <tr>
		                    <td colapson="100">Nenhum usuário</td>
		                </tr>
		            @endforelse
		        </tbody>
		    </table>
		</div>

		<div class="py-4">
    {{ $users->links() }}
    </div>
@endsection