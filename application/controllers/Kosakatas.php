<?php

class Kosakata extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Arab_model');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
        }
        
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
    }

    public function index(){
        $data['title'] = "Kosa Kata";
        $id = $this->session->userdata("id");

        $tema = $this->Arab_model->get_all_tema();

        foreach ($tema as $i => $tema) {
            $data['tema'][$i] = $this->Arab_model->get_data_tema($tema['id_tema']);
            $status = COUNT($this->Arab_model->get_tema_by_id_tema_id_user($tema['id_tema'], $id));
            if($status == 2){
                $data['tema'][$i]['status'] = "on";
            } else {
                $data['tema'][$i]['status'] = "off";
            }
        }
        // var_dump($data);
        $this->load->view("templates/header-user", $data);
        $this->load->view("user/tema", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function bagian($id){
        $tema = $this->Arab_model->get_data_tema($id);
        $data['title'] = $tema['tema'];
        
        $id_user = $this->session->userdata("id");

        $data['latihan'][0] = $this->Arab_model->cek_latihan_mufrodat($id_user, $tema['id_tema'], "Latihan 1");
        $data['latihan'][1] = $this->Arab_model->cek_latihan_mufrodat($id_user, $tema['id_tema'], "Latihan 2");
        
        $data['mufrodat'] = $this->Arab_model->get_all_mufrodat_by_id($id);
        // var_dump($data);
        $this->load->view("templates/header-user", $data);
        $this->load->view("user/mufrodat", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function latihan1($id){
        $tema = $this->Arab_model->get_data_tema($id);

        $data['id_tema'] = $id;
        $data['title'] = "Latihan 1 " . $tema['tema'];
        
        $data['fiil'] = [];
        $data['isim'] = [];
        $data['dhomir'] = [];
        $data['huruf'] = [];
        
        $mufrodat = $this->Arab_model->get_all_mufrodat_by_id($id);
        foreach ($mufrodat as $i => $mufrodat) {
            $data['mufrodat'][$i] = $mufrodat;
            $data['mufrodat'][$i]['kata'] = $this->Arab_model->get_detail_kalimat_by_id_kalimat($mufrodat['id_kalimat']);
        }

        $fiil = $this->Arab_model->get_detail_kalimat_by_jenis_by_id_tema("fiil", $id);
        foreach ($fiil as $i => $fiil) {
            $data['fiil'][$i] = $fiil['kata'];
        }

        $huruf = $this->Arab_model->get_detail_kalimat_by_jenis_by_id_tema("huruf", $id);
        foreach ($huruf as $i => $huruf) {
            $data['huruf'][$i] = $huruf['kata'];
        }

        $isim = $this->Arab_model->get_detail_kalimat_by_jenis_by_id_tema("isim", $id);
        foreach ($isim as $i => $isim) {
            $data['isim'][$i] = $isim['kata'];
        }
        
        $dhomir = $this->Arab_model->get_detail_kalimat_by_jenis_by_id_tema("dhomir", $id);
        foreach ($dhomir as $i => $dhomir) {
            $data['dhomir'][$i] = $dhomir['kata'];
        }
        
        shuffle($data['fiil']);
        shuffle($data['huruf']);
        shuffle($data['isim']);
        shuffle($data['dhomir']);

        // var_dump($data);
        $this->load->view("templates/header-user", $data);
        $this->load->view("user/latihan-mufrodat", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function latihan2($id){
        $tema = $this->Arab_model->get_data_tema($id);

        $data['id_tema'] = $id;
        $data['title'] = "Latihan 2 " . $tema['tema'];
        
        $mufrodat = $this->Arab_model->get_all_kata_by_id_tema($id);
        foreach ($mufrodat as $i => $mufrodat) {
            $data['mufrodat'][$i] = $mufrodat;
            // $data['mufrodat'][$i]['kata'] = $this->Arab_model->get_detail_kalimat_by_id_kalimat($mufrodat['id_kalimat']);
        }

        $kata = $this->Arab_model->get_all_kata_by_id_tema($id);
        foreach ($kata as $i => $kata) {
            $data['kata'][$i] = $kata['kata_arab'];
        }

        shuffle($data['kata']);
        // var_dump($data);
        $this->load->view("templates/header-user", $data);
        $this->load->view("user/latihan-mufrodat-2", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function cetak($id){
        
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P', 'margin_top' => '10', 'margin_left' => '25', 'margin_right' => '25', 'margin_bottom' => '10']);

        $tema = $this->Arab_model->get_data_tema($id);

        $cek['title'] = $tema['tema'];
        
        $cek['mufrodat'] = $this->Arab_model->get_all_mufrodat_by_id($id);
        
        // $this->load->view("templates/header-login", $data);
        
        // $data = "Hello World";
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
		$data = $this->load->view("pdf/mufrodat-pertema", $cek, TRUE);
        $mpdf->WriteHTML($data);
		$mpdf->Output("{$tema['tema']}.pdf", "I");
    }

    public function get_data_kalimat(){
        $id = $this->input->post("id");
        $data = $this->Arab_model->get_data_kalimat($id);
        echo json_encode($data);
    }

    public function get_data_kata(){
        $id = $this->input->post("id");
        $data = $this->Arab_model->get_data_kata($id);
        echo json_encode($data);
    }
}