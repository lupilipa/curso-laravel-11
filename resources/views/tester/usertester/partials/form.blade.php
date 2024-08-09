<x-alert/>

@csrf()

<input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
<!--old eh um helper q identifca se ja existe um valor na sessão -->
<input type="email" name="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Senha">
<button type="submit">Enviar</button>