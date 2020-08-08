<?php 
class Mufrodat extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        $this->load->model("Admin_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
        }
    }

    public function index(){
        $id = $this->session->userdata('id');
        $data['listmurojaah'] = $this->Admin_model->get_all("murojaah", ["id_user" => $id]);
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['murojaah'] = [];
        $data['arti'] = [];
        $murojaah = $this->Admin_model->get_all("murojaah", ["id_user" => $id]);

        foreach ($murojaah as $i => $arab) {
            $data['murojaah'][$i] = $arab['kata_arab'];
        }

        foreach ($murojaah as $i => $arab) {
            $data['arti'][$i] = $arab['arti'];
        }

        // var_dump($data['murojaah']);
        // exit();

        if($_GET){
            if(!empty($_GET['tema'])){
                if($_GET['tema'] == MD5('Kamar dan Asrama')){
                    $data['title'] = 'Kamar dan Asrama';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 1","Kata Benda 1", "Kamar dan Asrama", 7);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 2","Kata Kerja 1", "Kamar dan Asrama", 8);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 3","Kata Benda 2", "Kamar dan Asrama", 7);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 4","Kata Kerja 2", "Kamar dan Asrama", 8);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 5","Kata Benda 3", "Kamar dan Asrama", 7);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 6","Kata Kerja 3", "Kamar dan Asrama", 8);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 7","Kata Benda 4", "Kamar dan Asrama", 7);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 8","Kata Kerja 4", "Kamar dan Asrama", 8);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 9","Kata Benda 5", "Kamar dan Asrama", 7);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 10","Kata Kerja 5", "Kamar dan Asrama", 8);
                    $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 11","Kata Benda 6", "Kamar dan Asrama", 7);
                    $data['mufrodat'][12] = $this->latihan($id, "Mufrodat 12","Kata Kerja 6", "Kamar dan Asrama", 8);
                    $data['mufrodat'][13] = $this->latihan($id, "Mufrodat 13","Kata Benda 7", "Kamar dan Asrama", 7);
                    $data['mufrodat'][14] = $this->latihan($id, "Mufrodat 14","Kata Kerja 7", "Kamar dan Asrama", 7);
                } else if($_GET['tema'] == MD5('Sekolah dan Kelas')){
                    $data['title'] = 'Sekolah dan Kelas';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 15","Kata Benda 1", "Sekolah dan Kelas", 8);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 16","Kata Kerja 1", "Sekolah dan Kelas", 7);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 17","Kata Benda 2", "Sekolah dan Kelas", 8);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 18","Kata Kerja 2", "Sekolah dan Kelas", 7);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 19","Kata Benda 3", "Sekolah dan Kelas", 8);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 20","Kata Kerja 3", "Sekolah dan Kelas", 7);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 21","Kata Benda 4", "Sekolah dan Kelas", 8);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 22","Kata Kerja 4", "Sekolah dan Kelas", 7);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 23","Kata Benda 5", "Sekolah dan Kelas", 8);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 24","Kata Kerja 5", "Sekolah dan Kelas", 7);
                    $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 25","Kata Benda 6", "Sekolah dan Kelas", 8);
                    $data['mufrodat'][12] = $this->latihan($id, "Mufrodat 26","Kata Kerja 6", "Sekolah dan Kelas", 7);
                    $data['mufrodat'][13] = $this->latihan($id, "Mufrodat 27","Kata Benda 7", "Sekolah dan Kelas", 8);
                    $data['mufrodat'][14] = $this->latihan($id, "Mufrodat 28","Kata Kerja 7", "Sekolah dan Kelas", 7);
                } else if($_GET['tema'] == MD5('Masjid')){
                    $data['title'] = 'Masjid';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 29","Kata Benda 1", "Masjid", 7);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 30","Kata Kerja 1", "Masjid", 8);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 31","Kata Kerja 2", "Masjid", 8);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 32","Kata Benda 2", "Masjid", 7);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 33","Kata Kerja 3", "Masjid", 8);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 34","Kata Kerja 4", "Masjid", 7);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 35","Kata Benda 3", "Masjid", 7);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 36","Kata Kerja 5", "Masjid", 7);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 37","Kata Kerja 6", "Masjid", 7);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 38","Kata Benda 4", "Masjid", 7);
                    $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 39","Kata Kerja 7", "Masjid", 7);
                    $data['mufrodat'][12] = $this->latihan($id, "Mufrodat 40","Kata Kerja 8", "Masjid", 7);
                } else if($_GET['tema'] == MD5('Tempat Makan dan Dapur')){
                    $data['title'] = 'Tempat Makan dan Dapur';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 41","Kata Benda 1", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 42","Kata Kerja 1", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 43","Kata Benda 2", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 44","Kata Kerja 2", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 45","Kata Benda 3", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 46","Kata Kerja 3", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 47","Kata Benda 4", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 48","Kata Kerja 4", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 49","Kata Benda 5", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 50","Kata Kerja 5", "Tempat Makan dan Dapur", 7);
                    $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 51","Kata Benda 6", "Tempat Makan dan Dapur", 6);
                    $data['mufrodat'][12] = $this->latihan($id, "Mufrodat 52","Kata Kerja 6", "Tempat Makan dan Dapur", 6);
                } else if($_GET['tema'] == MD5('Kamar Mandi')){
                    $data['title'] = 'Kamar Mandi';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 53","Kata Benda 1", "Kamar Mandi", 7);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 54","Kata Kerja 1", "Kamar Mandi", 6);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 55","Kata Benda 2", "Kamar Mandi", 7);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 56","Kata Kerja 2", "Kamar Mandi", 6);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 57","Kata Benda 3", "Kamar Mandi", 6);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 58","Kata Kerja 3", "Kamar Mandi", 5);
                } else if($_GET['tema'] == MD5('Kata Sifat')){
                    $data['title'] = 'Kata Sifat';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 59","Bagian 1", "Kata Sifat", 8);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 60","Bagian 2", "Kata Sifat", 8);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 61","Bagian 3", "Kata Sifat", 8);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 62","Bagian 4", "Kata Sifat", 8);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 63","Bagian 5", "Kata Sifat", 8);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 64","Bagian 6", "Kata Sifat", 8);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 65","Bagian 7", "Kata Sifat", 8);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 66","Bagian 8", "Kata Sifat", 8);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 67","Bagian 9", "Kata Sifat", 8);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 68","Bagian 10", "Kata Sifat", 8);
                    $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 69","Bagian 11", "Kata Sifat", 8);
                    $data['mufrodat'][12] = $this->latihan($id, "Mufrodat 70","Bagian 12", "Kata Sifat", 8);
                    $data['mufrodat'][13] = $this->latihan($id, "Mufrodat 71","Bagian 13", "Kata Sifat", 8);
                    $data['mufrodat'][14] = $this->latihan($id, "Mufrodat 72","Bagian 14", "Kata Sifat", 8);
                    $data['mufrodat'][15] = $this->latihan($id, "Mufrodat 73","Bagian 15", "Kata Sifat", 8);
                    $data['mufrodat'][16] = $this->latihan($id, "Mufrodat 74","Bagian 16", "Kata Sifat", 8);
                } else if($_GET['tema'] == MD5('Tempat-tempat')){
                    $data['title'] = 'Tempat-tempat';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 75","Bagian 1", "Tempat-tempat", 8);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 76","Bagian 2", "Tempat-tempat", 8);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 77","Bagian 3", "Tempat-tempat", 8);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 78","Bagian 4", "Tempat-tempat", 8);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 79","Bagian 5", "Tempat-tempat", 8);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 80","Bagian 6", "Tempat-tempat", 8);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 81","Bagian 7", "Tempat-tempat", 8);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 82","Bagian 8", "Tempat-tempat", 7);
                } else if($_GET['tema'] == MD5('Alam Semesta')){
                    $data['title'] = 'Alam Semesta';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 83","Kata Benda 1", "Alam Semesta", 8);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 84","Kata Kerja 1", "Alam Semesta", 5);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 85","Kata Benda 2", "Alam Semesta", 7);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 86","Kata Kerja 2", "Alam Semesta", 5);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 87","Kata Benda 3", "Alam Semesta", 7);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 88","Kata Kerja 3", "Alam Semesta", 5);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 89","Kata Benda 4", "Alam Semesta", 7);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 90","Kata Kerja 4", "Alam Semesta", 5);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 91","Kata Benda 5", "Alam Semesta", 7);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 92","Kata Kerja 5", "Alam Semesta", 5);
                    $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 93","Kata Benda 6", "Alam Semesta", 7);
                    $data['mufrodat'][12] = $this->latihan($id, "Mufrodat 94","Kata Kerja 6", "Alam Semesta", 4);
                    $data['mufrodat'][13] = $this->latihan($id, "Mufrodat 122","Kata Benda 7", "Alam Semesta", 8);
                    $data['mufrodat'][14] = $this->latihan($id, "Mufrodat 123","Kata Kerja 7", "Alam Semesta", 6);
                    $data['mufrodat'][15] = $this->latihan($id, "Mufrodat 124","Kata Benda 8", "Alam Semesta", 8);
                    $data['mufrodat'][16] = $this->latihan($id, "Mufrodat 125","Kata Kerja 8", "Alam Semesta", 6);
                    $data['mufrodat'][17] = $this->latihan($id, "Mufrodat 126","Kata Benda 9", "Alam Semesta", 8);
                    $data['mufrodat'][18] = $this->latihan($id, "Mufrodat 127","Kata Kerja 9", "Alam Semesta", 5);
                    $data['mufrodat'][19] = $this->latihan($id, "Mufrodat 128","Kata Benda 10", "Alam Semesta", 8);
                    $data['mufrodat'][20] = $this->latihan($id, "Mufrodat 129","Kata Benda 11", "Alam Semesta", 8);
                    $data['mufrodat'][21] = $this->latihan($id, "Mufrodat 130","Kata Benda 12", "Alam Semesta", 6);
                } else if($_GET['tema'] == MD5('Profesi')){
                    $data['title'] = 'Profesi';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 95","Kata Benda 1", "Profesi", 7);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 96","Kata Kerja 1", "Profesi", 4);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 97","Kata Benda 2", "Profesi", 7);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 98","Kata Kerja 2", "Profesi", 4);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 99","Kata Benda 3", "Profesi", 7);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 100","Kata Kerja 3", "Profesi", 4);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 101","Kata Benda 4", "Profesi", 7);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 102","Kata Kerja 4", "Profesi", 4);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 103","Kata Benda 5", "Profesi", 7);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 104","Kata Kerja 5", "Profesi", 4);
                    $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 105","Kata Benda 6", "Profesi", 7);
                    $data['mufrodat'][12] = $this->latihan($id, "Mufrodat 106","Kata Kerja 6", "Profesi", 4);
                    $data['mufrodat'][13] = $this->latihan($id, "Mufrodat 107","Kata Benda 7", "Profesi", 7);
                    $data['mufrodat'][14] = $this->latihan($id, "Mufrodat 108","Kata Kerja 7", "Profesi", 4);
                    $data['mufrodat'][15] = $this->latihan($id, "Mufrodat 109","Kata Benda 8", "Profesi", 7);
                    $data['mufrodat'][16] = $this->latihan($id, "Mufrodat 110","Kata Kerja 8", "Profesi", 4);
                    $data['mufrodat'][17] = $this->latihan($id, "Mufrodat 111","Kata Benda 9", "Profesi", 5);
                    $data['mufrodat'][18] = $this->latihan($id, "Mufrodat 112","Kata Kerja 9", "Profesi", 4);
                    $data['mufrodat'][19] = $this->latihan($id, "Mufrodat 113","Kata Benda 10", "Profesi", 8);
                    $data['mufrodat'][20] = $this->latihan($id, "Mufrodat 114","Kata Kerja 10", "Profesi", 7);
                    $data['mufrodat'][21] = $this->latihan($id, "Mufrodat 115","Kata Benda 11", "Profesi", 7);
                    $data['mufrodat'][22] = $this->latihan($id, "Mufrodat 116","Kata Kerja 11", "Profesi", 7);
                    $data['mufrodat'][23] = $this->latihan($id, "Mufrodat 117","Kata Benda 12", "Profesi", 7);
                    $data['mufrodat'][24] = $this->latihan($id, "Mufrodat 118","Kata Kerja 12", "Profesi", 6);
                    $data['mufrodat'][25] = $this->latihan($id, "Mufrodat 119","Kata Benda 13", "Profesi", 7);
                    $data['mufrodat'][26] = $this->latihan($id, "Mufrodat 120","Kata Benda 14", "Profesi", 7);
                    $data['mufrodat'][27] = $this->latihan($id, "Mufrodat 121","Kata Benda 15", "Profesi", 7);
                } else if($_GET['tema'] == MD5('Hewan-hewan')){
                    $data['title'] = 'Hewan-hewan';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 131","Bagian 1", "Hewan-hewan", 8);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 132","Bagian 2", "Hewan-hewan", 8);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 133","Bagian 3", "Hewan-hewan", 8);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 134","Bagian 4", "Hewan-hewan", 8);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 135","Bagian 5", "Hewan-hewan", 8);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 136","Bagian 6", "Hewan-hewan", 8);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 137","Bagian 7", "Hewan-hewan", 8);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 138","Bagian 8", "Hewan-hewan", 8);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 139","Bagian 9", "Hewan-hewan", 8);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 140","TIngkah Laku 1", "Hewan-hewan", 7);
                    $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 141","TIngkah Laku 2", "Hewan-hewan", 6);
                    $data['mufrodat'][12] = $this->latihan($id, "Mufrodat 142","TIngkah Laku 3", "Hewan-hewan", 6);
                } else if($_GET['tema'] == MD5('Buah, Sayuran dan Tumbuhan')){
                    $data['title'] = 'Buah, Sayuran dan Tumbuhan';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 143","Bagian 1", "Buah, Sayuran dan Tumbuhan", 8);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 144","Bagian 2", "Buah, Sayuran dan Tumbuhan", 8);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 145","Bagian 3", "Buah, Sayuran dan Tumbuhan", 8);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 146","Bagian 4", "Buah, Sayuran dan Tumbuhan", 8);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 147","Bagian 5", "Buah, Sayuran dan Tumbuhan", 8);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 148","Bagian 6", "Buah, Sayuran dan Tumbuhan", 9);
                } else if($_GET['tema'] == MD5('Anggota Tubuh')){
                    $data['title'] = 'Anggota Tubuh';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 149","Bagian 1", "Anggota Tubuh", 8);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 150","Bagian 2", "Anggota Tubuh", 8);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 151","Bagian 3", "Anggota Tubuh", 8);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 152","Bagian 4", "Anggota Tubuh", 8);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 153","Bagian 5", "Anggota Tubuh", 8);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 154","Bagian 6", "Anggota Tubuh", 8);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 155","Bagian 7", "Anggota Tubuh", 8);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 156","Bagian 8", "Anggota Tubuh", 8);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 157","Bagian 9", "Anggota Tubuh", 8);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 158","Bagian 10", "Anggota Tubuh", 8);
                    $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 159","Bagian 11", "Anggota Tubuh", 6);
                } else if($_GET['tema'] == MD5('Peralatan dan Perkakas')){
                    $data['title'] = 'Peralatan dan Perkakas';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 160","Bagian 1", "Peralatan dan Perkakas", 8);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 161","Bagian 2", "Peralatan dan Perkakas", 8);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 162","Bagian 3", "Peralatan dan Perkakas", 8);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 163","Bagian 4", "Peralatan dan Perkakas", 8);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 164","Bagian 5", "Peralatan dan Perkakas", 8);
                    $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 165","Bagian 6", "Peralatan dan Perkakas", 8);
                    $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 166","Bagian 7", "Peralatan dan Perkakas", 8);
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 167","Bagian 8", "Peralatan dan Perkakas", 8);
                    $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 168","Bagian 9", "Peralatan dan Perkakas", 8);
                    $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 169","Bagian 10", "Peralatan dan Perkakas", 8);
                } else if($_GET['tema'] == MD5('Warna')){
                    $data['title'] = 'Warna';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 170","Bagian 1", "Warna", 8);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 171","Bagian 2", "Warna", 8);
                } else if($_GET['tema'] == MD5('Rasa')){
                    $data['title'] = 'Rasa';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 172","Bagian 1", "Rasa", 9);
                } else if($_GET['tema'] == MD5('Sarana Transportasi')){
                    $data['title'] = 'Sarana Transportasi';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 173","Bagian 1", "Sarana Transportasi", 7);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 174","Bagian 2", "Sarana Transportasi", 7);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 175","Bagian 3", "Sarana Transportasi", 7);
                } else if($_GET['tema'] == MD5('Bentuk')){
                    $data['title'] = 'Bentuk';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 176","Bagian 1", "Bentuk", 7);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 177","Bagian 2", "Bentuk", 6);
                }

                $this->load->view("templates/header-user", $data);
                $this->load->view("pelajaran/index-mufrodat", $data);
                $this->load->view("templates/footer-user", $data);

            } else if(!empty($_GET['id'])){
                // 1 - 50
                    if($_GET['id'] == MD5('Mufrodat 1')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 2");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 1";
                        $data['title'] = "Kata Benda 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 1");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَابٌ",
                                "arti" => "Pintu",
                                "huruf" => array_unique(["بَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "نَافِذَةٌ",
                                "arti" => "Jendela",
                                "huruf" => array_unique(["نَ","ا","فِ","ذَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جِدَارٌ",
                                "arti" => "Tembok",
                                "huruf" => array_unique(["جِ","دَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "بِلَاطَةٌ",
                                "arti" => "Lantai",
                                "huruf" => array_unique(["بِ","لَ","ا","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَقْفٌ",
                                "arti" => "Atap",
                                "huruf" => array_unique(["سَ","قْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مِصْبَاحٌ",
                                "arti" => "Lampu",
                                "huruf" => array_unique(["مِ","صْ","بَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "مِفْتَاحٌ",
                                "arti" => "Kunci",
                                "huruf" => array_unique(["مِ","فْ","تَ","ا","حٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 2')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 1");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 3");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 2";
                        $data['title'] = "Kata Kerja 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 2");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَتَحَ-يَفْتَحُ",
                                "arti" => "Membuka",
                                "huruf" => array_unique(["فَ","تَ","حَ","-","يَ","فْ","تَ","حُ"])
                            ],
                            [
                                "kata_arab" => "أَغْلَقَ-يُغْلِقُ",
                                "arti" => "Menutup",
                                "huruf" => array_unique(["أَ","غْ","لَ","قَ","-","يُ","غْ","لِ","قُ"])
                            ],
                            [
                                "kata_arab" => "نَامَ-يَنَامُ",
                                "arti" => "Tidur",
                                "huruf" => array_unique(["نَ","ا","مَ","-","يَ","نَ","ا","مُ"])
                            ],
                            [
                                "kata_arab" => "كَنَسَ-يَكْنُسُ",
                                "arti" => "Menyapu",
                                "huruf" => array_unique(["كَ","نَ","سَ","-","يَ","كْ","نُ","سُ"])
                            ],
                            [
                                "kata_arab" => "وَضَعَ-يَضَعُ",
                                "arti" => "Meletakkan",
                                "huruf" => array_unique(["وَ","ضَ","عَ","-","يَ","ضَ","عُ"])
                            ],
                            [
                                "kata_arab" => "أَخَذَ-يَأْخُذُ",
                                "arti" => "Mengambil",
                                "huruf" => array_unique(["أَ","خَ","ذَ","-","يَ","أْ","خُ","ذُ"])
                            ],
                            [
                                "kata_arab" => "أَشْعَلَ-يُشْعِلُ",
                                "arti" => "Menyalakan (lampu)",
                                "huruf" => array_unique(["أَ","شْ","عَ","لَ","-","يُ","شْ","عِ","لُ"])
                            ],
                            [
                                "kata_arab" => "أَطْفَأَ-يُطْفِئُ",
                                "arti" => "Mematikan (lampu)",
                                "huruf" => array_unique(["أَ","طْ","فَ","أَ","-","يُ","طْ","فِ","ئُ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 3')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 2");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 4");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 3";
                        $data['title'] = "Kata Benda 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 3");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِرْآةٌ",
                                "arti" => "Cermin",
                                "huruf" => array_unique(["مِ","رْ","آ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زُجَاجَةٌ",
                                "arti" => "Kaca",
                                "huruf" => array_unique(["زُ","جَ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِتَارٌ",
                                "arti" => "Korden",
                                "huruf" => array_unique(["سِ","تَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "خِزَانَةٌ",
                                "arti" => "Lemari",
                                "huruf" => array_unique(["خِ","زَ","ا","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فِرَاشٌ",
                                "arti" => "Kasur",
                                "huruf" => array_unique(["فِ","رَ","ا","شٌ"])
                            ],
                            [
                                "kata_arab" => "سَرِيْرٌ",
                                "arti" => "Ranjang",
                                "huruf" => array_unique(["سَ","رِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِكْنَسَةٌ",
                                "arti" => "Sapu",
                                "huruf" => array_unique(["مِ","كْ","نَ","سَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 4')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 3");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 5");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 4";
                        $data['title'] = "Kata Kerja 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 4");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِسْتَيْقَظَ-يَسْتَيْقِظُ",
                                "arti" => "Bangun",
                                "huruf" => array_unique(["اِ","سْ","تَ","يْ","قَ","ظَ","-","يَ","سْ","تَ","يْ","قِ","ظُ"])
                            ],
                            [
                                "kata_arab" => "أَيْقَظَ-يُوْقِظُ",
                                "arti" => "Membangunkan",
                                "huruf" => array_unique(["أَ","يْ","قَ","ظَ","-","يُ","وْ","قِ","ظُ"])
                            ],
                            [
                                "kata_arab" => "نَعِسَ-يَنْعَسُ",
                                "arti" => "Mengantuk",
                                "huruf" => array_unique(["نَ","عِ","سَ","-","يَ","نْ","عَ","سُ"])
                            ],
                            [
                                "kata_arab" => "رَمَى-يَرْمِي",
                                "arti" => "Membuang",
                                "huruf" => array_unique(["رَ","مَ","ى","-","يَ","رْ","مِ","ي"])
                            ],
                            [
                                "kata_arab" => "نَظَّفَ-يُنَظِّفُ",
                                "arti" => "Membersihkan",
                                "huruf" => array_unique(["نَ","ظَّ","فَ","-","يُ","نَ","ظِّ","فُ"])
                            ],
                            [
                                "kata_arab" => "رَتَّبَ-يُرَتِّبُ",
                                "arti" => "Merapikan",
                                "huruf" => array_unique(["رَ","تَّ","بَ","-","يُ","رَ","تِّ","بُ"])
                            ],
                            [
                                "kata_arab" => "رَأَى-يَرَى",
                                "arti" => "Melihat",
                                "huruf" => array_unique(["رَ","أَ","ى","-","يَ","رَ","ى"])
                            ],
                            [
                                "kata_arab" => "نَوَّبَ-يُنَوِّبُ",
                                "arti" => "Piket",
                                "huruf" => array_unique(["نَ","وَّ","بَ","-","يُ","نَ","وِّ","بُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 5')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 4");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 6");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 5";
                        $data['title'] = "Kata Benda 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 5");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وِسَادَةٌ",
                                "arti" => "Bantal",
                                "huruf" => array_unique(["وِ","سَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاعَةٌ",
                                "arti" => "Jam",
                                "huruf" => array_unique(["سَ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُشْطٌ",
                                "arti" => "Sisir",
                                "huruf" => array_unique(["مُ","شْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "زُبَالَةٌ",
                                "arti" => "Sampah",
                                "huruf" => array_unique(["زُ","بَ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَزْبَلَةٌ",
                                "arti" => "Tempat Sampah",
                                "huruf" => array_unique(["مَ","زْ","بَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِحَافٌ",
                                "arti" => "Selimut",
                                "huruf" => array_unique(["لِ","حَ","ا","فٌ"])
                            ],
                            [
                                "kata_arab" => "غِطَاءُ السَّرِيْرِ",
                                "arti" => "Seprai",
                                "huruf" => array_unique(["غِ","طَ","ا","ءُ","_","ا","ل","سَّ","رِ","يْ","رِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 6')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 5");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 7");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 6";
                        $data['title'] = "Kata Kerja 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 6");
                        $data['mufrodat'] = [

                            [
                                "kata_arab" => "جَاءَ-يَجِيْءُ",
                                "arti" => "Datang",
                                "huruf" => array_unique(["جَ","ا","ءَ","-","يَ","جِ","يْ","ءُ"])
                            ],
                            [
                                "kata_arab" => "ذَهَبَ-يَذْهَبُ",
                                "arti" => "Pergi",
                                "huruf" => array_unique(["ذَ","هَ","بَ","-","يَ","ذْ","هَ","بُ"])
                            ],
                            [
                                "kata_arab" => "دَخَلَ-يَدْخُلُ",
                                "arti" => "Masuk",
                                "huruf" => array_unique(["دَ","خَ","لَ","-","يَ","دْ","خُ","لُ"])
                            ],
                            [
                                "kata_arab" => "خَرَجَ-يَخْرُجُ",
                                "arti" => "Keluar",
                                "huruf" => array_unique(["خَ","رَ","جَ","-","يَ","خْ","رُ",'جُ'])
                            ],
                            [
                                "kata_arab" => "طَرَقَ-يَطْرُقُ",
                                "arti" => "Mengetuk",
                                "huruf" => array_unique(["طَ","رَ","قَ","-","يَ","طْ","رُ","قُ"])
                            ],
                            [
                                "kata_arab" => "لَبِسَ-يَلْبَسُ",
                                "arti" => "Memakai (pakaian)",
                                "huruf" => array_unique(["لَ","بِ","سَ","-","يَ","لْ","بَ","سُ"])
                            ],
                            [
                                "kata_arab" => "سَقَطَ-يَسْقُطُ",
                                "arti" => "Jatuh",
                                "huruf" => array_unique(["سَ","قَ","طَ","-","يَ","سْ","قُ","طُ"])
                            ],
                            [
                                "kata_arab" => "تَعِبَ-يَتْعَبُ",
                                "arti" => "Capek",
                                "huruf" => array_unique(["تَ","عِ","بَ","-","يَ","تْ","عَ","بُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 7')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 6");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 8");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 7";
                        $data['title'] = "Kata Benda 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 7");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَنْطَةٌ",
                                "arti" => "Koper",
                                "huruf" => array_unique(["شَ","نْ","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَفٌّ",
                                "arti" => "Rak",
                                "huruf" => array_unique(["رَ","فٌّ"])
                            ],
                            [
                                "kata_arab" => "نَعْلٌ",
                                "arti" => "Sendal",
                                "huruf" => array_unique(["نَ","عْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْلَاقٌ",
                                "arti" => "Hanger",
                                "huruf" => array_unique(["مِ","عْ","لَ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْلَامٌ",
                                "arti" => "Gunting kuku",
                                "huruf" => array_unique(["مِ","قْ","لَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "مِجْرَفَةٌ",
                                "arti" => "Serokan",
                                "huruf" => array_unique(["مِ","جْ","رَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَدْوَلُ التَّنْوِيْبِ",
                                "arti" => "Jadwal piket",
                                "huruf" => array_unique(["جَ","دْ","وَ","لُ","_","ا","ل","تَّ","نْ","وِ","يْ","بِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 8')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 7");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 9");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 8";
                        $data['title'] = "Kata Kerja 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 8");
                        $data['mufrodat'] = [

                            [
                                "kata_arab" => "سَاعَدَ-يُسَاعِدُ",
                                "arti" => "Membantu",
                                "huruf" => array_unique(["سَ","ا","عَ","دَ","-","يُ","سَ","ا","عِ","دُ"])
                            ],
                            [
                                "kata_arab" => "جَلَسَ-يَجْلِسُ",
                                "arti" => "Duduk",
                                "huruf" => array_unique(["جَ","لَ","سَ","-","يَ","جْ","لِ","سُ"])
                            ],
                            [
                                "kata_arab" => "قَامَ-يَقُوْمُ",
                                "arti" => "Berdiri",
                                "huruf" => array_unique(["قَ","ا","مَ","-","يَ","قُ","وْ","مُ"])
                            ],
                            [
                                "kata_arab" => "طَلَبَ-يَطْلُبُ",
                                "arti" => "Meminta",
                                "huruf" => array_unique(["طَ","لَ","بَ","-","يَ","طْ","لُ","بُ"])
                            ],
                            [
                                "kata_arab" => "أَعْطَى-يُعْطِي",
                                "arti" => "Memberi",
                                "huruf" => array_unique(["أَ","عْ","طَ","ى","-","يُ","عْ","طِ","ي"])
                            ],
                            [
                                "kata_arab" => "اِنْتَهَى-يَنْتَهِي",
                                "arti" => "Habis",
                                "huruf" => array_unique(["اِ","نْ","تَ","هَ","ى","-","يَ","نْ","تَ","هِ","ي"])
                            ],
                            [
                                "kata_arab" => "لَقِيَ-يَلْقَى",
                                "arti" => "Bertemu",
                                "huruf" => array_unique(["لَ","قِ","يَ","-","يَ","لْ","قَ","ى"])
                            ],
                            [
                                "kata_arab" => "أَحَبَّ-يُحِبُّ",
                                "arti" => "Menyukai",
                                "huruf" => array_unique(["أَ","حَ","بَّ","-","يُ","حِ","بُّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 9')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 8");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 10");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 9";
                        $data['title'] = "Kata Benda 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 9");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِيْدَالِيَّةٌ",
                                "arti" => "Gantungan kunci",
                                "huruf" => array_unique(["مِ","يْ","دَ","ا","لِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَرْتُوْنٌ",
                                "arti" => "Kardus",
                                "huruf" => array_unique(["كَ","رْ","تُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "تَقْوِيْمٌ",
                                "arti" => "Kalender",
                                "huruf" => array_unique(["تَ","قْ","وِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "سُلَّمٌ",
                                "arti" => "Tangga",
                                "huruf" => array_unique(["سُ","لَّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "بِيْئَةٌ",
                                "arti" => "Lingkungan",
                                "huruf" => array_unique(["بِ","يْ","ئَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُفْلٌ",
                                "arti" => "Gembok",
                                "huruf" => array_unique(["قُ","فْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ضَيْفٌ",
                                "arti" => "Tamu",
                                "huruf" => array_unique(["ضَ","يْ","فٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 10')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 9");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 11");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 10";
                        $data['title'] = "Kata Kerja 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 10");
                        $data['mufrodat'] = [

                            [
                                "kata_arab" => "كَرِهَ-يَكْرَحُ",
                                "arti" => "Membenci",
                                "huruf" => array_unique(["كَ","رِ","هَ","-","يَ","كْ","رَ","حُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعَارَ-يَسْتَعِيْرُ",
                                "arti" => "Meminjam",
                                "huruf" => array_unique(["اِ","سْ","تَ","عَ","ا","رَ","-","يَ","سْ","تَ","عِ","يْ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَعَارَ-يُعِيْرُ",
                                "arti" => "Meminjamkan",
                                "huruf" => array_unique(["أَ","عَ","ا","رَ","-","يُ","عِ","يْ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِنْتَظَرَ-يَنْتَظِرُ",
                                "arti" => "Menunggu",
                                "huruf" => array_unique(["اِ","نْ","تَ","ظَ","رَ","-","يَ","نْ","تَ","ظِ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَنْهَى-يُنْهِي",
                                "arti" => "Menghabiskan",
                                "huruf" => array_unique(["أَ","نْ","هَ","ى","-","يُ","نْ","هِ","ي"])
                            ],
                            [
                                "kata_arab" => "أَبْقَى-يُبْقِي",
                                "arti" => "Menyisakan",
                                "huruf" => array_unique(["أَ","بْ","قَ","ى","-","يُ","بْ","قِ","ي"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعَدَّ-يَسْتِعِدُّ",
                                "arti" => "Bersiap-siap",
                                "huruf" => array_unique(["اِ","سْ","تَ","عَ","دَّ","-","يَ","سْ","تِ","عِ","دُّ"])
                            ],
                            [
                                "kata_arab" => "أَعَدَّ-يُعِدُّ",
                                "arti" => "Menyiapkan",
                                "huruf" => array_unique(["أَ","عَ","دَّ","-","يُ","عِ","دُّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 11')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 10");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 12");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 11";
                        $data['title'] = "Kata Benda 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 11");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِنْدِيْلٌ",
                                "arti" => "Tisu",
                                "huruf" => array_unique(["مِ","نْ","دِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُنَظِّفُ الْأُذُنِ",
                                "arti" => "Korek kuping",
                                "huruf" => array_unique(["مُ","نَ","ظِّ","فُ","_","ا","لْ","أُ","ذُ","نِ"])
                            ],
                            [
                                "kata_arab" => "فُلُوْسٌ",
                                "arti" => "Uang",
                                "huruf" => array_unique(["فُ","لُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مِحْفَظَةُ الْفُلُوْسِ",
                                "arti" => "Dompet",
                                "huruf" => array_unique(["مِ","حْ","فَ","ظَ","ةُ","_","ا","لْ","فُ","لُ","وْ","سِ"])
                            ],
                            [
                                "kata_arab" => "جَدْوَلٌ",
                                "arti" => "Jadwal",
                                "huruf" => array_unique(["جَ","دْ","وَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مِشْبَكٌ",
                                "arti" => "Peniti",
                                "huruf" => array_unique(["مِ","شْ","بَ","كٌ"])
                            ],
                            [
                                "kata_arab" => "غَسْلٌ",
                                "arti" => "Cucian",
                                "huruf" => array_unique(["غَ","سْ","لٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 12')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 11");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 13");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 12";
                        $data['title'] = "Kata Kerja 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 12");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَرَادَ-يُرِيْدُ",
                                "arti" => "Ingin",
                                "huruf" => array_unique(["أَ","رَ","ا","دَ","-","يُ","رِ","يْ","دُ"])
                            ],
                            [
                                "kata_arab" => "حَمَلَ-يَحْمِلُ",
                                "arti" => "Membawa",
                                "huruf" => array_unique(["حَ","مَ","لَ","-","يَ","حْ","مِ","لُ"])
                            ],
                            [
                                "kata_arab" => "ضَحِكَ-يَضْحَكُ",
                                "arti" => "Tertawa",
                                "huruf" => array_unique(["ضَ","حِ","كَ","-","يَ","ضْ","حَ","كُ"])
                            ],
                            [
                                "kata_arab" => "خَافَ-يَخَافُ",
                                "arti" => "Takut",
                                "huruf" => array_unique(["خَ","ا","فَ","-","يَ","خَ","ا","فُ"])
                            ],
                            [
                                "kata_arab" => "مَسَكَ-يَمْسِكُ",
                                "arti" => "Memegang",
                                "huruf" => array_unique(["مَ","سَ","كَ","-","يَ","مْ","سِ","كُ"])
                            ],
                            [
                                "kata_arab" => "اِبْتَسَمَ-يَبْتَسِمُ",
                                "arti" => "Tersenyum",
                                "huruf" => array_unique(["اِ","بْ","تَ","سَ","مَ","-","يَ","بْ","تَ","سِ","مُ"])
                            ],
                            [
                                "kata_arab" => "عَلَّقَ-يُعَلِّقُ",
                                "arti" => "Menggantungkan",
                                "huruf" => array_unique(["عَ","لَّ","قَ","-","يُ","عَ","لِّ","قُ"])
                            ],
                            [
                                "kata_arab" => "ضَاعَ-يَضِيْعُ",
                                "arti" => "Hilang",
                                "huruf" => array_unique(["ضَ","ا","عَ","-","يَ","ضِ","يْ","عُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 13')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 12");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 14");
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 13";
                        $data['title'] = "Kata Benda 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 13");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَدِيَّةُ السَّفَرِ",
                                "arti" => "Oleh-oleh",
                                "huruf" => array_unique(["هَ","دِ","يَّ","ةُ","_","ا","ل","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "شُقَّةٌ",
                                "arti" => "Blok",
                                "huruf" => array_unique(["شُ","قَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "هَدِيَّةٌ",
                                "arti" => "Hadiah",
                                "huruf" => array_unique(["هَ","دِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صُنْدُوْقٌ",
                                "arti" => "Kotak",
                                "huruf" => array_unique(["صُ","نْ","دُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "لَاصِقَةٌ",
                                "arti" => "Solasi",
                                "huruf" => array_unique(["لَ","ا","صِ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غِرَاءٌ",
                                "arti" => "Lem",
                                "huruf" => array_unique(["غِ","رَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مِقَصٌّ",
                                "arti" => "Gunting",
                                "huruf" => array_unique(["مِ","قَ","صٌّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 14')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 13");
                        $data['next'] = "";
                        $data['tema'] = "Kamar dan Asrama";
                        $data['materi'] = "Mufrodat 14";
                        $data['title'] = "Kata Kerja 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 14");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَدَّلَ-يُبَدِّلُ",
                                "arti" => "Mengganti",
                                "huruf" => array_unique(["بَ","دَّ","لَ","-","يُ","بَ","دِّ","لُ"])
                            ],
                            [
                                "kata_arab" => "مَشَى-يَمْشِي",
                                "arti" => "Berjalan",
                                "huruf" => array_unique(["مَ","شَ","ى","-","يَ","مْ","شِ","ي"])
                            ],
                            [
                                "kata_arab" => "شَاهَدَ-يُشَاهِدُ",
                                "arti" => "Menonton",
                                "huruf" => array_unique(["شَ","ا","هَ","دَ","-","يُ","شَ","ا","هِ","دُ"])
                            ],
                            [
                                "kata_arab" => "فَقَدَ-يَفْقِدُ",
                                "arti" => "Kehilangan",
                                "huruf" => array_unique(["فَ","قَ","دَ","-","يَ","فْ","قِ","دُ"])
                            ],
                            [
                                "kata_arab" => "وَجَدَ-يَجِدُ",
                                "arti" => "Menemukan",
                                "huruf" => array_unique(["وَ","جَ","دَ","-","يَ","جِ","دُ"])
                            ],
                            [
                                "kata_arab" => "جَفَّفَ-يُجَفِّفُ",
                                "arti" => "Menjemur",
                                "huruf" => array_unique(["جَ","فَّ","فَ","-","يُ","جَ","فِّ","فُ"])
                            ],
                            [
                                "kata_arab" => "مَلَكَ-يَمْلِكُ",
                                "arti" => "Memiliki",
                                "huruf" => array_unique(["مَ","لَ","كَ","-","يَ","مْ","لِ","كُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 15')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 16");
                        $data['materi'] = "Mufrodat 15";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Benda 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 15");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَكْتَبٌ",
                                "arti" => "Meja",
                                "huruf" => array_unique(["مَ","كْ","تَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كُرْسِيٌّ",
                                "arti" => "Kursi",
                                "huruf" => array_unique(["كُ","رْ","سِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "سَبُّوْرَةٌ",
                                "arti" => "Papan tulis",
                                "huruf" => array_unique(["سَ","بُّ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَمٌ",
                                "arti" => "Pulpen/Spidol",
                                "huruf" => array_unique(["قَ","لَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَمُ الرَّصَاصِ",
                                "arti" => "Pensil",
                                "huruf" => array_unique(["قَ","لَ","مُ","_","ا","ل","رَّ","صَ","ا","صِ"])
                            ],
                            [
                                "kata_arab" => "مِسْطَرَةٌ",
                                "arti" => "Penggaris",
                                "huruf" => array_unique(["مِ","سْ","طَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَبْشُوْرَةٌ",
                                "arti" => "Kapur",
                                "huruf" => array_unique(["طَ","بْ","شُ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَقِيْبَةٌ",
                                "arti" => "Tas",
                                "huruf" => array_unique(["حَ","قِ","يْ","بَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 16')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 15");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 17");
                        $data['materi'] = "Mufrodat 16";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Kerja 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 16");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَتَبَ-يَكْتُبُ",
                                "arti" => "Menulis",
                                "huruf" => array_unique(["كَ","تَ","بَ","-","يَ","كْ","تُ","بُ"])
                            ],
                            [
                                "kata_arab" => "مَسَحَ-يَمْسَحُ",
                                "arti" => "Menghapus",
                                "huruf" => array_unique(["مَ","سَ","حَ","-","يَ","مْ","سَ","حُ"])
                            ],
                            [
                                "kata_arab" => "قَرَأَ-يَقْرَأُ",
                                "arti" => "Membaca",
                                "huruf" => array_unique(["قَ","رَ","أَ","-","يَ","قْ","رَ",'أُ'])
                            ],
                            [
                                "kata_arab" => "اِهْتَمَّ-يَهْتَمُّ بِ",
                                "arti" => "Memperhatikan",
                                "huruf" => array_unique(["اِ","هْ","تَ","مَّ","-","يَ","هْ","تَ","مُّ","بِ","_"])
                            ],
                            [
                                "kata_arab" => "اِسْتَمَعَ-يَسْتَمِعُ إِلَى",
                                "arti" => "Menyimak",
                                "huruf" => array_unique(["اِ","سْ","تَ","مَ","عَ","-","يَ","سْ","تَ","مِ","عُ","إِ","لَ","ى","_"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعْجَلَ-يَسْتَعْجِلُ",
                                "arti" => "Tegesa-gesa",
                                "huruf" => array_unique(["اِ","سْ","تَ","عْ","جَ","لَ","-","يَ","سْ","تَ","عْ","جِ","لُ"])
                            ],
                            [
                                "kata_arab" => "بَيَّنَ-يُبَيِّنُ",
                                "arti" => "Menjelaskan",
                                "huruf" => array_unique(["بَ","يَّ","نَ","-","يُ","بَ","يِّ","نُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 17')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 16");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 18");
                        $data['materi'] = "Mufrodat 17";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Benda 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 17");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كُرَّاسَةٌ",
                                "arti" => "Buku tulis",
                                "huruf" => array_unique(["كُ","رَّ","ا","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُقَرَّرٌ",
                                "arti" => "Buku panduan",
                                "huruf" => array_unique(["مُ","قَ","رَّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "كَشْفُ الْحُضُوْرِ",
                                "arti" => "Daftar hadir",
                                "huruf" => array_unique(["كَ","شْ","فُ","_","ا","لْ","حُ","ضُ","وْ","رِ"])
                            ],
                            [
                                "kata_arab" => "خَرِيْطَةٌ",
                                "arti" => "Peta",
                                "huruf" => array_unique(["خَ","رِ","يْ","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كِتَابٌ",
                                "arti" => "Buku",
                                "huruf" => array_unique(["كِ","تَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "قِرْطَاسٌ",
                                "arti" => "Kertas",
                                "huruf" => array_unique(["قِ","رْ","طَ","ا","سٌ"])
                            ],
                            [
                                "kata_arab" => "حِبْرٌ",
                                "arti" => "Tinta",
                                "huruf" => array_unique(["حِ","بْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسٌ",
                                "arti" => "Ketua",
                                "huruf" => array_unique(["رَ","ئِ","يْ",'سٌ'])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 18')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 17");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 19");
                        $data['materi'] = "Mufrodat 18";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Kerja 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 18");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَفَعَ-يَرْفَعُ",
                                "arti" => "Mengangkat",
                                "huruf" => array_unique(["رَ","فَ","عَ","-","يَ","رْ","فَ","عُ"])
                            ],
                            [
                                "kata_arab" => "عَمِلَ-يَعْمَلُ",
                                "arti" => "Mengerjakan",
                                "huruf" => array_unique(["عَ","مِ","لَ","-","يَ","عْ","مَ","لُ"])
                            ],
                            [
                                "kata_arab" => "تَأَخَّرَ-يَتَأَخَّرُ",
                                "arti" => "Terlambat",
                                "huruf" => array_unique(["تَ","أَ","خَّ","رَ","-","يَ","تَ","أَ","خَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "تَفَكَّرَ-يَتَفَكَّرُ",
                                "arti" => "Berfikir",
                                "huruf" => array_unique(["تَ","فَ","كَّ","رَ","-","يَ","تَ","فَ","كَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَخْطَأَ-يُخْطِئُ",
                                "arti" => "Bersalah",
                                "huruf" => array_unique(["أَ","خْ","طَ","أَ","-","يُ","خْ","طِ","ئُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَمَرَّ-يَسْتَمِرُّ",
                                "arti" => "Melanjutkan",
                                "huruf" => array_unique(["اِ","سْ","تَ","مَ","رَّ","-","يَ","سْ","تَ","مِ","رُّ"])
                            ],
                            [
                                "kata_arab" => "نَجَحَ-يَنْجَحُ",
                                "arti" => "Lulus",
                                "huruf" => array_unique(["نَ","جَ","حَ","-","يَ","نْ","جَ","حُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 19')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 18");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 20");
                        $data['materi'] = "Mufrodat 19";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Benda 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 19");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَائِبٌ",
                                "arti" => "Wakil",
                                "huruf" => array_unique(["نَ","ا","ئِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كَاتِبٌ",
                                "arti" => "Sekretaris",
                                "huruf" => array_unique(["كَ","ا","تِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَاسِبٌ",
                                "arti" => "Bendahara",
                                "huruf" => array_unique(["مُ","حَ","ا","سِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَاغٌ",
                                "arti" => "Kosong",
                                "huruf" => array_unique(["فَ","رَ","ا","غٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَوًى",
                                "arti" => "Jenjang",
                                "huruf" => array_unique(["مُ","سْ","تَ","وً","ى"])
                            ],
                            [
                                "kata_arab" => "أُمُوْرٌ هَامَّةٌ",
                                "arti" => "Kisi-kisi",
                                "huruf" => array_unique(["أُ","مُ","وْ","رٌ","هَ","ا","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَرِيْقَةٌ",
                                "arti" => "Cara",
                                "huruf" => array_unique(["طَ","رِ","يْ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نُقْطَةٌ",
                                "arti" => "Titik",
                                "huruf" => array_unique(["نُ","قْ","طَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 20')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 19");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 21");
                        $data['materi'] = "Mufrodat 20";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Kerja 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 20");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَتَّشَ-يُفَتِّشُ",
                                "arti" => "Mengoreksi",
                                "huruf" => array_unique(["فَ","تَّ","شَ","-","يُ","فَ","تِّ","شُ"])
                            ],
                            [
                                "kata_arab" => "غَشَّ-يَغِشُّ",
                                "arti" => "Curang",
                                "huruf" => array_unique(["غَ","شَّ","-","يَ","غِ","شُّ"])
                            ],
                            [
                                "kata_arab" => "اِمْتَحَنَ-يَمْتَحِنُ",
                                "arti" => "Menguji",
                                "huruf" => array_unique(["اِ","مْ","تَ","حَ","نَ","-","يَ","مْ","تَ","حِ","نُ"])
                            ],
                            [
                                "kata_arab" => "اِتَّبَعَ-يَتَّبِعُ",
                                "arti" => "Mengikuti",
                                "huruf" => array_unique(["اِ","تَّ","بَ","عَ","-","يَ","تَّ","بِ","عُ"])
                            ],
                            [
                                "kata_arab" => "اِحْتَرَمَ-يَحْتَرِمُ",
                                "arti" => "Menghormati",
                                "huruf" => array_unique(["اِ","حْ","تَ","رَ","مَ","-","يَ","حْ","تَ","رِ","مُ"])
                            ],
                            [
                                "kata_arab" => "اِنْقَسَمَ-يَنْقَسِمُ",
                                "arti" => "Terbagi",
                                "huruf" => array_unique(["اِ","نْ","قَ","سَ","مَ","-","يَ","نْ","قَ","سِ","مُ"])
                            ],
                            [
                                "kata_arab" => "اِدَّخَرَ-يَدَّخِرُ",
                                "arti" => "Menabung",
                                "huruf" => array_unique(["اِ","دَّ","خَ","رَ","-","يَ","دَّ","خِ","رُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 21')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 20");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 22");
                        $data['materi'] = "Mufrodat 21";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Benda 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 21");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَعْمَلُ اللُّغَةِ",
                                "arti" => "Lab. Bahasa",
                                "huruf" => array_unique(["مَ","عْ","مَ",'لُ',"_","ا","ل","لُّ","غَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "مَكْتَبُ الْمُدَرِّسِيْنَ",
                                "arti" => "Kantor guru",
                                "huruf" => array_unique(["مَ","كْ","تَ","بُ","_","ا","لْ","مُ","دَ","رِّ","سِ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "نَتِيْجَةٌ",
                                "arti" => "Nilai",
                                "huruf" => array_unique(["نَ","تِ","يْ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَحِيْحٌ",
                                "arti" => "Benar",
                                "huruf" => array_unique(["صَ","حِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "خُلَاصَةٌ",
                                "arti" => "Ringkasan",
                                "huruf" => array_unique(["خُ","لَ","ا","صَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَطَأٌ",
                                "arti" => "Salah",
                                "huruf" => array_unique(["خَ","طَ","أٌ"])
                            ],
                            [
                                "kata_arab" => "صَفْحَةٌ",
                                "arti" => "Halaman",
                                "huruf" => array_unique(["صَ","فْ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَوَّابَةٌ",
                                "arti" => "Gerbang",
                                "huruf" => array_unique(["بَ","وَّ","ا","بَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 22')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 21");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 23");
                        $data['materi'] = "Mufrodat 22";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Kerja 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 22");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَرَصَ-يَحْرِصُ",
                                "arti" => "Semangat",
                                "huruf" => array_unique(["حَ","رَ","صَ","-","يَ","حْ","رِ","صُ"])
                            ],
                            [
                                "kata_arab" => "رَكَّزَ-يُرَكِّزُ",
                                "arti" => "Fokus",
                                "huruf" => array_unique(["رَ","كَّ","زَ","-","يُ","رَ","كِّ","زُ"])
                            ],
                            [
                                "kata_arab" => "سَجَّلَ-يُسَجِّلُ",
                                "arti" => "Mendaftar/merekam",
                                "huruf" => array_unique(["سَ","جَّ","لَ","-","يُ","سَ","جِّ","لُ"])
                            ],
                            [
                                "kata_arab" => "مَزَّقَ-يُمَزِّقُ",
                                "arti" => "Merobek",
                                "huruf" => array_unique(["مَ","زَّ","قَ","-","يُ","مَ","زِّ","قُ"])
                            ],
                            [
                                "kata_arab" => "رَنَّ-يَرِنُّ",
                                "arti" => "Berdering",
                                "huruf" => array_unique(["رَ","نَّ","-","يَ","رِ","نُّ"])
                            ],
                            [
                                "kata_arab" => "نَبَّهَ-يُنَبِّهُ",
                                "arti" => "Menegur",
                                "huruf" => array_unique(["نَ","بَّ","هَ","-","يُ","نَ","بِّ","هُ"])
                            ],
                            [
                                "kata_arab" => "ذَكَرَ-يَذْكُرُ",
                                "arti" => "Menyebutkan",
                                "huruf" => array_unique(["ذَ","كَ","رَ","-","يَ","ذْ","كُ","رُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 23')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 22");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 24");
                        $data['materi'] = "Mufrodat 23";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Benda 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 23");
                        $data['mufrodat'] = [

                            [
                                "kata_arab" => "مَقْصَفٌ",
                                "arti" => "Kantin",
                                "huruf" => array_unique(["مَ","قْ","صَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "كَشْفُ الدَّرَجَاتِ",
                                "arti" => "Rapor",
                                "huruf" => array_unique(["كَ","شْ","فُ","_","ا","ل","دَّ","رَ","جَ","ا","تِ"])
                            ],
                            [
                                "kata_arab" => "اِمْتِحَانٌ",
                                "arti" => "Ujian",
                                "huruf" => array_unique(["اِ","مْ","تِ","حَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "مَادَّةٌ",
                                "arti" => "Mata pelajaran / materi",
                                "huruf" => array_unique(["مَ","ا","دَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حِصَّةٌ",
                                "arti" => "Jam pelajaran",
                                "huruf" => array_unique(["حِ","صَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دَرْسٌ",
                                "arti" => "Pelajaran",
                                "huruf" => array_unique(["دَ","رْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مَرْكَزٌ",
                                "arti" => "Rangking",
                                "huruf" => array_unique(["مَ","رْ","كَ","زٌ"])
                            ],
                            [
                                "kata_arab" => "سُؤَالٌ",
                                "arti" => "Pertanyaan",
                                "huruf" => array_unique(["سُ","ؤَ","ا","لٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 24')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 23");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 25");
                        $data['materi'] = "Mufrodat 24";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Kerja 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 24");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَأَلَ-يَسْأَلُ",
                                "arti" => "Bertanya",
                                "huruf" => array_unique(["سَ","أَ","لَ","-","يَ","سْ","أَ","لُ"])
                            ],
                            [
                                "kata_arab" => "أَجَابَ-يُجِيْبُ",
                                "arti" => "Menjawab",
                                "huruf" => array_unique(["أَ","جَ","ا","بَ","-","يُ","جِ","يْ","بُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَأْذَنَ-يَسْتَأْذِنُ",
                                "arti" => "Meminta izin",
                                "huruf" => array_unique(["اِ","سْ","تَ","أْ","ذَ","نَ","-","يَ","سْ","تَ","أْ","ذِ","نُ"])
                            ],
                            [
                                "kata_arab" => "بَدَأَ-يَبْدَأُ",
                                "arti" => "Memulai",
                                "huruf" => array_unique(["بَ","دَ","أَ","-","يَ","بْ","دَ","أُ"])
                            ],
                            [
                                "kata_arab" => "اِخْتَتَمَ-يَخْتَتِمُ",
                                "arti" => "Mengakhiri",
                                "huruf" => array_unique(["اِ","خْ","تَ","تَ","مَ","-","يَ","خْ","تَ","تِ","مُ"])
                            ],
                            [
                                "kata_arab" => "صَحَّ-يَصِحُّ",
                                "arti" => "Benar",
                                "huruf" => array_unique(["صَ","حَّ","-","يَ","صِ","حُّ"])
                            ],
                            [
                                "kata_arab" => "غَابَ-يَغِيْبُ",
                                "arti" => "Absen",
                                "huruf" => array_unique(["غَ","ا","بَ","-","يَ","غِ","يْ","بُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 25')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 24");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 26");
                        $data['materi'] = "Mufrodat 25";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Benda 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 25");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَوَابٌ",
                                "arti" => "Jawaban",
                                "huruf" => array_unique(["جَ","وَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "قَامُوْسٌ",
                                "arti" => "Kamus",
                                "huruf" => array_unique(["قَ","ا","مُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "اَلْوَاجِبُ الْمَنْزِلِيُّ",
                                "arti" => "Pekerjaan rumah",
                                "huruf" => array_unique(["اَ","لْ","وَ","ا","جِ","بُ","ا","لْ","مَ","نْ","زِ","لِ","يُّ"])
                            ],
                            [
                                "kata_arab" => "غَيْبٌ",
                                "arti" => "Absen",
                                "huruf" => array_unique(["غَ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مِثَالٌ",
                                "arti" => "Contoh",
                                "huruf" => array_unique(["مِ","ثَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ",
                                "arti" => "Sekolah",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَصْلٌ",
                                "arti" => "Kelas",
                                "huruf" => array_unique(["فَ","صْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مِمْسَحَةٌ",
                                "arti" => "Penghapus",
                                "huruf" => array_unique(["مِ","مْ","سَ","حَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 26')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 25");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 27");
                        $data['materi'] = "Mufrodat 26";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Kerja 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 26");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَضَرَ-يَحْضُرُ",
                                "arti" => "Hadir",
                                "huruf" => array_unique(["حَ","ضَ","رَ","-","يَ","حْ","ضُ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَشَارَ-يُشِيْرُ إِلَى",
                                "arti" => "Menunjuk",
                                "huruf" => array_unique(["أَ","شَ","ا","رَ","-","يُ","شِ","يْ","رُ","_","إِ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "خَالَفَ-يُخَالِفُ",
                                "arti" => "Melanggar",
                                "huruf" => array_unique(["خَ","ا","لَ","فَ","-","يُ","خَ","ا","لِ","فُ"])
                            ],
                            [
                                "kata_arab" => "تَكَاسَلَ-يَتَكَاسَلُ",
                                "arti" => "Malas",
                                "huruf" => array_unique(["تَ","كَ","ا","سَ","لَ","-","يَ","تَ","كَ","ا","سَ","لُ"])
                            ],
                            [
                                "kata_arab" => "مَنَعَ-يَمْنَعُ",
                                "arti" => "Melarang",
                                "huruf" => array_unique(["مَ","نَ","عَ","-","يَ","مْ","نَ","عُ"])
                            ],
                            [
                                "kata_arab" => "خَطَّأَ-يُخَطِّئُ",
                                "arti" => "Menyalahkan",
                                "huruf" => array_unique(["خَ","طَّ","أَ","-","يُ","خَ","طِّ","ئُ"])
                            ],
                            [
                                "kata_arab" => "حَضَّرَ-يُحَضِّرُ",
                                "arti" => "Mengabsen",
                                "huruf" => array_unique(["حَ","ضَّ","رَ","-","يُ","حَ","ضِّ","رُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 27')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 26");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 28");
                        $data['materi'] = "Mufrodat 27";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Benda 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 27");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَوْقِيْعٌ",
                                "arti" => "Tanda tangan",
                                "huruf" => array_unique(["تَ","وْ","قِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "تَدْرِيْبٌ",
                                "arti" => "Latihan",
                                "huruf" => array_unique(["تَ","دْ","رِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "جَرَسٌ",
                                "arti" => "Bel",
                                "huruf" => array_unique(["جَ","رَ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُمْتَازٌ",
                                "arti" => "Istimewa",
                                "huruf" => array_unique(["مُ","مْ","تَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "جَيِّدٌ جِدًّا",
                                "arti" => "Baik sekali",
                                "huruf" => array_unique(["جَ","يِّ","دٌ","_","جِ","دًّ","ا"])
                            ],
                            [
                                "kata_arab" => "جَيِّدٌ",
                                "arti" => "Baik",
                                "huruf" => array_unique(["جَ","يِّ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْبُوْلٌ",
                                "arti" => "Cukup",
                                "huruf" => array_unique(["مَ","قْ","بُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "رَاسِبٌ",
                                "arti" => "Gagal / kurang",
                                "huruf" => array_unique(["رَ","ا","سِ","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 28')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 27");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 28";
                        $data['tema'] = "Sekolah dan Kelas";
                        $data['title'] = "Kata Kerja 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 28");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَمَرَ-يَأْمُرُ بِ",
                                "arti" => "Menyuruh",
                                "huruf" => array_unique(["أَ","مَ","رَ","-","يَ","أْ","مُ","رُ","_","بِ"])
                            ],
                            [
                                "kata_arab" => "صَوَّرَ-يُصَوِّرُ",
                                "arti" => "Menggambar",
                                "huruf" => array_unique(["صَ","وَّ","رَ","-","يُ","صَ","وِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "دَعَا-يَدْعُوْ",
                                "arti" => "Memanggil",
                                "huruf" => array_unique(["دَ","عَ","ا","-","يَ","دْ","عُ","وْ"])
                            ],
                            [
                                "kata_arab" => "رَجَعَ-يَرْجِعُ",
                                "arti" => "Pulang",
                                "huruf" => array_unique(["رَ","جَ","عَ","-","يَ","رْ","جِ","عُ"])
                            ],
                            [
                                "kata_arab" => "بَحَثَ-يَبْحَثُ فِيْ",
                                "arti" => "Membahas",
                                "huruf" => array_unique(["بَ","حَ","ثَ","-","يَ","بْ","حَ","ثُ","فِ","يْ","_"])
                            ],
                            [
                                "kata_arab" => "جَمَعَ-يَجْمَعُ",
                                "arti" => "Mengumpulkan",
                                "huruf" => array_unique(["جَ","مَ","عَ","-","يَ","جْ","مَ","عُ"])
                            ],
                            [
                                "kata_arab" => "حَفِظَ-يَحْفَظُ",
                                "arti" => "Menghafal",
                                "huruf" => array_unique(["حَ","فِ","ظَ","-","يَ","حْ","فَ","ظُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 29')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 30");
                        $data['materi'] = "Mufrodat 29";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Benda 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 29");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَمُوْدٌ",
                                "arti" => "Tiang",
                                "huruf" => array_unique(["عَ","مُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "بِسَاطٌ",
                                "arti" => "Karpet",
                                "huruf" => array_unique(["بِ","سَ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "سَجَّادَةٌ",
                                "arti" => "Sajadah",
                                "huruf" => array_unique(["سَ","جَّ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُصْحَفٌ",
                                "arti" => "Mushaf",
                                "huruf" => array_unique(["مُ","صْ","حَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "نُشْرَةٌ",
                                "arti" => "Buletin",
                                "huruf" => array_unique(["نُ","شْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صُنْدُوْقُ الْإِنْفَاقِ",
                                "arti" => "Kotak infaq",
                                "huruf" => array_unique(["صُ","نْ","دُ","وْ","قُ","_","ا","لْ","إِ","نْ","فَ","ا","قِ"])
                            ],
                            [
                                "kata_arab" => "مِحْرَابٌ",
                                "arti" => "Mihrab",
                                "huruf" => array_unique(["مِ","حْ","رَ","ا","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 30')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 29");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 31");
                        $data['materi'] = "Mufrodat 30";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Kerja 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 30");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِنْبَطَحَ-يَنْبَطِحُ",
                                "arti" => "Tengkurap",
                                "huruf" => array_unique(["اِ","نْ","بَ","طَ","حَ","-","يَ","نْ","بَ","طِ",'حُ'])
                            ],
                            [
                                "kata_arab" => "اِسْتَلْقَى-يَسْتَلْقِيْ",
                                "arti" => "Berbaring",
                                "huruf" => array_unique(["اِ","سْ","تَ","لْ","قَ","ى","-","يَ","سْ","تَ","لْ","قِ","يْ"])
                            ],
                            [
                                "kata_arab" => "بَطَلَ-يَبْطُلُ",
                                "arti" => "Batal",
                                "huruf" => array_unique(["بَ","طَ","لَ","-","يَ","بْ","طُ","لُ"])
                            ],
                            [
                                "kata_arab" => "هَدَأَ-يَهْدَأُ",
                                "arti" => "Tenang",
                                "huruf" => array_unique(["هَ","دَ","أَ","-","يَ","هْ","دَ","أُ"])
                            ],
                            [
                                "kata_arab" => "تَأَدَّبَ-يَتَأَدَّبُ",
                                "arti" => "Beradab",
                                "huruf" => array_unique(["تَ","أَ","دَّ","بَ","-","يَ","تَ","أَ","دَّ","بُ"])
                            ],
                            [
                                "kata_arab" => "أَسْرَعَ-يُسْرِعُ",
                                "arti" => "Bergegas",
                                "huruf" => array_unique(["أَ","سْ","رَ","عَ","-","يُ","سْ","رِ","عُ"])
                            ],
                            [
                                "kata_arab" => "اِعْتَكَفَ-يَعْتَكِفُ",
                                "arti" => "I’tikaf",
                                "huruf" => array_unique(["اِ","عْ","تَ","كَ","فَ","-","يَ","عْ","تَ","كِ","فُ"])
                            ],
                            [
                                "kata_arab" => "سَجَدَ-يَسْجُدُ",
                                "arti" => "Sujud",
                                "huruf" => array_unique(["سَ","جَ","دَ","-","يَ","سْ","جُ","دُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 31')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 30");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 32");
                        $data['materi'] = "Mufrodat 31";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Kerja 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 31");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَلَّى-يُصَلِّيْ",
                                "arti" => "Sholat",
                                "huruf" => array_unique(["صَ","لَّ","ى","-","يُ","صَ","لِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "ذَكَرَ-يَذْكُرُ",
                                "arti" => "Berdzikir",
                                "huruf" => array_unique(["ذَ","كَ","رَ","-","يَ","ذْ","كُ","رُ"])
                            ],
                            [
                                "kata_arab" => "رَكَعَ-يَرْكَعُ",
                                "arti" => "Rukuk",
                                "huruf" => array_unique(["رَ","كَ","عَ","-","يَ","رْ","كَ","عُ"])
                            ],
                            [
                                "kata_arab" => "أَذَّنَ-يُؤَذِّنُ",
                                "arti" => "Mengumandangkan adzan",
                                "huruf" => array_unique(["أَ","ذَّ","نَ","-","يُ","ؤَ","ذِّ","نُ"])
                            ],
                            [
                                "kata_arab" => "تَوَضَّأَ-يَتَوَضَّأُ",
                                "arti" => "Berwudhu",
                                "huruf" => array_unique(["تَ","وَ","ضَّ","أَ","-","يَ","تَ","وَ","ضَّ","أُ"])
                            ],
                            [
                                "kata_arab" => "تَيَمَّمَ-يَتَيَمَّمُ",
                                "arti" => "Tayammum",
                                "huruf" => array_unique(["تَ","يَ","مَّ","مَ","-","يَ","تَ","يَ","مَّ","مُ"])
                            ],
                            [
                                "kata_arab" => "دَعَا-يَدْعُوْ",
                                "arti" => ": Berdoa kebaikan",
                                "huruf" => array_unique(["دَ","عَ","ا","-","يَ","دْ","عُ","وْ"])
                            ],
                            [
                                "kata_arab" => "دَعَا-يَدْعُوْ",
                                "arti" => ": Berdoa keburukan",
                                "huruf" => array_unique(["دَ","عَ","ا","-","يَ","دْ","عُ","وْ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 32')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 31");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 33");
                        $data['materi'] = "Mufrodat 32";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Benda 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 32");
                        $data['mufrodat'] = [
                            [
                                "kata_arab"=> "مِنْبَرٌ",
                                "arti" => "Mimbar",
                                "huruf" => array_unique(["مِ","نْ","بَ","رٌ"])
                            ],
                            [
                                "kata_arab"=> "إِمَامٌ",
                                "arti" => "Imam",
                                "huruf" => array_unique(["إِ","مَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab"=> "مَأْمُوْمٌ",
                                "arti" => "Makmum",
                                "huruf" => array_unique(["مَ","أْ","مُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab"=> "سُتْرَةٌ",
                                "arti" => "Sutroh",
                                "huruf" => array_unique(["سُ","تْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab"=> "قُبَّةٌ",
                                "arti" => "Kubah",
                                "huruf" => array_unique(["قُ","بَّ","ةٌ"])
                            ],
                            [
                                "kata_arab"=> "مِئْذَنَةٌ",
                                "arti" => "Menara azan",
                                "huruf" => array_unique(["مِ","ئْ","ذَ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab"=> "مُحَاضَرَةٌ",
                                "arti" => "Pengajian",
                                "huruf" => array_unique(["مُ","حَ","ا","ضَ","رَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 33')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 32");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 34");
                        $data['materi'] = "Mufrodat 33";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Kerja 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 33");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِجْتَمَعَ-يَجْتَمِعُ",
                                "arti" => "Berkumpul",
                                "huruf" => array_unique(["اِ","جْ","تَ","مَ","عَ","-","يَ","جْ","تَ","مِ","عُ"])
                            ],
                            [
                                "kata_arab" => "تَلَا-يَتْلُوْ",
                                "arti" => "Tilawah",
                                "huruf" => array_unique(["تَ","لَ","ا","-","يَ","تْ","لُ","وْ"])
                            ],
                            [
                                "kata_arab" => "كَبَّرَ-يُكَبِّرُ",
                                "arti" => "Bertakbir",
                                "huruf" => array_unique(["كَ","بَّ","رَ","-","يُ","كَ","بِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "عَبَدَ-يَعْبُدُ",
                                "arti" => "Beribadah",
                                "huruf" => array_unique(["عَ","بَ","دَ","-","يَ","عْ","بُ","دُ"])
                            ],
                            [
                                "kata_arab" => "بَقِيَ-يَبْقَى",
                                "arti" => "Menetap",
                                "huruf" => array_unique(["بَ","قِ","يَ","-","يَ","بْ","قَ","ى"])
                            ],
                            [
                                "kata_arab" => "تَصَدَّقَ-يَتَصَدَّقُ عَلَى",
                                "arti" => "Bersedekah",
                                "huruf" => array_unique(["تَ","صَ","دَّ","قَ","-","يَ","تَ","صَ","دَّ","قُ","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "أَنْفَقَ-يُنْفِقُ عَلَى",
                                "arti" => "Berinfaq",
                                "huruf" => array_unique(["أَ","نْ","فَ","قَ","-","يُ","نْ","فِ","قُ","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "سَمَّعَ-يُسَمِّعُ",
                                "arti" => "Menyetorkan",
                                "huruf" => array_unique(["سَ","مَّ","عَ","-","يُ","سَ","مِّ","عُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 34')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 33");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 35");
                        $data['materi'] = "Mufrodat 34";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Kerja 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 34");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَعْلَنَ-يُعْلِنُ",
                                "arti" => "Mengumumkan",
                                "huruf" => array_unique(["أَ",'عْ',"لَ","نَ","-","يُ","عْ","لِ","نُ"])
                            ],
                            [
                                "kata_arab" => "عَفَا-يَعْفُوْ عَنْ",
                                "arti" => "Memaafkan",
                                "huruf" => array_unique(["عَ","فَ","ا","-","يَ","عْ","فُ","وْ","_","عَ","نْ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَقَامَ-يَسْتَقِيْمُ",
                                "arti" => "Lurus",
                                "huruf" => array_unique(["اِ","سْ","تَ","قَ","ا","مَ","-","يَ","سْ","تَ","قِ","يْ","مُ"])
                            ],
                            [
                                "kata_arab" => "زَكَّى-يُزَكِّيْ",
                                "arti" => "Berzakat",
                                "huruf" => array_unique(["زَ","كَّ","ى","-","يُ","زَ","كِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "ذَبَحَ-يَذْبَحُ",
                                "arti" => "Menyembelih",
                                "huruf" => array_unique(["ذَ","بَ","حَ","-","يَ","ذْ","بَ","حُ"])
                            ],
                            [
                                "kata_arab" => "سَلَّمَ-يُسَلِّمُ عَلَى",
                                "arti" => "Mengucapkan salam",
                                "huruf" => array_unique(["سَ","لَّ","مَ","-","يُ","سَ","لِّ","مُ","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "كَذَبَ-يَكْذِبُ",
                                "arti" => "Berbohong",
                                "huruf" => array_unique(["كَ","ذَ","بَ","-","يَ","كْ","ذِ","بُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 35')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 34");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 36");
                        $data['materi'] = "Mufrodat 35";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Benda 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 35");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَصِيْحَةٌ",
                                "arti" => "Nasehat",
                                "huruf" => array_unique(["نَ","صِ","يْ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَوَضَّأٌ",
                                "arti" => "Tempat wudhu",
                                "huruf" => array_unique(["مُ","تَ","وَ","ضَّ","أٌ"])
                            ],
                            [
                                "kata_arab" => "وُضُوْءٌ",
                                "arti" => "Wudhu",
                                "huruf" => array_unique(["وُ","ضُ","وْ","ءٌ"])
                            ],
                            [
                                "kata_arab" => "نَدْوَةٌ",
                                "arti" => "Seminar",
                                "huruf" => array_unique(["نَ","دْ","وَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَمَاعَةٌ",
                                "arti" => "Jama’ah",
                                "huruf" => array_unique(["جَ","مَ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُطْبَةٌ",
                                "arti" => "Khutbah",
                                "huruf" => array_unique(["خُ","طْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَلَاةٌ نَافِلَةٌ",
                                "arti" => "Sholat sunnah",
                                "huruf" => array_unique(["صَ","لَ","ا","ةٌ","نَ","ا","فِ","لَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 36')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 35");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 37");
                        $data['materi'] = "Mufrodat 36";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Kerja 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 36");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَدَقَ-يَصْدُقُ",
                                "arti" => "Jujur",
                                "huruf" => array_unique(["صَ","دَ","قَ","-","يَ","صْ","دُ","قُ"])
                            ],
                            [
                                "kata_arab" => "صَدَّقَ-يُصَدِّقُ",
                                "arti" => "Membenarkan",
                                "huruf" => array_unique(["صَ","دَّ","قَ","-","يُ","صَ","دِّ","قُ"])
                            ],
                            [
                                "kata_arab" => "سَوَّى-يُسَوِّيْ",
                                "arti" => "Meluruskan",
                                "huruf" => array_unique(["سَ","وَّ","ى","-","يُ","سَ","وِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "ظَلَمَ-يَظْلِمُ",
                                "arti" => "Mendzholimi",
                                "huruf" => array_unique(["ظَ","لَ","مَ","-","يَ","ظْ","لِ","مُ"])
                            ],
                            [
                                "kata_arab" => "تَأَثَّرَ-يَتَأَثَّرُ بِـ",
                                "arti" => "Terpengaruh",
                                "huruf" => array_unique(["تَ","أَ","ثَّ","رَ","-","يَ","تَ","أَ","ثَّ","رُ","بِ","_"])
                            ],
                            [
                                "kata_arab" => "أَدَّى-يُؤَدِّيْ",
                                "arti" => "Melaksanakan",
                                "huruf" => array_unique(["أَ","دَّ","ى","-","يُ","ؤَ","دِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "خَطَبَ-يَخْطُبُ",
                                "arti" => "Berkhotbah",
                                "huruf" => array_unique(["خَ","طَ","بَ","-","يَ","خْ","طُ","بُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 37')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 36");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 38");
                        $data['materi'] = "Mufrodat 37";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Kerja 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 37");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَبَّحَ-يُسَبِّحُ",
                                "arti" => "Bertasbih",
                                "huruf" => array_unique(["سَ","بَّ","حَ","-","يُ","سَ","بِّ","حُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَغْفَرَ-يَسْتَغْفِرُ",
                                "arti" => "Meminta ampun",
                                "huruf" => array_unique(["اِ","سْ","تَ","غْ","فَ","رَ","-","يَ","سْ","تَ","غْ","فِ","رُ"])
                            ],
                            [
                                "kata_arab" => "حَاضَرَ-يُحَاضِرُ",
                                "arti" => "Mengisi kajian",
                                "huruf" => array_unique(["حَ","ا","ضَ","رَ","-","يُ","حَ","ا","ضِ","رُ"])
                            ],
                            [
                                "kata_arab" => "نَوَى-يَنْوِيْ",
                                "arti" => "Berniat",
                                "huruf" => array_unique(["نَ","وَ","ى","-","يَ","نْ","وِ","يْ"])
                            ],
                            [
                                "kata_arab" => "صَامَ-يَصُوْمُ",
                                "arti" => "Puasa",
                                "huruf" => array_unique(["صَ","ا","مَ","-","يَ","صُ","وْ","مُ"])
                            ],
                            [
                                "kata_arab" => "أَثَّرَ-يُؤَثِّرُ",
                                "arti" => "Mempengaruhi",
                                "huruf" => array_unique(["أَ","ثَّ","رَ","-","يُ","ؤَ","ثِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَحْسَنَ-يُحْسِنُ إِلَى",
                                "arti" => "Berbuat baik",
                                "huruf" => array_unique(["أَ","حْ","سَ","نَ","-","يُ","حْ","سِ","نُ","_","إِ","لَ","ى"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 38')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 37");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 39");
                        $data['materi'] = "Mufrodat 38";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Benda 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 38");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَلَاةٌ فَرِيْضَةٌ",
                                "arti" => "Sholat wajib",
                                "huruf" => array_unique(["صَ","لَ","ا","ةٌ","_","فَ","رِ","يْ","ضَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَجَسٌ",
                                "arti" => "Najis",
                                "huruf" => array_unique(["نَ","جَ","سٌ"])
                            ],
                            [
                                "kata_arab" => "بُشْرَى",
                                "arti" => "Kabar baik",
                                "huruf" => array_unique(["بُ","شْ","رَ","ى"])
                            ],
                            [
                                "kata_arab" => "خَبَرٌ مُحْزِنٌ",
                                "arti" => "Kabar buruk",
                                "huruf" => array_unique(["خَ","بَ","رٌ","_","مُ","حْ","زِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "بَرْنَامِجٌ",
                                "arti" => "Acara",
                                "huruf" => array_unique(["بَ","رْ","نَ","ا","مِ","جٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْبُوْقٌ",
                                "arti" => "Masbuk",
                                "huruf" => array_unique(["مَ","سْ","بُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "لَوْحَةُ الْإِعْلَانِ",
                                "arti" => "Papan pengumuman",
                                "huruf" => array_unique(["لَ","وْ","حَ","ةُ","_","ا","لْ","إِ","عْ","لَ","ا","نِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 39')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 38");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 40");
                        $data['materi'] = "Mufrodat 39";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Kerja 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 39");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَمِدَ-يَحْمَدُ",
                                "arti" => "Memuji",
                                "huruf" => array_unique(["حَ","مِ","دَ","-","يَ","حْ","مَ","دُ"])
                            ],
                            [
                                "kata_arab" => "آذَى-يُؤْذِيْ",
                                "arti" => "Mengganggun",
                                "huruf" => array_unique(["آ","ذَ","ى","-","يُ","ؤْ","ذِ","يْ"])
                            ],
                            [
                                "kata_arab" => "اِرْتَبَكَ-يَرْتَبِكُ",
                                "arti" => "Gemetar (grogi)",
                                "huruf" => array_unique(["اِ","رْ","تَ","بَ","كَ","-","يَ","رْ","تَ","بِ","كُ"])
                            ],
                            [
                                "kata_arab" => "ظَنَّ-يَظُنُّ",
                                "arti" => "Mengira",
                                "huruf" => array_unique(["ظَ","نَّ","-","يَ","ظُ","نُّ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعْفَى-يَسْتَعْفِيْ مِنْ",
                                "arti" => "Meminta maaf",
                                "huruf" => array_unique(["اِ","سْ","تَ","عْ","فَ","ى","-","يَ","سْ","تَ","عْ","فِ","يْ","_","مِ","نْ"])
                            ],
                            [
                                "kata_arab" => "اِجْتَهَدَ-يَجْتَهِدُ",
                                "arti" => "Bersungguh-sungguh",
                                "huruf" => array_unique(["اِ","جْ","تَ","هَ","دَ","-","يَ","جْ","تَ","هِ","دُ"])
                            ],
                            [
                                "kata_arab" => "طَرَدَ-يَطْرُدُ",
                                "arti" => "Mengusir",
                                "huruf" => array_unique(["طَ","رَ","دَ","-","يَ","طْ","رُ","دُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 40')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 39");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 40";
                        $data['tema'] = "Masjid";
                        $data['title'] = "Kata Kerja 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 40");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَئِمَ-يَسْأَمُ",
                                "arti" => "Bosan",
                                "huruf" => array_unique(["سَ","ئِ","مَ","-","يَ","سْ","أَ","مُ"])
                            ],
                            [
                                "kata_arab" => "رَجَا-يَرْجُوْ",
                                "arti" => "Berharap",
                                "huruf" => array_unique(["رَ","جَ","ا","-","يَ","رْ","جُ","وْ"])
                            ],
                            [
                                "kata_arab" => "اِنْتَبَهَ-يَنْتَبِهُ",
                                "arti" => "Memperhatikan",
                                "huruf" => array_unique(["اِ","نْ","تَ","بَ","هَ","-","يَ","نْ","تَ","بِ","هُ"])
                            ],
                            [
                                "kata_arab" => "أَمَّ-يَؤُمُّ",
                                "arti" => "Menjadi imam",
                                "huruf" => array_unique(["أَ","مَّ","-","يَ","ؤُ","مُّ"])
                            ],
                            [
                                "kata_arab" => "غَفَلَ-يَغْفُلُ عَنْ",
                                "arti" => "Lalai",
                                "huruf" => array_unique(["غَ","فَ","لَ","-","يَ","غْ","فُ","لُ","_","عَ","نْ"])
                            ],
                            [
                                "kata_arab" => "صَحَّحَ-يُصَحِّحُ",
                                "arti" => "Membenarkan",
                                "huruf" => array_unique(["صَ","حَّ","حَ","-","يُ","صَ","حِّ","حُ"])
                            ],
                            [
                                "kata_arab" => "خَشَعَ-يَخْشَعُ",
                                "arti" => "Khusyuk",
                                "huruf" => array_unique(["خَ","شَ","عَ","-","يَ","خْ","شَ","عُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 41')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 42");
                        $data['materi'] = "Mufrodat 41";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Benda 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 41");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَوْقِدٌ",
                                "arti" => "Kompor",
                                "huruf" => array_unique(["مَ","وْ","قِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْلَاةٌ",
                                "arti" => "Wajan",
                                "huruf" => array_unique(["مِ","قْ","لَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَازٌ",
                                "arti" => "Gas",
                                "huruf" => array_unique(["غَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "صَحْنٌ",
                                "arti" => "Piring",
                                "huruf" => array_unique(["صَ","حْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "كُوْبٌ",
                                "arti" => "Gelas",
                                "huruf" => array_unique(["كُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةٌ",
                                "arti" => "Sendok",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَائِدَةٌ",
                                "arti" => "Meja makan",
                                "huruf" => array_unique(["مَ","ا","ئِ","دَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 42')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 41");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 43");
                        $data['materi'] = "Mufrodat 42";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Kerja 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 42");
                        $data['mufrodat'] = [
                            [
                                " kata_arab" => "أَكَلَ-يَأْكُلُ",
                                "arti" => "Makan",
                                "huruf" => array_unique(["أَ","كَ","لَ","-","يَ","أْ","كُ","لُ"])
                            ],
                            [
                                " kata_arab" => "شَرِبَ-يَشْرَبُ",
                                "arti" => "Minum",
                                "huruf" => array_unique(["شَ","رِ","بَ","-","يَ","شْ","رَ","بُ"])
                            ],
                            [
                                " kata_arab" => "جَاعَ-يَجُوْعُ",
                                "arti" => "Lapar",
                                "huruf" => array_unique(["جَ","ا","عَ","-","يَ","جُ","وْ","عُ"])
                            ],
                            [
                                " kata_arab" => "عَطِشَ-يَعْطَشُ",
                                "arti" => "Haus",
                                "huruf" => array_unique(["عَ","طِ","شَ","-","يَ","عْ","طَ","شُ"])
                            ],
                            [
                                " kata_arab" => "شَبِعَ-يَشْبَعُ",
                                "arti" => "Kenyang",
                                "huruf" => array_unique(["شَ","بِ","عَ","-","يَ","شْ","بَ","عُ"])
                            ],
                            [
                                " kata_arab" => "طَبَخَ-يَطْبَخُ",
                                "arti" => "Memasak",
                                "huruf" => array_unique(["طَ","بَ","خَ","-","يَ","طْ","بَ","خُ"])
                            ],
                            [
                                " kata_arab" => "غَلَى-يَغْلِيْ",
                                "arti" => "Mendidih",
                                "huruf" => array_unique(["غَ","لَ","ى","-","يَ","غْ","لِ","يْ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 43')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 42");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 44");
                        $data['materi'] = "Mufrodat 43";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Benda 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 43");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَوْكَةٌ",
                                "arti" => "Garpu",
                                "huruf" => array_unique(["شَ","وْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَصْعَةٌ",
                                "arti" => "Nampan",
                                "huruf" => array_unique(["قَ","صْ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قِدْرٌ",
                                "arti" => "Panci",
                                "huruf" => array_unique(["قِ","دْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سِكِّيْنٌ",
                                "arti" => "Pisau",
                                "huruf" => array_unique(["سِ","كِّ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "زَمْزَمِيَّةٌ",
                                "arti" => "Termos",
                                "huruf" => array_unique(["زَ","مْ","زَ","مِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "ثَلَّاجَةٌ",
                                "arti" => "Kulkas",
                                "huruf" => array_unique(["ثَ","لَّ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَارُوْرَةٌ",
                                "arti" => "Botol",
                                "huruf" => array_unique(["قَ","ا","رُ","وْ","رَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 44')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 43");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 45");
                        $data['materi'] = "Mufrodat 44";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Kerja 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 44");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَلَى-يَقْلِيْ",
                                "arti" => "Menggoreng",
                                "huruf" => array_unique(["قَ","لَ","ى","-","يَ","قْ","لِ","يْ"])
                            ],
                            [
                                "kata_arab" => "قَطَعَ-يَقْطَعُ",
                                "arti" => "Memotong",
                                "huruf" => array_unique(["قَ","طَ","عَ","-","يَ","قْ","طَ","عُ"])
                            ],
                            [
                                "kata_arab" => "سَلَقَ-يَسْلُقُ",
                                "arti" => "Merebus",
                                "huruf" => array_unique(["سَ","لَ","قَ","-","يَ","سْ","لُ","قُ"])
                            ],
                            [
                                "kata_arab" => "صَبَّ-يَصُبُّ",
                                "arti" => "Menuangkan",
                                "huruf" => array_unique(["صَ","بَّ","-","يَ","صُ","بُّ"])
                            ],
                            [
                                "kata_arab" => "سَكَبَ-يَسْكُبُ",
                                "arti" => "Menumpahkan",
                                "huruf" => array_unique(["سَ","كَ","بَ","-","يَ","سْ","كُ","بُ"])
                            ],
                            [
                                "kata_arab" => "حَجَزَ-يَحْجِزُ",
                                "arti" => "Memesan",
                                "huruf" => array_unique(["حَ","جَ","زَ","-","يَ","حْ","جِ","زُ"])
                            ],
                            [
                                "kata_arab" => "ضَيَّفَ-يُضَيِّفُ",
                                "arti" => "Mentraktir",
                                "huruf" => array_unique(["ضَ","يَّ","فَ","-","يُ","ضَ","يِّ","فُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 45')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 44");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 46");
                        $data['materi'] = "Mufrodat 45";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Benda 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 45");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غِطَاءٌ",
                                "arti" => "Tutup",
                                "huruf" => array_unique(["غِ","طَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مَطْعَمٌ",
                                "arti" => "Tempat makan",
                                "huruf" => array_unique(["مَ","طْ","عَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "طَابُوْرٌ",
                                "arti" => "Antre",
                                "huruf" => array_unique(["طَ","ا","بُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "وَجْبَةٌ",
                                "arti" => "Jatah/porsi",
                                "huruf" => array_unique(["وَ","جْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَطُوْرٌ",
                                "arti" => "Makan pagi",
                                "huruf" => array_unique(["فَ","طُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "غَدَاءٌ",
                                "arti" => "Makan siang",
                                "huruf" => array_unique(["غَ","دَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "عَشَاءٌ",
                                "arti" => "Makan malam",
                                "huruf" => array_unique(["عَ","شَ","ا","ءٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 46')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 45");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 47");
                        $data['materi'] = "Mufrodat 46";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Kerja 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 46");
                        $data['mufrodat'] =[
                            [
                                "kata_arab" => "أَطْعَمَ-يُطْعِمُ",
                                "arti" => "Memberi makan",
                                "huruf" => array_unique(["أَ","طْ","عَ","مَ","-","يُ","طْ","عِ","مُ"])
                            ],
                            [
                                "kata_arab" => "شَمَّ-يَشُمُّ",
                                "arti" => "Mencium (hidung)",
                                "huruf" => array_unique(["شَ","مَّ","-","يَ","شُ","مُّ"])
                            ],
                            [
                                "kata_arab" => "أَسْقَطَ-يُسْقِطُ",
                                "arti" => "Menjatuhkan",
                                "huruf" => array_unique(["أَ","سْ","قَ","طَ","-","يُ","سْ","قِ","طُ"])
                            ],
                            [
                                "kata_arab" => "سَقَى-يَسْقِيْ",
                                "arti" => "Memberi minum",
                                "huruf" => array_unique(["سَ","قَ","ى","-","يَ","سْ","قِ","يْ"])
                            ],
                            [
                                "kata_arab" => "اِنْكَسَرَ-يَنْكَسِرُ",
                                "arti" => "Pecah",
                                "huruf" => array_unique(["اِ","نْ","كَ","سَ","رَ","-","يَ","نْ","كَ","سِ","رُ"])
                            ],
                            [
                                "kata_arab" => "مَضَغَ-يَمْضَغُ",
                                "arti" => "Mengunyah",
                                "huruf" => array_unique(["مَ","ضَ","غَ","-","يَ","مْ","ضَ","غُ"])
                            ],
                            [
                                "kata_arab" => "كَسَّرَ-يُكَسِّرُ",
                                "arti" => "Memecahkan",
                                "huruf" => array_unique(["كَ","سَّ","رَ","-","يُ","كَ","سِّ","رُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 47')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 46");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 48");
                        $data['materi'] = "Mufrodat 47";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Benda 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 47");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فِنْجَانٌ",
                                "arti" => "Cangkir",
                                "huruf" => array_unique(["فِ","نْ","جَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "جَالُوْنٌ",
                                "arti" => "Galon",
                                "huruf" => array_unique(["جَ","ا","لُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "عُلْبَةٌ",
                                "arti" => "Kaleng",
                                "huruf" => array_unique(["عُ","لْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْعَدٌ",
                                "arti" => "Bangku",
                                "huruf" => array_unique(["مَ","قْ","عَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةُ الرُّزِّ",
                                "arti" => "Centong",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","ا","ل","رُّ","زِّ"])
                            ],
                            [
                                "kata_arab" => "مَطْبَخٌ",
                                "arti" => "Dapur",
                                "huruf" => array_unique(["مَ","طْ","بَ","خٌ"])
                            ],
                            [
                                "kata_arab" => "طَعَامٌ",
                                "arti" => "Makanan",
                                "huruf" => array_unique(["طَ","عَ","ا","مٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 48')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 47");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 49");
                        $data['materi'] = "Mufrodat 48";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Kerja 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 48");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خَلَّطَ-يُخَلِّطُ",
                                "arti" => "Mencampurkan",
                                "huruf" => array_unique(["خَ","لَّ","طَ","-","يُ","خَ","لِّ","طُ"])
                            ],
                            [
                                "kata_arab" => "اِخْتَلَطَ-يَخْتَلِطُ",
                                "arti" => "Bercampur",
                                "huruf" => array_unique(["اِ","خْ","تَ","لَ","طَ","-","يَ","خْ","تَ","لِ","طُ"])
                            ],
                            [
                                "kata_arab" => "زَادَ-يَزِيْدُ",
                                "arti" => "Bertambah/menambahkan",
                                "huruf" => array_unique(["زَ","ا","دَ","-","يَ","زِ","يْ","دُ"])
                            ],
                            [
                                "kata_arab" => "نَقَصَ-يَنْقُصُ",
                                "arti" => "Berkurang/mengurangi",
                                "huruf" => array_unique(["نَ","قَ","صَ","-","يَ","نْ","قُ","صُ"])
                            ],
                            [
                                "kata_arab" => "بَلَعَ-يَبْلَعُ",
                                "arti" => "Menelan",
                                "huruf" => array_unique(["بَ","لَ","عَ","-","يَ","بْ","لَ","عُ"])
                            ],
                            [
                                "kata_arab" => "نَزَلَ-يَنْزِلُ",
                                "arti" => "Turun",
                                "huruf" => array_unique(["نَ","زَ","لَ","-","يَ","نْ","زِ","لُ"])
                            ],
                            [
                                "kata_arab" => "خَضَّ-يَخُضُّ",
                                "arti" => "Mengocok",
                                "huruf" => array_unique(["خَ","ضَّ","-","يَ","خُ","ضُّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 49')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 48");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 50");
                        $data['materi'] = "Mufrodat 49";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Benda 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 49");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَرَابٌ",
                                "arti" => "Minuman",
                                "huruf" => array_unique(["شَ","رَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْهًى",
                                "arti" => "Kafe",
                                "huruf" => array_unique(["مَ","قْ","هً","ى"])
                            ],
                            [
                                "kata_arab" => "جَفْنَةٌ",
                                "arti" => "Mangkok",
                                "huruf" => array_unique(["جَ","فْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِدَامٌ",
                                "arti" => "Lauk",
                                "huruf" => array_unique(["إِ","دَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "بَهَارَةٌ",
                                "arti" => "Bumbu",
                                "huruf" => array_unique(["بَ","هَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَلْصَةُ الصُّوْيَا",
                                "arti" => "Kecap",
                                "huruf" => array_unique(["صَ","لْ","صَ","ةُ","_","ا","ل","صُّ","وْ","يَ","ا"])
                            ],
                            [
                                "kata_arab" => "شَطَّةٌ حَارَّةٌ",
                                "arti" => "Saos",
                                "huruf" => array_unique(["شَ","طَّ","ةٌ","_","حَ","ا","رَّ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 50')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 49");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 51");
                        $data['materi'] = "Mufrodat 50";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Kerja 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 50");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَدَّ-يَقُدُّ",
                                "arti" => "Mengiris",
                                "huruf" => array_unique(["قَ","دَّ","-","يَ","قُ","دُّ"])
                            ],
                            [
                                "kata_arab" => "اِنْسَكَبَ-يَنْسَكِبُ",
                                "arti" => "Tumpah",
                                "huruf" => array_unique(["اِ","نْ","سَ","كَ","بَ","-","يَ","نْ","سَ","كِ","بُ"])
                            ],
                            [
                                "kata_arab" => "حَرَّكَ-يُحَرِّكُ",
                                "arti" => "Mengaduk",
                                "huruf" => array_unique(["حَ","رَّ","كَ","-","يُ","حَ","رِّ","كُ"])
                            ],
                            [
                                "kata_arab" => "أَحْرَقَ-يُحْرِقُ",
                                "arti" => "Membakar",
                                "huruf" => array_unique(["أَ","حْ","رَ","قَ","-","يُ","حْ","رِ","قُ"])
                            ],
                            [
                                "kata_arab" => "اِحْتَرَقَ-يَحْتَرِقُ",
                                "arti" => "Terbakar",
                                "huruf" => array_unique(["اِ","حْ","تَ","رَ","قَ","-","يَ","حْ","تَ","رِ","قُ"])
                            ],
                            [
                                "kata_arab" => "أَزْعَجَ-يُزْعِجُ",
                                "arti" => "Ribut",
                                "huruf" => array_unique(["أَ","زْ","عَ","جَ","-","يُ","زْ","عِ","جُ"])
                            ],
                            [
                                "kata_arab" => "اِزْدَحَمَ-يَزْدَحِمُ",
                                "arti" => "Ramai",
                                "huruf" => array_unique(["اِ","زْ","دَ","حَ","مَ","-","يَ","زْ","دَ","حِ","مُ"])
                            ]
                        ];
                    }
                // 1 - 50

                // 51 - 100
                    else if($_GET['id'] == MD5('Mufrodat 51')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 50");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 52");
                        $data['materi'] = "Mufrodat 51";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Benda 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 51");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَائِحَةٌ",
                                "arti" => "Aroma",
                                "huruf" => array_unique(["رَ","ا","ئِ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زِيْرٌ",
                                "arti" => "Tong",
                                "huruf" => array_unique(["زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْحٌ",
                                "arti" => "Garam",
                                "huruf" => array_unique(["مِ","لْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "سُكَّرٌ",
                                "arti" => "Gula",
                                "huruf" => array_unique(["سُ","كَّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "زَيْتٌ",
                                "arti" => "Minyak",
                                "huruf" => array_unique(["زَ","يْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "مَرَقَةٌ",
                                "arti" => "Kuah",
                                "huruf" => array_unique(["مَ","رَ","قَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 52')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 51");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 52";
                        $data['tema'] = "Tempat Makan dan Dapur";
                        $data['title'] = "Kata Kerja 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 52");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَزَّعَ-يُوَزِّعُ",
                                "arti" => "Membagikan",
                                "huruf" => array_unique(["وَ","زَّ","عَ","-","يُ","وَ","زِّ","عُ"])
                            ],
                            [
                                "kata_arab" => "طَمَعَ-يَطْمَعُ",
                                "arti" => "Tamak/rakus",
                                "huruf" => array_unique(["طَ","مَ","عَ","-","يَ","طْ","مَ","عُ"])
                            ],
                            [
                                "kata_arab" => "قَنَعَ-يَقْنَعُ",
                                "arti" => "Cukup",
                                "huruf" => array_unique(["قَ","نَ","عَ","-","يَ","قْ","نَ","عُ"])
                            ],
                            [
                                "kata_arab" => "اِشْتَرَى-يَشْتَرِيْ",
                                "arti" => "Membeli",
                                "huruf" => array_unique(["اِ","شْ","تَ","رَ","ى","-","يَ","شْ","تَ","رِ","يْ"])
                            ],
                            [
                                "kata_arab" => "بَاعَ-يَبِيْعُ",
                                "arti" => "Menjual",
                                "huruf" => array_unique(["بَ","ا","عَ","-","يَ","بِ","يْ","عُ"])
                            ],
                            [
                                "kata_arab" => "حَصَلَ-يَحْصُلُ عَلَى",
                                "arti" => "Medapatkan",
                                "huruf" => array_unique(["حَ","صَ","لَ","-","يَ","حْ","صُ","لُ","_","عَ","لَ","ى"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 53')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 54");
                        $data['materi'] = "Mufrodat 53";
                        $data['tema'] = "Kamar Mandi";
                        $data['title'] = "Kata Benda 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 53");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَلْوٌ",
                                "arti" => "Ember",
                                "huruf" => array_unique(["دَ","لْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "مِغْرَفَةٌ",
                                "arti" => "Gayung",
                                "huruf" => array_unique(["مِ","غْ","رَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَةُ الْأَسْنَانِ",
                                "arti" => "Sikat gigi",
                                "huruf" => array_unique(["فُ","رْ","شَ","ةُ","_","ا","لْ","أَ","سْ","نَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "مَعْجُوْنُ الْأَسْنَانِ",
                                "arti" => "Odol",
                                "huruf" => array_unique(["مَ","عْ","جُ","وْ","نُ","_","ا","لْ","أَ","سْ","نَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "صَابُوْنَةٌ",
                                "arti" => "Sabun",
                                "huruf" => array_unique(["صَ","ا","بُ","وْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَامْبُوْ",
                                "arti" => "Sampo",
                                "huruf" => array_unique(["شَ","ا","مْ","بُ","وْ"])
                            ],
                            [
                                "kata_arab" => "مِنْشَفَةٌ",
                                "arti" => "Handuk",
                                "huruf" => array_unique(["مِ","نْ","شَ","فَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 54')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 53");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 55");
                        $data['materi'] = "Mufrodat 54";
                        $data['tema'] = "Kamar Mandi";
                        $data['title'] = "Kata Kerja 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 54");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِغْتَسَلَ-يَغْتَسِلُ",
                                "arti" => "Mandi",
                                "huruf" => array_unique(["اِ","غْ","تَ","سَ","لَ","-","يَ","غْ","تَ","سِ","لُ"])
                            ],
                            [
                                "kata_arab" => "فَرَّشَ-يُفَرِّشُ",
                                "arti" => "Menyikat",
                                "huruf" => array_unique(["فَ","رَّ","شَ","-","يُ","فَ","رِّ","شُ"])
                            ],
                            [
                                "kata_arab" => "تَسَوَّكَ-يَتَسَوَّكُ",
                                "arti" => "Menyikat gigi",
                                "huruf" => array_unique(["تَ","سَ","وَّ","كَ","-","يَ","تَ","سَ","وَّ","كُ"])
                            ],
                            [
                                "kata_arab" => "سَقَى-يَسْقِيْ",
                                "arti" => "Menyiram",
                                "huruf" => array_unique(["سَ","قَ","ى","-","يَ","سْ","قِ","يْ"])
                            ],
                            [
                                "kata_arab" => "بَالَ-يَبُوْلُ",
                                "arti" => "BAK",
                                "huruf" => array_unique(["بَ","ا","لَ","-","يَ","بُ","وْ","لُ"])
                            ],
                            [
                                "kata_arab" => "تَغَوَّطَ-يَتَغَوَّطُ",
                                "arti" => "BAB",
                                "huruf" => array_unique(["تَ","غَ","وَّ","طَ","-","يَ","تَ","غَ","وَّ","طُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 55')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 54");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 56");
                        $data['materi'] = "Mufrodat 55";
                        $data['tema'] = "Kamar Mandi";
                        $data['title'] = "Kata Benda 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 55");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَنْبُوْرٌ",
                                "arti" => "Kran air",
                                "huruf" => array_unique(["صَ","نْ","بُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "حَمَّامٌ",
                                "arti" => "Kamar mandi",
                                "huruf" => array_unique(["حَ","مَّ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَةٌ",
                                "arti" => "Sikat",
                                "huruf" => array_unique(["فُ","رْ","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُوْسَى",
                                "arti" => "Silet cukur",
                                "huruf" => array_unique(["مُ","وْ","سَ","ى"])
                            ],
                            [
                                "kata_arab" => "قَضَاءُ الْحَاجَةِ",
                                "arti" => "Buang hajat",
                                "huruf" => array_unique(["قَ","ضَ","ا","ءُ","_","ا","لْ","حَ","ا","جَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "مِزْلَاجٌ",
                                "arti" => "Slot (kunci kamar)",
                                "huruf" => array_unique(["مِ","زْ","لَ","ا","جٌ"])
                            ],
                            [
                                "kata_arab" => "دَوْرَةُ الْمِيَاهِ",
                                "arti" => "Toilet",
                                "huruf" => array_unique(["دَ","وْ","رَ","ةُ","_","ا","لْ","مِ","يَ","ا","هِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 56')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 55");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 57");
                        $data['materi'] = "Mufrodat 56";
                        $data['tema'] = "Kamar Mandi";
                        $data['title'] = "Kata Kerja 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 56");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَالَ-يَسِيْلُ",
                                "arti" => "Mengalir",
                                "huruf" => array_unique(["سَ","ا","لَ","-","يَ","سِ","يْ",'لُ'])
                            ],
                            [
                                "kata_arab" => "مَسَحَ-يَمْسَحُ",
                                "arti" => "Mengusap",
                                "huruf" => array_unique(["مَ","سَ","حَ","-","يَ","مْ","سَ","حُ"])
                            ],
                            [
                                "kata_arab" => "قَرْفَصَ-يُقَرْفِصُ",
                                "arti" => "Jongkok",
                                "huruf" => array_unique(["قَ","رْ","فَ","صَ","-","يُ","قَ","رْ","فِ","صُ"])
                            ],
                            [
                                "kata_arab" => "غَسَلَ-يَغْسِلُ",
                                "arti" => "Mencuci",
                                "huruf" => array_unique(["غَ","سَ","لَ","-","يَ","غْ","سِ","لُ"])
                            ],
                            [
                                "kata_arab" => "نَقَعَ-يَنْقَعُ",
                                "arti" => "Merendam",
                                "huruf" => array_unique(["نَ","قَ","عَ","-","يَ","نْ","قَ",'عُ'])
                            ],
                            [
                                "kata_arab" => "رَشَّ-يَرُشُّ",
                                "arti" => "Menyemprot",
                                "huruf" => array_unique(["رَ","شَّ","-","يَ","رُ","شُّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 57')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 56");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 58");
                        $data['materi'] = "Mufrodat 57";
                        $data['tema'] = "Kamar Mandi";
                        $data['title'] = "Kata Benda 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 57");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "زَبَدٌ",
                                "arti" => "Busa",
                                "huruf" => array_unique(["زَ","بَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "أَدَاةٌ",
                                "arti" => "Peralatan",
                                "huruf" => array_unique(["أَ","دَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْلَاقٌ",
                                "arti" => "Gantungan",
                                "huruf" => array_unique(["مِ","عْ","لَ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَادَّةٌ مُنَظِّفَةٌ",
                                "arti" => "Detergen",
                                "huruf" => array_unique(["مَ","ا","دَّ","ةٌ","_","مُ","نَ","ظِّ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بِرْكَةٌ",
                                "arti" => "Bak",
                                "huruf" => array_unique(["بِ","رْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُرْطُوْمٌ",
                                "arti" => "Selang",
                                "huruf" => array_unique(["خُ","رْ","طُ","وْ","مٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 58')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 57");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 58";
                        $data['tema'] = "Kamar Mandi";
                        $data['title'] = "Kata Kerja 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 58");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِسْتَنْجَى-يَسْتَنْجِيْ",
                                "arti" => "Cebok",
                                "huruf" => array_unique(["اِ","سْ","تَ","نْ","جَ","ى","-","يَ","سْ","تَ","نْ","جِ","يْ"])
                            ],
                            [
                                "kata_arab" => "عَصَرَ-يَعْصِرُ",
                                "arti" => "Memeras",
                                "huruf" => array_unique(["عَ","صَ","رَ","-","يَ","عْ","صِ",'رُ'])
                            ],
                            [
                                "kata_arab" => "تَمَضْمَضَ-يَتَمَضْمَضَ",
                                "arti" => "Berkumur-kumur",
                                "huruf" => array_unique(["تَ","مَ","ضْ","مَ","ضَ","-","يَ","تَ","مَ","ضْ","مَ",'ضَ'])
                            ],
                            [
                                "kata_arab" => "اِنْزَلَقَ-يَنْزَلِقُ",
                                "arti" => "Terpeleset",
                                "huruf" => array_unique(["اِ","نْ","زَ","لَ","قَ","-","يَ","نْ","زَ","لِ","قُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَقْذَرَ-يَسْتَقْذِرُ",
                                "arti" => "Merasa jijik",
                                "huruf" => array_unique(["اِ","سْ","تَ","قْ","ذَ","رَ","-","يَ","سْ","تَ","قْ","ذِ","رُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 59')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 60");
                        $data['materi'] = "Mufrodat 59";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 59");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَمِيْلٌ",
                                "arti" => "Bagus/indah",
                                "huruf" => array_unique(["جَ","مِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَبِيْحٌ",
                                "arti" => "Jelek",
                                "huruf" => array_unique(["قَ","بِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "نَظِيْفٌ",
                                "arti" => "Bersih",
                                "huruf" => array_unique(["نَ","ظِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "وَسِخٌ",
                                "arti" => "Kotor",
                                "huruf" => array_unique(["وَ","سِ","خٌ"])
                            ],
                            [
                                "kata_arab" => "مُظْلِمٌ",
                                "arti" => "Gelap",
                                "huruf" => array_unique(["مُ","ظْ","لِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُنِيْرٌ",
                                "arti" => "Terang",
                                "huruf" => array_unique(["مُ","نِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "طَوِيْلٌ",
                                "arti" => "Tinggi",
                                "huruf" => array_unique(["طَ","وِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَصِيْرٌ",
                                "arti" => "Pendek",
                                "huruf" => array_unique(["قَ","صِ","يْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 60')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 59");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 61");
                        $data['materi'] = "Mufrodat 60";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 60");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاسِعٌ",
                                "arti" => "Luas",
                                "huruf" => array_unique(["وَ","ا","سِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "ضَيِّقٌ",
                                "arti" => "Sempit",
                                "huruf" => array_unique(["ضَ","يِّ","قٌ"])
                            ],
                            [
                                "kata_arab" => "كَبِيْرٌ",
                                "arti" => "Besar",
                                "huruf" => array_unique(["كَ","بِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "صَغِيْرٌ",
                                "arti" => "Kecil",
                                "huruf" => array_unique(["صَ","غِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَمِيْنٌ",
                                "arti" => "Gemuk",
                                "huruf" => array_unique(["سَ","مِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "نَحِيْفٌ",
                                "arti" => "Kurus",
                                "huruf" => array_unique(["نَ","حِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "بَعِيْدٌ",
                                "arti" => "Jauh",
                                "huruf" => array_unique(["بَ","عِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "قَرِيْبٌ",
                                "arti" => "Dekat",
                                "huruf" => array_unique(["قَ","رِ","يْ","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 61')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 60");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 62");
                        $data['materi'] = "Mufrodat 61";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 61");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَرِيْعٌ",
                                "arti" => "Cepat",
                                "huruf" => array_unique(["سَ","رِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "بَطِيْءٌ",
                                "arti" => "Lambat",
                                "huruf" => array_unique(["بَ","طِ","يْ","ءٌ"])
                            ],
                            [
                                "kata_arab" => "كَثِيْرٌ",
                                "arti" => "Banyak",
                                "huruf" => array_unique(["كَ","ثِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلِيْلٌ",
                                "arti" => "Sedikit",
                                "huruf" => array_unique(["قَ","لِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "سَهْلٌ",
                                "arti" => "Mudah",
                                "huruf" => array_unique(["سَ","هْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "صَعْبٌ",
                                "arti" => "Susah",
                                "huruf" => array_unique(["صَ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مَبْلُوْلٌ",
                                "arti" => "Basah",
                                "huruf" => array_unique(["مَ","بْ","لُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَافٌّ",
                                "arti" => "Kering",
                                "huruf" => array_unique(["جَ","ا","فٌّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 62')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 61");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 63");
                        $data['materi'] = "Mufrodat 62";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 62");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَلِيْظٌ",
                                "arti" => "Tebal",
                                "huruf" => array_unique(["غَ","لِ","يْ","ظٌ"])
                            ],
                            [
                                "kata_arab" => "رَقِيْقٌ",
                                "arti" => "Tipis",
                                "huruf" => array_unique(["رَ","قِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُرْتَفِعٌ",
                                "arti" => "Tinggi",
                                "huruf" => array_unique(["مُ","رْ","تَ","فِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْخَفِضٌ",
                                "arti" => "Rendah",
                                "huruf" => array_unique(["مُ","نْ","خَ","فِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "جَبَانٌ",
                                "arti" => "Pecundang",
                                "huruf" => array_unique(["جَ","بَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "شُجَاعٌ",
                                "arti" => "Pemberani",
                                "huruf" => array_unique(["شُ","جَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "قَوِيٌّ",
                                "arti" => "Kuat",
                                "huruf" => array_unique(["قَ","وِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "ضَعِيْفٌ",
                                "arti" => "Lemah",
                                "huruf" => array_unique(["ضَ","عِ","يْ","فٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 63')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 62");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 64");
                        $data['materi'] = "Mufrodat 63";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 63");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَيٌّ",
                                "arti" => "Hidup",
                                "huruf" => array_unique(["حَ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مَيِّتٌ",
                                "arti" => "Mati",
                                "huruf" => array_unique(["مَ","يِّ","تٌ"])
                            ],
                            [
                                "kata_arab" => "مُضْحِكٌ",
                                "arti" => "Lucu",
                                "huruf" => array_unique(["مُ","ضْ","حِ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مُعْجِبٌ",
                                "arti" => "Mempesona",
                                "huruf" => array_unique(["مُ","عْ","جِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُمْتَازٌ",
                                "arti" => "Istimewa",
                                "huruf" => array_unique(["مُ","مْ","تَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "حَسَنٌ",
                                "arti" => "Baik",
                                "huruf" => array_unique(["حَ","سَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَرٌّ",
                                "arti" => "Buruk",
                                "huruf" => array_unique(["شَ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "مُرَتَّبٌ",
                                "arti" => "Rapi",
                                "huruf" => array_unique(["مُ","رَ","تَّ","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 64')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 63");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 65");
                        $data['materi'] = "Mufrodat 64";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 64");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُتَبَعْثِرٌ",
                                "arti" => "Berantakan",
                                "huruf" => array_unique(["مُ","تَ","بَ","عْ","ثِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "شَدِيْدٌ",
                                "arti" => "Keras",
                                "huruf" => array_unique(["شَ","دِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "لَيِّنٌ",
                                "arti" => "Lunak",
                                "huruf" => array_unique(["لَ","يِّ","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَادٌّ",
                                "arti" => "Tajam",
                                "huruf" => array_unique(["حَ","ا","دٌّ"])
                            ],
                            [
                                "kata_arab" => "كَلِيْلٌ",
                                "arti" => "Tumpul",
                                "huruf" => array_unique(["كَ","لِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَخِيْلٌ",
                                "arti" => "Pelit",
                                "huruf" => array_unique(["بَ","خِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَادٌ",
                                "arti" => "Dermawan",
                                "huruf" => array_unique(["جَ","وَ","ا","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَشْغُوْلٌ",
                                "arti" => "Sibuk",
                                "huruf" => array_unique(["مَ","شْ","غُ","وْ","لٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 65')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 64");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 66");
                        $data['materi'] = "Mufrodat 65";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 65");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شِرِّيْرٌ",
                                "arti" => "Nakal",
                                "huruf" => array_unique(["شِ","رِّ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "عَادٍ",
                                "arti" => "Biasa",
                                "huruf" => array_unique(["عَ","ا","دٍ"])
                            ],
                            [
                                "kata_arab" => "مَجَّانٌ",
                                "arti" => "Gratis",
                                "huruf" => array_unique(["مَ","جَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "سَاخِنٌ",
                                "arti" => "Hangat",
                                "huruf" => array_unique(["سَ","ا","خِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "مَجْنُوْنٌ",
                                "arti" => "Gila",
                                "huruf" => array_unique(["مَ","جْ","نُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "كَرِيْمٌ",
                                "arti" => "Mulia",
                                "huruf" => array_unique(["كَ","رِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَهِيْنٌ",
                                "arti" => "Hina",
                                "huruf" => array_unique(["مَ","هِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "كَثِيْفٌ",
                                "arti" => "Lebat",
                                "huruf" => array_unique(["كَ","ثِ","يْ","فٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 66')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 65");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 67");
                        $data['materi'] = "Mufrodat 66";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 66");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَابٌّ",
                                "arti" => "Muda",
                                "huruf" => array_unique(["شَ","ا","بٌّ"])
                            ],
                            [
                                "kata_arab" => "عَجُوْزٌ",
                                "arti" => "Tua",
                                "huruf" => array_unique(["عَ","جُ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "سَعِيْدٌ",
                                "arti" => "Bahagia",
                                "huruf" => array_unique(["سَ","عِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "شَقِيٌّ",
                                "arti" => "Sengsara",
                                "huruf" => array_unique(["شَ","قِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "وَسِيْمٌ",
                                "arti" => "Tampan",
                                "huruf" => array_unique(["وَ","سِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "صَافٍ",
                                "arti" => "Jernih",
                                "huruf" => array_unique(["صَ","ا","فٍ"])
                            ],
                            [
                                "kata_arab" => "مُتَنَوِّعٌ",
                                "arti" => "Bermacam-macam",
                                "huruf" => array_unique(["مُ","تَ","نَ","وِّ","عٌ"])
                            ],
                            [
                                "kata_arab" => "كَسْلَانُ",
                                "arti" => "Malas",
                                "huruf" => array_unique(["كَ","سْ","لَ","ا","نُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 67')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 66");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 68");
                        $data['materi'] = "Mufrodat 67";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 9";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 67");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَشِيْطٌ",
                                "arti" => "Rajin",
                                "huruf" => array_unique(["نَ","شِ","يْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مَاهِرٌ",
                                "arti" => "Pandai",
                                "huruf" => array_unique(["مَ","ا","هِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "هَادِئٌ",
                                "arti" => "Tenang",
                                "huruf" => array_unique(["هَ","ا","دِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "عَامٌّ",
                                "arti" => "Umum",
                                "huruf" => array_unique(["عَ","ا","مٌّ"])
                            ],
                            [
                                "kata_arab" => "مَوْجُوْدٌ",
                                "arti" => "Ada",
                                "huruf" => array_unique(["مَ","وْ","جُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَهْمُوْمٌ",
                                "arti" => "Galau",
                                "huruf" => array_unique(["مَ","هْ","مُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَثْقُوْبٌ",
                                "arti" => "Bolong",
                                "huruf" => array_unique(["مَ","ثْ","قُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَقِيْمٌ",
                                "arti" => "Lurus",
                                "huruf" => array_unique(["مُ","سْ","تَ","قِ","يْ","مٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 68')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 67");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 69");
                        $data['materi'] = "Mufrodat 68";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 10";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 68");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَرِيْبٌ",
                                "arti" => "Asing",
                                "huruf" => array_unique(["غَ","رِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْتِنٌ",
                                "arti" => "Basi",
                                "huruf" => array_unique(["مُ","نْ","تِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "خَطِيْرٌ",
                                "arti" => "Berbahaya",
                                "huruf" => array_unique(["خَ","طِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ذَكِيٌّ",
                                "arti" => "Cerdas",
                                "huruf" => array_unique(["ذَ","كِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُتَرَدِّدٌ",
                                "arti" => "Ragu-ragu",
                                "huruf" => array_unique(["مُ","تَ","رَ","دِّ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَأَكِّدٌ",
                                "arti" => "Yakin",
                                "huruf" => array_unique(["مُ","تَ","أَ","كِّ","دٌ"])
                            ],
                            [
                                "kata_arab" => "غَنِيٌّ",
                                "arti" => "Kaya",
                                "huruf" => array_unique(["غَ","نِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُتَفَرِّقٌ",
                                "arti" => "Berbeda",
                                "huruf" => array_unique(["مُ","تَ","فَ","رِّ","قٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 69')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 68");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 70");
                        $data['materi'] = "Mufrodat 69";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 11";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 69");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُتَسَاوٍ",
                                "arti" => "Sama",
                                "huruf" => array_unique(["مُ","تَ","سَ","ا","وٍ"])
                            ],
                            [
                                "kata_arab" => "غَزِيْرٌ",
                                "arti" => "Deras",
                                "huruf" => array_unique(["غَ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُخِيْفٌ",
                                "arti" => "Menakutkan",
                                "huruf" => array_unique(["مُ","خِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "غَيْرُ وَاضِحٍ",
                                "arti" => " Tidak jelas",
                                "huruf" => array_unique(["غَ","يْ","رُ","_","وَ","ا","ضِ","حٍ"])
                            ],
                            [
                                "kata_arab" => "عَالٍ",
                                "arti" => "Tinggi",
                                "huruf" => array_unique(["عَ","ا","لٍ"])
                            ],
                            [
                                "kata_arab" => "لَازِمٌ",
                                "arti" => "Wajar",
                                "huruf" => array_unique(["لَ","ا","زِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "خَائِفٌ",
                                "arti" => "Takut",
                                "huruf" => array_unique(["خَ","ا","ئِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "دَقِيْقٌ",
                                "arti" => "Teliti",
                                "huruf" => array_unique(["دَ","قِ","يْ","قٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 70')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 69");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 71");
                        $data['materi'] = "Mufrodat 70";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 12";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 70");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُبْغِضٌ",
                                "arti" => "Ngenekin",
                                "huruf" => array_unique(["مُ","بْ","غِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "مُزْعِجٌ",
                                "arti" => "Ribut",
                                "huruf" => array_unique(["مُ","زْ","عِ","جٌ"])
                            ],
                            [
                                "kata_arab" => "جَرِيْحٌ",
                                "arti" => "Terluka",
                                "huruf" => array_unique(["جَ","رِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "سَكْرَانُ",
                                "arti" => "Mabuk",
                                "huruf" => array_unique(["سَ","كْ","رَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "مَحْلُوْقٌ",
                                "arti" => "Botak",
                                "huruf" => array_unique(["مَ","حْ","لُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "عَمِيْقٌ",
                                "arti" => "Dalam",
                                "huruf" => array_unique(["عَ","مِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "ضَحْلٌ",
                                "arti" => "Dangkal",
                                "huruf" => array_unique(["ضَ","حْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَاعِمٌ",
                                "arti" => "Lembut",
                                "huruf" => array_unique(["نَ","ا","عِ","مٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 71')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 70");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 72");
                        $data['materi'] = "Mufrodat 71";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 13";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 71");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خَشِنٌ",
                                "arti" => "Kasar",
                                "huruf" => array_unique(["خَ","شِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "أَفْطَسُ",
                                "arti" => "Pesek",
                                "huruf" => array_unique(["أَ","فْ","طَ","سُ"])
                            ],
                            [
                                "kata_arab" => "مُدَبِّبٌ",
                                "arti" => "Mancung",
                                "huruf" => array_unique(["مُ","دَ","بِّ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْتَفِخٌ",
                                "arti" => "Menggelembung",
                                "huruf" => array_unique(["مُ","نْ","تَ","فِ","خٌ"])
                            ],
                            [
                                "kata_arab" => "مُعْدٍ",
                                "arti" => "Menular",
                                "huruf" => array_unique(["مُ","عْ","دٍ"])
                            ],
                            [
                                "kata_arab" => "نَسِيْمٌ",
                                "arti" => "Sepoi-sepoi",
                                "huruf" => array_unique(["نَ","سِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "عَلِيْلٌ",
                                "arti" => "Sejuk",
                                "huruf" => array_unique(["عَ","لِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "حُرٌّ",
                                "arti" => "Bebas",
                                "huruf" => array_unique(["حُ","رٌّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 72')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 71");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 73");
                        $data['materi'] = "Mufrodat 72";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 14";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 72");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَعْوَاجُ",
                                "arti" => "Bengkok",
                                "huruf" => array_unique(["أَ","عْ","وَ","ا","جُ"])
                            ],
                            [
                                "kata_arab" => "شَوْكِيٌّ",
                                "arti" => "Berduri",
                                "huruf" => array_unique(["شَ","وْ","كِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "ثَرْثَارٌ",
                                "arti" => "Cerewet",
                                "huruf" => array_unique(["ثَ","رْ","ثَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُسَمَّرٌ",
                                "arti" => "Terpaku",
                                "huruf" => array_unique(["مُ","سَ","مَّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "حَسَّاسٌ",
                                "arti" => "Sensitif/baper",
                                "huruf" => array_unique(["حَ","سَّ","ا","سٌ"])
                            ],
                            [
                                "kata_arab" => "فَرِيْدٌ",
                                "arti" => "Unik",
                                "huruf" => array_unique(["فَ","رِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "أَلِيْفٌ",
                                "arti" => "Jinak",
                                "huruf" => array_unique(["أَ","لِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَوَحِّشٌ",
                                "arti" => "Buas",
                                "huruf" => array_unique(["مُ","تَ","وَ","حِّ","شٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 73')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 72");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 74");
                        $data['materi'] = "Mufrodat 73";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 15";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 73");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُسْتَرْسِلٌ",
                                "arti" => "Lurus (rambut)",
                                "huruf" => array_unique(["مُ","سْ","تَ","رْ","سِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُجَعَّدٌ",
                                "arti" => "Keriting",
                                "huruf" => array_unique(["مُ","جَ","عَّ","دٌ"])
                            ],
                            [
                                "kata_arab" => "أَشْقَرُ",
                                "arti" => "Pirang",
                                "huruf" => array_unique(["أَ","شْ","قَ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَحْوَصُ",
                                "arti" => "Sipit",
                                "huruf" => array_unique(["أَ","حْ","وَ","صُ"])
                            ],
                            [
                                "kata_arab" => "أَحْمَقُ",
                                "arti" => "Idiot",
                                "huruf" => array_unique(["أَ","حْ","مَ","قُ"])
                            ],
                            [
                                "kata_arab" => "مُكْتَتِزٌ",
                                "arti" => "Berisi",
                                "huruf" => array_unique(["مُ","كْ","تَ","تِ","زٌ"])
                            ],
                            [
                                "kata_arab" => "هَزِيْلٌ",
                                "arti" => "Kerempeng",
                                "huruf" => array_unique(["هَ","زِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَائِعٌ",
                                "arti" => "Cair",
                                "huruf" => array_unique(["مَ","ا","ئِ","عٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 74')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 73");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 74";
                        $data['tema'] = "Kata Sifat";
                        $data['title'] = "Bagian 16";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 74");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَامِدٌ",
                                "arti" => "Padat",
                                "huruf" => array_unique(["جَ","ا","مِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "جَسِيْمٌ",
                                "arti" => "Kekar",
                                "huruf" => array_unique(["جَ","سِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْتَقِمٌ",
                                "arti" => "Pendendam",
                                "huruf" => array_unique(["مُ","نْ","تَ","قِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَرِنٌ",
                                "arti" => "Lentur",
                                "huruf" => array_unique(["مَ","رِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "فَسِيْحٌ",
                                "arti" => "Longgar",
                                "huruf" => array_unique(["فَ","سِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "ثَمِيْنٌ",
                                "arti" => "Berharga",
                                "huruf" => array_unique(["ثَ","مِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَاقِنٌ",
                                "arti" => "Kebelet kencing",
                                "huruf" => array_unique(["حَ","ا","قِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "أَمْلَسُ",
                                "arti" => "Mulus",
                                "huruf" => array_unique(["أَ","مْ","لَ","سُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 75')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 76");
                        $data['materi'] = "Mufrodat 75";
                        $data['tema'] = "Tempat-tempat";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 75");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَسْجِدٌ",
                                "arti" => "Masjid",
                                "huruf" => array_unique(["مَ","سْ","جِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "كَنِيْسَةٌ",
                                "arti" => "Gereja",
                                "huruf" => array_unique(["كَ","نِ","يْ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَنَارَةٌ",
                                "arti" => "Menara",
                                "huruf" => array_unique(["مَ","نَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جِسْرٌ",
                                "arti" => "Jembatan",
                                "huruf" => array_unique(["جِ","سْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَجْرَى الْمَاءِ",
                                "arti" => "Selokan",
                                "huruf" => array_unique(["مَ","جْ","رَ","ى","_","ا","لْ","مَ","ا",'ءِ'])
                            ],
                            [
                                "kata_arab" => "مَحَطَّةُ الْقِطَارِ",
                                "arti" => "Stasiun",
                                "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","_","ا","لْ","قِ","طَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "مَطَارٌ",
                                "arti" => "Bandara",
                                "huruf" => array_unique(["مَ","طَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَغْسَلَةٌ",
                                "arti" => "Loundry",
                                "huruf" => array_unique(["مَ","غْ","سَ","لَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 76')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 75");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 77");
                        $data['materi'] = "Mufrodat 76";
                        $data['tema'] = "Tempat-tempat";
                        $data['title'] = "Bagian 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 76");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَصْلٌ",
                                "arti" => "Kelas",
                                "huruf" => array_unique(["فَ","صْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "سُوْقٌ",
                                "arti" => "Pasar",
                                "huruf" => array_unique(["سُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْقِفُ الْحَافِلَاتِ",
                                "arti" => "Terminal",
                                "huruf" => array_unique(["مَ","وْ","قِ","فُ","_","ا","لْ","حَ","ا","فِ","لَ","ا","تِ"])
                            ],
                            [
                                "kata_arab" => "مَطْعَمٌ",
                                "arti" => "Restoran",
                                "huruf" => array_unique(["مَ","طْ","عَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْهَى إِنْتِرْنِيْتَ",
                                "arti" => "Warnet",
                                "huruf" => array_unique(["مَ","قْ","هَ","ى","_","إِ","نْ","تِ","رْ","نِ","يْ","تَ"])
                            ],
                            [
                                "kata_arab" => "مَصْنَعٌ",
                                "arti" => "Pabrik",
                                "huruf" => array_unique(["مَ","صْ","نَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "بَقَّالَةٌ",
                                "arti" => "Mini market",
                                "huruf" => array_unique(["بَ","قَّ","ا","لَ",'ةٌ'])
                            ],
                            [
                                "kata_arab" => "قَصْرٌ",
                                "arti" => "Istana",
                                "huruf" => array_unique(["قَ","صْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 77')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 76");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 78");
                        $data['materi'] = "Mufrodat 77";
                        $data['tema'] = "Tempat-tempat";
                        $data['title'] = "Bagian 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 77");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُسْتَشْفَى",
                                "arti" => "Rumah sakit",
                                "huruf" => array_unique(["مُ","سْ","تَ","شْ","فَ","ى"])
                            ],
                            [
                                "kata_arab" => "جَامِعَةٌ",
                                "arti" => "Kampus",
                                "huruf" => array_unique(["جَ","ا","مِ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حِصْنٌ",
                                "arti" => "Benteng",
                                "huruf" => array_unique(["حِ","صْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "مَحَطَّةُ الْبِتْرُوْلِ",
                                "arti" => "Pom bensin",
                                "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","ا","لْ","بِ","تْ","رُ","وْ","لِ"])
                            ],
                            [
                                "kata_arab" => "غُرْفَةُ الصِّحَّةِ",
                                "arti" => "Ruang kesehatan",
                                "huruf" => array_unique(["غُ","رْ","فَ","ةُ","_","ا","ل","صِّ","حَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "فُنْدُقٌ",
                                "arti" => "Hotel",
                                "huruf" => array_unique(["فُ","نْ","دُ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْرَحٌ",
                                "arti" => "Panggung",
                                "huruf" => array_unique(["مَ","سْ","رَ","حٌ"])
                            ],
                            [
                                "kata_arab" => "حَظِيْرَةٌ",
                                "arti" => "Kandang",
                                "huruf" => array_unique(["حَ","ظِ","يْ","رَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 78')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 77");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 79");
                        $data['materi'] = "Mufrodat 78";
                        $data['tema'] = "Tempat-tempat";
                        $data['title'] = "Bagian 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 78");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُتْحَفٌ",
                                "arti" => "Museum",
                                "huruf" => array_unique(["مُ","تْ","حَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "دَوْرَةُ الْمِيَاهِ",
                                "arti" => "Toilet",
                                "huruf" => array_unique(["دَ","وْ","رَ","ةُ","_","ا","لْ","مِ","يَ","ا","هِ"])
                            ],
                            [
                                "kata_arab" => "حَدِيْقَةُ الْحَيَوَانَاتِ",
                                "arti" => "Kebun binatang",
                                "huruf" => array_unique(["حَ","دِ","يْ","قَ","ةُ","_","ا","لْ","حَ","يَ","وَ","ا","نَ","ا","تِ"])
                            ],
                            [
                                "kata_arab" => "جِهَازُ الصَّرَفِ",
                                "arti" => "ATM",
                                "huruf" => array_unique(["جِ","هَ","ا","زُ","_","ا","ل","صَّ","رَ","فِ"])
                            ],
                            [
                                "kata_arab" => "دَارٌ",
                                "arti" => "Rumah",
                                "huruf" => array_unique(["دَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْمَلٌ",
                                "arti" => "Laboratorium",
                                "huruf" => array_unique(["مَ","عْ","مَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَدِيْنَةٌ",
                                "arti" => "Kota",
                                "huruf" => array_unique(["مَ","دِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَرْيَةٌ",
                                "arti" => "Desa",
                                "huruf" => array_unique(["قَ","رْ","يَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 79')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 78");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 80");
                        $data['materi'] = "Mufrodat 79";
                        $data['tema'] = "Tempat-tempat";
                        $data['title'] = "Bagian 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 79");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَعْرِضٌ",
                                "arti" => "Pameran",
                                "huruf" => array_unique(["مَ","عْ","رِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "بَلَدٌ",
                                "arti" => "Negara",
                                "huruf" => array_unique(["بَ","لَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْبَرَةٌ",
                                "arti" => "Kuburan",
                                "huruf" => array_unique(["مَ","قْ","بَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَاعَةٌ",
                                "arti" => "Aula",
                                "huruf" => array_unique(["قَ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَخْزَنٌ",
                                "arti" => "Gudang",
                                "huruf" => array_unique(["مَ","خْ","زَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "بُسْتَانٌ",
                                "arti" => "Taman",
                                "huruf" => array_unique(["بُ","سْ","تَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "سَاحَةٌ",
                                "arti" => "Serambi",
                                "huruf" => array_unique(["سَ","ا","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَفَقٌ",
                                "arti" => "Terowongan",
                                "huruf" => array_unique(["نَ","فَ","قٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 80')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 79");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 81");
                        $data['materi'] = "Mufrodat 80";
                        $data['tema'] = "Tempat-tempat";
                        $data['title'] = "Bagian 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 80");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِيْنَاءٌ",
                                "arti" => "Pelabuhan",
                                "huruf" => array_unique(["مِ","يْ","نَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مَرْقَصٌ",
                                "arti" => "Diskotik",
                                "huruf" => array_unique(["مَ","رْ","قَ","صٌ"])
                            ],
                            [
                                "kata_arab" => "عِمَارَةٌ",
                                "arti" => "Apartemen",
                                "huruf" => array_unique(["عِ","مَ","ا","رَ",'ةٌ'])
                            ],
                            [
                                "kata_arab" => "مَطْبَعٌ",
                                "arti" => "Percetakan",
                                "huruf" => array_unique(["مَ","طْ","بَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "سِيْنِيْمَا",
                                "arti" => "Bioskop",
                                "huruf" => array_unique(["سِ","يْ","نِ","يْ","مَ","ا"])
                            ],
                            [
                                "kata_arab" => "إِسْطَبْلٌ",
                                "arti" => "Kandang kuda",
                                "huruf" => array_unique(["إِ","سْ","طَ","بْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "كَبِيْنَةٌ",
                                "arti" => "Kabin",
                                "huruf" => array_unique(["كَ","بِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَدٌّ",
                                "arti" => "Bendungan",
                                "huruf" => array_unique(["سَ","دٌّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 81')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 80");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 82");
                        $data['materi'] = "Mufrodat 81";
                        $data['tema'] = "Tempat-tempat";
                        $data['title'] = "Bagian 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 81");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَاصِمَةٌ",
                                "arti" => "Ibu kota",
                                "huruf" => array_unique(["عَ","ا","صِ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَافَظَةٌ",
                                "arti" => "Provinsi",
                                "huruf" => array_unique(["مُ","حَ","ا","فَ","ظَ",'ةٌ'])
                            ],
                            [
                                "kata_arab" => "مُقَاطَعَةٌ",
                                "arti" => "Kabupaten",
                                "huruf" => array_unique(["مُ","قَ","ا","طَ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَطْحٌ",
                                "arti" => "Loteng",
                                "huruf" => array_unique(["سَ","طْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَوْصَفٌ",
                                "arti" => "Puskesmas",
                                "huruf" => array_unique(["مُ","سْ","تَ","وْ","صَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "صَيْدَلِيَّةٌ",
                                "arti" => "Apotek",
                                "huruf" => array_unique(["صَ","يْ","دَ","لِ","يَّ",'ةٌ'])
                            ],
                            [
                                "kata_arab" => "كُوْخٌ",
                                "arti" => "Gazebo",
                                "huruf" => array_unique(["كُ","وْ","خٌ"])
                            ],
                            [
                                "kata_arab" => "حَدِيْقَةٌ",
                                "arti" => "Kebun",
                                "huruf" => array_unique(["حَ","دِ","يْ","قَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 82')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 81");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 82";
                        $data['tema'] = "Tempat-tempat";
                        $data['title'] = "Bagian 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 82");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَيْدَانٌ",
                                "arti" => "Lapangan",
                                "huruf" => array_unique(["مَ","يْ","دَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَقْلٌ",
                                "arti" => "Ladang",
                                "huruf" => array_unique(["حَ","قْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "صَالَةُ الْإِنْتِظَارِ",
                                "arti" => "Ruang tunggu",
                                "huruf" => array_unique(["صَ","ا","لَ","ةُ","_","ا","لْ","إِ","نْ","تِ","ظَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "خَنْدَقٌ",
                                "arti" => "Parit",
                                "huruf" => array_unique(["خَ","نْ","دَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "وَرْشَةٌ",
                                "arti" => "Bengkel",
                                "huruf" => array_unique(["وَ","رْ","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْبَحٌ",
                                "arti" => "Kolam renang",
                                "huruf" => array_unique(["مَ","سْ","بَ","حٌ"])
                            ],
                            [
                                "kata_arab" => "دُكَّانٌ",
                                "arti" => "Toko",
                                "huruf" => array_unique(["دُ","كَّ","ا","نٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 83')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 84");
                        $data['materi'] = "Mufrodat 83";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 83");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَبَلٌ",
                                "arti" => "Gunung",
                                "huruf" => array_unique(["جَ","بَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شَمْسٌ",
                                "arti" => "Matahari",
                                "huruf" => array_unique(["شَ","مْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "قَمَرٌ",
                                "arti" => "Bulan",
                                "huruf" => array_unique(["قَ","مَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "نَجْمٌ",
                                "arti" => "Bintang",
                                "huruf" => array_unique(["نَ","جْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "نَهَارٌ",
                                "arti" => "Siang",
                                "huruf" => array_unique(["نَ","هَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَاحِلٌ",
                                "arti" => "Pantai",
                                "huruf" => array_unique(["سَ","ا","حِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شَلَّالٌ",
                                "arti" => "Air terjun",
                                "huruf" => array_unique(["شَ","لَّ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "وَحْلٌ",
                                "arti" => "Lumpur",
                                "huruf" => array_unique(["وَ","حْ","لٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 84')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 83");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 85");
                        $data['materi'] = "Mufrodat 84";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Kerja 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 84");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَلَعَ-يَطْلُعُ",
                                "arti" => "Terbit",
                                "huruf" => array_unique(["طَ","لَ","عَ","-","يَ","طْ","لُ","عُ"])
                            ],
                            [
                                "kata_arab" => "غَرَبَ-يَغْرُبُ",
                                "arti" => "Terbenam",
                                "huruf" => array_unique(["غَ","رَ","بَ","-","يَ","غْ","رُ","بُ"])
                            ],
                            [
                                "kata_arab" => "خَاطَرَ-يُخَاطِرُ",
                                "arti" => "Mempertaruhkan",
                                "huruf" => array_unique(["خَ","ا","طَ","رَ","-","يُ","خَ","ا","طِ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِنْفَجَرَ-يَنْفَجِرُ",
                                "arti" => "Meletus",
                                "huruf" => array_unique(["اِ","نْ","فَ","جَ","رَ","-","يَ","نْ","فَ","جِ","رُ"])
                            ],
                            [
                                "kata_arab" => "فَاضَ-يَفِيْضُ",
                                "arti" => "Banjir",
                                "huruf" => array_unique(["فَ","ا","ضَ","-","يَ","فِ","يْ","ضُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 85')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 84");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 86");
                        $data['materi'] = "Mufrodat 85";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 85");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَوٌّ",
                                "arti" => "Udara",
                                "huruf" => array_unique(["جَ","وٌّ"])
                            ],
                            [
                                "kata_arab" => "لَيْلَةٌ",
                                "arti" => "Malam",
                                "huruf" => array_unique(["لَ","يْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَبَاحٌ",
                                "arti" => "Pagi",
                                "huruf" => array_unique(["صَ","بَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "مَسَاءٌ",
                                "arti" => "Sore",
                                "huruf" => array_unique(["مَ","سَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "حَصَاةٌ",
                                "arti" => "Kerikil",
                                "huruf" => array_unique(["حَ","صَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دُخَانٌ",
                                "arti" => "Asap",
                                "huruf" => array_unique(["دُ","خَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "ضَبَابٌ",
                                "arti" => "Kabut",
                                "huruf" => array_unique(["ضَ","بَ","ا","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 86')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 85");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 87");
                        $data['materi'] = "Mufrodat 86";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Kerja 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 86");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَاحَظَ-يُلَاحِظُ",
                                "arti" => "Mengamati",
                                "huruf" => array_unique(["لَ","ا","حَ","ظَ","-","يُ","لَ","ا","حِ","ظُ"])
                            ],
                            [
                                "kata_arab" => "زَرَعَ-يَزْرَعُ",
                                "arti" => "Menanam (tanaman)",
                                "huruf" => array_unique(["زَ","رَ","عَ","-","يَ","زْ","رَ","عُ"])
                            ],
                            [
                                "kata_arab" => "غَرَسَ-يَغْرِسُ",
                                "arti" => "Menanam (pohon)",
                                "huruf" => array_unique(["غَ","رَ","سَ","-","يَ","غْ","رِ","سُ"])
                            ],
                            [
                                "kata_arab" => "غَاصَ-يَغِيْصُ",
                                "arti" => "Menyelam",
                                "huruf" => array_unique(["غَ","ا","صَ","-","يَ","غِ","يْ","صُ"])
                            ],
                            [
                                "kata_arab" => "غَرِقَ-يَغْرَقُ",
                                "arti" => "Tenggelam",
                                "huruf" => array_unique(["غَ","رِ","قَ","-","يَ","غْ","رَ","قُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 87')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 86");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 88");
                        $data['materi'] = "Mufrodat 87";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 87");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَحَابٌ",
                                "arti" => "Awan",
                                "huruf" => array_unique(["سَ","حَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "صَحْرَاءُ",
                                "arti" => "Padang pasir",
                                "huruf" => array_unique(["صَ","حْ","رَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "غَابَةٌ",
                                "arti" => "Hutan",
                                "huruf" => array_unique(["غَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَطَرٌ",
                                "arti" => "Hujan",
                                "huruf" => array_unique(["مَ","طَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "فَيَضَانٌ",
                                "arti" => "Banjir",
                                "huruf" => array_unique(["فَ","يَ","ضَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "سَمَاءٌ",
                                "arti" => "Langit",
                                "huruf" => array_unique(["سَ","مَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "أَلْوَانُ الطَّيْفِ",
                                "arti" => "Pelangi",
                                "huruf" => array_unique(["أَ","لْ","وَ","ا","نُ","_","ا","ل","طَّ","يْ","فِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 88')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 87");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 89");
                        $data['materi'] = "Mufrodat 88";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Kerja 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 88");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَاهَ-يَتِيْهُ",
                                "arti" => "Tersesat",
                                "huruf" => array_unique(["تَ","ا","هَ","-","يَ","تِ","يْ","هُ"])
                            ],
                            [
                                "kata_arab" => "تَطَايَرَ-يَتَطَايَرُ",
                                "arti" => "Bertebaran",
                                "huruf" => array_unique(["تَ","طَ","ا","يَ","رَ","-","يَ","تَ","طَ","ا","يَ","رُ"])
                            ],
                            [
                                "kata_arab" => "دَارَ-يَدُوْرُ",
                                "arti" => "Berputar",
                                "huruf" => array_unique(["دَ","ا","رَ","-","يَ","دُ","وْ","رُ"])
                            ],
                            [
                                "kata_arab" => "تَسَلَّقَ-يَتَسَلَّقُ",
                                "arti" => "Memanjat",
                                "huruf" => array_unique(["تَ","سَ","لَّ","قَ","-","يَ","تَ","سَ","لَّ","قُ"])
                            ],
                            [
                                "kata_arab" => "سَالَ-يَسِيْلُ",
                                "arti" => "Mengalir",
                                "huruf" => array_unique(["سَ","ا","لَ","-","يَ","سِ","يْ","لُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 89')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 88");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 90");
                        $data['materi'] = "Mufrodat 89";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 89");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَيْمَةٌ",
                                "arti" => "Mendung",
                                "huruf" => array_unique(["غَ","يْ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَدَى",
                                "arti" => "Embun",
                                "huruf" => array_unique(["نَ","دَ","ى"])
                            ],
                            [
                                "kata_arab" => "مَغْرِبٌ",
                                "arti" => "Senja",
                                "huruf" => array_unique(["مَ","غْ","رِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْجٌ",
                                "arti" => "Gelombang",
                                "huruf" => array_unique(["مَ","وْ","جٌ"])
                            ],
                            [
                                "kata_arab" => "بَحْرٌ",
                                "arti" => "Laut",
                                "huruf" => array_unique(["بَ","حْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَزِيْرَةٌ",
                                "arti" => "Pulau",
                                "huruf" => array_unique(["جَ","زِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَدَاذٌ",
                                "arti" => "Gerimis",
                                "huruf" => array_unique(["زَ","دَ","ا","ذٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 90')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 89");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 91");
                        $data['materi'] = "Mufrodat 90";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Kerja 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 90");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَدَبَّرَ-يَتَدَبَّرُ",
                                "arti" => "Mentadaburi",
                                "huruf" => array_unique(["تَ","دَ","بَّ","رَ","-","يَ","تَ","دَ","بَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِجْتَنَبَ-يَجْتَنِبُ",
                                "arti" => "Menghindari",
                                "huruf" => array_unique(["اِ","جْ","تَ","نَ","بَ","-","يَ","جْ","تَ","نِ","بُ"])
                            ],
                            [
                                "kata_arab" => "أَضَاءَ-يُضِيْءُ",
                                "arti" => "Menyinari",
                                "huruf" => array_unique(["أَ","ضَ","ا","ءَ","-","يُ","ضِ","يْ","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَثْمَرَ-يُثْمِرُ",
                                "arti" => "Berbuah",
                                "huruf" => array_unique(["أَ","ثْ","مَ","رَ","-","يُ","ثْ","مِ","رُ"])
                            ],
                            [
                                "kata_arab" => "قَطَرَ-يَقْطُرُ",
                                "arti" => "Menetes",
                                "huruf" => array_unique(["قَ","طَ","رَ","-","يَ","قْ","طُ","رُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 91')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 90");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 92");
                        $data['materi'] = "Mufrodat 91";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 91");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قِمَّةٌ",
                                "arti" => "Puncak",
                                "huruf" => array_unique(["قِ","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَيْكَةٌ",
                                "arti" => "Semak",
                                "huruf" => array_unique(["أَ","يْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَارِثَةٌ",
                                "arti" => "Bencana Alam",
                                "huruf" => array_unique(["كَ","ا","رِ","ثَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَارِعٌ",
                                "arti" => "Jalan",
                                "huruf" => array_unique(["شَ","ا","رِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "حُفْرَةٌ",
                                "arti" => "Lubang",
                                "huruf" => array_unique(["حُ","فْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "هِلَالٌ",
                                "arti" => "Bulan sabit",
                                "huruf" => array_unique(["هِ","لَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَدْرٌ",
                                "arti" => "Bulan purnama",
                                "huruf" => array_unique(["بَ","دْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 92')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 91");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 93");
                        $data['materi'] = "Mufrodat 92";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Kerja 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 92");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَرَثَ-يَحْرُثُ",
                                "arti" => "Membajak",
                                "huruf" => array_unique(["حَ","رَ","ثَ","-","يَ","حْ","رُ","ثُ"])
                            ],
                            [
                                "kata_arab" => "حَصَدَ-يَحْصُدُ",
                                "arti" => "Memanen",
                                "huruf" => array_unique(["حَ","صَ","دَ","-","يَ","حْ","صُ","دُ"])
                            ],
                            [
                                "kata_arab" => "هَدَمَ-يَهْدِمُ",
                                "arti" => "Meruntuhkan",
                                "huruf" => array_unique(["هَ","دَ","مَ","-","يَ","هْ","دِ","مُ"])
                            ],
                            [
                                "kata_arab" => "خَلَقَ-يَخْلُقُ",
                                "arti" => "Menciptakan",
                                "huruf" => array_unique(["خَ","لَ","قَ","-","يَ","خْ","لُ","قُ"])
                            ],
                            [
                                "kata_arab" => "هَبَّ-يَهُبُّ",
                                "arti" => "Berhembus",
                                "huruf" => array_unique(["هَ","بَّ","-","يَ","هُ","بُّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 93')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 92");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 94");
                        $data['materi'] = "Mufrodat 93";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 93");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَرٌّ",
                                "arti" => "Daratan",
                                "huruf" => array_unique(["بَ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "مَوْسِمُ الْجَفَافِ",
                                "arti" => "Musim kemarau",
                                "huruf" => array_unique(["مَ","وْ","سِ","مُ","_","ا","لْ","جَ","فَ","ا","فِ"])
                            ],
                            [
                                "kata_arab" => "مَوْسِمُ الْمَطَرِ",
                                "arti" => "Musim hujan",
                                "huruf" => array_unique(["مَ","وْ","سِ","مُ","_","ا","لْ","مَ","طَ","رِ"])
                            ],
                            [
                                "kata_arab" => "اَلْجِبَالُ",
                                "arti" => "Pegunungan",
                                "huruf" => array_unique(["اَ","لْ","جِ","بَ","ا","لُ"])
                            ],
                            [
                                "kata_arab" => "جَذْرٌ",
                                "arti" => "Akar",
                                "huruf" => array_unique(["جَ","ذْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "طَقْسٌ",
                                "arti" => "Cuaca",
                                "huruf" => array_unique(["طَ","قْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "نَهْرٌ",
                                "arti" => "Sungai",
                                "huruf" => array_unique(["نَ","هْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 94')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 93");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 122");
                        $data['materi'] = "Mufrodat 94";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Kerja 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 94");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَصَدَّعَ-يَتَصَدَّعُ",
                                "arti" => "Retak",
                                "huruf" => array_unique(["تَ","صَ","دَّ","عَ","-","يَ","تَ","صَ","دَّ","عُ"])
                            ],
                            [
                                "kata_arab" => "تَسَاقَطَ-يَتَسَاقَطُ",
                                "arti" => "Berjatuhan",
                                "huruf" => array_unique(["تَ","سَ","ا","قَ","طَ","-","يَ","تَ","سَ","ا","قَ","طُ"])
                            ],
                            [
                                "kata_arab" => "ذَبُلَ-يَذْبُلُ",
                                "arti" => "Layu",
                                "huruf" => array_unique(["ذَ","بُ","لَ","-","يَ","ذْ","بُ","لُ"])
                            ],
                            [
                                "kata_arab" => "غَامَ-يَغِيْمُ",
                                "arti" => "Mendung",
                                "huruf" => array_unique(["غَ","ا","مَ","-","يَ","غِ","يْ","مُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 95')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 96");
                        $data['materi'] = "Mufrodat 95";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 95");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُدِيْرُ الْمَدْرَسَةِ",
                                "arti" => "Kepala sekolah",
                                "huruf" => array_unique(["مُ","دِ","يْ","رُ","_","ا","لْ","مَ","دْ","رَ","سَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "أُسْتَاذٌ",
                                "arti" => "Ustadz",
                                "huruf" => array_unique(["أُ","سْ","تَ","ا","ذٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَرِّسٌ",
                                "arti" => "Guru",
                                "huruf" => array_unique(["مُ","دَ","رِّ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُوَظَّفٌ",
                                "arti" => "Pegawai",
                                "huruf" => array_unique(["مُ","وَ","ظَّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "طَيَّارٌ",
                                "arti" => "Pilot",
                                "huruf" => array_unique(["طَ","يَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "نَجَّارٌ",
                                "arti" => "Tukang kayu",
                                "huruf" => array_unique(["نَ","جَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَرِّبٌ",
                                "arti" => "Pelatih",
                                "huruf" => array_unique(["مُ","دَ","رِّ","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 96')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 95");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 97");
                        $data['materi'] = "Mufrodat 96";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 96");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَلَّقَ-يُعَلِّقُ",
                                "arti" => "Mengomentari",
                                "huruf" => array_unique(["عَ","لَّ","قَ","-","يُ","عَ","لِّ","قُ"])
                            ],
                            [
                                "kata_arab" => "اِقْتَرَحَ-يَقْتَرِحُ",
                                "arti" => "Berpendapat",
                                "huruf" => array_unique(["اِ","قْ","تَ","رَ","حَ","-","يَ","قْ","تَ","رِ","حُ"])
                            ],
                            [
                                "kata_arab" => "اِنْتَقَدَ-يَنْتَقِدُ",
                                "arti" => "Mengkritik",
                                "huruf" => array_unique(["اِ","نْ","تَ","قَ","دَ","-","يَ","نْ","تَ","قِ","دُ"])
                            ],
                            [
                                "kata_arab" => "تَمَهَّلَ-يَتَمَهَّلُ",
                                "arti" => "Pelan-pelan",
                                "huruf" => array_unique(["تَ","مَ","هَّ","لَ","-","يَ","تَ","مَ","هَّ","لُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 97')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 96");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 98");
                        $data['materi'] = "Mufrodat 97";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 97");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَادِلٌ",
                                "arti" => "Pelayan",
                                "huruf" => array_unique(["نَ",'ا',"دِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَنَّاءٌ",
                                "arti" => "Kuli bangunan",
                                "huruf" => array_unique(["بَ","نَّ",'ا',"ءٌ"])
                            ],
                            [
                                "kata_arab" => "مُهَرِّجٌ",
                                "arti" => "Pelawak",
                                "huruf" => array_unique(["مُ","هَ","رِّ","جٌ"])
                            ],
                            [
                                "kata_arab" => "تَاجِرٌ",
                                "arti" => "Pedagang",
                                "huruf" => array_unique(["تَ","ا","جِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "فَلَّاحٌ",
                                "arti" => "Petani",
                                "huruf" => array_unique(["فَ","لَّ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "سَمَّاكٌ",
                                "arti" => "Nelayan",
                                "huruf" => array_unique(["سَ","مَّ","ا","كٌ"])
                            ],
                            [
                                "kata_arab" => "سَارِقٌ",
                                "arti" => "Pencuri",
                                "huruf" => array_unique(["سَ","ا","رِ","قٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 98')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 97");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 99");
                        $data['materi'] = "Mufrodat 98";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 98");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَوَّرَ-يُصَوِّرُ",
                                "arti" => "Memfoto",
                                "huruf" => array_unique(["صَ","وَّ","رَ","-","يُ","صَ","وِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "قَضَى-يَقْضِي عَلَى",
                                "arti" => "Menghakimi",
                                "huruf" => array_unique(["قَ","ضَ","ى","-","يَ","قْ","ضِ","ي","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "رَسَمَ-يَرْسُمُ",
                                "arti" => "Melukis",
                                "huruf" => array_unique(["رَ","سَ","مَ","-","يَ","رْ","سُ",'مُ'])
                            ],
                            [
                                "kata_arab" => "غَاصَ-يَغُوْصُ",
                                "arti" => "Menyelam",
                                "huruf" => array_unique(["غَ","ا","صَ","-","يَ","غُ","وْ","صُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 99')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 98");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 100");
                        $data['materi'] = "Mufrodat 99";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 99");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَائِقٌ",
                                "arti" => "Sopir",
                                "huruf" => array_unique(["سَ","ا","ئِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُذِيْعٌ",
                                "arti" => "Penyiar",
                                "huruf" => array_unique(["مُ","ذِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "وَزِيْرٌ",
                                "arti" => "Menteri",
                                "huruf" => array_unique(["وَ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسُ الْجُمْهُرِيَّةِ",
                                "arti" => "Presiden",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","ا","لْ","جُ","مْ","هُ","رِ","يَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "زَبَّالٌ",
                                "arti" => "Tukang sampah",
                                "huruf" => array_unique(["زَ","بَّ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "كَاتِبٌ",
                                "arti" => "Penulis",
                                "huruf" => array_unique(["كَ","ا","تِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَسَوِّلٌ",
                                "arti" => "Pengemis",
                                "huruf" => array_unique(["مُ","تَ","سَ","وِّ","لٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 100')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 99");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 101");
                        $data['materi'] = "Mufrodat 100";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 100");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَعَى-يَرْعَى",
                                "arti" => "Menggembala",
                                "huruf" => array_unique(["رَ","عَ","ى","-","يَ","رْ","عَ","ى"])
                            ],
                            [
                                "kata_arab" => "رَبَّى-يُرَبِّي",
                                "arti" => "Mendidik",
                                "huruf" => array_unique(["رَ","بَّ","ى","-","يُ","رَ","بِّ","ي"])
                            ],
                            [
                                "kata_arab" => "صَادَ-يَصِيْدُ",
                                "arti" => "Memburu",
                                "huruf" => array_unique(["صَ","ا","دَ","-","يَ","صِ","يْ","دُ"])
                            ],
                            [
                                "kata_arab" => "صَمَّمَ-يُصَمِّمُ",
                                "arti" => "Mendesain",
                                "huruf" => array_unique(["صَ","مَّ","مَ","-","يُ","صَ","مِّ","مُ"])
                            ]
                        ];
                    }
                // 51 - 100

                // 101 - 150
                    else if($_GET['id'] == MD5('Mufrodat 101')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 100");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 102");
                        $data['materi'] = "Mufrodat 101";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 101");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَشَّالٌ",
                                "arti" => "Copet",
                                "huruf" => array_unique(["نَ","شَّ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَطَلٌ",
                                "arti" => "Pahlawan",
                                "huruf" => array_unique(["بَ","طَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شُرْطِيٌّ",
                                "arti" => "Polisi",
                                "huruf" => array_unique(["شُ","رْ","طِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "حَلَّاقٌ",
                                "arti" => "Tukang cukur",
                                "huruf" => array_unique(["حَ","لَّ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "خَيَّاطٌ",
                                "arti" => "Penjahit",
                                "huruf" => array_unique(["خَ","يَّ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "غَسَّالٌ",
                                "arti" => "Tukang cuci",
                                "huruf" => array_unique(["غَ","سَّ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "رَاعٍ",
                                "arti" => "Penggembala",
                                "huruf" => array_unique(["رَ","ا","عٍ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 102')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 101");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 103");
                        $data['materi'] = "Mufrodat 102";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 102");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَلَقَ-يَحْلِقُ",
                                "arti" => "Mencukur",
                                "huruf" => array_unique(["حَ","لَ","قَ","-","يَ","حْ","لِ","قُ"])
                            ],
                            [
                                "kata_arab" => "أَنْتَجَ-يُنْتِجُ",
                                "arti" => "Menghasilkan",
                                "huruf" => array_unique(["أَ","نْ","تَ","جَ","-","يُ","نْ","تِ","جُ"])
                            ],
                            [
                                "kata_arab" => "أَصْلَحَ-يُصْلِحُ",
                                "arti" => "Memperbaiki",
                                "huruf" => array_unique(["أَ","صْ","لَ","حَ","-","يُ","صْ","لِ","حُ"])
                            ],
                            [
                                "kata_arab" => "خَدَعَ-يَخْدَعُ",
                                "arti" => "Menipu",
                                "huruf" => array_unique(["خَ","دَ","عَ","-","يَ","خْ","دَ","عُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 103')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 102");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 104");
                        $data['materi'] = "Mufrodat 103";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 103");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَالِبٌ",
                                "arti" => "Santri",
                                "huruf" => array_unique(["طَ","ا","لِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُجْرِمٌ",
                                "arti" => "Penjahat",
                                "huruf" => array_unique(["مُ","جْ","رِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "جُنْدِيٌّ",
                                "arti" => "Tentara",
                                "huruf" => array_unique(["جُ","نْ","دِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "طَبَّاخٌ",
                                "arti" => "Koki",
                                "huruf" => array_unique(["طَ","بَّ","ا","خٌ"])
                            ],
                            [
                                "kata_arab" => "مُدِيْرٌ",
                                "arti" => "Direktur",
                                "huruf" => array_unique(["مُ","دِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَاضٍ",
                                "arti" => "Hakim",
                                "huruf" => array_unique(["قَ","ا","ضٍ"])
                            ],
                            [
                                "kata_arab" => "سَبَّاقٌ",
                                "arti" => "Pembalap",
                                "huruf" => array_unique(["سَ","بَّ","ا","قٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 104')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 103");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 105");
                        $data['materi'] = "Mufrodat 104";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 104");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَرْسَلَ-يُرْسِلُ",
                                "arti" => "Mengirim",
                                "huruf" => array_unique(["أَ","رْ","سَ","لَ","-","يُ","رْ","سِ","لُ"])
                            ],
                            [
                                "kata_arab" => "رَئِسَ-يَرْئَسُ",
                                "arti" => "Mengetuai",
                                "huruf" => array_unique(["رَ","ئِ","سَ","-","يَ","رْ","ئَ","سُ"])
                            ],
                            [
                                "kata_arab" => "خَطَبَ-يَخْطُبُ",
                                "arti" => "Berceramah",
                                "huruf" => array_unique(["خَ","طَ","بَ","-","يَ","خْ","طُ","بُ"])
                            ],
                            [
                                "kata_arab" => "أَفْلَسَ-يُفْلِسُ",
                                "arti" => "Bangkrut",
                                "huruf" => array_unique(["أَ","فْ","لَ","سَ","-","يُ","فْ","لِ","سُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 105')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 104");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 106");
                        $data['materi'] = "Mufrodat 105";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 105");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَاشِيْرٌ",
                                "arti" => "Kasir",
                                "huruf" => array_unique(["كَ","ا","شِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "دَاعٍ",
                                "arti" => "Dai",
                                "huruf" => array_unique(["دَ","ا","عٍ"])
                            ],
                            [
                                "kata_arab" => "مُنَظِّمُ السَّيْرِ",
                                "arti" => "Tukang parkir",
                                "huruf" => array_unique(["مُ","نَ","ظِّ","مُ","_","ا","ل","سَّ","يْ","رِ"])
                            ],
                            [
                                "kata_arab" => "خَطِيْبٌ",
                                "arti" => "Penceramah",
                                "huruf" => array_unique(["خَ","طِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُعَلِّقٌ",
                                "arti" => "Komentator",
                                "huruf" => array_unique(["مُ","عَ","لِّ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُقَدِّمُ الْبَرْنَامِجِ",
                                "arti" => "Pembawa acara",
                                "huruf" => array_unique(["مُ","قَ","دِّ","مُ","_","ا","لْ","بَ","رْ","نَ","ا","مِ","جِ"])
                            ],
                            [
                                "kata_arab" => "خَادِمٌ",
                                "arti" => "Pembantu",
                                "huruf" => array_unique(["خَ","ا","دِ","مٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 106')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 105");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 107");
                        $data['materi'] = "Mufrodat 106";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 106");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خَسِرَ-يَخْسَرُ",
                                "arti" => "Rugi",
                                "huruf" => array_unique(["خَ","سِ","رَ","-","يَ","خْ","سَ","رُ"])
                            ],
                            [
                                "kata_arab" => "رَاجَ-يَرُوْجُ",
                                "arti" => "Laku",
                                "huruf" => array_unique(["رَ","ا","جَ","-","يَ","رُ","وْ","جُ"])
                            ],
                            [
                                "kata_arab" => "هَرَّجَ-يُهَرِّجُ",
                                "arti" => "Melawak",
                                "huruf" => array_unique(["هَ","رَّ","جَ","-","يُ","هَ","رِّ","جُ"])
                            ],
                            [
                                "kata_arab" => "رَبِحَ-يَرْبَحُ",
                                "arti" => "Untung",
                                "huruf" => array_unique(["رَ","بِ","حَ","-","يَ","رْ","بَ","حُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 107')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 106");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 108");
                        $data['materi'] = "Mufrodat 107";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 107");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُصَوِّرٌ",
                                "arti" => "Fotografer",
                                "huruf" => array_unique(["مُ","صَ","وِّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَسَّامٌ",
                                "arti" => "Pelukis",
                                "huruf" => array_unique(["رَ","سَّ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُبَرِّجٌ",
                                "arti" => "Perias",
                                "huruf" => array_unique(["مُ","بَ","رِّ","جٌ"])
                            ],
                            [
                                "kata_arab" => "سَاعِي الْبَرِيْدِ",
                                "arti" => "Tukang pos",
                                "huruf" => array_unique(["سَ","ا","عِ",'ي',"_","ا","لْ","بَ","رِ","يْ","دِ"])
                            ],
                            [
                                "kata_arab" => "مُهَنْدِسٌ",
                                "arti" => "Arsitek",
                                "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ"])
                            ],
                            [
                                "kata_arab" => "بَوَّابٌ",
                                "arti" => "Satpam",
                                "huruf" => array_unique(["بَ","وَّ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُمَثِّلٌ",
                                "arti" => "Artis",
                                "huruf" => array_unique(["مُ","مَ","ثِّ","لٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 108')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 107");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 109");
                        $data['materi'] = "Mufrodat 108";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 108");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَذَاعَ-يُذِيْعُ",
                                "arti" => "Menyiarkan",
                                "huruf" => array_unique(["أَ","ذَ","ا","عَ","-","يُ","ذِ","يْ","عُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَأْجَرَ-يَسْتَأْجِرُ",
                                "arti" => "Menyewa",
                                "huruf" => array_unique(["اِ","سْ","تَ","أْ","جَ","رَ","-","يَ","سْ","تَ","أْ","جِ","رُ"])
                            ],
                            [
                                "kata_arab" => "غَنَّى-يُغَنِّيْ",
                                "arti" => "Beryanyi",
                                "huruf" => array_unique(["غَ","نَّ","ى","-","يُ","غَ","نِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "لَوَّنَ-يُلَوِّنُ",
                                "arti" => "Mewarnai",
                                "huruf" => array_unique(["لَ","وَّ","نَ","-","يُ","لَ","وِّ","نُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 109')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 108");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 110");
                        $data['materi'] = "Mufrodat 109";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 109");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَزَّارٌ",
                                "arti" => "Tukang jagal",
                                "huruf" => array_unique(["جَ","زَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "صَحَافِيٌّ",
                                "arti" => "Wartawan",
                                "huruf" => array_unique(["صَ","حَ","ا","فِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ",
                                "arti" => "Dokter",
                                "huruf" => array_unique(["طَ","بِ",'يْ',"بٌ"])
                            ],
                            [
                                "kata_arab" => "مُمَرِّضٌ",
                                "arti" => "Perawat",
                                "huruf" => array_unique(["مُ",'مَ',"رِّ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "قَاضٍ",
                                "arti" => "Hakim",
                                "huruf" => array_unique(["قَ","ا","ضٍ"])
                            ],
                            [
                                "kata_arab" => "إِسْكَافٌ",
                                "arti" => "Tukang sol",
                                "huruf" => array_unique(["إِ","سْ","كَ","ا","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُضِيْفٌ",
                                "arti" => "Pramugara",
                                "huruf" => array_unique(["مُ","ضِ","يْ","فٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 110')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 109");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 111");
                        $data['materi'] = "Mufrodat 110";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 110");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَرَقَ-يَسْرِقُ",
                                "arti" => "Mencuri",
                                "huruf" => array_unique(["سَ","رَ","قَ","-","يَ","سْ","رِ","قُ"])
                            ],
                            [
                                "kata_arab" => "تَوَلَّى-يَتَوَلَّى عَلَى",
                                "arti" => "Mengurus",
                                "huruf" => array_unique(["تَ","وَ","لَّ","ى","-","يَ","تَ","وَ","لَّ","ى","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "رَكَّبَ-يُرَكِّبُ",
                                "arti" => "Memasang",
                                "huruf" => array_unique(["رَ","كَّ","بَ","-","يُ","رَ","كِّ","بُ"])
                            ],
                            [
                                "kata_arab" => "نَزَعَ-يَنْزِعُ",
                                "arti" => "Mencabut",
                                "huruf" => array_unique(["نَ","زَ","عَ","-","يَ","نْ","زِ","عُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 111')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 110");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 112");
                        $data['materi'] = "Mufrodat 111";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 9";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 111");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَيْدَلِيٌّ",
                                "arti" => "Apoteker",
                                "huruf" => array_unique(["صَ","يْ","دَ","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُبَرْمِجٌ",
                                "arti" => "Programmer",
                                "huruf" => array_unique(["مُ","بَ","رْ","مِ","جٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَامٍ",
                                "arti" => "Pengacara",
                                "huruf" => array_unique(["مُ","حَ","ا","مٍ"])
                            ],
                            [
                                "kata_arab" => "مُتَرْجِمٌ",
                                "arti" => "Penterjemah",
                                "huruf" => array_unique(["مُ",'تَ',"رْ","جِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُهَنْدِسٌ",
                                "arti" => "Insinyur",
                                "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 112')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 111");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 113");
                        $data['materi'] = "Mufrodat 112";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 9";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 112");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَرَقَ-يَسْرِقُ",
                                "arti" => "Mencuri",
                                "huruf" => array_unique(["سَ","رَ","قَ","-","يَ","سْ","رِ","قُ"])
                            ],
                            [
                                "kata_arab" => "تَوَلَّى-يَتَوَلَّى عَلَى",
                                "arti" => "Mengurus",
                                "huruf" => array_unique(["تَ","وَ","لَّ","ى","-","يَ","تَ","وَ","لَّ","ى","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "رَكَّبَ-يُرَكِّبُ",
                                "arti" => "Memasang",
                                "huruf" => array_unique(["رَ","كَّ","بَ","-","يُ","رَ","كِّ","بُ"])
                            ],
                            [
                                "kata_arab" => "نَزَعَ-يَنْزِعُ",
                                "arti" => "Mencabut",
                                "huruf" => array_unique(["نَ","زَ","عَ","-","يَ","نْ","زِ","عُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 113')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 112");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 114");
                        $data['materi'] = "Mufrodat 113";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 10";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 113");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَفِيْرٌ",
                                "arti" => "Duta besar",
                                "huruf" => array_unique(["سَ","فِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَقَّاصٌ",
                                "arti" => "Penari",
                                "huruf" => array_unique(["رَ","قَّ","ا","صٌ"])
                            ],
                            [
                                "kata_arab" => "مُؤَلِّفٌ",
                                "arti" => "Pengarang",
                                "huruf" => array_unique(["مُ","ؤَ","لِّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُلَاكِمٌ",
                                "arti" => "Petinju",
                                "huruf" => array_unique(["مُ","لَ","ا","كِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "سِيَاسِيٌّ",
                                "arti" => "Politikus",
                                "huruf" => array_unique(["سِ","يَ","ا","سِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "غَوَّاصٌ",
                                "arti" => "Penyelam",
                                "huruf" => array_unique(["غَ","وَّ","ا","صٌ"])
                            ],
                            [
                                "kata_arab" => "رِجَالُ الْإِطْفَاءِ",
                                "arti" => "Pemadam kebakaran",
                                "huruf" => array_unique(["رِ","جَ","ا","لُ","_","ا","لْ","إِ","طْ","فَ","ا","ءِ"])
                            ],
                            [
                                "kata_arab" => "عَطَّارٌ",
                                "arti" => "Penjual parfum",
                                "huruf" => array_unique(["عَ","طَّ","ا","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 114')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 113");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 115");
                        $data['materi'] = "Mufrodat 114";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 10";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 114");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَامَرَ-يُغَامِرُ",
                                "arti" => "Menjelajah",
                                "huruf" => array_unique(["غَ","ا","مَ","رَ","-","يُ","غَ","ا","مِ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِخْتَرَعَ-يَخْتَرِعُ",
                                "arti" => "Menemukan",
                                "huruf" => array_unique(["اِ","خْ","تَ","رَ","عَ","-","يَ","خْ","تَ","رِ","عُ"])
                            ],
                            [
                                "kata_arab" => "نَحَتَ-يَنْحِتُ",
                                "arti" => "Memahat",
                                "huruf" => array_unique(["نَ","حَ","تَ","-","يَ","نْ","حِ","تُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَفَزَّ-يَسْتَفِزُّ",
                                "arti" => "Memprovokasi",
                                "huruf" => array_unique(["اِ","سْ","تَ","فَ","زَّ","-","يَ","سْ","تَ","فِ","زُّ"])
                            ],
                            [
                                "kata_arab" => "قَامَرَ-يُقَامِرُ",
                                "arti" => "Berjudi",
                                "huruf" => array_unique(["قَ","ا","مَ","رَ","-","يُ","قَ","ا","مِ","رُ"])
                            ],
                            [
                                "kata_arab" => "تَجَسَّسَ-يَتَجَسَّسُ",
                                "arti" => "Memata-matai",
                                "huruf" => array_unique(["تَ","جَ","سَّ","سَ","-","يَ","تَ","جَ","سَّ","سُ"])
                            ],
                            [
                                "kata_arab" => "اِحْتَلَّ-يَحْتَلُّ",
                                "arti" => "Menjajah",
                                "huruf" => array_unique(["اِ","حْ","تَ","لَّ","-","يَ","حْ","تَ","لُّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 115')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 114");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 116");
                        $data['materi'] = "Mufrodat 115";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 11";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 115");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَغِيَّةٌ",
                                "arti" => "Pelacur",
                                "huruf" => array_unique(["بَ","غِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَاهِنٌ",
                                "arti" => "Dukun",
                                "huruf" => array_unique(["كَ","ا","هِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "مُشَعْوِذٌ",
                                "arti" => "Pesulap",
                                "huruf" => array_unique(["مُ","شَ","عْ","وِ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "خَدَّاعٌ",
                                "arti" => "Tukang tipu",
                                "huruf" => array_unique(["خَ","دَّ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "مُطَرِّزٌ",
                                "arti" => "Pembordir",
                                "huruf" => array_unique(["مُ","طَ","رِّ","زٌ"])
                            ],
                            [
                                "kata_arab" => "قَاطِعُ الطَّرِيْقِ",
                                "arti" => "Pembegal",
                                "huruf" => array_unique(["قَ","ا","طِ","عُ","_","ا","ل","طَّ","رِ","يْ","قِ"])
                            ],
                            [
                                "kata_arab" => "جَاسُوْسٌ",
                                "arti" => "Mata-mata",
                                "huruf" => array_unique(["جَ","ا","سُ","وْ","سٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 116')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 115");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 117");
                        $data['materi'] = "Mufrodat 116";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 11";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 116");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَعْوَذَ-يُشَعْوِذُ",
                                "arti" => "Menyulap",
                                "huruf" => array_unique(["شَ","عْ","وَ","ذَ","-","يُ","شَ","عْ","وِ","ذُ"])
                            ],
                            [
                                "kata_arab" => "اِخْتَلَسَ-يَخْتَلِسُ",
                                "arti" => "Korupsi",
                                "huruf" => array_unique(["اِ","خْ","تَ","لَ","سَ","-","يَ","خْ","تَ","لِ","سُ"])
                            ],
                            [
                                "kata_arab" => "صَنَّفَ-يُصَنِّفُ",
                                "arti" => "Mengarang (buku)",
                                "huruf" => array_unique(["صَ","نَّ","فَ","-","يُ","صَ","نِّ","فُ"])
                            ],
                            [
                                "kata_arab" => "أَجَّرَ-يُؤَجِّرُ",
                                "arti" => "Menyewakan",
                                "huruf" => array_unique(["أَ","جَّ","رَ","-","يُ","ؤَ","جِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "حَامَى-يُحَامِي",
                                "arti" => "Membela terdakwa",
                                "huruf" => array_unique(["حَ","ا","مَ","ى","-","يُ","حَ","ا","مِ","ي"])
                            ],
                            [
                                "kata_arab" => "رَقَصَ-يَرْقُصُ",
                                "arti" => "Menari",
                                "huruf" => array_unique(["رَ","قَ","صَ","-","يَ","رْ","قُ","صُ"])
                            ],
                            [
                                "kata_arab" => "مَثَّلَ-يُمَثِّلُ",
                                "arti" => "Memerankan",
                                "huruf" => array_unique(["مَ","ثَّ","لَ","-","يُ","مَ","ثِّ","لُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 117')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 116");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 118");
                        $data['materi'] = "Mufrodat 117";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 12";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 117");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُحَقِّقٌ",
                                "arti" => "Detektif",
                                "huruf" => array_unique(["مُ","حَ","قِّ","قٌ"])
                            ],
                            [
                                "kata_arab" => "سَاحِرٌ",
                                "arti" => "Penyihir",
                                "huruf" => array_unique(["سَ","ا","حِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُخْتَلِسٌ",
                                "arti" => "Koruptor",
                                "huruf" => array_unique(["مُ","خْ","تَ","لِ","سٌ"])
                            ],
                            [
                                "kata_arab" => "إِرْهَابِيٌّ",
                                "arti" => "Teroris",
                                "huruf" => array_unique(["إِ","رْ","هَ","ا","بِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "أَمِيْرُ الْمَدِيْنَةِ",
                                "arti" => "Walikota",
                                "huruf" => array_unique(["أَ","مِ","يْ","رُ","_","ا","لْ","مَ","دِ","يْ","نَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "مُحَافِظٌ",
                                "arti" => "Gubernur",
                                "huruf" => array_unique(["مُ","حَ","ا","فِ","ظٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسُ الْعِمْدَةِ",
                                "arti" => "Pak camat",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","ا","لْ","عِ","مْ","دَ","ةِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 118')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 117");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 119");
                        $data['materi'] = "Mufrodat 118";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Kerja 12";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 118");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَوَلَّى-يَتَوَلَّى عَلَى",
                                "arti" => "Mengurus",
                                "huruf" => array_unique(["تَ","وَ","لَّ","ى","-","يَ","تَ","وَ","لَّ","ى","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "دَافَعَ-يُدَافِعُ عَنْ",
                                "arti" => "Membela",
                                "huruf" => array_unique(["دَ","ا","فَ","عَ","-","يُ","دَ","ا","فِ","عُ","_","عَ","نْ"])
                            ],
                            [
                                "kata_arab" => "خَطَّطَ-يُخَطِّطُ",
                                "arti" => "Merancang",
                                "huruf" => array_unique(["خَ","طَّ","طَ","-","يُ","خَ","طِّ","طُ"])
                            ],
                            [
                                "kata_arab" => "رَشَا-يَرْشُوْ",
                                "arti" => "Menyogok",
                                "huruf" => array_unique(["رَ","شَ","ا","-","يَ","رْ","شُ","وْ"])
                            ],
                            [
                                "kata_arab" => "لَكَمَ-يَلْكُمُ",
                                "arti" => "Meninju",
                                "huruf" => array_unique(["لَ","كَ","مَ","-","يَ","لْ","كُ","مُ"])
                            ],
                            [
                                "kata_arab" => "تَرْجَمَ-يُتَرْجِمُ",
                                "arti" => "Menerjemahkan",
                                "huruf" => array_unique(["تَ","رْ","جَ","مَ","-","يُ","تَ","رْ","جِ","مُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 119')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 118");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 120");
                        $data['materi'] = "Mufrodat 119";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 13";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 119");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُقَامِرٌ",
                                "arti" => "Penjudi",
                                "huruf" => array_unique(["مُ","قَ","ا","مِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَفِرٌّ",
                                "arti" => "Provokator",
                                "huruf" => array_unique(["مُ","سْ","تَ","فِ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "رَاهِبٌ",
                                "arti" => "Pendeta",
                                "huruf" => array_unique(["رَ","ا","هِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "قَنَّاصٌ",
                                "arti" => "Sniper",
                                "huruf" => array_unique(["قَ","نَّ","ا","صٌ"])
                            ],
                            [
                                "kata_arab" => "حَارِسٌ",
                                "arti" => "Penjaga",
                                "huruf" => array_unique(["حَ","ا","رِ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَلِّكٌ",
                                "arti" => "Tukang pijat",
                                "huruf" => array_unique(["مُ","دَ","لِّ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مُرْشِدٌ",
                                "arti" => "Guide",
                                "huruf" => array_unique(["مُ","رْ","شِ","دٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 120')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 119");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 121");
                        $data['materi'] = "Mufrodat 120";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 14";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 120");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَيَّافٌ",
                                "arti" => "Algojo",
                                "huruf" => array_unique(["سَ","يَّ","ا","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُحْتَلٌّ",
                                "arti" => "Penjajah",
                                "huruf" => array_unique(["مُ","حْ","تَ","لٌّ"])
                            ],
                            [
                                "kata_arab" => "مُغَامِرٌ",
                                "arti" => "Penjelajah",
                                "huruf" => array_unique(["مُ","غَ","ا","مِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُخْتَرِعٌ",
                                "arti" => "Penemu",
                                "huruf" => array_unique(["مُ","خْ","تَ","رِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "أَدِيْبٌ",
                                "arti" => "Sastrawan",
                                "huruf" => array_unique(["أَ","دِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "نَحَّاتٌ",
                                "arti" => "Pemahat",
                                "huruf" => array_unique(["نَ","حَّ","ا","تٌ"])
                            ],
                            [
                                "kata_arab" => "رِيَاضِيٌّ",
                                "arti" => "Atlet",
                                "huruf" => array_unique(["رِ","يَ","ا","ضِ","يٌّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 121')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 120");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 121";
                        $data['tema'] = "Profesi";
                        $data['title'] = "Kata Benda 15";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 121");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِيْكَانِيْكِيٌّ",
                                "arti" => "Ahli mesin",
                                "huruf" => array_unique(["مِ","يْ","كَ","ا","نِ","يْ","كِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مَلَّاحٌ",
                                "arti" => "Navigator",
                                "huruf" => array_unique(["مَ","لَّ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "رُبَّانٌ",
                                "arti" => "Nahkoda",
                                "huruf" => array_unique(["رُ","بَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "مُصَمِّمٌ",
                                "arti" => "Desainer",
                                "huruf" => array_unique(["مُ","صَ","مِّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ بَيْطَرِيٌّ",
                                "arti" => "Dokter hewan",
                                "huruf" => array_unique(["بَ","يْ","طَ","رِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "سِمْسَارٌ",
                                "arti" => "Calo",
                                "huruf" => array_unique(["سِ","مْ","سَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "قُرْصَانٌ",
                                "arti" => "Bajak laut",
                                "huruf" => array_unique(["قُ","رْ","صَ","ا","نٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 122')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 94");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 123");
                        $data['materi'] = "Mufrodat 122";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 122");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بُحَيْرَةٌ",
                                "arti" => "Danau",
                                "huruf" => array_unique(["بُ","حَ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَاعِقَةٌ",
                                "arti" => "Petir",
                                "huruf" => array_unique(["صَ","ا","عِ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تَلٌّ",
                                "arti" => "Bukit",
                                "huruf" => array_unique(["تَ","لٌّ"])
                            ],
                            [
                                "kata_arab" => "وَادٍ",
                                "arti" => "Lembah",
                                "huruf" => array_unique(["وَ","ا","دٍ"])
                            ],
                            [
                                "kata_arab" => "غَارٌ",
                                "arti" => "Gua",
                                "huruf" => array_unique(["غَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "حُمَامٌ",
                                "arti" => "Lahar",
                                "huruf" => array_unique(["حُ","مَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُحِيْطٌ",
                                "arti" => "Samudra",
                                "huruf" => array_unique(["مُ","حِ","يْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مَرْتَعٌ",
                                "arti" => "Sabana",
                                "huruf" => array_unique(["مَ","رْ","تَ","عٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 123')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 122");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 124");
                        $data['materi'] = "Mufrodat 123";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Kerja 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 123");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَذَّ-يَجُذُّ",
                                "arti" => "Menebang",
                                "huruf" => array_unique(["جَ","ذَّ","-","يَ","جُ","ذُّ"])
                            ],
                            [
                                "kata_arab" => "زَلْزَلَ-يُزَلْزِلُ",
                                "arti" => "Gempa bumi",
                                "huruf" => array_unique(["زَ","لْ","زَ","لَ","-","يُ","زَ","لْ","زِ","لُ"])
                            ],
                            [
                                "kata_arab" => "قَطَعَ-يَقْطَعُ نَهْرًا",
                                "arti" => "Menyebrang sungai",
                                "huruf" => array_unique(["قَ","طَ","عَ","-","يَ","قْ","طَ","عُ","_","نَ","هْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "اِنْهَدَمَ-يَنْهَدِمُ",
                                "arti" => "Runtuh",
                                "huruf" => array_unique(["اِ","نْ","هَ","دَ","مَ","-","يَ","نْ","هَ","دِ","مُ"])
                            ],
                            [
                                "kata_arab" => "تَزَحْلَقَ-يَتَزَحْلَقُ",
                                "arti" => "Meluncur",
                                "huruf" => array_unique(["تَ","زَ","حْ","لَ","قَ","-","يَ","تَ","زَ","حْ","لَ","قُ"])
                            ],
                            [
                                "kata_arab" => "عَامَ-يَعُوْمُ",
                                "arti" => "Mengapung",
                                "huruf" => array_unique(["عَ","ا","مَ","-","يَ","عُ","وْ","مُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 124')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 123");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 125");
                        $data['materi'] = "Mufrodat 124";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 124");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُسْتَنْقَعٌ",
                                "arti" => "Rawa",
                                "huruf" => array_unique(["مُ","سْ","تَ","نْ","قَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "شُعَبٌ مَرْجَانِيَّةٌ",
                                "arti" => "Terumbu karang",
                                "huruf" => array_unique(["مَ","رْ","جَ","ا","نِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "اِنْهِيَارُ الْأَرْضِ",
                                "arti" => "Tanah longsor",
                                "huruf" => array_unique(["اِ","نْ","هِ","يَ","ا","رُ","_","ا","لْ","أَ","رْ","ضِ"])
                            ],
                            [
                                "kata_arab" => "زِلْزَالٌ",
                                "arti" => "Gempa bumi",
                                "huruf" => array_unique(["زِ","لْ","زَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "إِعْصَارٌ",
                                "arti" => "Angin topan",
                                "huruf" => array_unique(["إِ","عْ","صَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "خَلِيْجٌ",
                                "arti" => "Teluk",
                                "huruf" => array_unique(["خَ","لِ","يْ","جٌ"])
                            ],
                            [
                                "kata_arab" => "تَلَوُّثٌ",
                                "arti" => "Polusi",
                                "huruf" => array_unique(["تَ","لَ","وُّ","ثٌ"])
                            ],
                            [
                                "kata_arab" => "شِهَابٌ",
                                "arti" => "Meteor",
                                "huruf" => array_unique(["شِ","هَ","ا","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 125')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 124");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 126");
                        $data['materi'] = "Mufrodat 125";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Kerja 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat ");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَبَلَّرَ-يَتَبَلَّرُ",
                                "arti" => "Mengkristal",
                                "huruf" => array_unique(["تَ","بَ","لَّ","رَ","-","يَ","تَ","بَ","لَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِنْصَهَرَ-يَنْصَهِرُ",
                                "arti" => "Meleleh",
                                "huruf" => array_unique(["اِ","نْ","صَ","هَ","رَ","-","يَ","نْ","صَ","هِ","رُ"])
                            ],
                            [
                                "kata_arab" => "نَسَمَ-يَنْسِمُ",
                                "arti" => "Sepoi-sepoi",
                                "huruf" => array_unique(["نَ","سَ","مَ","-","يَ","نْ","سِ","مُ"])
                            ],
                            [
                                "kata_arab" => "تَحَجَّرَ-يَتَحَجَّرُ",
                                "arti" => "Membatu",
                                "huruf" => array_unique(["تَ","حَ","جَّ","رَ","-","يَ","تَ","حَ","جَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَشَعَّ-يُشِعُّ",
                                "arti" => "Menyinari",
                                "huruf" => array_unique(["أَ","شَ","عَّ","-","يُ","شِ","عُّ"])
                            ],
                            [
                                "kata_arab" => "اِنْشَقَّ-يَنْشَقُّ",
                                "arti" => "Terbelah",
                                "huruf" => array_unique(["اِ","نْ","شَ","قَّ","-","يَ","نْ","شَ","قُّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 126')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 125");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 127");
                        $data['materi'] = "Mufrodat 126";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 9";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 126");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كُسُوْفٌ",
                                "arti" => "Gerhana matahari",
                                "huruf" => array_unique(["كُ","سُ","وْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "خُسُوْفٌ",
                                "arti" => "Gerhana bulan",
                                "huruf" => array_unique(["خُ","سُ","وْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُذَنَّبٌ",
                                "arti" => "Komet",
                                "huruf" => array_unique(["مُ","ذَ","نَّ","بٌ"])
                            ],
                            [
                                "kata_arab" => "ثَوْرَانُ",
                                "arti" => "Erupsi",
                                "huruf" => array_unique(["ثَ","وْ","رَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "بُرْدٌ",
                                "arti" => "Salju",
                                "huruf" => array_unique(["بُ","رْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "بَرْقٌ",
                                "arti" => "Kilat",
                                "huruf" => array_unique(["بَ","رْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "قَضَاءٌ",
                                "arti" => "Angkasa",
                                "huruf" => array_unique(["قَ","ضَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "قَمَرٌ صِنَاعِيٌّ",
                                "arti" => "Satelit",
                                "huruf" => array_unique(["قَ","مَ","رٌ","_","صِ","نَ","ا","عِ","يٌّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 127')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 126");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 128");
                        $data['materi'] = "Mufrodat 127";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Kerja 9";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 127");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَفَذَ-يَنْفُذُ",
                                "arti" => "Menembus",
                                "huruf" => array_unique(["نَ","فَ","ذَ","-","يَ","نْ","فُ","ذُ"])
                            ],
                            [
                                "kata_arab" => "هَبَّ-يَهُبُّ",
                                "arti" => "Bertiup",
                                "huruf" => array_unique(["هَ","بَّ","-","يَ","هُ","بُّ"])
                            ],
                            [
                                "kata_arab" => "تَصَدَّعَ-يَتَصَدَّعُ",
                                "arti" => "Retak",
                                "huruf" => array_unique(["تَ","صَ","دَّ","عَ","-","يَ","تَ","صَ","دَّ","عُ"])
                            ],
                            [
                                "kata_arab" => "طَفَا-يَطْفُوْ",
                                "arti" => "Mengambang",
                                "huruf" => array_unique(["طَ","فَ","ا","-","يَ","طْ","فُ","وْ"])
                            ],
                            [
                                "kata_arab" => "جَعَلَ-يَجْعَلُ",
                                "arti" => "Menjadikan",
                                "huruf" => array_unique(["جَ","عَ","لَ","-","يَ","جْ","عَ","لُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 128')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 127");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 129");
                        $data['materi'] = "Mufrodat 128";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 10";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 128");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَفْحٌ",
                                "arti" => "Lereng",
                                "huruf" => array_unique(["سَ","فْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "شِتَاءٌ",
                                "arti" => "Musim dingin",
                                "huruf" => array_unique(["شِ","تَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "رَبِيْعٌ",
                                "arti" => "Musim semi",
                                "huruf" => array_unique(["رَ","بِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "خَرِيْفٌ",
                                "arti" => "Musim gugur",
                                "huruf" => array_unique(["خَ","رِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "صَيْفٌ",
                                "arti" => "Musim panas",
                                "huruf" => array_unique(["صَ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "قَارَةٌ",
                                "arti" => "Benua",
                                "huruf" => array_unique(["قَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَرْبٌ",
                                "arti" => "Barat",
                                "huruf" => array_unique(["غَ","رْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "شَرْقٌ",
                                "arti" => "Timur",
                                "huruf" => array_unique(["شَ","رْ","قٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 129')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 128");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 130");
                        $data['materi'] = "Mufrodat 129";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 11";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 129");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَمَالٌ",
                                "arti" => "Utara",
                                "huruf" => array_unique(["شَ","مَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَنُوْبٌ",
                                "arti" => "Selatan",
                                "huruf" => array_unique(["جَ","نُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "حَضَارَةٌ",
                                "arti" => "Peradaban",
                                "huruf" => array_unique(["حَ","ضَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَوْضَى",
                                "arti" => "Kekacauan",
                                "huruf" => array_unique(["فَ","وْ","ضَ","ى"])
                            ],
                            [
                                "kata_arab" => "رِيْفٌ",
                                "arti" => "Pedesaan",
                                "huruf" => array_unique(["رِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "بُحَيْرَةٌ صِنَاعِيَّةٌ",
                                "arti" => "Waduk",
                                "huruf" => array_unique(["بُ","حَ","يْ","رَ","ةٌ","_","صِ","نَ","ا","عِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَعْرٌ",
                                "arti" => "Jurang",
                                "huruf" => array_unique(["قَ","عْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَعْدٌ",
                                "arti" => "Guntur",
                                "huruf" => array_unique(["رَ","عْ","دٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 130')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 129");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 130";
                        $data['tema'] = "Alam Semesta";
                        $data['title'] = "Kata Benda 12";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 130");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَوْسِمُ الثَّلْجِ",
                                "arti" => "Musim salju",
                                "huruf" => array_unique(["مَ","وْ","سِ","مُ","_","ا","ل","ثَّ","لْ","جِ"])
                            ],
                            [
                                "kata_arab" => "قِمَّةٌ",
                                "arti" => "Huku",
                                "huruf" => array_unique(["قِ","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُطْبٌ",
                                "arti" => "Kutub",
                                "huruf" => array_unique(["قُ","طْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "وَاحَةٌ",
                                "arti" => "Oase",
                                "huruf" => array_unique(["وَ","ا","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَرَابٌ",
                                "arti" => "Fatamorgana",
                                "huruf" => array_unique(["سَ","رَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "عَيْنٌ",
                                "arti" => "Mata air",
                                "huruf" => array_unique(["عَ","يْ","نٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 131')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 132");
                        $data['materi'] = "Mufrodat 131";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 131");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ثَوْرٌ",
                                "arti" => "Sapi (jantan)",
                                "huruf" => array_unique(["ثَ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَقَرَةٌ",
                                "arti" => "Sapi betina",
                                "huruf" => array_unique(["بَ","قَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَامُوْسٌ",
                                "arti" => "Kerbau",
                                "huruf" => array_unique(["جَ","ا","مُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "جَمَلٌ",
                                "arti" => "Unta",
                                "huruf" => array_unique(["جَ","مَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "حِمَارٌ",
                                "arti" => "Keledai",
                                "huruf" => array_unique(["حِ","مَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "حِصَانٌ",
                                "arti" => "Kuda",
                                "huruf" => array_unique(["حِ","صَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "خَرُوْفٌ",
                                "arti" => "Domba",
                                "huruf" => array_unique(["خَ","رُ","وْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "غَنَمٌ",
                                "arti" => "Kambing",
                                "huruf" => array_unique(["غَ","نَ","مٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 132')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 131");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 133");
                        $data['materi'] = "Mufrodat 132";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Bagian 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 132");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فِيْلٌ",
                                "arti" => "Gajah",
                                "huruf" => array_unique(["فِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَمِرٌ",
                                "arti" => "Harimau",
                                "huruf" => array_unique(["نَ","مِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قِطٌّ",
                                "arti" => "Kucing",
                                "huruf" => array_unique(["قِ","طٌّ"])
                            ],
                            [
                                "kata_arab" => "تِمْسَاحٌ",
                                "arti" => "Buaya",
                                "huruf" => array_unique(["تِ","مْ","سَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "أَسَدٌ",
                                "arti" => "Singa",
                                "huruf" => array_unique(["أَ","سَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "ثُعْبَانٌ",
                                "arti" => "Ular",
                                "huruf" => array_unique(["ثُ","عْ","بَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "سِنْجَابٌ",
                                "arti" => "Tupai",
                                "huruf" => array_unique(["سِ","نْ","جَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "ذِئْبٌ",
                                "arti" => "Serigala",
                                "huruf" => array_unique(["ذِ","ئْ","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 133')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 132");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 134");
                        $data['materi'] = "Mufrodat 133";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Bagian 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 133");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سُلَحْفَاةٌ",
                                "arti" => "Kura-kura",
                                "huruf" => array_unique(["سُ","لَ","حْ","فَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَرَافَةٌ",
                                "arti" => "Jerapah",
                                "huruf" => array_unique(["زَ","رَ","ا","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَعُوْضَةٌ",
                                "arti" => "Nyamuk",
                                "huruf" => array_unique(["بَ","عُ","وْ","ضَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَأْرٌ",
                                "arti" => "Tikus",
                                "huruf" => array_unique(["فَ","أْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "أَرْنَبٌ",
                                "arti" => "Kelinci",
                                "huruf" => array_unique(["أَ","رْ","نَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "ضِفْدَعٌ",
                                "arti" => "Katak",
                                "huruf" => array_unique(["ضِ","فْ","دَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "كَلْبٌ",
                                "arti" => "Anjing",
                                "huruf" => array_unique(["كَ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "صُرْصُوْرٌ",
                                "arti" => "Kecoa",
                                "huruf" => array_unique(["صُ","رْ","صُ","وْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 134')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 133");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 135");
                        $data['materi'] = "Mufrodat 134";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Bagian 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 134");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ذُبَابَةٌ",
                                "arti" => "Lalat",
                                "huruf" => array_unique(["ذُ","بَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَاشَةٌ",
                                "arti" => "Kupu-kupu",
                                "huruf" => array_unique(["فَ","رَ","ا","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَرْطَانٌ",
                                "arti" => "Kepiting",
                                "huruf" => array_unique(["سَ","رْ","طَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "عَنْكَبُوْتٌ",
                                "arti" => "Laba-laba",
                                "huruf" => array_unique(["عَ","نْ","كَ","بُ","وْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "نَمْلَةٌ",
                                "arti" => "Semut",
                                "huruf" => array_unique(["نَ","مْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُمْلَةٌ",
                                "arti" => "Kutu",
                                "huruf" => array_unique(["قُ","مْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دُلْفِيْنٌ",
                                "arti" => "Lumba-lumba",
                                "huruf" => array_unique(["دُ","لْ","فِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "عَقْرَبٌ",
                                "arti" => "Kalajengking",
                                "huruf" => array_unique(["عَ","قْ","رَ","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 135')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 134");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 136");
                        $data['materi'] = "Mufrodat 135";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Bagian 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 135");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دُوْدَةٌ",
                                "arti" => "Ulat",
                                "huruf" => array_unique(["دُ","وْ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَمَكُ الْحُوْتِ",
                                "arti" => "Paus",
                                "huruf" => array_unique(["سَ","مَ","كُ","_","ا","لْ","حُ","وْ","تِ"])
                            ],
                            [
                                "kata_arab" => "سَمَكُ الْقِرْشِ",
                                "arti" => "Hiu",
                                "huruf" => array_unique(["سَ","مَ","كُ","_","ا","لْ","قِ","رْ","شِ"])
                            ],
                            [
                                "kata_arab" => "كَلْبُ الْبَحْرِ",
                                "arti" => "Anjing laut",
                                "huruf" => array_unique(["كَ","لْ","بُ","ا","لْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "فَرَسُ الْبَحْرِ",
                                "arti" => "Kuda laut",
                                "huruf" => array_unique(["فَ","رَ","سُ","_","ا","لْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "فَرَسُ النَّهْرِ",
                                "arti" => "Kuda nil",
                                "huruf" => array_unique(["فَ","رَ","سُ","_","ا","ل","نَّ","هْ","رِ"])
                            ],
                            [
                                "kata_arab" => "تِنِّيْنٌ",
                                "arti" => "Naga",
                                "huruf" => array_unique(["تِ","نِّ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "طَائِرٌ",
                                "arti" => "Burung",
                                "huruf" => array_unique(["طَ","ا","ئِ","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 136')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 135");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 137");
                        $data['materi'] = "Mufrodat 136";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Bagian 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 136");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غُرَابٌ",
                                "arti" => "Gagak",
                                "huruf" => array_unique(["غُ","رَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "نَسْرٌ",
                                "arti" => "Elang",
                                "huruf" => array_unique(["نَ","سْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بُوْمٌ",
                                "arti" => "Burung hantu",
                                "huruf" => array_unique(["بُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "غَزَالٌ",
                                "arti" => "Kijang",
                                "huruf" => array_unique(["غَ","زَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَحْلَةٌ",
                                "arti" => "Lebah",
                                "huruf" => array_unique(["نَ","حْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دُبٌّ",
                                "arti" => "Beruang",
                                "huruf" => array_unique(["دُ","بٌّ"])
                            ],
                            [
                                "kata_arab" => "حَمَامَةٌ",
                                "arti" => "Merpati",
                                "huruf" => array_unique(["حَ","مَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُنْفُذٌ",
                                "arti" => "Landak",
                                "huruf" => array_unique(["قُ","نْ","فُ","ذٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 137')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 136");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 138");
                        $data['materi'] = "Mufrodat 137";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Bagian 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 137");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قُنْدُسٌ",
                                "arti" => "Berang-berang",
                                "huruf" => array_unique(["قُ","نْ","دُ","سٌ"])
                            ],
                            [
                                "kata_arab" => "أُخْطُبُوْطٌ",
                                "arti" => "Gurita",
                                "huruf" => array_unique(["أُ","خْ","طُ","بُ","وْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "بُرْغُوْثٌ",
                                "arti" => "Udang",
                                "huruf" => array_unique(["بُ","رْ","غُ","وْ","ثٌ"])
                            ],
                            [
                                "kata_arab" => "بَبْغَاءُ",
                                "arti" => "Burung beo",
                                "huruf" => array_unique(["بَ","بْ","غَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "دَجَاجَةٌ",
                                "arti" => "Ayam",
                                "huruf" => array_unique(["دَ","جَ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَطَّةٌ",
                                "arti" => "Bebek",
                                "huruf" => array_unique(["بَ","طَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَمَكٌ",
                                "arti" => "Ikan",
                                "huruf" => array_unique(["سَ","مَ","كٌ"])
                            ],
                            [
                                "kata_arab" => "خُفَّاشٌ",
                                "arti" => "Kelelawar",
                                "huruf" => array_unique(["خُ","فَّ","ا","شٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 138')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 137");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 139");
                        $data['materi'] = "Mufrodat 138";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Bagian 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 138");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَزَغَةٌ",
                                "arti" => "Cicak",
                                "huruf" => array_unique(["وَ","زَ","غَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَرِيْشٌ",
                                "arti" => "Kelabang",
                                "huruf" => array_unique(["حَ","رِ","يْ","شٌ"])
                            ],
                            [
                                "kata_arab" => "حَشَرَةٌ",
                                "arti" => "Serangga",
                                "huruf" => array_unique(["حَ","شَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَرْكَدَّنٌ",
                                "arti" => "Badak",
                                "huruf" => array_unique(["كَ","رْ","كَ","دَّ","نٌ"])
                            ],
                            [
                                "kata_arab" => "خِنْزِيْرٌ",
                                "arti" => "Babi",
                                "huruf" => array_unique(["خِ","نْ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَرَادَةٌ",
                                "arti" => "Belalang",
                                "huruf" => array_unique(["جَ","رَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُنْفُسَاءُ",
                                "arti" => "Kumbang",
                                "huruf" => array_unique(["خُ","نْ",'فُ',"سَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "حِرْبَاءٌ",
                                "arti" => "Bunglon",
                                "huruf" => array_unique(["حِ","رْ","بَ","ا","ءٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 139')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 138");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 140");
                        $data['materi'] = "Mufrodat 139";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Bagian 9";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 139");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَابَّةُ الْأَرٌضِ",
                                "arti" => "Rayap",
                                "huruf" => array_unique(["دَ","ا","بَّ","ةُ","_","ا","لْ","أَ","رٌ","ضِ"])
                            ],
                            [
                                "kata_arab" => "دِيْكٌ",
                                "arti" => "Ayam jantan",
                                "huruf" => array_unique(["دِ","يْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "آفَةٌ",
                                "arti" => "Hama",
                                "huruf" => array_unique(["آ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جُرْثُوْمٌ",
                                "arti" => "Kuman",
                                "huruf" => array_unique(["جُ","رْ","ثُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "طَاوُوْسٌ",
                                "arti" => "Merak",
                                "huruf" => array_unique(["طَ","ا","وُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "بِطْرِيْقٌ",
                                "arti" => "Pinguin",
                                "huruf" => array_unique(["بِ","طْ","رِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "إِوَزَّةٌ",
                                "arti" => "Angsa",
                                "huruf" => array_unique(["إِ","وَ","زَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَهْدٌ",
                                "arti" => "Macan tutul",
                                "huruf" => array_unique(["فَ","هْ","دٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 140')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 139");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 141");
                        $data['materi'] = "Mufrodat 140";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Tingkah Laku 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 140");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "زَئِيْرُ الْأَسَدِ",
                                "arti" => "Auman singa",
                                "huruf" => array_unique(["زَ","ئِ","يْ","رُ","_","ا","لْ","أَ","سَ","دِ"])
                            ],
                            [
                                "kata_arab" => "نُبَاحُ الْكَلْبِ",
                                "arti" => "Gonggongan anjing",
                                "huruf" => array_unique(["نُ","بَ","ا","حُ","_","ا","لْ","كَ","لْ","بِ"])
                            ],
                            [
                                "kata_arab" => "ثُغَاءُ الْغَنَمِ",
                                "arti" => "Embikan kambing",
                                "huruf" => array_unique(["ثُ","غَ","ا","ءُ","_","ا","لْ","غَ","نَ","مِ"])
                            ],
                            [
                                "kata_arab" => "دَوِيُّ النَّحْلِ",
                                "arti" => "Dengungan lebah",
                                "huruf" => array_unique(["دَ","وِ","يُّ","_","ا","ل","نَّ","حْ","لِ"])
                            ],
                            [
                                "kata_arab" => "صَفِيْرُ الطَّيْرِ",
                                "arti" => "Kicauan burung",
                                "huruf" => array_unique(["صَ","فِ","يْ","رُ","_","ا","ل","طَّ","يْ","رِ"])
                            ],
                            [
                                "kata_arab" => "خُوَارُ الْبَقَرِ",
                                "arti" => "Lenguhan sapi",
                                "huruf" => array_unique(["خُ","وَ","ا","رُ","_","ا","لْ","بَ","قَ","رِ"])
                            ],
                            [
                                "kata_arab" => "قَوْقُ الدِّيْكِ",
                                "arti" => "Kokokan ayam",
                                "huruf" => array_unique(["قَ","وْ","قُ","_","ا","ل","دِّ","يْ","كِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 141')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 140");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 142");
                        $data['materi'] = "Mufrodat 141";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Tingkah Laku 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 141");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَحِيْحُ الثُّعْبَانِ",
                                "arti" => "Desisan ular",
                                "huruf" => array_unique(["فَ","حِ","يْ","حُ","_","ا","ل","ثُّ","عْ","بَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "نَقِيْقُ الضِّفْدَعِ",
                                "arti" => "Suara katak",
                                "huruf" => array_unique(["نَ","قِ","يْ","قُ","_","ا","ل","ضِّ","فْ","دَ","عِ"])
                            ],
                            [
                                "kata_arab" => "بَطْبَطَةُ الْبَطَّةِ",
                                "arti" => "Suara itik",
                                "huruf" => array_unique(["بَ","طْ","بَ","طَ","ةُ","_","ا","لْ","بَ","طَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "نَعِيْبُ الْغُرَابِ",
                                "arti" => "Suara gagak",
                                "huruf" => array_unique(["نَ","عِ","يْ","بُ","_","ا","لْ","غُ","رَ","ا","بِ"])
                            ],
                            [
                                "kata_arab" => "مُوَاءُ الْهِرِّ",
                                "arti" => "Meongan kucing",
                                "huruf" => array_unique(["مُ","وَ","ا","ءُ","_","ا","لْ","هِ","رِّ"])
                            ],
                            [
                                "kata_arab" => "صَهِيْلُ الْخَيْلِ",
                                "arti" => "Ringkikan kuda",
                                "huruf" => array_unique(["صَ","هِ","يْ","لُ","_","ا","لْ","خَ","يْ","لِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 142')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 141");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 142";
                        $data['tema'] = "Hewan-hewan";
                        $data['title'] = "Tingkah Laku 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 142");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عُوَاءُ الذِّئْبِ",
                                "arti" => "Auman serigala",
                                "huruf" => array_unique(["عُ","وَ","ا","ءُ","_","ا","ل","ذِّ","ئْ","بِ"])
                            ],
                            [
                                "kata_arab" => "نَهِيْقُ الْحِمَارِ",
                                "arti" => "Suara keledai",
                                "huruf" => array_unique(["نَ","هِ","يْ","قُ","_","ا","لْ","حِ","مَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "قُرْصَةُ الْبَعُوْضَةِ",
                                "arti" => "Gigitan nyamuk",
                                "huruf" => array_unique(["قُ","رْ","صَ","ةُ","_","ا","لْ","بَ","عُ","وْ","ضَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "لَدْغَةُ النَّحْلِ",
                                "arti" => "Sengatan lebah",
                                "huruf" => array_unique(["لَ","دْ","غَ","ةُ","_","ا","ل","نَّ","حْ","لِ"])
                            ],
                            [
                                "kata_arab" => "خَدْشُ النَّمِرِ",
                                "arti" => "Cakaran harimau",
                                "huruf" => array_unique(["خَ","دْ","شُ","_","ا","ل","نَّ","مِ","رِ"])
                            ],
                            [
                                "kata_arab" => "نَقْرُ الطَّيْرِ",
                                "arti" => "Patukan burung",
                                "huruf" => array_unique(["نَ","قْ","رُ","_","ا","ل","طَّ","يْ","رِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 143')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 144");
                        $data['materi'] = "Mufrodat 143";
                        $data['tema'] = "Buah, Sayuran dan Tumbuhan";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 143");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَاكِهَةٌ",
                                "arti" => "Buah",
                                "huruf" => array_unique(["فَ","ا","كِ","هَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُضْرَوَاتٌ",
                                "arti" => "Sayuran",
                                "huruf" => array_unique(["خُ","ضْ","رَ","وَ","ا","تٌ"])
                            ],
                            [
                                "kata_arab" => "تُفَاحٌ",
                                "arti" => "Apel",
                                "huruf" => array_unique(["تُ","فَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "عِنَبٌ",
                                "arti" => "Anggur",
                                "huruf" => array_unique(["عِ","نَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْزٌ",
                                "arti" => "Pisang",
                                "huruf" => array_unique(["مَ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "تَمْرٌ",
                                "arti" => "Kurma",
                                "huruf" => array_unique(["تَ","مْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رُمَّانٌ",
                                "arti" => "Delima",
                                "huruf" => array_unique(["رُ","مَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "بَاذِنْجَانٌ",
                                "arti" => "Terong",
                                "huruf" => array_unique(["بَ","ا","ذِ","نْ","جَ","ا","نٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 144')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 143");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 145");
                        $data['materi'] = "Mufrodat 144";
                        $data['tema'] = "Buah, Sayuran dan Tumbuhan";
                        $data['title'] = "Bagian 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 144");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ثَمْرَةٌ نَجْمِيَّةٌ",
                                "arti" => "Belimbing",
                                "huruf" => array_unique(["ثَ","مْ","رَ","ةٌ","_","نَ","جْ","مِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بُرْتُقَالٌ",
                                "arti" => "Jeruk",
                                "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَّافَةٌ",
                                "arti" => "Jambu",
                                "huruf" => array_unique(["جَ","وَّ","ا","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَمَّامٌ",
                                "arti" => "Melon",
                                "huruf" => array_unique(["شَ","مَّ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "بِطِّيْخٌ",
                                "arti" => "Semangka",
                                "huruf" => array_unique(["بِ","طِّ","يْ","خٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَاوَلَةٌ",
                                "arti" => "Strawberry",
                                "huruf" => array_unique(["فَ","رَ","ا","وَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَنَانَسْ",
                                "arti" => "Nanas",
                                "huruf" => array_unique(["أَ","نَ","ا","نَ","سْ"])
                            ],
                            [
                                "kata_arab" => "مَانْغَا",
                                "arti" => "Mangga",
                                "huruf" => array_unique(["مَ","ا","نْ","غَ","ا"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 145')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 144");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 146");
                        $data['materi'] = "Mufrodat 145";
                        $data['tema'] = "Buah, Sayuran dan Tumbuhan";
                        $data['title'] = "Bagian 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 145");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَابَايَا",
                                "arti" => "Pepaya",
                                "huruf" => array_unique(["بَ","ا","بَ","ا","يَ","ا"])
                            ],
                            [
                                "kata_arab" => "قَصَبُ السُّكَّرِ",
                                "arti" => "Tebu",
                                "huruf" => array_unique(["قَ","صَ","بُ","_","ا","ل","سُّ","كَّ","رِ"])
                            ],
                            [
                                "kata_arab" => "ذُرَّةٌ",
                                "arti" => "Jagung",
                                "huruf" => array_unique(["ذُ","رَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَمَاطِمُ",
                                "arti" => "Tomat",
                                "huruf" => array_unique(["طَ","مَ","ا","طِ","مُ"])
                            ],
                            [
                                "kata_arab" => "خِيَارٌ",
                                "arti" => "Mentimun",
                                "huruf" => array_unique(["خِ","يَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَصَلٌ",
                                "arti" => "Bawang merah",
                                "huruf" => array_unique(["بَ","صَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ثَوْمٌ",
                                "arti" => "Bawang putih",
                                "huruf" => array_unique(["ثَ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "جَزَرٌ",
                                "arti" => "Wortel",
                                "huruf" => array_unique(["جَ","زَ","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 146')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 145");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 147");
                        $data['materi'] = "Mufrodat 146";
                        $data['tema'] = "Buah, Sayuran dan Tumbuhan";
                        $data['title'] = "Bagian 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 146");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَطَاطِسُ",
                                "arti" => "Kentang",
                                "huruf" => array_unique(["بَ","طَ","ا","طِ","سُ"])
                            ],
                            [
                                "kata_arab" => "فَاصُوْلِيَةٌ",
                                "arti" => "Kacang panjang / buncis",
                                "huruf" => array_unique(["فَ","ا","صُ","وْ","لِ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَبَانِخٌ",
                                "arti" => "Bayam",
                                "huruf" => array_unique(["سَ","بَ","ا","نِ","خٌ"])
                            ],
                            [
                                "kata_arab" => "كُرُنْبٌ",
                                "arti" => "Kol",
                                "huruf" => array_unique(["كُ","رُ","نْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "فُوْلٌ",
                                "arti" => "Kacang kulit",
                                "huruf" => array_unique(["فُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "اَلْفُلْفُلُ الْأَحْمَرُ",
                                "arti" => "Cabe merah",
                                "huruf" => array_unique(["اَ","لْ","فُ","لْ","فُ","لُ","_","ا","لْ","أَ","حْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "اَلْفُلْفُلُ الْأَخْضَرُ",
                                "arti" => "Cabe hijau",
                                "huruf" => array_unique(["اَ","لْ","فُ","لْ","فُ","لُ","_","ا","لْ","أَ","خْ","ضَ","رُ"])
                            ],
                            [
                                "kata_arab" => "يَقْطِيْنٌ",
                                "arti" => "Labu",
                                "huruf" => array_unique(["يَ","قْ","طِ","يْ","نٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 147')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 146");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 148");
                        $data['materi'] = "Mufrodat 147";
                        $data['tema'] = "Buah, Sayuran dan Tumbuhan";
                        $data['title'] = "Bagian 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 147");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "زَنْجَبِيْلٌ",
                                "arti" => "Jahe",
                                "huruf" => array_unique(["زَ","نْ","جَ","بِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَوَادِرُ",
                                "arti" => "Toge",
                                "huruf" => array_unique(["بَ","وَ","ا","دِ","رُ"])
                            ],
                            [
                                "kata_arab" => "كُرْكُمٌ",
                                "arti" => "Kunyit",
                                "huruf" => array_unique(["كُ","رْ","كُ","مٌ"])
                            ],
                            [
                                "kata_arab" => "خَسٌّ",
                                "arti" => "Daun seledri",
                                "huruf" => array_unique(["خَ","سٌّ"])
                            ],
                            [
                                "kata_arab" => "كَزْبَرَةٌ",
                                "arti" => "Ketumbar",
                                "huruf" => array_unique(["كَ","زْ","بَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَبَّةٌ",
                                "arti" => "Biji",
                                "huruf" => array_unique(["حَ","بَّ","ةٌ"])
                            ],
                            [
                                "kata_arab"=> "شَجَرٌ",
                                "arti" => "Pohon",
                                "huruf" => array_unique([شَجَرٌ])
                            ],
                            [
                                "kata_arab"=> "خَشَبُ السَّاجِ",
                                "arti" => "Pohon jati",
                                "huruf" => array_unique(["خَ","شَ","بُ","_","ا","ل","سَّ","ا","جِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 148')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 147");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 148";
                        $data['tema'] = "Buah, Sayuran dan Tumbuhan";
                        $data['title'] = "Bagian 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 148");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَشِيْشَةُ الْبَحْرِ",
                                "arti" => "Rumput laut",
                                "huruf" => array_unique(["حَ","شِ","يْ","شَ","ةُ","_","ا","لْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "زَهْرَةٌ",
                                "arti" => "Bunga",
                                "huruf" => array_unique(["زَ","هْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وَرْدَةٌ",
                                "arti" => "Mawar",
                                "huruf" => array_unique(["وَ","رْ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "يَاسْمِيْنُ",
                                "arti" => "Melati",
                                "huruf" => array_unique(["يَ","ا","سْ","مِ","يْ","نُ"])
                            ],
                            [
                                "kata_arab" => "دَوَّارُ الشَّمْسِ",
                                "arti" => "Bunga matahari",
                                "huruf" => array_unique(["دَ","وَّ","ا","رُ","_","ا","ل","شَّ","مْ","سِ"])
                            ],
                            [
                                "kata_arab" => "أُشْنَةٌ",
                                "arti" => "Lumut",
                                "huruf" => array_unique(["أُ","شْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَشْنِيْنْ",
                                "arti" => "Teratai",
                                "huruf" => array_unique(["بَ","شْ","نِ","يْ","نْ"])
                            ],
                            [
                                "kata_arab" => "صُبَارٌ",
                                "arti" => "Kaktus",
                                "huruf" => array_unique(["صُ","بَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab"=> "عُشْبٌ",
                                "arti" => "Rumput",
                                "huruf" => array_unique(["عُ","شْ","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 149')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 150");
                        $data['materi'] = "Mufrodat 149";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 149");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جِسْمٌ",
                                "arti" => "Tubuh/Badan",
                                "huruf" => array_unique(["جِ","سْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "رَأْسٌ",
                                "arti" => "Kepala",
                                "huruf" => array_unique(["رَ","أْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُخٌّ",
                                "arti" => "Otak",
                                "huruf" => array_unique(["مُ","خٌّ"])
                            ],
                            [
                                "kata_arab" => "عَقْلٌ",
                                "arti" => ": Akal",
                                "huruf" => array_unique(["عَ","قْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شَعْرٌ",
                                "arti" => "Rambut",
                                "huruf" => array_unique(["شَ","عْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "نَاصِيَةٌ",
                                "arti" => "Ubun-ubun",
                                "huruf" => array_unique(["نَ","ا","صِ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وَجْهٌ",
                                "arti" => "Wajah/Muka",
                                "huruf" => array_unique(["وَ","جْ","هٌ"])
                            ],
                            [
                                "kata_arab" => "جَبْهَةٌ",
                                "arti" => "Dahi/Kening",
                                "huruf" => array_unique(["جَ","بْ","هَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 150')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 149");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 151");
                        $data['materi'] = "Mufrodat 150";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 150");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَاجِبٌ",
                                "arti" => "Alis",
                                "huruf" => array_unique(["حَ","ا","جِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "عَيْنٌ",
                                "arti" => "Mata",
                                "huruf" => array_unique(["عَ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "هُدْبٌ",
                                "arti" => "Bulu mata",
                                "huruf" => array_unique(["هُ","دْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "جَفْنٌ",
                                "arti" => "Kelopak",
                                "huruf" => array_unique(["جَ","فْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "صُدْغٌ",
                                "arti" => "Pelipis",
                                "huruf" => array_unique(["صُ","دْ","غٌ"])
                            ],
                            [
                                "kata_arab" => "مُقْلَةٌ",
                                "arti" => "Bola mata",
                                "huruf" => array_unique(["مُ","قْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَدَقَةٌ",
                                "arti" => "Hitam mata",
                                "huruf" => array_unique(["حَ","دَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَمَصٌ",
                                "arti" => "Kotoran mata",
                                "huruf" => array_unique(["رَ","مَ","صٌ"])
                            ]
                        ];
                    }
                // 101 - 150
                
                // 151 - 200
                    else if($_GET['id'] == MD5('Mufrodat 151')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 150");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 152");
                        $data['materi'] = "Mufrodat 151";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 151");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَمْعٌ",
                                "arti" => "Air mata",
                                "huruf" => array_unique(["دَ","مْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "أَنْفٌ",
                                "arti" => "Hidung",
                                "huruf" => array_unique(["أَ","نْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مِنْخَرٌ",
                                "arti" => "Lubang hidung",
                                "huruf" => array_unique(["مِ","نْ","خَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُخَاطٌ",
                                "arti" => "Ingus",
                                "huruf" => array_unique(["مُ","خَ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "خَدٌّ",
                                "arti" => "Pipi",
                                "huruf" => array_unique(["خَ","دٌّ"])
                            ],
                            [
                                "kata_arab" => "فَمٌ",
                                "arti" => "Mulut",
                                "huruf" => array_unique(["فَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَفَةٌ",
                                "arti" => "Bibir",
                                "huruf" => array_unique(["شَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِنٌّ",
                                "arti" => "Gigi",
                                "huruf" => array_unique(["سِ","نٌّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 152')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 151");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 153");
                        $data['materi'] = "Mufrodat 152";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 152");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جُمْجُمَةٌ",
                                "arti" => "Tengkorak",
                                "huruf" => array_unique(["جُ","مْ","جُ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِسَانٌ",
                                "arti" => "Lidah / lisan",
                                "huruf" => array_unique(["لِ","سَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "بُصَاقٌ",
                                "arti" => "Ludah",
                                "huruf" => array_unique(["بُ","صَ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "لُعَابٌ",
                                "arti" => "Air liur",
                                "huruf" => array_unique(["لُ","عَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "نُخَامَةٌ",
                                "arti" => "Dahak",
                                "huruf" => array_unique(["نُ","خَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لَوْزَةُ الْحَلْقِ",
                                "arti" => "Amandel",
                                "huruf" => array_unique(["لَ","وْ","زَ","ةُ","_","ا","لْ","حَ","لْ","قِ"])
                            ],
                            [
                                "kata_arab" => "حَرْقَدَةٌ",
                                "arti" => "Jakun",
                                "huruf" => array_unique(["حَ","رْ","قَ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أُذُنٌ",
                                "arti" => "Telinga",
                                "huruf" => array_unique(["أُ","ذُ","نٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 153')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 152");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 154");
                        $data['materi'] = "Mufrodat 153";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 153");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ذَقَنٌ",
                                "arti" => "Dagu",
                                "huruf" => array_unique(["ذَ","قَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَارِبٌ",
                                "arti" => "Kumis",
                                "huruf" => array_unique(["شَ","ا","رِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "لِحْيَةٌ",
                                "arti" => "Jenggot",
                                "huruf" => array_unique(["لِ","حْ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَارِضٌ",
                                "arti" => "Jambang",
                                "huruf" => array_unique(["عَ","ا","رِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "عُنُقٌ",
                                "arti" => "Leher",
                                "huruf" => array_unique(["عُ","نُ","قٌ"])
                            ],
                            [
                                "kata_arab" => "كَتِفٌ",
                                "arti" => "Pundak",
                                "huruf" => array_unique(["كَ","تِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "صَدْرٌ",
                                "arti" => "Dada",
                                "huruf" => array_unique(["صَ","دْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ثَدْيٌ",
                                "arti" => "Buah dada",
                                "huruf" => array_unique(["ثَ","دْ","يٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 154')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 153");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 155");
                        $data['materi'] = "Mufrodat 154";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 154");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَلَمَةٌ",
                                "arti" => "Puting",
                                "huruf" => array_unique(["حَ","لَ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سُرَّةٌ",
                                "arti" => "Pusar",
                                "huruf" => array_unique(["سُ","رَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَلْبٌ",
                                "arti" => "Jantung",
                                "huruf" => array_unique(["قَ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كُلْيَةٌ",
                                "arti" => "Ginjal",
                                "huruf" => array_unique(["كُ","لْ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْيٌ",
                                "arti" => "Usus",
                                "huruf" => array_unique(["مَ","عْ","يٌ"])
                            ],
                            [
                                "kata_arab" => "كَبِدٌ",
                                "arti" => "Hati",
                                "huruf" => array_unique(["كَ","بِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "رِئَةٌ",
                                "arti" => "Paru-paru",
                                "huruf" => array_unique(["رِ","ئَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "ظَهْرٌ",
                                "arti" => "Punggung",
                                "huruf" => array_unique(["ظَ","هْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 155')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 154");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 156");
                        $data['materi'] = "Mufrodat 155";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 155");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَطْنٌ",
                                "arti" => "Perut",
                                "huruf" => array_unique(["بَ","طْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "يَدٌ",
                                "arti" => "Tangan",
                                "huruf" => array_unique(["يَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "كَفٌّ",
                                "arti" => "Telapak tangan",
                                "huruf" => array_unique(["كَ","فٌّ"])
                            ],
                            [
                                "kata_arab" => "مِعْصَمٌ",
                                "arti" => "Pergelangan tangan",
                                "huruf" => array_unique(["مِ","عْ","صَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "أَصْبَعٌ",
                                "arti" => "Jari",
                                "huruf" => array_unique(["أَ","صْ","بَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "سَبَابَةٌ",
                                "arti" => "Jari telunjuk",
                                "huruf" => array_unique(["سَ","بَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وُسْطَى",
                                "arti" => "Jari tengah",
                                "huruf" => array_unique(["وُ","سْ","طَ","ى"])
                            ],
                            [
                                "kata_arab" => "بِنْصَرٌ",
                                "arti" => "Jari manis",
                                "huruf" => array_unique(["بِ","نْ","صَ","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 156')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 155");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 157");
                        $data['materi'] = "Mufrodat 156";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 156");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خِنْصَرٌ",
                                "arti" => "Jari kelingking",
                                "huruf" => array_unique(["خِ","نْ","صَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "إِبْهَامٌ",
                                "arti" => "Ibu jari (jempol)",
                                "huruf" => array_unique(["إِ","بْ","هَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "ظُفْرٌ",
                                "arti" => "Kuku",
                                "huruf" => array_unique(["ظُ","فْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْفَقٌ",
                                "arti" => "Siku",
                                "huruf" => array_unique(["مِ","رْ","فَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "دُبُرٌ",
                                "arti" => "Pantat",
                                "huruf" => array_unique(["دُ","بُ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَوْلٌ",
                                "arti" => "Kencing",
                                "huruf" => array_unique(["بَ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "غَائِطٌ",
                                "arti" => "Tahi",
                                "huruf" => array_unique(["غَ","ا","ئِ","طٌ"])
                            ],
                            [
                                "kata_arab" => "ضُرَاطٌ",
                                "arti" => "Kentut (dengan bunyi)",
                                "huruf" => array_unique(["ضُ","رَ","ا","طٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 157')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 156");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 158");
                        $data['materi'] = "Mufrodat 157";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 9";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 157");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فُسَاءٌ",
                                "arti" => "Kentut (tidak bunyi)",
                                "huruf" => array_unique(["فُ","سَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "رِجْلٌ",
                                "arti" => "Kaki",
                                "huruf" => array_unique(["رِ","جْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "فَخِذٌ",
                                "arti" => "Paha",
                                "huruf" => array_unique(["فَ","خِ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "رُكْبَةٌ",
                                "arti" => "Lutut",
                                "huruf" => array_unique(["رُ","كْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاقٌ",
                                "arti" => "Betis",
                                "huruf" => array_unique(["سَ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "كَعْبٌ",
                                "arti" => "Mata kaki",
                                "huruf" => array_unique(["كَ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "قَدَمٌ",
                                "arti" => "Kaki (dari pergelangan)",
                                "huruf" => array_unique(["قَ","دَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "عَقَبٌ",
                                "arti" => "Tumit",
                                "huruf" => array_unique(["عَ","قَ","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 158')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 157");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 159");
                        $data['materi'] = "Mufrodat 158";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 10";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 158");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَضَلَاتٌ",
                                "arti" => "Otot-otot",
                                "huruf" => array_unique(["عَ","ضَ","لَ","ا","تٌ"])
                            ],
                            [
                                "kata_arab" => "لَحْمٌ",
                                "arti" => "Daging",
                                "huruf" => array_unique(["لَ","حْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَحْمٌ",
                                "arti" => "Lemak",
                                "huruf" => array_unique(["شَ","حْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "عَظْمٌ",
                                "arti" => "Tulang",
                                "huruf" => array_unique(["عَ","ظْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَامَةٌ",
                                "arti" => "Tahi lalat",
                                "huruf" => array_unique(["شَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جِلْدٌ",
                                "arti" => "Kulit",
                                "huruf" => array_unique(["جِ","لْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَسَامٌ",
                                "arti" => "Pori-pori",
                                "huruf" => array_unique(["مَ","سَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "عِرْقٌ",
                                "arti" => "Urat",
                                "huruf" => array_unique(["عِ","رْ","قٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 159')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 158");
                        $data['next'] = "";
                        $data['materi'] = "Mufrodat 159";
                        $data['tema'] = "Anggota Tubuh";
                        $data['title'] = "Bagian 11";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 159");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَرَقٌ",
                                "arti" => "Keringat",
                                "huruf" => array_unique(["عَ","رَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "دَمٌ",
                                "arti" => "Darah",
                                "huruf" => array_unique(["دَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "قَيْحٌ",
                                "arti" => "Nanah",
                                "huruf" => array_unique(["قَ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "شَيْبَةٌ",
                                "arti" => "Uban",
                                "huruf" => array_unique(["شَ","يْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَانَةٌ",
                                "arti" => "Rambut kemaluan",
                                "huruf" => array_unique(["عَ","ا","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِثَّةٌ",
                                "arti" => "Gusi",
                                "huruf" => array_unique(["لِ","ثَّ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 160')){
                        $data['materi'] = "Mufrodat 160";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 160");
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 161");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَمَّاعَةٌ",
                                "arti" => "Headset",
                                "huruf" => array_unique(["سَ","مَّ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَطَّارِيَّةٌ",
                                "arti" => "Baterai",
                                "huruf" => array_unique(["بَ","طَّ","ا","رِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَحْمُوْلٌ",
                                "arti" => "Laptop",
                                "huruf" => array_unique(["مَ","حْ","مُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "تِلْفَازٌ",
                                "arti" => "Televisi",
                                "huruf" => array_unique(["تِ","لْ","فَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْوَحَةٌ",
                                "arti" => "Kipas angin",
                                "huruf" => array_unique(["مِ","رْ","وَ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِكْنَسَةٌ كَهْرُبَائِيَّةٌ",
                                "arti" => "Vacuum cleaner",
                                "huruf" => array_unique(["مِ","كْ","نَ","سَ","ةٌ","_","كَ","هْ","رُ","بَ","ا","ئِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَرَّادَةٌ",
                                "arti" => "Dispenser",
                                "huruf" => array_unique(["بَ","رَّ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "اَلْقِدْرُ الْكَهْرُبَائِيُّ",
                                "arti" => "Rice cooker",
                                "huruf" => array_unique(["اَ","لْ","قِ","دْ","رُ","_","ا","لْ","كَ","هْ","رُ","بَ","ا","ئِ","يُّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 161')){
                        $data['materi'] = "Mufrodat 161";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 161");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 160");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 162");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَمَّاعَةٌ",
                                "arti" => "Headset",
                                "huruf" => array_unique(["سَ","مَّ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِكْوَاةٌ",
                                "arti" => "Setrika",
                                "huruf" => array_unique(["مِ","كْ","وَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَصَّارَةٌ",
                                "arti" => "Blender",
                                "huruf" => array_unique(["عَ","صَّ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُجَفِّفٌ",
                                "arti" => "Hair dryer",
                                "huruf" => array_unique(["مُ","جَ","فِّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "غَسَّالَةٌ",
                                "arti" => "Mesin cuci",
                                "huruf" => array_unique(["غَ","سَّ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُسَجِّلٌ",
                                "arti" => "Perekam suara",
                                "huruf" => array_unique(["مُ","سَ","جِّ","لٌ"])
                            ],
                            [
                                "kata_arab" => "هَاتِفٌ",
                                "arti" => "Telephone",
                                "huruf" => array_unique(["هَ","ا","تِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْبَسٌ",
                                "arti" => "Stop kontak",
                                "huruf" => array_unique(["مِ","قْ","بَ","سٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 162')){
                        $data['materi'] = "Mufrodat 162";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 162");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 161");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 163");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَامِيْرَا",
                                "arti" => "Kamera",
                                "huruf" => array_unique(["كَ","ا","مِ","يْ","رَ","ا"])
                            ],
                            [
                                "kata_arab" => "طَابِعَةٌ",
                                "arti" => "Printer",
                                "huruf" => array_unique(["طَ","ا","بِ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "آلَةُ التَّصْوِيْرِ",
                                "arti" => "Mesin fotokopi",
                                "huruf" => array_unique(["آ","لَ","ةُ","_","ا","ل","تَّ","صْ","وِ","يْ","رِ"])
                            ],
                            [
                                "kata_arab" => "مِثْقَبٌ",
                                "arti" => "Bor",
                                "huruf" => array_unique(["مِ","ثْ","قَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "بَرْقِيَّةٌ",
                                "arti" => "Telegram",
                                "huruf" => array_unique(["بَ","رْ","قِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُكَيِّفٌ",
                                "arti" => "Adaptor",
                                "huruf" => array_unique(["مُ","كَ","يِّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "تِلِسْكُوْبٌ",
                                "arti" => "Teleskop",
                                "huruf" => array_unique(["تِ","لِ","سْ","كُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُخَيِّطَةٌ",
                                "arti" => "Mesin jahit",
                                "huruf" => array_unique(["مُ","خَ","يِّ","طَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 163')){
                        $data['materi'] = "Mufrodat 163";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 4";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 163");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 162");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 164");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُكَيِّفُ الْهَوَاءِ",
                                "arti" => "AC",
                                "huruf" => array_unique(["مُ","كَ","يِّ","فُ","_","ا","لْ","هَ","وَ","ا","ءِ"])
                            ],
                            [
                                "kata_arab" => "مِصْعَدَةٌ",
                                "arti" => "Lift",
                                "huruf" => array_unique(["مِ","صْ","عَ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِسْمَارٌ",
                                "arti" => "Paku",
                                "huruf" => array_unique(["مِ","سْ","مَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِطْرَقَةٌ",
                                "arti" => "Palu",
                                "huruf" => array_unique(["مِ","طْ","رَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَأْسٌ",
                                "arti" => "Kapak",
                                "huruf" => array_unique(["فَ","أْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مِنْشَارٌ",
                                "arti" => "Gergaji",
                                "huruf" => array_unique(["مِ","نْ","شَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِفَكٌّ",
                                "arti" => "Obeng",
                                "huruf" => array_unique(["مِ","فَ","كٌّ"])
                            ],
                            [
                                "kata_arab" => "بُرْغِيٌّ",
                                "arti" => "Baut",
                                "huruf" => array_unique(["بُ","رْ","غِ","يٌّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 164')){
                        $data['materi'] = "Mufrodat 164";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 5";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 164");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 163");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 165");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَدِيْدٌ",
                                "arti" => "Besi",
                                "huruf" => array_unique(["حَ","دِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "صُلْبٌ",
                                "arti" => "Baja",
                                "huruf" => array_unique(["صُ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "نُحَاسٌ",
                                "arti" => "Tembaga",
                                "huruf" => array_unique(["نُ","حَ","ا","سٌ"])
                            ],
                            [
                                "kata_arab" => "قِرْمِيْدٌ",
                                "arti" => "Genteng",
                                "huruf" => array_unique(["قِ","رْ","مِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "أُنْبُوْبٌ",
                                "arti" => "Pipa",
                                "huruf" => array_unique(["أُ","نْ","بُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "خُرْطُوْمٌ",
                                "arti" => "Selang",
                                "huruf" => array_unique(["خُ","رْ","طُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "سِلْكٌ",
                                "arti" => "Kabel/Kawat",
                                "huruf" => array_unique(["سِ","لْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مَغْنَطِيْسٌ",
                                "arti" => "Magnet",
                                "huruf" => array_unique(["مَ","غْ","نَ","طِ","يْ","سٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 165')){
                        $data['materi'] = "Mufrodat 165";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 6";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 165");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 164");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 166");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَبِنَةٌ",
                                "arti" => "Batu bata",
                                "huruf" => array_unique(["لَ","بِ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَحَالَةٌ",
                                "arti" => "Katrol",
                                "huruf" => array_unique(["مَ","حَ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْزَقَةٌ",
                                "arti" => "Cangkul",
                                "huruf" => array_unique(["مِ","عْ","زَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَحْمٌ",
                                "arti" => "Arang",
                                "huruf" => array_unique(["فَ","حْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْحَاضٌ",
                                "arti" => "Kloset",
                                "huruf" => array_unique(["مِ","رْ","حَ","ا","ضٌ"])
                            ],
                            [
                                "kata_arab" => "قُبَّةٌ",
                                "arti" => "Kubah",
                                "huruf" => array_unique(["قُ","بَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَلَاسْتِيْكٌ",
                                "arti" => "Plastik",
                                "huruf" => array_unique(["بَ","لَ","ا","سْ","تِ","يْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "قَصَبٌ",
                                "arti" => "Bambu",
                                "huruf" => array_unique(["قَ","صَ","بٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 166')){
                        $data['materi'] = "Mufrodat 166";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 7";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 166");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 165");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 167");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رُخَامَةٌ",
                                "arti" => "Marmer",
                                "huruf" => array_unique(["رُ","خَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "آلَةُ الْحِسَابِ",
                                "arti" => "Kalkulator",
                                "huruf" => array_unique(["آ","لَ","ةُ","_","ا","لْ","حِ","سَ","ا","بِ"])
                            ],
                            [
                                "kata_arab" => "ثَقْلَةٌ",
                                "arti" => "Barbel",
                                "huruf" => array_unique(["ثَ","قْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِنْفَاخٌ",
                                "arti" => "Pompa",
                                "huruf" => array_unique(["مِ","نْ","فَ","ا","خٌ"])
                            ],
                            [
                                "kata_arab" => "آلَةٌ",
                                "arti" => "Alat",
                                "huruf" => array_unique(["آ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَصَا",
                                "arti" => "Tongkat",
                                "huruf" => array_unique(["عَ","صَ","ا"])
                            ],
                            [
                                "kata_arab" => "بَوْصَلَةٌ",
                                "arti" => "Kompas",
                                "huruf" => array_unique(["بَ","وْ","صَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِذْيَاعٌ",
                                "arti" => "Radio",
                                "huruf" => array_unique(["مِ","ذْ","يَ","ا","عٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 167')){
                        $data['materi'] = "Mufrodat 167";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 8";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 167");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 166");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 168");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فُرْنٌ",
                                "arti" => ": Oven",
                                "huruf" => array_unique(["فُ","رْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "تِرْمُوْسٌ",
                                "arti" => ": Termos",
                                "huruf" => array_unique(["تِ","رْ","مُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْقِدٌ",
                                "arti" => ": Kompor",
                                "huruf" => array_unique(["مَ","وْ","قِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "غَازٌ",
                                "arti" => ": Gas",
                                "huruf" => array_unique(["غَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "أَرِيْكَةٌ",
                                "arti" => "Sofa",
                                "huruf" => array_unique(["أَ","رِ","يْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كُرْسِيٌّ",
                                "arti" => "Kursi",
                                "huruf" => array_unique(["كُ","رْ","سِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مَقْعَدٌ",
                                "arti" => "Bangku",
                                "huruf" => array_unique(["مَ","قْ","عَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "سَجَّادَةٌ",
                                "arti" => "Permadani",
                                "huruf" => array_unique(["سَ","جَّ","ا","دَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 168')){
                        $data['materi'] = "Mufrodat 168";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 9";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 168");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 167");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 169");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَصِيْرٌ",
                                "arti" => "Tikar",
                                "huruf" => array_unique(["حَ","صِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ثَلَّاجَةٌ",
                                "arti" => "Lemari es",
                                "huruf" => array_unique(["ثَ","لَّ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْلَاةٌ",
                                "arti" => "Wajan",
                                "huruf" => array_unique(["مِ","قْ","لَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِشْوَاةٌ",
                                "arti" => "Alat panggang",
                                "huruf" => array_unique(["مِ","شْ","وَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِكِّيْنٌ",
                                "arti" => "Pisau",
                                "huruf" => array_unique(["سِ","كِّ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "سَخَّانٌ",
                                "arti" => "Pemanas Air",
                                "huruf" => array_unique(["سَ","خَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "صَنْبُوْرٌ",
                                "arti" => "Kran",
                                "huruf" => array_unique(["صَ","نْ","بُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَاةٌ",
                                "arti" => "Sikat",
                                "huruf" => array_unique(["فُ","رْ","شَ","ا","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 169')){
                        $data['materi'] = "Mufrodat 169";
                        $data['tema'] = "Peralatan dan Perkakas";
                        $data['title'] = "Bagian 10";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 169");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 168");
                        $data['next'] = "";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كِبْرِيْتٌ",
                                "arti" => "Korek api",
                                "huruf" => array_unique(["كِ","بْ","رِ","يْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "قُفْلٌ",
                                "arti" => "Gembok",
                                "huruf" => array_unique(["قُ","فْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "زِيْرٌ",
                                "arti" => "Gentong",
                                "huruf" => array_unique(["زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رِيْشَةٌ",
                                "arti" => "Kemoceng",
                                "huruf" => array_unique(["رِ","يْ","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طِلَاءٌ",
                                "arti" => "Cat",
                                "huruf" => array_unique(["طِ","لَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَاةُ الطِّلَاءِ",
                                "arti" => "Kuas",
                                "huruf" => array_unique(["فُ","رْ","شَ","ا","ةُ","_","ا","ل","طِّ","لَ","ا","ءِ"])
                            ],
                            [
                                "kata_arab" => "صُنْدُوْقٌ",
                                "arti" => "Kotak",
                                "huruf" => array_unique(["صُ","نْ","دُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "شَمْعَةٌ",
                                "arti" => "Lilin",
                                "huruf" => array_unique(["شَ","مْ","عَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 170')){
                        $data['materi'] = "Mufrodat 170";
                        $data['tema'] = "Warna";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 170");
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 171");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَبْيَضُ",
                                "arti" => "Putih (lk)",
                                "huruf" => array_unique(["أَ","بْ","يَ","ضُ"])
                            ],
                            [
                                "kata_arab" => "بَيْضَاءُ",
                                "arti" => "Putih (pr)",
                                "huruf" => array_unique(["بَ","يْ","ضَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَسْوَدُ",
                                "arti" => "Hitam (lk)",
                                "huruf" => array_unique(["أَ","سْ","وَ","دُ"])
                            ],
                            [
                                "kata_arab" => "سَوْدَاءُ",
                                "arti" => "Hitam (pr)",
                                "huruf" => array_unique(["سَ","وْ","دَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَحْمَرُ",
                                "arti" => "Merah (lk)",
                                "huruf" => array_unique(["أَ","حْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "حَمْرَاءُ",
                                "arti" => "Merah (pr)",
                                "huruf" => array_unique(["حَ","مْ","رَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَصْفَرُ",
                                "arti" => "Kuning (lk)",
                                "huruf" => array_unique(["أَ","صْ","فَ","رُ"])
                            ],
                            [
                                "kata_arab" => "صَفْرَاءُ",
                                "arti" => "Kuning (pr)",
                                "huruf" => array_unique(["صَ","فْ","رَ","ا","ءُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 171')){
                        $data['materi'] = "Mufrodat 171";
                        $data['tema'] = "Warna";
                        $data['title'] = "Bagian 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 171");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 170");
                        $data['next'] = "";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَخْضَرُ",
                                "arti" => "Hijau (lk)",
                                "huruf" => array_unique(["أَ","خْ","ضَ","رُ"])
                            ],
                            [
                                "kata_arab" => "خَضْرَاءُ",
                                "arti" => "Hijau (pr)",
                                "huruf" => array_unique(["خَ","ضْ","رَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَزْرَقُ",
                                "arti" => "Biru (lk)",
                                "huruf" => array_unique(["أَ","زْ","رَ","قُ"])
                            ],
                            [
                                "kata_arab" => "زَرْقَاءُ",
                                "arti" => "Biru (pr)",
                                "huruf" => array_unique(["زَ","رْ","قَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَرْمَدُ",
                                "arti" => "Abu-abu (lk)",
                                "huruf" => array_unique(["أَ","رْ","مَ","دُ"])
                            ],
                            [
                                "kata_arab" => "رَمْدَاءُ",
                                "arti" => "Abu-abu (pr)",
                                "huruf" => array_unique(["رَ","مْ","دَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَسْمَرُ",
                                "arti" => "Coklat (lk)",
                                "huruf" => array_unique(["أَ","سْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "سَمْرَاءُ",
                                "arti" => "Coklat (pr)",
                                "huruf" => array_unique(["سَ","مْ","رَ","ا","ءُ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 172')){
                        $data['materi'] = "Mufrodat 172";
                        $data['tema'] = "Rasa";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 172");
                        $data['back'] = "";
                        $data['next'] = "";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَذِيْذٌ",
                                "arti" => "Lezat",
                                "huruf" => array_unique(["لَ","ذِ","يْ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "حُلْوٌ",
                                "arti" => "Manis",
                                "huruf" => array_unique(["حُ","لْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "مُرٌّ",
                                "arti" => "Pahit",
                                "huruf" => array_unique(["مُ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "حَارٌّ",
                                "arti" => "Pedas",
                                "huruf" => array_unique(["حَ","ا","رٌّ"])
                            ],
                            [
                                "kata_arab" => "مَالِحٌ",
                                "arti" => "Asin",
                                "huruf" => array_unique(["مَ","ا","لِ","حٌ"])
                            ],
                            [
                                "kata_arab" => "عَافِضٌ",
                                "arti" => "Sepet",
                                "huruf" => array_unique(["عَ","ا","فِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "حَامِضٌ",
                                "arti" => "Kecut",
                                "huruf" => array_unique(["حَ","ا","مِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "عَذْبٌ",
                                "arti" => "Tawar",
                                "huruf" => array_unique(["عَ","ذْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "زَنِحٌ",
                                "arti" => "Tengik",
                                "huruf" => array_unique(["زَ","نِ","حٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 173')){
                        $data['materi'] = "Mufrodat 173";
                        $data['tema'] = "Sarana Transportasi";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 173");
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 174");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَيَّارَةٌ",
                                "arti" => "Mobil",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةُ الْأُجْرَةِ",
                                "arti" => "Taksi / angkot",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","ا","لْ","أُ","جْ","رَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "حَافِلَةٌ",
                                "arti" => "Bis",
                                "huruf" => array_unique(["حَ","ا","فِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَاحِنَةٌ",
                                "arti" => "Truk kontener",
                                "huruf" => array_unique(["شَ","ا","حِ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دَرَّاجَةٌ",
                                "arti" => "Sepeda",
                                "huruf" => array_unique(["دَ","رَّ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَّالَةٌ",
                                "arti" => "Sepeda motor",
                                "huruf" => array_unique(["جَ","وَّ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قِطَارٌ",
                                "arti" => "Kereta",
                                "huruf" => array_unique(["قِ","طَ","ا","رٌ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 174')){
                        $data['materi'] = "Mufrodat 174";
                        $data['tema'] = "Sarana Transportasi";
                        $data['title'] = "Bagian 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 174");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 173");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 175");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَفِيْنَةٌ",
                                "arti" => "Kapal laut",
                                "huruf" => array_unique(["سَ","فِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَائِرَةٌ",
                                "arti" => "Pesawat terbang",
                                "huruf" => array_unique(["طَ","ا","ئِ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِشَارَةٌ ضَوْئِيَّةٌ",
                                "arti" => "Lampu lalulintas",
                                "huruf" => array_unique(["إِ","شَ","ا","رَ","ةٌ","_","ضَ","وْ","ئِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تَذْكِرَةٌ",
                                "arti" => "Tiket",
                                "huruf" => array_unique(["تَ","ذْ","كِ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَازُ السَّفَرِ",
                                "arti" => "Paspor",
                                "huruf" => array_unique(["جَ","وَ","ا","زُ","_","ا","ل","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "تَأْشِيْرَةٌ",
                                "arti" => "Visa",
                                "huruf" => array_unique(["تَ","أْ","شِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تَأْشِيْرَةُ الدُّخُوْلِ",
                                "arti" => "Visa masuk",
                                "huruf" => array_unique(["تَ","أْ","شِ","يْ","رَ","ةُ","_","ا","ل","دُّ","خُ","وْ","لِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 175')){
                        $data['materi'] = "Mufrodat 175";
                        $data['tema'] = "Sarana Transportasi";
                        $data['title'] = "Bagian 3";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 175");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 174");
                        $data['next'] = "";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَأْشِيْرَةُ الْخُرُوْجِ",
                                "arti" => "Visa keluar",
                                "huruf" => array_unique(["تَ","أْ","شِ","يْ","رَ","ةُ","_","ا","لْ","خُ","رُ","وْ","جِ"])
                            ],
                            [
                                "kata_arab" => "دَرَجَةٌ أُوْلَى",
                                "arti" => "Kelas satu",
                                "huruf" => array_unique(["دَ","رَ","جَ","ةٌ","_","أُ","وْ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "دَرَجَةٌ سِيَاحِيَّةٌ",
                                "arti" => "Kelas ekonomi",
                                "huruf" => array_unique(["دَ","رَ","جَ","ةٌ","_","سِ","يَ","ا","حِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَالَةُ الْإِنْتِظَارِ",
                                "arti" => "Ruang tunggu",
                                "huruf" => array_unique(["صَ","ا","لَ","ةُ","_","ا","لْ","إِ","نْ","تِ","ظَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "سَائِحٌ",
                                "arti" => "Wisatawan / turis",
                                "huruf" => array_unique(["سَ","ا","ئِ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُسَافِرٌ",
                                "arti" => "Penumpang",
                                "huruf" => array_unique(["مُ","سَ","ا","فِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "أُجْرَةُ السَّفَرِ",
                                "arti" => "Ongkos",
                                "huruf" => array_unique(["أُ","جْ","رَ","ةُ","_","ا","ل","سَّ","فَ","رِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 176')){
                        $data['materi'] = "Mufrodat 176";
                        $data['tema'] = "Bentuk";
                        $data['title'] = "Bagian 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 176");
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 177");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُرَبَّعٌ",
                                "arti" => "Segi empat",
                                "huruf" => array_unique(["مُ","رَ","بَّ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَطِيْلٌ",
                                "arti" => "Persegi panjang",
                                "huruf" => array_unique(["مُ","سْ","تَ","طِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُكَعَّبٌ",
                                "arti" => "Kubus",
                                "huruf" => array_unique(["مُ","كَ","عَّ","بٌ"])
                            ],
                            [
                                "kata_arab" => "أُسْطُوَانِيٌّ",
                                "arti" => "Silinder",
                                "huruf" => array_unique(["أُ","سْ","طُ","وَ","ا","نِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُثَلَّثٌ",
                                "arti" => "Segi tiga",
                                "huruf" => array_unique(["مُ","ثَ","لَّ","ثٌ"])
                            ],
                            [
                                "kata_arab" => "مَخْرُوْطٌ",
                                "arti" => "Kerucut",
                                "huruf" => array_unique(["مَ","خْ","رُ","وْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَوَازِيْ الْمُسْتَطِيْلَاتِ",
                                "arti" => "Balok",
                                "huruf" => array_unique(["مُ","تَ","وَ","ا","زِ","يْ","_","ا","لْ","مُ","سْ","تَ","طِ","يْ","لَ","ا","تِ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 177')){
                        $data['materi'] = "Mufrodat 177";
                        $data['tema'] = "Bentuk";
                        $data['title'] = "Bagian 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 177");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 176");
                        $data['next'] = "";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَرَمٌ",
                                "arti" => "Limas",
                                "huruf" => array_unique(["هَ","رَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَقِيْمٌ",
                                "arti" => "Lurus",
                                "huruf" => array_unique(["مُ","سْ","تَ","قِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْحَنٍ",
                                "arti" => "Bengkok",
                                "huruf" => array_unique(["مُ","نْ","حَ","نٍ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَدِيْرٌ",
                                "arti" => "Lingkaran (bulat)",
                                "huruf" => array_unique(["مُ","سْ","تَ","دِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَيْضَوِيٌّ",
                                "arti" => "Oval",
                                "huruf" => array_unique(["بَ","يْ","ضَ","وِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "كُرَوِيٌّ",
                                "arti" => "Bola",
                                "huruf" => array_unique(["كُ","رَ","وِ","يٌّ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat ')){
                        $data['materi'] = "Mufrodat ";
                        $data['tema'] = "Sarana Transportasi";
                        $data['title'] = "Bagian";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat ");
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 157");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 159");
                        $data['mufrodat'] = [
                        ];
                    }
                // 151 - 200
                
                // view
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/menu-mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                // view

            } else if (!empty($_GET['latihan'])) {
                $urut = $_GET['i'];
                // 1 - 50
                    if($_GET['latihan'] == MD5('Murojaah')){
                        $data['materi'] = "Murojaah Mufrodat";
                        $data['tema'] = "Murojaah";
                        $data['redirect'] = "mufrodat/listmurojaah";
                        $data['mufrodat'] = $this->Admin_model->get_all("murojaah", ["id_user" => $id]);
                    } else if($_GET['latihan'] == MD5('Mufrodat 1')){
                        $data['materi'] = "Mufrodat 1";
                        $data['tema'] = "Tema 1";
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 1");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَابٌ",
                                "arti" => "Pintu",
                                "huruf" => array_unique(["بَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "نَافِذَةٌ",
                                "arti" => "Jendela",
                                "huruf" => array_unique(["نَ","ا","فِ","ذَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جِدَارٌ",
                                "arti" => "Tembok",
                                "huruf" => array_unique(["جِ","دَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "بِلَاطَةٌ",
                                "arti" => "Lantai",
                                "huruf" => array_unique(["بِ","لَ","ا","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَقْفٌ",
                                "arti" => "Atap",
                                "huruf" => array_unique(["سَ","قْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مِصْبَاحٌ",
                                "arti" => "Lampu",
                                "huruf" => array_unique(["مِ","صْ","بَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "مِفْتَاحٌ",
                                "arti" => "Kunci",
                                "huruf" => array_unique(["مِ","فْ","تَ","ا","حٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 2')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 2");
                        $data['materi'] = "Mufrodat 2";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَتَحَ-يَفْتَحُ",
                                "arti" => "Membuka",
                                "huruf" => array_unique(["فَ","تَ","حَ","-","يَ","فْ","تَ","حُ"])
                            ],
                            [
                                "kata_arab" => "أَغْلَقَ-يُغْلِقُ",
                                "arti" => "Menutup",
                                "huruf" => array_unique(["أَ","غْ","لَ","قَ","-","يُ","غْ","لِ","قُ"])
                            ],
                            [
                                "kata_arab" => "نَامَ-يَنَامُ",
                                "arti" => "Tidur",
                                "huruf" => array_unique(["نَ","ا","مَ","-","يَ","نَ","ا","مُ"])
                            ],
                            [
                                "kata_arab" => "كَنَسَ-يَكْنُسُ",
                                "arti" => "Menyapu",
                                "huruf" => array_unique(["كَ","نَ","سَ","-","يَ","كْ","نُ","سُ"])
                            ],
                            [
                                "kata_arab" => "وَضَعَ-يَضَعُ",
                                "arti" => "Meletakkan",
                                "huruf" => array_unique(["وَ","ضَ","عَ","-","يَ","ضَ","عُ"])
                            ],
                            [
                                "kata_arab" => "أَخَذَ-يَأْخُذُ",
                                "arti" => "Mengambil",
                                "huruf" => array_unique(["أَ","خَ","ذَ","-","يَ","أْ","خُ","ذُ"])
                            ],
                            [
                                "kata_arab" => "أَشْعَلَ-يُشْعِلُ",
                                "arti" => "Menyalakan (lampu)",
                                "huruf" => array_unique(["أَ","شْ","عَ","لَ","-","يُ","شْ","عِ","لُ"])
                            ],
                            [
                                "kata_arab" => "أَطْفَأَ-يُطْفِئُ",
                                "arti" => "Mematikan (lampu)",
                                "huruf" => array_unique(["أَ","طْ","فَ","أَ","-","يُ","طْ","فِ","ئُ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 3')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 3");
                        $data['materi'] = "Mufrodat 3";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِرْآةٌ",
                                "arti" => "Cermin",
                                "huruf" => array_unique(["مِ","رْ","آ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زُجَاجَةٌ",
                                "arti" => "Kaca",
                                "huruf" => array_unique(["زُ","جَ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِتَارٌ",
                                "arti" => "Korden",
                                "huruf" => array_unique(["سِ","تَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "خِزَانَةٌ",
                                "arti" => "Lemari",
                                "huruf" => array_unique(["خِ","زَ","ا","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فِرَاشٌ",
                                "arti" => "Kasur",
                                "huruf" => array_unique(["فِ","رَ","ا","شٌ"])
                            ],
                            [
                                "kata_arab" => "سَرِيْرٌ",
                                "arti" => "Ranjang",
                                "huruf" => array_unique(["سَ","رِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِكْنَسَةٌ",
                                "arti" => "Sapu",
                                "huruf" => array_unique(["مِ","كْ","نَ","سَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 4')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 4");
                        $data['materi'] = "Mufrodat 4";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِسْتَيْقَظَ-يَسْتَيْقِظُ",
                                "arti" => "Bangun",
                                "huruf" => array_unique(["اِ","سْ","تَ","يْ","قَ","ظَ","-","يَ","سْ","تَ","يْ","قِ","ظُ"])
                            ],
                            [
                                "kata_arab" => "أَيْقَظَ-يُوْقِظُ",
                                "arti" => "Membangunkan",
                                "huruf" => array_unique(["أَ","يْ","قَ","ظَ","-","يُ","وْ","قِ","ظُ"])
                            ],
                            [
                                "kata_arab" => "نَعِسَ-يَنْعَسُ",
                                "arti" => "Mengantuk",
                                "huruf" => array_unique(["نَ","عِ","سَ","-","يَ","نْ","عَ","سُ"])
                            ],
                            [
                                "kata_arab" => "رَمَى-يَرْمِي",
                                "arti" => "Membuang",
                                "huruf" => array_unique(["رَ","مَ","ى","-","يَ","رْ","مِ","ي"])
                            ],
                            [
                                "kata_arab" => "نَظَّفَ-يُنَظِّفُ",
                                "arti" => "Membersihkan",
                                "huruf" => array_unique(["نَ","ظَّ","فَ","-","يُ","نَ","ظِّ","فُ"])
                            ],
                            [
                                "kata_arab" => "رَتَّبَ-يُرَتِّبُ",
                                "arti" => "Merapikan",
                                "huruf" => array_unique(["رَ","تَّ","بَ","-","يُ","رَ","تِّ","بُ"])
                            ],
                            [
                                "kata_arab" => "رَأَى-يَرَى",
                                "arti" => "Melihat",
                                "huruf" => array_unique(["رَ","أَ","ى","-","يَ","رَ","ى"])
                            ],
                            [
                                "kata_arab" => "نَوَّبَ-يُنَوِّبُ",
                                "arti" => "Piket",
                                "huruf" => array_unique(["نَ","وَّ","بَ","-","يُ","نَ","وِّ","بُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 5')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 5");
                        $data['materi'] = "Mufrodat 5";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وِسَادَةٌ",
                                "arti" => "Bantal",
                                "huruf" => array_unique(["وِ","سَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاعَةٌ",
                                "arti" => "Jam",
                                "huruf" => array_unique(["سَ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُشْطٌ",
                                "arti" => "Sisir",
                                "huruf" => array_unique(["مُ","شْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "زُبَالَةٌ",
                                "arti" => "Sampah",
                                "huruf" => array_unique(["زُ","بَ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَزْبَلَةٌ",
                                "arti" => "Tempat Sampah",
                                "huruf" => array_unique(["مَ","زْ","بَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِحَافٌ",
                                "arti" => "Selimut",
                                "huruf" => array_unique(["لِ","حَ","ا","فٌ"])
                            ],
                            [
                                "kata_arab" => "غِطَاءُ السَّرِيْرِ",
                                "arti" => "Seprai",
                                "huruf" => array_unique(["غِ","طَ","ا","ءُ","_","ا","ل","سَّ","رِ","يْ","رِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 6')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 6");
                        $data['materi'] = "Mufrodat 6";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [

                            [
                                "kata_arab" => "جَاءَ-يَجِيْءُ",
                                "arti" => "Datang",
                                "huruf" => array_unique(["جَ","ا","ءَ","-","يَ","جِ","يْ","ءُ"])
                            ],
                            [
                                "kata_arab" => "ذَهَبَ-يَذْهَبُ",
                                "arti" => "Pergi",
                                "huruf" => array_unique(["ذَ","هَ","بَ","-","يَ","ذْ","هَ","بُ"])
                            ],
                            [
                                "kata_arab" => "دَخَلَ-يَدْخُلُ",
                                "arti" => "Masuk",
                                "huruf" => array_unique(["دَ","خَ","لَ","-","يَ","دْ","خُ","لُ"])
                            ],
                            [
                                "kata_arab" => "خَرَجَ-يَخْرُجُ",
                                "arti" => "Keluar",
                                "huruf" => array_unique(["خَ","رَ","جَ","-","يَ","خْ","رُ",'جُ'])
                            ],
                            [
                                "kata_arab" => "طَرَقَ-يَطْرُقُ",
                                "arti" => "Mengetuk",
                                "huruf" => array_unique(["طَ","رَ","قَ","-","يَ","طْ","رُ","قُ"])
                            ],
                            [
                                "kata_arab" => "لَبِسَ-يَلْبَسُ",
                                "arti" => "Memakai (pakaian)",
                                "huruf" => array_unique(["لَ","بِ","سَ","-","يَ","لْ","بَ","سُ"])
                            ],
                            [
                                "kata_arab" => "سَقَطَ-يَسْقُطُ",
                                "arti" => "Jatuh",
                                "huruf" => array_unique(["سَ","قَ","طَ","-","يَ","سْ","قُ","طُ"])
                            ],
                            [
                                "kata_arab" => "تَعِبَ-يَتْعَبُ",
                                "arti" => "Capek",
                                "huruf" => array_unique(["تَ","عِ","بَ","-","يَ","تْ","عَ","بُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 7')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 7");
                        $data['materi'] = "Mufrodat 7";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَنْطَةٌ",
                                "arti" => "Koper",
                                "huruf" => array_unique(["شَ","نْ","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَفٌّ",
                                "arti" => "Rak",
                                "huruf" => array_unique(["رَ","فٌّ"])
                            ],
                            [
                                "kata_arab" => "نَعْلٌ",
                                "arti" => "Sendal",
                                "huruf" => array_unique(["نَ","عْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْلَاقٌ",
                                "arti" => "Hanger",
                                "huruf" => array_unique(["مِ","عْ","لَ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْلَامٌ",
                                "arti" => "Gunting kuku",
                                "huruf" => array_unique(["مِ","قْ","لَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "مِجْرَفَةٌ",
                                "arti" => "Serokan",
                                "huruf" => array_unique(["مِ","جْ","رَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَدْوَلُ التَّنْوِيْبِ",
                                "arti" => "Jadwal piket",
                                "huruf" => array_unique(["جَ","دْ","وَ","لُ","_","ا","ل","تَّ","نْ","وِ","يْ","بِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 8')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 8");
                        $data['materi'] = "Mufrodat 8";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [

                            [
                                "kata_arab" => "سَاعَدَ-يُسَاعِدُ",
                                "arti" => "Membantu",
                                "huruf" => array_unique(["سَ","ا","عَ","دَ","-","يُ","سَ","ا","عِ","دُ"])
                            ],
                            [
                                "kata_arab" => "جَلَسَ-يَجْلِسُ",
                                "arti" => "Duduk",
                                "huruf" => array_unique(["جَ","لَ","سَ","-","يَ","جْ","لِ","سُ"])
                            ],
                            [
                                "kata_arab" => "قَامَ-يَقُوْمُ",
                                "arti" => "Berdiri",
                                "huruf" => array_unique(["قَ","ا","مَ","-","يَ","قُ","وْ","مُ"])
                            ],
                            [
                                "kata_arab" => "طَلَبَ-يَطْلُبُ",
                                "arti" => "Meminta",
                                "huruf" => array_unique(["طَ","لَ","بَ","-","يَ","طْ","لُ","بُ"])
                            ],
                            [
                                "kata_arab" => "أَعْطَى-يُعْطِي",
                                "arti" => "Memberi",
                                "huruf" => array_unique(["أَ","عْ","طَ","ى","-","يُ","عْ","طِ","ي"])
                            ],
                            [
                                "kata_arab" => "اِنْتَهَى-يَنْتَهِي",
                                "arti" => "Habis",
                                "huruf" => array_unique(["اِ","نْ","تَ","هَ","ى","-","يَ","نْ","تَ","هِ","ي"])
                            ],
                            [
                                "kata_arab" => "لَقِيَ-يَلْقَى",
                                "arti" => "Bertemu",
                                "huruf" => array_unique(["لَ","قِ","يَ","-","يَ","لْ","قَ","ى"])
                            ],
                            [
                                "kata_arab" => "أَحَبَّ-يُحِبُّ",
                                "arti" => "Menyukai",
                                "huruf" => array_unique(["أَ","حَ","بَّ","-","يُ","حِ","بُّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 9')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 9");
                        $data['materi'] = "Mufrodat 9";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِيْدَالِيَّةٌ",
                                "arti" => "Gantungan kunci",
                                "huruf" => array_unique(["مِ","يْ","دَ","ا","لِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَرْتُوْنٌ",
                                "arti" => "Kardus",
                                "huruf" => array_unique(["كَ","رْ","تُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "تَقْوِيْمٌ",
                                "arti" => "Kalender",
                                "huruf" => array_unique(["تَ","قْ","وِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "سُلَّمٌ",
                                "arti" => "Tangga",
                                "huruf" => array_unique(["سُ","لَّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "بِيْئَةٌ",
                                "arti" => "Lingkungan",
                                "huruf" => array_unique(["بِ","يْ","ئَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُفْلٌ",
                                "arti" => "Gembok",
                                "huruf" => array_unique(["قُ","فْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ضَيْفٌ",
                                "arti" => "Tamu",
                                "huruf" => array_unique(["ضَ","يْ","فٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 10')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 10");
                        $data['materi'] = "Mufrodat 10";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [

                            [
                                "kata_arab" => "كَرِهَ-يَكْرَحُ",
                                "arti" => "Membenci",
                                "huruf" => array_unique(["كَ","رِ","هَ","-","يَ","كْ","رَ","حُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعَارَ-يَسْتَعِيْرُ",
                                "arti" => "Meminjam",
                                "huruf" => array_unique(["اِ","سْ","تَ","عَ","ا","رَ","-","يَ","سْ","تَ","عِ","يْ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَعَارَ-يُعِيْرُ",
                                "arti" => "Meminjamkan",
                                "huruf" => array_unique(["أَ","عَ","ا","رَ","-","يُ","عِ","يْ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِنْتَظَرَ-يَنْتَظِرُ",
                                "arti" => "Menunggu",
                                "huruf" => array_unique(["اِ","نْ","تَ","ظَ","رَ","-","يَ","نْ","تَ","ظِ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَنْهَى-يُنْهِي",
                                "arti" => "Menghabiskan",
                                "huruf" => array_unique(["أَ","نْ","هَ","ى","-","يُ","نْ","هِ","ي"])
                            ],
                            [
                                "kata_arab" => "أَبْقَى-يُبْقِي",
                                "arti" => "Menyisakan",
                                "huruf" => array_unique(["أَ","بْ","قَ","ى","-","يُ","بْ","قِ","ي"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعَدَّ-يَسْتِعِدُّ",
                                "arti" => "Bersiap-siap",
                                "huruf" => array_unique(["اِ","سْ","تَ","عَ","دَّ","-","يَ","سْ","تِ","عِ","دُّ"])
                            ],
                            [
                                "kata_arab" => "أَعَدَّ-يُعِدُّ",
                                "arti" => "Menyiapkan",
                                "huruf" => array_unique(["أَ","عَ","دَّ","-","يُ","عِ","دُّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 11')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 11");
                        $data['materi'] = "Mufrodat 11";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِنْدِيْلٌ",
                                "arti" => "Tisu",
                                "huruf" => array_unique(["مِ","نْ","دِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُنَظِّفُ الْأُذُنِ",
                                "arti" => "Korek kuping",
                                "huruf" => array_unique(["مُ","نَ","ظِّ","فُ","_","ا","لْ","أُ","ذُ","نِ"])
                            ],
                            [
                                "kata_arab" => "فُلُوْسٌ",
                                "arti" => "Uang",
                                "huruf" => array_unique(["فُ","لُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مِحْفَظَةُ الْفُلُوْسِ",
                                "arti" => "Dompet",
                                "huruf" => array_unique(["مِ","حْ","فَ","ظَ","ةُ","_","ا","لْ","فُ","لُ","وْ","سِ"])
                            ],
                            [
                                "kata_arab" => "جَدْوَلٌ",
                                "arti" => "Jadwal",
                                "huruf" => array_unique(["جَ","دْ","وَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مِشْبَكٌ",
                                "arti" => "Peniti",
                                "huruf" => array_unique(["مِ","شْ","بَ","كٌ"])
                            ],
                            [
                                "kata_arab" => "غَسْلٌ",
                                "arti" => "Cucian",
                                "huruf" => array_unique(["غَ","سْ","لٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 12')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 12");
                        $data['materi'] = "Mufrodat 12";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [

                            [
                                "kata_arab" => "أَرَادَ-يُرِيْدُ",
                                "arti" => "Ingin",
                                "huruf" => array_unique(["أَ","رَ","ا","دَ","-","يُ","رِ","يْ","دُ"])
                            ],
                            [
                                "kata_arab" => "حَمَلَ-يَحْمِلُ",
                                "arti" => "Membawa",
                                "huruf" => array_unique(["حَ","مَ","لَ","-","يَ","حْ","مِ","لُ"])
                            ],
                            [
                                "kata_arab" => "ضَحِكَ-يَضْحَكُ",
                                "arti" => "Tertawa",
                                "huruf" => array_unique(["ضَ","حِ","كَ","-","يَ","ضْ","حَ","كُ"])
                            ],
                            [
                                "kata_arab" => "خَافَ-يَخَافُ",
                                "arti" => "Takut",
                                "huruf" => array_unique(["خَ","ا","فَ","-","يَ","خَ","ا","فُ"])
                            ],
                            [
                                "kata_arab" => "مَسَكَ-يَمْسِكُ",
                                "arti" => "Memegang",
                                "huruf" => array_unique(["مَ","سَ","كَ","-","يَ","مْ","سِ","كُ"])
                            ],
                            [
                                "kata_arab" => "اِبْتَسَمَ-يَبْتَسِمُ",
                                "arti" => "Tersenyum",
                                "huruf" => array_unique(["اِ","بْ","تَ","سَ","مَ","-","يَ","بْ","تَ","سِ","مُ"])
                            ],
                            [
                                "kata_arab" => "عَلَّقَ-يُعَلِّقُ",
                                "arti" => "Menggantungkan",
                                "huruf" => array_unique(["عَ","لَّ","قَ","-","يُ","عَ","لِّ","قُ"])
                            ],
                            [
                                "kata_arab" => "ضَاعَ-يَضِيْعُ",
                                "arti" => "Hilang",
                                "huruf" => array_unique(["ضَ","ا","عَ","-","يَ","ضِ","يْ","عُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 13')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 13");
                        $data['materi'] = "Mufrodat 13";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَدِيَّةُ السَّفَرِ",
                                "arti" => "Oleh-oleh",
                                "huruf" => array_unique(["هَ","دِ","يَّ","ةُ","_","ا","ل","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "شُقَّةٌ",
                                "arti" => "Blok",
                                "huruf" => array_unique(["شُ","قَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "هَدِيَّةٌ",
                                "arti" => "Hadiah",
                                "huruf" => array_unique(["هَ","دِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صُنْدُوْقٌ",
                                "arti" => "Kotak",
                                "huruf" => array_unique(["صُ","نْ","دُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "لَاصِقَةٌ",
                                "arti" => "Solasi",
                                "huruf" => array_unique(["لَ","ا","صِ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غِرَاءٌ",
                                "arti" => "Lem",
                                "huruf" => array_unique(["غِ","رَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مِقَصٌّ",
                                "arti" => "Gunting",
                                "huruf" => array_unique(["مِ","قَ","صٌّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 14')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 14");
                        $data['materi'] = "Mufrodat 14";
                        $data['tema'] = "Tema 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَدَّلَ-يُبَدِّلُ",
                                "arti" => "Mengganti",
                                "huruf" => array_unique(["بَ","دَّ","لَ","-","يُ","بَ","دِّ","لُ"])
                            ],
                            [
                                "kata_arab" => "مَشَى-يَمْشِي",
                                "arti" => "Berjalan",
                                "huruf" => array_unique(["مَ","شَ","ى","-","يَ","مْ","شِ","ي"])
                            ],
                            [
                                "kata_arab" => "شَاهَدَ-يُشَاهِدُ",
                                "arti" => "Menonton",
                                "huruf" => array_unique(["شَ","ا","هَ","دَ","-","يُ","شَ","ا","هِ","دُ"])
                            ],
                            [
                                "kata_arab" => "فَقَدَ-يَفْقِدُ",
                                "arti" => "Kehilangan",
                                "huruf" => array_unique(["فَ","قَ","دَ","-","يَ","فْ","قِ","دُ"])
                            ],
                            [
                                "kata_arab" => "وَجَدَ-يَجِدُ",
                                "arti" => "Menemukan",
                                "huruf" => array_unique(["وَ","جَ","دَ","-","يَ","جِ","دُ"])
                            ],
                            [
                                "kata_arab" => "جَفَّفَ-يُجَفِّفُ",
                                "arti" => "Menjemur",
                                "huruf" => array_unique(["جَ","فَّ","فَ","-","يُ","جَ","فِّ","فُ"])
                            ],
                            [
                                "kata_arab" => "مَلَكَ-يَمْلِكُ",
                                "arti" => "Memiliki",
                                "huruf" => array_unique(["مَ","لَ","كَ","-","يَ","مْ","لِ","كُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 15')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 15");
                        $data['materi'] = "Mufrodat 15";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَكْتَبٌ",
                                "arti" => "Meja",
                                "huruf" => array_unique(["مَ","كْ","تَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كُرْسِيٌّ",
                                "arti" => "Kursi",
                                "huruf" => array_unique(["كُ","رْ","سِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "سَبُّوْرَةٌ",
                                "arti" => "Papan tulis",
                                "huruf" => array_unique(["سَ","بُّ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَمٌ",
                                "arti" => "Pulpen/Spidol",
                                "huruf" => array_unique(["قَ","لَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَمُ الرَّصَاصِ",
                                "arti" => "Pensil",
                                "huruf" => array_unique(["قَ","لَ","مُ","_","ا","ل","رَّ","صَ","ا","صِ"])
                            ],
                            [
                                "kata_arab" => "مِسْطَرَةٌ",
                                "arti" => "Penggaris",
                                "huruf" => array_unique(["مِ","سْ","طَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَبْشُوْرَةٌ",
                                "arti" => "Kapur",
                                "huruf" => array_unique(["طَ","بْ","شُ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَقِيْبَةٌ",
                                "arti" => "Tas",
                                "huruf" => array_unique(["حَ","قِ","يْ","بَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 16')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 16");
                        $data['materi'] = "Mufrodat 16";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَتَبَ-يَكْتُبُ",
                                "arti" => "Menulis",
                                "huruf" => array_unique(["كَ","تَ","بَ","-","يَ","كْ","تُ","بُ"])
                            ],
                            [
                                "kata_arab" => "مَسَحَ-يَمْسَحُ",
                                "arti" => "Menghapus",
                                "huruf" => array_unique(["مَ","سَ","حَ","-","يَ","مْ","سَ","حُ"])
                            ],
                            [
                                "kata_arab" => "قَرَأَ-يَقْرَأُ",
                                "arti" => "Membaca",
                                "huruf" => array_unique(["قَ","رَ","أَ","-","يَ","قْ","رَ",'أُ'])
                            ],
                            [
                                "kata_arab" => "اِهْتَمَّ-يَهْتَمُّ بِ",
                                "arti" => "Memperhatikan",
                                "huruf" => array_unique(["اِ","هْ","تَ","مَّ","-","يَ","هْ","تَ","مُّ","بِ","_"])
                            ],
                            [
                                "kata_arab" => "اِسْتَمَعَ-يَسْتَمِعُ إِلَى",
                                "arti" => "Menyimak",
                                "huruf" => array_unique(["اِ","سْ","تَ","مَ","عَ","-","يَ","سْ","تَ","مِ","عُ","إِ","لَ","ى","_"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعْجَلَ-يَسْتَعْجِلُ",
                                "arti" => "Tegesa-gesa",
                                "huruf" => array_unique(["اِ","سْ","تَ","عْ","جَ","لَ","-","يَ","سْ","تَ","عْ","جِ","لُ"])
                            ],
                            [
                                "kata_arab" => "بَيَّنَ-يُبَيِّنُ",
                                "arti" => "Menjelaskan",
                                "huruf" => array_unique(["بَ","يَّ","نَ","-","يُ","بَ","يِّ","نُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 17')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 17");
                        $data['materi'] = "Mufrodat 17";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كُرَّاسَةٌ",
                                "arti" => "Buku tulis",
                                "huruf" => array_unique(["كُ","رَّ","ا","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُقَرَّرٌ",
                                "arti" => "Buku panduan",
                                "huruf" => array_unique(["مُ","قَ","رَّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "كَشْفُ الْحُضُوْرِ",
                                "arti" => "Daftar hadir",
                                "huruf" => array_unique(["كَ","شْ","فُ","_","ا","لْ","حُ","ضُ","وْ","رِ"])
                            ],
                            [
                                "kata_arab" => "خَرِيْطَةٌ",
                                "arti" => "Peta",
                                "huruf" => array_unique(["خَ","رِ","يْ","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كِتَابٌ",
                                "arti" => "Buku",
                                "huruf" => array_unique(["كِ","تَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "قِرْطَاسٌ",
                                "arti" => "Kertas",
                                "huruf" => array_unique(["قِ","رْ","طَ","ا","سٌ"])
                            ],
                            [
                                "kata_arab" => "حِبْرٌ",
                                "arti" => "Tinta",
                                "huruf" => array_unique(["حِ","بْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسٌ",
                                "arti" => "Ketua",
                                "huruf" => array_unique(["رَ","ئِ","يْ",'سٌ'])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 18')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 18");
                        $data['materi'] = "Mufrodat 18";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَفَعَ-يَرْفَعُ",
                                "arti" => "Mengangkat",
                                "huruf" => array_unique(["رَ","فَ","عَ","-","يَ","رْ","فَ","عُ"])
                            ],
                            [
                                "kata_arab" => "عَمِلَ-يَعْمَلُ",
                                "arti" => "Mengerjakan",
                                "huruf" => array_unique(["عَ","مِ","لَ","-","يَ","عْ","مَ","لُ"])
                            ],
                            [
                                "kata_arab" => "تَأَخَّرَ-يَتَأَخَّرُ",
                                "arti" => "Terlambat",
                                "huruf" => array_unique(["تَ","أَ","خَّ","رَ","-","يَ","تَ","أَ","خَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "تَفَكَّرَ-يَتَفَكَّرُ",
                                "arti" => "Berfikir",
                                "huruf" => array_unique(["تَ","فَ","كَّ","رَ","-","يَ","تَ","فَ","كَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَخْطَأَ-يُخْطِئُ",
                                "arti" => "Bersalah",
                                "huruf" => array_unique(["أَ","خْ","طَ","أَ","-","يُ","خْ","طِ","ئُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَمَرَّ-يَسْتَمِرُّ",
                                "arti" => "Melanjutkan",
                                "huruf" => array_unique(["اِ","سْ","تَ","مَ","رَّ","-","يَ","سْ","تَ","مِ","رُّ"])
                            ],
                            [
                                "kata_arab" => "نَجَحَ-يَنْجَحُ",
                                "arti" => "Lulus",
                                "huruf" => array_unique(["نَ","جَ","حَ","-","يَ","نْ","جَ","حُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 19')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 19");
                        $data['materi'] = "Mufrodat 19";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَائِبٌ",
                                "arti" => "Wakil",
                                "huruf" => array_unique(["نَ","ا","ئِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كَاتِبٌ",
                                "arti" => "Sekretaris",
                                "huruf" => array_unique(["كَ","ا","تِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَاسِبٌ",
                                "arti" => "Bendahara",
                                "huruf" => array_unique(["مُ","حَ","ا","سِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَاغٌ",
                                "arti" => "Kosong",
                                "huruf" => array_unique(["فَ","رَ","ا","غٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَوًى",
                                "arti" => "Jenjang",
                                "huruf" => array_unique(["مُ","سْ","تَ","وً","ى"])
                            ],
                            [
                                "kata_arab" => "أُمُوْرٌ هَامَّةٌ",
                                "arti" => "Kisi-kisi",
                                "huruf" => array_unique(["أُ","مُ","وْ","رٌ","هَ","ا","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَرِيْقَةٌ",
                                "arti" => "Cara",
                                "huruf" => array_unique(["طَ","رِ","يْ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نُقْطَةٌ",
                                "arti" => "Titik",
                                "huruf" => array_unique(["نُ","قْ","طَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 20')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 20");
                        $data['materi'] = "Mufrodat 20";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَتَّشَ-يُفَتِّشُ",
                                "arti" => "Mengoreksi",
                                "huruf" => array_unique(["فَ","تَّ","شَ","-","يُ","فَ","تِّ","شُ"])
                            ],
                            [
                                "kata_arab" => "غَشَّ-يَغِشُّ",
                                "arti" => "Curang",
                                "huruf" => array_unique(["غَ","شَّ","-","يَ","غِ","شُّ"])
                            ],
                            [
                                "kata_arab" => "اِمْتَحَنَ-يَمْتَحِنُ",
                                "arti" => "Menguji",
                                "huruf" => array_unique(["اِ","مْ","تَ","حَ","نَ","-","يَ","مْ","تَ","حِ","نُ"])
                            ],
                            [
                                "kata_arab" => "اِتَّبَعَ-يَتَّبِعُ",
                                "arti" => "Mengikuti",
                                "huruf" => array_unique(["اِ","تَّ","بَ","عَ","-","يَ","تَّ","بِ","عُ"])
                            ],
                            [
                                "kata_arab" => "اِحْتَرَمَ-يَحْتَرِمُ",
                                "arti" => "Menghormati",
                                "huruf" => array_unique(["اِ","حْ","تَ","رَ","مَ","-","يَ","حْ","تَ","رِ","مُ"])
                            ],
                            [
                                "kata_arab" => "اِنْقَسَمَ-يَنْقَسِمُ",
                                "arti" => "Terbagi",
                                "huruf" => array_unique(["اِ","نْ","قَ","سَ","مَ","-","يَ","نْ","قَ","سِ","مُ"])
                            ],
                            [
                                "kata_arab" => "اِدَّخَرَ-يَدَّخِرُ",
                                "arti" => "Menabung",
                                "huruf" => array_unique(["اِ","دَّ","خَ","رَ","-","يَ","دَّ","خِ","رُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 21')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 21");
                        $data['materi'] = "Mufrodat 21";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَعْمَلُ اللُّغَةِ",
                                "arti" => "Lab. Bahasa",
                                "huruf" => array_unique(["مَ","عْ","مَ",'لُ',"_","ا","ل","لُّ","غَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "مَكْتَبُ الْمُدَرِّسِيْنَ",
                                "arti" => "Kantor guru",
                                "huruf" => array_unique(["مَ","كْ","تَ","بُ","_","ا","لْ","مُ","دَ","رِّ","سِ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "نَتِيْجَةٌ",
                                "arti" => "Nilai",
                                "huruf" => array_unique(["نَ","تِ","يْ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَحِيْحٌ",
                                "arti" => "Benar",
                                "huruf" => array_unique(["صَ","حِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "خُلَاصَةٌ",
                                "arti" => "Ringkasan",
                                "huruf" => array_unique(["خُ","لَ","ا","صَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَطَأٌ",
                                "arti" => "Salah",
                                "huruf" => array_unique(["خَ","طَ","أٌ"])
                            ],
                            [
                                "kata_arab" => "صَفْحَةٌ",
                                "arti" => "Halaman",
                                "huruf" => array_unique(["صَ","فْ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَوَّابَةٌ",
                                "arti" => "Gerbang",
                                "huruf" => array_unique(["بَ","وَّ","ا","بَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 22')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 22");
                        $data['materi'] = "Mufrodat 22";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَرَصَ-يَحْرِصُ",
                                "arti" => "Semangat",
                                "huruf" => array_unique(["حَ","رَ","صَ","-","يَ","حْ","رِ","صُ"])
                            ],
                            [
                                "kata_arab" => "رَكَّزَ-يُرَكِّزُ",
                                "arti" => "Fokus",
                                "huruf" => array_unique(["رَ","كَّ","زَ","-","يُ","رَ","كِّ","زُ"])
                            ],
                            [
                                "kata_arab" => "سَجَّلَ-يُسَجِّلُ",
                                "arti" => "Mendaftar/merekam",
                                "huruf" => array_unique(["سَ","جَّ","لَ","-","يُ","سَ","جِّ","لُ"])
                            ],
                            [
                                "kata_arab" => "مَزَّقَ-يُمَزِّقُ",
                                "arti" => "Merobek",
                                "huruf" => array_unique(["مَ","زَّ","قَ","-","يُ","مَ","زِّ","قُ"])
                            ],
                            [
                                "kata_arab" => "رَنَّ-يَرِنُّ",
                                "arti" => "Berdering",
                                "huruf" => array_unique(["رَ","نَّ","-","يَ","رِ","نُّ"])
                            ],
                            [
                                "kata_arab" => "نَبَّهَ-يُنَبِّهُ",
                                "arti" => "Menegur",
                                "huruf" => array_unique(["نَ","بَّ","هَ","-","يُ","نَ","بِّ","هُ"])
                            ],
                            [
                                "kata_arab" => "ذَكَرَ-يَذْكُرُ",
                                "arti" => "Menyebutkan",
                                "huruf" => array_unique(["ذَ","كَ","رَ","-","يَ","ذْ","كُ","رُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 23')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 23");
                        $data['materi'] = "Mufrodat 23";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [

                            [
                                "kata_arab" => "مَقْصَفٌ",
                                "arti" => "Kantin",
                                "huruf" => array_unique(["مَ","قْ","صَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "كَشْفُ الدَّرَجَاتِ",
                                "arti" => "Rapor",
                                "huruf" => array_unique(["كَ","شْ","فُ","_","ا","ل","دَّ","رَ","جَ","ا","تِ"])
                            ],
                            [
                                "kata_arab" => "اِمْتِحَانٌ",
                                "arti" => "Ujian",
                                "huruf" => array_unique(["اِ","مْ","تِ","حَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "مَادَّةٌ",
                                "arti" => "Mata pelajaran / materi",
                                "huruf" => array_unique(["مَ","ا","دَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حِصَّةٌ",
                                "arti" => "Jam pelajaran",
                                "huruf" => array_unique(["حِ","صَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دَرْسٌ",
                                "arti" => "Pelajaran",
                                "huruf" => array_unique(["دَ","رْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مَرْكَزٌ",
                                "arti" => "Rangking",
                                "huruf" => array_unique(["مَ","رْ","كَ","زٌ"])
                            ],
                            [
                                "kata_arab" => "سُؤَالٌ",
                                "arti" => "Pertanyaan",
                                "huruf" => array_unique(["سُ","ؤَ","ا","لٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 24')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 24");
                        $data['materi'] = "Mufrodat 24";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَأَلَ-يَسْأَلُ",
                                "arti" => "Bertanya",
                                "huruf" => array_unique(["سَ","أَ","لَ","-","يَ","سْ","أَ","لُ"])
                            ],
                            [
                                "kata_arab" => "أَجَابَ-يُجِيْبُ",
                                "arti" => "Menjawab",
                                "huruf" => array_unique(["أَ","جَ","ا","بَ","-","يُ","جِ","يْ","بُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَأْذَنَ-يَسْتَأْذِنُ",
                                "arti" => "Meminta izin",
                                "huruf" => array_unique(["اِ","سْ","تَ","أْ","ذَ","نَ","-","يَ","سْ","تَ","أْ","ذِ","نُ"])
                            ],
                            [
                                "kata_arab" => "بَدَأَ-يَبْدَأُ",
                                "arti" => "Memulai",
                                "huruf" => array_unique(["بَ","دَ","أَ","-","يَ","بْ","دَ","أُ"])
                            ],
                            [
                                "kata_arab" => "اِخْتَتَمَ-يَخْتَتِمُ",
                                "arti" => "Mengakhiri",
                                "huruf" => array_unique(["اِ","خْ","تَ","تَ","مَ","-","يَ","خْ","تَ","تِ","مُ"])
                            ],
                            [
                                "kata_arab" => "صَحَّ-يَصِحُّ",
                                "arti" => "Benar",
                                "huruf" => array_unique(["صَ","حَّ","-","يَ","صِ","حُّ"])
                            ],
                            [
                                "kata_arab" => "غَابَ-يَغِيْبُ",
                                "arti" => "Absen",
                                "huruf" => array_unique(["غَ","ا","بَ","-","يَ","غِ","يْ","بُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 25')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 25");
                        $data['materi'] = "Mufrodat 25";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَوَابٌ",
                                "arti" => "Jawaban",
                                "huruf" => array_unique(["جَ","وَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "قَامُوْسٌ",
                                "arti" => "Kamus",
                                "huruf" => array_unique(["قَ","ا","مُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "اَلْوَاجِبُ الْمَنْزِلِيُّ",
                                "arti" => "Pekerjaan rumah",
                                "huruf" => array_unique(["اَ","لْ","وَ","ا","جِ","بُ","ا","لْ","مَ","نْ","زِ","لِ","يُّ"])
                            ],
                            [
                                "kata_arab" => "غَيْبٌ",
                                "arti" => "Absen",
                                "huruf" => array_unique(["غَ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مِثَالٌ",
                                "arti" => "Contoh",
                                "huruf" => array_unique(["مِ","ثَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ",
                                "arti" => "Sekolah",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَصْلٌ",
                                "arti" => "Kelas",
                                "huruf" => array_unique(["فَ","صْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مِمْسَحَةٌ",
                                "arti" => "Penghapus",
                                "huruf" => array_unique(["مِ","مْ","سَ","حَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 26')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 26");
                        $data['materi'] = "Mufrodat 26";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَضَرَ-يَحْضُرُ",
                                "arti" => "Hadir",
                                "huruf" => array_unique(["حَ","ضَ","رَ","-","يَ","حْ","ضُ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَشَارَ-يُشِيْرُ إِلَى",
                                "arti" => "Menunjuk",
                                "huruf" => array_unique(["أَ","شَ","ا","رَ","-","يُ","شِ","يْ","رُ","_","إِ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "خَالَفَ-يُخَالِفُ",
                                "arti" => "Melanggar",
                                "huruf" => array_unique(["خَ","ا","لَ","فَ","-","يُ","خَ","ا","لِ","فُ"])
                            ],
                            [
                                "kata_arab" => "تَكَاسَلَ-يَتَكَاسَلُ",
                                "arti" => "Malas",
                                "huruf" => array_unique(["تَ","كَ","ا","سَ","لَ","-","يَ","تَ","كَ","ا","سَ","لُ"])
                            ],
                            [
                                "kata_arab" => "مَنَعَ-يَمْنَعُ",
                                "arti" => "Melarang",
                                "huruf" => array_unique(["مَ","نَ","عَ","-","يَ","مْ","نَ","عُ"])
                            ],
                            [
                                "kata_arab" => "خَطَّأَ-يُخَطِّئُ",
                                "arti" => "Menyalahkan",
                                "huruf" => array_unique(["خَ","طَّ","أَ","-","يُ","خَ","طِّ","ئُ"])
                            ],
                            [
                                "kata_arab" => "حَضَّرَ-يُحَضِّرُ",
                                "arti" => "Mengabsen",
                                "huruf" => array_unique(["حَ","ضَّ","رَ","-","يُ","حَ","ضِّ","رُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 27')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 27");
                        $data['materi'] = "Mufrodat 27";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَوْقِيْعٌ",
                                "arti" => "Tanda tangan",
                                "huruf" => array_unique(["تَ","وْ","قِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "تَدْرِيْبٌ",
                                "arti" => "Latihan",
                                "huruf" => array_unique(["تَ","دْ","رِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "جَرَسٌ",
                                "arti" => "Bel",
                                "huruf" => array_unique(["جَ","رَ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُمْتَازٌ",
                                "arti" => "Istimewa",
                                "huruf" => array_unique(["مُ","مْ","تَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "جَيِّدٌ جِدًّا",
                                "arti" => "Baik sekali",
                                "huruf" => array_unique(["جَ","يِّ","دٌ","_","جِ","دًّ","ا"])
                            ],
                            [
                                "kata_arab" => "جَيِّدٌ",
                                "arti" => "Baik",
                                "huruf" => array_unique(["جَ","يِّ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْبُوْلٌ",
                                "arti" => "Cukup",
                                "huruf" => array_unique(["مَ","قْ","بُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "رَاسِبٌ",
                                "arti" => "Gagal / kurang",
                                "huruf" => array_unique(["رَ","ا","سِ","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 28')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 28");
                        $data['materi'] = "Mufrodat 28";
                        $data['tema'] = "Tema 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَمَرَ-يَأْمُرُ بِ",
                                "arti" => "Menyuruh",
                                "huruf" => array_unique(["أَ","مَ","رَ","-","يَ","أْ","مُ","رُ","_","بِ"])
                            ],
                            [
                                "kata_arab" => "صَوَّرَ-يُصَوِّرُ",
                                "arti" => "Menggambar",
                                "huruf" => array_unique(["صَ","وَّ","رَ","-","يُ","صَ","وِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "دَعَا-يَدْعُوْ",
                                "arti" => "Memanggil",
                                "huruf" => array_unique(["دَ","عَ","ا","-","يَ","دْ","عُ","وْ"])
                            ],
                            [
                                "kata_arab" => "رَجَعَ-يَرْجِعُ",
                                "arti" => "Pulang",
                                "huruf" => array_unique(["رَ","جَ","عَ","-","يَ","رْ","جِ","عُ"])
                            ],
                            [
                                "kata_arab" => "بَحَثَ-يَبْحَثُ فِيْ",
                                "arti" => "Membahas",
                                "huruf" => array_unique(["بَ","حَ","ثَ","-","يَ","بْ","حَ","ثُ","فِ","يْ","_"])
                            ],
                            [
                                "kata_arab" => "جَمَعَ-يَجْمَعُ",
                                "arti" => "Mengumpulkan",
                                "huruf" => array_unique(["جَ","مَ","عَ","-","يَ","جْ","مَ","عُ"])
                            ],
                            [
                                "kata_arab" => "حَفِظَ-يَحْفَظُ",
                                "arti" => "Menghafal",
                                "huruf" => array_unique(["حَ","فِ","ظَ","-","يَ","حْ","فَ","ظُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 29')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 29");
                        $data['materi'] = "Mufrodat 29";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَمُوْدٌ",
                                "arti" => "Tiang",
                                "huruf" => array_unique(["عَ","مُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "بِسَاطٌ",
                                "arti" => "Karpet",
                                "huruf" => array_unique(["بِ","سَ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "سَجَّادَةٌ",
                                "arti" => "Sajadah",
                                "huruf" => array_unique(["سَ","جَّ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُصْحَفٌ",
                                "arti" => "Mushaf",
                                "huruf" => array_unique(["مُ","صْ","حَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "نُشْرَةٌ",
                                "arti" => "Buletin",
                                "huruf" => array_unique(["نُ","شْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صُنْدُوْقُ الْإِنْفَاقِ",
                                "arti" => "Kotak infaq",
                                "huruf" => array_unique(["صُ","نْ","دُ","وْ","قُ","_","ا","لْ","إِ","نْ","فَ","ا","قِ"])
                            ],
                            [
                                "kata_arab" => "مِحْرَابٌ",
                                "arti" => "Mihrab",
                                "huruf" => array_unique(["مِ","حْ","رَ","ا","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 30')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 30");
                        $data['materi'] = "Mufrodat 30";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِنْبَطَحَ-يَنْبَطِحُ",
                                "arti" => "Tengkurap",
                                "huruf" => array_unique(["اِ","نْ","بَ","طَ","حَ","-","يَ","نْ","بَ","طِ",'حُ'])
                            ],
                            [
                                "kata_arab" => "اِسْتَلْقَى-يَسْتَلْقِيْ",
                                "arti" => "Berbaring",
                                "huruf" => array_unique(["اِ","سْ","تَ","لْ","قَ","ى","-","يَ","سْ","تَ","لْ","قِ","يْ"])
                            ],
                            [
                                "kata_arab" => "بَطَلَ-يَبْطُلُ",
                                "arti" => "Batal",
                                "huruf" => array_unique(["بَ","طَ","لَ","-","يَ","بْ","طُ","لُ"])
                            ],
                            [
                                "kata_arab" => "هَدَأَ-يَهْدَأُ",
                                "arti" => "Tenang",
                                "huruf" => array_unique(["هَ","دَ","أَ","-","يَ","هْ","دَ","أُ"])
                            ],
                            [
                                "kata_arab" => "تَأَدَّبَ-يَتَأَدَّبُ",
                                "arti" => "Beradab",
                                "huruf" => array_unique(["تَ","أَ","دَّ","بَ","-","يَ","تَ","أَ","دَّ","بُ"])
                            ],
                            [
                                "kata_arab" => "أَسْرَعَ-يُسْرِعُ",
                                "arti" => "Bergegas",
                                "huruf" => array_unique(["أَ","سْ","رَ","عَ","-","يُ","سْ","رِ","عُ"])
                            ],
                            [
                                "kata_arab" => "اِعْتَكَفَ-يَعْتَكِفُ",
                                "arti" => "I’tikaf",
                                "huruf" => array_unique(["اِ","عْ","تَ","كَ","فَ","-","يَ","عْ","تَ","كِ","فُ"])
                            ],
                            [
                                "kata_arab" => "سَجَدَ-يَسْجُدُ",
                                "arti" => "Sujud",
                                "huruf" => array_unique(["سَ","جَ","دَ","-","يَ","سْ","جُ","دُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 31')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 31");
                        $data['materi'] = "Mufrodat 31";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَلَّى-يُصَلِّيْ",
                                "arti" => "Sholat",
                                "huruf" => array_unique(["صَ","لَّ","ى","-","يُ","صَ","لِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "ذَكَرَ-يَذْكُرُ",
                                "arti" => "Berdzikir",
                                "huruf" => array_unique(["ذَ","كَ","رَ","-","يَ","ذْ","كُ","رُ"])
                            ],
                            [
                                "kata_arab" => "رَكَعَ-يَرْكَعُ",
                                "arti" => "Rukuk",
                                "huruf" => array_unique(["رَ","كَ","عَ","-","يَ","رْ","كَ","عُ"])
                            ],
                            [
                                "kata_arab" => "أَذَّنَ-يُؤَذِّنُ",
                                "arti" => "Mengumandangkan adzan",
                                "huruf" => array_unique(["أَ","ذَّ","نَ","-","يُ","ؤَ","ذِّ","نُ"])
                            ],
                            [
                                "kata_arab" => "تَوَضَّأَ-يَتَوَضَّأُ",
                                "arti" => "Berwudhu",
                                "huruf" => array_unique(["تَ","وَ","ضَّ","أَ","-","يَ","تَ","وَ","ضَّ","أُ"])
                            ],
                            [
                                "kata_arab" => "تَيَمَّمَ-يَتَيَمَّمُ",
                                "arti" => "Tayammum",
                                "huruf" => array_unique(["تَ","يَ","مَّ","مَ","-","يَ","تَ","يَ","مَّ","مُ"])
                            ],
                            [
                                "kata_arab" => "دَعَا-يَدْعُوْ",
                                "arti" => ": Berdoa kebaikan",
                                "huruf" => array_unique(["دَ","عَ","ا","-","يَ","دْ","عُ","وْ"])
                            ],
                            [
                                "kata_arab" => "دَعَا-يَدْعُوْ",
                                "arti" => ": Berdoa keburukan",
                                "huruf" => array_unique(["دَ","عَ","ا","-","يَ","دْ","عُ","وْ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 32')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 32");
                        $data['materi'] = "Mufrodat 32";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab"=> "مِنْبَرٌ",
                                "arti" => "Mimbar",
                                "huruf" => array_unique(["مِ","نْ","بَ","رٌ"])
                            ],
                            [
                                "kata_arab"=> "إِمَامٌ",
                                "arti" => "Imam",
                                "huruf" => array_unique(["إِ","مَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab"=> "مَأْمُوْمٌ",
                                "arti" => "Makmum",
                                "huruf" => array_unique(["مَ","أْ","مُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab"=> "سُتْرَةٌ",
                                "arti" => "Sutroh",
                                "huruf" => array_unique(["سُ","تْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab"=> "قُبَّةٌ",
                                "arti" => "Kubah",
                                "huruf" => array_unique(["قُ","بَّ","ةٌ"])
                            ],
                            [
                                "kata_arab"=> "مِئْذَنَةٌ",
                                "arti" => "Menara azan",
                                "huruf" => array_unique(["مِ","ئْ","ذَ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab"=> "مُحَاضَرَةٌ",
                                "arti" => "Pengajian",
                                "huruf" => array_unique(["مُ","حَ","ا","ضَ","رَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 33')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 33");
                        $data['materi'] = "Mufrodat 33";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِجْتَمَعَ-يَجْتَمِعُ",
                                "arti" => "Berkumpul",
                                "huruf" => array_unique(["اِ","جْ","تَ","مَ","عَ","-","يَ","جْ","تَ","مِ","عُ"])
                            ],
                            [
                                "kata_arab" => "تَلَا-يَتْلُوْ",
                                "arti" => "Tilawah",
                                "huruf" => array_unique(["تَ","لَ","ا","-","يَ","تْ","لُ","وْ"])
                            ],
                            [
                                "kata_arab" => "كَبَّرَ-يُكَبِّرُ",
                                "arti" => "Bertakbir",
                                "huruf" => array_unique(["كَ","بَّ","رَ","-","يُ","كَ","بِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "عَبَدَ-يَعْبُدُ",
                                "arti" => "Beribadah",
                                "huruf" => array_unique(["عَ","بَ","دَ","-","يَ","عْ","بُ","دُ"])
                            ],
                            [
                                "kata_arab" => "بَقِيَ-يَبْقَى",
                                "arti" => "Menetap",
                                "huruf" => array_unique(["بَ","قِ","يَ","-","يَ","بْ","قَ","ى"])
                            ],
                            [
                                "kata_arab" => "تَصَدَّقَ-يَتَصَدَّقُ عَلَى",
                                "arti" => "Bersedekah",
                                "huruf" => array_unique(["تَ","صَ","دَّ","قَ","-","يَ","تَ","صَ","دَّ","قُ","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "أَنْفَقَ-يُنْفِقُ عَلَى",
                                "arti" => "Berinfaq",
                                "huruf" => array_unique(["أَ","نْ","فَ","قَ","-","يُ","نْ","فِ","قُ","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "سَمَّعَ-يُسَمِّعُ",
                                "arti" => "Menyetorkan",
                                "huruf" => array_unique(["سَ","مَّ","عَ","-","يُ","سَ","مِّ","عُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 34')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 34");
                        $data['materi'] = "Mufrodat 34";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَعْلَنَ-يُعْلِنُ",
                                "arti" => "Mengumumkan",
                                "huruf" => array_unique(["أَ",'عْ',"لَ","نَ","-","يُ","عْ","لِ","نُ"])
                            ],
                            [
                                "kata_arab" => "عَفَا-يَعْفُوْ عَنْ",
                                "arti" => "Memaafkan",
                                "huruf" => array_unique(["عَ","فَ","ا","-","يَ","عْ","فُ","وْ","_","عَ","نْ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَقَامَ-يَسْتَقِيْمُ",
                                "arti" => "Lurus",
                                "huruf" => array_unique(["اِ","سْ","تَ","قَ","ا","مَ","-","يَ","سْ","تَ","قِ","يْ","مُ"])
                            ],
                            [
                                "kata_arab" => "زَكَّى-يُزَكِّيْ",
                                "arti" => "Berzakat",
                                "huruf" => array_unique(["زَ","كَّ","ى","-","يُ","زَ","كِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "ذَبَحَ-يَذْبَحُ",
                                "arti" => "Menyembelih",
                                "huruf" => array_unique(["ذَ","بَ","حَ","-","يَ","ذْ","بَ","حُ"])
                            ],
                            [
                                "kata_arab" => "سَلَّمَ-يُسَلِّمُ عَلَى",
                                "arti" => "Mengucapkan salam",
                                "huruf" => array_unique(["سَ","لَّ","مَ","-","يُ","سَ","لِّ","مُ","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "كَذَبَ-يَكْذِبُ",
                                "arti" => "Berbohong",
                                "huruf" => array_unique(["كَ","ذَ","بَ","-","يَ","كْ","ذِ","بُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 35')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 35");
                        $data['materi'] = "Mufrodat 35";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَصِيْحَةٌ",
                                "arti" => "Nasehat",
                                "huruf" => array_unique(["نَ","صِ","يْ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَوَضَّأٌ",
                                "arti" => "Tempat wudhu",
                                "huruf" => array_unique(["مُ","تَ","وَ","ضَّ","أٌ"])
                            ],
                            [
                                "kata_arab" => "وُضُوْءٌ",
                                "arti" => "Wudhu",
                                "huruf" => array_unique(["وُ","ضُ","وْ","ءٌ"])
                            ],
                            [
                                "kata_arab" => "نَدْوَةٌ",
                                "arti" => "Seminar",
                                "huruf" => array_unique(["نَ","دْ","وَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَمَاعَةٌ",
                                "arti" => "Jama’ah",
                                "huruf" => array_unique(["جَ","مَ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُطْبَةٌ",
                                "arti" => "Khutbah",
                                "huruf" => array_unique(["خُ","طْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَلَاةٌ نَافِلَةٌ",
                                "arti" => "Sholat sunnah",
                                "huruf" => array_unique(["صَ","لَ","ا","ةٌ","نَ","ا","فِ","لَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 36')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 36");
                        $data['materi'] = "Mufrodat 36";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَدَقَ-يَصْدُقُ",
                                "arti" => "Jujur",
                                "huruf" => array_unique(["صَ","دَ","قَ","-","يَ","صْ","دُ","قُ"])
                            ],
                            [
                                "kata_arab" => "صَدَّقَ-يُصَدِّقُ",
                                "arti" => "Membenarkan",
                                "huruf" => array_unique(["صَ","دَّ","قَ","-","يُ","صَ","دِّ","قُ"])
                            ],
                            [
                                "kata_arab" => "سَوَّى-يُسَوِّيْ",
                                "arti" => "Meluruskan",
                                "huruf" => array_unique(["سَ","وَّ","ى","-","يُ","سَ","وِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "ظَلَمَ-يَظْلِمُ",
                                "arti" => "Mendzholimi",
                                "huruf" => array_unique(["ظَ","لَ","مَ","-","يَ","ظْ","لِ","مُ"])
                            ],
                            [
                                "kata_arab" => "تَأَثَّرَ-يَتَأَثَّرُ بِـ",
                                "arti" => "Terpengaruh",
                                "huruf" => array_unique(["تَ","أَ","ثَّ","رَ","-","يَ","تَ","أَ","ثَّ","رُ","بِ","_"])
                            ],
                            [
                                "kata_arab" => "أَدَّى-يُؤَدِّيْ",
                                "arti" => "Melaksanakan",
                                "huruf" => array_unique(["أَ","دَّ","ى","-","يُ","ؤَ","دِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "خَطَبَ-يَخْطُبُ",
                                "arti" => "Berkhotbah",
                                "huruf" => array_unique(["خَ","طَ","بَ","-","يَ","خْ","طُ","بُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 37')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 37");
                        $data['materi'] = "Mufrodat 37";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَبَّحَ-يُسَبِّحُ",
                                "arti" => "Bertasbih",
                                "huruf" => array_unique(["سَ","بَّ","حَ","-","يُ","سَ","بِّ","حُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَغْفَرَ-يَسْتَغْفِرُ",
                                "arti" => "Meminta ampun",
                                "huruf" => array_unique(["اِ","سْ","تَ","غْ","فَ","رَ","-","يَ","سْ","تَ","غْ","فِ","رُ"])
                            ],
                            [
                                "kata_arab" => "حَاضَرَ-يُحَاضِرُ",
                                "arti" => "Mengisi kajian",
                                "huruf" => array_unique(["حَ","ا","ضَ","رَ","-","يُ","حَ","ا","ضِ","رُ"])
                            ],
                            [
                                "kata_arab" => "نَوَى-يَنْوِيْ",
                                "arti" => "Berniat",
                                "huruf" => array_unique(["نَ","وَ","ى","-","يَ","نْ","وِ","يْ"])
                            ],
                            [
                                "kata_arab" => "صَامَ-يَصُوْمُ",
                                "arti" => "Puasa",
                                "huruf" => array_unique(["صَ","ا","مَ","-","يَ","صُ","وْ","مُ"])
                            ],
                            [
                                "kata_arab" => "أَثَّرَ-يُؤَثِّرُ",
                                "arti" => "Mempengaruhi",
                                "huruf" => array_unique(["أَ","ثَّ","رَ","-","يُ","ؤَ","ثِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَحْسَنَ-يُحْسِنُ إِلَى",
                                "arti" => "Berbuat baik",
                                "huruf" => array_unique(["أَ","حْ","سَ","نَ","-","يُ","حْ","سِ","نُ","_","إِ","لَ","ى"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 38')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 38");
                        $data['materi'] = "Mufrodat 38";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَلَاةٌ فَرِيْضَةٌ",
                                "arti" => "Sholat wajib",
                                "huruf" => array_unique(["صَ","لَ","ا","ةٌ","_","فَ","رِ","يْ","ضَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَجَسٌ",
                                "arti" => "Najis",
                                "huruf" => array_unique(["نَ","جَ","سٌ"])
                            ],
                            [
                                "kata_arab" => "بُشْرَى",
                                "arti" => "Kabar baik",
                                "huruf" => array_unique(["بُ","شْ","رَ","ى"])
                            ],
                            [
                                "kata_arab" => "خَبَرٌ مُحْزِنٌ",
                                "arti" => "Kabar buruk",
                                "huruf" => array_unique(["خَ","بَ","رٌ","_","مُ","حْ","زِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "بَرْنَامِجٌ",
                                "arti" => "Acara",
                                "huruf" => array_unique(["بَ","رْ","نَ","ا","مِ","جٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْبُوْقٌ",
                                "arti" => "Masbuk",
                                "huruf" => array_unique(["مَ","سْ","بُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "لَوْحَةُ الْإِعْلَانِ",
                                "arti" => "Papan pengumuman",
                                "huruf" => array_unique(["لَ","وْ","حَ","ةُ","_","ا","لْ","إِ","عْ","لَ","ا","نِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 39')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 39");
                        $data['materi'] = "Mufrodat 39";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَمِدَ-يَحْمَدُ",
                                "arti" => "Memuji",
                                "huruf" => array_unique(["حَ","مِ","دَ","-","يَ","حْ","مَ","دُ"])
                            ],
                            [
                                "kata_arab" => "آذَى-يُؤْذِيْ",
                                "arti" => "Mengganggun",
                                "huruf" => array_unique(["آ","ذَ","ى","-","يُ","ؤْ","ذِ","يْ"])
                            ],
                            [
                                "kata_arab" => "اِرْتَبَكَ-يَرْتَبِكُ",
                                "arti" => "Gemetar (grogi)",
                                "huruf" => array_unique(["اِ","رْ","تَ","بَ","كَ","-","يَ","رْ","تَ","بِ","كُ"])
                            ],
                            [
                                "kata_arab" => "ظَنَّ-يَظُنُّ",
                                "arti" => "Mengira",
                                "huruf" => array_unique(["ظَ","نَّ","-","يَ","ظُ","نُّ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعْفَى-يَسْتَعْفِيْ مِنْ",
                                "arti" => "Meminta maaf",
                                "huruf" => array_unique(["اِ","سْ","تَ","عْ","فَ","ى","-","يَ","سْ","تَ","عْ","فِ","يْ","_","مِ","نْ"])
                            ],
                            [
                                "kata_arab" => "اِجْتَهَدَ-يَجْتَهِدُ",
                                "arti" => "Bersungguh-sungguh",
                                "huruf" => array_unique(["اِ","جْ","تَ","هَ","دَ","-","يَ","جْ","تَ","هِ","دُ"])
                            ],
                            [
                                "kata_arab" => "طَرَدَ-يَطْرُدُ",
                                "arti" => "Mengusir",
                                "huruf" => array_unique(["طَ","رَ","دَ","-","يَ","طْ","رُ","دُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 40')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 40");
                        $data['materi'] = "Mufrodat 40";
                        $data['tema'] = "Tema 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَئِمَ-يَسْأَمُ",
                                "arti" => "Bosan",
                                "huruf" => array_unique(["سَ","ئِ","مَ","-","يَ","سْ","أَ","مُ"])
                            ],
                            [
                                "kata_arab" => "رَجَا-يَرْجُوْ",
                                "arti" => "Berharap",
                                "huruf" => array_unique(["رَ","جَ","ا","-","يَ","رْ","جُ","وْ"])
                            ],
                            [
                                "kata_arab" => "اِنْتَبَهَ-يَنْتَبِهُ",
                                "arti" => "Memperhatikan",
                                "huruf" => array_unique(["اِ","نْ","تَ","بَ","هَ","-","يَ","نْ","تَ","بِ","هُ"])
                            ],
                            [
                                "kata_arab" => "أَمَّ-يَؤُمُّ",
                                "arti" => "Menjadi imam",
                                "huruf" => array_unique(["أَ","مَّ","-","يَ","ؤُ","مُّ"])
                            ],
                            [
                                "kata_arab" => "غَفَلَ-يَغْفُلُ عَنْ",
                                "arti" => "Lalai",
                                "huruf" => array_unique(["غَ","فَ","لَ","-","يَ","غْ","فُ","لُ","_","عَ","نْ"])
                            ],
                            [
                                "kata_arab" => "صَحَّحَ-يُصَحِّحُ",
                                "arti" => "Membenarkan",
                                "huruf" => array_unique(["صَ","حَّ","حَ","-","يُ","صَ","حِّ","حُ"])
                            ],
                            [
                                "kata_arab" => "خَشَعَ-يَخْشَعُ",
                                "arti" => "Khusyuk",
                                "huruf" => array_unique(["خَ","شَ","عَ","-","يَ","خْ","شَ","عُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 41')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 41");
                        $data['materi'] = "Mufrodat 41";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَوْقِدٌ",
                                "arti" => "Kompor",
                                "huruf" => array_unique(["مَ","وْ","قِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْلَاةٌ",
                                "arti" => "Wajan",
                                "huruf" => array_unique(["مِ","قْ","لَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَازٌ",
                                "arti" => "Gas",
                                "huruf" => array_unique(["غَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "صَحْنٌ",
                                "arti" => "Piring",
                                "huruf" => array_unique(["صَ","حْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "كُوْبٌ",
                                "arti" => "Gelas",
                                "huruf" => array_unique(["كُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةٌ",
                                "arti" => "Sendok",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَائِدَةٌ",
                                "arti" => "Meja makan",
                                "huruf" => array_unique(["مَ","ا","ئِ","دَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 42')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 42");
                        $data['materi'] = "Mufrodat 42";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                " kata_arab" => "أَكَلَ-يَأْكُلُ",
                                "arti" => "Makan",
                                "huruf" => array_unique(["أَ","كَ","لَ","-","يَ","أْ","كُ","لُ"])
                            ],
                            [
                                " kata_arab" => "شَرِبَ-يَشْرَبُ",
                                "arti" => "Minum",
                                "huruf" => array_unique(["شَ","رِ","بَ","-","يَ","شْ","رَ","بُ"])
                            ],
                            [
                                " kata_arab" => "جَاعَ-يَجُوْعُ",
                                "arti" => "Lapar",
                                "huruf" => array_unique(["جَ","ا","عَ","-","يَ","جُ","وْ","عُ"])
                            ],
                            [
                                " kata_arab" => "عَطِشَ-يَعْطَشُ",
                                "arti" => "Haus",
                                "huruf" => array_unique(["عَ","طِ","شَ","-","يَ","عْ","طَ","شُ"])
                            ],
                            [
                                " kata_arab" => "شَبِعَ-يَشْبَعُ",
                                "arti" => "Kenyang",
                                "huruf" => array_unique(["شَ","بِ","عَ","-","يَ","شْ","بَ","عُ"])
                            ],
                            [
                                " kata_arab" => "طَبَخَ-يَطْبَخُ",
                                "arti" => "Memasak",
                                "huruf" => array_unique(["طَ","بَ","خَ","-","يَ","طْ","بَ","خُ"])
                            ],
                            [
                                " kata_arab" => "غَلَى-يَغْلِيْ",
                                "arti" => "Mendidih",
                                "huruf" => array_unique(["غَ","لَ","ى","-","يَ","غْ","لِ","يْ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 43')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 43");
                        $data['materi'] = "Mufrodat 43";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَوْكَةٌ",
                                "arti" => "Garpu",
                                "huruf" => array_unique(["شَ","وْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَصْعَةٌ",
                                "arti" => "Nampan",
                                "huruf" => array_unique(["قَ","صْ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قِدْرٌ",
                                "arti" => "Panci",
                                "huruf" => array_unique(["قِ","دْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سِكِّيْنٌ",
                                "arti" => "Pisau",
                                "huruf" => array_unique(["سِ","كِّ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "زَمْزَمِيَّةٌ",
                                "arti" => "Termos",
                                "huruf" => array_unique(["زَ","مْ","زَ","مِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "ثَلَّاجَةٌ",
                                "arti" => "Kulkas",
                                "huruf" => array_unique(["ثَ","لَّ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَارُوْرَةٌ",
                                "arti" => "Botol",
                                "huruf" => array_unique(["قَ","ا","رُ","وْ","رَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 44')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 44");
                        $data['materi'] = "Mufrodat 44";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَلَى-يَقْلِيْ",
                                "arti" => "Menggoreng",
                                "huruf" => array_unique(["قَ","لَ","ى","-","يَ","قْ","لِ","يْ"])
                            ],
                            [
                                "kata_arab" => "قَطَعَ-يَقْطَعُ",
                                "arti" => "Memotong",
                                "huruf" => array_unique(["قَ","طَ","عَ","-","يَ","قْ","طَ","عُ"])
                            ],
                            [
                                "kata_arab" => "سَلَقَ-يَسْلُقُ",
                                "arti" => "Merebus",
                                "huruf" => array_unique(["سَ","لَ","قَ","-","يَ","سْ","لُ","قُ"])
                            ],
                            [
                                "kata_arab" => "صَبَّ-يَصُبُّ",
                                "arti" => "Menuangkan",
                                "huruf" => array_unique(["صَ","بَّ","-","يَ","صُ","بُّ"])
                            ],
                            [
                                "kata_arab" => "سَكَبَ-يَسْكُبُ",
                                "arti" => "Menumpahkan",
                                "huruf" => array_unique(["سَ","كَ","بَ","-","يَ","سْ","كُ","بُ"])
                            ],
                            [
                                "kata_arab" => "حَجَزَ-يَحْجِزُ",
                                "arti" => "Memesan",
                                "huruf" => array_unique(["حَ","جَ","زَ","-","يَ","حْ","جِ","زُ"])
                            ],
                            [
                                "kata_arab" => "ضَيَّفَ-يُضَيِّفُ",
                                "arti" => "Mentraktir",
                                "huruf" => array_unique(["ضَ","يَّ","فَ","-","يُ","ضَ","يِّ","فُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 45')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 45");
                        $data['materi'] = "Mufrodat 45";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غِطَاءٌ",
                                "arti" => "Tutup",
                                "huruf" => array_unique(["غِ","طَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مَطْعَمٌ",
                                "arti" => "Tempat makan",
                                "huruf" => array_unique(["مَ","طْ","عَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "طَابُوْرٌ",
                                "arti" => "Antre",
                                "huruf" => array_unique(["طَ","ا","بُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "وَجْبَةٌ",
                                "arti" => "Jatah/porsi",
                                "huruf" => array_unique(["وَ","جْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَطُوْرٌ",
                                "arti" => "Makan pagi",
                                "huruf" => array_unique(["فَ","طُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "غَدَاءٌ",
                                "arti" => "Makan siang",
                                "huruf" => array_unique(["غَ","دَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "عَشَاءٌ",
                                "arti" => "Makan malam",
                                "huruf" => array_unique(["عَ","شَ","ا","ءٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 46')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 46");
                        $data['materi'] = "Mufrodat 46";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] =[
                            [
                                "kata_arab" => "أَطْعَمَ-يُطْعِمُ",
                                "arti" => "Memberi makan",
                                "huruf" => array_unique(["أَ","طْ","عَ","مَ","-","يُ","طْ","عِ","مُ"])
                            ],
                            [
                                "kata_arab" => "شَمَّ-يَشُمُّ",
                                "arti" => "Mencium (hidung)",
                                "huruf" => array_unique(["شَ","مَّ","-","يَ","شُ","مُّ"])
                            ],
                            [
                                "kata_arab" => "أَسْقَطَ-يُسْقِطُ",
                                "arti" => "Menjatuhkan",
                                "huruf" => array_unique(["أَ","سْ","قَ","طَ","-","يُ","سْ","قِ","طُ"])
                            ],
                            [
                                "kata_arab" => "سَقَى-يَسْقِيْ",
                                "arti" => "Memberi minum",
                                "huruf" => array_unique(["سَ","قَ","ى","-","يَ","سْ","قِ","يْ"])
                            ],
                            [
                                "kata_arab" => "اِنْكَسَرَ-يَنْكَسِرُ",
                                "arti" => "Pecah",
                                "huruf" => array_unique(["اِ","نْ","كَ","سَ","رَ","-","يَ","نْ","كَ","سِ","رُ"])
                            ],
                            [
                                "kata_arab" => "مَضَغَ-يَمْضَغُ",
                                "arti" => "Mengunyah",
                                "huruf" => array_unique(["مَ","ضَ","غَ","-","يَ","مْ","ضَ","غُ"])
                            ],
                            [
                                "kata_arab" => "كَسَّرَ-يُكَسِّرُ",
                                "arti" => "Memecahkan",
                                "huruf" => array_unique(["كَ","سَّ","رَ","-","يُ","كَ","سِّ","رُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 47')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 47");
                        $data['materi'] = "Mufrodat 47";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فِنْجَانٌ",
                                "arti" => "Cangkir",
                                "huruf" => array_unique(["فِ","نْ","جَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "جَالُوْنٌ",
                                "arti" => "Galon",
                                "huruf" => array_unique(["جَ","ا","لُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "عُلْبَةٌ",
                                "arti" => "Kaleng",
                                "huruf" => array_unique(["عُ","لْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْعَدٌ",
                                "arti" => "Bangku",
                                "huruf" => array_unique(["مَ","قْ","عَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةُ الرُّزِّ",
                                "arti" => "Centong",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","ا","ل","رُّ","زِّ"])
                            ],
                            [
                                "kata_arab" => "مَطْبَخٌ",
                                "arti" => "Dapur",
                                "huruf" => array_unique(["مَ","طْ","بَ","خٌ"])
                            ],
                            [
                                "kata_arab" => "طَعَامٌ",
                                "arti" => "Makanan",
                                "huruf" => array_unique(["طَ","عَ","ا","مٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 48')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 48");
                        $data['materi'] = "Mufrodat 48";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خَلَّطَ-يُخَلِّطُ",
                                "arti" => "Mencampurkan",
                                "huruf" => array_unique(["خَ","لَّ","طَ","-","يُ","خَ","لِّ","طُ"])
                            ],
                            [
                                "kata_arab" => "اِخْتَلَطَ-يَخْتَلِطُ",
                                "arti" => "Bercampur",
                                "huruf" => array_unique(["اِ","خْ","تَ","لَ","طَ","-","يَ","خْ","تَ","لِ","طُ"])
                            ],
                            [
                                "kata_arab" => "زَادَ-يَزِيْدُ",
                                "arti" => "Bertambah/menambahkan",
                                "huruf" => array_unique(["زَ","ا","دَ","-","يَ","زِ","يْ","دُ"])
                            ],
                            [
                                "kata_arab" => "نَقَصَ-يَنْقُصُ",
                                "arti" => "Berkurang/mengurangi",
                                "huruf" => array_unique(["نَ","قَ","صَ","-","يَ","نْ","قُ","صُ"])
                            ],
                            [
                                "kata_arab" => "بَلَعَ-يَبْلَعُ",
                                "arti" => "Menelan",
                                "huruf" => array_unique(["بَ","لَ","عَ","-","يَ","بْ","لَ","عُ"])
                            ],
                            [
                                "kata_arab" => "نَزَلَ-يَنْزِلُ",
                                "arti" => "Turun",
                                "huruf" => array_unique(["نَ","زَ","لَ","-","يَ","نْ","زِ","لُ"])
                            ],
                            [
                                "kata_arab" => "خَضَّ-يَخُضُّ",
                                "arti" => "Mengocok",
                                "huruf" => array_unique(["خَ","ضَّ","-","يَ","خُ","ضُّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 49')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 49");
                        $data['materi'] = "Mufrodat 49";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَرَابٌ",
                                "arti" => "Minuman",
                                "huruf" => array_unique(["شَ","رَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْهًى",
                                "arti" => "Kafe",
                                "huruf" => array_unique(["مَ","قْ","هً","ى"])
                            ],
                            [
                                "kata_arab" => "جَفْنَةٌ",
                                "arti" => "Mangkok",
                                "huruf" => array_unique(["جَ","فْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِدَامٌ",
                                "arti" => "Lauk",
                                "huruf" => array_unique(["إِ","دَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "بَهَارَةٌ",
                                "arti" => "Bumbu",
                                "huruf" => array_unique(["بَ","هَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَلْصَةُ الصُّوْيَا",
                                "arti" => "Kecap",
                                "huruf" => array_unique(["صَ","لْ","صَ","ةُ","_","ا","ل","صُّ","وْ","يَ","ا"])
                            ],
                            [
                                "kata_arab" => "شَطَّةٌ حَارَّةٌ",
                                "arti" => "Saos",
                                "huruf" => array_unique(["شَ","طَّ","ةٌ","_","حَ","ا","رَّ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 50')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 50");
                        $data['materi'] = "Mufrodat 50";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَدَّ-يَقُدُّ",
                                "arti" => "Mengiris",
                                "huruf" => array_unique(["قَ","دَّ","-","يَ","قُ","دُّ"])
                            ],
                            [
                                "kata_arab" => "اِنْسَكَبَ-يَنْسَكِبُ",
                                "arti" => "Tumpah",
                                "huruf" => array_unique(["اِ","نْ","سَ","كَ","بَ","-","يَ","نْ","سَ","كِ","بُ"])
                            ],
                            [
                                "kata_arab" => "حَرَّكَ-يُحَرِّكُ",
                                "arti" => "Mengaduk",
                                "huruf" => array_unique(["حَ","رَّ","كَ","-","يُ","حَ","رِّ","كُ"])
                            ],
                            [
                                "kata_arab" => "أَحْرَقَ-يُحْرِقُ",
                                "arti" => "Membakar",
                                "huruf" => array_unique(["أَ","حْ","رَ","قَ","-","يُ","حْ","رِ","قُ"])
                            ],
                            [
                                "kata_arab" => "اِحْتَرَقَ-يَحْتَرِقُ",
                                "arti" => "Terbakar",
                                "huruf" => array_unique(["اِ","حْ","تَ","رَ","قَ","-","يَ","حْ","تَ","رِ","قُ"])
                            ],
                            [
                                "kata_arab" => "أَزْعَجَ-يُزْعِجُ",
                                "arti" => "Ribut",
                                "huruf" => array_unique(["أَ","زْ","عَ","جَ","-","يُ","زْ","عِ","جُ"])
                            ],
                            [
                                "kata_arab" => "اِزْدَحَمَ-يَزْدَحِمُ",
                                "arti" => "Ramai",
                                "huruf" => array_unique(["اِ","زْ","دَ","حَ","مَ","-","يَ","زْ","دَ","حِ","مُ"])
                            ]
                        ];
                    }
                // 1 - 50

                // 51 - 100
                    else if($_GET['latihan'] == MD5('Mufrodat 51')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 51");
                        $data['materi'] = "Mufrodat 51";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَائِحَةٌ",
                                "arti" => "Aroma",
                                "huruf" => array_unique(["رَ","ا","ئِ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زِيْرٌ",
                                "arti" => "Tong",
                                "huruf" => array_unique(["زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْحٌ",
                                "arti" => "Garam",
                                "huruf" => array_unique(["مِ","لْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "سُكَّرٌ",
                                "arti" => "Gula",
                                "huruf" => array_unique(["سُ","كَّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "زَيْتٌ",
                                "arti" => "Minyak",
                                "huruf" => array_unique(["زَ","يْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "مَرَقَةٌ",
                                "arti" => "Kuah",
                                "huruf" => array_unique(["مَ","رَ","قَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 52')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 52");
                        $data['materi'] = "Mufrodat 52";
                        $data['tema'] = "Tema 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَزَّعَ-يُوَزِّعُ",
                                "arti" => "Membagikan",
                                "huruf" => array_unique(["وَ","زَّ","عَ","-","يُ","وَ","زِّ","عُ"])
                            ],
                            [
                                "kata_arab" => "طَمَعَ-يَطْمَعُ",
                                "arti" => "Tamak/rakus",
                                "huruf" => array_unique(["طَ","مَ","عَ","-","يَ","طْ","مَ","عُ"])
                            ],
                            [
                                "kata_arab" => "قَنَعَ-يَقْنَعُ",
                                "arti" => "Cukup",
                                "huruf" => array_unique(["قَ","نَ","عَ","-","يَ","قْ","نَ","عُ"])
                            ],
                            [
                                "kata_arab" => "اِشْتَرَى-يَشْتَرِيْ",
                                "arti" => "Membeli",
                                "huruf" => array_unique(["اِ","شْ","تَ","رَ","ى","-","يَ","شْ","تَ","رِ","يْ"])
                            ],
                            [
                                "kata_arab" => "بَاعَ-يَبِيْعُ",
                                "arti" => "Menjual",
                                "huruf" => array_unique(["بَ","ا","عَ","-","يَ","بِ","يْ","عُ"])
                            ],
                            [
                                "kata_arab" => "حَصَلَ-يَحْصُلُ عَلَى",
                                "arti" => "Medapatkan",
                                "huruf" => array_unique(["حَ","صَ","لَ","-","يَ","حْ","صُ","لُ","_","عَ","لَ","ى"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 53')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 53");
                        $data['materi'] = "Mufrodat 53";
                        $data['tema'] = "Tema 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَلْوٌ",
                                "arti" => "Ember",
                                "huruf" => array_unique(["دَ","لْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "مِغْرَفَةٌ",
                                "arti" => "Gayung",
                                "huruf" => array_unique(["مِ","غْ","رَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَةُ الْأَسْنَانِ",
                                "arti" => "Sikat gigi",
                                "huruf" => array_unique(["فُ","رْ","شَ","ةُ","_","ا","لْ","أَ","سْ","نَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "مَعْجُوْنُ الْأَسْنَانِ",
                                "arti" => "Odol",
                                "huruf" => array_unique(["مَ","عْ","جُ","وْ","نُ","_","ا","لْ","أَ","سْ","نَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "صَابُوْنَةٌ",
                                "arti" => "Sabun",
                                "huruf" => array_unique(["صَ","ا","بُ","وْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَامْبُوْ",
                                "arti" => "Sampo",
                                "huruf" => array_unique(["شَ","ا","مْ","بُ","وْ"])
                            ],
                            [
                                "kata_arab" => "مِنْشَفَةٌ",
                                "arti" => "Handuk",
                                "huruf" => array_unique(["مِ","نْ","شَ","فَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 54')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 54");
                        $data['materi'] = "Mufrodat 54";
                        $data['tema'] = "Tema 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِغْتَسَلَ-يَغْتَسِلُ",
                                "arti" => "Mandi",
                                "huruf" => array_unique(["اِ","غْ","تَ","سَ","لَ","-","يَ","غْ","تَ","سِ","لُ"])
                            ],
                            [
                                "kata_arab" => "فَرَّشَ-يُفَرِّشُ",
                                "arti" => "Menyikat",
                                "huruf" => array_unique(["فَ","رَّ","شَ","-","يُ","فَ","رِّ","شُ"])
                            ],
                            [
                                "kata_arab" => "تَسَوَّكَ-يَتَسَوَّكُ",
                                "arti" => "Menyikat gigi",
                                "huruf" => array_unique(["تَ","سَ","وَّ","كَ","-","يَ","تَ","سَ","وَّ","كُ"])
                            ],
                            [
                                "kata_arab" => "سَقَى-يَسْقِيْ",
                                "arti" => "Menyiram",
                                "huruf" => array_unique(["سَ","قَ","ى","-","يَ","سْ","قِ","يْ"])
                            ],
                            [
                                "kata_arab" => "بَالَ-يَبُوْلُ",
                                "arti" => "BAK",
                                "huruf" => array_unique(["بَ","ا","لَ","-","يَ","بُ","وْ","لُ"])
                            ],
                            [
                                "kata_arab" => "تَغَوَّطَ-يَتَغَوَّطُ",
                                "arti" => "BAB",
                                "huruf" => array_unique(["تَ","غَ","وَّ","طَ","-","يَ","تَ","غَ","وَّ","طُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 55')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 55");
                        $data['materi'] = "Mufrodat 55";
                        $data['tema'] = "Tema 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَنْبُوْرٌ",
                                "arti" => "Kran air",
                                "huruf" => array_unique(["صَ","نْ","بُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "حَمَّامٌ",
                                "arti" => "Kamar mandi",
                                "huruf" => array_unique(["حَ","مَّ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَةٌ",
                                "arti" => "Sikat",
                                "huruf" => array_unique(["فُ","رْ","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُوْسَى",
                                "arti" => "Silet cukur",
                                "huruf" => array_unique(["مُ","وْ","سَ","ى"])
                            ],
                            [
                                "kata_arab" => "قَضَاءُ الْحَاجَةِ",
                                "arti" => "Buang hajat",
                                "huruf" => array_unique(["قَ","ضَ","ا","ءُ","_","ا","لْ","حَ","ا","جَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "مِزْلَاجٌ",
                                "arti" => "Slot (kunci kamar)",
                                "huruf" => array_unique(["مِ","زْ","لَ","ا","جٌ"])
                            ],
                            [
                                "kata_arab" => "دَوْرَةُ الْمِيَاهِ",
                                "arti" => "Toilet",
                                "huruf" => array_unique(["دَ","وْ","رَ","ةُ","_","ا","لْ","مِ","يَ","ا","هِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 56')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 56");
                        $data['materi'] = "Mufrodat 56";
                        $data['tema'] = "Tema 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَالَ-يَسِيْلُ",
                                "arti" => "Mengalir",
                                "huruf" => array_unique(["سَ","ا","لَ","-","يَ","سِ","يْ",'لُ'])
                            ],
                            [
                                "kata_arab" => "مَسَحَ-يَمْسَحُ",
                                "arti" => "Mengusap",
                                "huruf" => array_unique(["مَ","سَ","حَ","-","يَ","مْ","سَ","حُ"])
                            ],
                            [
                                "kata_arab" => "قَرْفَصَ-يُقَرْفِصُ",
                                "arti" => "Jongkok",
                                "huruf" => array_unique(["قَ","رْ","فَ","صَ","-","يُ","قَ","رْ","فِ","صُ"])
                            ],
                            [
                                "kata_arab" => "غَسَلَ-يَغْسِلُ",
                                "arti" => "Mencuci",
                                "huruf" => array_unique(["غَ","سَ","لَ","-","يَ","غْ","سِ","لُ"])
                            ],
                            [
                                "kata_arab" => "نَقَعَ-يَنْقَعُ",
                                "arti" => "Merendam",
                                "huruf" => array_unique(["نَ","قَ","عَ","-","يَ","نْ","قَ",'عُ'])
                            ],
                            [
                                "kata_arab" => "رَشَّ-يَرُشُّ",
                                "arti" => "Menyemprot",
                                "huruf" => array_unique(["رَ","شَّ","-","يَ","رُ","شُّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 57')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 57");
                        $data['materi'] = "Mufrodat 57";
                        $data['tema'] = "Tema 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "زَبَدٌ",
                                "arti" => "Busa",
                                "huruf" => array_unique(["زَ","بَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "أَدَاةٌ",
                                "arti" => "Peralatan",
                                "huruf" => array_unique(["أَ","دَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْلَاقٌ",
                                "arti" => "Gantungan",
                                "huruf" => array_unique(["مِ","عْ","لَ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَادَّةٌ مُنَظِّفَةٌ",
                                "arti" => "Detergen",
                                "huruf" => array_unique(["مَ","ا","دَّ","ةٌ","_","مُ","نَ","ظِّ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بِرْكَةٌ",
                                "arti" => "Bak",
                                "huruf" => array_unique(["بِ","رْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُرْطُوْمٌ",
                                "arti" => "Selang",
                                "huruf" => array_unique(["خُ","رْ","طُ","وْ","مٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 58')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 58");
                        $data['materi'] = "Mufrodat 58";
                        $data['tema'] = "Tema 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِسْتَنْجَى-يَسْتَنْجِيْ",
                                "arti" => "Cebok",
                                "huruf" => array_unique(["اِ","سْ","تَ","نْ","جَ","ى","-","يَ","سْ","تَ","نْ","جِ","يْ"])
                            ],
                            [
                                "kata_arab" => "عَصَرَ-يَعْصِرُ",
                                "arti" => "Memeras",
                                "huruf" => array_unique(["عَ","صَ","رَ","-","يَ","عْ","صِ",'رُ'])
                            ],
                            [
                                "kata_arab" => "تَمَضْمَضَ-يَتَمَضْمَضَ",
                                "arti" => "Berkumur-kumur",
                                "huruf" => array_unique(["تَ","مَ","ضْ","مَ","ضَ","-","يَ","تَ","مَ","ضْ","مَ",'ضَ'])
                            ],
                            [
                                "kata_arab" => "اِنْزَلَقَ-يَنْزَلِقُ",
                                "arti" => "Terpeleset",
                                "huruf" => array_unique(["اِ","نْ","زَ","لَ","قَ","-","يَ","نْ","زَ","لِ","قُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَقْذَرَ-يَسْتَقْذِرُ",
                                "arti" => "Merasa jijik",
                                "huruf" => array_unique(["اِ","سْ","تَ","قْ","ذَ","رَ","-","يَ","سْ","تَ","قْ","ذِ","رُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 59')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 59");
                        $data['materi'] = "Mufrodat 59";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَمِيْلٌ",
                                "arti" => "Bagus/indah",
                                "huruf" => array_unique(["جَ","مِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَبِيْحٌ",
                                "arti" => "Jelek",
                                "huruf" => array_unique(["قَ","بِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "نَظِيْفٌ",
                                "arti" => "Bersih",
                                "huruf" => array_unique(["نَ","ظِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "وَسِخٌ",
                                "arti" => "Kotor",
                                "huruf" => array_unique(["وَ","سِ","خٌ"])
                            ],
                            [
                                "kata_arab" => "مُظْلِمٌ",
                                "arti" => "Gelap",
                                "huruf" => array_unique(["مُ","ظْ","لِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُنِيْرٌ",
                                "arti" => "Terang",
                                "huruf" => array_unique(["مُ","نِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "طَوِيْلٌ",
                                "arti" => "Tinggi",
                                "huruf" => array_unique(["طَ","وِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَصِيْرٌ",
                                "arti" => "Pendek",
                                "huruf" => array_unique(["قَ","صِ","يْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 60')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 60");
                        $data['materi'] = "Mufrodat 60";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاسِعٌ",
                                "arti" => "Luas",
                                "huruf" => array_unique(["وَ","ا","سِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "ضَيِّقٌ",
                                "arti" => "Sempit",
                                "huruf" => array_unique(["ضَ","يِّ","قٌ"])
                            ],
                            [
                                "kata_arab" => "كَبِيْرٌ",
                                "arti" => "Besar",
                                "huruf" => array_unique(["كَ","بِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "صَغِيْرٌ",
                                "arti" => "Kecil",
                                "huruf" => array_unique(["صَ","غِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَمِيْنٌ",
                                "arti" => "Gemuk",
                                "huruf" => array_unique(["سَ","مِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "نَحِيْفٌ",
                                "arti" => "Kurus",
                                "huruf" => array_unique(["نَ","حِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "بَعِيْدٌ",
                                "arti" => "Jauh",
                                "huruf" => array_unique(["بَ","عِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "قَرِيْبٌ",
                                "arti" => "Dekat",
                                "huruf" => array_unique(["قَ","رِ","يْ","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 61')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 61");
                        $data['materi'] = "Mufrodat 61";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَرِيْعٌ",
                                "arti" => "Cepat",
                                "huruf" => array_unique(["سَ","رِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "بَطِيْءٌ",
                                "arti" => "Lambat",
                                "huruf" => array_unique(["بَ","طِ","يْ","ءٌ"])
                            ],
                            [
                                "kata_arab" => "كَثِيْرٌ",
                                "arti" => "Banyak",
                                "huruf" => array_unique(["كَ","ثِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلِيْلٌ",
                                "arti" => "Sedikit",
                                "huruf" => array_unique(["قَ","لِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "سَهْلٌ",
                                "arti" => "Mudah",
                                "huruf" => array_unique(["سَ","هْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "صَعْبٌ",
                                "arti" => "Susah",
                                "huruf" => array_unique(["صَ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مَبْلُوْلٌ",
                                "arti" => "Basah",
                                "huruf" => array_unique(["مَ","بْ","لُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَافٌّ",
                                "arti" => "Kering",
                                "huruf" => array_unique(["جَ","ا","فٌّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 62')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 62");
                        $data['materi'] = "Mufrodat 62";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَلِيْظٌ",
                                "arti" => "Tebal",
                                "huruf" => array_unique(["غَ","لِ","يْ","ظٌ"])
                            ],
                            [
                                "kata_arab" => "رَقِيْقٌ",
                                "arti" => "Tipis",
                                "huruf" => array_unique(["رَ","قِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُرْتَفِعٌ",
                                "arti" => "Tinggi",
                                "huruf" => array_unique(["مُ","رْ","تَ","فِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْخَفِضٌ",
                                "arti" => "Rendah",
                                "huruf" => array_unique(["مُ","نْ","خَ","فِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "جَبَانٌ",
                                "arti" => "Pecundang",
                                "huruf" => array_unique(["جَ","بَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "شُجَاعٌ",
                                "arti" => "Pemberani",
                                "huruf" => array_unique(["شُ","جَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "قَوِيٌّ",
                                "arti" => "Kuat",
                                "huruf" => array_unique(["قَ","وِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "ضَعِيْفٌ",
                                "arti" => "Lemah",
                                "huruf" => array_unique(["ضَ","عِ","يْ","فٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 63')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 63");
                        $data['materi'] = "Mufrodat 63";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَيٌّ",
                                "arti" => "Hidup",
                                "huruf" => array_unique(["حَ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مَيِّتٌ",
                                "arti" => "Mati",
                                "huruf" => array_unique(["مَ","يِّ","تٌ"])
                            ],
                            [
                                "kata_arab" => "مُضْحِكٌ",
                                "arti" => "Lucu",
                                "huruf" => array_unique(["مُ","ضْ","حِ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مُعْجِبٌ",
                                "arti" => "Mempesona",
                                "huruf" => array_unique(["مُ","عْ","جِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُمْتَازٌ",
                                "arti" => "Istimewa",
                                "huruf" => array_unique(["مُ","مْ","تَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "حَسَنٌ",
                                "arti" => "Baik",
                                "huruf" => array_unique(["حَ","سَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَرٌّ",
                                "arti" => "Buruk",
                                "huruf" => array_unique(["شَ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "مُرَتَّبٌ",
                                "arti" => "Rapi",
                                "huruf" => array_unique(["مُ","رَ","تَّ","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 64')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 64");
                        $data['materi'] = "Mufrodat 64";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُتَبَعْثِرٌ",
                                "arti" => "Berantakan",
                                "huruf" => array_unique(["مُ","تَ","بَ","عْ","ثِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "شَدِيْدٌ",
                                "arti" => "Keras",
                                "huruf" => array_unique(["شَ","دِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "لَيِّنٌ",
                                "arti" => "Lunak",
                                "huruf" => array_unique(["لَ","يِّ","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَادٌّ",
                                "arti" => "Tajam",
                                "huruf" => array_unique(["حَ","ا","دٌّ"])
                            ],
                            [
                                "kata_arab" => "كَلِيْلٌ",
                                "arti" => "Tumpul",
                                "huruf" => array_unique(["كَ","لِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَخِيْلٌ",
                                "arti" => "Pelit",
                                "huruf" => array_unique(["بَ","خِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَادٌ",
                                "arti" => "Dermawan",
                                "huruf" => array_unique(["جَ","وَ","ا","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَشْغُوْلٌ",
                                "arti" => "Sibuk",
                                "huruf" => array_unique(["مَ","شْ","غُ","وْ","لٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 65')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 65");
                        $data['materi'] = "Mufrodat 65";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شِرِّيْرٌ",
                                "arti" => "Nakal",
                                "huruf" => array_unique(["شِ","رِّ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "عَادٍ",
                                "arti" => "Biasa",
                                "huruf" => array_unique(["عَ","ا","دٍ"])
                            ],
                            [
                                "kata_arab" => "مَجَّانٌ",
                                "arti" => "Gratis",
                                "huruf" => array_unique(["مَ","جَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "سَاخِنٌ",
                                "arti" => "Hangat",
                                "huruf" => array_unique(["سَ","ا","خِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "مَجْنُوْنٌ",
                                "arti" => "Gila",
                                "huruf" => array_unique(["مَ","جْ","نُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "كَرِيْمٌ",
                                "arti" => "Mulia",
                                "huruf" => array_unique(["كَ","رِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَهِيْنٌ",
                                "arti" => "Hina",
                                "huruf" => array_unique(["مَ","هِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "كَثِيْفٌ",
                                "arti" => "Lebat",
                                "huruf" => array_unique(["كَ","ثِ","يْ","فٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 66')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 66");
                        $data['materi'] = "Mufrodat 66";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَابٌّ",
                                "arti" => "Muda",
                                "huruf" => array_unique(["شَ","ا","بٌّ"])
                            ],
                            [
                                "kata_arab" => "عَجُوْزٌ",
                                "arti" => "Tua",
                                "huruf" => array_unique(["عَ","جُ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "سَعِيْدٌ",
                                "arti" => "Bahagia",
                                "huruf" => array_unique(["سَ","عِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "شَقِيٌّ",
                                "arti" => "Sengsara",
                                "huruf" => array_unique(["شَ","قِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "وَسِيْمٌ",
                                "arti" => "Tampan",
                                "huruf" => array_unique(["وَ","سِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "صَافٍ",
                                "arti" => "Jernih",
                                "huruf" => array_unique(["صَ","ا","فٍ"])
                            ],
                            [
                                "kata_arab" => "مُتَنَوِّعٌ",
                                "arti" => "Bermacam-macam",
                                "huruf" => array_unique(["مُ","تَ","نَ","وِّ","عٌ"])
                            ],
                            [
                                "kata_arab" => "كَسْلَانُ",
                                "arti" => "Malas",
                                "huruf" => array_unique(["كَ","سْ","لَ","ا","نُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 67')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 67");
                        $data['materi'] = "Mufrodat 67";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَشِيْطٌ",
                                "arti" => "Rajin",
                                "huruf" => array_unique(["نَ","شِ","يْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مَاهِرٌ",
                                "arti" => "Pandai",
                                "huruf" => array_unique(["مَ","ا","هِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "هَادِئٌ",
                                "arti" => "Tenang",
                                "huruf" => array_unique(["هَ","ا","دِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "عَامٌّ",
                                "arti" => "Umum",
                                "huruf" => array_unique(["عَ","ا","مٌّ"])
                            ],
                            [
                                "kata_arab" => "مَوْجُوْدٌ",
                                "arti" => "Ada",
                                "huruf" => array_unique(["مَ","وْ","جُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَهْمُوْمٌ",
                                "arti" => "Galau",
                                "huruf" => array_unique(["مَ","هْ","مُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَثْقُوْبٌ",
                                "arti" => "Bolong",
                                "huruf" => array_unique(["مَ","ثْ","قُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَقِيْمٌ",
                                "arti" => "Lurus",
                                "huruf" => array_unique(["مُ","سْ","تَ","قِ","يْ","مٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 68')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 68");
                        $data['materi'] = "Mufrodat 68";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَرِيْبٌ",
                                "arti" => "Asing",
                                "huruf" => array_unique(["غَ","رِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْتِنٌ",
                                "arti" => "Basi",
                                "huruf" => array_unique(["مُ","نْ","تِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "خَطِيْرٌ",
                                "arti" => "Berbahaya",
                                "huruf" => array_unique(["خَ","طِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ذَكِيٌّ",
                                "arti" => "Cerdas",
                                "huruf" => array_unique(["ذَ","كِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُتَرَدِّدٌ",
                                "arti" => "Ragu-ragu",
                                "huruf" => array_unique(["مُ","تَ","رَ","دِّ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَأَكِّدٌ",
                                "arti" => "Yakin",
                                "huruf" => array_unique(["مُ","تَ","أَ","كِّ","دٌ"])
                            ],
                            [
                                "kata_arab" => "غَنِيٌّ",
                                "arti" => "Kaya",
                                "huruf" => array_unique(["غَ","نِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُتَفَرِّقٌ",
                                "arti" => "Berbeda",
                                "huruf" => array_unique(["مُ","تَ","فَ","رِّ","قٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 69')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 69");
                        $data['materi'] = "Mufrodat 69";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُتَسَاوٍ",
                                "arti" => "Sama",
                                "huruf" => array_unique(["مُ","تَ","سَ","ا","وٍ"])
                            ],
                            [
                                "kata_arab" => "غَزِيْرٌ",
                                "arti" => "Deras",
                                "huruf" => array_unique(["غَ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُخِيْفٌ",
                                "arti" => "Menakutkan",
                                "huruf" => array_unique(["مُ","خِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "غَيْرُ وَاضِحٍ",
                                "arti" => " Tidak jelas",
                                "huruf" => array_unique(["غَ","يْ","رُ","_","وَ","ا","ضِ","حٍ"])
                            ],
                            [
                                "kata_arab" => "عَالٍ",
                                "arti" => "Tinggi",
                                "huruf" => array_unique(["عَ","ا","لٍ"])
                            ],
                            [
                                "kata_arab" => "لَازِمٌ",
                                "arti" => "Wajar",
                                "huruf" => array_unique(["لَ","ا","زِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "خَائِفٌ",
                                "arti" => "Takut",
                                "huruf" => array_unique(["خَ","ا","ئِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "دَقِيْقٌ",
                                "arti" => "Teliti",
                                "huruf" => array_unique(["دَ","قِ","يْ","قٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 70')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 70");
                        $data['materi'] = "Mufrodat 70";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُبْغِضٌ",
                                "arti" => "Ngenekin",
                                "huruf" => array_unique(["مُ","بْ","غِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "مُزْعِجٌ",
                                "arti" => "Ribut",
                                "huruf" => array_unique(["مُ","زْ","عِ","جٌ"])
                            ],
                            [
                                "kata_arab" => "جَرِيْحٌ",
                                "arti" => "Terluka",
                                "huruf" => array_unique(["جَ","رِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "سَكْرَانُ",
                                "arti" => "Mabuk",
                                "huruf" => array_unique(["سَ","كْ","رَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "مَحْلُوْقٌ",
                                "arti" => "Botak",
                                "huruf" => array_unique(["مَ","حْ","لُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "عَمِيْقٌ",
                                "arti" => "Dalam",
                                "huruf" => array_unique(["عَ","مِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "ضَحْلٌ",
                                "arti" => "Dangkal",
                                "huruf" => array_unique(["ضَ","حْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَاعِمٌ",
                                "arti" => "Lembut",
                                "huruf" => array_unique(["نَ","ا","عِ","مٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 71')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 71");
                        $data['materi'] = "Mufrodat 71";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خَشِنٌ",
                                "arti" => "Kasar",
                                "huruf" => array_unique(["خَ","شِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "أَفْطَسُ",
                                "arti" => "Pesek",
                                "huruf" => array_unique(["أَ","فْ","طَ","سُ"])
                            ],
                            [
                                "kata_arab" => "مُدَبِّبٌ",
                                "arti" => "Mancung",
                                "huruf" => array_unique(["مُ","دَ","بِّ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْتَفِخٌ",
                                "arti" => "Menggelembung",
                                "huruf" => array_unique(["مُ","نْ","تَ","فِ","خٌ"])
                            ],
                            [
                                "kata_arab" => "مُعْدٍ",
                                "arti" => "Menular",
                                "huruf" => array_unique(["مُ","عْ","دٍ"])
                            ],
                            [
                                "kata_arab" => "نَسِيْمٌ",
                                "arti" => "Sepoi-sepoi",
                                "huruf" => array_unique(["نَ","سِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "عَلِيْلٌ",
                                "arti" => "Sejuk",
                                "huruf" => array_unique(["عَ","لِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "حُرٌّ",
                                "arti" => "Bebas",
                                "huruf" => array_unique(["حُ","رٌّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 72')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 72");
                        $data['materi'] = "Mufrodat 72";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَعْوَاجُ",
                                "arti" => "Bengkok",
                                "huruf" => array_unique(["أَ","عْ","وَ","ا","جُ"])
                            ],
                            [
                                "kata_arab" => "شَوْكِيٌّ",
                                "arti" => "Berduri",
                                "huruf" => array_unique(["شَ","وْ","كِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "ثَرْثَارٌ",
                                "arti" => "Cerewet",
                                "huruf" => array_unique(["ثَ","رْ","ثَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُسَمَّرٌ",
                                "arti" => "Terpaku",
                                "huruf" => array_unique(["مُ","سَ","مَّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "حَسَّاسٌ",
                                "arti" => "Sensitif/baper",
                                "huruf" => array_unique(["حَ","سَّ","ا","سٌ"])
                            ],
                            [
                                "kata_arab" => "فَرِيْدٌ",
                                "arti" => "Unik",
                                "huruf" => array_unique(["فَ","رِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "أَلِيْفٌ",
                                "arti" => "Jinak",
                                "huruf" => array_unique(["أَ","لِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَوَحِّشٌ",
                                "arti" => "Buas",
                                "huruf" => array_unique(["مُ","تَ","وَ","حِّ","شٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 73')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 73");
                        $data['materi'] = "Mufrodat 73";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُسْتَرْسِلٌ",
                                "arti" => "Lurus (rambut)",
                                "huruf" => array_unique(["مُ","سْ","تَ","رْ","سِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُجَعَّدٌ",
                                "arti" => "Keriting",
                                "huruf" => array_unique(["مُ","جَ","عَّ","دٌ"])
                            ],
                            [
                                "kata_arab" => "أَشْقَرُ",
                                "arti" => "Pirang",
                                "huruf" => array_unique(["أَ","شْ","قَ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَحْوَصُ",
                                "arti" => "Sipit",
                                "huruf" => array_unique(["أَ","حْ","وَ","صُ"])
                            ],
                            [
                                "kata_arab" => "أَحْمَقُ",
                                "arti" => "Idiot",
                                "huruf" => array_unique(["أَ","حْ","مَ","قُ"])
                            ],
                            [
                                "kata_arab" => "مُكْتَتِزٌ",
                                "arti" => "Berisi",
                                "huruf" => array_unique(["مُ","كْ","تَ","تِ","زٌ"])
                            ],
                            [
                                "kata_arab" => "هَزِيْلٌ",
                                "arti" => "Kerempeng",
                                "huruf" => array_unique(["هَ","زِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَائِعٌ",
                                "arti" => "Cair",
                                "huruf" => array_unique(["مَ","ا","ئِ","عٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 74')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 74");
                        $data['materi'] = "Mufrodat 74";
                        $data['tema'] = "Tema 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَامِدٌ",
                                "arti" => "Padat",
                                "huruf" => array_unique(["جَ","ا","مِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "جَسِيْمٌ",
                                "arti" => "Kekar",
                                "huruf" => array_unique(["جَ","سِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْتَقِمٌ",
                                "arti" => "Pendendam",
                                "huruf" => array_unique(["مُ","نْ","تَ","قِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَرِنٌ",
                                "arti" => "Lentur",
                                "huruf" => array_unique(["مَ","رِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "فَسِيْحٌ",
                                "arti" => "Longgar",
                                "huruf" => array_unique(["فَ","سِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "ثَمِيْنٌ",
                                "arti" => "Berharga",
                                "huruf" => array_unique(["ثَ","مِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَاقِنٌ",
                                "arti" => "Kebelet kencing",
                                "huruf" => array_unique(["حَ","ا","قِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "أَمْلَسُ",
                                "arti" => "Mulus",
                                "huruf" => array_unique(["أَ","مْ","لَ","سُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 75')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 75");
                        $data['materi'] = "Mufrodat 75";
                        $data['tema'] = "Tema 7";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَسْجِدٌ",
                                "arti" => "Masjid",
                                "huruf" => array_unique(["مَ","سْ","جِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "كَنِيْسَةٌ",
                                "arti" => "Gereja",
                                "huruf" => array_unique(["كَ","نِ","يْ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَنَارَةٌ",
                                "arti" => "Menara",
                                "huruf" => array_unique(["مَ","نَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جِسْرٌ",
                                "arti" => "Jembatan",
                                "huruf" => array_unique(["جِ","سْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَجْرَى الْمَاءِ",
                                "arti" => "Selokan",
                                "huruf" => array_unique(["مَ","جْ","رَ","ى","_","ا","لْ","مَ","ا",'ءِ'])
                            ],
                            [
                                "kata_arab" => "مَحَطَّةُ الْقِطَارِ",
                                "arti" => "Stasiun",
                                "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","_","ا","لْ","قِ","طَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "مَطَارٌ",
                                "arti" => "Bandara",
                                "huruf" => array_unique(["مَ","طَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَغْسَلَةٌ",
                                "arti" => "Loundry",
                                "huruf" => array_unique(["مَ","غْ","سَ","لَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 76')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 76");
                        $data['materi'] = "Mufrodat 76";
                        $data['tema'] = "Tema 7";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَصْلٌ",
                                "arti" => "Kelas",
                                "huruf" => array_unique(["فَ","صْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "سُوْقٌ",
                                "arti" => "Pasar",
                                "huruf" => array_unique(["سُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْقِفُ الْحَافِلَاتِ",
                                "arti" => "Terminal",
                                "huruf" => array_unique(["مَ","وْ","قِ","فُ","_","ا","لْ","حَ","ا","فِ","لَ","ا","تِ"])
                            ],
                            [
                                "kata_arab" => "مَطْعَمٌ",
                                "arti" => "Restoran",
                                "huruf" => array_unique(["مَ","طْ","عَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْهَى إِنْتِرْنِيْتَ",
                                "arti" => "Warnet",
                                "huruf" => array_unique(["مَ","قْ","هَ","ى","_","إِ","نْ","تِ","رْ","نِ","يْ","تَ"])
                            ],
                            [
                                "kata_arab" => "مَصْنَعٌ",
                                "arti" => "Pabrik",
                                "huruf" => array_unique(["مَ","صْ","نَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "بَقَّالَةٌ",
                                "arti" => "Mini market",
                                "huruf" => array_unique(["بَ","قَّ","ا","لَ",'ةٌ'])
                            ],
                            [
                                "kata_arab" => "قَصْرٌ",
                                "arti" => "Istana",
                                "huruf" => array_unique(["قَ","صْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 77')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 77");
                        $data['materi'] = "Mufrodat 77";
                        $data['tema'] = "Tema 7";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُسْتَشْفَى",
                                "arti" => "Rumah sakit",
                                "huruf" => array_unique(["مُ","سْ","تَ","شْ","فَ","ى"])
                            ],
                            [
                                "kata_arab" => "جَامِعَةٌ",
                                "arti" => "Kampus",
                                "huruf" => array_unique(["جَ","ا","مِ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حِصْنٌ",
                                "arti" => "Benteng",
                                "huruf" => array_unique(["حِ","صْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "مَحَطَّةُ الْبِتْرُوْلِ",
                                "arti" => "Pom bensin",
                                "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","ا","لْ","بِ","تْ","رُ","وْ","لِ"])
                            ],
                            [
                                "kata_arab" => "غُرْفَةُ الصِّحَّةِ",
                                "arti" => "Ruang kesehatan",
                                "huruf" => array_unique(["غُ","رْ","فَ","ةُ","_","ا","ل","صِّ","حَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "فُنْدُقٌ",
                                "arti" => "Hotel",
                                "huruf" => array_unique(["فُ","نْ","دُ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْرَحٌ",
                                "arti" => "Panggung",
                                "huruf" => array_unique(["مَ","سْ","رَ","حٌ"])
                            ],
                            [
                                "kata_arab" => "حَظِيْرَةٌ",
                                "arti" => "Kandang",
                                "huruf" => array_unique(["حَ","ظِ","يْ","رَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 78')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 78");
                        $data['materi'] = "Mufrodat 78";
                        $data['tema'] = "Tema 7";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُتْحَفٌ",
                                "arti" => "Museum",
                                "huruf" => array_unique(["مُ","تْ","حَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "دَوْرَةُ الْمِيَاهِ",
                                "arti" => "Toilet",
                                "huruf" => array_unique(["دَ","وْ","رَ","ةُ","_","ا","لْ","مِ","يَ","ا","هِ"])
                            ],
                            [
                                "kata_arab" => "حَدِيْقَةُ الْحَيَوَانَاتِ",
                                "arti" => "Kebun binatang",
                                "huruf" => array_unique(["حَ","دِ","يْ","قَ","ةُ","_","ا","لْ","حَ","يَ","وَ","ا","نَ","ا","تِ"])
                            ],
                            [
                                "kata_arab" => "جِهَازُ الصَّرَفِ",
                                "arti" => "ATM",
                                "huruf" => array_unique(["جِ","هَ","ا","زُ","_","ا","ل","صَّ","رَ","فِ"])
                            ],
                            [
                                "kata_arab" => "دَارٌ",
                                "arti" => "Rumah",
                                "huruf" => array_unique(["دَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْمَلٌ",
                                "arti" => "Laboratorium",
                                "huruf" => array_unique(["مَ","عْ","مَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَدِيْنَةٌ",
                                "arti" => "Kota",
                                "huruf" => array_unique(["مَ","دِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَرْيَةٌ",
                                "arti" => "Desa",
                                "huruf" => array_unique(["قَ","رْ","يَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 79')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 79");
                        $data['materi'] = "Mufrodat 79";
                        $data['tema'] = "Tema 7";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَعْرِضٌ",
                                "arti" => "Pameran",
                                "huruf" => array_unique(["مَ","عْ","رِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "بَلَدٌ",
                                "arti" => "Negara",
                                "huruf" => array_unique(["بَ","لَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْبَرَةٌ",
                                "arti" => "Kuburan",
                                "huruf" => array_unique(["مَ","قْ","بَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَاعَةٌ",
                                "arti" => "Aula",
                                "huruf" => array_unique(["قَ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَخْزَنٌ",
                                "arti" => "Gudang",
                                "huruf" => array_unique(["مَ","خْ","زَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "بُسْتَانٌ",
                                "arti" => "Taman",
                                "huruf" => array_unique(["بُ","سْ","تَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "سَاحَةٌ",
                                "arti" => "Serambi",
                                "huruf" => array_unique(["سَ","ا","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَفَقٌ",
                                "arti" => "Terowongan",
                                "huruf" => array_unique(["نَ","فَ","قٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 80')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 80");
                        $data['materi'] = "Mufrodat 80";
                        $data['tema'] = "Tema 7";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِيْنَاءٌ",
                                "arti" => "Pelabuhan",
                                "huruf" => array_unique(["مِ","يْ","نَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مَرْقَصٌ",
                                "arti" => "Diskotik",
                                "huruf" => array_unique(["مَ","رْ","قَ","صٌ"])
                            ],
                            [
                                "kata_arab" => "عِمَارَةٌ",
                                "arti" => "Apartemen",
                                "huruf" => array_unique(["عِ","مَ","ا","رَ",'ةٌ'])
                            ],
                            [
                                "kata_arab" => "مَطْبَعٌ",
                                "arti" => "Percetakan",
                                "huruf" => array_unique(["مَ","طْ","بَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "سِيْنِيْمَا",
                                "arti" => "Bioskop",
                                "huruf" => array_unique(["سِ","يْ","نِ","يْ","مَ","ا"])
                            ],
                            [
                                "kata_arab" => "إِسْطَبْلٌ",
                                "arti" => "Kandang kuda",
                                "huruf" => array_unique(["إِ","سْ","طَ","بْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "كَبِيْنَةٌ",
                                "arti" => "Kabin",
                                "huruf" => array_unique(["كَ","بِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَدٌّ",
                                "arti" => "Bendungan",
                                "huruf" => array_unique(["سَ","دٌّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 81')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 81");
                        $data['materi'] = "Mufrodat 81";
                        $data['tema'] = "Tema 7";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَاصِمَةٌ",
                                "arti" => "Ibu kota",
                                "huruf" => array_unique(["عَ","ا","صِ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَافَظَةٌ",
                                "arti" => "Provinsi",
                                "huruf" => array_unique(["مُ","حَ","ا","فَ","ظَ",'ةٌ'])
                            ],
                            [
                                "kata_arab" => "مُقَاطَعَةٌ",
                                "arti" => "Kabupaten",
                                "huruf" => array_unique(["مُ","قَ","ا","طَ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَطْحٌ",
                                "arti" => "Loteng",
                                "huruf" => array_unique(["سَ","طْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَوْصَفٌ",
                                "arti" => "Puskesmas",
                                "huruf" => array_unique(["مُ","سْ","تَ","وْ","صَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "صَيْدَلِيَّةٌ",
                                "arti" => "Apotek",
                                "huruf" => array_unique(["صَ","يْ","دَ","لِ","يَّ",'ةٌ'])
                            ],
                            [
                                "kata_arab" => "كُوْخٌ",
                                "arti" => "Gazebo",
                                "huruf" => array_unique(["كُ","وْ","خٌ"])
                            ],
                            [
                                "kata_arab" => "حَدِيْقَةٌ",
                                "arti" => "Kebun",
                                "huruf" => array_unique(["حَ","دِ","يْ","قَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 82')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 82");
                        $data['materi'] = "Mufrodat 82";
                        $data['tema'] = "Tema 7";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَيْدَانٌ",
                                "arti" => "Lapangan",
                                "huruf" => array_unique(["مَ","يْ","دَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَقْلٌ",
                                "arti" => "Ladang",
                                "huruf" => array_unique(["حَ","قْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "صَالَةُ الْإِنْتِظَارِ",
                                "arti" => "Ruang tunggu",
                                "huruf" => array_unique(["صَ","ا","لَ","ةُ","_","ا","لْ","إِ","نْ","تِ","ظَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "خَنْدَقٌ",
                                "arti" => "Parit",
                                "huruf" => array_unique(["خَ","نْ","دَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "وَرْشَةٌ",
                                "arti" => "Bengkel",
                                "huruf" => array_unique(["وَ","رْ","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْبَحٌ",
                                "arti" => "Kolam renang",
                                "huruf" => array_unique(["مَ","سْ","بَ","حٌ"])
                            ],
                            [
                                "kata_arab" => "دُكَّانٌ",
                                "arti" => "Toko",
                                "huruf" => array_unique(["دُ","كَّ","ا","نٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 83')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 83");
                        $data['materi'] = "Mufrodat 83";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَبَلٌ",
                                "arti" => "Gunung",
                                "huruf" => array_unique(["جَ","بَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شَمْسٌ",
                                "arti" => "Matahari",
                                "huruf" => array_unique(["شَ","مْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "قَمَرٌ",
                                "arti" => "Bulan",
                                "huruf" => array_unique(["قَ","مَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "نَجْمٌ",
                                "arti" => "Bintang",
                                "huruf" => array_unique(["نَ","جْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "نَهَارٌ",
                                "arti" => "Siang",
                                "huruf" => array_unique(["نَ","هَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَاحِلٌ",
                                "arti" => "Pantai",
                                "huruf" => array_unique(["سَ","ا","حِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شَلَّالٌ",
                                "arti" => "Air terjun",
                                "huruf" => array_unique(["شَ","لَّ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "وَحْلٌ",
                                "arti" => "Lumpur",
                                "huruf" => array_unique(["وَ","حْ","لٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 84')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 84");
                        $data['materi'] = "Mufrodat 84";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَلَعَ-يَطْلُعُ",
                                "arti" => "Terbit",
                                "huruf" => array_unique(["طَ","لَ","عَ","-","يَ","طْ","لُ","عُ"])
                            ],
                            [
                                "kata_arab" => "غَرَبَ-يَغْرُبُ",
                                "arti" => "Terbenam",
                                "huruf" => array_unique(["غَ","رَ","بَ","-","يَ","غْ","رُ","بُ"])
                            ],
                            [
                                "kata_arab" => "خَاطَرَ-يُخَاطِرُ",
                                "arti" => "Mempertaruhkan",
                                "huruf" => array_unique(["خَ","ا","طَ","رَ","-","يُ","خَ","ا","طِ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِنْفَجَرَ-يَنْفَجِرُ",
                                "arti" => "Meletus",
                                "huruf" => array_unique(["اِ","نْ","فَ","جَ","رَ","-","يَ","نْ","فَ","جِ","رُ"])
                            ],
                            [
                                "kata_arab" => "فَاضَ-يَفِيْضُ",
                                "arti" => "Banjir",
                                "huruf" => array_unique(["فَ","ا","ضَ","-","يَ","فِ","يْ","ضُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 85')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 85");
                        $data['materi'] = "Mufrodat 85";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَوٌّ",
                                "arti" => "Udara",
                                "huruf" => array_unique(["جَ","وٌّ"])
                            ],
                            [
                                "kata_arab" => "لَيْلَةٌ",
                                "arti" => "Malam",
                                "huruf" => array_unique(["لَ","يْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَبَاحٌ",
                                "arti" => "Pagi",
                                "huruf" => array_unique(["صَ","بَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "مَسَاءٌ",
                                "arti" => "Sore",
                                "huruf" => array_unique(["مَ","سَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "حَصَاةٌ",
                                "arti" => "Kerikil",
                                "huruf" => array_unique(["حَ","صَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دُخَانٌ",
                                "arti" => "Asap",
                                "huruf" => array_unique(["دُ","خَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "ضَبَابٌ",
                                "arti" => "Kabut",
                                "huruf" => array_unique(["ضَ","بَ","ا","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 86')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 86");
                        $data['materi'] = "Mufrodat 86";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَاحَظَ-يُلَاحِظُ",
                                "arti" => "Mengamati",
                                "huruf" => array_unique(["لَ","ا","حَ","ظَ","-","يُ","لَ","ا","حِ","ظُ"])
                            ],
                            [
                                "kata_arab" => "زَرَعَ-يَزْرَعُ",
                                "arti" => "Menanam (tanaman)",
                                "huruf" => array_unique(["زَ","رَ","عَ","-","يَ","زْ","رَ","عُ"])
                            ],
                            [
                                "kata_arab" => "غَرَسَ-يَغْرِسُ",
                                "arti" => "Menanam (pohon)",
                                "huruf" => array_unique(["غَ","رَ","سَ","-","يَ","غْ","رِ","سُ"])
                            ],
                            [
                                "kata_arab" => "غَاصَ-يَغِيْصُ",
                                "arti" => "Menyelam",
                                "huruf" => array_unique(["غَ","ا","صَ","-","يَ","غِ","يْ","صُ"])
                            ],
                            [
                                "kata_arab" => "غَرِقَ-يَغْرَقُ",
                                "arti" => "Tenggelam",
                                "huruf" => array_unique(["غَ","رِ","قَ","-","يَ","غْ","رَ","قُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 87')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 87");
                        $data['materi'] = "Mufrodat 87";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَحَابٌ",
                                "arti" => "Awan",
                                "huruf" => array_unique(["سَ","حَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "صَحْرَاءُ",
                                "arti" => "Padang pasir",
                                "huruf" => array_unique(["صَ","حْ","رَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "غَابَةٌ",
                                "arti" => "Hutan",
                                "huruf" => array_unique(["غَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَطَرٌ",
                                "arti" => "Hujan",
                                "huruf" => array_unique(["مَ","طَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "فَيَضَانٌ",
                                "arti" => "Banjir",
                                "huruf" => array_unique(["فَ","يَ","ضَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "سَمَاءٌ",
                                "arti" => "Langit",
                                "huruf" => array_unique(["سَ","مَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "أَلْوَانُ الطَّيْفِ",
                                "arti" => "Pelangi",
                                "huruf" => array_unique(["أَ","لْ","وَ","ا","نُ","_","ا","ل","طَّ","يْ","فِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 88')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 88");
                        $data['materi'] = "Mufrodat 88";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَاهَ-يَتِيْهُ",
                                "arti" => "Tersesat",
                                "huruf" => array_unique(["تَ","ا","هَ","-","يَ","تِ","يْ","هُ"])
                            ],
                            [
                                "kata_arab" => "تَطَايَرَ-يَتَطَايَرُ",
                                "arti" => "Bertebaran",
                                "huruf" => array_unique(["تَ","طَ","ا","يَ","رَ","-","يَ","تَ","طَ","ا","يَ","رُ"])
                            ],
                            [
                                "kata_arab" => "دَارَ-يَدُوْرُ",
                                "arti" => "Berputar",
                                "huruf" => array_unique(["دَ","ا","رَ","-","يَ","دُ","وْ","رُ"])
                            ],
                            [
                                "kata_arab" => "تَسَلَّقَ-يَتَسَلَّقُ",
                                "arti" => "Memanjat",
                                "huruf" => array_unique(["تَ","سَ","لَّ","قَ","-","يَ","تَ","سَ","لَّ","قُ"])
                            ],
                            [
                                "kata_arab" => "سَالَ-يَسِيْلُ",
                                "arti" => "Mengalir",
                                "huruf" => array_unique(["سَ","ا","لَ","-","يَ","سِ","يْ","لُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 89')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 89");
                        $data['materi'] = "Mufrodat 89";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَيْمَةٌ",
                                "arti" => "Mendung",
                                "huruf" => array_unique(["غَ","يْ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَدَى",
                                "arti" => "Embun",
                                "huruf" => array_unique(["نَ","دَ","ى"])
                            ],
                            [
                                "kata_arab" => "مَغْرِبٌ",
                                "arti" => "Senja",
                                "huruf" => array_unique(["مَ","غْ","رِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْجٌ",
                                "arti" => "Gelombang",
                                "huruf" => array_unique(["مَ","وْ","جٌ"])
                            ],
                            [
                                "kata_arab" => "بَحْرٌ",
                                "arti" => "Laut",
                                "huruf" => array_unique(["بَ","حْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَزِيْرَةٌ",
                                "arti" => "Pulau",
                                "huruf" => array_unique(["جَ","زِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَدَاذٌ",
                                "arti" => "Gerimis",
                                "huruf" => array_unique(["زَ","دَ","ا","ذٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 90')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 90");
                        $data['materi'] = "Mufrodat 90";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَدَبَّرَ-يَتَدَبَّرُ",
                                "arti" => "Mentadaburi",
                                "huruf" => array_unique(["تَ","دَ","بَّ","رَ","-","يَ","تَ","دَ","بَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِجْتَنَبَ-يَجْتَنِبُ",
                                "arti" => "Menghindari",
                                "huruf" => array_unique(["اِ","جْ","تَ","نَ","بَ","-","يَ","جْ","تَ","نِ","بُ"])
                            ],
                            [
                                "kata_arab" => "أَضَاءَ-يُضِيْءُ",
                                "arti" => "Menyinari",
                                "huruf" => array_unique(["أَ","ضَ","ا","ءَ","-","يُ","ضِ","يْ","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَثْمَرَ-يُثْمِرُ",
                                "arti" => "Berbuah",
                                "huruf" => array_unique(["أَ","ثْ","مَ","رَ","-","يُ","ثْ","مِ","رُ"])
                            ],
                            [
                                "kata_arab" => "قَطَرَ-يَقْطُرُ",
                                "arti" => "Menetes",
                                "huruf" => array_unique(["قَ","طَ","رَ","-","يَ","قْ","طُ","رُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 91')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 91");
                        $data['materi'] = "Mufrodat 91";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قِمَّةٌ",
                                "arti" => "Puncak",
                                "huruf" => array_unique(["قِ","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَيْكَةٌ",
                                "arti" => "Semak",
                                "huruf" => array_unique(["أَ","يْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَارِثَةٌ",
                                "arti" => "Bencana Alam",
                                "huruf" => array_unique(["كَ","ا","رِ","ثَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَارِعٌ",
                                "arti" => "Jalan",
                                "huruf" => array_unique(["شَ","ا","رِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "حُفْرَةٌ",
                                "arti" => "Lubang",
                                "huruf" => array_unique(["حُ","فْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "هِلَالٌ",
                                "arti" => "Bulan sabit",
                                "huruf" => array_unique(["هِ","لَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَدْرٌ",
                                "arti" => "Bulan purnama",
                                "huruf" => array_unique(["بَ","دْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 92')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 92");
                        $data['materi'] = "Mufrodat 92";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَرَثَ-يَحْرُثُ",
                                "arti" => "Membajak",
                                "huruf" => array_unique(["حَ","رَ","ثَ","-","يَ","حْ","رُ","ثُ"])
                            ],
                            [
                                "kata_arab" => "حَصَدَ-يَحْصُدُ",
                                "arti" => "Memanen",
                                "huruf" => array_unique(["حَ","صَ","دَ","-","يَ","حْ","صُ","دُ"])
                            ],
                            [
                                "kata_arab" => "هَدَمَ-يَهْدِمُ",
                                "arti" => "Meruntuhkan",
                                "huruf" => array_unique(["هَ","دَ","مَ","-","يَ","هْ","دِ","مُ"])
                            ],
                            [
                                "kata_arab" => "خَلَقَ-يَخْلُقُ",
                                "arti" => "Menciptakan",
                                "huruf" => array_unique(["خَ","لَ","قَ","-","يَ","خْ","لُ","قُ"])
                            ],
                            [
                                "kata_arab" => "هَبَّ-يَهُبُّ",
                                "arti" => "Berhembus",
                                "huruf" => array_unique(["هَ","بَّ","-","يَ","هُ","بُّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 93')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 93");
                        $data['materi'] = "Mufrodat 93";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَرٌّ",
                                "arti" => "Daratan",
                                "huruf" => array_unique(["بَ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "مَوْسِمُ الْجَفَافِ",
                                "arti" => "Musim kemarau",
                                "huruf" => array_unique(["مَ","وْ","سِ","مُ","_","ا","لْ","جَ","فَ","ا","فِ"])
                            ],
                            [
                                "kata_arab" => "مَوْسِمُ الْمَطَرِ",
                                "arti" => "Musim hujan",
                                "huruf" => array_unique(["مَ","وْ","سِ","مُ","_","ا","لْ","مَ","طَ","رِ"])
                            ],
                            [
                                "kata_arab" => "اَلْجِبَالُ",
                                "arti" => "Pegunungan",
                                "huruf" => array_unique(["اَ","لْ","جِ","بَ","ا","لُ"])
                            ],
                            [
                                "kata_arab" => "جَذْرٌ",
                                "arti" => "Akar",
                                "huruf" => array_unique(["جَ","ذْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "طَقْسٌ",
                                "arti" => "Cuaca",
                                "huruf" => array_unique(["طَ","قْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "نَهْرٌ",
                                "arti" => "Sungai",
                                "huruf" => array_unique(["نَ","هْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 94')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 94");
                        $data['materi'] = "Mufrodat 94";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَصَدَّعَ-يَتَصَدَّعُ",
                                "arti" => "Retak",
                                "huruf" => array_unique(["تَ","صَ","دَّ","عَ","-","يَ","تَ","صَ","دَّ","عُ"])
                            ],
                            [
                                "kata_arab" => "تَسَاقَطَ-يَتَسَاقَطُ",
                                "arti" => "Berjatuhan",
                                "huruf" => array_unique(["تَ","سَ","ا","قَ","طَ","-","يَ","تَ","سَ","ا","قَ","طُ"])
                            ],
                            [
                                "kata_arab" => "ذَبُلَ-يَذْبُلُ",
                                "arti" => "Layu",
                                "huruf" => array_unique(["ذَ","بُ","لَ","-","يَ","ذْ","بُ","لُ"])
                            ],
                            [
                                "kata_arab" => "غَامَ-يَغِيْمُ",
                                "arti" => "Mendung",
                                "huruf" => array_unique(["غَ","ا","مَ","-","يَ","غِ","يْ","مُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 95')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 95");
                        $data['materi'] = "Mufrodat 95";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُدِيْرُ الْمَدْرَسَةِ",
                                "arti" => "Kepala sekolah",
                                "huruf" => array_unique(["مُ","دِ","يْ","رُ","_","ا","لْ","مَ","دْ","رَ","سَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "أُسْتَاذٌ",
                                "arti" => "Ustadz",
                                "huruf" => array_unique(["أُ","سْ","تَ","ا","ذٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَرِّسٌ",
                                "arti" => "Guru",
                                "huruf" => array_unique(["مُ","دَ","رِّ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُوَظَّفٌ",
                                "arti" => "Pegawai",
                                "huruf" => array_unique(["مُ","وَ","ظَّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "طَيَّارٌ",
                                "arti" => "Pilot",
                                "huruf" => array_unique(["طَ","يَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "نَجَّارٌ",
                                "arti" => "Tukang kayu",
                                "huruf" => array_unique(["نَ","جَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَرِّبٌ",
                                "arti" => "Pelatih",
                                "huruf" => array_unique(["مُ","دَ","رِّ","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 96')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 96");
                        $data['materi'] = "Mufrodat 96";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَلَّقَ-يُعَلِّقُ",
                                "arti" => "Mengomentari",
                                "huruf" => array_unique(["عَ","لَّ","قَ","-","يُ","عَ","لِّ","قُ"])
                            ],
                            [
                                "kata_arab" => "اِقْتَرَحَ-يَقْتَرِحُ",
                                "arti" => "Berpendapat",
                                "huruf" => array_unique(["اِ","قْ","تَ","رَ","حَ","-","يَ","قْ","تَ","رِ","حُ"])
                            ],
                            [
                                "kata_arab" => "اِنْتَقَدَ-يَنْتَقِدُ",
                                "arti" => "Mengkritik",
                                "huruf" => array_unique(["اِ","نْ","تَ","قَ","دَ","-","يَ","نْ","تَ","قِ","دُ"])
                            ],
                            [
                                "kata_arab" => "تَمَهَّلَ-يَتَمَهَّلُ",
                                "arti" => "Pelan-pelan",
                                "huruf" => array_unique(["تَ","مَ","هَّ","لَ","-","يَ","تَ","مَ","هَّ","لُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 97')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 97");
                        $data['materi'] = "Mufrodat 97";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَادِلٌ",
                                "arti" => "Pelayan",
                                "huruf" => array_unique(["نَ",'ا',"دِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَنَّاءٌ",
                                "arti" => "Kuli bangunan",
                                "huruf" => array_unique(["بَ","نَّ",'ا',"ءٌ"])
                            ],
                            [
                                "kata_arab" => "مُهَرِّجٌ",
                                "arti" => "Pelawak",
                                "huruf" => array_unique(["مُ","هَ","رِّ","جٌ"])
                            ],
                            [
                                "kata_arab" => "تَاجِرٌ",
                                "arti" => "Pedagang",
                                "huruf" => array_unique(["تَ","ا","جِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "فَلَّاحٌ",
                                "arti" => "Petani",
                                "huruf" => array_unique(["فَ","لَّ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "سَمَّاكٌ",
                                "arti" => "Nelayan",
                                "huruf" => array_unique(["سَ","مَّ","ا","كٌ"])
                            ],
                            [
                                "kata_arab" => "سَارِقٌ",
                                "arti" => "Pencuri",
                                "huruf" => array_unique(["سَ","ا","رِ","قٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 98')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 98");
                        $data['materi'] = "Mufrodat 98";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَوَّرَ-يُصَوِّرُ",
                                "arti" => "Memfoto",
                                "huruf" => array_unique(["صَ","وَّ","رَ","-","يُ","صَ","وِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "قَضَى-يَقْضِي عَلَى",
                                "arti" => "Menghakimi",
                                "huruf" => array_unique(["قَ","ضَ","ى","-","يَ","قْ","ضِ","ي","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "رَسَمَ-يَرْسُمُ",
                                "arti" => "Melukis",
                                "huruf" => array_unique(["رَ","سَ","مَ","-","يَ","رْ","سُ",'مُ'])
                            ],
                            [
                                "kata_arab" => "غَاصَ-يَغُوْصُ",
                                "arti" => "Menyelam",
                                "huruf" => array_unique(["غَ","ا","صَ","-","يَ","غُ","وْ","صُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 99')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 99");
                        $data['materi'] = "Mufrodat 99";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَائِقٌ",
                                "arti" => "Sopir",
                                "huruf" => array_unique(["سَ","ا","ئِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُذِيْعٌ",
                                "arti" => "Penyiar",
                                "huruf" => array_unique(["مُ","ذِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "وَزِيْرٌ",
                                "arti" => "Menteri",
                                "huruf" => array_unique(["وَ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسُ الْجُمْهُرِيَّةِ",
                                "arti" => "Presiden",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","ا","لْ","جُ","مْ","هُ","رِ","يَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "زَبَّالٌ",
                                "arti" => "Tukang sampah",
                                "huruf" => array_unique(["زَ","بَّ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "كَاتِبٌ",
                                "arti" => "Penulis",
                                "huruf" => array_unique(["كَ","ا","تِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَسَوِّلٌ",
                                "arti" => "Pengemis",
                                "huruf" => array_unique(["مُ","تَ","سَ","وِّ","لٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 100')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 100");
                        $data['materi'] = "Mufrodat 100";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَعَى-يَرْعَى",
                                "arti" => "Menggembala",
                                "huruf" => array_unique(["رَ","عَ","ى","-","يَ","رْ","عَ","ى"])
                            ],
                            [
                                "kata_arab" => "رَبَّى-يُرَبِّي",
                                "arti" => "Mendidik",
                                "huruf" => array_unique(["رَ","بَّ","ى","-","يُ","رَ","بِّ","ي"])
                            ],
                            [
                                "kata_arab" => "صَادَ-يَصِيْدُ",
                                "arti" => "Memburu",
                                "huruf" => array_unique(["صَ","ا","دَ","-","يَ","صِ","يْ","دُ"])
                            ],
                            [
                                "kata_arab" => "صَمَّمَ-يُصَمِّمُ",
                                "arti" => "Mendesain",
                                "huruf" => array_unique(["صَ","مَّ","مَ","-","يُ","صَ","مِّ","مُ"])
                            ]
                        ];
                    }
                // 51 - 100

                // 101 - 150
                    else if($_GET['latihan'] == MD5('Mufrodat 101')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 101");
                        $data['materi'] = "Mufrodat 101";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَشَّالٌ",
                                "arti" => "Copet",
                                "huruf" => array_unique(["نَ","شَّ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَطَلٌ",
                                "arti" => "Pahlawan",
                                "huruf" => array_unique(["بَ","طَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شُرْطِيٌّ",
                                "arti" => "Polisi",
                                "huruf" => array_unique(["شُ","رْ","طِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "حَلَّاقٌ",
                                "arti" => "Tukang cukur",
                                "huruf" => array_unique(["حَ","لَّ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "خَيَّاطٌ",
                                "arti" => "Penjahit",
                                "huruf" => array_unique(["خَ","يَّ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "غَسَّالٌ",
                                "arti" => "Tukang cuci",
                                "huruf" => array_unique(["غَ","سَّ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "رَاعٍ",
                                "arti" => "Penggembala",
                                "huruf" => array_unique(["رَ","ا","عٍ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 102')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 102");
                        $data['materi'] = "Mufrodat 102";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَلَقَ-يَحْلِقُ",
                                "arti" => "Mencukur",
                                "huruf" => array_unique(["حَ","لَ","قَ","-","يَ","حْ","لِ","قُ"])
                            ],
                            [
                                "kata_arab" => "أَنْتَجَ-يُنْتِجُ",
                                "arti" => "Menghasilkan",
                                "huruf" => array_unique(["أَ","نْ","تَ","جَ","-","يُ","نْ","تِ","جُ"])
                            ],
                            [
                                "kata_arab" => "أَصْلَحَ-يُصْلِحُ",
                                "arti" => "Memperbaiki",
                                "huruf" => array_unique(["أَ","صْ","لَ","حَ","-","يُ","صْ","لِ","حُ"])
                            ],
                            [
                                "kata_arab" => "خَدَعَ-يَخْدَعُ",
                                "arti" => "Menipu",
                                "huruf" => array_unique(["خَ","دَ","عَ","-","يَ","خْ","دَ","عُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 103')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 103");
                        $data['materi'] = "Mufrodat 103";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَالِبٌ",
                                "arti" => "Santri",
                                "huruf" => array_unique(["طَ","ا","لِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُجْرِمٌ",
                                "arti" => "Penjahat",
                                "huruf" => array_unique(["مُ","جْ","رِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "جُنْدِيٌّ",
                                "arti" => "Tentara",
                                "huruf" => array_unique(["جُ","نْ","دِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "طَبَّاخٌ",
                                "arti" => "Koki",
                                "huruf" => array_unique(["طَ","بَّ","ا","خٌ"])
                            ],
                            [
                                "kata_arab" => "مُدِيْرٌ",
                                "arti" => "Direktur",
                                "huruf" => array_unique(["مُ","دِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَاضٍ",
                                "arti" => "Hakim",
                                "huruf" => array_unique(["قَ","ا","ضٍ"])
                            ],
                            [
                                "kata_arab" => "سَبَّاقٌ",
                                "arti" => "Pembalap",
                                "huruf" => array_unique(["سَ","بَّ","ا","قٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 104')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 104");
                        $data['materi'] = "Mufrodat 104";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَرْسَلَ-يُرْسِلُ",
                                "arti" => "Mengirim",
                                "huruf" => array_unique(["أَ","رْ","سَ","لَ","-","يُ","رْ","سِ","لُ"])
                            ],
                            [
                                "kata_arab" => "رَئِسَ-يَرْئَسُ",
                                "arti" => "Mengetuai",
                                "huruf" => array_unique(["رَ","ئِ","سَ","-","يَ","رْ","ئَ","سُ"])
                            ],
                            [
                                "kata_arab" => "خَطَبَ-يَخْطُبُ",
                                "arti" => "Berceramah",
                                "huruf" => array_unique(["خَ","طَ","بَ","-","يَ","خْ","طُ","بُ"])
                            ],
                            [
                                "kata_arab" => "أَفْلَسَ-يُفْلِسُ",
                                "arti" => "Bangkrut",
                                "huruf" => array_unique(["أَ","فْ","لَ","سَ","-","يُ","فْ","لِ","سُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 105')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 105");
                        $data['materi'] = "Mufrodat 105";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَاشِيْرٌ",
                                "arti" => "Kasir",
                                "huruf" => array_unique(["كَ","ا","شِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "دَاعٍ",
                                "arti" => "Dai",
                                "huruf" => array_unique(["دَ","ا","عٍ"])
                            ],
                            [
                                "kata_arab" => "مُنَظِّمُ السَّيْرِ",
                                "arti" => "Tukang parkir",
                                "huruf" => array_unique(["مُ","نَ","ظِّ","مُ","_","ا","ل","سَّ","يْ","رِ"])
                            ],
                            [
                                "kata_arab" => "خَطِيْبٌ",
                                "arti" => "Penceramah",
                                "huruf" => array_unique(["خَ","طِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُعَلِّقٌ",
                                "arti" => "Komentator",
                                "huruf" => array_unique(["مُ","عَ","لِّ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُقَدِّمُ الْبَرْنَامِجِ",
                                "arti" => "Pembawa acara",
                                "huruf" => array_unique(["مُ","قَ","دِّ","مُ","_","ا","لْ","بَ","رْ","نَ","ا","مِ","جِ"])
                            ],
                            [
                                "kata_arab" => "خَادِمٌ",
                                "arti" => "Pembantu",
                                "huruf" => array_unique(["خَ","ا","دِ","مٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 106')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 106");
                        $data['materi'] = "Mufrodat 106";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خَسِرَ-يَخْسَرُ",
                                "arti" => "Rugi",
                                "huruf" => array_unique(["خَ","سِ","رَ","-","يَ","خْ","سَ","رُ"])
                            ],
                            [
                                "kata_arab" => "رَاجَ-يَرُوْجُ",
                                "arti" => "Laku",
                                "huruf" => array_unique(["رَ","ا","جَ","-","يَ","رُ","وْ","جُ"])
                            ],
                            [
                                "kata_arab" => "هَرَّجَ-يُهَرِّجُ",
                                "arti" => "Melawak",
                                "huruf" => array_unique(["هَ","رَّ","جَ","-","يُ","هَ","رِّ","جُ"])
                            ],
                            [
                                "kata_arab" => "رَبِحَ-يَرْبَحُ",
                                "arti" => "Untung",
                                "huruf" => array_unique(["رَ","بِ","حَ","-","يَ","رْ","بَ","حُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 107')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 107");
                        $data['materi'] = "Mufrodat 107";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُصَوِّرٌ",
                                "arti" => "Fotografer",
                                "huruf" => array_unique(["مُ","صَ","وِّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَسَّامٌ",
                                "arti" => "Pelukis",
                                "huruf" => array_unique(["رَ","سَّ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُبَرِّجٌ",
                                "arti" => "Perias",
                                "huruf" => array_unique(["مُ","بَ","رِّ","جٌ"])
                            ],
                            [
                                "kata_arab" => "سَاعِي الْبَرِيْدِ",
                                "arti" => "Tukang pos",
                                "huruf" => array_unique(["سَ","ا","عِ",'ي',"_","ا","لْ","بَ","رِ","يْ","دِ"])
                            ],
                            [
                                "kata_arab" => "مُهَنْدِسٌ",
                                "arti" => "Arsitek",
                                "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ"])
                            ],
                            [
                                "kata_arab" => "بَوَّابٌ",
                                "arti" => "Satpam",
                                "huruf" => array_unique(["بَ","وَّ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُمَثِّلٌ",
                                "arti" => "Artis",
                                "huruf" => array_unique(["مُ","مَ","ثِّ","لٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 108')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 108");
                        $data['materi'] = "Mufrodat 108";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَذَاعَ-يُذِيْعُ",
                                "arti" => "Menyiarkan",
                                "huruf" => array_unique(["أَ","ذَ","ا","عَ","-","يُ","ذِ","يْ","عُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَأْجَرَ-يَسْتَأْجِرُ",
                                "arti" => "Menyewa",
                                "huruf" => array_unique(["اِ","سْ","تَ","أْ","جَ","رَ","-","يَ","سْ","تَ","أْ","جِ","رُ"])
                            ],
                            [
                                "kata_arab" => "غَنَّى-يُغَنِّيْ",
                                "arti" => "Beryanyi",
                                "huruf" => array_unique(["غَ","نَّ","ى","-","يُ","غَ","نِّ","يْ"])
                            ],
                            [
                                "kata_arab" => "لَوَّنَ-يُلَوِّنُ",
                                "arti" => "Mewarnai",
                                "huruf" => array_unique(["لَ","وَّ","نَ","-","يُ","لَ","وِّ","نُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 109')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 109");
                        $data['materi'] = "Mufrodat 109";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَزَّارٌ",
                                "arti" => "Tukang jagal",
                                "huruf" => array_unique(["جَ","زَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "صَحَافِيٌّ",
                                "arti" => "Wartawan",
                                "huruf" => array_unique(["صَ","حَ","ا","فِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ",
                                "arti" => "Dokter",
                                "huruf" => array_unique(["طَ","بِ",'يْ',"بٌ"])
                            ],
                            [
                                "kata_arab" => "مُمَرِّضٌ",
                                "arti" => "Perawat",
                                "huruf" => array_unique(["مُ",'مَ',"رِّ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "قَاضٍ",
                                "arti" => "Hakim",
                                "huruf" => array_unique(["قَ","ا","ضٍ"])
                            ],
                            [
                                "kata_arab" => "إِسْكَافٌ",
                                "arti" => "Tukang sol",
                                "huruf" => array_unique(["إِ","سْ","كَ","ا","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُضِيْفٌ",
                                "arti" => "Pramugara",
                                "huruf" => array_unique(["مُ","ضِ","يْ","فٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 110')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 110");
                        $data['materi'] = "Mufrodat 110";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَرَقَ-يَسْرِقُ",
                                "arti" => "Mencuri",
                                "huruf" => array_unique(["سَ","رَ","قَ","-","يَ","سْ","رِ","قُ"])
                            ],
                            [
                                "kata_arab" => "تَوَلَّى-يَتَوَلَّى عَلَى",
                                "arti" => "Mengurus",
                                "huruf" => array_unique(["تَ","وَ","لَّ","ى","-","يَ","تَ","وَ","لَّ","ى","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "رَكَّبَ-يُرَكِّبُ",
                                "arti" => "Memasang",
                                "huruf" => array_unique(["رَ","كَّ","بَ","-","يُ","رَ","كِّ","بُ"])
                            ],
                            [
                                "kata_arab" => "نَزَعَ-يَنْزِعُ",
                                "arti" => "Mencabut",
                                "huruf" => array_unique(["نَ","زَ","عَ","-","يَ","نْ","زِ","عُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 111')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 111");
                        $data['materi'] = "Mufrodat 111";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَيْدَلِيٌّ",
                                "arti" => "Apoteker",
                                "huruf" => array_unique(["صَ","يْ","دَ","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُبَرْمِجٌ",
                                "arti" => "Programmer",
                                "huruf" => array_unique(["مُ","بَ","رْ","مِ","جٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَامٍ",
                                "arti" => "Pengacara",
                                "huruf" => array_unique(["مُ","حَ","ا","مٍ"])
                            ],
                            [
                                "kata_arab" => "مُتَرْجِمٌ",
                                "arti" => "Penterjemah",
                                "huruf" => array_unique(["مُ",'تَ',"رْ","جِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُهَنْدِسٌ",
                                "arti" => "Insinyur",
                                "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 112')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 112");
                        $data['materi'] = "Mufrodat 112";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَلَّفَ-يُؤَلِّفُ",
                                "arti" => "Mengarang",
                                "huruf" => array_unique(["أَ","لَّ","فَ","-","يُ","ؤَ","لِّ","فُ"])
                            ],
                            [
                                "kata_arab" => "حَفَرَ-يَحْفِرُ",
                                "arti" => "Menggali",
                                "huruf" => array_unique(["حَ","فَ","رَ","-","يَ","حْ","فِ","رُ"])
                            ],
                            [
                                "kata_arab" => "دَخَّنَ-يُدَخِّنُ",
                                "arti" => "Merokok",
                                "huruf" => array_unique(["دَ","خَّ","نَ","-","يُ","دَ","خِّ","نُ"])
                            ],
                            [
                                "kata_arab" => "سَجَّلَ-يُسَجِّلُ",
                                "arti" => "Merekam",
                                "huruf" => array_unique(["سَ","جَّ","لَ","-","يُ","سَ","جِّ","لُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 113')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 113");
                        $data['materi'] = "Mufrodat 113";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَفِيْرٌ",
                                "arti" => "Duta besar",
                                "huruf" => array_unique(["سَ","فِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَقَّاصٌ",
                                "arti" => "Penari",
                                "huruf" => array_unique(["رَ","قَّ","ا","صٌ"])
                            ],
                            [
                                "kata_arab" => "مُؤَلِّفٌ",
                                "arti" => "Pengarang",
                                "huruf" => array_unique(["مُ","ؤَ","لِّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُلَاكِمٌ",
                                "arti" => "Petinju",
                                "huruf" => array_unique(["مُ","لَ","ا","كِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "سِيَاسِيٌّ",
                                "arti" => "Politikus",
                                "huruf" => array_unique(["سِ","يَ","ا","سِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "غَوَّاصٌ",
                                "arti" => "Penyelam",
                                "huruf" => array_unique(["غَ","وَّ","ا","صٌ"])
                            ],
                            [
                                "kata_arab" => "رِجَالُ الْإِطْفَاءِ",
                                "arti" => "Pemadam kebakaran",
                                "huruf" => array_unique(["رِ","جَ","ا","لُ","_","ا","لْ","إِ","طْ","فَ","ا","ءِ"])
                            ],
                            [
                                "kata_arab" => "عَطَّارٌ",
                                "arti" => "Penjual parfum",
                                "huruf" => array_unique(["عَ","طَّ","ا","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 114')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 114");
                        $data['materi'] = "Mufrodat 114";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَامَرَ-يُغَامِرُ",
                                "arti" => "Menjelajah",
                                "huruf" => array_unique(["غَ","ا","مَ","رَ","-","يُ","غَ","ا","مِ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِخْتَرَعَ-يَخْتَرِعُ",
                                "arti" => "Menemukan",
                                "huruf" => array_unique(["اِ","خْ","تَ","رَ","عَ","-","يَ","خْ","تَ","رِ","عُ"])
                            ],
                            [
                                "kata_arab" => "نَحَتَ-يَنْحِتُ",
                                "arti" => "Memahat",
                                "huruf" => array_unique(["نَ","حَ","تَ","-","يَ","نْ","حِ","تُ"])
                            ],
                            [
                                "kata_arab" => "اِسْتَفَزَّ-يَسْتَفِزُّ",
                                "arti" => "Memprovokasi",
                                "huruf" => array_unique(["اِ","سْ","تَ","فَ","زَّ","-","يَ","سْ","تَ","فِ","زُّ"])
                            ],
                            [
                                "kata_arab" => "قَامَرَ-يُقَامِرُ",
                                "arti" => "Berjudi",
                                "huruf" => array_unique(["قَ","ا","مَ","رَ","-","يُ","قَ","ا","مِ","رُ"])
                            ],
                            [
                                "kata_arab" => "تَجَسَّسَ-يَتَجَسَّسُ",
                                "arti" => "Memata-matai",
                                "huruf" => array_unique(["تَ","جَ","سَّ","سَ","-","يَ","تَ","جَ","سَّ","سُ"])
                            ],
                            [
                                "kata_arab" => "اِحْتَلَّ-يَحْتَلُّ",
                                "arti" => "Menjajah",
                                "huruf" => array_unique(["اِ","حْ","تَ","لَّ","-","يَ","حْ","تَ","لُّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 115')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 115");
                        $data['materi'] = "Mufrodat 115";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَغِيَّةٌ",
                                "arti" => "Pelacur",
                                "huruf" => array_unique(["بَ","غِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَاهِنٌ",
                                "arti" => "Dukun",
                                "huruf" => array_unique(["كَ","ا","هِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "مُشَعْوِذٌ",
                                "arti" => "Pesulap",
                                "huruf" => array_unique(["مُ","شَ","عْ","وِ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "خَدَّاعٌ",
                                "arti" => "Tukang tipu",
                                "huruf" => array_unique(["خَ","دَّ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "مُطَرِّزٌ",
                                "arti" => "Pembordir",
                                "huruf" => array_unique(["مُ","طَ","رِّ","زٌ"])
                            ],
                            [
                                "kata_arab" => "قَاطِعُ الطَّرِيْقِ",
                                "arti" => "Pembegal",
                                "huruf" => array_unique(["قَ","ا","طِ","عُ","_","ا","ل","طَّ","رِ","يْ","قِ"])
                            ],
                            [
                                "kata_arab" => "جَاسُوْسٌ",
                                "arti" => "Mata-mata",
                                "huruf" => array_unique(["جَ","ا","سُ","وْ","سٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 116')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 116");
                        $data['materi'] = "Mufrodat 116";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَعْوَذَ-يُشَعْوِذُ",
                                "arti" => "Menyulap",
                                "huruf" => array_unique(["شَ","عْ","وَ","ذَ","-","يُ","شَ","عْ","وِ","ذُ"])
                            ],
                            [
                                "kata_arab" => "اِخْتَلَسَ-يَخْتَلِسُ",
                                "arti" => "Korupsi",
                                "huruf" => array_unique(["اِ","خْ","تَ","لَ","سَ","-","يَ","خْ","تَ","لِ","سُ"])
                            ],
                            [
                                "kata_arab" => "صَنَّفَ-يُصَنِّفُ",
                                "arti" => "Mengarang (buku)",
                                "huruf" => array_unique(["صَ","نَّ","فَ","-","يُ","صَ","نِّ","فُ"])
                            ],
                            [
                                "kata_arab" => "أَجَّرَ-يُؤَجِّرُ",
                                "arti" => "Menyewakan",
                                "huruf" => array_unique(["أَ","جَّ","رَ","-","يُ","ؤَ","جِّ","رُ"])
                            ],
                            [
                                "kata_arab" => "حَامَى-يُحَامِي",
                                "arti" => "Membela terdakwa",
                                "huruf" => array_unique(["حَ","ا","مَ","ى","-","يُ","حَ","ا","مِ","ي"])
                            ],
                            [
                                "kata_arab" => "رَقَصَ-يَرْقُصُ",
                                "arti" => "Menari",
                                "huruf" => array_unique(["رَ","قَ","صَ","-","يَ","رْ","قُ","صُ"])
                            ],
                            [
                                "kata_arab" => "مَثَّلَ-يُمَثِّلُ",
                                "arti" => "Memerankan",
                                "huruf" => array_unique(["مَ","ثَّ","لَ","-","يُ","مَ","ثِّ","لُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 117')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 117");
                        $data['materi'] = "Mufrodat 117";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُحَقِّقٌ",
                                "arti" => "Detektif",
                                "huruf" => array_unique(["مُ","حَ","قِّ","قٌ"])
                            ],
                            [
                                "kata_arab" => "سَاحِرٌ",
                                "arti" => "Penyihir",
                                "huruf" => array_unique(["سَ","ا","حِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُخْتَلِسٌ",
                                "arti" => "Koruptor",
                                "huruf" => array_unique(["مُ","خْ","تَ","لِ","سٌ"])
                            ],
                            [
                                "kata_arab" => "إِرْهَابِيٌّ",
                                "arti" => "Teroris",
                                "huruf" => array_unique(["إِ","رْ","هَ","ا","بِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "أَمِيْرُ الْمَدِيْنَةِ",
                                "arti" => "Walikota",
                                "huruf" => array_unique(["أَ","مِ","يْ","رُ","_","ا","لْ","مَ","دِ","يْ","نَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "مُحَافِظٌ",
                                "arti" => "Gubernur",
                                "huruf" => array_unique(["مُ","حَ","ا","فِ","ظٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسُ الْعِمْدَةِ",
                                "arti" => "Pak camat",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","ا","لْ","عِ","مْ","دَ","ةِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 118')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 118");
                        $data['materi'] = "Mufrodat 118";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَوَلَّى-يَتَوَلَّى عَلَى",
                                "arti" => "Mengurus",
                                "huruf" => array_unique(["تَ","وَ","لَّ","ى","-","يَ","تَ","وَ","لَّ","ى","_","عَ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "دَافَعَ-يُدَافِعُ عَنْ",
                                "arti" => "Membela",
                                "huruf" => array_unique(["دَ","ا","فَ","عَ","-","يُ","دَ","ا","فِ","عُ","_","عَ","نْ"])
                            ],
                            [
                                "kata_arab" => "خَطَّطَ-يُخَطِّطُ",
                                "arti" => "Merancang",
                                "huruf" => array_unique(["خَ","طَّ","طَ","-","يُ","خَ","طِّ","طُ"])
                            ],
                            [
                                "kata_arab" => "رَشَا-يَرْشُوْ",
                                "arti" => "Menyogok",
                                "huruf" => array_unique(["رَ","شَ","ا","-","يَ","رْ","شُ","وْ"])
                            ],
                            [
                                "kata_arab" => "لَكَمَ-يَلْكُمُ",
                                "arti" => "Meninju",
                                "huruf" => array_unique(["لَ","كَ","مَ","-","يَ","لْ","كُ","مُ"])
                            ],
                            [
                                "kata_arab" => "تَرْجَمَ-يُتَرْجِمُ",
                                "arti" => "Menerjemahkan",
                                "huruf" => array_unique(["تَ","رْ","جَ","مَ","-","يُ","تَ","رْ","جِ","مُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 119')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 119");
                        $data['materi'] = "Mufrodat 119";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُقَامِرٌ",
                                "arti" => "Penjudi",
                                "huruf" => array_unique(["مُ","قَ","ا","مِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَفِرٌّ",
                                "arti" => "Provokator",
                                "huruf" => array_unique(["مُ","سْ","تَ","فِ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "رَاهِبٌ",
                                "arti" => "Pendeta",
                                "huruf" => array_unique(["رَ","ا","هِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "قَنَّاصٌ",
                                "arti" => "Sniper",
                                "huruf" => array_unique(["قَ","نَّ","ا","صٌ"])
                            ],
                            [
                                "kata_arab" => "حَارِسٌ",
                                "arti" => "Penjaga",
                                "huruf" => array_unique(["حَ","ا","رِ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَلِّكٌ",
                                "arti" => "Tukang pijat",
                                "huruf" => array_unique(["مُ","دَ","لِّ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مُرْشِدٌ",
                                "arti" => "Guide",
                                "huruf" => array_unique(["مُ","رْ","شِ","دٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 120')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 120");
                        $data['materi'] = "Mufrodat 120";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَيَّافٌ",
                                "arti" => "Algojo",
                                "huruf" => array_unique(["سَ","يَّ","ا","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُحْتَلٌّ",
                                "arti" => "Penjajah",
                                "huruf" => array_unique(["مُ","حْ","تَ","لٌّ"])
                            ],
                            [
                                "kata_arab" => "مُغَامِرٌ",
                                "arti" => "Penjelajah",
                                "huruf" => array_unique(["مُ","غَ","ا","مِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُخْتَرِعٌ",
                                "arti" => "Penemu",
                                "huruf" => array_unique(["مُ","خْ","تَ","رِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "أَدِيْبٌ",
                                "arti" => "Sastrawan",
                                "huruf" => array_unique(["أَ","دِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "نَحَّاتٌ",
                                "arti" => "Pemahat",
                                "huruf" => array_unique(["نَ","حَّ","ا","تٌ"])
                            ],
                            [
                                "kata_arab" => "رِيَاضِيٌّ",
                                "arti" => "Atlet",
                                "huruf" => array_unique(["رِ","يَ","ا","ضِ","يٌّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 121')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 121");
                        $data['materi'] = "Mufrodat 121";
                        $data['tema'] = "Tema 9";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِيْكَانِيْكِيٌّ",
                                "arti" => "Ahli mesin",
                                "huruf" => array_unique(["مِ","يْ","كَ","ا","نِ","يْ","كِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مَلَّاحٌ",
                                "arti" => "Navigator",
                                "huruf" => array_unique(["مَ","لَّ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "رُبَّانٌ",
                                "arti" => "Nahkoda",
                                "huruf" => array_unique(["رُ","بَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "مُصَمِّمٌ",
                                "arti" => "Desainer",
                                "huruf" => array_unique(["مُ","صَ","مِّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ بَيْطَرِيٌّ",
                                "arti" => "Dokter hewan",
                                "huruf" => array_unique(["بَ","يْ","طَ","رِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "سِمْسَارٌ",
                                "arti" => "Calo",
                                "huruf" => array_unique(["سِ","مْ","سَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "قُرْصَانٌ",
                                "arti" => "Bajak laut",
                                "huruf" => array_unique(["قُ","رْ","صَ","ا","نٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 122')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 122");
                        $data['materi'] = "Mufrodat 122";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بُحَيْرَةٌ",
                                "arti" => "Danau",
                                "huruf" => array_unique(["بُ","حَ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَاعِقَةٌ",
                                "arti" => "Petir",
                                "huruf" => array_unique(["صَ","ا","عِ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تَلٌّ",
                                "arti" => "Bukit",
                                "huruf" => array_unique(["تَ","لٌّ"])
                            ],
                            [
                                "kata_arab" => "وَادٍ",
                                "arti" => "Lembah",
                                "huruf" => array_unique(["وَ","ا","دٍ"])
                            ],
                            [
                                "kata_arab" => "غَارٌ",
                                "arti" => "Gua",
                                "huruf" => array_unique(["غَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "حُمَامٌ",
                                "arti" => "Lahar",
                                "huruf" => array_unique(["حُ","مَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُحِيْطٌ",
                                "arti" => "Samudra",
                                "huruf" => array_unique(["مُ","حِ","يْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مَرْتَعٌ",
                                "arti" => "Sabana",
                                "huruf" => array_unique(["مَ","رْ","تَ","عٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 123')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 123");
                        $data['materi'] = "Mufrodat 123";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَذَّ-يَجُذُّ",
                                "arti" => "Menebang",
                                "huruf" => array_unique(["جَ","ذَّ","-","يَ","جُ","ذُّ"])
                            ],
                            [
                                "kata_arab" => "زَلْزَلَ-يُزَلْزِلُ",
                                "arti" => "Gempa bumi",
                                "huruf" => array_unique(["زَ","لْ","زَ","لَ","-","يُ","زَ","لْ","زِ","لُ"])
                            ],
                            [
                                "kata_arab" => "قَطَعَ-يَقْطَعُ نَهْرًا",
                                "arti" => "Menyebrang sungai",
                                "huruf" => array_unique(["قَ","طَ","عَ","-","يَ","قْ","طَ","عُ","_","نَ","هْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "اِنْهَدَمَ-يَنْهَدِمُ",
                                "arti" => "Runtuh",
                                "huruf" => array_unique(["اِ","نْ","هَ","دَ","مَ","-","يَ","نْ","هَ","دِ","مُ"])
                            ],
                            [
                                "kata_arab" => "تَزَحْلَقَ-يَتَزَحْلَقُ",
                                "arti" => "Meluncur",
                                "huruf" => array_unique(["تَ","زَ","حْ","لَ","قَ","-","يَ","تَ","زَ","حْ","لَ","قُ"])
                            ],
                            [
                                "kata_arab" => "عَامَ-يَعُوْمُ",
                                "arti" => "Mengapung",
                                "huruf" => array_unique(["عَ","ا","مَ","-","يَ","عُ","وْ","مُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 124')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 124");
                        $data['materi'] = "Mufrodat 124";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُسْتَنْقَعٌ",
                                "arti" => "Rawa",
                                "huruf" => array_unique(["مُ","سْ","تَ","نْ","قَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "شُعَبٌ مَرْجَانِيَّةٌ",
                                "arti" => "Terumbu karang",
                                "huruf" => array_unique(["مَ","رْ","جَ","ا","نِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "اِنْهِيَارُ الْأَرْضِ",
                                "arti" => "Tanah longsor",
                                "huruf" => array_unique(["اِ","نْ","هِ","يَ","ا","رُ","_","ا","لْ","أَ","رْ","ضِ"])
                            ],
                            [
                                "kata_arab" => "زِلْزَالٌ",
                                "arti" => "Gempa bumi",
                                "huruf" => array_unique(["زِ","لْ","زَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "إِعْصَارٌ",
                                "arti" => "Angin topan",
                                "huruf" => array_unique(["إِ","عْ","صَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "خَلِيْجٌ",
                                "arti" => "Teluk",
                                "huruf" => array_unique(["خَ","لِ","يْ","جٌ"])
                            ],
                            [
                                "kata_arab" => "تَلَوُّثٌ",
                                "arti" => "Polusi",
                                "huruf" => array_unique(["تَ","لَ","وُّ","ثٌ"])
                            ],
                            [
                                "kata_arab" => "شِهَابٌ",
                                "arti" => "Meteor",
                                "huruf" => array_unique(["شِ","هَ","ا","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 125')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 125");
                        $data['materi'] = "Mufrodat 125";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَبَلَّرَ-يَتَبَلَّرُ",
                                "arti" => "Mengkristal",
                                "huruf" => array_unique(["تَ","بَ","لَّ","رَ","-","يَ","تَ","بَ","لَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "اِنْصَهَرَ-يَنْصَهِرُ",
                                "arti" => "Meleleh",
                                "huruf" => array_unique(["اِ","نْ","صَ","هَ","رَ","-","يَ","نْ","صَ","هِ","رُ"])
                            ],
                            [
                                "kata_arab" => "نَسَمَ-يَنْسِمُ",
                                "arti" => "Sepoi-sepoi",
                                "huruf" => array_unique(["نَ","سَ","مَ","-","يَ","نْ","سِ","مُ"])
                            ],
                            [
                                "kata_arab" => "تَحَجَّرَ-يَتَحَجَّرُ",
                                "arti" => "Membatu",
                                "huruf" => array_unique(["تَ","حَ","جَّ","رَ","-","يَ","تَ","حَ","جَّ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَشَعَّ-يُشِعُّ",
                                "arti" => "Menyinari",
                                "huruf" => array_unique(["أَ","شَ","عَّ","-","يُ","شِ","عُّ"])
                            ],
                            [
                                "kata_arab" => "اِنْشَقَّ-يَنْشَقُّ",
                                "arti" => "Terbelah",
                                "huruf" => array_unique(["اِ","نْ","شَ","قَّ","-","يَ","نْ","شَ","قُّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 126')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 126");
                        $data['materi'] = "Mufrodat 126";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كُسُوْفٌ",
                                "arti" => "Gerhana matahari",
                                "huruf" => array_unique(["كُ","سُ","وْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "خُسُوْفٌ",
                                "arti" => "Gerhana bulan",
                                "huruf" => array_unique(["خُ","سُ","وْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُذَنَّبٌ",
                                "arti" => "Komet",
                                "huruf" => array_unique(["مُ","ذَ","نَّ","بٌ"])
                            ],
                            [
                                "kata_arab" => "ثَوْرَانُ",
                                "arti" => "Erupsi",
                                "huruf" => array_unique(["ثَ","وْ","رَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "بُرْدٌ",
                                "arti" => "Salju",
                                "huruf" => array_unique(["بُ","رْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "بَرْقٌ",
                                "arti" => "Kilat",
                                "huruf" => array_unique(["بَ","رْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "قَضَاءٌ",
                                "arti" => "Angkasa",
                                "huruf" => array_unique(["قَ","ضَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "قَمَرٌ صِنَاعِيٌّ",
                                "arti" => "Satelit",
                                "huruf" => array_unique(["قَ","مَ","رٌ","_","صِ","نَ","ا","عِ","يٌّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 127')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 127");
                        $data['materi'] = "Mufrodat 127";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَفَذَ-يَنْفُذُ",
                                "arti" => "Menembus",
                                "huruf" => array_unique(["نَ","فَ","ذَ","-","يَ","نْ","فُ","ذُ"])
                            ],
                            [
                                "kata_arab" => "هَبَّ-يَهُبُّ",
                                "arti" => "Bertiup",
                                "huruf" => array_unique(["هَ","بَّ","-","يَ","هُ","بُّ"])
                            ],
                            [
                                "kata_arab" => "تَصَدَّعَ-يَتَصَدَّعُ",
                                "arti" => "Retak",
                                "huruf" => array_unique(["تَ","صَ","دَّ","عَ","-","يَ","تَ","صَ","دَّ","عُ"])
                            ],
                            [
                                "kata_arab" => "طَفَا-يَطْفُوْ",
                                "arti" => "Mengambang",
                                "huruf" => array_unique(["طَ","فَ","ا","-","يَ","طْ","فُ","وْ"])
                            ],
                            [
                                "kata_arab" => "جَعَلَ-يَجْعَلُ",
                                "arti" => "Menjadikan",
                                "huruf" => array_unique(["جَ","عَ","لَ","-","يَ","جْ","عَ","لُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 128')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 128");
                        $data['materi'] = "Mufrodat 128";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَفْحٌ",
                                "arti" => "Lereng",
                                "huruf" => array_unique(["سَ","فْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "شِتَاءٌ",
                                "arti" => "Musim dingin",
                                "huruf" => array_unique(["شِ","تَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "رَبِيْعٌ",
                                "arti" => "Musim semi",
                                "huruf" => array_unique(["رَ","بِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "خَرِيْفٌ",
                                "arti" => "Musim gugur",
                                "huruf" => array_unique(["خَ","رِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "صَيْفٌ",
                                "arti" => "Musim panas",
                                "huruf" => array_unique(["صَ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "قَارَةٌ",
                                "arti" => "Benua",
                                "huruf" => array_unique(["قَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَرْبٌ",
                                "arti" => "Barat",
                                "huruf" => array_unique(["غَ","رْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "شَرْقٌ",
                                "arti" => "Timur",
                                "huruf" => array_unique(["شَ","رْ","قٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 129')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 129");
                        $data['materi'] = "Mufrodat 129";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَمَالٌ",
                                "arti" => "Utara",
                                "huruf" => array_unique(["شَ","مَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَنُوْبٌ",
                                "arti" => "Selatan",
                                "huruf" => array_unique(["جَ","نُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "حَضَارَةٌ",
                                "arti" => "Peradaban",
                                "huruf" => array_unique(["حَ","ضَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَوْضَى",
                                "arti" => "Kekacauan",
                                "huruf" => array_unique(["فَ","وْ","ضَ","ى"])
                            ],
                            [
                                "kata_arab" => "رِيْفٌ",
                                "arti" => "Pedesaan",
                                "huruf" => array_unique(["رِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "بُحَيْرَةٌ صِنَاعِيَّةٌ",
                                "arti" => "Waduk",
                                "huruf" => array_unique(["بُ","حَ","يْ","رَ","ةٌ","_","صِ","نَ","ا","عِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَعْرٌ",
                                "arti" => "Jurang",
                                "huruf" => array_unique(["قَ","عْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَعْدٌ",
                                "arti" => "Guntur",
                                "huruf" => array_unique(["رَ","عْ","دٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 130')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 130");
                        $data['materi'] = "Mufrodat 130";
                        $data['tema'] = "Tema 8";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَوْسِمُ الثَّلْجِ",
                                "arti" => "Musim salju",
                                "huruf" => array_unique(["مَ","وْ","سِ","مُ","_","ا","ل","ثَّ","لْ","جِ"])
                            ],
                            [
                                "kata_arab" => "قِمَّةٌ",
                                "arti" => "Huku",
                                "huruf" => array_unique(["قِ","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُطْبٌ",
                                "arti" => "Kutub",
                                "huruf" => array_unique(["قُ","طْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "وَاحَةٌ",
                                "arti" => "Oase",
                                "huruf" => array_unique(["وَ","ا","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَرَابٌ",
                                "arti" => "Fatamorgana",
                                "huruf" => array_unique(["سَ","رَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "عَيْنٌ",
                                "arti" => "Mata air",
                                "huruf" => array_unique(["عَ","يْ","نٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 131')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 131");
                        $data['materi'] = "Mufrodat 131";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ثَوْرٌ",
                                "arti" => "Sapi (jantan)",
                                "huruf" => array_unique(["ثَ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَقَرَةٌ",
                                "arti" => "Sapi betina",
                                "huruf" => array_unique(["بَ","قَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَامُوْسٌ",
                                "arti" => "Kerbau",
                                "huruf" => array_unique(["جَ","ا","مُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "جَمَلٌ",
                                "arti" => "Unta",
                                "huruf" => array_unique(["جَ","مَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "حِمَارٌ",
                                "arti" => "Keledai",
                                "huruf" => array_unique(["حِ","مَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "حِصَانٌ",
                                "arti" => "Kuda",
                                "huruf" => array_unique(["حِ","صَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "خَرُوْفٌ",
                                "arti" => "Domba",
                                "huruf" => array_unique(["خَ","رُ","وْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "غَنَمٌ",
                                "arti" => "Kambing",
                                "huruf" => array_unique(["غَ","نَ","مٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 132')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 132");
                        $data['materi'] = "Mufrodat 132";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فِيْلٌ",
                                "arti" => "Gajah",
                                "huruf" => array_unique(["فِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَمِرٌ",
                                "arti" => "Harimau",
                                "huruf" => array_unique(["نَ","مِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قِطٌّ",
                                "arti" => "Kucing",
                                "huruf" => array_unique(["قِ","طٌّ"])
                            ],
                            [
                                "kata_arab" => "تِمْسَاحٌ",
                                "arti" => "Buaya",
                                "huruf" => array_unique(["تِ","مْ","سَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "أَسَدٌ",
                                "arti" => "Singa",
                                "huruf" => array_unique(["أَ","سَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "ثُعْبَانٌ",
                                "arti" => "Ular",
                                "huruf" => array_unique(["ثُ","عْ","بَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "سِنْجَابٌ",
                                "arti" => "Tupai",
                                "huruf" => array_unique(["سِ","نْ","جَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "ذِئْبٌ",
                                "arti" => "Serigala",
                                "huruf" => array_unique(["ذِ","ئْ","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 133')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 133");
                        $data['materi'] = "Mufrodat 133";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سُلَحْفَاةٌ",
                                "arti" => "Kura-kura",
                                "huruf" => array_unique(["سُ","لَ","حْ","فَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَرَافَةٌ",
                                "arti" => "Jerapah",
                                "huruf" => array_unique(["زَ","رَ","ا","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَعُوْضَةٌ",
                                "arti" => "Nyamuk",
                                "huruf" => array_unique(["بَ","عُ","وْ","ضَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَأْرٌ",
                                "arti" => "Tikus",
                                "huruf" => array_unique(["فَ","أْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "أَرْنَبٌ",
                                "arti" => "Kelinci",
                                "huruf" => array_unique(["أَ","رْ","نَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "ضِفْدَعٌ",
                                "arti" => "Katak",
                                "huruf" => array_unique(["ضِ","فْ","دَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "كَلْبٌ",
                                "arti" => "Anjing",
                                "huruf" => array_unique(["كَ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "صُرْصُوْرٌ",
                                "arti" => "Kecoa",
                                "huruf" => array_unique(["صُ","رْ","صُ","وْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 134')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 134");
                        $data['materi'] = "Mufrodat 134";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ذُبَابَةٌ",
                                "arti" => "Lalat",
                                "huruf" => array_unique(["ذُ","بَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَاشَةٌ",
                                "arti" => "Kupu-kupu",
                                "huruf" => array_unique(["فَ","رَ","ا","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَرْطَانٌ",
                                "arti" => "Kepiting",
                                "huruf" => array_unique(["سَ","رْ","طَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "عَنْكَبُوْتٌ",
                                "arti" => "Laba-laba",
                                "huruf" => array_unique(["عَ","نْ","كَ","بُ","وْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "نَمْلَةٌ",
                                "arti" => "Semut",
                                "huruf" => array_unique(["نَ","مْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُمْلَةٌ",
                                "arti" => "Kutu",
                                "huruf" => array_unique(["قُ","مْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دُلْفِيْنٌ",
                                "arti" => "Lumba-lumba",
                                "huruf" => array_unique(["دُ","لْ","فِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "عَقْرَبٌ",
                                "arti" => "Kalajengking",
                                "huruf" => array_unique(["عَ","قْ","رَ","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 135')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 135");
                        $data['materi'] = "Mufrodat 135";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دُوْدَةٌ",
                                "arti" => "Ulat",
                                "huruf" => array_unique(["دُ","وْ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَمَكُ الْحُوْتِ",
                                "arti" => "Paus",
                                "huruf" => array_unique(["سَ","مَ","كُ","_","ا","لْ","حُ","وْ","تِ"])
                            ],
                            [
                                "kata_arab" => "سَمَكُ الْقِرْشِ",
                                "arti" => "Hiu",
                                "huruf" => array_unique(["سَ","مَ","كُ","_","ا","لْ","قِ","رْ","شِ"])
                            ],
                            [
                                "kata_arab" => "كَلْبُ الْبَحْرِ",
                                "arti" => "Anjing laut",
                                "huruf" => array_unique(["كَ","لْ","بُ","ا","لْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "فَرَسُ الْبَحْرِ",
                                "arti" => "Kuda laut",
                                "huruf" => array_unique(["فَ","رَ","سُ","_","ا","لْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "فَرَسُ النَّهْرِ",
                                "arti" => "Kuda nil",
                                "huruf" => array_unique(["فَ","رَ","سُ","_","ا","ل","نَّ","هْ","رِ"])
                            ],
                            [
                                "kata_arab" => "تِنِّيْنٌ",
                                "arti" => "Naga",
                                "huruf" => array_unique(["تِ","نِّ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "طَائِرٌ",
                                "arti" => "Burung",
                                "huruf" => array_unique(["طَ","ا","ئِ","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 136')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 136");
                        $data['materi'] = "Mufrodat 136";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غُرَابٌ",
                                "arti" => "Gagak",
                                "huruf" => array_unique(["غُ","رَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "نَسْرٌ",
                                "arti" => "Elang",
                                "huruf" => array_unique(["نَ","سْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بُوْمٌ",
                                "arti" => "Burung hantu",
                                "huruf" => array_unique(["بُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "غَزَالٌ",
                                "arti" => "Kijang",
                                "huruf" => array_unique(["غَ","زَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَحْلَةٌ",
                                "arti" => "Lebah",
                                "huruf" => array_unique(["نَ","حْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دُبٌّ",
                                "arti" => "Beruang",
                                "huruf" => array_unique(["دُ","بٌّ"])
                            ],
                            [
                                "kata_arab" => "حَمَامَةٌ",
                                "arti" => "Merpati",
                                "huruf" => array_unique(["حَ","مَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُنْفُذٌ",
                                "arti" => "Landak",
                                "huruf" => array_unique(["قُ","نْ","فُ","ذٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 137')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 137");
                        $data['materi'] = "Mufrodat 137";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قُنْدُسٌ",
                                "arti" => "Berang-berang",
                                "huruf" => array_unique(["قُ","نْ","دُ","سٌ"])
                            ],
                            [
                                "kata_arab" => "أُخْطُبُوْطٌ",
                                "arti" => "Gurita",
                                "huruf" => array_unique(["أُ","خْ","طُ","بُ","وْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "بُرْغُوْثٌ",
                                "arti" => "Udang",
                                "huruf" => array_unique(["بُ","رْ","غُ","وْ","ثٌ"])
                            ],
                            [
                                "kata_arab" => "بَبْغَاءُ",
                                "arti" => "Burung beo",
                                "huruf" => array_unique(["بَ","بْ","غَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "دَجَاجَةٌ",
                                "arti" => "Ayam",
                                "huruf" => array_unique(["دَ","جَ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَطَّةٌ",
                                "arti" => "Bebek",
                                "huruf" => array_unique(["بَ","طَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَمَكٌ",
                                "arti" => "Ikan",
                                "huruf" => array_unique(["سَ","مَ","كٌ"])
                            ],
                            [
                                "kata_arab" => "خُفَّاشٌ",
                                "arti" => "Kelelawar",
                                "huruf" => array_unique(["خُ","فَّ","ا","شٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 138')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 138");
                        $data['materi'] = "Mufrodat 138";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَزَغَةٌ",
                                "arti" => "Cicak",
                                "huruf" => array_unique(["وَ","زَ","غَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَرِيْشٌ",
                                "arti" => "Kelabang",
                                "huruf" => array_unique(["حَ","رِ","يْ","شٌ"])
                            ],
                            [
                                "kata_arab" => "حَشَرَةٌ",
                                "arti" => "Serangga",
                                "huruf" => array_unique(["حَ","شَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَرْكَدَّنٌ",
                                "arti" => "Badak",
                                "huruf" => array_unique(["كَ","رْ","كَ","دَّ","نٌ"])
                            ],
                            [
                                "kata_arab" => "خِنْزِيْرٌ",
                                "arti" => "Babi",
                                "huruf" => array_unique(["خِ","نْ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَرَادَةٌ",
                                "arti" => "Belalang",
                                "huruf" => array_unique(["جَ","رَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُنْفُسَاءُ",
                                "arti" => "Kumbang",
                                "huruf" => array_unique(["خُ","نْ",'فُ',"سَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "حِرْبَاءٌ",
                                "arti" => "Bunglon",
                                "huruf" => array_unique(["حِ","رْ","بَ","ا","ءٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 139')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 139");
                        $data['materi'] = "Mufrodat 139";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَابَّةُ الْأَرٌضِ",
                                "arti" => "Rayap",
                                "huruf" => array_unique(["دَ","ا","بَّ","ةُ","_","ا","لْ","أَ","رٌ","ضِ"])
                            ],
                            [
                                "kata_arab" => "دِيْكٌ",
                                "arti" => "Ayam jantan",
                                "huruf" => array_unique(["دِ","يْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "آفَةٌ",
                                "arti" => "Hama",
                                "huruf" => array_unique(["آ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جُرْثُوْمٌ",
                                "arti" => "Kuman",
                                "huruf" => array_unique(["جُ","رْ","ثُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "طَاوُوْسٌ",
                                "arti" => "Merak",
                                "huruf" => array_unique(["طَ","ا","وُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "بِطْرِيْقٌ",
                                "arti" => "Pinguin",
                                "huruf" => array_unique(["بِ","طْ","رِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "إِوَزَّةٌ",
                                "arti" => "Angsa",
                                "huruf" => array_unique(["إِ","وَ","زَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَهْدٌ",
                                "arti" => "Macan tutul",
                                "huruf" => array_unique(["فَ","هْ","دٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 140')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 140");
                        $data['materi'] = "Mufrodat 140";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "زَئِيْرُ الْأَسَدِ",
                                "arti" => "Auman singa",
                                "huruf" => array_unique(["زَ","ئِ","يْ","رُ","_","ا","لْ","أَ","سَ","دِ"])
                            ],
                            [
                                "kata_arab" => "نُبَاحُ الْكَلْبِ",
                                "arti" => "Gonggongan anjing",
                                "huruf" => array_unique(["نُ","بَ","ا","حُ","_","ا","لْ","كَ","لْ","بِ"])
                            ],
                            [
                                "kata_arab" => "ثُغَاءُ الْغَنَمِ",
                                "arti" => "Embikan kambing",
                                "huruf" => array_unique(["ثُ","غَ","ا","ءُ","_","ا","لْ","غَ","نَ","مِ"])
                            ],
                            [
                                "kata_arab" => "دَوِيُّ النَّحْلِ",
                                "arti" => "Dengungan lebah",
                                "huruf" => array_unique(["دَ","وِ","يُّ","_","ا","ل","نَّ","حْ","لِ"])
                            ],
                            [
                                "kata_arab" => "صَفِيْرُ الطَّيْرِ",
                                "arti" => "Kicauan burung",
                                "huruf" => array_unique(["صَ","فِ","يْ","رُ","_","ا","ل","طَّ","يْ","رِ"])
                            ],
                            [
                                "kata_arab" => "خُوَارُ الْبَقَرِ",
                                "arti" => "Lenguhan sapi",
                                "huruf" => array_unique(["خُ","وَ","ا","رُ","_","ا","لْ","بَ","قَ","رِ"])
                            ],
                            [
                                "kata_arab" => "قَوْقُ الدِّيْكِ",
                                "arti" => "Kokokan ayam",
                                "huruf" => array_unique(["قَ","وْ","قُ","_","ا","ل","دِّ","يْ","كِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 141')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 141");
                        $data['materi'] = "Mufrodat 141";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَحِيْحُ الثُّعْبَانِ",
                                "arti" => "Desisan ular",
                                "huruf" => array_unique(["فَ","حِ","يْ","حُ","_","ا","ل","ثُّ","عْ","بَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "نَقِيْقُ الضِّفْدَعِ",
                                "arti" => "Suara katak",
                                "huruf" => array_unique(["نَ","قِ","يْ","قُ","_","ا","ل","ضِّ","فْ","دَ","عِ"])
                            ],
                            [
                                "kata_arab" => "بَطْبَطَةُ الْبَطَّةِ",
                                "arti" => "Suara itik",
                                "huruf" => array_unique(["بَ","طْ","بَ","طَ","ةُ","_","ا","لْ","بَ","طَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "نَعِيْبُ الْغُرَابِ",
                                "arti" => "Suara gagak",
                                "huruf" => array_unique(["نَ","عِ","يْ","بُ","_","ا","لْ","غُ","رَ","ا","بِ"])
                            ],
                            [
                                "kata_arab" => "مُوَاءُ الْهِرِّ",
                                "arti" => "Meongan kucing",
                                "huruf" => array_unique(["مُ","وَ","ا","ءُ","_","ا","لْ","هِ","رِّ"])
                            ],
                            [
                                "kata_arab" => "صَهِيْلُ الْخَيْلِ",
                                "arti" => "Ringkikan kuda",
                                "huruf" => array_unique(["صَ","هِ","يْ","لُ","_","ا","لْ","خَ","يْ","لِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 142')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 142");
                        $data['materi'] = "Mufrodat 142";
                        $data['tema'] = "Tema 10";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عُوَاءُ الذِّئْبِ",
                                "arti" => "Auman serigala",
                                "huruf" => array_unique(["عُ","وَ","ا","ءُ","_","ا","ل","ذِّ","ئْ","بِ"])
                            ],
                            [
                                "kata_arab" => "نَهِيْقُ الْحِمَارِ",
                                "arti" => "Suara keledai",
                                "huruf" => array_unique(["نَ","هِ","يْ","قُ","_","ا","لْ","حِ","مَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "قُرْصَةُ الْبَعُوْضَةِ",
                                "arti" => "Gigitan nyamuk",
                                "huruf" => array_unique(["قُ","رْ","صَ","ةُ","_","ا","لْ","بَ","عُ","وْ","ضَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "لَدْغَةُ النَّحْلِ",
                                "arti" => "Sengatan lebah",
                                "huruf" => array_unique(["لَ","دْ","غَ","ةُ","_","ا","ل","نَّ","حْ","لِ"])
                            ],
                            [
                                "kata_arab" => "خَدْشُ النَّمِرِ",
                                "arti" => "Cakaran harimau",
                                "huruf" => array_unique(["خَ","دْ","شُ","_","ا","ل","نَّ","مِ","رِ"])
                            ],
                            [
                                "kata_arab" => "نَقْرُ الطَّيْرِ",
                                "arti" => "Patukan burung",
                                "huruf" => array_unique(["نَ","قْ","رُ","_","ا","ل","طَّ","يْ","رِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 143')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 143");
                        $data['materi'] = "Mufrodat 143";
                        $data['tema'] = "Tema 11";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَاكِهَةٌ",
                                "arti" => "Buah",
                                "huruf" => array_unique(["فَ","ا","كِ","هَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُضْرَوَاتٌ",
                                "arti" => "Sayuran",
                                "huruf" => array_unique(["خُ","ضْ","رَ","وَ","ا","تٌ"])
                            ],
                            [
                                "kata_arab" => "تُفَاحٌ",
                                "arti" => "Apel",
                                "huruf" => array_unique(["تُ","فَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "عِنَبٌ",
                                "arti" => "Anggur",
                                "huruf" => array_unique(["عِ","نَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْزٌ",
                                "arti" => "Pisang",
                                "huruf" => array_unique(["مَ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "تَمْرٌ",
                                "arti" => "Kurma",
                                "huruf" => array_unique(["تَ","مْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رُمَّانٌ",
                                "arti" => "Delima",
                                "huruf" => array_unique(["رُ","مَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "بَاذِنْجَانٌ",
                                "arti" => "Terong",
                                "huruf" => array_unique(["بَ","ا","ذِ","نْ","جَ","ا","نٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 144')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 144");
                        $data['materi'] = "Mufrodat 144";
                        $data['tema'] = "Tema 11";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ثَمْرَةٌ نَجْمِيَّةٌ",
                                "arti" => "Belimbing",
                                "huruf" => array_unique(["ثَ","مْ","رَ","ةٌ","_","نَ","جْ","مِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بُرْتُقَالٌ",
                                "arti" => "Jeruk",
                                "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَّافَةٌ",
                                "arti" => "Jambu",
                                "huruf" => array_unique(["جَ","وَّ","ا","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَمَّامٌ",
                                "arti" => "Melon",
                                "huruf" => array_unique(["شَ","مَّ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "بِطِّيْخٌ",
                                "arti" => "Semangka",
                                "huruf" => array_unique(["بِ","طِّ","يْ","خٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَاوَلَةٌ",
                                "arti" => "Strawberry",
                                "huruf" => array_unique(["فَ","رَ","ا","وَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَنَانَسْ",
                                "arti" => "Nanas",
                                "huruf" => array_unique(["أَ","نَ","ا","نَ","سْ"])
                            ],
                            [
                                "kata_arab" => "مَانْغَا",
                                "arti" => "Mangga",
                                "huruf" => array_unique(["مَ","ا","نْ","غَ","ا"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 145')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 145");
                        $data['materi'] = "Mufrodat 145";
                        $data['tema'] = "Tema 11";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَابَايَا",
                                "arti" => "Pepaya",
                                "huruf" => array_unique(["بَ","ا","بَ","ا","يَ","ا"])
                            ],
                            [
                                "kata_arab" => "قَصَبُ السُّكَّرِ",
                                "arti" => "Tebu",
                                "huruf" => array_unique(["قَ","صَ","بُ","_","ا","ل","سُّ","كَّ","رِ"])
                            ],
                            [
                                "kata_arab" => "ذُرَّةٌ",
                                "arti" => "Jagung",
                                "huruf" => array_unique(["ذُ","رَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَمَاطِمُ",
                                "arti" => "Tomat",
                                "huruf" => array_unique(["طَ","مَ","ا","طِ","مُ"])
                            ],
                            [
                                "kata_arab" => "خِيَارٌ",
                                "arti" => "Mentimun",
                                "huruf" => array_unique(["خِ","يَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَصَلٌ",
                                "arti" => "Bawang merah",
                                "huruf" => array_unique(["بَ","صَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ثَوْمٌ",
                                "arti" => "Bawang putih",
                                "huruf" => array_unique(["ثَ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "جَزَرٌ",
                                "arti" => "Wortel",
                                "huruf" => array_unique(["جَ","زَ","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 146')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 146");
                        $data['materi'] = "Mufrodat 146";
                        $data['tema'] = "Tema 11";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَطَاطِسُ",
                                "arti" => "Kentang",
                                "huruf" => array_unique(["بَ","طَ","ا","طِ","سُ"])
                            ],
                            [
                                "kata_arab" => "فَاصُوْلِيَةٌ",
                                "arti" => "Kacang panjang / buncis",
                                "huruf" => array_unique(["فَ","ا","صُ","وْ","لِ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَبَانِخٌ",
                                "arti" => "Bayam",
                                "huruf" => array_unique(["سَ","بَ","ا","نِ","خٌ"])
                            ],
                            [
                                "kata_arab" => "كُرُنْبٌ",
                                "arti" => "Kol",
                                "huruf" => array_unique(["كُ","رُ","نْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "فُوْلٌ",
                                "arti" => "Kacang kulit",
                                "huruf" => array_unique(["فُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "اَلْفُلْفُلُ الْأَحْمَرُ",
                                "arti" => "Cabe merah",
                                "huruf" => array_unique(["اَ","لْ","فُ","لْ","فُ","لُ","_","ا","لْ","أَ","حْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "اَلْفُلْفُلُ الْأَخْضَرُ",
                                "arti" => "Cabe hijau",
                                "huruf" => array_unique(["اَ","لْ","فُ","لْ","فُ","لُ","_","ا","لْ","أَ","خْ","ضَ","رُ"])
                            ],
                            [
                                "kata_arab" => "يَقْطِيْنٌ",
                                "arti" => "Labu",
                                "huruf" => array_unique(["يَ","قْ","طِ","يْ","نٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 147')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 147");
                        $data['materi'] = "Mufrodat 147";
                        $data['tema'] = "Tema 11";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "زَنْجَبِيْلٌ",
                                "arti" => "Jahe",
                                "huruf" => array_unique(["زَ","نْ","جَ","بِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَوَادِرُ",
                                "arti" => "Toge",
                                "huruf" => array_unique(["بَ","وَ","ا","دِ","رُ"])
                            ],
                            [
                                "kata_arab" => "كُرْكُمٌ",
                                "arti" => "Kunyit",
                                "huruf" => array_unique(["كُ","رْ","كُ","مٌ"])
                            ],
                            [
                                "kata_arab" => "خَسٌّ",
                                "arti" => "Daun seledri",
                                "huruf" => array_unique(["خَ","سٌّ"])
                            ],
                            [
                                "kata_arab" => "كَزْبَرَةٌ",
                                "arti" => "Ketumbar",
                                "huruf" => array_unique(["كَ","زْ","بَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَبَّةٌ",
                                "arti" => "Biji",
                                "huruf" => array_unique(["حَ","بَّ","ةٌ"])
                            ],
                            [
                                "kata_arab"=> "شَجَرٌ",
                                "arti" => "Pohon",
                                "huruf" => array_unique([شَجَرٌ])
                            ],
                            [
                                "kata_arab"=> "خَشَبُ السَّاجِ",
                                "arti" => "Pohon jati",
                                "huruf" => array_unique(["خَ","شَ","بُ","_","ا","ل","سَّ","ا","جِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 148')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 148");
                        $data['materi'] = "Mufrodat 148";
                        $data['tema'] = "Tema 11";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَشِيْشَةُ الْبَحْرِ",
                                "arti" => "Rumput laut",
                                "huruf" => array_unique(["حَ","شِ","يْ","شَ","ةُ","_","ا","لْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "زَهْرَةٌ",
                                "arti" => "Bunga",
                                "huruf" => array_unique(["زَ","هْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وَرْدَةٌ",
                                "arti" => "Mawar",
                                "huruf" => array_unique(["وَ","رْ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "يَاسْمِيْنُ",
                                "arti" => "Melati",
                                "huruf" => array_unique(["يَ","ا","سْ","مِ","يْ","نُ"])
                            ],
                            [
                                "kata_arab" => "دَوَّارُ الشَّمْسِ",
                                "arti" => "Bunga matahari",
                                "huruf" => array_unique(["دَ","وَّ","ا","رُ","_","ا","ل","شَّ","مْ","سِ"])
                            ],
                            [
                                "kata_arab" => "أُشْنَةٌ",
                                "arti" => "Lumut",
                                "huruf" => array_unique(["أُ","شْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَشْنِيْنْ",
                                "arti" => "Teratai",
                                "huruf" => array_unique(["بَ","شْ","نِ","يْ","نْ"])
                            ],
                            [
                                "kata_arab" => "صُبَارٌ",
                                "arti" => "Kaktus",
                                "huruf" => array_unique(["صُ","بَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab"=> "عُشْبٌ",
                                "arti" => "Rumput",
                                "huruf" => array_unique(["عُ","شْ","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 149')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 149");
                        $data['materi'] = "Mufrodat 149";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جِسْمٌ",
                                "arti" => "Tubuh/Badan",
                                "huruf" => array_unique(["جِ","سْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "رَأْسٌ",
                                "arti" => "Kepala",
                                "huruf" => array_unique(["رَ","أْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُخٌّ",
                                "arti" => "Otak",
                                "huruf" => array_unique(["مُ","خٌّ"])
                            ],
                            [
                                "kata_arab" => "عَقْلٌ",
                                "arti" => ": Akal",
                                "huruf" => array_unique(["عَ","قْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شَعْرٌ",
                                "arti" => "Rambut",
                                "huruf" => array_unique(["شَ","عْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "نَاصِيَةٌ",
                                "arti" => "Ubun-ubun",
                                "huruf" => array_unique(["نَ","ا","صِ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وَجْهٌ",
                                "arti" => "Wajah/Muka",
                                "huruf" => array_unique(["وَ","جْ","هٌ"])
                            ],
                            [
                                "kata_arab" => "جَبْهَةٌ",
                                "arti" => "Dahi/Kening",
                                "huruf" => array_unique(["جَ","بْ","هَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 150')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 150");
                        $data['materi'] = "Mufrodat 150";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَاجِبٌ",
                                "arti" => "Alis",
                                "huruf" => array_unique(["حَ","ا","جِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "عَيْنٌ",
                                "arti" => "Mata",
                                "huruf" => array_unique(["عَ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "هُدْبٌ",
                                "arti" => "Bulu mata",
                                "huruf" => array_unique(["هُ","دْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "جَفْنٌ",
                                "arti" => "Kelopak",
                                "huruf" => array_unique(["جَ","فْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "صُدْغٌ",
                                "arti" => "Pelipis",
                                "huruf" => array_unique(["صُ","دْ","غٌ"])
                            ],
                            [
                                "kata_arab" => "مُقْلَةٌ",
                                "arti" => "Bola mata",
                                "huruf" => array_unique(["مُ","قْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَدَقَةٌ",
                                "arti" => "Hitam mata",
                                "huruf" => array_unique(["حَ","دَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَمَصٌ",
                                "arti" => "Kotoran mata",
                                "huruf" => array_unique(["رَ","مَ","صٌ"])
                            ]
                        ];
                    }
                // 101 - 150

                // 151 - 200
                    else if($_GET['latihan'] == MD5('Mufrodat 151')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 151");
                        $data['materi'] = "Mufrodat 151";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَمْعٌ",
                                "arti" => "Air mata",
                                "huruf" => array_unique(["دَ","مْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "أَنْفٌ",
                                "arti" => "Hidung",
                                "huruf" => array_unique(["أَ","نْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مِنْخَرٌ",
                                "arti" => "Lubang hidung",
                                "huruf" => array_unique(["مِ","نْ","خَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُخَاطٌ",
                                "arti" => "Ingus",
                                "huruf" => array_unique(["مُ","خَ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "خَدٌّ",
                                "arti" => "Pipi",
                                "huruf" => array_unique(["خَ","دٌّ"])
                            ],
                            [
                                "kata_arab" => "فَمٌ",
                                "arti" => "Mulut",
                                "huruf" => array_unique(["فَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَفَةٌ",
                                "arti" => "Bibir",
                                "huruf" => array_unique(["شَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِنٌّ",
                                "arti" => "Gigi",
                                "huruf" => array_unique(["سِ","نٌّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 152')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 152");
                        $data['materi'] = "Mufrodat 152";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جُمْجُمَةٌ",
                                "arti" => "Tengkorak",
                                "huruf" => array_unique(["جُ","مْ","جُ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِسَانٌ",
                                "arti" => "Lidah / lisan",
                                "huruf" => array_unique(["لِ","سَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "بُصَاقٌ",
                                "arti" => "Ludah",
                                "huruf" => array_unique(["بُ","صَ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "لُعَابٌ",
                                "arti" => "Air liur",
                                "huruf" => array_unique(["لُ","عَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "نُخَامَةٌ",
                                "arti" => "Dahak",
                                "huruf" => array_unique(["نُ","خَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لَوْزَةُ الْحَلْقِ",
                                "arti" => "Amandel",
                                "huruf" => array_unique(["لَ","وْ","زَ","ةُ","_","ا","لْ","حَ","لْ","قِ"])
                            ],
                            [
                                "kata_arab" => "حَرْقَدَةٌ",
                                "arti" => "Jakun",
                                "huruf" => array_unique(["حَ","رْ","قَ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أُذُنٌ",
                                "arti" => "Telinga",
                                "huruf" => array_unique(["أُ","ذُ","نٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 153')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 153");
                        $data['materi'] = "Mufrodat 153";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ذَقَنٌ",
                                "arti" => "Dagu",
                                "huruf" => array_unique(["ذَ","قَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَارِبٌ",
                                "arti" => "Kumis",
                                "huruf" => array_unique(["شَ","ا","رِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "لِحْيَةٌ",
                                "arti" => "Jenggot",
                                "huruf" => array_unique(["لِ","حْ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَارِضٌ",
                                "arti" => "Jambang",
                                "huruf" => array_unique(["عَ","ا","رِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "عُنُقٌ",
                                "arti" => "Leher",
                                "huruf" => array_unique(["عُ","نُ","قٌ"])
                            ],
                            [
                                "kata_arab" => "كَتِفٌ",
                                "arti" => "Pundak",
                                "huruf" => array_unique(["كَ","تِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "صَدْرٌ",
                                "arti" => "Dada",
                                "huruf" => array_unique(["صَ","دْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ثَدْيٌ",
                                "arti" => "Buah dada",
                                "huruf" => array_unique(["ثَ","دْ","يٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 154')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 154");
                        $data['materi'] = "Mufrodat 154";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَلَمَةٌ",
                                "arti" => "Puting",
                                "huruf" => array_unique(["حَ","لَ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سُرَّةٌ",
                                "arti" => "Pusar",
                                "huruf" => array_unique(["سُ","رَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قَلْبٌ",
                                "arti" => "Jantung",
                                "huruf" => array_unique(["قَ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كُلْيَةٌ",
                                "arti" => "Ginjal",
                                "huruf" => array_unique(["كُ","لْ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْيٌ",
                                "arti" => "Usus",
                                "huruf" => array_unique(["مَ","عْ","يٌ"])
                            ],
                            [
                                "kata_arab" => "كَبِدٌ",
                                "arti" => "Hati",
                                "huruf" => array_unique(["كَ","بِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "رِئَةٌ",
                                "arti" => "Paru-paru",
                                "huruf" => array_unique(["رِ","ئَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "ظَهْرٌ",
                                "arti" => "Punggung",
                                "huruf" => array_unique(["ظَ","هْ","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 155')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 155");
                        $data['materi'] = "Mufrodat 155";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَطْنٌ",
                                "arti" => "Perut",
                                "huruf" => array_unique(["بَ","طْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "يَدٌ",
                                "arti" => "Tangan",
                                "huruf" => array_unique(["يَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "كَفٌّ",
                                "arti" => "Telapak tangan",
                                "huruf" => array_unique(["كَ","فٌّ"])
                            ],
                            [
                                "kata_arab" => "مِعْصَمٌ",
                                "arti" => "Pergelangan tangan",
                                "huruf" => array_unique(["مِ","عْ","صَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "أَصْبَعٌ",
                                "arti" => "Jari",
                                "huruf" => array_unique(["أَ","صْ","بَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "سَبَابَةٌ",
                                "arti" => "Jari telunjuk",
                                "huruf" => array_unique(["سَ","بَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وُسْطَى",
                                "arti" => "Jari tengah",
                                "huruf" => array_unique(["وُ","سْ","طَ","ى"])
                            ],
                            [
                                "kata_arab" => "بِنْصَرٌ",
                                "arti" => "Jari manis",
                                "huruf" => array_unique(["بِ","نْ","صَ","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 156')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 156");
                        $data['materi'] = "Mufrodat 156";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خِنْصَرٌ",
                                "arti" => "Jari kelingking",
                                "huruf" => array_unique(["خِ","نْ","صَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "إِبْهَامٌ",
                                "arti" => "Ibu jari (jempol)",
                                "huruf" => array_unique(["إِ","بْ","هَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "ظُفْرٌ",
                                "arti" => "Kuku",
                                "huruf" => array_unique(["ظُ","فْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْفَقٌ",
                                "arti" => "Siku",
                                "huruf" => array_unique(["مِ","رْ","فَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "دُبُرٌ",
                                "arti" => "Pantat",
                                "huruf" => array_unique(["دُ","بُ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَوْلٌ",
                                "arti" => "Kencing",
                                "huruf" => array_unique(["بَ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "غَائِطٌ",
                                "arti" => "Tahi",
                                "huruf" => array_unique(["غَ","ا","ئِ","طٌ"])
                            ],
                            [
                                "kata_arab" => "ضُرَاطٌ",
                                "arti" => "Kentut (dengan bunyi)",
                                "huruf" => array_unique(["ضُ","رَ","ا","طٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 157')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 157");
                        $data['materi'] = "Mufrodat 157";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فُسَاءٌ",
                                "arti" => "Kentut (tidak bunyi)",
                                "huruf" => array_unique(["فُ","سَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "رِجْلٌ",
                                "arti" => "Kaki",
                                "huruf" => array_unique(["رِ","جْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "فَخِذٌ",
                                "arti" => "Paha",
                                "huruf" => array_unique(["فَ","خِ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "رُكْبَةٌ",
                                "arti" => "Lutut",
                                "huruf" => array_unique(["رُ","كْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاقٌ",
                                "arti" => "Betis",
                                "huruf" => array_unique(["سَ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "كَعْبٌ",
                                "arti" => "Mata kaki",
                                "huruf" => array_unique(["كَ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "قَدَمٌ",
                                "arti" => "Kaki (dari pergelangan)",
                                "huruf" => array_unique(["قَ","دَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "عَقَبٌ",
                                "arti" => "Tumit",
                                "huruf" => array_unique(["عَ","قَ","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 158')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 158");
                        $data['materi'] = "Mufrodat 158";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَضَلَاتٌ",
                                "arti" => "Otot-otot",
                                "huruf" => array_unique(["عَ","ضَ","لَ","ا","تٌ"])
                            ],
                            [
                                "kata_arab" => "لَحْمٌ",
                                "arti" => "Daging",
                                "huruf" => array_unique(["لَ","حْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَحْمٌ",
                                "arti" => "Lemak",
                                "huruf" => array_unique(["شَ","حْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "عَظْمٌ",
                                "arti" => "Tulang",
                                "huruf" => array_unique(["عَ","ظْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَامَةٌ",
                                "arti" => "Tahi lalat",
                                "huruf" => array_unique(["شَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جِلْدٌ",
                                "arti" => "Kulit",
                                "huruf" => array_unique(["جِ","لْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَسَامٌ",
                                "arti" => "Pori-pori",
                                "huruf" => array_unique(["مَ","سَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "عِرْقٌ",
                                "arti" => "Urat",
                                "huruf" => array_unique(["عِ","رْ","قٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 159')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 159");
                        $data['materi'] = "Mufrodat 159";
                        $data['tema'] = "Tema 12";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَرَقٌ",
                                "arti" => "Keringat",
                                "huruf" => array_unique(["عَ","رَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "دَمٌ",
                                "arti" => "Darah",
                                "huruf" => array_unique(["دَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "قَيْحٌ",
                                "arti" => "Nanah",
                                "huruf" => array_unique(["قَ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "شَيْبَةٌ",
                                "arti" => "Uban",
                                "huruf" => array_unique(["شَ","يْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَانَةٌ",
                                "arti" => "Rambut kemaluan",
                                "huruf" => array_unique(["عَ","ا","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِثَّةٌ",
                                "arti" => "Gusi",
                                "huruf" => array_unique(["لِ","ثَّ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 160')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 160");
                        $data['materi'] = "Mufrodat 160";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَمَّاعَةٌ",
                                "arti" => "Headset",
                                "huruf" => array_unique(["سَ","مَّ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَطَّارِيَّةٌ",
                                "arti" => "Baterai",
                                "huruf" => array_unique(["بَ","طَّ","ا","رِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَحْمُوْلٌ",
                                "arti" => "Laptop",
                                "huruf" => array_unique(["مَ","حْ","مُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "تِلْفَازٌ",
                                "arti" => "Televisi",
                                "huruf" => array_unique(["تِ","لْ","فَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْوَحَةٌ",
                                "arti" => "Kipas angin",
                                "huruf" => array_unique(["مِ","رْ","وَ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِكْنَسَةٌ كَهْرُبَائِيَّةٌ",
                                "arti" => "Vacuum cleaner",
                                "huruf" => array_unique(["مِ","كْ","نَ","سَ","ةٌ","_","كَ","هْ","رُ","بَ","ا","ئِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَرَّادَةٌ",
                                "arti" => "Dispenser",
                                "huruf" => array_unique(["بَ","رَّ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "اَلْقِدْرُ الْكَهْرُبَائِيُّ",
                                "arti" => "Rice cooker",
                                "huruf" => array_unique(["اَ","لْ","قِ","دْ","رُ","_","ا","لْ","كَ","هْ","رُ","بَ","ا","ئِ","يُّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 161')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 161");
                        $data['materi'] = "Mufrodat 161";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَمَّاعَةٌ",
                                "arti" => "Headset",
                                "huruf" => array_unique(["سَ","مَّ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِكْوَاةٌ",
                                "arti" => "Setrika",
                                "huruf" => array_unique(["مِ","كْ","وَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَصَّارَةٌ",
                                "arti" => "Blender",
                                "huruf" => array_unique(["عَ","صَّ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُجَفِّفٌ",
                                "arti" => "Hair dryer",
                                "huruf" => array_unique(["مُ","جَ","فِّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "غَسَّالَةٌ",
                                "arti" => "Mesin cuci",
                                "huruf" => array_unique(["غَ","سَّ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُسَجِّلٌ",
                                "arti" => "Perekam suara",
                                "huruf" => array_unique(["مُ","سَ","جِّ","لٌ"])
                            ],
                            [
                                "kata_arab" => "هَاتِفٌ",
                                "arti" => "Telephone",
                                "huruf" => array_unique(["هَ","ا","تِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْبَسٌ",
                                "arti" => "Stop kontak",
                                "huruf" => array_unique(["مِ","قْ","بَ","سٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 162')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 162");
                        $data['materi'] = "Mufrodat 162";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَامِيْرَا",
                                "arti" => "Kamera",
                                "huruf" => array_unique(["كَ","ا","مِ","يْ","رَ","ا"])
                            ],
                            [
                                "kata_arab" => "طَابِعَةٌ",
                                "arti" => "Printer",
                                "huruf" => array_unique(["طَ","ا","بِ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "آلَةُ التَّصْوِيْرِ",
                                "arti" => "Mesin fotokopi",
                                "huruf" => array_unique(["آ","لَ","ةُ","_","ا","ل","تَّ","صْ","وِ","يْ","رِ"])
                            ],
                            [
                                "kata_arab" => "مِثْقَبٌ",
                                "arti" => "Bor",
                                "huruf" => array_unique(["مِ","ثْ","قَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "بَرْقِيَّةٌ",
                                "arti" => "Telegram",
                                "huruf" => array_unique(["بَ","رْ","قِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُكَيِّفٌ",
                                "arti" => "Adaptor",
                                "huruf" => array_unique(["مُ","كَ","يِّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "تِلِسْكُوْبٌ",
                                "arti" => "Teleskop",
                                "huruf" => array_unique(["تِ","لِ","سْ","كُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُخَيِّطَةٌ",
                                "arti" => "Mesin jahit",
                                "huruf" => array_unique(["مُ","خَ","يِّ","طَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 163')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 163");
                        $data['materi'] = "Mufrodat 163";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُكَيِّفُ الْهَوَاءِ",
                                "arti" => "AC",
                                "huruf" => array_unique(["مُ","كَ","يِّ","فُ","_","ا","لْ","هَ","وَ","ا","ءِ"])
                            ],
                            [
                                "kata_arab" => "مِصْعَدَةٌ",
                                "arti" => "Lift",
                                "huruf" => array_unique(["مِ","صْ","عَ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِسْمَارٌ",
                                "arti" => "Paku",
                                "huruf" => array_unique(["مِ","سْ","مَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِطْرَقَةٌ",
                                "arti" => "Palu",
                                "huruf" => array_unique(["مِ","طْ","رَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَأْسٌ",
                                "arti" => "Kapak",
                                "huruf" => array_unique(["فَ","أْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مِنْشَارٌ",
                                "arti" => "Gergaji",
                                "huruf" => array_unique(["مِ","نْ","شَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِفَكٌّ",
                                "arti" => "Obeng",
                                "huruf" => array_unique(["مِ","فَ","كٌّ"])
                            ],
                            [
                                "kata_arab" => "بُرْغِيٌّ",
                                "arti" => "Baut",
                                "huruf" => array_unique(["بُ","رْ","غِ","يٌّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 164')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 164");
                        $data['materi'] = "Mufrodat 164";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَدِيْدٌ",
                                "arti" => "Besi",
                                "huruf" => array_unique(["حَ","دِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "صُلْبٌ",
                                "arti" => "Baja",
                                "huruf" => array_unique(["صُ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "نُحَاسٌ",
                                "arti" => "Tembaga",
                                "huruf" => array_unique(["نُ","حَ","ا","سٌ"])
                            ],
                            [
                                "kata_arab" => "قِرْمِيْدٌ",
                                "arti" => "Genteng",
                                "huruf" => array_unique(["قِ","رْ","مِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "أُنْبُوْبٌ",
                                "arti" => "Pipa",
                                "huruf" => array_unique(["أُ","نْ","بُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "خُرْطُوْمٌ",
                                "arti" => "Selang",
                                "huruf" => array_unique(["خُ","رْ","طُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "سِلْكٌ",
                                "arti" => "Kabel/Kawat",
                                "huruf" => array_unique(["سِ","لْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مَغْنَطِيْسٌ",
                                "arti" => "Magnet",
                                "huruf" => array_unique(["مَ","غْ","نَ","طِ","يْ","سٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 165')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 165");
                        $data['materi'] = "Mufrodat 165";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَبِنَةٌ",
                                "arti" => "Batu bata",
                                "huruf" => array_unique(["لَ","بِ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَحَالَةٌ",
                                "arti" => "Katrol",
                                "huruf" => array_unique(["مَ","حَ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْزَقَةٌ",
                                "arti" => "Cangkul",
                                "huruf" => array_unique(["مِ","عْ","زَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَحْمٌ",
                                "arti" => "Arang",
                                "huruf" => array_unique(["فَ","حْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْحَاضٌ",
                                "arti" => "Kloset",
                                "huruf" => array_unique(["مِ","رْ","حَ","ا","ضٌ"])
                            ],
                            [
                                "kata_arab" => "قُبَّةٌ",
                                "arti" => "Kubah",
                                "huruf" => array_unique(["قُ","بَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَلَاسْتِيْكٌ",
                                "arti" => "Plastik",
                                "huruf" => array_unique(["بَ","لَ","ا","سْ","تِ","يْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "قَصَبٌ",
                                "arti" => "Bambu",
                                "huruf" => array_unique(["قَ","صَ","بٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 166')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 166");
                        $data['materi'] = "Mufrodat 166";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رُخَامَةٌ",
                                "arti" => "Marmer",
                                "huruf" => array_unique(["رُ","خَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "آلَةُ الْحِسَابِ",
                                "arti" => "Kalkulator",
                                "huruf" => array_unique(["آ","لَ","ةُ","_","ا","لْ","حِ","سَ","ا","بِ"])
                            ],
                            [
                                "kata_arab" => "ثَقْلَةٌ",
                                "arti" => "Barbel",
                                "huruf" => array_unique(["ثَ","قْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِنْفَاخٌ",
                                "arti" => "Pompa",
                                "huruf" => array_unique(["مِ","نْ","فَ","ا","خٌ"])
                            ],
                            [
                                "kata_arab" => "آلَةٌ",
                                "arti" => "Alat",
                                "huruf" => array_unique(["آ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَصَا",
                                "arti" => "Tongkat",
                                "huruf" => array_unique(["عَ","صَ","ا"])
                            ],
                            [
                                "kata_arab" => "بَوْصَلَةٌ",
                                "arti" => "Kompas",
                                "huruf" => array_unique(["بَ","وْ","صَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِذْيَاعٌ",
                                "arti" => "Radio",
                                "huruf" => array_unique(["مِ","ذْ","يَ","ا","عٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 167')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 167");
                        $data['materi'] = "Mufrodat 167";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فُرْنٌ",
                                "arti" => ": Oven",
                                "huruf" => array_unique(["فُ","رْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "تِرْمُوْسٌ",
                                "arti" => ": Termos",
                                "huruf" => array_unique(["تِ","رْ","مُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْقِدٌ",
                                "arti" => ": Kompor",
                                "huruf" => array_unique(["مَ","وْ","قِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "غَازٌ",
                                "arti" => ": Gas",
                                "huruf" => array_unique(["غَ","ا","زٌ"])
                            ],
                            [
                                "kata_arab" => "أَرِيْكَةٌ",
                                "arti" => "Sofa",
                                "huruf" => array_unique(["أَ","رِ","يْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كُرْسِيٌّ",
                                "arti" => "Kursi",
                                "huruf" => array_unique(["كُ","رْ","سِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مَقْعَدٌ",
                                "arti" => "Bangku",
                                "huruf" => array_unique(["مَ","قْ","عَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "سَجَّادَةٌ",
                                "arti" => "Permadani",
                                "huruf" => array_unique(["سَ","جَّ","ا","دَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 168')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 168");
                        $data['materi'] = "Mufrodat 168";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَصِيْرٌ",
                                "arti" => "Tikar",
                                "huruf" => array_unique(["حَ","صِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ثَلَّاجَةٌ",
                                "arti" => "Lemari es",
                                "huruf" => array_unique(["ثَ","لَّ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْلَاةٌ",
                                "arti" => "Wajan",
                                "huruf" => array_unique(["مِ","قْ","لَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِشْوَاةٌ",
                                "arti" => "Alat panggang",
                                "huruf" => array_unique(["مِ","شْ","وَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِكِّيْنٌ",
                                "arti" => "Pisau",
                                "huruf" => array_unique(["سِ","كِّ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "سَخَّانٌ",
                                "arti" => "Pemanas Air",
                                "huruf" => array_unique(["سَ","خَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "صَنْبُوْرٌ",
                                "arti" => "Kran",
                                "huruf" => array_unique(["صَ","نْ","بُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَاةٌ",
                                "arti" => "Sikat",
                                "huruf" => array_unique(["فُ","رْ","شَ","ا","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 169')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 169");
                        $data['materi'] = "Mufrodat 169";
                        $data['tema'] = "Tema 13";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كِبْرِيْتٌ",
                                "arti" => "Korek api",
                                "huruf" => array_unique(["كِ","بْ","رِ","يْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "قُفْلٌ",
                                "arti" => "Gembok",
                                "huruf" => array_unique(["قُ","فْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "زِيْرٌ",
                                "arti" => "Gentong",
                                "huruf" => array_unique(["زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "رِيْشَةٌ",
                                "arti" => "Kemoceng",
                                "huruf" => array_unique(["رِ","يْ","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طِلَاءٌ",
                                "arti" => "Cat",
                                "huruf" => array_unique(["طِ","لَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَاةُ الطِّلَاءِ",
                                "arti" => "Kuas",
                                "huruf" => array_unique(["فُ","رْ","شَ","ا","ةُ","_","ا","ل","طِّ","لَ","ا","ءِ"])
                            ],
                            [
                                "kata_arab" => "صُنْدُوْقٌ",
                                "arti" => "Kotak",
                                "huruf" => array_unique(["صُ","نْ","دُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "شَمْعَةٌ",
                                "arti" => "Lilin",
                                "huruf" => array_unique(["شَ","مْ","عَ","ةٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 170')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 170");
                        $data['materi'] = "Mufrodat 170";
                        $data['tema'] = "Tema 14";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَبْيَضُ",
                                "arti" => "Putih (lk)",
                                "huruf" => array_unique(["أَ","بْ","يَ","ضُ"])
                            ],
                            [
                                "kata_arab" => "بَيْضَاءُ",
                                "arti" => "Putih (pr)",
                                "huruf" => array_unique(["بَ","يْ","ضَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَسْوَدُ",
                                "arti" => "Hitam (lk)",
                                "huruf" => array_unique(["أَ","سْ","وَ","دُ"])
                            ],
                            [
                                "kata_arab" => "سَوْدَاءُ",
                                "arti" => "Hitam (pr)",
                                "huruf" => array_unique(["سَ","وْ","دَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَحْمَرُ",
                                "arti" => "Merah (lk)",
                                "huruf" => array_unique(["أَ","حْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "حَمْرَاءُ",
                                "arti" => "Merah (pr)",
                                "huruf" => array_unique(["حَ","مْ","رَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَصْفَرُ",
                                "arti" => "Kuning (lk)",
                                "huruf" => array_unique(["أَ","صْ","فَ","رُ"])
                            ],
                            [
                                "kata_arab" => "صَفْرَاءُ",
                                "arti" => "Kuning (pr)",
                                "huruf" => array_unique(["صَ","فْ","رَ","ا","ءُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 171')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 171");
                        $data['materi'] = "Mufrodat 171";
                        $data['tema'] = "Tema 14";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَخْضَرُ",
                                "arti" => "Hijau (lk)",
                                "huruf" => array_unique(["أَ","خْ","ضَ","رُ"])
                            ],
                            [
                                "kata_arab" => "خَضْرَاءُ",
                                "arti" => "Hijau (pr)",
                                "huruf" => array_unique(["خَ","ضْ","رَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَزْرَقُ",
                                "arti" => "Biru (lk)",
                                "huruf" => array_unique(["أَ","زْ","رَ","قُ"])
                            ],
                            [
                                "kata_arab" => "زَرْقَاءُ",
                                "arti" => "Biru (pr)",
                                "huruf" => array_unique(["زَ","رْ","قَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَرْمَدُ",
                                "arti" => "Abu-abu (lk)",
                                "huruf" => array_unique(["أَ","رْ","مَ","دُ"])
                            ],
                            [
                                "kata_arab" => "رَمْدَاءُ",
                                "arti" => "Abu-abu (pr)",
                                "huruf" => array_unique(["رَ","مْ","دَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "أَسْمَرُ",
                                "arti" => "Coklat (lk)",
                                "huruf" => array_unique(["أَ","سْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "سَمْرَاءُ",
                                "arti" => "Coklat (pr)",
                                "huruf" => array_unique(["سَ","مْ","رَ","ا","ءُ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 172')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 172");
                        $data['materi'] = "Mufrodat 172";
                        $data['tema'] = "Tema 15";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَذِيْذٌ",
                                "arti" => "Lezat",
                                "huruf" => array_unique(["لَ","ذِ","يْ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "حُلْوٌ",
                                "arti" => "Manis",
                                "huruf" => array_unique(["حُ","لْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "مُرٌّ",
                                "arti" => "Pahit",
                                "huruf" => array_unique(["مُ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "حَارٌّ",
                                "arti" => "Pedas",
                                "huruf" => array_unique(["حَ","ا","رٌّ"])
                            ],
                            [
                                "kata_arab" => "مَالِحٌ",
                                "arti" => "Asin",
                                "huruf" => array_unique(["مَ","ا","لِ","حٌ"])
                            ],
                            [
                                "kata_arab" => "عَافِضٌ",
                                "arti" => "Sepet",
                                "huruf" => array_unique(["عَ","ا","فِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "حَامِضٌ",
                                "arti" => "Kecut",
                                "huruf" => array_unique(["حَ","ا","مِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "عَذْبٌ",
                                "arti" => "Tawar",
                                "huruf" => array_unique(["عَ","ذْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "زَنِحٌ",
                                "arti" => "Tengik",
                                "huruf" => array_unique(["زَ","نِ","حٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 173')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 173");
                        $data['materi'] = "Mufrodat 173";
                        $data['tema'] = "Tema 16";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَيَّارَةٌ",
                                "arti" => "Mobil",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةُ الْأُجْرَةِ",
                                "arti" => "Taksi / angkot",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","ا","لْ","أُ","جْ","رَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "حَافِلَةٌ",
                                "arti" => "Bis",
                                "huruf" => array_unique(["حَ","ا","فِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَاحِنَةٌ",
                                "arti" => "Truk kontener",
                                "huruf" => array_unique(["شَ","ا","حِ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دَرَّاجَةٌ",
                                "arti" => "Sepeda",
                                "huruf" => array_unique(["دَ","رَّ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَّالَةٌ",
                                "arti" => "Sepeda motor",
                                "huruf" => array_unique(["جَ","وَّ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قِطَارٌ",
                                "arti" => "Kereta",
                                "huruf" => array_unique(["قِ","طَ","ا","رٌ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 174')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 174");
                        $data['materi'] = "Mufrodat 174";
                        $data['tema'] = "Tema 16";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَفِيْنَةٌ",
                                "arti" => "Kapal laut",
                                "huruf" => array_unique(["سَ","فِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَائِرَةٌ",
                                "arti" => "Pesawat terbang",
                                "huruf" => array_unique(["طَ","ا","ئِ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِشَارَةٌ ضَوْئِيَّةٌ",
                                "arti" => "Lampu lalulintas",
                                "huruf" => array_unique(["إِ","شَ","ا","رَ","ةٌ","_","ضَ","وْ","ئِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تَذْكِرَةٌ",
                                "arti" => "Tiket",
                                "huruf" => array_unique(["تَ","ذْ","كِ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَازُ السَّفَرِ",
                                "arti" => "Paspor",
                                "huruf" => array_unique(["جَ","وَ","ا","زُ","_","ا","ل","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "تَأْشِيْرَةٌ",
                                "arti" => "Visa",
                                "huruf" => array_unique(["تَ","أْ","شِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تَأْشِيْرَةُ الدُّخُوْلِ",
                                "arti" => "Visa masuk",
                                "huruf" => array_unique(["تَ","أْ","شِ","يْ","رَ","ةُ","_","ا","ل","دُّ","خُ","وْ","لِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 175')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 175");
                        $data['materi'] = "Mufrodat 175";
                        $data['tema'] = "Tema 16";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَأْشِيْرَةُ الْخُرُوْجِ",
                                "arti" => "Visa keluar",
                                "huruf" => array_unique(["تَ","أْ","شِ","يْ","رَ","ةُ","_","ا","لْ","خُ","رُ","وْ","جِ"])
                            ],
                            [
                                "kata_arab" => "دَرَجَةٌ أُوْلَى",
                                "arti" => "Kelas satu",
                                "huruf" => array_unique(["دَ","رَ","جَ","ةٌ","_","أُ","وْ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "دَرَجَةٌ سِيَاحِيَّةٌ",
                                "arti" => "Kelas ekonomi",
                                "huruf" => array_unique(["دَ","رَ","جَ","ةٌ","_","سِ","يَ","ا","حِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَالَةُ الْإِنْتِظَارِ",
                                "arti" => "Ruang tunggu",
                                "huruf" => array_unique(["صَ","ا","لَ","ةُ","_","ا","لْ","إِ","نْ","تِ","ظَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "سَائِحٌ",
                                "arti" => "Wisatawan / turis",
                                "huruf" => array_unique(["سَ","ا","ئِ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُسَافِرٌ",
                                "arti" => "Penumpang",
                                "huruf" => array_unique(["مُ","سَ","ا","فِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "أُجْرَةُ السَّفَرِ",
                                "arti" => "Ongkos",
                                "huruf" => array_unique(["أُ","جْ","رَ","ةُ","_","ا","ل","سَّ","فَ","رِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 176')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 176");
                        $data['materi'] = "Mufrodat 176";
                        $data['tema'] = "Tema 17";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُرَبَّعٌ",
                                "arti" => "Segi empat",
                                "huruf" => array_unique(["مُ","رَ","بَّ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَطِيْلٌ",
                                "arti" => "Persegi panjang",
                                "huruf" => array_unique(["مُ","سْ","تَ","طِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُكَعَّبٌ",
                                "arti" => "Kubus",
                                "huruf" => array_unique(["مُ","كَ","عَّ","بٌ"])
                            ],
                            [
                                "kata_arab" => "أُسْطُوَانِيٌّ",
                                "arti" => "Silinder",
                                "huruf" => array_unique(["أُ","سْ","طُ","وَ","ا","نِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُثَلَّثٌ",
                                "arti" => "Segi tiga",
                                "huruf" => array_unique(["مُ","ثَ","لَّ","ثٌ"])
                            ],
                            [
                                "kata_arab" => "مَخْرُوْطٌ",
                                "arti" => "Kerucut",
                                "huruf" => array_unique(["مَ","خْ","رُ","وْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَوَازِيْ الْمُسْتَطِيْلَاتِ",
                                "arti" => "Balok",
                                "huruf" => array_unique(["مُ","تَ","وَ","ا","زِ","يْ","_","ا","لْ","مُ","سْ","تَ","طِ","يْ","لَ","ا","تِ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 177')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 177");
                        $data['materi'] = "Mufrodat 177";
                        $data['tema'] = "Tema 17";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَرَمٌ",
                                "arti" => "Limas",
                                "huruf" => array_unique(["هَ","رَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَقِيْمٌ",
                                "arti" => "Lurus",
                                "huruf" => array_unique(["مُ","سْ","تَ","قِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُنْحَنٍ",
                                "arti" => "Bengkok",
                                "huruf" => array_unique(["مُ","نْ","حَ","نٍ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَدِيْرٌ",
                                "arti" => "Lingkaran (bulat)",
                                "huruf" => array_unique(["مُ","سْ","تَ","دِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَيْضَوِيٌّ",
                                "arti" => "Oval",
                                "huruf" => array_unique(["بَ","يْ","ضَ","وِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "كُرَوِيٌّ",
                                "arti" => "Bola",
                                "huruf" => array_unique(["كُ","رَ","وِ","يٌّ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat ')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat ");
                        $data['materi'] = "Mufrodat ";
                        $data['tema'] = "Tema 17";
                        $data['mufrodat'] = [
                        ];
                    }
                // 151-200

                // view
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    $this->load->view("templates/header-user", $data);
                    if($urut == 1){
                        if($_GET['latihan'] == MD5('Murojaah')){
                            $this->load->view("latihan/murojaahmufrodat-1", $data);
                        } else {
                            $this->load->view("latihan/mufrodat-1", $data);
                        }
                    } else if($urut == 2){
                        if($_GET['latihan'] == MD5('Murojaah')){
                            $this->load->view("latihan/murojaahmufrodat-2", $data);
                        } else {
                            $this->load->view("latihan/mufrodat-2", $data);
                        }
                    } else if($urut == 3){
                        if($_GET['latihan'] == MD5('Murojaah')){
                            $this->load->view("latihan/murojaahmufrodat-3", $data);
                        } else {
                            $this->load->view("latihan/mufrodat-3", $data);
                        }
                    }
                    $this->load->view("templates/footer-user", $data);
                // view
            }
        } else {
            $data['title'] = "Mufrodat";
            $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

            // Tema
                $data['tema'][0]['mufrodat'] = 100;
                $data['tema'][1] = $this->tema($id, "Tema 1","اَلْغُرْفَةُ وَ السَّكَنُ", "Kamar dan Asrama", 104, 14);
                $data['tema'][2] = $this->tema($id, "Tema 2","اَلْفَصْلُ وَ الْمَدْرَسَةُ", "Sekolah dan Kelas", 105, 14);
                $data['tema'][3] = $this->tema($id, "Tema 3","مَسْجِدٌ", "Masjid", 94, 12);
                $data['tema'][4] = $this->tema($id, "Tema 4","اَلْمَطْعَمُ وَ الْمَطْبَخُ", "Tempat Makan dan Dapur", 82, 12);
                $data['tema'][5] = $this->tema($id, "Tema 5","اَلْحَمَّامُ", "Kamar Mandi", 37, 6);
                $data['tema'][6] = $this->tema($id, "Tema 6","الصِّفَاتُ", "Kata Sifat", 128, 16);;
                $data['tema'][7] = $this->tema($id, "Tema 7","اَلْأَمْكِنَةُ", "Tempat-tempat", 63, 8);
                $data['tema'][8] = $this->tema($id, "Tema 8","اَلْعَالَمُ", "Alam Semesta", 135, 21);
                $data['tema'][9] = $this->tema($id, "Tema 9","اَلْمِهَنُ", "Profesi", 147, 27);
                $data['tema'][10] = $this->tema($id, "Tema 10","اَلْحَيَوَانَاتُ", "Hewan-hewan", 91, 12);
                $data['tema'][11] = $this->tema($id, "Tema 11","الْفَاكِهَةُ وَ الْخَضْرَوَاتُ وَ النَّبَاتَاتُ", "Buah, Sayuran dan Tumbuhan", 49, 6);
                $data['tema'][12] = $this->tema($id, "Tema 12","أَعْضَاءُ الْجِسْمِ", "Anggota Tubuh", 86, 11);
                $data['tema'][13] = $this->tema($id, "Tema 13","اَلْأَدَوَاتُ وَ الْأَثَاثُ", "Peralatan dan Perkakas", 80, 10);
                $data['tema'][14] = $this->tema($id, "Tema 14","اللَّوْنُ", "Warna", 16, 2);
                $data['tema'][15] = $this->tema($id, "Tema 15","الطَّعْمُ", "Rasa", 9, 1);
                $data['tema'][16] = $this->tema($id, "Tema 16","وَسَائِلُ الْمُوَاصَلَاتِ", "Sarana Transportasi", 21, 3);
                $data['tema'][17] = $this->tema($id, "Tema 17","الشَّكْلُ", "Bentuk", 13, 2);
            // Tema

            $this->load->view("templates/header-user", $data);
            $this->load->view("pelajaran/index-tema", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }

    public function listmurojaah(){
        $id = $this->session->userdata('id');
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['mufrodat'] = $this->Admin_model->get_all("murojaah", ["id_user" => $id]);
        $data['title'] = "Murojaah Mufrodat";
        // view
            $this->load->view("templates/header-user", $data);
            $this->load->view("pelajaran/menu-murojaah", $data);
            $this->load->view("templates/footer-user", $data);
        // view
    }

    // add
        public function murojaah(){
            $id = $this->session->userdata('id');
            $data = [
                "id_user" => $id,
                "kata_arab" => $this->input->post("kata_arab", TRUE),
                "arti" => $this->input->post("arti", TRUE),
                "huruf" => $this->input->post("huruf", TRUE)
            ];

            
            if($this->input->post("add")){
                $result = $this->Admin_model->add_data("murojaah", $data);
                if($result){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle text-success mr-1"></i> Berhasil menambahkan kata ke list murojaah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }
            } else if($this->input->post("remove")){
                $result = $this->Admin_model->delete_data("murojaah", ["kata_arab" => $data['kata_arab'], "arti" => $data['arti']]);
                if($result){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle text-success mr-1"></i> Berhasil mengeluarkan kata dari list murojaah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }
            }
            redirect($_SERVER['HTTP_REFERER']);
        }

        public function add_mufrodat(){
            $id = $this->session->userdata('id');
            $redirect = $this->input->post("redirect", TRUE);
            $latihan = $this->input->post("latihan", TRUE);
            $materi = $this->input->post("materi", TRUE);
            $tema = $this->input->post("tema", TRUE);

            if($redirect == "Murojaah"){
                redirect(base_url("murojaah/listmurojaah"));
            } else {
                $cek = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "latihan" => $latihan, "materi" => $materi]);
    
                $data = [
                    "latihan" => $latihan,
                    "id_user" => $id,
                    "materi" => $materi,
                    "tema" => $tema
                ];
                
                if(!$cek)
                    $this->Admin_model->add_data("mufrodat", $data);
    
                redirect($redirect);
            }
        }

        public function tema($id, $tema, $title, $title_arti, $total, $tot_latihan){
            $latihan = $this->Admin_model->get_all("mufrodat", ["id_user" => $id, "tema" => $tema], "waktu", "DESC");
            if($latihan){
                $datas['mufrodat'] = COUNT($latihan) / ($tot_latihan * 3) * 100;
                $datas['tgl'] = $latihan[0]['waktu'];
            } else {
                $datas['mufrodat'] = 0;
                $datas['tgl'] = "";
            }
            
            $datas['title'] = $title;
            $datas['title_arti'] = $title_arti;
            $datas['count'] = $total;
            return $datas;
        }

        public function latihan($id, $latihan, $title, $title_arti, $count){
            $data['dasar_1'] = 0;
            $latihan1 = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 1"]);
            $latihan2 = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 2"]);
            $latihan3 = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 3"]);
            if($latihan1)
                $data['dasar_1'] ++;
            if($latihan2)
                $data['dasar_1'] ++;
            if($latihan3)
                $data['dasar_1'] ++;
            
            // tgl
                $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                rsort($tgl);
                $data['tgl'][1] = $tgl[0];
            // tgl

            $datas['mufrodat'] = $data['dasar_1'] / 3* 100;
            $datas['tgl'] = $tgl[0];
            $datas['title'] = $title;
            $datas['title_arti'] = $title_arti;
            $datas['latihan'] = $latihan;
            $datas['count'] = $count;
            
            return $datas;
        }

        public function latihan_mufrodat($id, $materi) {
            $data[0] = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $materi, "latihan" => "Latihan 1"]);
            $data[1] = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $materi, "latihan" => "Latihan 2"]);
            $data[2] = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $materi, "latihan" => "Latihan 3"]);

            return $data;
        }
    // add
}