<?php 
class Daftar extends CI_CONTROLLER {
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login/user"));
		}
    }

    public function pelajaranku(){

        $data['title'] = "Pelajaran Saya";

        $id = $this->session->userdata("id");

        $data['level'] = $this->Arab_model->get_all_level();
        
        $this->load->view("templates/header-user", $data);
        $this->load->view("user/pelajaranku", $data);
        $this->load->view("templates/footer-user", $data);
    }

    // get
        public function get_materi_by_id_level(){
            $id = $this->input->post("id");
            $data = $this->Arab_model->get_materi_by_id_level($id);
            echo json_encode($data);
        }
    // get
}