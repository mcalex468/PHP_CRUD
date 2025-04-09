<?php
$url = "https://api101.up.railway.app/jokes";  

// Realizamos la solicitud GET para obtener los datos
$response = file_get_contents($url);

// Decodificamos la respuesta JSON
$data = json_decode($response, true);

if ($data && is_array($data)) {
    echo "<h2>Gestión de Chistes</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Título</th><th>Precio</th><th>Acciones</th></tr>";

    // Recorremos todos los chistes
    foreach ($data as $joke) {
        // Mostramos el ID, el título y el precio de cada chiste
        echo "<tr>";
        echo "<td>" . htmlspecialchars($joke['id']) . "</td>";  
        echo "<td>" . htmlspecialchars($joke['title']) . "</td>";  
        echo "<td>" . htmlspecialchars($joke['price']) . "</td>";  

        echo "<td>
                <a href='editJoke.php?id=" . htmlspecialchars($joke['id']) . "'>Editar</a> |
                <a href='deleteJoke.php?id=" . htmlspecialchars($joke['id']) . "'>Eliminar</a> |
                <a href='updateJoke.php?id=" . htmlspecialchars($joke['id']) . "'>Actualizar</a> |
                <a href='viewJoke.php?id=" . htmlspecialchars($joke['id']) . "'>Ver</a>
              </td>";

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Error al obtener los datos de la API.";
}
?>
