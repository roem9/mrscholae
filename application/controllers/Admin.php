<?php
class Admin extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Arab_model', "arab");
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
		}
    }

    public function index(){
        $data['title'] = "Tema";
        
        $data['tema'] = $this->arab->get_all_tema();
        
        $this->load->view("templates/header-admin", $data);
        $this->load->view("admin/index", $data);
        $this->load->view("templates/footer", $data);
    }

    public function kalimat($id){
        
        $tema = $this->arab->get_data_tema($id);

        $data['title'] = $tema['tema'];
        $data['id'] = $id;
        $data['kalimat'] = $this->arab->get_all_mufrodat_by_id($id);
        $data['kata'] = $this->arab->get_all_kata();
        
        $this->load->view("templates/header-admin", $data);
        $this->load->view("admin/kalimat", $data);
        $this->load->view("templates/footer", $data);
    }

    public function kata(){
        $data['title'] = "Kata";
        $data['kata'] = $this->arab->get_all_kata();
        
        $this->load->view("templates/header-admin", $data);
        $this->load->view("admin/kata", $data);
        $this->load->view("templates/footer", $data);
    }

    public function search(){
        $data['title'] = "Kata";

        $data['kata'] = $this->arab->get_all_kata_by_search();
        
        $this->load->view("templates/header-admin", $data);
        $this->load->view("admin/kata", $data);
        $this->load->view("templates/footer", $data);
    }

    public function saran(){
        $data['title'] = "Kritik & Saran";

        $data['saran'] = $this->arab->get_all_saran();
        
        // var_dump($data);
        $this->load->view("templates/header-admin", $data);
        $this->load->view("admin/saran", $data);
        $this->load->view("templates/footer", $data);
    }

    // add
        public function add_tema(){
            $this->arab->add_tema();
            
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil menambahkan tema<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect($_SERVER['HTTP_REFERER']);
        }

        public function add_kalimat(){
            $this->arab->add_kalimat();
            
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil menambahkan kalimat<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect($_SERVER['HTTP_REFERER']);
        }

        public function add_kata_kalimat(){
            $this->arab->add_kata_kalimat();

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil menambahkan kata kalimat<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            
            redirect($_SERVER['HTTP_REFERER']);
        }

        public function add_kata(){
            $this->arab->add_kata();

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil menambahkan kata<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            
            redirect($_SERVER['HTTP_REFERER']);
        }
    // add

    // get
        public function get_kalimat_by_id(){
            $id = $this->input->post("id");
            $data = $this->arab->get_kalimat_by_id($id);
            echo json_encode($data);
        }

        public function get_detail_kata_kalimat(){
            $id = $this->input->post("id");
            $data = $this->arab->get_detail_kata_kalimat($id);
            echo json_encode($data);
        }

        public function get_data_kata_by_id(){
            $id = $this->input->post("id");
            $data = $this->arab->get_data_kata_by_id($id);
            echo json_encode($data);
        }
    // get

    // edit
        public function edit_kalimat(){
            $this->arab->edit_kalimat();

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil mengubah kalimat<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect($_SERVER['HTTP_REFERER']);
        }

        public function edit_kata(){
            $this->arab->edit_kata();

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil mengubah kata<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect($_SERVER['HTTP_REFERER']);
        }
    // edit

    // delete
        public function delete_kata_kalimat(){
            $this->arab->delete_kata_kalimat();

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil menghapus kata kalimat<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect($_SERVER['HTTP_REFERER']);
        }
    // delete
}