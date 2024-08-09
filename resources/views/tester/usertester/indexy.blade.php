@extends('tester.layouts.app')

@section('title', 'Listagem de Usuário')

@section('content')
    <h1>Usuários</h1>
    <a href="{{ route('users.create') }}">Novo Usuário</a>

    <x-alert/>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <!--@foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>--</td>
                </tr>
            @endforeach-->

            <!--vc pode usar o forelse e o empty, pra caso nao haja registro-->
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colapson="100">Nenhum usuário</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}

@endsection