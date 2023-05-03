<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta a la base de datos MySQL
    $servername = "localhost";
    $username = "root";
    $password = "usuario";
    $database = "personas";
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    // Obtiene los datos del formulario
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    
    // Prepara la consulta SQL para insertar los datos
    $sql = "INSERT INTO empleado (nombre, edad) VALUES ('$nombre', '$edad')";
    
    // Ejecuta la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar los datos: " . $conn->error;
    }
    
    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
