<h1>Novo usuário</h1>


<form action="{{route('users.store')}}" method="POST">
    @csrf()
    <input type="text" name="name" id="Nome">
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <button type="submit">Enviar</button>
</form>
