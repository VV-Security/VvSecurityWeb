<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_User extends CI_Model
{
    public function Usuarios()
    {
        return $this->db->get("Usuarios")->result();
    }
}