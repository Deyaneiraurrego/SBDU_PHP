<?php

class login
{   

    public function __construct()
	{
		try {
			
			$this->pdo = new Database;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


    public function validateUser($data){

        try {

            $strSql = "SELECT u.*, s.nombreEstado as status, c.nombreCargo as cargo from usuario u INNER JOIN estado s on s.idEstado = u.IdEstadoFK INNER JOIN cargo c on c.idCargo = u.IdCargoFK WHERE u.correoUsuario = '{$data['correoUsuario']}' AND u.contrasenaUsuario = '{$data['contrasenaUsuario']}' AND u.IdEstadoFK = 1 ";
            $query  = $this->pdo->select($strSql);

            if(isset($query[0]->IdUsuario)){
                if($query[0]->IdEstadoFK == 1) {
                    
                    $_SESSION['user'] = $query[0];
                    return true;
                }else{

                    return 'Error al Iniciar Sesion, su usuario se encuentra Desactivado';
                }
            }else{
                    return 'Error al Iniciar Sesion, Verifique sus Credenciales';
            }

        } catch (PDOException $e) {
           die($e->getMessage());
        }
    }

}