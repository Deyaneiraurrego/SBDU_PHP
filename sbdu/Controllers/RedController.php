<?php
require 'models/Red.php';

class RedController
{
    private $model;
    
    

    public function __construct()
    {
        $this->model      = new Red;
      
    }

    public function index(){

        $Redes   = $this->model->getAll();
        
        
        require 'views/layout.php';
        require 'views/Redes/list.php';
    }

    public function new(){

        require 'hojav/index.php';
        
    }

    public function save(){
        $this->model->newRed($_REQUEST);
        header("Location: ?controller=red");
    }


    public function edit(){

			
		if (isset($_REQUEST['IdRed'])) {
			$id = $_REQUEST['IdRed'];
			$data = $this->model->getRedById($id);
            
			require 'views/layout.php';
			require 'views/Redes/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editRed($_POST);
		header("Location: ?controller=red");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteRed($_REQUEST);
		header("Location: ?controller=red");	
	}


}