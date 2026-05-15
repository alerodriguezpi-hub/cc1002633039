<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="{{ asset('js/promedio.js') }}"></script>
    <h1>Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>email</th>
                <th>fecha de cumpleaños</th>
                <th>edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->birthday}}</td>
                    <a href="{{route('users.edit',['id'=> $user->id])}}">Editar</a>
                </td>
                <td>
                    <form action="{{route('users.destroy',['id' => $user->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Nuevo usuario</h2>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <label>Nombre:</label> <input type="text" name="name" required><br>
        <label>Email:</label> <input type="email" name="email" required><br>
        <label>Contraseña:</label> <input type="password" name="password" required><br>
        <label>Fecha nacimiento:</label> <input type="date" name="birthday" required><br>
        <button type="submit">Crear usuario</button>
    </form>
</body>
</html>