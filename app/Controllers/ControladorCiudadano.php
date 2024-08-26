<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Ciudadano;
    

    class ControladorCiudadano extends BaseController{
        public function verCiudadano(){

            $dpi = new Ciudadano();

            $datosbd['ciudadanobd']=$dpi->findAll();

            return view('Ciudadanos',$datosbd);

        }
    }

?>