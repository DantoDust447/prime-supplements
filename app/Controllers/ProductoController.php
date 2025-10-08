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

/*empleados*/
    public function index(): string 
    {
        $producto = new ProductosModel();

        $datos['datos'] = $producto->findAll();
        return view('vista_producto_empleado', $datos);
    }
    public function eliminar($producto_id)
    {
        $producto = new ProductosModel();
        $producto->delete($producto_id);
        return redirect()->to('productos');
    }
    public function agregar()
    {
        $producto = new ProductosModel();
        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'marca_id' => $this->request->getVar('marca_id'),
            'descripcion' => $this->request->getVar('descripcion'),
            'precio' => $this->request->getVar('precio'),
            'cantidad_peso' => $this->request->getVar('cantidad_peso'),
            'categoria_id' => $this->request->getVar('categoria_id'),
        ];
        $producto->insert($datos);
        return redirect()->to('productos');
    }
    public function buscar($producto_id)
    {
        $producto = new ProductosModel();
        $datos['datos'] = $producto->where('producto_id', $producto_id)->first();
        return view('vistaModificarProducto', $datos);
    }
    
    public function modificar()
    {
        $producto = new ProductosModel();
        $datos = [
            'producto_id' => $this->request->getPost('producto_id'),
            'nombre' => $this->request->getPost('nombre'),
            'marca_id' => $this->request->getPost('marca_id'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'categoria_id' => $this->request->getPost('categoria_id'),
        ];
        $producto->update($datos['producto_id'], $datos);
        return redirect()->to('productos');
    }
}