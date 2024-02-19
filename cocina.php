<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Cocina</title>
</head>
<body>

<h1>Inventario de Cocina</h1>

<?php
// Definir el inventario de la cocina como un array asociativo
$inventario = array(
    "Manzanas" => 2,
    "Plátanos" => 3,
    "Naranjas" => 8,
    "Leche" => 0,
    "Huevos" => 12
);

// Mostrar el inventario en una lista
echo "<ul>";
foreach ($inventario as $item => $cantidad) {
    echo "<li>$item: $cantidad</li>";
}
echo "</ul>";
?>

</body>
</html>