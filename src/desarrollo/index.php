<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Evento Tecnología</title>
</head>
<body>
    <h1>Registro al Evento de Tecnología</h1>
    <form action="receive.php" method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre"><br><br>

        <label>Apellido</label>
        <input type="text" name="apellido"><br><br>

        <label>Email</label>
        <input type="text" name="email"><br><br>

        <label>Días que asistirá</label><br>
        <input type="checkbox" name="dias[]" value="Dia 1"> Día 1<br>
        <input type="checkbox" name="dias[]" value="Dia 2"> Día 2<br>
        <input type="checkbox" name="dias[]" value="Dia 3"> Día 3<br><br>

        <label>Perfil</label>
        <select name="perfil">
            <option value="Estudiante">Estudiante</option>
            <option value="Profesional">Profesional</option>
            <option value="Ingresante">Ingresante</option>
        </select><br><br>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
