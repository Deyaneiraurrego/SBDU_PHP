<?php

class Servicio
{
    private $IdServicio;
    private $MantenimientoServicio;
    private $BasesDatosServicio;
    private $DisenoImplementacionServicio;
    private $DirectorioActivoServicio;
    private $OptimizacionServicio;
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
            $strSql = "SELECT s.*, u.NombreUsuario as usuario from servicio s inner join usuario u on u.IdUsuario = s.IdUsuarioFK order by IdServicio";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newServicio($data){
        try{
            $data['IdUsuarioFK'] = $_SESSION['user']->IdUsuario;
            $this->pdo->insert('servicio', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getServicioById($id)
    {
        try {

            $strSql = "SELECT * FROM servicio WHERE IdServicio = :IdServicio";
            $arrayData = ['IdServicio' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editServicio($data)
    {

        try {
            $data['IdUsuarioFK'] = $_SESSION['user']->IdUsuario;
            $strWhere = 'IdServicio=' . $data['IdServicio'];           
            $this->pdo->update('servicio', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteServicio($data)
    {

        try {
            $strWhere = 'IdServicio= ' . $data['IdServicio'];
            $this->pdo->delete('servicio', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
}