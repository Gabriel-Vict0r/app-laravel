@extends('admin.users.layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')
    <h1>Usuários</h1>

    <x-alert></x-alert>

    <a href="{{ route('users.create') }}" class="text-blue-500">Novo</a>
    <table>
        <thread>
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Ações</td>
            </tr>
        </thread>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.index', $user->id) }}" class=" text-blue-500 p-5">Editar</a>
                        <a href="{{ route('users.show', $user->id) }}" class="text-green-500 p-5">Detalhes</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário no banco</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
@endsection
