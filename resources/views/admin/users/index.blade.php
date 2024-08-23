@extends('admin.layouts.app')

@section('title', 'Listagem de Usuário')

@section('content')
    <div class="py-1 mb-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-white">
                    Usuários
            </h2>
            <br>

            <a href="{{ route('users.create') }}"
                    class="text-black bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-500 dark:hover:bg-blue-500 focus:outline-none dark:focus:ring-black-800">
                    <i class="fa-solid fa-plus" aria-hidden="true"></i>
            Novo Usuário</a>
    </div>

    <x-alert />
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-4">Nome</th>
                        <th scope="col" class="px-6 py-4">E-mail</th>
                        <th scope="col" class="px-6 py-4">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800 text-sm font-light dark:black">
                    <!--@foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>--</td>
                        </tr>
                    @endforeach-->
                    <!--vc pode usar o forelse e o empty, pra caso nao haja registro-->
                    @forelse ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-400 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $user->name }}</td>
                            <td class="px-6 py-4">{{ $user->email }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                                    <br>
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

        <div class="py-4 mb-4">
    {{ $users->links() }}
    </div>
@endsection