<?php

class Licencia
{
	
    private $IdLicencia;
    private $TipoProgramaLicencia;
    private $NombreLicencia;
    private $AutorLicencia;
    private $VersionLicencia;
    private $DesarrolladorLicencia;
    private $ModeloDesarrolloLicencia;
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
            $strSql = "SELECT * FROM licencia";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newLicencia($data){
        try{
            
            $this->pdo->insert('licencia', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getLicenciaById($id)
    {
        try {

            $strSql = "SELECT * FROM licencia WHERE IdLicencia = :IdLicencia";
            $arrayData = ['IdLicencia' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editLicencia($data)
    {

        try {
           
            $strWhere = 'IdLicencia=' . $data['IdLicencia'];           
            $this->pdo->update('licencia', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteLicencia($data)
    {

        try {
            $strWhere = 'IdLicencia= ' . $data['IdLicencia'];
            $this->pdo->delete('licencia', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
}