<?php
// Conecta a la base de datos MySQL
$servername = "debian-servidor.gonzalezgiron.com";
$username = "root";
$password = "usuario";
$database = "personas";
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Realiza la consulta para obtener todos los usuarios
$sql = "SELECT * FROM empleado";
$result = $conn->query($sql);

// Muestra los resultados de la consulta
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nombre</th><th>edad</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["edad"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>

