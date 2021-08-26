<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Servicios_Basicos extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_ServiciosBasicos");
    }

    #################--->     servicios basicos Crud tabla             <---#################

    public function VerServiciosB()
    {
        echo json_encode($this->Crud_ServiciosBasicos->SelectServicios());
    }
    public function CrearServiciosB()
    {
        $Id = $this->input->post('id');
        $Agua = $this->input->post('agua');
        $Luz = $this->input->post('luz');
        $Bano = $this->input->post('bano');
        $Casino = $this->input->post('casino');
        $Caseta = $this->input->post('caseta');
        $Internet = $this->input->post('internet');

        if (isset($Agua) || isset($Luz) || isset($Bano)
        || isset($Casino) || isset($Caseta) || isset($Internet)) {
            $this->crud_ServiciosBasicos->InsertServicios($Agua, $Luz, $Bano, $Casino, $Casete, $Internet);
            echo json_encode(array("msg" => "Exito Servicio Basico"));
        } else {
            echo json_encode(array("msg" => "No Creo Servicio Basico"));
        }
    }

    public function ActualizarServiciosB()
    {
        $Id = $this->input->post('id');
        $Agua = $this->input->post('agua');
        $Luz = $this->input->post('luz');
        $Bano = $this->input->post('bano');
        $Casino = $this->input->post('casino');
        $Caseta = $this->input->post('caseta');
        $Internet = $this->input->post('internet');

        if (isset($Id) || isset($Agua) || isset($Luz) || isset($Bano)
        || isset($Casino) || isset($Caseta) || isset($Internet)) {
            $this->crud_ServiciosBasicos->UpdateServicios($Agua, $Luz, $Bano, $Casino, $Casete, $Internet);
            echo json_encode(array("msg" => "Actualizado Servicio Basico"));
        } else {
            echo json_encode(array("msg" => "No Actualizo Servicio Basico"));
        }
    }

    public function EliminarServiciosB()
    {
        $Id = $this->input->post('id');
        
        if (isset($Id)) {
            echo json_encode(array("msg" => "Eliminar Servicio Basico"));
        } else {
            echo json_encode(array("msg" => "No Eliminar Servicio Basico"));
        }
    }
}