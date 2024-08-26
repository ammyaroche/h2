<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Departamento extends Model{
        protected $table = 'Departamentos';
        protected $primarykey = 'cod_depto';
        protected $allowedfield = ['nombre_depto', 'cod_region'];

    }
?>