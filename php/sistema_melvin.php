<?php
$tiendaJuegos = [
    ["nombre" => "Elden Ring", "precio" => 60, "descuento" => 10, "stock" => 5, "enOferta" => true],
    ["nombre" => "Minecraft",  "precio" => 30, "descuento" => 0,  "stock" => 8, "enOferta" => false],
    ["nombre" => "GTA V",      "precio" => 25, "descuento" => 20, "stock" => 2, "enOferta" => true]
];

$juegoSeleccionado = $tiendaJuegos[0]; 

$precioFinal = $juegoSeleccionado["precio"] - ($juegoSeleccionado["precio"] * $juegoSeleccionado["descuento"]) / 100;

echo "🎮 Producto: " . $juegoSeleccionado["nombre"] . "</br>";
echo "🎮 Precio Original: $" . $juegoSeleccionado["precio"] . "</br>";
echo "🎮 Descuento: " . $juegoSeleccionado["descuento"] ."%" . "</br>";
echo "🎮 Precio Final: $" . number_format($precioFinal, 2) . "</br>";
echo "🎮 Stock Disponible: " . $juegoSeleccionado["stock"] . "</br>";
echo "🎮 En oferta: " . ($juegoSeleccionado["enOferta"] ? "Sí" : "No") . "</br>";

echo "</br>"."--- SIMULACIÓN DE COMPRA ---"."</br>";
$cantidadComprada = 2;

if ($cantidadComprada <= $juegoSeleccionado["stock"]) {
    $juegoSeleccionado["stock"] -= $cantidadComprada;
    $totalPagar = $precioFinal * $cantidadComprada;

    echo "✅ Compra realizada con éxito"."</br>";
    echo "💳 Total pagado: $" . number_format($totalPagar, 2) ."</br>";
    echo "📦 Stock actualizado de " . $juegoSeleccionado["nombre"] . ": " . $juegoSeleccionado["stock"] ."</br>";
} else {
    echo "❌ No hay suficiente stock disponible\n";
}   
?>