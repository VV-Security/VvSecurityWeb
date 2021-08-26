<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Extras extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_Extras');
    }

   
    #################--->        Extras Crud tabla      <---#################
    public function VerExtras()
    {
        echo json_encode($this->Crud_Extras->SelectExtras());
    }
    public function CrearExtras()
    {
        // $Id,
        $CaptorRonda = $this->input->post('captor');
        $CtrlAsis = $this->input->post('ctrl');
        $SuperExcl = $this->input->post('super');
        $CamSeg = $this->input->post('camara');
        $AlarmSeg = $this->input->post('alarma');

        if (isset($CaptorRonda) || isset($CtrlAsis) || isset($SuperExcl) || isset($CamSeg) || isset($AlarmSeg)) {
            $this->Crud_Extras->InsertExtras($CaptorRonda, $CtrlAsis, $SuperExcl, $CamSeg, $AlarmSeg);
            echo json_encode(array('msg' => 'Se Creo Extras'));
        } else {
            echo json_encode(array('msg' => 'No Se Creo Extras'));
        }
    }

    public function ActualizarExtras()
    {
        $Id = $this->input->post('id');
        $CaptorRonda = $this->input->post('captor');
        $CtrlAsis = $this->input->post('ctrl');
        $SuperExcl = $this->input->post('super');
        $CamSeg = $this->input->post('camara');
        $AlarmSeg = $this->input->post('alarma');

        if (isset($CaptorRonda) || isset($CtrlAsis) || isset($SuperExcl) || isset($CamSeg) || isset($AlarmSeg)) {
            $this->Crud_Extras->InsertExtras($CaptorRonda, $CtrlAsis, $SuperExcl, $CamSeg, $AlarmSeg);
            echo json_encode(array('msg' => 'Actualizo Extras'));
        } else {
            echo json_encode(array('msg' => 'No Actualizo Extras'));
        }
    }
    public function DeleteExtras()
    {
        $Id = $this->input->post('id');
        if (isset($Id)) {
            $this->Crud_Extras->DeleteExtras($Id);
            echo json_encode(array('msg' =>"Eliminado Extra"));
        } else {
            echo json_encode(array('msg' =>"No Eliminado Extra"));
        }
    }
}