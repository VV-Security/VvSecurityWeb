<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * undocumented class
 */
class Crud_Extras extends CI_Model
{
    public function SelectExtras()
    {
        return $this->db->get('extras')->result();
    }
    
    public function InsertExtras($CaptorRonda, $CtrlAsis, $SuperExcl, $CamSeg, $AlarmSeg)
    {
        $data = array(
            'CaptorRonda' => $CaptorRonda,
            'CtrlAsis' => $CtrlAsis,
            'SuperExcl' => $SuperExcl,
            'CamSeg' => $CamSeg,
            'AlarmSeg' => $CamSeg
        );
        $this->db->insert('extras', $data);
    }
    
    public function UpdateExtras($Id, $CaptorRonda, $CtrlAsis, $SuperExcl, $CamSeg, $AlarmSeg)
    {
        $data = array(
            'Id' => $Id,
            'CaptorRonda' => $CaptorRonda,
            'CtrlAsis' => $CtrlAsis,
            'SuperExcl' => $SuperExcl,
            'CamSeg' => $CamSeg,
            'AlarmSeg' => $CamSeg
        );
        $this->db->update('extras', $data);
    }
    public function DeleteExtras($Id)
    {
        $this->db->where('extras', $Id);
        $this->db->delete('extras');
    }
}



/* End of file filename.php */