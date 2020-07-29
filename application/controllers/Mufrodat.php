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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                    $data['title'] = "Tema 3";
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
                } else if($_GET['id'] == MD5('Mufrodat ')){
                    $data['materi'] = "Mufrodat ";
                    $data['tema'] = "Masjid";
                    $data['title'] = "Tema 3";
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
                if($_GET['latihan'] == MD5('Mufrodat 1')){
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
                } else if($_GET['latihan'] == MD5('Mufrodat ')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat ");
                    $data['materi'] = "Mufrodat ";
                    $data['tema'] = "Tema 3";
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
                        $this->load->view("latihan/mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/mufrodat-3", $data);
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
            // Tema

            $this->load->view("templates/header-user", $data);
            $this->load->view("pelajaran/index-tema", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }

    // add
        public function add_mufrodat(){
            $id = $this->session->userdata('id');
            $redirect = $this->input->post("redirect", TRUE);
            $latihan = $this->input->post("latihan", TRUE);
            $materi = $this->input->post("materi", TRUE);
            $tema = $this->input->post("tema", TRUE);

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