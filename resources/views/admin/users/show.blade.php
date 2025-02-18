@extends('admin.users.layouts.app')
@section('title', 'Detalhes do usuário')

@section('content')
    <h1>Detalhes do usuário</h1>

    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>

    <x-alert></x-alert>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf()
        @method('delete')
        <button type="submit" class="p-5 bg-red-900 text-black appearance-none">Deletar</button>
    </form>
@endsection
