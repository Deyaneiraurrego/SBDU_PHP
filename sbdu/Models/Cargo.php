<?php

class Cargo
{
    private $IdCargo;
    private $NombreCargo;
    private $pdo;

    	

    public function __construct()
    {
        try{
                $this->pdo = new Database;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAll(){
        try{
            $strSql = "SELECT * FROM cargo";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newCargo($data){
        try{
            
            $this->pdo->insert('cargo', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getCargoById($id)
    {
        try {

            $strSql = "SELECT * FROM cargo WHERE IdCargo = :IdCargo";
            $arrayData = ['IdCargo' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editCargo($data)
    {

        try {
           
            $strWhere = 'IdCargo=' . $data['IdCargo'];           
            $this->pdo->update('cargo', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteCargo($data)
    {

        try {
            $strWhere = 'IdCargo= ' . $data['IdCargo'];
            $this->pdo->delete('cargo', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
}