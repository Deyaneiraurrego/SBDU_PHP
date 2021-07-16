<?php

class Equipo
{   
    private $IdEquipo;
    private $TipoComputadorEquipo;
    private $MarcaBoardEquipo;
    private $ProcesadorEquipo;
    private $MarcaMemoriaRAMEquipo;
    private $MemoriaRAMEquipo;
    private $DiscoDuroEquipo;
    private $UnidadCDDVDEquipo;
    private $LectoraTarjetasEquipo;
    private $PuertosEquipo;	
    private $MonitorEquipo;	
    private $TarjetaredEquipo;
    private $TarjetavideoEquipo;
    private $TarjetaSonidoEquipo;
    private $MarcaTecladoEquipo;
    private $EstadoTecladoEquipo;	
    private $MarcaSerialMouseEquipo;	
    private $EstadoMouseEquipo;
    private $AlimentacionEquipo;	
    private $CamaraEquipo;	
    private $CablesAlimentacionTorreEquipo;	
    private $CablesAlimentacionPantallaEquipo;	
    private $SistemaOperativoEquipo;	
    private $SistemaOperativoMultipleEquipo;	
    private $controladoresEquipo;	
    private $ParticionesHDDEquipo;	
    private $MicrosoftOfficeTieneEquipo;	
    private $MicrosoftOfficeLicenciaEquipo;	
    private $NavegadoresEquipo;	
    private $NavegadorPoseeEquipo;	
    private $LectorPDFPoseeEquipo;	
    private $LectorPDFLicenciaEquipo;	
    private $CompresorArchivosPoseeEquipo;	
    private $CompresorArchivosLicenciaEquipo;	
    private $AntivirusPoseeEquipo;	
    private $AntivirusLicenciaEquipo;	
    private $CongeladorDDEquipo;	
    private $UtilidadesGrabacionEquipo;	
    private $IdEntradaSalidaFK;	
    private $IdRedFK;	
    private $IdLicenciaFK;	
    private $IdServicioFK;	
    private $IdIncidenciaFK;	
    private $IdUsuarioFK;
    private $IdEstadoFK;	
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
            $strSql = "SELECT e.*, en.FechaEntradaSalida , r.DireccionIpRed, l.TipoProgramaLicencia, s.DisenoImplementacionServicio, inc.NombreTecnico, u.NombreUsuario , es.NombreEstado from equipo e INNER JOIN entradasalida en on en.IdEntradaSalida = e.IdEntradaSalidaFK INNER JOIN red r ON r.IdRed = e.IdRedFK INNER JOIN licencia l on l.IdLicencia = e.IdLicenciaFK INNER JOIN servicio s on s.IdServicio = e.IdServicioFK INNER JOIN incidencia inc on inc.IdIncidencia = e.IdIncidenciaFK INNER JOIN usuario u on u.IdUsuario = e.IdUsuarioFK INNER JOIN estado es on es.IdEstado = e.IdEstadoFK;";
            $query = $this->pdo->select($strSql);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function newEquipo($data){
        try{
            
            $this->pdo->insert('equipo', $data);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getEquipoById($id)
    {
        try {

            $strSql = "SELECT * FROM equipo WHERE IdEquipo = :IdEquipo";
            $arrayData = ['IdEquipo' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editEquipo($data)
    {

        try {
           
            $strWhere = 'IdEquipo=' . $data['IdEquipo'];           
            $this->pdo->update('equipo', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteEquipo($data)
    {

        try {
            $strWhere = 'IdEquipo= ' . $data['IdEquipo'];
            $this->pdo->delete('equipo', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
}