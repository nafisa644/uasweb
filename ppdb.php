<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('m_data');
        $this->load->library('session');
    }
    public function index()
    {
        $data['judul'] = "Halaman depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
    }

    public function pendaftaran()
    {
        $data['judul'] = "PPDB MTs Babussalam";
        $this->load->view('v_header', $data);
        $this->load->view('v_pendaftaran', $data);
        $this->load->view('v_footer', $data);
    }

    function tambah() {
        $this->load->view('v_pendaftaran');
    }
    public function admin()
    {
        $data['judul'] = "Data Siswa-Siswi baru";
        $this->load->view('v_header', $data);
        $this->load->library('pagination');
        $data['admin'] = $this->m_data->ambil_data()->result();
        $total_rows = $this->m_data->jumblah_data();
    
        // Konfigurasi pagination
        $config['base_url'] = base_url('ppdb/admin');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        // Inisialisasi pagination
        $form = $this->uri->segment(3);
        $this->pagination->initialize($config);

        // Mendapatkan data sesuai dengan pagination
        
        $data['admin'] = $this->m_data->data_paging($config['per_page'], $form);
        $this->load->view('v_admin',$data);
        $this->load->view('v_footer', $data);
    }

        public function aksi()
        {
            $data['judul'] = "Data Siswa-Siswi baru";
           
    
            // Aturan validasi untuk setiap field
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_validate_special_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
    
            // Cek validasi form
            if ($this->form_validation->run() != false) {
                echo "Form Validation oke";
                redirect('v_admin');
            } else {
                $this->load->view('v_form');
            }   
        }
    
        // Callback function untuk memvalidasi email khusus
        public function validate_special_email($email)
        {
            if ($email === 'mtsbbs@gmail.com') {
                return TRUE;
            } else {
                $this->form_validation->set_message('validate_special_email', 'Email harus mtsbbs@gmail.com');
                return FALSE;
            }
        }
    }
    
    

