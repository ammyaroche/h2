<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Nivel;
    

    class ControladorNivel extends BaseController{
        public function verNivel(){

            $nivelacad = new Nivel();

            $datosbd['nivelbd']=$nivelacad->findAll();

            return view('Niveles',$datosbd);

        }
    }

?>