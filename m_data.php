<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

    function ambil_data() {
        return $this->db->get('siswa');
    }

    function input_data($data) {
        try {
            $this->db->insert('siswa', $data);
            return true; //jika berhasil input data
        } catch (Exception $e) {
            log_message('error', $e->getMessage()); //catat pesan error ke log
            return false; //jika terjadi kesalahan, kembalikan false
        }
    }

    function hapus_data($no) {
        try {
            //lakukan penghapusan data
            $this->db->where('no', $no);
            $this->db->delete('siswa');

            //periksa apakah data berhasil dihapus atau tidak
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            } else {
                throw new Exception("Gagal menghapus data atau data tidak ditemukan.");
            }
        } catch (Exception $e) {
            //tangani pengecualian
            log_message('error', $e->getMessage());
            return FALSE;
        }
    }

    function getById($no) {
        $query = $this->db->get_where('siswa' , array('no' => $no));

        //periksa apakah data ditemukan
        if ($query->num_rows() > 0) {
            //jika data ditemukan kembalikanhasil query dalam bentuk array
            return $query->row();
        } else {
            //jika data tidak ditemukan, kembalikan NULL
            return NULL;
        }
    }

    function update_data($data, $no) {
        try {
            $this->db->where('no',$no);
            $this->db->update('siswa',$data);
            return true; //jika berhasil input data
        } catch (Exception $e) {
            log_message('error', $e->getMessage()); //catat pesan error ke log
            return false; //jika terjadi kesalahan, kembalikan false
        }
    }
    function data_paging($number, $offset) {
        return $this->db->get('siswa',$number,$offset)->result();
    }

    function jumblah_data() {
        return $this->db->get('siswa')->num_rows();
    }
}