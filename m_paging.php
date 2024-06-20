<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paging extends CI_Model {

    function data_paging($number, $offset) {
        return $this->db->get('siswa',$number,$offset)->result();
    }

    function jumblah_data() {
        return $this->db->get('siswa')->num_rows();
    }
}