<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index()
    {
        $data['user'] = $this->m_data->ambil_data()->result();
        $this->load->view('v_admin',$data);
     
        
    }
    function tambah() {
        $this->load->view('v_admin');
    }
    function tambah_aksi(){
        $nama = $this->input->post('nama');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $ttl = $this->input->post('ttl');
        $jumblahsaudara = $this->input->post('jumblahsaudara');
        $asalsekolah = $this->input->post('asalsekolah');
        $namaayah = $this->input->post('namaayah');
        $namaibu = $this->input->post('namaibu');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('notelp');

        $data = array(
            'nama' => $nama,
            'jeniskelamin' => $jeniskelamin,
            'ttl' => $ttl,
            'jumblahsaudara' => $jumblahsaudara,
            'asalsekolah' => $asalsekolah,
            'namaayah' => $namaayah,
            'namaibu' => $namaibu,
            'alamat' => $alamat,
            'notelp' => $notelp
        );
        $input = $this->m_data->input_data($data);
        if ($input) {
            //jika berhasil, set flashdata untuk pesan berhasil
            $this->session->set_flashdata('message', 'Selamat Anda Berhasil Mendaftar.');
        } else {
            //jika terjadi kesalahan, tangkap exception dan set flashdata untuk pesan kesalahan
            $this->session->set_flashdata('error', 'Gagal menambahkan data.');
        }
        redirect('ppdb/pendaftaran');
    }
    
 function hapus($no) {
    $delete = $this->m_data->hapus_data($no);

    if ($delete) {
        //jika berhasil, set flashdata untuk pesan berhasil
        $this->session->set_flashdata('message', 'Data ID'.$no. 'berhasil dihapus.');
    } else {
         //jika terjadi kesalahan, tangkap exception dan set flashdata untuk pesan kesalahan
         $this->session->set_flashdata('error', 'Gagal menghapus data ID: '.$no);
        }
        redirect('ppdb/admin');
    }

    function edit($no) {
        $data['admin'] = $this->m_data->getById($no);
        $this->load->view('v_header', $data);
        $this->load->view('v_edit',$data);
        $this->load->view('v_footer', $data);
    }

    function update() {
        $no = $this->input->post('no');
        $nama = $this->input->post('nama');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $ttl = $this->input->post('ttl');
        $jumblahsaudara = $this->input->post('jumblahsaudara');
        $asalsekolah = $this->input->post('asalsekolah');
        $namaayah = $this->input->post('namaayah');
        $namaibu = $this->input->post('namaibu');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('notelp');

        $data = array(
           'nama' => $nama,
            'jeniskelamin' => $jeniskelamin,
            'ttl' => $ttl,
            'jumblahsaudara' => $jumblahsaudara,
            'asalsekolah' => $asalsekolah,
            'namaayah' => $namaayah,
            'namaibu' => $namaibu,
            'alamat' => $alamat,
            'notelp' => $notelp
        );

        $update = $this->m_data->update_data($data, $no);
        if ($update) {
            //jika berhasil set flashdata untuk pesan berhasil
            $this->session->set_flashdata('message', 'Data berhasil diubah.');
        } else {
            //jika data terjadi kesalahan, tangkap exception dan set flashdata untuk pesan kesalahan
            $this->session->set_flashdata('error', 'Gagal mengubah data');
        }
        redirect('ppdb/admin');
    }
}
 