<?php
// 1. Datos de la trabajadora
$sueldoInicial = 1000.00; // Sueldo base
$estadoCivil = "casada";  // Puede ser "casada" o "soltera"
$tieneHijos = true;       // true (sí tiene) o false (no tiene)

// 2. Variables para almacenar los resultados
$porcentajeBono = 0;

// 3. Lógica para determinar el porcentaje de bonificación
if ($estadoCivil === "casada" && $tieneHijos) {
    $porcentajeBono = 0.10; // 10% de bono
} else if ($estadoCivil === "soltera") {
    $porcentajeBono = 0.05; // 5% de bono
} else {
    $porcentajeBono = 0;    // Sin bono en otros casos (ej. casada sin hijos)
}

// 4. Cálculos
$montoBono = $sueldoInicial * $porcentajeBono;
$sueldoTotal = $sueldoInicial + $montoBono;

// 5. Mostrar resultados en pantalla
echo "=== RESUMEN DE BONIFICACIÓN ===<br>";
echo "Sueldo inicial: $" . number_format($sueldoInicial, 2) . "<br>";
echo "Estado civil: " . $estadoCivil . "<br>";
echo "Tiene hijos: " . ($tieneHijos ? "Sí" : "No") . "<br>";
echo "-------------------------------<br>";
echo "Porcentaje de bono aplicado: " . ($porcentajeBono * 100) . "<br>";
echo "Monto del bono: $" . number_format($montoBono, 2) . "<br>";
echo "Sueldo total a recibir: $" . number_format($sueldoTotal, 2) . "<br>";
?>