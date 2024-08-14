@csrf()
<input type="text" name="name" placeholder="nome" value="{{ old('name')}}">
<input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
<input type="text" name="password" placeholder="Senha">
<button type="submit">Enviar</button>