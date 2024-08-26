<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Region;
    

    class ControladorRegion extends BaseController{
        public function verRegion(){

            $cod_region = new Region();

            $datosbd['regionbd']=$cod_region->findAll();

            return view('Regiones',$datosbd);

        }
    }

?>