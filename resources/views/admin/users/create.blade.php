@section('title', 'Criação de usuário')

@section('content')
    <h1>Novo usuário</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('users.store') }}" method="POST">
        @csrf()
        <input type="text" name="name" id="Nome" placeholder="nome" value="{{ old('name') }}">
        <input type="email" name="email" id="email" placeholder="email" value="{{ old('email') }}">
        <input type="password" name="password" id="password" placeholder="senha">
        <button type="submit">Enviar</button>
    </form>
