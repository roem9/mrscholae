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
                    $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 82","Bagian 8", "Tempat-tempat", 6);
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
                }

                $this->load->view("templates/header-user", $data);
                $this->load->view("pelajaran/index-mufrodat", $data);
                $this->load->view("templates/footer-user", $data);

            } else if(!empty($_GET['id'])){
                if($_GET['id'] == MD5('Mufrodat 1')){
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
                    $data['materi'] = "Mufrodat 22";
                    $data['tema'] = "Sekolah dan Kelas";
                    $data['title'] = "Kata Kerja 4";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 22");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "حَرَصَ-يَحْرِصُ",
                            "arti" => "Semangat",
                            "huruf" => array_unique([حَرَصَ-يَحْرِصُ])
                        ],
                        [
                            "kata_arab" => "رَكَّزَ-يُرَكِّزُ",
                            "arti" => "Fokus",
                            "huruf" => array_unique([رَكَّزَ-يُرَكِّزُ])
                        ],
                        [
                            "kata_arab" => "سَجَّلَ-يُسَجِّلُ",
                            "arti" => "Mendaftar/merekam",
                            "huruf" => array_unique([سَجَّلَ-يُسَجِّلُ])
                        ],
                        [
                            "kata_arab" => "مَزَّقَ-يُمَزِّقُ",
                            "arti" => "Merobek",
                            "huruf" => array_unique([مَزَّقَ-يُمَزِّقُ])
                        ],
                        [
                            "kata_arab" => "رَنَّ-يَرِنُّ",
                            "arti" => "Berdering",
                            "huruf" => array_unique([رَنَّ-يَرِنُّ])
                        ],
                        [
                            "kata_arab" => "نَبَّهَ-يُنَبِّهُ",
                            "arti" => "Menegur",
                            "huruf" => array_unique([نَبَّهَ-يُنَبِّهُ])
                        ],
                        [
                            "kata_arab" => "ذَكَرَ-يَذْكُرُ",
                            "arti" => "Menyebutkan",
                            "huruf" => array_unique([ذَكَرَ-يَذْكُرُ])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 23')){
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
                } else if($_GET['id'] == MD5('Mufrodat 51')){
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
                            "arti" => "Puskesmas",
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
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 83')){
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
                } else if($_GET['id'] == MD5('Mufrodat 101')){
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
                } else if($_GET['id'] == MD5('Mufrodat ')){
                    $data['materi'] = "Mufrodat ";
                    $data['tema'] = "Profesi";
                    $data['title'] = "Kata Kerja ";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat ");
                    $data['mufrodat'] = [
                    ];
                }
                
                // view
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/menu-mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                // view

            } else if (!empty($_GET['latihan'])) {
                $urut = $_GET['i'];
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
                } else if($_GET['latihan'] == MD5('Mufrodat 51')){
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
                            "arti" => "Puskesmas",
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
                } else if($_GET['latihan'] == MD5('Mufrodat 101')){
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
                } else if($_GET['latihan'] == MD5('Mufrodat ')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat ");
                    $data['materi'] = "Mufrodat ";
                    $data['tema'] = "Tema 8";
                    $data['mufrodat'] = [
                    ];
                }

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
                $data['tema'][7] = $this->tema($id, "Tema 7","اَلْأَمْكِنَةُ", "Tempat-tempat", 62, 8);
                $data['tema'][8] = $this->tema($id, "Tema 8","اَلْعَالَمُ", "Alam Semesta", 72, 12);
                $data['tema'][9] = $this->tema($id, "Tema 9","اَلْمِهَنُ", "Profesi", 84, 18);
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
}