SELECT articulo.nombre,articulo.imagen,articulo.slug as precio ,categoria.nombre as categorias, articulo.id_categoria FROM articulo INNER JOIN categoria ON articulo.id_categoria=categoria.id
## Sistema web de ventas y compras

- CRUD Artículos
- CRUD Categorías
- CRUD Proveedores
- CRUD Ingreso (cabecera y detalle de ingreso)
- CRUD Ventas (cabecera y detalle de venta)
- CRUD usuarios
- Carrito de ventas y paypal

primero debes ejecutar--
composer install
.evn ->modificar la base de datos
php artisan key:generate
php artisan migrate


Laravel 5.5, PHP 7, jQuery, Bootstrap, MySQL

