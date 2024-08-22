@extends('adm.layouts.app')

@section('title', 'Listagem de Usuário')

@section('content')

    <div class="py-1 mb-4">

			<x-third-button class="mt-4">
				<a href="{{ route('users.create') }}">
		    	Novo Usuário</a>
            </x-third-button>
    </div>

    <x-alert></x-alert>
		<div class="bg-purple dark:bg-gray-800 overflow-hidden shadow-sm">
		    <table class="w-full text-sm text-left text-black">
		        <thead class="text-sm bg-light-purple-dark text-white">
		            <tr>
		                <th scope="col" class="px-6 py-4">NOME</th>
		                <th scope="col" class="px-6 py-4">E-MAIL</th>
		                <th scope="col" class="px-6 py-4">AÇÕES</th>
		            </tr>
		        </thead>
		        <tbody class="text-black text-sm font-light">
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

							<x-fourth-button class="mt-4">
							<a href="{{ route('users.edit', $user->id) }}">Edit</a>
							</x-fourth-button>
							<x-fourth-button class="mt-4">
							<a href="{{ route('users.show', $user->id) }}">Detalhes</a>
							</x-fourth-button>
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