@extends('tester.layouts.app')

@section('title', 'Criar Novo usuário')

@section('content')
    <h1>Novo Usuário</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.create') }}" method="POST">
        <!--<input type="text" name="_token" value="{{ csrf_token() }}">-->
        @csrf()
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <!--old eh um helper q identifca se ja existe um valor na sessão -->
        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
@endsection