<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * undocumented class
 */
class Crud_Requerimientos extends CI_Model
{
    public function SelectRequerimientos()
    {
        return $this->db->get('requerimiento')->result();
    }
    public function InsertRequerimientos($Nombre, $Observacion, $Fecha_Ing, $Fecha_Fin, $Respuesta)
    {
        $object = array(
            'Nombre' => $Nombre,
            'Observacion' => $Observacion,
            'Fecha_Ing' => $Fecha_Ing,
            'Fecha_Fin' => $Fecha_Fin,
            'Respuesta' => $Respuesta
     );
        return $this->db->insert('requerimiento', $object);
    }
    public function UpdateRequerimientos($Id, $Nombre, $Observacion, $Fecha_Ing, $Fecha_Fin, $Respuesta)
    {
        $object = array(
            'Id' => $Id,
            'Nombre' => $Nombre,
            'Observacion' => $Observacion,
            'Fecha_Ing' => $Fecha_Ing,
            'Fecha_Fin' => $Fecha_Fin,
            'Respuesta' => $Respuesta
     );
        return $this->db->update('requerimiento', $object);
    }
    public function DeleteRequerimientos($Id)
    {
        $this->db->where('Id', $Id);
        return $this->db->delete('requerimiento');
    }
}


/* End of file Crud_Requerimientos.php */