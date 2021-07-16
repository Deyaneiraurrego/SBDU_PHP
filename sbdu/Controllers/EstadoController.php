<?php
require 'models/Estado.php';





class EstadoController
{
    private $model;
    
    

    public function __construct()
    {
        $this->model      = new Estado;
        
        
        
    }

    public function index(){

        $Estados   = $this->model->getAll();
        
        
        require 'views/layout.php';
        require 'views/Estados/list.php';
    }

    public function new(){

        require 'hojav/index.php';
        
    }

    public function save(){
        $this->model->newEstado($_REQUEST);
        header("Location: ?controller=estado");
    }


    public function edit(){

			
		if (isset($_REQUEST['IdEstado'])) {
			$id = $_REQUEST['IdEstado'];
			$data = $this->model->getEstadoById($id);
            
			require 'views/layout.php';
			require 'views/Estados/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editEstado($_POST);
		header("Location: ?controller=estado");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteEstado($_REQUEST);
		header("Location: ?controller=estado");	
	}


}