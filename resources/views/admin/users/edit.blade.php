@extends('admin.users.layouts.app')
@section('title', 'Editar o usuário')

@section('content')
    <h1>Editar o usuário {{ $user->name }}</h1>

    <x-alert></x-alert>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
  
        @method('put')
        @include('admin.users.partials.form')
    </form>
@endsection
