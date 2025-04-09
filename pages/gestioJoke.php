<?php
$url = "https://api101.up.railway.app/joke";  

// Realizamos la solicitud GET para obtener los datos
$response = file_get_contents($url);

// Decodificamos la respuesta JSON
$data = json_decode($response, true);

// Comprobamos si los datos existen
if ($data) {
    echo "<h2>BROMA DEL DIA</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Autor</th><th>Chiste</th><th>Fuente</th><th>Acciones</th></tr>";

    // Mostramos los datos del único chiste
    echo "<tr>";
    echo "<td>" . htmlspecialchars($data['id']) . "</td>";  
    echo "<td>" . htmlspecialchars($data['author']) . "</td>";  
    echo "<td>" . htmlspecialchars($data['joke']) . "</td>";  
    echo "<td>" . htmlspecialchars($data['source']) . "</td>";  

    // Puedes ajustar estos enlaces si quieres que hagan algo con el ID
    echo "<td>
            <a href='deleteJoke.proc.php?id=" . htmlspecialchars($data['id']) . "'>Eliminar</a> |
            <a href='patchJoke.php?id=" . htmlspecialchars($data['id']) . "'>Actualizar</a> |
            <a href='putJoke.php?id=" . htmlspecialchars($data['id']) . "'>Modificacio Complerta</a>
          </td>";

    echo "</tr>";

    echo "</table>";
} else {
    echo "Error al obtener los datos de la API o no hay datos disponibles.";
}
?>
