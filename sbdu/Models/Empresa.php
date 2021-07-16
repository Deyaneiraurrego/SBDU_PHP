<?php

class Empresa
{
    private $IdEmpresa;
    private $nitEmpresa;
    private $nombreEmpresa;
    private $VentasRealizadas;
    private $Cantidadpedidos;
    private $TelefonoEmpresa;
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
            $strSql = "SELECT * FROM empresa";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newEmpresa($data){
        try{
            
            $this->pdo->insert('Empresa', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getEmpresaById($id)
    {
        try {

            $strSql = "SELECT * FROM Empresa WHERE idEmpresa = :idEmpresa";
            $arrayData = ['idEmpresa' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editEmpresa($data)
    {

        try {
           
            $strWhere = 'idEmpresa=' . $data['idEmpresa'];           
            $this->pdo->update('Empresa', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteEmpresa($data)
    {

        try {
            $strWhere = 'idEmpresa= ' . $data['idEmpresa'];
            $this->pdo->delete('Empresa', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
}