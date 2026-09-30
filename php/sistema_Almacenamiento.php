<?php

class SistemaAlmacenamiento {
    private $inventario = [];

    // 1. Agregar un producto
    public function agregarProducto($id, $nombre, $categoria, $cantidad) {
        foreach ($this->inventario as $item) {
            if ($item['id'] === $id) {
                echo "❌ Error: El producto con ID $id ya existe.<br>";
                return;
            }
        }
        
        $this->inventario[] = [
            'id' => $id,
            'nombre' => $nombre,
            'categoria' => $categoria,
            'cantidad' => $cantidad
        ];
        
        echo "✅ Producto \"$nombre\" agregado exitosamente.<br>";
    }

    // 2. Listar todos los productos
    public function listarProductos() {
        if (empty($this->inventario)) {
            echo "📦 El inventario está vacío.<br>";
            return;
        }
        
        echo "<br><strong>--- 📋 LISTA DE INVENTARIO ---</strong><br>";
        foreach ($this->inventario as $item) {
            echo "ID: {$item['id']} | Nombre: {$item['nombre']} | Categoría: {$item['categoria']} | Stock: {$item['cantidad']}<br>";
        }
        echo "-----------------------------------<br>";
    }

    // 3. Buscar producto por ID
    public function buscarPorId($id) {
        echo "<br>";
        foreach ($this->inventario as $item) {
            if ($item['id'] === $id) {
                echo "🔍 Producto encontrado: ID: {$item['id']}, Nombre: {$item['nombre']}, Categoría: {$item['categoria']}, Stock: {$item['cantidad']}<br>";
                return;
            }
        }
        echo "❌ No se encontró ningún producto con el ID $id.<br>";
    }

    // 4. Eliminar producto por ID
    public function eliminarProducto($id) {
        echo "<br>";
        foreach ($this->inventario as $index => $item) {
            if ($item['id'] === $id) {
                $eliminado = $this->inventario[$index]['nombre'];
                unset($this->inventario[$index]);
                $this->inventario = array_values($this->inventario);
                echo "🗑️ Producto eliminado: $eliminado<br>";
                return;
            }
        }
        echo "❌ No se pudo eliminar. ID $id no encontrado.<br>";
    }
}

// ==========================================
// PRUEBAS DEL SISTEMA
// ==========================================

echo "<h2>💻 Resultados del Sistema de Almacenamiento</h2>";

$miAlmacen = new SistemaAlmacenamiento();

// Agregamos algunos productos
$miAlmacen->agregarProducto(1, "Laptop Lenovo", "Tecnología", 5);
$miAlmacen->agregarProducto(2, "Mouse Inalámbrico", "Tecnología", 15);
$miAlmacen->agregarProducto(3, "Cafetera", "Hogar", 3);

// Listamos el inventario
$miAlmacen->listarProductos();

// Buscamos un producto
$miAlmacen->buscarPorId(2);

// Eliminamos un producto
$miAlmacen->eliminarProducto(3);

// Verificamos cómo quedó el inventario final
$miAlmacen->listarProductos();

?>