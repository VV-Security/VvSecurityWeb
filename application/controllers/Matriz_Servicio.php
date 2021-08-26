<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matriz_Servicio extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_MatrizServicio");
    }

    #################--->        matriz_servicio Crud tabla        <---#################

    public function VerMatrizServicio()
    {
        echo json_encode($this->Crud_MatrizServicio->SelectMatrizServicio());
    }
    public function CrearMatrizServicio()
    {
        $Ubicacion = $this->input->post("ubicacion");
        $Duracion = $this->input->post("duracion");
        $Referencia_Ubi  = $this->input->post("referencia_ubi");
        $Jornada  = $this->input->post("jornada");
        $Turno  = $this->input->post("turno");
        $HorarioLaboral  = $this->input->post("horarioLaboral");
        $Observaciones  = $this->input->post("observaciones");
        $TipoServicio_Id  = $this->input->post("tipoServicio_id");
        $ServiciosBasicos_Id  = $this->input->post("serviciosBasicos_id");
        $Extras_Id  = $this->input->post("extras_id");
        $Referencia_Id  = $this->input->post("referencia_id");
 
        if (isset($Ubicacion) || isset($Duracion) || isset($Referencia_Ubi) || isset($Jornada)
         || isset($Turno) || isset($HorarioLaboral) || isset($Observaciones) || isset($TipoServicio_Id)
         || isset($ServiciosBasicos_Id) || isset($Extras_Id) || isset($Referencia_Id)) {
              
             /*Nombre Crud Función->*/ $this->Crud_MatrizServicio->InsertMatrizServicio(
                 $Ubicacion,
                 $Duracion,
                 $Referencia_Ubi,
                 $Jornada,
                 $Turno,
                 $HorarioLaboral,
                 $Observaciones,
                 $TipoServicio_Id,
                 $ServiciosBasicos_Id,
             );
 
            echo json_encode(array("msg"=> "Matriz de Servicio Creada con exito!!"));
        } else {
            echo json_encode(array("msg"=> "No se creo Matriz de Servicio!!"));
        }
    }
    public function ActualizarMatrizServicio()
    {
        $Id = $this->input->post("id");
        $Ubicacion = $this->input->post("ubicacion");
        $Duracion = $this->input->post("duracion");
        $Referencia_Ubi  = $this->input->post("referencia_ubi");
        $Jornada  = $this->input->post("jornada");
        $Turno = $this->input->post("turno");
        $HorarioLaboral  = $this->input->post("horarioLaboral");
        $Observaciones  = $this->input->post("observaciones");
        $TipoServicio_Id  = $this->input->post("tipoServicio_id");
        $ServiciosBasicos_Id  = $this->input->post("serviciosBasicos_id");
        $Extras_Id  = $this->input->post("extras_id");
        $Referencia_Id  = $this->input->post("referencia_id");
 
        if (isset($Id) || isset($Ubicacion) || isset($Duracion) || isset($Referencia_Ubi) || isset($Jornada)
         || isset($Turno) || isset($HorarioLaboral) || isset($Observaciones) || isset($TipoServicio_Id)
         || isset($ServiciosBasicos_Id) || isset($Extras_Id) || isset($Referencia_Id)) {
              
             /*Nombre Crud Función->*/ $this->Crud_MatrizServicio->UpdateMatrizServicio(
                 $Id,
                 $Ubicacion,
                 $Duracion,
                 $Referencia_Ubi,
                 $Jornada,
                 $Turno,
                 $HorarioLaboral,
                 $Observaciones,
                 $TipoServicio_Id,
                 $ServiciosBasicos_Id,
             );
 
            echo json_encode(array("msg"=> "Actualizada la Matriz de Servicio!!"));
        } else {
            echo json_encode(array("msg"=> "Actualización Matriz de Servicio No Realizada!!"));
        }
    }
    public function EliminarMatrizServicio()
    {
        $Id = $this->input->post("id");
        if (isset($Id)) {
             
        /*Nombre Crud Función->*/$this->Crud_MatrizServicio->DeleteMatrizServicio($Id);
 
            echo json_encode(array("msg" => "Matriz de Servicio Eliminada"));
        } else {
            echo json_encode(array("msg" => "Elimina no realizada. Matriz Servicio"));
        }
    }
}