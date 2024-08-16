@extends('admin.layouts.app')
@section('title', 'Editar o Usuário')

@section('content')
    <h1>Editar o Usuário {{ $user->name }}</h1> 
    @include('admin.alert.partials')
    <div class="py" 
    <h2 class="text-xl font-semibold text-black dark:text-white">Editar Usuario</h2>
    </div>
    <form action="{{ route('users.update', $user->id) }}" method="POST">        
        @method('put')
        @include('admin.users.partials.form')
    </form>
    
@endsection

