<?php

namespace App\Controllers;
use App\Models\ProductosModel;
class CarritoController extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();

        // Si la sesión del carrito no existe, la inicializamos como un array vacío
        if (! $this->session->has('cart')) {
            $this->session->set('cart', []);
        }
    }
    public function addToCart()
    {
        // 1. Obtener el ID del producto (ejemplo simple)
        $productId = $this->request->getPost('producto_id');

        // 2. Obtener los detalles del producto desde la base de datos
        $productosModel = new ProductosModel();
        $productos      = $productosModel->find($productId);

        if (!$productos) {
            // Manejar error: Producto no encontrado
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }
        // 3. Preparar el ítem del carrito (con los datos SQL)
        $cartItem = [
            'producto_id'=> $productos['producto_id'],
            'nombre'     => $productos['nombre'],
            'precio'    => $productos['precio'],
            // Agrega otros campos de SQL que necesites
        ];

        // 4. Agregar/Actualizar en el array de la sesión
        $cart = $this->session->get('cart');
        
        // Verifica si el producto ya está en el carrito para actualizar la cantidad
        $found = false;
        foreach ($cart as $key => $item) {
            if ($item['id'] == $productId) {
                $cart[$key]['qty'] += (int) $quantity;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $cart[] = $cartItem;
        }
        
        // 5. Guardar el array actualizado en la sesión
        $this->session->set('cart', $cart);

        return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }
    public function index()
    {
        // Obtener el array completo de la sesión
        $cartContent = $this->session->get('cart');

        $data = [
            'cartItems' => $cartContent,
            'title'     => 'Tu Carrito de Compras'
        ];

        return view('vista_buscar_producto', $data); // 'cart_page' es el nombre de tu vista
    }
}