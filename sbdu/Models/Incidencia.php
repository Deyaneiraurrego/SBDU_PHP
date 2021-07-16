<?php

class Incidencia
{
    private $IdIncidencia;
    private $FechaRecibido;
    private $FechaEntrega;
    private $NombreTecnico;
    private $IdUsuarioFK;
    
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
            $strSql = "SELECT i.*, u.NombreUsuario as user from incidencia i inner join usuario u on u.IdUsuario = i.IdUsuarioFK  order by IdIncidencia";           
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newIncidencia($data){
        try{
            
            $this->pdo->insert('incidencia', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getIncidenciaById($id)
    {
        try {

            $strSql = "SELECT * FROM incidencia WHERE IdIncidencia = :IdIncidencia";
            $arrayData = ['IdIncidencia' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editIncidencia($data)
    {

        try {
           
            $strWhere = 'IdIncidencia=' . $data['IdIncidencia'];           
            $this->pdo->update('incidencia', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteIncidencia($data)
    {

        try {
            $strWhere = 'IdIncidencia= ' . $data['IdIncidencia'];
            $this->pdo->delete('incidencia', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
}