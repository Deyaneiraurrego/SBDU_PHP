<?php

class EntradaSalida
{
    
 	
    private $IdEntradaSalida;
    private $FechaEntradaSalida;
    private $FechaSalidaEntradaSalida;
    private $IdUsuarioEntradaSalida;
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
            $strSql = "SELECT e.*, u.NombreUsuario as usuario FROM `entradasalida` e INNER JOIN usuario u on u.IdUsuario = e.IdUsuarioEntradaSalida ORDER BY IdEntradaSalida";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newEntradasalida($data){
        try{
            
            $this->pdo->insert('entradasalida', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getEntradasalidaById($id)
    {
        try {

            $strSql = "SELECT * FROM entradasalida WHERE Identradasalida = :Identradasalida";
            $arrayData = ['IdEntradaSalida' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editEntradasalida($data)
    {

        try {
           
            $strWhere = 'IdEntradaSalida=' . $data['IdEntradaSalida'];           
            $this->pdo->update('entradasalida', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteEntradasalida($data)
    {

        try {
            $strWhere = 'IdEntradaSalida= ' . $data['IdEntradaSalida'];
            $this->pdo->delete('entradasalida', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
}