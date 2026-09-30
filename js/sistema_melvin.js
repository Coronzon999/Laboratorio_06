// Catálogo de videojuegos almacenado en un Array de objetos
const tiendaJuegos = [
    { nombre: "Elden Ring", precio: 60, descuento: 10, stock: 5, enOferta: true },
    { nombre: "Minecraft", precio: 30, descuento: 0, stock: 8, enOferta: false },
    { nombre: "GTA V", precio: 25, descuento: 20, stock: 2, enOferta: true }
];

const juegoSeleccionado = tiendaJuegos[0]; 

let precioFinal = juegoSeleccionado.precio - (juegoSeleccionado.precio * juegoSeleccionado.descuento) / 100;

// Mostrar información del juego
console.log("🎮 Producto:", juegoSeleccionado.nombre);
console.log("🎮 Precio Original: $", juegoSeleccionado.precio);
console.log("🎮 Descuento:", juegoSeleccionado.descuento + "%");
console.log("🎮 Precio Final: $", precioFinal.toFixed(2));
console.log("🎮 Stock Disponible:", juegoSeleccionado.stock);
console.log("🎮 En oferta:", juegoSeleccionado.enOferta ? "Sí" : "No");

console.log("</br>","--- SIMULACIÓN DE COMPRA ---");
let cantidadComprada = 2;

if (cantidadComprada <= juegoSeleccionado.stock) {
    juegoSeleccionado.stock -= cantidadComprada;
    let totalPagar = precioFinal * cantidadComprada;

    console.log("✅ Compra realizada con éxito");
    console.log("💳 Total pagado: $", totalPagar.toFixed(2));
    console.log("📦 Stock actualizado de", juegoSeleccionado.nombre + ":", juegoSeleccionado.stock);
} else {
    console.log("❌ No hay suficiente stock disponible");
}