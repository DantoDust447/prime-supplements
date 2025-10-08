<?php

namespace App\Controllers;
use App\Models\MarcasModel;
class MarcaController extends BaseController
{
    public function verMarcas()
    {
        $marcas = new MarcasModel();
        $datos['marcas'] = $marcas->findAll();
        return view('vista_marcas', $datos); 
    }

     public function index() 
    {
        $marcas = new MarcasModel();
        $datos['datos'] = $marcas->findAll();
        return view('vista_marcas_empleado', $datos);
    }

    public function agregar() 
    {
        $marcas = new MarcasModel();
        $datos = [
            'marca_nombre' => $this->request->getVar('marca_nombre'),
            'descripcion' => $this->request->getVar('descripcion')
        ];
        $marcas->insert($datos);
        return redirect()->to(base_url('marcas'));
    }

    public function eliminar($marca_id) 
    {
        $marcas = new MarcasModel();
        $marcas->delete($marca_id);
        return redirect()->to('marca');
    }
    
}

    


    