<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_User");
    }
    #################--->           usuarios Crud tabla            <---#################

    public function VerUsuario()
    {
        echo json_encode($this->Crud_User->SelectUsuarios());
    }
    public function CrearUsuario()
    {
        $Rut = $this->input->post("rut");
        $Primero = $this->input->post("primero");
        $Segundo = $this->input->post("segundo");
        $Paterno = $this->input->post("paterno");
        $Materno = $this->input->post("materno");
        $Mail = $this->input->post("mail");
        $Clave = $this->input->post("clave");
        $Estado = $this->input->post("estado");
        $Departamento_Id = $this->input->post("depto_id");

        if (isset($Rut) || isset($Primero) || isset($Segundo) || isset($Paterno)
        || isset($Materno) || isset($Clave) || isset($Mail) || isset($Estado)
        || isset($Departamento_Id)) {
            if ($Estado == 0) {
                $Clave = SHA1(MD5($Clave));
            } else {
                $Clave = SHA1($Clave);
            }
            /*Nombre Crud Función->*/$this->Crud_User->InsertUsuario(
                $Rut,
                $Primero,
                $Segundo,
                $Paterno,
                $Materno,
                $Clave,
                $Mail,
                $Estado,
                $Departamento_Id
            );
            
            echo json_encode(array("msg" => "Nuevo Usuario Agregado con Éxito"));
        } else {
            echo json_encode(array("msg" => "No se Pudo Crear Usuario"));
        }
    }
    public function ActualizarUsuario()
    {
        $Id = $this->input->post("id");
        $Rut = $this->input->post("rut");
        $Primero = $this->input->post("primero");
        $Segundo = $this->input->post("segundo");
        $Paterno = $this->input->post("paterno");
        $Materno = $this->input->post("materno");
        $Mail = $this->input->post("mail");
        $Clave = $this->input->post("clave");
        $Estado = $this->input->post("estado");
        $Departamento_Id = $this->input->post("depto_id");

        if (isset($Id) || isset($Rut) || isset($Primero) || isset($Segundo) || isset($Paterno)
        || isset($Materno) || isset($Clave) || isset($Mail) || isset($Estado) || isset($Departamento_Id)) {
           
            // Tipo de usuario clasificación
            // <option value="0">Admin</option>
            // <option value="1">Básico</option>
            // <option value="2">Intermedio</option>
            // <option value="3">Avanzado</option>
            // <option value="4">Inactivo</option>
            // if ($Estado == 0) {
            //     $Clave = SHA1(MD5($Clave));
            // } else {
            //     $Clave = SHA1($Clave);
            // }
            /*Nombre Crud Función->*/$this->Crud_User->UpdateUsuario($Id, $Rut, $Primero, $Segundo, $Paterno, $Materno, $Clave, $Mail, $Estado, $Departamento_Id);
            echo json_encode(array("msg" => "Usuario Actualizado!!"));
        } else {
            echo json_encode(array("msg" => "No se pude Actualizar!!"));
        }
    }
    public function EliminarUsuario()
    {
        $Id = $this->input->post("id");
        
        if (isset($Id)) {
            /*Nombre Crud Función->*/$this->Crud_User->DeleteUsuario($Id);
            echo json_encode(array("msg"=> "Eliminación de Usuario Completa"));
        } else {
            echo json_encode(array("msg"=> "Usuario no Eliminado"));
        }
    }
    public function UnirUsuarioDepto()
    {
        echo json_encode($this->Crud_User->JoinUsuarioDepto());
    }
}