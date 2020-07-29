<?php 
class Latihan extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Latihan_model");
        $this->load->model("Admin_model");
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
        }
    }

    public function latihan_mufrodat(){
        $id = $this->session->userdata('id');
        $id_mufrodat = $this->input->post("id_mufrodat", TRUE);
        $latihan = $this->input->post("latihan", TRUE);
        $data = [
            "id_mufrodat" => $id_mufrodat,
            "id_user" => $id, 
            "latihan" => $latihan
        ];
        
        $cek = $this->Latihan_model->cek_latihan_mufrodat($id, $id_mufrodat, $latihan);

        if(!$cek)
            $this->Latihan_model->add_latihan_mufrodat($data);

        redirect('kosakata/bagian/' . $id_mufrodat);
    }

    public function add_latihan(){
        $id = $this->session->userdata('id');
        $redirect = $this->input->post("redirect", TRUE);
        $latihan = $this->input->post("latihan", TRUE);
        $materi = $this->input->post("materi", TRUE);

        $cek = $this->Admin_model->get_one("latihan", ["id_user" => $id, "latihan" => $latihan, "materi" => $materi]);

        $data = [
            "latihan" => $latihan,
            "id_user" => $id,
            "materi" => $materi
        ];
        
        if(!$cek)
        //     // $this->Latihan_model->add_latihan($data);
            $this->Admin_model->add_data("latihan", $data);

        redirect($redirect);
    }
}