<?php
// Recibir datos
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$dias = isset($_POST['dias']) ? $_POST['dias'] : [];
$perfil = isset($_POST['perfil']) ? $_POST['perfil'] : "";

$validado = true;

// Validación nombre
if (!empty($nombre) && strlen($nombre) >= 2 && strlen($nombre) <= 20) {
    // correcto
} else {
    echo "Error en el nombre<br>";
    $validado = false;
}

// Validación apellido
if (!empty($apellido) && strlen($apellido) >= 2 && strlen($apellido) <= 20) {
    // correcto
} else {
    echo "Error en el apellido<br>";
    $validado = false;
}

// Validación email
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // correcto
} else {
    echo "Error en el email<br>";
    $validado = false;
}

// Validación días
if (count($dias) > 0) {
    // correcto
} else {
    echo "Debe seleccionar al menos un día<br>";
    $validado = false;
}

// Validación perfil
if (!empty($perfil)) {
    // correcto
} else {
    echo "Error en el perfil<br>";
    $validado = false;
}

// Resultado final
if ($validado) {
    echo "<h2>Registro exitoso!</h2>";
    echo "<p>Te has registrado correctamente al evento de tecnología.</p>";
} else {
    echo "<h2>Hay errores en el formulario</h2>";
}
?>
