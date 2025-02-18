@extends('admin.users.layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')
    <x-alert></x-alert>

    <a href="{{ route('users.create') }}" class="bg-gray-300 text-gray-900 p-3 px-11 m-5 rounded-3xl">Novo</a>
    <table class="m-5 p-5 w-5/6">
        <thread>
            <tr>
                <td class="dark:bg-gray-800 text-gray-400 p-2 border-b border-solid border-gray-400 p-5">Nome</td>
                <td class="dark:bg-gray-800 text-gray-400 p-2 border-b border-solid border-gray-400 p-5">E-mail</td>
                <td class="dark:bg-gray-800 text-gray-400 p-2 border-b border-solid border-gray-400 p-5">Ações</td>
            </tr>
        </thread>
        <tbody>
            @forelse ($users as $user)
                <tr class="">
                    <td class="dark:bg-gray-700 text-gray-400 p-2 border-b border-solid border-gray-400">{{ $user->name }}
                    </td>
                    <td class="dark:bg-gray-700 text-gray-400 p-2 border-b border-solid border-gray-400">{{ $user->email }}
                    </td>
                    <td class="dark:bg-gray-700 text-gray-400 p-2 border-b border-solid border-gray-400">
                        <a href="{{ route('users.index', $user->id) }}"
                            class=" bg-blue-600 p-2 rounded-2xl text-white">Editar</a>
                        <a href="{{ route('users.show', $user->id) }}"
                            class="bg-green-600 p-2 rounded-2xl text-white">Detalhes</a>
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
