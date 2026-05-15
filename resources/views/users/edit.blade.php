<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
</head>
<body>
    <h1>Editar usuario</h1>

    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <br>
        <label>Contraseña:</label>
        <input type="password" name="password">
        <br>
        <label>Fecha nacimiento:</label>
        <input type="date" name="birthdate" value="{{ $user->birthdate }}" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <br>
</body>
</html>