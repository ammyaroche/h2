<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Region extends Model{
        protected $table = 'Regiones';
        protected $primarykey = 'cod_region';
        protected $allowedfield = ['nombre', 'descripcion'];

    }
?>