<x-alert></x-alert>
@csrf()
<input type="text" name="name" id="Nome" placeholder="nome" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" id="email" placeholder="email" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password" id="password" placeholder="senha">
<button type="submit">Enviar</button>
