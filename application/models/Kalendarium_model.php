<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kalendarium_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function tetelek_listazasa()
    {
        return $this->db->get('tetelek')->result_array();
    }

    public function tetel_rogzitese($data)
    {
        $this->db->insert('tetelek', $data);
        return $this->db->insert_id();
    }

    public function naptar_feltoltese()
    {
        return $this->db->get('tetelek')->result_array();
    }

}

/* End of file Kalendarium_model.php */

?>
