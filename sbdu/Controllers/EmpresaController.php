<?php
require 'models/Empresa.php';





class EmpresaController
{
    private $model;
    
    

    public function __construct()
    {
        $this->model      = new Empresa;
        
        
        
    }

    public function index(){

        $Empresas   = $this->model->getAll();
        
        
        require 'views/layout.php';
        require 'views/Empresas/list.php';
    }

    public function new(){

        require 'hojav/index.php';
        
    }

    public function save(){
        $this->model->newEmpresa($_REQUEST);
        header("Location: ?controller=Empresa");
    }


    public function edit(){

			
		if (isset($_REQUEST['IdEmpresa'])) {
			$id = $_REQUEST['IdEmpresa'];
			$data = $this->model->getEmpresaById($id);
            
			require 'views/layout.php';
			require 'views/Empresas/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editEmpresa($_POST);
		header("Location: ?controller=Empresa");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteEmpresa($_REQUEST);
		header("Location: ?controller=Empresa");	
	}


}