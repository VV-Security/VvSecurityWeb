<?php

defined('BASEPATH') or exit('No direct script access allowed');

    class Crud_Estados extends CI_Model
    {
        public function SelectEstados()
        {
            return $this->db->get('estados')->result();
        }
        public function InsertEstados($Nombre)
        {
            $object = array('Nombre' => $Nombre);
            return $this->db->insert('estados', $object);
        }
       
        public function UpdateEstados($Id, $Nombre)
        {
            $object = array(
                'Id' => $Id,
                'Nombre' => $Nombre
            );
            return $this->db->update('estados', $object);
        }
        public function DeleteEstados($Id)
        {
            $this->db->where('Id', $Id);
            return $this->db->delete('estados');
        }
    }
    

/* End of file Crud_Estados.php */