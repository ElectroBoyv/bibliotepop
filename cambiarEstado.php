/**
 * Agrega los estados de los libros en la base de datos y permite cambiar su estado entre disponible y prestado.
 * @param {string} host - Dirección del servidor de base de datos
 * @param {string} usuario - Nombre del usuario para la base de datos
 * @param {string} password - Contraseña para ingresar a la base de datos
 * @param {string} base_datos - Nombre de la base de datos
 * @param {string} conexion - Conexión con la base de datos
 */

<?php
if (
    $_SERVER["REQUEST_METHOD"] == "POST"
    && isset($_POST['id'])
    && isset($_POST['actual'])
) {
    $host = "pdbXX.awardspace.net"; // Reemplaza por tus datos de AwardSpace
    $usuario = "4794849_pruebadb";
    $password = "Pruebadb67";
    $base_datos = "4794849_pruebadb";
    $conexion = new mysqli($host, $usuario, $password, $base_datos);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $id = intval($_POST['id']);
    $estado_actual = intval($_POST['actual']);

    // Si estaba disponible (1), ahora será prestado (0). Si estaba prestado (0), será disponible (1).
    $nuevo_estado = ($estado_actual === 1) ? 0 : 1;

    $sql = "UPDATE libros SET disponible = $nuevo_estado WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        // Redirecciona de vuelta con un parámetro de éxito de actualización
        header("Location: index.php?updated=1");
    } else {
        echo "Error al actualizar el estado: " . $conexion->error;
    }

    $conexion->close();
} else {
    header("Location: index.php");
}
?>
