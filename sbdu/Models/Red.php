<?php

class Red
{
    	
    private $IdRed;
    private $TipoConectividadRed;
    private $DireccionIpRed;
    private $MascaraRed;
    private $DHCPRed;
    private $DNSRed;
    private $DireccionFisicaRed;
    private $DescripcionRed;
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
            $strSql = "SELECT * FROM red";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newRed($data){
        try{
            
            $this->pdo->insert('red', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getRedById($id)
    {
        try {

            $strSql = "SELECT * FROM Red WHERE IdRed = :IdRed";
            $arrayData = ['IdRed' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editRed($data)
    {

        try {
           
            $strWhere = 'IdRed=' . $data['IdRed'];           
            $this->pdo->update('Red', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteRed($data)
    {

        try {
            $strWhere = 'IdRed= ' . $data['IdRed'];
            $this->pdo->delete('Red', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
}