<?php
require 'models/EntradaSalida.php';
require 'models/ConsUser.php';




class EntradaSalidaController
{
    private $model;
    private $ConsUser;
    
    

    public function __construct()
    {
        $this->model      = new EntradaSalida;
        $this->ConsUser   = new ConsUser;
        
        
    }

    public function index(){

        $EntradaSalidas   = $this->model->getAll();
        $ConsUsers        = $this->ConsUser->getAll();
        
        require 'views/layout.php';
        require 'views/EntradaSalidas/list.php';
    }

    public function new(){

        require 'hojav/index.php';
        
    }

    public function save(){
        $this->model->newEntradaSalida($_REQUEST);
        header("Location: ?controller=EntradaSalida");
    }


    public function edit(){

			
		if (isset($_REQUEST['IdEntradaSalida'])) {
			$id = $_REQUEST['IdEntradaSalida'];
			$data = $this->model->getEntradaSalidaById($id);
            
			require 'views/layout.php';
			require 'views/EntradaSalidas/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editEntradaSalida($_POST);
		header("Location: ?controller=EntradaSalida");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteEntradaSalida($_REQUEST);
		header("Location: ?controller=EntradaSalida");	
	}


}