<?php
    
    defined('BASEPATH') or exit('No direct script access allowed');
    

    class Crud_MatrizCotizante extends CI_Model
    {
        public function SelectMC()
        {
            return $this->db->get('matriz_cotizante')->result();
        }
        public function InsertMC($Empresa_Id, $Contacto_Id, $Natural_Id, $Servicio_Id)
        {
            $data = array(
                'Empresa_Id'      => $Empresa_Id,
                'Contacto_Id'     => $Contacto_Id,
                'Natural_Id'   => $Natural_Id,
                'Servicio_Id'    => $Servicio_Id,
                );
            return $this->db->insert('matriz_cotizante', $data);
        }

        public function UpdateMC($Id, $Empresa_Id, $Contacto_Id, $Natural_Id, $Servicio_Id)
        {
            $data = array(
                'Id'            => $Id,
                'Empresa_Id'      => $Empresa_Id,
                'Contacto_Id'     => $Contacto_Id,
                'Natural_Id'   => $Natural_Id,
                'Servicio_Id'    => $Servicio_Id,
                );
            return $this->db->update('matriz_cotizante', $data);
        }
        public function DeleteMC($Id)
        {
            $this->db->where('Id', $$Id);
            return $this->db->delete('matriz_cotizante');
        }
    }