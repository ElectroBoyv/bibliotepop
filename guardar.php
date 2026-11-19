/** 
 *  
 * Guarda los datos de un libro en la base de datos para luego mostrarla en la página.
 * @param {string} host - Dirección del servidor de base de datos
 * @param {string} usuario - Nombre del usuario para la base de datos
 * @param {string} password - Contraseña para ingresar a la base de datos
 * @param {string} base_datos - Nombre de la base de datos
 * @param {string} conexion - Conexión con la base de datos
 */

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$host = "fdb1029.awardspace.net"; // Mismos datos de conexión
$usuario = "4794849_pruebadb";
$password = "Pruebadb67";
$base_datos = "4794849_pruebadb";
$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}
// Limpiar variables para evitar inyecciones SQL básicas
$titulo = $conexion->real_escape_string($_POST['titulo']);
$autor = $conexion->real_escape_string($_POST['autor']);
$isbn = $conexion->real_escape_string($_POST['isbn']);
$sql = "INSERT INTO libros (titulo, autor, isbn) VALUES ('$titulo', '$autor',
'$isbn')";
if ($conexion->query($sql) === TRUE) {
// Redireccionar de vuelta a la página principal si se guardó con éxito
header("Location: index.php?success=1");
} else {
echo "Error al guardar el libro: " . $conexion->error;
}
$conexion->close();
}
?>
