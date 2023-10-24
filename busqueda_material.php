<?php
require("../conexion.php"); // Asegúrate de que esta línea sea igual a la conexión a la base de datos en tu proyecto

if (isset($_GET["query"])) {
    $query = $_GET["query"];
    
    // Realiza la consulta SQL para buscar materiales que coincidan con el código o nombre
    $sql = "SELECT * FROM producto WHERE codigo LIKE '%$query%' OR descripcion LIKE '%$query%'";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        // Itera a través de los resultados y muestra una lista de materiales
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>" . $row["codigo"] . " - " . $row["descripcion"] . "</p>";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }
}
?>
