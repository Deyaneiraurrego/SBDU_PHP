<?php
require 'models/Cargo.php';





class CargoController
{
    private $model;
    
    

    public function __construct()
    {
        $this->model      = new Cargo;
        
        
        
    }

    public function index(){

        $Cargos   = $this->model->getAll();
        
        
        require 'views/layout.php';
        require 'views/Cargos/list.php';
    }

    public function new(){

        require 'hojav/index.php';
        
    }

    public function save(){
        $this->model->newCargo($_REQUEST);
        header("Location: ?controller=cargo");
    }


    public function edit(){

			
		if (isset($_REQUEST['IdCargo'])) {
			$id = $_REQUEST['IdCargo'];
			$data = $this->model->getCargoById($id);
            
			require 'views/layout.php';
			require 'views/Cargos/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editCargo($_POST);
		header("Location: ?controller=cargo");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteCargo($_REQUEST);
		header("Location: ?controller=cargo");	
	}


}