<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Usuários</h1>

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
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="100">Nenhum usuário no banco</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{$users->links()}}
</body>

</html>