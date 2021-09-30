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

    public function Test()
    {
        $User = $this->session->userdata('user');
        print_r($User);
    }

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
            $Clave = SHA1(MD5($Clave));
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
     
        $Perfil = $this->Crud_User->FindUsuario($Rut);
        // print_r($Materno);

        if (isset($Id) || isset($Rut) || isset($Primero) || isset($Segundo) || isset($Paterno)
        || isset($Materno) || isset($Mail) || isset($Estado) || isset($Departamento_Id)) {
            // Tipo de usuario clasificación
            // <option value="0">Admin</option>
            // <option value="1">Básico</option>
            // <option value="2">Intermedio</option>
            // <option value="3">Avanzado</option>
            // <option value="4">Inactivo</option>

            //cifra la contraseña con la funcion y la retorna cifrada segun su estado
            $Clave = SHA1(MD5($Clave));

            $this->Crud_User->UpdateUsuario($Id, $Rut, $Primero, $Segundo, $Paterno, $Materno, $Clave, $Mail, $Estado, $Departamento_Id);
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
            echo json_encode(array("msg"=> "Eliminacion de Usuario Completa"));
        } else {
            echo json_encode(array("msg"=> "Usuario no Eliminado"));
        }
    }
    public function UnirUsuarioDepto()
    {
        echo json_encode($this->Crud_User->JoinUsuarioDepto());
    }
    public function BuscarUsuario()
    {
        $Rut = $this->input->post('rut');
        if (isset($Rut)) {
            echo json_encode($this->Crud_User->FindUsuario($Rut));
        } else {
            echo json_encode(array("msg"=> "Usuario no Encontrado"));
        }
    }
    public function ValidarUsuario()
    {
        $Rut = $this->input->post('rut');
        $Clave = $this->input->post('clave');
        if (isset($Rut) && isset($Clave)) {
            if ($Perfil = $this->Crud_User->FindUsuario($Rut)) {
                $Clave = SHA1(MD5($Clave));
                if ($Perfil = $this->Crud_User->LoginSession($Rut, $Clave)) {
                    $this->session->set_userdata('user', $Perfil);
                    echo json_encode(array("msg"=> "Sesion Iniciada","ruta" => "Usuario"));
                } else {
                    echo json_encode(array("msg"=> "Clave Incorrecta"));
                }
            } else {
                echo json_encode(array("msg"=> "Faltan Datos"));
            }
        }
    }
    public function Salir()
    {
        $this->session->sess_destroy();
        
        redirect('Login', 'refresh');
    }
}