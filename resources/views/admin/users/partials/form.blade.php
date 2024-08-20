<x-alert/>
@csrf()
<input type="text" name="name" placeholder="Nome" value="{{$user->name ?? old('name')}}">
<input type="text" name="email" placeholder="E-mail" value="{{$user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Senha">
<button type="submit"  class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Enviar</button>