<?php
class bantuan extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Arab_model', "arab");
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
		}
    }

    public function index(){
        $data['title'] = "Bantuan";

        $this->load->view("templates/header-user", $data);
        $this->load->view("materi/katalog_materi", $data);
        $this->load->view("templates/footer-user", $data);
    }
}