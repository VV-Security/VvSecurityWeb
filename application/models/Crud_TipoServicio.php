<?php
    
    defined('BASEPATH') or exit('No direct script access allowed');
    
    class Crud_TipoServicio extends CI_Model
    {
        public function SelectTS()
        {
            return $this->db->get('tipo_servicio')->result();
        }
        public function InsertTS($Ggss, $ServiAseoInd, $Caseta, $Otros)
        {
            $object = array(
                'Ggss' => $Ggss,
                'ServiAseoind' => $ServiAseoInd,
                'Caseta'=>$Caseta,
                'Otros' => $Otros
            );
            return $this->db->insert('tipo_servicio', $object);
        }
        public function UpdateTS($Id, $Ggss, $ServiAseoInd, $Caseta, $Otros)
        {
            $object = array(
                'Id' => $Id,
                'Ggss' => $Ggss,
                'ServiAseoind' => $ServiAseoInd,
                'Caseta'=>$Caseta,
                'Otros' => $Otros
            );
            return $this->db->insert('tipo_servicio', $object);
        }
        public function DeleteTS($Id)
        {
            $this->db->where('id', $Id);
            return $this->db->delete('tipo_servicio');
        }
    }