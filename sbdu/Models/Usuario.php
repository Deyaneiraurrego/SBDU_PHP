<?php

class Usuario{
       	
    private $IdUsuario;
    private $NumeroIdentificacion;
    private $NombreUsuario;
    private $Apellido;
    private $CelContacto;
    private $correoUsuario;
    private $IdCargoFK;
    private $IdEstadoFK;
    private $contrasenaUsuario;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAll(){

        try{
            $strSql="SELECT u.*, c.NombreCargo as cargo, s.NombreEstado as status from usuario u inner join cargo c on c.IdCargo = u.IdCargoFK Inner join estado s on s.IdEstado = u.IdEstadoFK order by IdUsuario";
            $query=$this->pdo->select($strSql);

            return $query;
        }

        catch(PDOException $e){
            die($e->getMessage());
        }
    }



    public function newUsuario($data){
        try{
            $data['IdEstadoFK'] = 1;
            
            $this->pdo->insert('usuario', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getUsuarioById($id)
    {
        try {

            $strSql = "SELECT * FROM usuario WHERE IdUsuario = :IdUsuario";
            $arrayData = ['IdUsuario' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editUsuario($data)
    {

        try {
            
            $strWhere = 'IdUsuario=' . $data['IdUsuario'];           
            $this->pdo->update('usuario', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteUsuario($data)
    {

        try {
            $strWhere = 'IdUsuario= ' . $data['IdUsuario'];
            $this->pdo->delete('usuario', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    
    


}