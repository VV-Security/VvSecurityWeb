<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Requerimiento extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_Requerimientos');
    }
    public function VerRequerimiento()
    {
        echo json_encode($this->Crud_Requerimientos->SelectRequerimientos());
    }
    public function CrearRequerimiento()
    {
        // $Id
        $Nombre = $this->input->post('nombre');
        $Observacion = $this->input->post('observaciones');
        $Fecha_Ing = $this->input->post('ingreso');
        $Fecha_Fin = $this->input->post('fin');
        $Respuesta = $this->input->post('repuesta');
        if (isset($Nombre) || isset($Observacion) || isset($Fecha_Ing) || isset($Fecha_Fin) || isset($Respuesta)) {
            $this->Crud_Requerimientos->InsertRequerimientos($Nombre, $Observacion, $Fecha_Ing, $Fecha_Fin, $Respuesta);
            echo json_encode(array('msg' =>'Requerimiento Creado'));
        } else {
            echo json_encode(array('msg' =>' No Crea Requerimiento'));
        }
    }
    
    public function ActualizarRequerimiento()
    {
        $Id = $this->input->post('id');
        $Nombre = $this->input->post('nombre');
        $Observacion = $this->input->post('observaciones');
        $Fecha_Ing = $this->input->post('ingreso');
        $Fecha_Fin = $this->input->post('fin');
        $Respuesta = $this->input->post('repuesta');
        if (isset($Nombre) || isset($Observacion) || isset($Fecha_Ing) || isset($Fecha_Fin) || isset($Respuesta)) {
            $this->Crud_Requerimientos->UpdateRequerimientos($Nombre, $Observacion, $Fecha_Ing, $Fecha_Fin, $Respuesta);
            echo json_encode(array('msg' =>'Actualiza Requerimiento'));
        } else {
            echo json_encode(array('msg' =>' No Actualiza Requerimiento'));
        }
    }
    public function EliminarRequerimiento()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Requerimientos->DeleteRequerimiento($Id);
            echo json_encode(array('msg' =>'Eliminamos Requerimiento'));
        } else {
            echo json_encode(array('msg' =>'No Eliminamos Requerimiento'));
        }
    }
}