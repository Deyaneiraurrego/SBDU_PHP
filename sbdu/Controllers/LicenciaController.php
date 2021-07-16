<?php
require 'models/Licencia.php';


class LicenciaController
{
    private $model;
    
    

    public function __construct()
    {
        $this->model      = new Licencia;
        
        
        
    }

    public function index(){

        $Licencias   = $this->model->getAll();
        
        
        require 'views/layout.php';
        require 'views/Licencias/list.php';
    }

    public function new(){

        require 'hojav/index.php';
        
    }

    public function save(){
        $this->model->newLicencia($_REQUEST);
        header("Location: ?controller=Licencia");
    }


    public function edit(){

			
		if (isset($_REQUEST['IdLicencia'])) {
			$id = $_REQUEST['IdLicencia'];
			$data = $this->model->getLicenciaById($id);
            
			require 'views/layout.php';
			require 'views/Licencias/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editLicencia($_POST);
		header("Location: ?controller=Licencia");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteLicencia($_REQUEST);
		header("Location: ?controller=Licencia");	
	}


}