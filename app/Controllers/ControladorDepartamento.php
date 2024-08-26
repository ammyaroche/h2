<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Departamento;
    

    class ControladorDepartamento extends BaseController{
        public function verDepartamento(){

            $cod_depto = new Departamento();

            $datosbd['departamentobd']=$cod_depto->findAll();

            return view('Departamentos',$datosbd);

        }
    }

?>