<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vistas extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/Navbar');
       
       
        $this->load->view('Welcome2'); // pagina index
       
       
        $this->load->view('templates/footerers');
    }
    
    public function Nosotros()
    {
        $this->load->view('templates/Navbar');
       
       
        $this->load->view('NOSOTROSfolder/Nosotros');
       
       
        $this->load->view('templates/footerers');
    }

    public function Servicios()
    {
        $this->load->view('templates/Sidenav');
   
   
        $this->load->view('SERVICIOSfolder/Servicio');
   
   
        $this->load->view('templates/footerers');
    }

    
    public function Monitoreo()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('TECNOLOGIAfolder/Monitoreo');
   
   
        $this->load->view('templates/footerers');
    }

    public function SmartPanic()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('TECNOLOGIAfolder/SmartPanic');
   
   
        $this->load->view('templates/footerers');
    }

    public function TrackGuard()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('TECNOLOGIAfolder/TrackGuard');
   
   
        $this->load->view('templates/footerers');
    }

    public function VideoVigilancia()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('TECNOLOGIAfolder/VideoVigilancia');
   
   
        $this->load->view('templates/footerers');
    }

    public function ggss()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('TRABAJOSfolder/ggss');
   
   
        $this->load->view('templates/footerers');
    }
    public function ssppz()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('TRABAJOSfolder/ssppz');
   
   
        $this->load->view('templates/footerers');
    }

    public function Capacitaciones()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('TRABAJOSfolder/Capacitaciones');
   
   
        $this->load->view('templates/footerers');
    }

    public function Contactar()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('CONTACTOfolder/Contactar');
   
   
        $this->load->view('templates/footerers');
    }

    public function Requerimientos()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('CONTACTOfolder/Requerimientos');
   
   
        $this->load->view('templates/footerers');
    }
    
    public function Sucursales()
    {
        $this->load->view('templates/Navbar');
   
   
        $this->load->view('NOSOTROSfolder/Sucursales');
   
   
        $this->load->view('templates/footerers');
    }

    public function Login()
    {
        $this->load->view('templates/INTRANETNavbar');

        $this->load->view('INTRANETfolder/Login');
        
        $this->load->view('templates/INTRANETFooter');
    }

    public function Usuarios()
    {
        $this->load->view('templates/INTRANETNavbar');
        $this->load->view('INTRANETfolder/Usuarios');
        $this->load->view('templates/INTRANETFooter');
    }
}