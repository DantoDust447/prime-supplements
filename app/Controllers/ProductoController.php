<?php

namespace App\Controllers;
use App\Models\CategoriasModel;
use App\Models\ProductosModel;
class ProductoController extends BaseController
{
    public function verProductos()
    {
        $categoria = new CategoriasModel();
        $datos['categorias'] = $categoria->findAll();
        $producto = new ProductosModel();
        $datos['productos'] = $producto->findAll();
        return view('vista_productos', $datos);
        
    }
}