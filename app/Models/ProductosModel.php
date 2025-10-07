<?php
 namespace App\Models;
    use CodeIgniter\Model;
    class ProductosModel extends Model
    {
        protected $table         = 'productos';
        protected $primaryKey    = 'producto_id';
        protected $allowedFields = [
            'producto_id','nombre','marca_id','descripcion','categoria','precio', 'cantidad_peso'
        ];
        //protected $returnType    = \App\Entities.User::class;
        //protected $useTimestamps = true;

         public function innerProductosCategorias()
        {
        // 1. Inicia la construcción de la consulta con la tabla principal del modelo.
        // Opcionalmente, puedes obtener el builder explícitamente con $this->builder().
        
            return $this->select('products.*, categories.category_name') // Selecciona las columnas que necesitas.
                    ->join('cat_productos', 'categories.id = products.category_id') // Realiza el INNER JOIN
                    ->findAll(); // Ejecuta la consulta y devuelve los resultados
        }
    }   