<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_User");
    }

    #################--->          departamento Crud tabla         <---#################

    #################--->           usuarios Crud tabla            <---#################

    public function Usuario()
    {
        echo json_encode($this->Crud_User->Usuarios());
    }


    #################--->          cargos Crud tabla               <---#################

    #################--->          contacto Crud tabla             <---#################

    #################--->       persona_natural Crud tabla         <---#################

    #################--->         referencia Crud tabla            <---#################
 
    #################--->         tipo_servicio Crud tabla         <---#################

    #################--->      representante_legal Crud tabla      <---#################

    #################--->          empresa Crud tabla              <---#################

    #################--->        tipo_servicio Crud tabla          <---#################
    
    #################--->        referencia Crud tabla             <---#################

    #################--->        matriz_servicio Crud tabla        <---#################

    #################--->        matriz_cotizante Crud tabla       <---#################

    #################--->        empresas_ctrlroll Crud tabla      <---#################

    #################--->        requerimiento Crud tabla          <---#################

    #################--->        estados Crud tabla                <---#################

    #################--->     matriz_requerimientos Crud tabla     <---#################

    #################--->         noticias Crud tabla              <---#################
    
    #################--->         categorías Crud tabla            <---#################
}