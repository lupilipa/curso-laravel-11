<h1>Novo Mano Parceiro Truta Cria</h1>

<form action="{{ route('users.store') }}" method="POST">
<!--input -token ta validando o token da sessao com o do form
 <input type="text" name="_token" value="{{ csrf_token() }}"> -->
    
    @csrf()
    <input type="text" name="name" placeholder="nome">
    <input type="text" name="email" placeholder="E-mail">
    <input type="text" name="password" placeholder="Senha">
    <button type="submit">Enviar</button>
</form>