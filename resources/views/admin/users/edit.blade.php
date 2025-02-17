@extends('admin.users.layouts.app')
@section('title', 'Editar o usuário')

@section('content')
    <h1>Editar o usuário {{ $user->name }}</h1>

    <x-alert></x-alert>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf()
        @method('put')
        <input type="text" name="name" id="Nome" placeholder="nome" value="{{ $user->name }}">
        <input type="email" name="email" id="email" placeholder="email" value="{{ $user->email }}">
        <input type="password" name="password" id="password" placeholder="senha">
        <button type="submit">Enviar</button>
    </form>
@endsection
