<?php
class Beranda extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Arab_model');
        $this->load->model('Admin_model');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
		}
    }

    public function index(){
        $id = $this->session->userdata("id");

        $data['title'] = "Profil";
        
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['kelas'] = $this->Admin_model->get_one("kelas", ["id_kelas" => $data['user']['id_kelas']]);
        $data['dosen'] = $this->Admin_model->get_one("dosen", ["id_dosen" => $data['kelas']['id_dosen']]);

        $kosa_kata = 0;
        $kata_user = $this->Admin_model->get_all_group_by("kata_user", ["id_user" => $id], "id_mufrodat");
        foreach ($kata_user as $kata) {
            $mufrodat = COUNT($this->Admin_model->get_all("kata_user", ["id_mufrodat" => $kata['id_mufrodat']]));
            if($mufrodat == 2){
                $jumlah_kata = $this->Admin_model->get_one("mufrodat", ["id_mufrodat" => $kata['id_mufrodat']]);
                $kosa_kata += $jumlah_kata['kata'];
            }
        }
        $data['kata'] = $kosa_kata;
        $data['latihan'] = COUNT($this->Admin_model->get_all("latihan", ["id_user" => $id, "mustawa" => $data['kelas']['mustawa']]));

        
        $this->load->view("templates/header-user", $data);
        $this->load->view("user/profil", $data);
        $this->load->view("templates/footer-user", $data);
    }

    // edit
        public function edit_user_by_id(){
            $id = $this->input->post("id_user");
            $data = [
                "nama" => $this->input->post("nama", TRUE),
                "jk" => $this->input->post("jk", TRUE),
                "tgl_lahir" => $this->input->post("tgl_lahir", TRUE)
            ];
            $this->Admin_model->edit_data("user", ["id_user" => $id], $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil merubah profil Anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect($_SERVER['HTTP_REFERER']);
        }

        public function edit_password(){
            $id = $this->input->post("id_user");
            $this->Arab_model->edit_password($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil mengganti password Anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
    // edit

    public function get_user_by_id(){
        $id = $this->input->post("id");
        $data = $this->Arab_model->get_user_by_id($id);
        echo json_encode($data);
    }

    public function get_kata_user_by_id_user(){
        $id = $this->input->post("id");
        $data = $this->Arab_model->get_kata_user_by_id_user($id);
        foreach ($data as $i => $kata) {
            if($kata['latihan'] == 2){
                $data[$i]['tema'] = $kata['tema'];
                $data[$i]['kata'] = $kata['kata'];
            }
        }
        echo json_encode($data);
    }
}