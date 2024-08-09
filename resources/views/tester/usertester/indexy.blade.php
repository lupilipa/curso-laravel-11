<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>
    <h1>Usuários</h1>

    <a href="{{ route('users.create') }}">Novo Usuário</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <!--@foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>--</td>
                </tr>
            @endforeach-->

            <!--vc pode usar o forelse e o empty, pra caso nao haja registro-->
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>--</td>
                </tr>
            @empty
                <tr>
                    <td colapson="100">Nenhum usuário</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
</body>
</html>