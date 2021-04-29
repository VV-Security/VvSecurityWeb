<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Views extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('welcome_message');
        // $this->load->view('templates/footer'); ---> lo coloque en la interfaz directamente
    }
}