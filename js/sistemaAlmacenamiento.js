// Definimos nuestro sistema de almacenamiento como un objeto
const sistemaAlmacenamiento = {
    inventario: [],

    // 1. Agregar un producto
    agregarProducto(id, nombre, categoria, cantidad) {
        const existe = this.inventario.some(item => item.id === id);
        if (existe) {
            console.log(`❌ Error: El producto con ID ${id} ya existe.`);
            return;
        }
        
        this.inventario.push({ id, nombre, categoria, cantidad });
        console.log(`✅ Producto "${nombre}" agregado exitosamente.`);
    },

    // 2. Listar todos los productos
    listarProductos() {
        if (this.inventario.length === 0) {
            console.log("📦 El inventario está vacío.");
            return;
        }
        console.log("--- 📋 LISTA DE INVENTARIO ---");
        console.table(this.inventario);
    },

    // 3. Buscar producto por ID
    buscarPorId(id) {
        const producto = this.inventario.find(item => item.id === id);
        if (producto) {
            console.log("🔍 Producto encontrado:", producto);
        } else {
            console.log(`❌ No se encontró ningún producto con el ID ${id}.`);
        }
    },

    // 4. Eliminar producto por ID
    eliminarProducto(id) {
        const index = this.inventario.findIndex(item => item.id === id);
        if (index !== -1) {
            const eliminado = this.inventario.splice(index, 1);
            console.log(`🗑️ Producto eliminado:`, eliminado[0].nombre);
        } else {
            console.log(`❌ No se pudo eliminar. ID ${id} no encontrado.`);
        }
    }
};

// ==========================================
// PRUEBAS DEL SISTEMA (Ejecuta esto después)
// ==========================================

// Agregamos algunos productos
sistemaAlmacenamiento.agregarProducto(1, "Laptop Lenovo", "Tecnología", 5);
sistemaAlmacenamiento.agregarProducto(2, "Mouse Inalámbrico", "Tecnología", 15);
sistemaAlmacenamiento.agregarProducto(3, "Cafetera", "Hogar", 3);

// Listamos el inventario en formato de tabla
sistemaAlmacenamiento.listarProductos();

// Buscamos un producto
sistemaAlmacenamiento.buscarPorId(2);

// Eliminamos un producto
sistemaAlmacenamiento.eliminarProducto(3);

// Verificamos cómo quedó el inventario final
sistemaAlmacenamiento.listarProductos();