@extends('tester.layouts.app')

@section('title', 'Tester')

@section('content')
    <h1>Olá {{ $user->name }}</h1>
@endsection