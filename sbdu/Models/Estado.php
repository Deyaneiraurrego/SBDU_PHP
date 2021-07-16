<?php

class Estado
{
    private $IdEstado;
    private $NombreEstado;
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
            $strSql = "SELECT * FROM estado";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newEstado($data){
        try{
            
            $this->pdo->insert('estado', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getEstadoById($id)
    {
        try {

            $strSql = "SELECT * FROM estado WHERE IdEstado = :IdEstado";
            $arrayData = ['IdEstado' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editEstado($data)
    {

        try {
           
            $strWhere = 'IdEstado=' . $data['IdEstado'];           
            $this->pdo->update('estado', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteEstado($data)
    {

        try {
            $strWhere = 'IdEstado= ' . $data['IdEstado'];
            $this->pdo->delete('estado', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
}