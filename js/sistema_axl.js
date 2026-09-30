// 1. Datos de la trabajadora
let sueldoInicial = 1000; // Sueldo base en la moneda local
let estadoCivil = "casada"; // Puede ser "casada" o "soltera"
let tieneHijos = true;     // true (sí tiene) o false (no tiene)

// 2. Variables para almacenar los resultados
let porcentajeBono = 0;
let montoBono = 0;
let sueldoTotal = 0;

// 3. Lógica para determinar el porcentaje de bonificación
if (estadoCivil === "casada" && tieneHijos) {
    porcentajeBono = 0.10; // 10% de bono
} else if (estadoCivil === "soltera") {
    porcentajeBono = 0.05; // 5% de bono
} else {
    porcentajeBono = 0;    // Sin bono en otros casos (ej. casada sin hijos)
}

// 4. Cálculos
montoBono = sueldoInicial * porcentajeBono;
sueldoTotal = sueldoInicial + montoBono;

// 5. Mostrar resultados en consola
console.log("=== RESUMEN DE BONIFICACIÓN ===");
console.log("Sueldo inicial: $" + sueldoInicial);
console.log("Estado civil: " + estadoCivil);
console.log("Tiene hijos: " + (tieneHijos ? "Sí" : "No"));
console.log("-------------------------------");
console.log("Porcentaje de bono aplicado: " + (porcentajeBono * 100) + "%");
console.log("Monto del bono: $" + montoBono);
console.log("Sueldo total a recibir: $" + sueldoTotal);