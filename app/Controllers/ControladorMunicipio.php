<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Municipio;
    

    class ControladorMunicipio extends BaseController{
        public function verMunicipio(){

            $cod_muni = new Municipio();

            $datosbd['municipiobd']=$cod_muni->findAll();

            return view('Municipios',$datosbd);

        }
    }

?>