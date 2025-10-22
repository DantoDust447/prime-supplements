<?php

namespace App\Controllers;

use App\Models\CategoriasModel;
use App\Models\ProductosModel;

class CategoriasController extends BaseController
{
    public function verCategorias()
    {
        $categoria = new CategoriasModel();
        $datos['categorias'] = $categoria->findAll();
        return view('vista_categoria_empleado', $datos);
    }

    
    public function buscar($id)
    {
        $categoria = new CategoriasModel();
        $datos['categoria'] = $categoria->where('categoria_id', $id)->first();
        return view('vista_categoria_empleado', $datos);
    }


    public function index()
    {
        $categoria = new CategoriasModel();
        $datos['datos'] = $categoria->findAll();
        return view('vista_categoria_empleado', $datos);
    }
    public function agregar()
    {
        $categoria = new CategoriasModel();
        $datos = [
            'categoria_id' => $this->request->getPost('categoria_id'),
            'categoria' => $this->request->getPost('categoria'),
        ];
        $categoria->insert($datos);
        return redirect()->to(base_url('categorias'));
    }
    public function eliminar($id)
    {
        $categoria = new CategoriasModel();
        $categoria->where(['categoria_id' => $id])->delete();
        return redirect()->to(base_url('categorias'));
    }
}
