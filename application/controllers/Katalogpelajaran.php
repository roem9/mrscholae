<?php 
class Katalogpelajaran extends CI_CONTROLLER {
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login/user"));
		}
    }

    public function index(){
        $id = $this->session->userdata("id");

        $data['title'] = "Katalog Pelajaran";

        $id_level = ['0'];
        $level = $this->Arab_model->get_all_level_by_id_user($id);
        foreach ($level as $i => $level) {
            $id_level[$i] = $level['id_level'];
        }

        $data['level'] = $this->Arab_model->get_all_level_not_by_id_user($id_level);
        $kata = $this->Arab_model->get_kata_user_by_id_user($id);
        // $data['level'] = 0;

        $data['kata'] = 0;
        foreach ($kata as $kata) {
            if($kata['latihan'] == 2){
                $data['kata'] += $kata['kata'];
            }
        }

        $this->load->view("templates/header-user", $data);
        $this->load->view("materi/katalog_materi", $data);
        $this->load->view("templates/footer-user", $data);
    }

    // get
        public function get_materi_by_id_level(){
            $id = $this->input->post("id");
            $data = $this->Arab_model->get_materi_by_id_level($id);
            echo json_encode($data);
        }

        public function get_level_by_id_level(){
            $id = $this->input->post("id");
            $data = $this->Arab_model->get_level_by_id_level($id);
            $data['id_pembelian'] = $this->Arab_model->get_last_id_pembelian();
            echo json_encode($data);
        }
    // get

    // add
        public function add_pembelian(){
            $id = $this->input->post("id_level");
            $level = $this->Arab_model->get_level_by_id_level($id);
            $kata = $this->Arab_model->get_kata_user_by_id_user($this->session->userdata("id"));
            $total_kata = 0;
            foreach ($kata as $kata) {
                if($kata['latihan'] == 2){
                    $kosa_kata += $kata['kata'];
                }
            }

            if($total_kata >= $level['min_kata']){
                // cek apakah memiliki level sebelumnya
                $cek = $this->Arab_model->get_level_user_by_id_user_id_level($this->session->userdata("id"), $id-1);
                if($cek){
                    if($cek['status'] == 0){
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf, Anda belum diizinkan membeli pelajaran ini karena Anda belum menyelesaikan pelajaran level sebelumnya. Silahkan menyelesaikan pelajaran Anda terlebih dahulu <a href="'.base_url().'/daftar/pelajaranku" class="text-primary">disini</a><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect(base_url("katalogpelajaran"));
                    } else {
                        $this->Arab_model->add_pembelian();
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">silahkan melakukan pembayaran terlebih dahulu<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect(base_url("katalogpelajaran"));
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf, Anda belum diizinkan membeli pelajaran ini karena Anda belum membeli pelajaran sebelumnya.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect(base_url("katalogpelajaran"));
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf, Anda belum diizinkan membeli pelajaran ini karena Anda belum memenuhi kosa kata minimal. Silahkan menambah pengetahuan kosa kata Anda <a href="'.base_url().'/daftar/pelajaranku" class="text-primary">disini</a><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect(base_url("katalogpelajaran"));
            }
        }
}