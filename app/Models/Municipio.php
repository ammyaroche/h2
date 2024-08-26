<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Municipio extends Model{
        protected $table = 'Municipios';
        protected $primarykey = 'cod_muni';
        protected $allowedfield = ['nombre_municipio', 'cod_depto'];

    }
?>
