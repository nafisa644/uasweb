<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
       
    }
    public function index()
    {
        $this->load->view('v_pendaftaran');
    }

    public function aksi()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

        if($this->form_validation->run() != false){
            echo "Form Validation oke";
        }else{
            $this->load->view('v_pendaftaran');
        }
    }
}