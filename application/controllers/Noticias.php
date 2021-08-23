<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Noticias extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Crud_Categoria");
        $this->load->model("Crud_Noticias");
    }



    #################--->          Categoria Crud tabla         <---#################

    public function VerCategoria()
    {
        echo json_encode($this->Crud_Categoria->SelectCategorias());
    }
    public function BuscarCategoria()
    {
        $Nombre = $this->input->post("Nombre");
        if (isset($Nombre)) {
        echo json_encode($this->Crud_Categoria->BuscarCategorias($Nombre));
    } else {
        echo json_encode(array("msg"=> "Sin Resultados"));
    }
    }



    public function CrearCategoria()
    {
        $Nombre = $this->input->post("Nombre");

        if (isset($Nombre)) {
        
            /*Nombre Crud Función->*/ $this->Crud_Categoria->InsertCategorias($Nombre);

            echo json_encode(array("msg" => "Categoria Creado"));
        } else {
            echo json_encode(array("msg"=> "No Creado el Categoria"));
        }
    }



    public function ActualizarCategoria()
    {
        $Id = $this->input->post("Id");
        $Nombre = $this->input->post("Nombre");
        if (isset($Id) || isset($Nombre)) {
            /*Nombre Crud Función->*/ $this->Crud_Categoria->UpdateCategorias($Id, $Nombre);
            echo json_encode(array("msg" => "Categoria Actualizado!!"));
        } else {
            echo json_encode(array("msg" => "No se Actualizo Categoria!!"));
        }
    }



    public function EliminarCategoria()
    {
        $Id = $this->input->post("Id");

        if (isset($Id)) {
            /*Nombre Crud Función->*/ $this->Crud_Categoria->DeleteCategoria($Id);
            echo json_encode(array("msg" => "Categoria Eliminado!!"));
        } else {
            echo json_encode(array("msg" => "No se Pudo Eliminar el Categoria!!"));
        }
    }


     #################--->          Noticias Crud tabla         <---#################

     public function VerNoticias()
     {
         echo json_encode($this->Crud_Noticias->SelectNoticias());
     }
 
     public function BuscarNoticias()
     {
         $Categoria_Id = $this->input->post("Categoria_Id");
         if (isset($Categoria_Id)) {
         echo json_encode($this->Crud_Noticias->BuscarNoticias($Categoria_Id));
     } else {
         echo json_encode(array("msg"=> "Sin Resultados"));
     }
     }

     public function BuscarNoticias_Titulo()
     {
         $Titulo = $this->input->post("Titulo");
         if (isset($Titulo)) {
         echo json_encode($this->Crud_Noticias->BuscarNoticias_Titulo($Titulo));
     } else {
         echo json_encode(array("msg"=> "Sin Resultados"));
     }
     }
 
     public function Recientes()
     {
         echo json_encode($this->Crud_Noticias->Recientes());
     }
 

     public function CrearNoticias()
     {
         $Fecha_registro = $this->input->post("Fecha_registro");
         $Titulo = $this->input->post("Titulo");
         $img = $this->input->post("img");
         $Contenido = $this->input->post("Contenido");
         $Categoria_id = $this->input->post("Categoria_id");

 
         if (isset($Fecha_registro)&isset($Titulo)&isset($img)&isset($Contenido)&isset($Categoria_id)) {
         
             /*Nombre Crud Función->*/ $this->Crud_Noticias->InsertNoticias($Fecha_registro,$Titulo,$img,$Contenido,$Categoria_id);
 
             echo json_encode(array("msg" => "Noticias Creado"));
         } else {
             echo json_encode(array("msg"=> "No Creado el Noticias"));
         }
     }
 
 
 
     public function ActualizarNoticias()
     {
         $Id = $this->input->post("Id");
         $Fecha_registro = $this->input->post("Fecha_registro");
         $Titulo = $this->input->post("Titulo");
         $img = $this->input->post("img");
         $Contenido = $this->input->post("Contenido");
         $Categoria_id = $this->input->post("Categoria_id");

         
         if (isset($Id)&isset($Fecha_registro)&isset($Titulo)&isset($img)&isset($Contenido)&isset($Categoria_id)) {
             /*Nombre Crud Función->*/ $this->Crud_Noticias->UpdateNoticias($Id,$Fecha_registro,$Titulo,$img,$Contenido,$Categoria_id);
             echo json_encode(array("msg" => "Noticias Actualizado!!"));
         } else {
             echo json_encode(array("msg" => "No se Actualizo Noticias!!"));
         }
     }
 
 
 
     public function EliminarNoticias()
     {
         $Id = $this->input->post("Id");
 
         if (isset($Id)) {
             /*Nombre Crud Función->*/ $this->Crud_Noticias->DeleteNoticias($Id);
             echo json_encode(array("msg" => "Noticias Eliminado!!"));
         } else {
             echo json_encode(array("msg" => "No se Pudo Eliminar el Noticias!!"));
         }
     }
 
   
     public function Navegar()
     {
         // null !==  $this->uri->segment(2) //

         $this->load->view('templates/Navbar');
        
         if(null !==  $this->uri->segment(2)){
            if(null !==  $this->uri->segment(3)){

                $this->load->view('NOTICIASfolder/Contenido');

            }else{

            $this->load->view('NOTICIASfolder/Categorias'); 

        }
         }else{

             $this->load->view('NOTICIASfolder/Noticias'); 

            }
            
         $this->load->view('templates/footerers');

         }

}