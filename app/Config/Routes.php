<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//pagina de inicio
$routes->get('/', 'HomeController::index');
$routes->get('nosotros', 'HomeController::informacion');

//Procesos de Login
$routes->get('login', 'LoginController::index');

//Estado
$routes->get('estados', 'EstadoController::index');
$routes->post('agregar_estado', 'EstadoController::agregar');
$routes->get('eliminar_estado/(:num)', 'EstadoController::eliminar/$1');
$routes->get('buscar_estado/(:num)', 'EstadoController::buscar/$1');
$routes->post('modificar_estado', 'EstadoController::modificar');

//Clientes
$routes->get('clientes', 'ClientesController::index');
$routes->post('agregar_cliente', 'ClienteController::agregar');
$routes->get('eliminar_cliente/(:num)', 'ClienteController::eliminar/$1');
$routes->get('buscar_cliente/(:num)', 'ClienteController::buscar/$1');
$routes->post('modificar_cliente', 'ClienteController::modificar');

//metodo_pago
$routes->get('metodos_pago', 'MetodoPagoController::index');
$routes->post('agregar_metodo_pago', 'MetodoPagoController::agregar');
$routes->get('eliminar_metodo_pago/(:num)', 'MetodoPagoController::eliminar/$1');
$routes->get('buscar_metodo_pago/(:num)', 'MetodoPagoController::buscar/$1');
$routes->post('modificar_metodo_pago', 'MetodoPagoController::modificar');

//pagos
$routes->get('pagos', 'PagoController::index');
$routes->post('agregar_pago', 'PagoController::agregar');
$routes->get('eliminar_pago/(:num)', 'PagoController::eliminar/$1');
$routes->get('buscar_pago/(:num)', 'PagoController::buscar/$1');
$routes->post('modificar_pago', 'PagoController::modificar');

//Pedidos
$routes->get('pedidos', 'PedidoController::index');
$routes->post('agregar_pedido', 'PedidoController::agregar');
$routes->get('eliminar_pedido/(:num)', 'PedidoController::eliminar/$1');
$routes->get('buscar_pedido/(:num)', 'PedidoController::buscar/$1');
$routes->post('modificar_pedido', 'PedidoController::modificar');

//detalle pedidos
$routes->get('detalle_pedidos', 'DetallePedidoController::index');
$routes->post('agregar_detalle_pedido', 'DetallePedidoController::agregar');
$routes->get('eliminar_detalle_pedido/(:num)', 'DetallePedidoController::eliminar/$1');
$routes->get('buscar_detalle_pedido/(:num)', 'DetallePedidoController::buscar/$1');
$routes->post('modificar_detalle_pedido', 'DetallePedidoController::modificar');

//productos
$routes->get('ver_productos', 'ProductoController::verProductos'); // Vista pública para ver categorías
$routes->get('productos', 'ProductoController::index');
$routes->post('agregar_producto', 'ProductoController::agregar');
$routes->get('eliminar_producto/(:num)', 'ProductoController::eliminar/$1');
$routes->get('buscar_producto/(:num)', 'ProductoController::buscar/$1');
$routes->post('modificar_producto', 'ProductoController::modificar');

//empleado
$routes->get('empleados', 'EmpleadoController::index');
$routes->post('agregar_empleado', 'EmpleadoController::agregar');
$routes->get('eliminar_empleado/(:num)', 'EmpleadoController::eliminar/$1');
$routes->get('buscar_empleado/(:num)', 'EmpleadoController::buscar/$1');
$routes->post('modificar_empleado', 'EmpleadoController::modificar');

//marcas
$routes->get('ver_marcas', 'MarcaController::verMarcas'); // Vista pública para ver categorías
$routes->get('marcas', 'MarcaController::index');
$routes->post('agregar_marca', 'MarcaController::agregar');
$routes->get('eliminar_marca/(:num)', 'MarcaController::eliminar/$1');
$routes->get('buscar_marca/(:num)', 'MarcaController::buscar/$1');
$routes->post('modificar_marca', 'MarcaController::modificar');

//categorias
$routes->get('ver_categorias', 'CategoriasController::verCategorias'); // Vista pública para ver categorías
$routes->get('categorias', 'CategoriasController::index');
$routes->post('agregar_categoria', 'CategoriasController::agregar');
$routes->get('eliminar_categoria/(:num)', 'CategoriasController::eliminar/$1');
$routes->get('buscar_categoria/(:num)', 'CategoriasController::buscar/$1');
$routes->post('modificar_categoria', 'CategoriasController::modificar');

//roles
$routes->get('roles', 'RolController::index');
$routes->post('agregar_rol', 'RolController::agregar');
$routes->get('eliminar_rol/(:num)', 'RolController::eliminar/$1');
$routes->get('buscar_rol/(:num)', 'RolController::buscar/$1');
$routes->post('modificar_rol', 'RolController::modificar');

//carrito
$routes->get('carrito', 'CarritoController::index');