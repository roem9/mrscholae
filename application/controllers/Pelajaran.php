<?php 
class Pelajaran extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        $this->load->model("Admin_model");
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
        }
    }

    public function index(){
        $id = $this->session->userdata('id');

        if($_GET){
            if(!empty($_GET['id'])){
                if($_GET['id'] == MD5('Mufrodat 1')){
                    $data['title'] = "Mufrodat 1";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 1", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 1", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 1", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "كِتَـابٌ",
                            "arti" => "Buku"
                        ],
                        [
                            "kata_arab" => "مَجَلَّةٌ",
                            "arti" => "Majalah"
                        ],
                        [
                            "kata_arab" => "قَلَمٌ",
                            "arti" => "Pulpen"
                        ],
                        [
                            "kata_arab" => "مِمْسَحَةٌ",
                            "arti" => "Penghapus"
                        ],
                        [
                            "kata_arab" => "قِرْطَاسٌ",
                            "arti" => "Kertas"
                        ],
                        [
                            "kata_arab" => "حَقِيْبَةٌ",
                            "arti" => "Tas"
                        ],
                        [
                            "kata_arab" => "مَكْتَبٌ",
                            "arti" => "Meja"
                        ],
                        [
                            "kata_arab" => "سَبُّوْرَةٌ",
                            "arti" => "Papan tulis"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 1";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 2')){
                    $data['title'] = "Mufrodat 2";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 2", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 2", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 2", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "بَابٌ",
                            "arti" => "Pintu"
                        ],
                        [
                            "kata_arab" => "نَافِذَةٌ",
                            "arti" => "Jendela"
                        ],
                        [
                            "kata_arab" => "مِصْبَاحٌ",
                            "arti" => "Lampu"
                        ],
                        [
                            "kata_arab" => "مِفْتَاحٌ",
                            "arti" => "Kunci"
                        ],
                        [
                            "kata_arab" => "خِزَانَةٌ",
                            "arti" => "Lemari"
                        ],
                        [
                            "kata_arab" => "فِرَاشٌ",
                            "arti" => "Kasur"
                        ],
                        [
                            "kata_arab" => "مِكْنَسَةٌ",
                            "arti" => "Sapu"
                        ],
                        [
                            "kata_arab" => "رَفٌّ",
                            "arti" => "Rak"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 2";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 3')){
                    $data['title'] = "Mufrodat 3";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 3", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 3", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 3", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "نَعْلٌ",
                            "arti" => "Sendal"
                        ],
                        [
                            "kata_arab" => "تَقْوِيْمٌ",
                            "arti" => "Kalender"
                        ],
                        [
                            "kata_arab" => "سُلَّمٌ",
                            "arti" => "Tangga"
                        ],
                        [
                            "kata_arab" => "مِقَصٌّ",
                            "arti" => "Gunting"
                        ],
                        [
                            "kata_arab" => "مِسْطَرَةٌ",
                            "arti" => "Penggaris"
                        ],
                        [
                            "kata_arab" => "مِلْعَقَةٌ",
                            "arti" => "Sendok"
                        ],
                        [
                            "kata_arab" => "شَوْكَةٌ",
                            "arti" => "Garpu"
                        ],
                        [
                            "kata_arab" => "ثَلَّاجَةٌ",
                            "arti" => "Kulkas"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 3";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 4')){
                    $data['title'] = "Mufrodat 4";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 4", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 4", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 4", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَاءٌ",
                            "arti" => "Air"
                        ],
                        [
                            "kata_arab" => "قَهْوَةٌ",
                            "arti" => "Kopi"
                        ],
                        [
                            "kata_arab" => "حَلِيْبٌ",
                            "arti" => "Susu"
                        ],
                        [
                            "kata_arab" => "سَاعَةٌ",
                            "arti" => "Jam"
                        ],
                        [
                            "kata_arab" => "سَكَنٌ",
                            "arti" => "Asrama"
                        ],
                        [
                            "kata_arab" => "غُرْفَةٌ",
                            "arti" => "Kamar"
                        ],
                        [
                            "kata_arab" => "مَعْهَدٌ",
                            "arti" => "Pesantren"
                        ],
                        [
                            "kata_arab" => "لِبَاسٌ",
                            "arti" => "Pakaian"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 4";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Muannats Mudzakkar')){
                    $data['title'] = "مُذَكَّرٌ وَ مُؤَنَّثٌ";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar", "latihan" => "Latihan 3"]);
                    $data['latihan'][3] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar", "latihan" => "Latihan 4"]);

                    $data['materi'] = "Muannats Mudzakkar";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/muannats_mudzakkar", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Hadza Hadzihi')){
                    $data['title'] = "هٰذَا / هٰذِهِ";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Hadza Hadzihi", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Hadza Hadzihi", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Hadza Hadzihi", "latihan" => "Latihan 3"]);
                    $data['latihan'][3] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Hadza Hadzihi", "latihan" => "Latihan 4"]);

                    $data['materi'] = "Hadza Hadzihi";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/hadza_hadzihi", $data);
                    $this->load->view("templates/footer-user", $data);

                } else if($_GET['id'] == MD5('Dzalika Tilka')){
                    $data['title'] = "ذٰلِكَ / تِلْكَ";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Dzalika Tilka", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Dzalika Tilka", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Dzalika Tilka", "latihan" => "Latihan 3"]);
                    $data['latihan'][3] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Dzalika Tilka", "latihan" => "Latihan 4"]);

                    $data['materi'] = "Dzalika Tilka";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/dzalika_tilka", $data);
                    $this->load->view("templates/footer-user", $data);

                } else if($_GET['id'] == MD5('Mufrodat 6')){
                    $data['title'] = "Mufrodat 6";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 6", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 6", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = "";

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَنْ",
                            "arti" => "Siapa"
                        ],
                        [
                            "kata_arab" => "مَا",
                            "arti" => "Apa"
                        ],
                        [
                            "kata_arab" => "أَ / هَلْ",
                            "arti" => "Apakah"
                        ],
                        [
                            "kata_arab" => "مَنْ هٰذَا ؟",
                            "arti" => "Siapa ini?"
                        ],
                        [
                            "kata_arab" => "مَا هٰذَا ؟",
                            "arti" => "Apa ini?"
                        ],
                        [
                            "kata_arab" => "هَلْ هٰذَا / أَ هٰذَا ؟",
                            "arti" => "Apakah ini (mudzakkar)?"
                        ],
                        [
                            "kata_arab" => "هَلْ هٰذِهِ / أَ هٰذِهِ ؟",
                            "arti" => "Apakah ini (muannats)?"
                        ],
                        [
                            "kata_arab" => "مَا ذٰلِكَ ؟",
                            "arti" => "Apa itu?"
                        ],
                        [
                            "kata_arab" => "هَلْ ذٰلِكَ / أَ ذٰلِكَ ؟",
                            "arti" => "Apakah itu (mudzakkar)?"
                        ],
                        [
                            "kata_arab" => "هَلْ تِلْكَ / أَ تِلْكَ ؟",
                            "arti" => "Apakah itu (muannats)?"
                        ],
                        [
                            "kata_arab" => "نَعَمْ",
                            "arti" => "Ya"
                        ],
                        [
                            "kata_arab" => "لَا",
                            "arti" => "Tidak / bukan"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 6";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 5')){
                    $data['title'] = "Mufrodat 5";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 5", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 5", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 5", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "تَاجِرٌ",
                            "arti" => "Pedagang"
                        ],
                        [
                            "kata_arab" => "مُدَرِّسٌ",
                            "arti" => "Guru"
                        ],
                        [
                            "kata_arab" => "مُوَظَّفٌ",
                            "arti" => "Pegawai"
                        ],
                        [
                            "kata_arab" => "طَبِيْبٌ",
                            "arti" => "Dokter"
                        ],
                        [
                            "kata_arab" => "طَبَّاخٌ",
                            "arti" => "Koki"
                        ],
                        [
                            "kata_arab" => "مُحَاسِبٌ",
                            "arti" => "Akuntan"
                        ],
                        [
                            "kata_arab" => "طَالِبٌ",
                            "arti" => "Pelajar"
                        ],
                        [
                            "kata_arab" => "فَلَّاحٌ",
                            "arti" => "Petani"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 5";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Kalimat 1')){
                    $data['title'] = "Kalimat 1";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 3"]);
                    $data['latihan'][3] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 4"]);
                    $data['latihan'][4] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 5"]);

                    $data['materi'] = "Kalimat 1";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/kalimat-1", $data);
                    $this->load->view("templates/footer-user", $data);

                } else if($_GET['id'] == MD5('Alif Lam')){
                    $data['title'] = "Alif Lam (ال)";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Alif Lam", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Alif Lam", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Alif Lam", "latihan" => "Latihan 3"]);
                    $data['latihan'][3] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Alif Lam", "latihan" => "Latihan 4"]);

                    $data['materi'] = "Alif Lam";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/aliflam", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 7')){
                    $data['title'] = "Mufrodat 7";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 7", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 7", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 7", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "بَارِدٌ",
                            "arti" => "Dingin"
                        ],
                        [
                            "kata_arab" => "حَارٌّ",
                            "arti" => "Panas"
                        ],
                        [
                            "kata_arab" => "قَرِيْبٌ",
                            "arti" => "Dekat"
                        ],
                        [
                            "kata_arab" => "بَعِيْدٌ",
                            "arti" => "Jauh"
                        ],
                        [
                            "kata_arab" => "جَدِيْدٌ",
                            "arti" => "Baru"
                        ],
                        [
                            "kata_arab" => "قَدِيْمٌ",
                            "arti" => "Lama"
                        ],
                        [
                            "kata_arab" => "قَصِيْرٌ",
                            "arti" => "Pendek"
                        ],
                        [
                            "kata_arab" => "طَوِيْلٌ",
                            "arti" => "Tinggi"
                        ],
                    ];

                    $data['materi'] = "Mufrodat 7";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 8')){
                    $data['title'] = "Mufrodat 8";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 8", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 8", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 8", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَاهِرٌ",
                            "arti" => "Pintar"
                        ],
                        [
                            "kata_arab" => "جَاهِلٌ",
                            "arti" => "Bodoh"
                        ],
                        [
                            "kata_arab" => "سَمِيْنٌ",
                            "arti" => "Gemuk"
                        ],
                        [
                            "kata_arab" => "نَحِيْفٌ",
                            "arti" => "Kurus"
                        ],
                        [
                            "kata_arab" => "ثَخِيْنٌ",
                            "arti" => "Tebal"
                        ],
                        [
                            "kata_arab" => "رَقِيْقٌ",
                            "arti" => "Tipis"
                        ],
                        [
                            "kata_arab" => "كَثِيْرٌ",
                            "arti" => "Banyak"
                        ],
                        [
                            "kata_arab" => "قَلِيْلٌ",
                            "arti" => "Sedikit"
                        ],
                    ];

                    $data['materi'] = "Mufrodat 8";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 9')){
                    $data['title'] = "Mufrodat 9";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 9", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 9", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 9", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "كَبِيْرٌ",
                            "arti" => "Besar"
                        ],
                        [
                            "kata_arab" => "صَغِيْرٌ",
                            "arti" => "Kecil"
                        ],
                        [
                            "kata_arab" => "جَمِيْلٌ",
                            "arti" => "Bagus / Tampan / Cantik / Indah"
                        ],
                        [
                            "kata_arab" => "قَبِيْحٌ",
                            "arti" => "Jelek"
                        ],
                        [
                            "kata_arab" => "وَاسِعٌ",
                            "arti" => "Luas"
                        ],
                        [
                            "kata_arab" => "ضَيِّقٌ",
                            "arti" => "Sempit"
                        ],
                        [
                            "kata_arab" => "نَظِيْفٌ",
                            "arti" => "Bersih"
                        ],
                        [
                            "kata_arab" => "وَسِخٌ",
                            "arti" => "Kotor"
                        ],
                    ];
                    

                    $data['materi'] = "Mufrodat 9";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Muannats Mudzakkar 2')){
                    $data['title'] = "مُذَكَّرٌ وَ مُؤَنَّثٌ جُزْءٌ ٢";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar 2", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar 2", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar 2", "latihan" => "Latihan 3"]);
                    $data['latihan'][3] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar 2", "latihan" => "Latihan 4"]);

                    $data['materi'] = "Muannats Mudzakkar 2";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/muannats_mudzakkar_2", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Kalimat 2')){
                    $data['title'] = "Kalimat 2";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 2", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 2", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 2", "latihan" => "Latihan 3"]);
                    $data['latihan'][3] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 2", "latihan" => "Latihan 4"]);

                    $data['materi'] = "Kalimat 2";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/kalimat-2", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 10')){
                    $data['title'] = "Mufrodat 10";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 10", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 10", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 10", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "أَنَا",
                            "arti" => "Saya"
                        ],
                        [
                            "kata_arab" => "أَنْتَ",
                            "arti" => "Kamu (Lk)"
                        ],
                        [
                            "kata_arab" => "أَنْتِ",
                            "arti" => "Kamu (Pr)"
                        ],
                        [
                            "kata_arab" => "هُوَ",
                            "arti" => "Dia (Lk)"
                        ],
                        [
                            "kata_arab" => "هِيَ",
                            "arti" => "Dia (Pr)"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 10";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 11')){
                    $data['title'] = "Mufrodat 11";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 11", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 11", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 11", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مُمَثِّلٌ",
                            "arti" => "Artis"
                        ],
                        [
                            "kata_arab" => "سَائِقٌ",
                            "arti" => "Supir"
                        ],
                        [
                            "kata_arab" => "طَيَّارٌ",
                            "arti" => "Pilot"
                        ],
                        [
                            "kata_arab" => "مُمَرِّضٌ",
                            "arti" => "Perawat"
                        ],
                        [
                            "kata_arab" => "خَيَّاطٌ",
                            "arti" => "Tukang jahit"
                        ],
                        [
                            "kata_arab" => "صَحَافِيٌّ",
                            "arti" => "Wartawan"
                        ],
                        [
                            "kata_arab" => "مُهَنْدِسٌ",
                            "arti" => "Insinyur"
                        ],
                        [
                            "kata_arab" => "مُؤَلِّفٌ",
                            "arti" => "Penulis"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 11";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Kalimat 3')){
                    $data['title'] = "Kalimat 3";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 3", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 3", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 3", "latihan" => "Latihan 3"]);
                    $data['latihan'][3] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 3", "latihan" => "Latihan 4"]);

                    $data['materi'] = "Kalimat 3";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/kalimat-3", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 12')){
                    $data['title'] = "Mufrodat 12";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 12", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 12", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 12", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَسْجِدٌ",
                            "arti" => "Masjid"
                        ],
                        [
                            "kata_arab" => "فَصْلٌ",
                            "arti" => "Kelas"
                        ],
                        [
                            "kata_arab" => "مَدْرَسَةٌ",
                            "arti" => "Sekolah"
                        ],
                        [
                            "kata_arab" => "مَلْعَبٌ",
                            "arti" => "Lapangan"
                        ],
                        [
                            "kata_arab" => "مَطْبَخٌ",
                            "arti" => "Dapur"
                        ],
                        [
                            "kata_arab" => "سُوْقٌ",
                            "arti" => "Pasar"
                        ],
                        [
                            "kata_arab" => "مَطْعَمٌ",
                            "arti" => "Restoran"
                        ],
                        [
                            "kata_arab" => "حَمَّامٌ",
                            "arti" => "Kamar mandi"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 12";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['id'] == MD5('Mufrodat 13')){
                    $data['title'] = "Mufrodat 13";

                    $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                    $data['latihan'][0] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 13", "latihan" => "Latihan 1"]);
                    $data['latihan'][1] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 13", "latihan" => "Latihan 2"]);
                    $data['latihan'][2] = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 13", "latihan" => "Latihan 3"]);

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مِنْ",
                            "arti" => "Dari"
                        ],
                        [
                            "kata_arab" => "فِيْ",
                            "arti" => "Di dalam"
                        ],
                        [
                            "kata_arab" => "عَلَى",
                            "arti" => "Di atas"
                        ],
                        [
                            "kata_arab" => "إِلَى",
                            "arti" => "Ke"
                        ],
                        [
                            "kata_arab" => "أَيْنَ",
                            "arti" => "Dimana"
                        ]
                    ];

                    $data['materi'] = "Mufrodat 13";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                }
            } else if (!empty($_GET['latihan'])) {
                if($_GET['latihan'] == MD5('Mufrodat 1')){
                    $urut = $_GET['i'];

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "كِتَابٌ",
                            "arti" => "Buku",
                            "huruf" => array_unique(["كِ","تَ","ا","بٌ"])
                        ],
                        [
                            "kata_arab" => "مَجَلَّةٌ",
                            "arti" => "Majalah",
                            "huruf" => array_unique(["مَ","جَ","لَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "قَلَمٌ",
                            "arti" => "Pulpen",
                            "huruf" => array_unique(["قَ","لَ","مٌ"])
                        ],
                        [
                            "kata_arab" => "مِمْسَحَةٌ",
                            "arti" => "Penghapus",
                            "huruf" => array_unique(["مِ","مْ","سَ","حَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "قِرْطَاسٌ",
                            "arti" => "Kertas",
                            "huruf" => array_unique(["قِ","رْ","طَ","ا","سٌ"])
                        ],
                        [
                            "kata_arab" => "حَقِيْبَةٌ",
                            "arti" => "Tas",
                            "huruf" => array_unique(["حَ","قِ","يْ","بَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مَكْتَبٌ",
                            "arti" => "Meja",
                            "huruf" => array_unique(["مَ","كْ","تَ","بٌ"])
                        ],
                        [
                            "kata_arab" => "سَبُّوْرَةٌ",
                            "arti" => "Papan tulis",
                            "huruf" => array_unique(["سَ","بُّ","وْ","رَ","ةٌ"])
                        ]
                    ];


                    $data['redirect'] = "pelajaran?id=616d14c9d3a08d05c9beca09e4d04212";
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 1";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 1";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 1";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 1";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }
            
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 2')){
                    $urut = $_GET['i'];

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
                            "kata_arab" => "مِصْبَاحٌ",
                            "arti" => "Lampu",
                            "huruf" => array_unique(["مِ","صْ","بَ","ا","حٌ"])
                        ],
                        [
                            "kata_arab" => "مِفْتَاحٌ",
                            "arti" => "Kunci",
                            "huruf" => array_unique(["مِ","فْ","تَ","ا","حٌ"])
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
                            "kata_arab" => "مِكْنَسَةٌ",
                            "arti" => "Sapu",
                            "huruf" => array_unique(["مِ","كْ","نَ","سَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "رَفٌّ",
                            "arti" => "Rak",
                            "huruf" => array_unique(["رَ","فٌّ"])
                        ]
                    ];
                    $data['redirect'] = "pelajaran?id=edafea549deb97026df23d9b5da97263";
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 2";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 2";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 2";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 2";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }
            
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 3')){
                    $urut = $_GET['i'];

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "نَعْلٌ",
                            "arti" => "Sendal",
                            "huruf" => array_unique(["نَ","عْ","لٌ"])
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
                            "kata_arab" => "مِقَصٌّ",
                            "arti" => "Gunting",
                            "huruf" => array_unique(["مِ","قَ","صٌّ"])
                        ],
                        [
                            "kata_arab" => "مِسْطَرَةٌ",
                            "arti" => "Penggaris",
                            "huruf" => array_unique(["مِ","سْ","طَ","رَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مِلْعَقَةٌ",
                            "arti" => "Sendok",
                            "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "شَوْكَةٌ",
                            "arti" => "Garpu",
                            "huruf" => array_unique(["شَ","وْ","كَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "ثَلَّاجَةٌ",
                            "arti" => "Kulkas",
                            "huruf" => array_unique(["ثَ","لَّ","ا","جَ","ةٌ"])
                        ]
                    ];

                    $data['redirect'] = "pelajaran?id=6dd1638720031ae4795bbe61cd0e0ad7";
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 3";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 3";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 3";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 3";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }
            
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 4')){
                    $urut = $_GET['i'];

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَاءٌ",
                            "arti" => "Air",
                            "huruf" => array_unique(["مَ","ا","ءٌ"])
                        ],
                        [
                            "kata_arab" => "قَهْوَةٌ",
                            "arti" => "Kopi",
                            "huruf" => array_unique(["قَ","هْ","وَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "حَلِيْبٌ",
                            "arti" => "Susu",
                            "huruf" => array_unique(["حَ","لِ","يْ","بٌ"])
                        ],
                        [
                            "kata_arab" => "سَاعَةٌ",
                            "arti" => "Jam",
                            "huruf" => array_unique(["سَ","ا","عَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "سَكَنٌ",
                            "arti" => "Asrama",
                            "huruf" => array_unique(["سَ","كَ","نٌ"])
                        ],
                        [
                            "kata_arab" => "غُرْفَةٌ",
                            "arti" => "Kamar",
                            "huruf" => array_unique(["غُ","رْ","فَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مَعْهَدٌ",
                            "arti" => "Pesantren",
                            "huruf" => array_unique(["مَ","عْ","هَ","دٌ"])
                        ],
                        [
                            "kata_arab" => "لِبَاسٌ",
                            "arti" => "Pakaian",
                            "huruf" => array_unique(["لِ","بَ","ا","سٌ"])
                        ]
                    ];

                    $data['redirect'] = "pelajaran?id=8f151e040200ff2aefa3b3277506cd11";
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 4";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 4";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 4";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 4";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }
            
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 6')){
                    $urut = $_GET['i'];

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَنْ",
                            "arti" => "Siapa"
                        ],
                        [
                            "kata_arab" => "مَا",
                            "arti" => "Apa"
                        ],
                        [
                            "kata_arab" => "أَ / هَلْ",
                            "arti" => "Apakah"
                        ],
                        [
                            "kata_arab" => "مَنْ هٰذَا ؟",
                            "arti" => "Siapa ini?"
                        ],
                        [
                            "kata_arab" => "مَا هٰذَا ؟",
                            "arti" => "Apa ini?"
                        ],
                        [
                            "kata_arab" => "هَلْ هٰذَا / أَ هٰذَا ؟",
                            "arti" => "Apakah ini (mudzakkar)?"
                        ],
                        [
                            "kata_arab" => "هَلْ هٰذِهِ / أَ هٰذِهِ ؟",
                            "arti" => "Apakah ini (muannats)?"
                        ],
                        [
                            "kata_arab" => "مَا ذٰلِكَ ؟",
                            "arti" => "Apa itu?"
                        ],
                        [
                            "kata_arab" => "هَلْ ذٰلِكَ / أَ ذٰلِكَ ؟",
                            "arti" => "Apakah itu (mudzakkar)?"
                        ],
                        [
                            "kata_arab" => "هَلْ تِلْكَ / أَ تِلْكَ ؟",
                            "arti" => "Apakah itu (muannats)?"
                        ],
                        [
                            "kata_arab" => "نَعَمْ",
                            "arti" => "Ya"
                        ],
                        [
                            "kata_arab" => "لَا",
                            "arti" => "Tidak / bukan"
                        ]
                    ];
                    
                    $data['redirect'] = "pelajaran?id=".MD5('Mufrodat 6');
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 6";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 6";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 6";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    }
            
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 5')){
                    $urut = $_GET['i'];

                    
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "تَاجِرٌ",
                            "arti" => "Pedagang",
                            "huruf" => array_unique(["تَ","ا","جِ","رٌ"])
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
                            "kata_arab" => "طَبِيْبٌ",
                            "arti" => "Dokter",
                            "huruf" => array_unique(["طَ","بِ","يْ","بٌ"])
                        ],
                        [
                            "kata_arab" => "طَبَّاخٌ",
                            "arti" => "Koki",
                            "huruf" => array_unique(["طَ","بَّ","ا","خٌ"])
                        ],
                        [
                            "kata_arab" => "مُحَاسِبٌ",
                            "arti" => "Akuntan",
                            "huruf" => array_unique(["مُ","حَ","ا","سِ","بٌ"])
                        ],
                        [
                            "kata_arab" => "طَالِبٌ",
                            "arti" => "Pelajar",
                            "huruf" => array_unique(["طَ","ا","لِ","بٌ"])
                        ],
                        [
                            "kata_arab" => "فَلَّاحٌ",
                            "arti" => "Petani",
                            "huruf" => array_unique(["فَ","لَّ","ا","حٌ"])
                        ]
                    ];


                    $data['redirect'] = "pelajaran?id=".MD5('Mufrodat 5');
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 5";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 5";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 5";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 5";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }
            
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Muannats Mudzakkar')){
                    $urut = $_GET['i'];

                    $data['redirect'] = "pelajaran?id=1471b30040ebf309d86a3ac6ed082d33";
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كِتَابٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "مَجَلَّةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "قَلَمٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "مِمْسَحَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "قِرْطَاسٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "حَقِيْبَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "مَكْتَبٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "سَبُّوْرَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ]
                        ];
                    } elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَابٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "نَافِذَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "مِصْبَاحٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "مِفْتَاحٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "خِزَانَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "فِرَاشٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "مِكْنَسَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "رَفٌّ",
                                "jawaban" => "مُذَكَّرٌ"
                            ]
                        ];
                    } elseif($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَعْلٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "تَقْوِيْمٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "سُلَّمٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "مِقَصٌّ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "مِسْطَرَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "شَوْكَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "ثَلَّاجَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ]
                        ];
                    } elseif($urut == 4){
                        $data['title'] = "Latihan 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَاءٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "قَهْوَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "حَلِيْبٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "سَاعَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "سَكَنٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "غُرْفَةٌ",
                                "jawaban" => "مُؤَنَّثٌ"
                            ],
                            [
                                "kata_arab" => "مَعْهَدٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ],
                            [
                                "kata_arab" => "لِبَاسٌ",
                                "jawaban" => "مُذَكَّرٌ"
                            ]
                        ];
                    }
            
                    shuffle($data['mufrodat']);
                    $data['kata'] = ["مُذَكَّرٌ", "مُؤَنَّثٌ"];
                    
                    $data['materi'] = "Muannats Mudzakkar";
                    // var_dump($data);
                    // exit();
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("latihan/latihan-muannats-mudzakkar", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Hadza Hadzihi')){
                    $urut = $_GET['i'];

                    $data['redirect'] = "pelajaran?id=2a8e866f7983fb0625fc9f94673ec35a";
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كِتَابٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "مَجَلَّةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "قَلَمٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "مِمْسَحَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "قِرْطَاسٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "حَقِيْبَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "مَكْتَبٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "سَبُّوْرَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ]
                        ];
                    } elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَابٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "نَافِذَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "مِصْبَاحٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "مِفْتَاحٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "خِزَانَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "فِرَاشٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "مِكْنَسَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "رَفٌّ",
                                "jawaban" => "هٰذَا"
                            ]
                        ];
                    } elseif($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَعْلٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "تَقْوِيْمٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "سُلَّمٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "مِقَصٌّ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "مِسْطَرَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "شَوْكَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "ثَلَّاجَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ]
                        ];
                    } elseif($urut == 4){
                        $data['title'] = "Latihan 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَاءٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "قَهْوَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "حَلِيْبٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "سَاعَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "سَكَنٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "غُرْفَةٌ",
                                "jawaban" => "هٰذِهِ"
                            ],
                            [
                                "kata_arab" => "مَعْهَدٌ",
                                "jawaban" => "هٰذَا"
                            ],
                            [
                                "kata_arab" => "لِبَاسٌ",
                                "jawaban" => "هٰذَا"
                            ]
                        ];
                    }
            
                    shuffle($data['mufrodat']);
                    $data['kata'] = ["هٰذَا", "هٰذِهِ"];
                    
                    $data['materi'] = "Hadza Hadzihi";
                    // var_dump($data);
                    // exit();
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("latihan/latihan-hadza-hadzihi", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Dzalika Tilka')){
                    $urut = $_GET['i'];

                    $data['redirect'] = "pelajaran?id=dc44ce7ad69e1bc13fbfe1ab678deede";
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كِتَابٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "مَجَلَّةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "قَلَمٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "مِمْسَحَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "قِرْطَاسٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "حَقِيْبَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "مَكْتَبٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "سَبُّوْرَةٌ",
                                "jawaban" => "تِلْكَ"
                            ]
                        ];
                    } elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَابٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "نَافِذَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "مِصْبَاحٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "مِفْتَاحٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "خِزَانَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "فِرَاشٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "مِكْنَسَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "رَفٌّ",
                                "jawaban" => "ذٰلِكَ"
                            ]
                        ];
                    } elseif($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَعْلٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "تَقْوِيْمٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "سُلَّمٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "مِقَصٌّ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "مِسْطَرَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "شَوْكَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "ثَلَّاجَةٌ",
                                "jawaban" => "تِلْكَ"
                            ]
                        ];
                    } elseif($urut == 4){
                        $data['title'] = "Latihan 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَاءٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "قَهْوَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "حَلِيْبٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "سَاعَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "سَكَنٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "غُرْفَةٌ",
                                "jawaban" => "تِلْكَ"
                            ],
                            [
                                "kata_arab" => "مَعْهَدٌ",
                                "jawaban" => "ذٰلِكَ"
                            ],
                            [
                                "kata_arab" => "لِبَاسٌ",
                                "jawaban" => "ذٰلِكَ"
                            ]
                        ];
                    }
            
                    shuffle($data['mufrodat']);
                    $data['kata'] = ["ذٰلِكَ", "تِلْكَ"];
                    
                    $data['materi'] = "Dzalika Tilka";
                    // var_dump($data);
                    // exit();
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("latihan/latihan-dzalika-tilka", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Kalimat 1')){
                    $urut = $_GET['i'];

                    $data['redirect'] = "pelajaran?id=9783cd2613369cd93eea1d11ca9a66e8";
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['kata'] = ["هٰذَا", "كِتَـابٌ", "هٰذِهِ", "مِمْسَحَةٌ", "مَكْتَبٌ", "مَجَلَّةٌ", "قِرْطَاسٌ", "سَبُّوْرَةٌ", "قَلَمٌ", "حَقِيْبَةٌ"];
                        $data['mufrodat'] = [
                            [
                                "kalimat" => "Buku",
                                "kalimat_arab" => "هٰذَا كِتَـابٌ"
                            ],
                            [
                                "kalimat" => "Pulpen",
                                "kalimat_arab" => "هٰذَا قَلَمٌ"
                            ],
                            [
                                "kalimat" => "Kertas",
                                "kalimat_arab" => "هٰذَا قِرْطَاسٌ"
                            ],
                            [
                                "kalimat" => "Meja",
                                "kalimat_arab" => "هٰذَا مَكْتَبٌ"
                            ],
                            [
                                "kalimat" => "Majalah",
                                "kalimat_arab" => "هٰذِهِ مَجَلَّةٌ"
                            ],
                            [
                                "kalimat" => "Penghapus",
                                "kalimat_arab" => "هٰذِهِ مِمْسَحَةٌ"
                            ],
                            [
                                "kalimat" => "Papan Tulis",
                                "kalimat_arab" => "هٰذِهِ سَبُّوْرَةٌ"
                            ],
                            [
                                "kalimat" => "Tas",
                                "kalimat_arab" => "هٰذِهِ حَقِيْبَةٌ"
                            ]
                        ];
                        $data['pesan'] = "Jawablah pertanyaan berikut ini, lalu pilih tombol <strong>simpan</strong> untuk menyimpan jawaban";
                    } else if($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['kata'] = ["ذٰلِكَ", "بَابٌ", "تِلْكَ", "مِصْبَاحٌ", "نَافِذَةٌ", "مِكْنَسَةٌ", "خِزَانَةٌ", "رَفٌّ", "مِصْبَاحٌ", "فِرَاشٌ"];
                        $data['mufrodat'] = [
                            [
                                "kalimat" => "Pintu",
                                "kalimat_arab" => "ذٰلِكَ بَابٌ"
                            ],
                            [
                                "kalimat" => "Kunci",
                                "kalimat_arab" => "ذٰلِكَ مِفْتَاحٌ"
                            ],
                            [
                                "kalimat" => "Rak",
                                "kalimat_arab" => "ذٰلِكَ رَفٌّ"
                            ],
                            [
                                "kalimat" => "Lampu",
                                "kalimat_arab" => "ذٰلِكَ مِصْبَاحٌ"
                            ],
                            [
                                "kalimat" => "Kasur",
                                "kalimat_arab" => "ذٰلِكَ فِرَاشٌ"
                            ],
                            [
                                "kalimat" => "Sapu",
                                "kalimat_arab" => "تِلْكَ مِكْنَسَةٌ"
                            ],
                            [
                                "kalimat" => "Jendela",
                                "kalimat_arab" => "تِلْكَ نَافِذَةٌ"
                            ],
                            [
                                "kalimat" => "Lemari",
                                "kalimat_arab" => "تِلْكَ خِزَانَةٌ"
                            ]
                        ];
                        $data['pesan'] = "Jawablah pertanyaan berikut ini, lalu pilih tombol <strong>simpan</strong> untuk menyimpan jawaban";
                    } else if($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['kata'] = ["نَعْلٌ", "مِقَصٌّ", "شَوْكَةٌ", "تَقْوِيْمٌ", "مِسْطَرَةٌ", "ثَلَّاجَةٌ", "سُلَّمٌ", "مِلْعَقَةٌ", "هٰذَا", "هٰذِهِ", "نَعَمْ", "لَا"];
                        $data['mufrodat'] = [
                            [
                                "kalimat" => "<u>(Tangga)</u> أَ هٰذَا <u>سُلَّمٌ</u> ؟",
                                "kalimat_arab" => "نَعَمْ هٰذَا سُلَّمٌ"
                            ],
                            [
                                "kalimat" => "<u>(Kalender)</u> أَ هٰذَا <u>تَقْوِيْمٌ</u> ؟",
                                "kalimat_arab" => "نَعَمْ هٰذَا تَقْوِيْمٌ"
                            ],
                            [
                                "kalimat" => "<u>(Sendal)</u> أَ هٰذِهِ <u>شَوْكَةٌ</u> ؟",
                                "kalimat_arab" => "لَا هٰذَا نَعْلٌ"
                            ],
                            [
                                "kalimat" => "<u>(Gunting)</u> أَ هٰذِهِ <u>مِلْعَقَةٌ</u> ؟",
                                "kalimat_arab" => "لَا هٰذَا مِقَصٌّ"
                            ],

                            [
                                "kalimat" => "<u>(Garpu)</u> أَ هٰذِهِ <u>شَوْكَةٌ</u> ؟",
                                "kalimat_arab" => "نَعَمْ هٰذِهِ شَوْكَةٌ"
                            ],
                            [
                                "kalimat" => "<u>(Penggaris)</u> أَ هٰذِهِ <u>مِسْطَرَةٌ</u> ؟",
                                "kalimat_arab" => "نَعَمْ هٰذِهِ مِسْطَرَةٌ"
                            ],
                            [
                                "kalimat" => "<u>(Kulkas)</u> أَ هٰذَا <u>سُلَّمٌ</u> ؟",
                                "kalimat_arab" => "لَا هٰذِهِ ثَلَّاجَةٌ"
                            ],
                            [
                                "kalimat" => "<u>(Sendok)</u> أَ هٰذَا <u>مِقَصٌّ</u> ؟",
                                "kalimat_arab" => "لَا هٰذِهِ مِلْعَقَةٌ"
                            ],
                        ];
                        $data['pesan'] = "Jawablah pertanyaan berikut ini sesuai contoh dibawah ini. Dan perhatikan penggunaan kata <strong>هٰذَا</strong> dan <strong>هٰذِهِ</strong>, lalu pilih tombol <strong>simpan</strong> untuk menyimpan jawaban";
                    } else if($urut == 4){
                        $data['title'] = "Latihan 4";
                        $data['kata'] = ["مَاءٌ", "سَاعَةٌ", "مَعْهَدٌ", "قَهْوَةٌ", "سَكَنٌ", "لِبَاسٌ", "حَلِيْبٌ", "غُرْفَةٌ", "تِلْكَ", "ذٰلِكَ", "نَعَمْ", "لَا"];
                        $data['mufrodat'] = [
                            [
                                "kalimat" => "<u>(Air)</u> أَ ذٰلِكَ <u>مَاءٌ</u> ؟",
                                "kalimat_arab" => "نَعَمْ ذٰلِكَ مَاءٌ"
                            ],
                            [
                                "kalimat" => "<u>(Pesantren)</u> أَ ذٰلِكَ <u>مَعْهَدٌ</u> ؟",
                                "kalimat_arab" => "نَعَمْ ذٰلِكَ مَعْهَدٌ"
                            ],
                            [
                                "kalimat" => "<u>(Asrama)</u> أَ تِلْكَ <u>غُرْفَةٌ</u> ؟",
                                "kalimat_arab" => "لَا ذٰلِكَ سَكَنٌ"
                            ],
                            [
                                "kalimat" => "<u>(Pakaian)</u> أَ تِلْكَ <u>سَاعَةٌ</u> ؟",
                                "kalimat_arab" => "لَا ذٰلِكَ لِبَاسٌ"
                            ],
                            [
                                "kalimat" => "<u>(Susu)</u> أَ ذٰلِكَ <u>مَاءٌ</u> ؟",
                                "kalimat_arab" => "لَا ذٰلِكَ حَلِيْبٌ"
                            ],
                            [
                                "kalimat" => "<u>(Jam)</u> أَ تِلْكَ <u>سَاعَةٌ</u> ؟",
                                "kalimat_arab" => "نَعَمْ تِلْكَ سَاعَةٌ"
                            ],
                            [
                                "kalimat" => "<u>(Kopi)</u> أَ ذٰلِكَ <u>حَلِيْبٌ</u> ؟",
                                "kalimat_arab" => "لَا تِلْكَ قَهْوَةٌ"
                            ],
                            [
                                "kalimat" => "<u>(Kamar)</u> أَ ذٰلِكَ <u>مَعْهَدٌ</u> ؟",
                                "kalimat_arab" => "لَا تِلْكَ غُرْفَةٌ"
                            ],
                        ];
                        $data['pesan'] = "Jawablah pertanyaan berikut ini sesuai contoh dibawah ini. Dan perhatikan penggunaan kata <strong>ذٰلِكَ</strong> dan <strong>تِلْكَ</strong>, lalu pilih tombol <strong>simpan</strong> untuk menyimpan jawaban";
                    } else if($urut == 5){
                        $data['title'] = "Latihan 5";
                        $data['kata'] = ["هٰذَا", "تَاجِرٌ", "هٰذِهِ", "طَبِيْبٌ", "طَالِبٌ", "فَلَّاحٌ", "مُدَرِّسٌ", "طَبَّاخٌ", "مُوَظَّفٌ", "مُحَاسِبٌ"];
                        $data['mufrodat'] = [
                            [
                                "kalimat" => "Pedagang",
                                "kalimat_arab" => "هٰذَا تَاجِرٌ"
                            ],
                            [
                                "kalimat" => "Dokter",
                                "kalimat_arab" => "هٰذَا طَبِيْبٌ"
                            ],
                            [
                                "kalimat" => "Pelajar",
                                "kalimat_arab" => "هٰذَا طَالِبٌ"
                            ],
                            [
                                "kalimat" => "Guru",
                                "kalimat_arab" => "هٰذَا مُدَرِّسٌ"
                            ],
                            [
                                "kalimat" => "Koki",
                                "kalimat_arab" => "هٰذَا طَبَّاخٌ"
                            ],
                            [
                                "kalimat" => "Petani",
                                "kalimat_arab" => "هٰذَا فَلَّاحٌ"
                            ],
                            [
                                "kalimat" => "Pegawai",
                                "kalimat_arab" => "هٰذَا مُوَظَّفٌ"
                            ],
                            [
                                "kalimat" => "Akuntan",
                                "kalimat_arab" => "هٰذَا مُحَاسِبٌ"
                            ]
                        ];
                        $data['pesan'] = "Jawablah pertanyaan berikut ini, lalu pilih tombol <strong>simpan</strong> untuk menyimpan jawaban";
                    } 
            
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Kalimat 1";
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("latihan/latihan-kalimat", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Alif Lam')){
                    $urut = $_GET['i'];

                    $data['redirect'] = "pelajaran?id=c6d6287975bd8ad6537551bcd29e6446";
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['mufrodat'] = [
                            [
                                "kalimat" => "كِتَـابٌ",
                                "kalimat_arab" => "اَلْكِتَابُ",
                                "kata" => ["اَلْكِتَابُ", "اَلكِّتَابُ"]
                            ],
                            [
                                "kalimat" => "مِمْسَحَةٌ",
                                "kalimat_arab" => "اَلْمِمْسَحَةُ",
                                "kata" => ["اَلْمِمْسَحَةُ", "اَلمِّمْسَحَةُ"]
                            ],
                            [
                                "kalimat" => "مَكْتَبٌ",
                                "kalimat_arab" => "اَلْمَكْتَبُ",
                                "kata" => ["اَلْمَكْتَبُ", "اَلمَّكْتَبُ"]
                            ],
                            [
                                "kalimat" => "مَجَلَّةٌ",
                                "kalimat_arab" => "اَلْمَجَلَّةُ",
                                "kata" => ["اَلْمَجَلَّةُ", "اَلمَّجَلَّةُ"]
                            ],
                            [
                                "kalimat" => "قِرْطَاسٌ",
                                "kalimat_arab" => "اَلْقِرْطَاسُ",
                                "kata" => ["اَلْقِرْطَاسُ", "اَلقِّرْطَاسُ"]
                            ],
                            [
                                "kalimat" => "سَبُّوْرَةٌ",
                                "kalimat_arab" => "اَلسَّبُّوْرَةُ",
                                "kata" => ["اَلْسَبُّوْرَةُ", "اَلسَّبُّوْرَةُ"]
                            ],
                            [
                                "kalimat" => "قَلَمٌ",
                                "kalimat_arab" => "اَلْقَلَمُ",
                                "kata" => ["اَلْقَلَمُ", "اَلقَّلَمُ"]
                            ],
                            [
                                "kalimat" => "حَقِيْبَةٌ",
                                "kalimat_arab" => "اَلْحَقِيْبَةُ",
                                "kata" => ["اَلْحَقِيْبَةُ", "اَلحَّقِيْبَةُ"]
                            ]
                        ];
                    } else if($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['mufrodat'] = [
                            [
                                "kalimat" => "بَابٌ",
                                "kalimat_arab" => "اَلْبَابُ",
                                "kata" => ["اَلْبَابُ", "اَلبَّابُ"]
                            ],
                            [
                                "kalimat" => "مِفْتَاحٌ",
                                "kalimat_arab" => "اَلْمِفْتَاحُ",
                                "kata" => ["اَلْمِفْتَاحُ", "اَلمِّفْتَاحُ"]
                            ],
                            [
                                "kalimat" => "مِكْنَسَةٌ",
                                "kalimat_arab" => "اَلْمِكْنَسَةُ",
                                "kata" => ["اَلْمِكْنَسَةُ", "اَلمِّكْنَسَةُ"]
                            ],
                            [
                                "kalimat" => "نَافِذَةٌ",
                                "kalimat_arab" => "اَلنَّافِذَةُ",
                                "kata" => ["اَلْنَافِذَةُ", "اَلنَّافِذَةُ"]
                            ],
                            [
                                "kalimat" => "خِزَانَةٌ",
                                "kalimat_arab" => "اَلْخِزَانَةُ",
                                "kata" => ["اَلْخِزَانَةُ", "اَلخِّزَانَةُ"]
                            ],
                            [
                                "kalimat" => "رَفٌّ",
                                "kalimat_arab" => "اَلرَّفُّ",
                                "kata" => ["اَلْرَفُّ", "اَلرَّفُّ"]
                            ],
                            [
                                "kalimat" => "فِرَاشٌ",
                                "kalimat_arab" => "اَلْفِرَاشُ",
                                "kata" => ["اَلْفِرَاشُ", "اَلفِّرَاشُ"]
                            ],
                            [
                                "kalimat" => "مِصْبَاحٌ",
                                "kalimat_arab" => "اَلْمِصْبَاحُ",
                                "kata" => ["اَلْمِصْبَاحُ", "اَلمِّصْبَاحُ"]
                            ]
                        ];
                    } else if($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['mufrodat'] = [
                            [
                                "kalimat" => "نَعْلٌ",
                                "kalimat_arab" => "اَلنَّعْلُ",
                                "kata" => ["اَلْنَعْلُ", "اَلنَّعْلُ"]
                            ],
                            [
                                "kalimat" => "تَقْوِيْمٌ",
                                "kalimat_arab" => "اَلتَّقْوِيْمُ",
                                "kata" => ["اَلْتَقْوِيْمُ", "اَلتَّقْوِيْمُ"]
                            ],
                            [
                                "kalimat" => "سُلَّمٌ",
                                "kalimat_arab" => "اَلسُّلَمُ",
                                "kata" => ["اَلْسُلَّمُ", "اَلسُّلَمُ"]
                            ],
                            [
                                "kalimat" => "مِقَصٌّ",
                                "kalimat_arab" => "اَلْمِقَصُّ",
                                "kata" => ["اَلْمِقَصُّ", "اَلمِّقَصُّ"]
                            ],
                            [
                                "kalimat" => "مِسْطَرَةٌ",
                                "kalimat_arab" => "اَلْمِسْطَرَةُ",
                                "kata" => ["اَلْمِسْطَرَةُ", "اَلمِّسْطَرَةُ"]
                            ],
                            [
                                "kalimat" => "شَوْكَةٌ",
                                "kalimat_arab" => "اَلشَّوْكَةُ",
                                "kata" => ["اَلْشَوْكَةُ", "اَلشَّوْكَةُ"]
                            ],
                            [
                                "kalimat" => "مِلْعَقَةٌ",
                                "kalimat_arab" => "اَلْمِلْعَقَةُ",
                                "kata" => ["اَلْمِلْعَقَةُ", "اَلمِّلْعَقَةُ"]
                            ],
                            [
                                "kalimat" => "ثَلَّاجَةٌ",
                                "kalimat_arab" => "اَلثَّلَّاجَةُ",
                                "kata" => ["اَلْثَلَّاجَةُ", "اَلثَّلَّاجَةُ"]
                            ]
                        ];
                    } else if($urut == 4){
                        $data['title'] = "Latihan 4";
                        $data['mufrodat'] = [
                            [
                                "kalimat" => "مَاءٌ",
                                "kalimat_arab" => "اَلْمَاءُ",
                                "kata" => ["اَلْمَاءُ", "اَلمَّاءُ"]
                            ],
                            [
                                "kalimat" => "حَلِيْبٌ",
                                "kalimat_arab" => "اَلْحَلِيْبُ",
                                "kata" => ["اَلْحَلِيْبُ", "اَلحَّلِيْبُ"]
                            ],
                            [
                                "kalimat" => "غُرْفَةٌ",
                                "kalimat_arab" => "اَلْغُرْفَةُ",
                                "kata" => ["اَلْغُرْفَةُ", "اَلغُّرْفَةُ"]
                            ],
                            [
                                "kalimat" => "قَهْوَةٌ",
                                "kalimat_arab" => "اَلْقَهْوَةُ",
                                "kata" => ["اَلْقَهْوَةُ", "اَلقَّهْوَةُ"]
                            ],
                            [
                                "kalimat" => "سَكَنٌ",
                                "kalimat_arab" => "اَلسَّكَنُ",
                                "kata" => ["اَلْسَكَنُ", "اَلسَّكَنُ"]
                            ],
                            [
                                "kalimat" => "لِبَاسٌ",
                                "kalimat_arab" => "اَللِّبَاسُ",
                                "kata" => ["اَلْلِبَاسُ", "اَللِّبَاسُ"]
                            ],
                            [
                                "kalimat" => "سَاعَةٌ",
                                "kalimat_arab" => "اَلسَّاعَةُ",
                                "kata" => ["اَلْسَاعَةُ", "اَلسَّاعَةُ"]
                            ],
                            [
                                "kalimat" => "مَعْهَدٌ",
                                "kalimat_arab" => "اَلْمَعْهَدُ",
                                "kata" => ["اَلْمَعْهَدُ", "اَلمَّعْهَدُ"]
                            ]
                        ];
                    }

                    shuffle($data['mufrodat']);

                    $data['materi'] = "Alif Lam";
                    // var_dump($data);
                    // exit();
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("latihan/latihan-aliflam", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 7')){
                    $urut = $_GET['i'];

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "بَارِدٌ",
                            "arti" => "Dingin",
                            "huruf" => array_unique(["بَ","ا","رِ","دٌ"])
                        ],
                        [
                            "kata_arab" => "حَارٌّ",
                            "arti" => "Panas",
                            "huruf" => array_unique(["حَ","ا","رٌّ"])
                        ],
                        [
                            "kata_arab" => "قَرِيْبٌ",
                            "arti" => "Dekat",
                            "huruf" => array_unique(["قَ","رِ","يْ","بٌ"])
                        ],
                        [
                            "kata_arab" => "بَعِيْدٌ",
                            "arti" => "Jauh",
                            "huruf" => array_unique(["بَ","عِ","يْ","دٌ"])
                        ],
                        [
                            "kata_arab" => "جَدِيْدٌ",
                            "arti" => "Baru",
                            "huruf" => array_unique(["جَ","دِ","يْ","دٌ"])
                        ],
                        [
                            "kata_arab" => "قَدِيْمٌ",
                            "arti" => "Lama",
                            "huruf" => array_unique(["قَ","دِ","يْ","مٌ"])
                        ],
                        [
                            "kata_arab" => "قَصِيْرٌ",
                            "arti" => "Pendek",
                            "huruf" => array_unique(["قَ","صِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "طَوِيْلٌ",
                            "arti" => "Tinggi",
                            "huruf" => array_unique(["طَ","وِ","يْ","لٌ"])
                        ],
                    ];

                    $data['redirect'] = "pelajaran?id=859ce9e467ba631ccaa8c7c7ce8b2913";
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 7";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 7";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 7";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 7";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }

                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 8')){
                    $urut = $_GET['i'];

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَاهِرٌ",
                            "arti" => "Pintar",
                            "huruf" => array_unique(["مَ","ا","هِ","رٌ"])
                        ],
                        [
                            "kata_arab" => "جَاهِلٌ",
                            "arti" => "Bodoh",
                            "huruf" => array_unique(["جَ","ا","هِ","لٌ"])
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
                            "kata_arab" => "ثَخِيْنٌ",
                            "arti" => "Tebal",
                            "huruf" => array_unique(["ثَ","خِ","يْ","نٌ"])
                        ],
                        [
                            "kata_arab" => "رَقِيْقٌ",
                            "arti" => "Tipis",
                            "huruf" => array_unique(["رَ","قِ","يْ","قٌ"])
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
                    ];

                    $data['redirect'] = "pelajaran?id=e88c18472163b88292f3196c96505b15";
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 8";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 8";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 8";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 8";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }

                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 9')){
                    $urut = $_GET['i'];

                    $data['mufrodat'] = [
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
                            "kata_arab" => "جَمِيْلٌ",
                            "arti" => "Bagus",
                            "huruf" => array_unique(["جَ","مِ","يْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "قَبِيْحٌ",
                            "arti" => "Jelek",
                            "huruf" => array_unique(["قَ","بِ","يْ","حٌ"])
                        ],
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
                            "kata_arab" => "نَظِيْفٌ",
                            "arti" => "Bersih",
                            "huruf" => array_unique(["نَ","ظِ","يْ","فٌ"])
                        ],
                        [
                            "kata_arab" => "وَسِخٌ",
                            "arti" => "Kotor",
                            "huruf" => array_unique(["وَ","سِ","خٌ"])
                        ]
                    ];

                    $data['redirect'] = "pelajaran?id=60b2351aaab19c36a3ad0fba5c0f4b45";
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 9";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 9";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 9";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 9";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }

                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Muannats Mudzakkar 2')){
                    $urut = $_GET['i'];

                    $data['redirect'] = "pelajaran?id=1b019e612c5c4ed8772deae8f4bee2a3";
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Besar",
                                "jawaban" => "كَبِيْرَةٌ",
                                "huruf" => array_unique(["كَ","بِ","يْ","رٌ","كَ","بِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "soal" => "Kecil",
                                "jawaban" => "صَغِيْرَةٌ",
                                "huruf" => array_unique(["صَ","غِ","يْ","رٌ","صَ","غِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "soal" => "Bagus",
                                "jawaban" => "جَمِيْلَةٌ",
                                "huruf" => array_unique(["جَ","مِ","يْ","لٌ","جَ","مِ","يْ","لَ","ةٌ"])
                            ],
                            [
                                "soal" => "Jelek",
                                "jawaban" => "قَبِيْحَةٌ",
                                "huruf" => array_unique(["قَ","بِ","يْ","حٌ","قَ","بِ","يْ","حَ","ةٌ"])
                            ],
                            [
                                "soal" => "Luas",
                                "jawaban" => "وَاسِعَةٌ",
                                "huruf" => array_unique(["وَ","ا","سِ","عٌ","وَ","ا","سِ","عَ","ةٌ"])
                            ],
                            [
                                "soal" => "Sempit",
                                "jawaban" => "ضَيِّقَةٌ",
                                "huruf" => array_unique(["ضَ","يِّ","قٌ","ضَ","يِّ","قَ","ةٌ"])
                            ],
                            [
                                "soal" => "Bersih",
                                "jawaban" => "نَظِيْفَةٌ",
                                "huruf" => array_unique(["نَ","ظِ","يْ","فٌ","نَ","ظِ","يْ","فَ","ةٌ"])
                            ],
                            [
                                "soal" => "Kotor",
                                "jawaban" => "وَسِخَةٌ",
                                "huruf" => array_unique(["وَ","سِ","خٌ","وَ","سِ","خَ","ةٌ"])
                            ],
                        ];
                    } elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Pintar",
                                "jawaban" => "مَاهِرَةٌ",
                                "huruf" => array_unique(["مَ","ا","هِ","رٌ","مَ","ا","هِ","رَ","ةٌ"])
                            ],
                            [
                                "soal" => "Kurus",
                                "jawaban" => "نَحِيْفَةٌ",
                                "huruf" => array_unique(["نَ","حِ","يْ","فٌ","نَ","حِ","يْ","فَ","ةٌ"])
                            ],
                            [
                                "soal" => "Banyak",
                                "jawaban" => "كَثِيْرَةٌ",
                                "huruf" => array_unique(["كَ","ثِ","يْ","رٌ","كَ","ثِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "soal" => "Bodoh",
                                "jawaban" => "جَاهِلَةٌ",
                                "huruf" => array_unique(["جَ","ا","هِ","لٌ","جَ","ا","هِ","لَ","ةٌ"])
                            ],
                            [
                                "soal" => "Tebal",
                                "jawaban" => "ثَخِيْنَةٌ",
                                "huruf" => array_unique(["ثَ","خِ","يْ","نٌ","ثَ","خِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "soal" => "Sedikit",
                                "jawaban" => "قَلِيْلَةٌ",
                                "huruf" => array_unique(["قَ","لِ","يْ","لٌ","قَ","لِ","يْ","لَ","ةٌ"])
                            ],
                            [
                                "soal" => "Gemuk",
                                "jawaban" => "سَمِيْنَةٌ",
                                "huruf" => array_unique(["سَ","مِ","يْ","نٌ","سَ","مِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "soal" => "Tipis",
                                "jawaban" => "رَقِيْقَةٌ",
                                "huruf" => array_unique(["رَ","قِ","يْ","قٌ","رَ","قِ","يْ","قَ","ةٌ"])
                            ]
                        ];
                    } elseif($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Dingin",
                                "jawaban" => "بَارِدَةٌ",
                                "huruf" => array_unique(["بَ","ا","رِ","دٌ","بَ","ا","رِ","دَ","ةٌ"])
                            ],
                            [
                                "soal" => "Jauh",
                                "jawaban" => "بَعِيْدَةٌ",
                                "huruf" => array_unique(["بَ","عِ","يْ","دٌ","بَ","عِ","يْ","دَ","ةٌ"])
                            ],
                            [
                                "soal" => "Pendek",
                                "jawaban" => "قَصِيْرَةٌ",
                                "huruf" => array_unique(["قَ","صِ","يْ","رٌ","قَ","صِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "soal" => "Panas",
                                "jawaban" => "حَارَّةٌ",
                                "huruf" => array_unique(["حَ","ا","رٌّ","حَ","ا","رَّ","ةٌ"])
                            ],
                            [
                                "soal" => "Baru",
                                "jawaban" => "جَدِيْدَةٌ",
                                "huruf" => array_unique(["جَ","دِ","يْ","دٌ","جَ","دِ","يْ","دَ","ةٌ"])
                            ],
                            [
                                "soal" => "Tinggi",
                                "jawaban" => "طَوِيْلٌ",
                                "huruf" => array_unique(["طَ","وِ","يْ","لٌ","طَ","وِ","يْ","لَ","ةٌ"])
                            ],
                            [
                                "soal" => "Dekat",
                                "jawaban" => "قَرِيْبَةٌ",
                                "huruf" => array_unique(["قَ","رِ","يْ","بٌ","قَ","رِ","يْ","بَ","ةٌ"])
                            ],
                            [
                                "soal" => "Dekat",
                                "jawaban" => "قَدِيْمَةٌ",
                                "huruf" => array_unique(["قَ","دِ","يْ","مٌ","قَ","دِ","يْ","مَ","ةٌ"])
                                 
                            ],
                        ];
                    } elseif($urut == 4){
                        $data['title'] = "Latihan 4";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Pedagang",
                                "jawaban" => "تَاجِرَةٌ",
                                "huruf" => array_unique(["تَ","ا","جِ","رٌ","تَ","ا","جِ","رَ","ةٌ"])
                            ],
                            [
                                "soal" => "Dokter",
                                "jawaban" => "طَبِيْبَةٌ",
                                "huruf" => array_unique(["طَ","بِ","يْ","بٌ","طَ","بِ","يْ","بَ","ةٌ"])
                            ],
                            [
                                "soal" => "Pelajar",
                                "jawaban" => "طَالِبَةٌ",
                                "huruf" => array_unique(["طَ","ا","لِ","بٌ","طَ","ا","لِ","بَ","ةٌ"])
                            ],
                            [
                                "soal" => "Guru",
                                "jawaban" => "مُدَرِّسَةٌ",
                                "huruf" => array_unique(["مُ","دَ","رِّ","سٌ","مُ","دَ","رِّ","سَ","ةٌ"])
                            ],
                            [
                                "soal" => "Koki",
                                "jawaban" => "طَبَّاخَةٌ",
                                "huruf" => array_unique(["طَ","بَّ","ا","خٌ","طَ","بَّ","ا","خَ","ةٌ"])
                            ],
                            [
                                "soal" => "Petani",
                                "jawaban" => "فَلَّاحَةٌ",
                                "huruf" => array_unique(["فَ","لَّ","ا","حٌ","فَ","لَّ","ا","حَ","ةٌ"])
                            ],
                            [
                                "soal" => "Pegawai",
                                "jawaban" => "مُوَظَّفَةٌ",
                                "huruf" => array_unique(["مُ","وَ","ظَّ","فٌ","مُ","وَ","ظَّ","فَ","ةٌ"])
                            ],
                            [
                                "soal" => "Akuntan",
                                "jawaban" => "مُحَاسِبَةٌ",
                                "huruf" => array_unique(["مُ","حَ","ا","سِ","بٌ","مُ","حَ","ا","سِ","بَ","ةٌ"])
                            ]
                        ];
                    }
            
                    shuffle($data['mufrodat']);
                    // $data['kata'] = ["مُذَكَّرٌ", "مُؤَنَّثٌ"];
                    
                    $data['materi'] = "Muannats Mudzakkar 2";
                    // var_dump($data);
                    // exit();
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("latihan/latihan-muannats-mudzakkar-2", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Kalimat 2')){
                    $urut = $_GET['i'];

                    $data['redirect'] = "pelajaran?id=5383444e748fe7a2dd8a20c2814fa2e3";
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Papan tulis itu besar",
                                "jawaban" => "اَلسَّبُّوْرَةُ كَبِيْرَةٌ",
                                "huruf" => array_unique(["اَ","ل","سَّ","بُّ","وْ","رَ","ةُ","-","كَ","بِ","يْ","رَ","ةٌ","رٌ"])
                            ],
                            [
                                "soal" => "Kertas itu kotor",
                                "jawaban" => "اَلْقِرْطَاسُ وَسِخٌ",
                                "huruf" => array_unique(["اَ","لْ","قِ","رْ","طَ","ا","سُ","وَ","سِ","خٌ","خَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Tas itu bagus",
                                "jawaban" => "اَلْحَقِيْبَةُ جَمِيْلَةٌ",
                                "huruf" => array_unique(["اَ","لْ","حَ","قِ","يْ","بَ","ةُ","جَ","مِ",'يْ',"لَ","ةٌ","لٌ","-"])
                            ],
                            [
                                "soal" => "Meja itu bersih",
                                "jawaban" => "اَلْمَكْتَبُ نَظِيْفٌ",
                                "huruf" => array_unique(["اَ","لْ","مَ","كْ","تَ","بُ","نَ","ظِ","يْ","فٌ","فَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Pulpen itu kecil",
                                "jawaban" => "اَلْقَلَمُ صَغِيْرٌ",
                                "huruf" => array_unique(["اَ","لْ","قَ","لَ","مُ","صَ","غِ","يْ","رٌ","رَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Penghapus itu kotor",
                                "jawaban" => "اَلْمِمْسَحَةُ وَسِخَةٌ",
                                "huruf" => array_unique(["اَ","لْ","مِ","مْ","سَ","حَ","ةُ","وَ","سِ","خَ","ةٌ","خٌ","-"])
                            ],
                            [
                                "soal" => "Majalah itu jelek",
                                "jawaban" => "اَلْمَجَلَّةُ قَبِيْحَةٌ",
                                "huruf" => array_unique(["اَ","لْ","مَ","جَ","لَّ","ةُ","قَ","بِ","يْ","حَ","ةٌ","حٌ","-"])
                            ],
                            [
                                "soal" => "Buku itu baru",
                                "jawaban" => "اَلْكِتَابُ جَدِيْدٌ",
                                "huruf" => array_unique(["اَ","لْ","كِ","تَ","ا","بُ","جَ","دِ","يْ","دٌ","دَ","ةٌ","-"])
                            ]
                        ];
                    } elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Pintu itu tinggi",
                                "jawaban" => "اَلْبَابُ طَوِيْلٌ",
                                "huruf" => array_unique(["اَ","لْ","بَ","ا","بُ","طَ","وِ","يْ","لٌ","لَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Sapu itu pendek",
                                "jawaban" => "اَلْمِكْنَسَةُ قَصِيْرَةٌ",
                                "huruf" => array_unique(["اَ","لْ","مِ","كْ","نَ","سَ","ةُ","قَ","صِ","يْ","رَ","ةٌ","رٌ","-"])
                            ],
                            [
                                "soal" => "Jendela itu bersih",
                                "jawaban" => "اَلنَّافِذَةُ نَظِيْفَةٌ",
                                "huruf" => array_unique(["اَ","ل","نَّ","ا","فِ","ذَ","ةُ","نَ","ظِ","يْ","فَ","ةٌ","فٌ","-"])
                            ],
                            [
                                "soal" => "Lemari itu besar",
                                "jawaban" => "اَلْخِزَانَةُ كَبِيْرَةٌ",
                                "huruf" => array_unique(["اَ","لْ","خِ","زَ","ا","نَ","ةُ","كَ","بِ","يْ","رَ","ةٌ","رٌ","-"])
                            ],
                            [
                                "soal" => "Kunci itu lama",
                                "jawaban" => "اَلْمِفْتَاحُ قَدِيْمٌ",
                                "huruf" => array_unique(["اَ","لْ","مِ","فْ","تَ","ا","حُ","قَ","دِ","يْ","مٌ","مَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Rak itu baru",
                                "jawaban" => "اَلرَّفُّ جَدِيْدٌ",
                                "huruf" => array_unique(["اَ","ل","رَّ","فُّ","جَ","دِ","يْ","دٌ","دَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Lampu itu baru",
                                "jawaban" => "اَلْمِصْبَاحُ جَدِيْدٌ",
                                "huruf" => array_unique(["اَ","لْ","مِ","صْ","بَ","ا","حُ","جَ","دِ","يْ","دٌ","دَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Kasur itu jelek",
                                "jawaban" => "اَلْفِرَاشُ قَبِيْحٌ",
                                "huruf" => array_unique(["اَ","لْ","فِ","رَ","ا","شُ","قَ","بِ","يْ","حٌ","حَ","ةٌ","-"])
                            ]
                        ];
                    } elseif($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Air itu dingin",
                                "jawaban" => "اَلْمَاءُ بَارِدٌ",
                                "huruf" => array_unique(["اَ","لْ","مَ","ا","ءُ","بَ","ا","رِ","دٌ","دَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Penggaris itu panjang",
                                "jawaban" => "اَلْمِسْطَرَةُ طَوِيْلَةٌ",
                                "huruf" => array_unique(["اَ","لْ","مِ","سْ","طَ","رَ","ةُ","طَ","وِ","يْ","لَ","ةٌ","لٌ","-"])
                            ],
                            [
                                "soal" => "Pesantren itu luas",
                                "jawaban" => "اَلْمَعْهَدُ وَاسِعٌ",
                                "huruf" => array_unique(["اَ","لْ","مَ","عْ","هَ","دُ","وَ","ا","سِ","عٌ","عَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Kopi itu panas",
                                "jawaban" => "اَلْقَهْوَةُ حَارَّةٌ",
                                "huruf" => array_unique(["اَ","لْ","قَ","هْ","وَ","ةُ","حَ","ا","رَّ","ةٌ","رٌّ","-"])
                            ],
                            [
                                "soal" => "Asrama itu bersih",
                                "jawaban" => "اَلسَّكَنُ نَظِيْفٌ",
                                "huruf" => array_unique(["اَ","ل","سَّ","كَ","نُ","نَ","ظِ","يْ","فٌ","فَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Pakaian itu bagus",
                                "jawaban" => "اَللِّبَاسُ جَمِيْلٌ",
                                "huruf" => array_unique(["اَ","ل","لِّ","بَ","ا","سُ","جَ","مِ","يْ","لٌ","لَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Susu itu dingin",
                                "jawaban" => "اَلْحَلِيْبُ بَارِدٌ",
                                "huruf" => array_unique(["اَ","لْ","حَ","لِ","يْ","بُ","بَ","ا","رِ","دٌ","دَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Kamar itu sempit",
                                "jawaban" => "اَلْغُرْفَةُ ضَيِّقَةٌ",
                                "huruf" => array_unique(["اَ","لْ","غُ","رْ","فَ","ةُ","ضَ","يِّ","قَ","ةٌ","قٌ","-"])
                            ]
                        ];
                    } elseif($urut == 4){
                        $data['title'] = "Latihan 4";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Pedagang (pr) itu jelek",
                                "jawaban" => "اَلتَّاجِرَةُ قَبِيْحَةٌ",
                                "huruf" => array_unique(["اَ","ل","تَّ","ا","جِ","رُ","قَ","بِ","يْ","حٌ","حَ","ةٌ","رَ","ةُ","-"])
                            ],
                            [
                                "soal" => "Pedagang (lk) itu jelek",
                                "jawaban" => "اَلتَّاجِرُ قَبِيْحٌ",
                                "huruf" => array_unique(["اَ","ل","تَّ","ا","جِ","رُ","قَ","بِ","يْ","حٌ","حَ","ةٌ","رَ","ةُ","-"])
                            ],
                            [
                                "soal" => "Dokter (pr) itu pintar",
                                "jawaban" => "اَلطَّبِيْبَةُ مَاهِرَةٌ",
                                "huruf" => array_unique(["اَ","ل","طَّ","بِ","يْ","بُ","مَ","ا","هِ","رٌ","رَ","ةٌ","بَ","ةُ","-"])
                            ],
                            [
                                "soal" => "Dokter (lk) itu pintar",
                                "jawaban" => "اَلطَّبِيْبُ مَاهِرٌ",
                                "huruf" => array_unique(["اَ","ل","طَّ","بِ","يْ","بُ","مَ","ا","هِ","رٌ","رَ","ةٌ","بَ","ةُ","-"])
                            ],
                            [
                                "soal" => "Pelajar (pr) itu baru",
                                "jawaban" => "اَلطَّالِبَةُ جَدِيْدَةٌ",
                                "huruf" => array_unique(["اَ","ل","طَّ","ا","لِ","بُ","جَ","دِ","يْ","دٌ","دَ","ةٌ","بَ","ةُ","-"])
                            ],
                            [
                                "soal" => "Pelajar (lk) itu baru",
                                "jawaban" => "اَلطَّالِبُ جَدِيْدٌ",
                                "huruf" => array_unique(["اَ","ل","طَّ","ا","لِ","بُ","جَ","دِ","يْ","دٌ","دَ","ةٌ","بَ","ةُ","-"])
                            ],
                            [
                                "soal" => "Guru (lk) itu tampan",
                                "jawaban" => "اَلْمُدَرِّسُ جَمِيْلٌ",
                                "huruf" => array_unique(["اَ","لْ","مُ","دَ","رِّ","سُ","جَ","مِ","يْ","لٌ","لَ","ةٌ","سَ","ةُ","-"])
                            ],
                            [
                                "soal" => "Guru (pr) itu cantik",
                                "jawaban" => "اَلْمُدَرِّسَةُ جَمِيْلَةٌ",
                                "huruf" => array_unique(["اَ","لْ","مُ","دَ","رِّ","سُ","جَ","مِ","يْ","لٌ","لَ","ةٌ","سَ","ةُ","-"])
                            ]
                        ];
                    }

                    shuffle($data['mufrodat']);

                    $data['materi'] = "Kalimat 2";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("latihan/latihan-kalimat-2", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 10')){
                    $urut = $_GET['i'];

                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "أَنَا",
                            "arti" => "Saya",
                            "huruf" => array_unique(["أَ","نَ","ا","أَ","نْ","تَ","أَ","نْ","تِ","هُ","وَ","هِ","يَ"])
                        ],
                        [
                            "kata_arab" => "أَنْتَ",
                            "arti" => "Kamu (Lk)",
                            "huruf" => array_unique(["أَ","نَ","ا","أَ","نْ","تَ","أَ","نْ","تِ","هُ","وَ","هِ","يَ"])
                        ],
                        [
                            "kata_arab" => "أَنْتِ",
                            "arti" => "Kamu (Pr)",
                            "huruf" => array_unique(["أَ","نَ","ا","أَ","نْ","تَ","أَ","نْ","تِ","هُ","وَ","هِ","يَ"])
                        ],
                        [
                            "kata_arab" => "هُوَ",
                            "arti" => "Dia (Lk)",
                            "huruf" => array_unique(["أَ","نَ","ا","أَ","نْ","تَ","أَ","نْ","تِ","هُ","وَ","هِ","يَ"])
                        ],
                        [
                            "kata_arab" => "هِيَ",
                            "arti" => "Dia (Pr)",
                            "huruf" => array_unique(["أَ","نَ","ا","أَ","نْ","تَ","أَ","نْ","تِ","هُ","وَ","هِ","يَ"])
                        ]
                    ];

                    $data['redirect'] = "pelajaran?id=252b6f701d63ab2a31bb03aa0c831af9";
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 10";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 10";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 10";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 10";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }

                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 11')){
                    $urut = $_GET['i'];
                    
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مُمَثِّلٌ",
                            "arti" => "Artis",
                            "huruf" => array_unique(["مُ","مَ","ثِّ","لٌ"])
                        ],
                        [
                            "kata_arab" => "سَائِقٌ",
                            "arti" => "Supir",
                            "huruf" => array_unique(["سَ","ا","ئِ","قٌ"])
                        ],
                        [
                            "kata_arab" => "طَيَّارٌ",
                            "arti" => "Pilot",
                            "huruf" => array_unique(["طَ","يَّ","ا","رٌ"])
                        ],
                        [
                            "kata_arab" => "مُمَرِّضٌ",
                            "arti" => "Perawat",
                            "huruf" => array_unique(["مُ","مَ","رِّ","ضٌ"])
                        ],
                        [
                            "kata_arab" => "خَيَّاطٌ",
                            "arti" => "Tukang jahit",
                            "huruf" => array_unique(["خَ","يَّ","ا","طٌ"])
                        ],
                        [
                            "kata_arab" => "صَحَافِيٌّ",
                            "arti" => "Wartawan",
                            "huruf" => array_unique(["صَ","حَ","ا","فِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "مُهَنْدِسٌ",
                            "arti" => "Insinyur",
                            "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ"])
                        ],
                        [
                            "kata_arab" => "مُؤَلِّفٌ",
                            "arti" => "Penulis",
                            "huruf" => array_unique(["مُ","ؤَ","لِّ","فٌ"])
                        ]
                    ];

                    $data['redirect'] = "pelajaran?id=".MD5('Mufrodat 11');
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 11";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 11";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 11";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 11";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }

                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Kalimat 3')){
                    $urut = $_GET['i'];

                    $data['redirect'] = "pelajaran?id=bc1105cc91796ae8bb22af4818403338";
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Saya (lk) adalah pedagang",
                                "jawaban" => "أَنَا تَاجِرٌ",
                                "huruf" => array_unique(["أَ","نَ","ا","تَ","ا","جِ","رٌ","رَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Saya (pr) adalah pedagang",
                                "jawaban" => "أَنَا تَاجِرَةٌ",
                                "huruf" => array_unique(["أَ","نَ","ا","تَ","ا","جِ","رٌ","رَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Kamu (lk) adalah dokter",
                                "jawaban" => "أَنْتَ طَبِيْبٌ",
                                "huruf" => array_unique(["أَ","نْ","تَ","طَ","بِ","يْ","بٌ","بَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Kamu (pr) adalah pelajar",
                                "jawaban" => "أَنْتِ طَالِبَةٌ",
                                "huruf" => array_unique(["أَ","نْ","تِ","طَ","ا","لِ","بَ","ةٌ","بٌ","-"])
                            ],
                            [
                                "soal" => "Dia (lk) adalah guru",
                                "jawaban" => "هُوَ مُدَرِّسٌ",
                                "huruf" => array_unique(["هُ","وَ","مُ","دَ","رِّ","سٌ","سَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Dia (pr) adalah koki",
                                "jawaban" => "هِيَ طَبَّاخَةٌ",
                                "huruf" => array_unique(["هِ","يَ","طَ","بَّ","ا","خَ","ةٌ","خٌ","-"])
                            ],
                            [
                                "soal" => "Dia (lk) adalah petani",
                                "jawaban" => "هُوَ فَلَّاحٌ",
                                "huruf" => array_unique(["هُ","وَ","فَ","لَّ","ا","حٌ","حَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Kamu (pr) adalah pegawai",
                                "jawaban" => "أَنْتِ مُوَظَّفَةٌ",
                                "huruf" => array_unique(["أَ","نْ","تِ","مُ","وَ","ظَّ","فَ","ةٌ","فٌ","-"])
                            ],
                            [
                                "soal" => "Dia (pr) adalah akuntan",
                                "jawaban" => "هِيَ مُحَاسِبَةٌ",
                                "huruf" => array_unique(["هِ","يَ","مُ","حَ","ا","سِ","بَ","ةٌ","بٌ","-"])
                            ]
                        ];
                    } elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['mufrodat'] = [
                            [
                                "soal" => "Saya (lk) adalah artis",
                                "jawaban" => "أَنَا مُمَثِّلٌ",
                                "huruf" => array_unique(["أَ","نَ","ا","مُ","مَ","ثِّ","لٌ","لَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Kamu (lk) adalah perawat",
                                "jawaban" => "أَنْتَ مُمَرِّضٌ",
                                "huruf" => array_unique(["أَ","نْ","تَ","مُ","مَ","رِّ","ضٌ","ضَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Kamu (pr) adalah insinyur",
                                "jawaban" => "أَنْتِ مُهَنْدِسَةٌ",
                                "huruf" => array_unique(["أَ","نْ","تِ","مُ","هَ","نْ","دِ","سَ","ةٌ","سٌ","-"])
                            ],
                            [
                                "soal" => "Dia (lk) adalah supir",
                                "jawaban" => "هُوَ سَائِقٌ",
                                "huruf" => array_unique(["هُ","وَ","سَ","ا","ئِ","قٌ","قَ","ةٌ","-"])
                            ],
                            [
                                "soal" => "Dia (pr) adalah tukang jahit",
                                "jawaban" => "هِيَ خَيَّاطَةٌ",
                                "huruf" => array_unique(["هِ","يَ","خَ","يَّ","ا","طَ","ةٌ","طٌ","-"])
                            ],
                            [
                                "soal" => "Saya (pr) adalah penulis",
                                "jawaban" => "أَنَا مُؤَلِّفَةٌ",
                                "huruf" => array_unique(["أَ","نَ","ا","مُ","ؤَ","لِّ","فَ","ةٌ","فٌ","-"])
                            ],
                            [
                                "soal" => "Kamu (pr) adalah pilot",
                                "jawaban" => "أَنْتِ طَيَّارَةٌ",
                                "huruf" => array_unique(["أَ","نْ","تِ","طَ","يَّ","ا","رَ","ةٌ","رٌ","-"])
                            ],
                            [
                                "soal" => "Dia (pr) adalah wartawan",
                                "jawaban" => "هِيَ صَحَافِيَّةٌ",
                                "huruf" => array_unique(["هِ","يَ","صَ","حَ","ا","فِ","يَّ","ةٌ","يٌّ","-"])
                            ]
                        ];
                    }

                    shuffle($data['mufrodat']);

                    $data['materi'] = "Kalimat 3";

                    $this->load->view("templates/header-user", $data);
                    $this->load->view("latihan/latihan-kalimat-3", $data);
                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 12')){
                    $urut = $_GET['i'];
                    
                    
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَسْجِدٌ",
                            "arti" => "Masjid",
                            "huruf" => array_unique(["مَ","سْ","جِ","دٌ"])
                        ],
                        [
                            "kata_arab" => "فَصْلٌ",
                            "arti" => "Kelas",
                            "huruf" => array_unique(["فَ","صْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "مَدْرَسَةٌ",
                            "arti" => "Sekolah",
                            "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مَلْعَبٌ",
                            "arti" => "Lapangan",
                            "huruf" => array_unique(["مَ","لْ","عَ","بٌ"])
                        ],
                        [
                            "kata_arab" => "مَطْبَخٌ",
                            "arti" => "Dapur",
                            "huruf" => array_unique(["مَ","طْ","بَ","خٌ"])
                        ],
                        [
                            "kata_arab" => "سُوْقٌ",
                            "arti" => "Pasar",
                            "huruf" => array_unique(["سُ","وْ","قٌ"])
                        ],
                        [
                            "kata_arab" => "مَطْعَمٌ",
                            "arti" => "Restoran",
                            "huruf" => array_unique(["مَ","طْ","عَ","مٌ"])
                        ],
                        [
                            "kata_arab" => "حَمَّامٌ",
                            "arti" => "Kamar mandi",
                            "huruf" => array_unique(["حَ","مَّ","ا","مٌ"])
                        ]
                    ];

                    $data['redirect'] = "pelajaran?id=".MD5('Mufrodat 12');
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 12";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 12";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 12";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 12";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }

                    $this->load->view("templates/footer-user", $data);
                } else if($_GET['latihan'] == MD5('Mufrodat 13')){
                    $urut = $_GET['i'];
                    
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مِنْ",
                            "arti" => "Dari",
                            "huruf" => array_unique(["مِ","نْ","فِ","يْ","عَ","لَ","ى","إِ","لَ","ى","أَ","يْ","نَ"])
                        ],
                        [
                            "kata_arab" => "فِيْ",
                            "arti" => "Di dalam",
                            "huruf" => array_unique(["مِ","نْ","فِ","يْ","عَ","لَ","ى","إِ","لَ","ى","أَ","يْ","نَ"])
                        ],
                        [
                            "kata_arab" => "عَلَى",
                            "arti" => "Di atas",
                            "huruf" => array_unique(["مِ","نْ","فِ","يْ","عَ","لَ","ى","إِ","لَ","ى","أَ","يْ","نَ"])
                        ],
                        [
                            "kata_arab" => "إِلَى",
                            "arti" => "Ke",
                            "huruf" => array_unique(["مِ","نْ","فِ","يْ","عَ","لَ","ى","إِ","لَ","ى","أَ","يْ","نَ"])
                        ],
                        [
                            "kata_arab" => "أَيْنَ",
                            "arti" => "Dimana",
                            "huruf" => array_unique(["مِ","نْ","فِ","يْ","عَ","لَ","ى","إِ","لَ","ى","أَ","يْ","نَ"])
                        ]
                    ];

                    $data['redirect'] = "pelajaran?id=".MD5('Mufrodat 13');
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1 Mufrodat 13";
                            $data['kata'][$i] = $kata['kata_arab'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2 Mufrodat 13";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3 Mufrodat 13";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
            
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    
                    $data['materi'] = "Mufrodat 13";
                    $this->load->view("templates/header-user", $data);
            
                    if($urut == 1){
                        $this->load->view("latihan/latihan-mufrodat-1", $data);
                    } else if($urut == 2){
                        $this->load->view("latihan/latihan-mufrodat-2", $data);
                    } else if($urut == 3){
                        $this->load->view("latihan/latihan-mufrodat-3", $data);
                    }

                    $this->load->view("templates/footer-user", $data);
                }
            } 
        } else {
            $data['title'] = "Pelajaran";
            $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
            
            // Mufrodat 1
                $data['dasar_1'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 1", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 1", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 1", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_1'] ++;
                if($latihan2)
                    $data['dasar_1'] ++;
                if($latihan3)
                    $data['dasar_1'] ++;
                $data['dasar_1'] = $data['dasar_1'] / 3* 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][1] = $tgl[0];
                // tgl
            // Mufrodat 1
            
            // Mufrodat 2
                $data['dasar_2'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 2", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 2", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 2", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_2'] ++;
                if($latihan2)
                    $data['dasar_2'] ++;
                if($latihan3)
                    $data['dasar_2'] ++;
                $data['dasar_2'] = $data['dasar_2'] / 3* 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][2] = $tgl[0];
                // tgl
            // Mufrodat 2
            
            // Mufrodat 3
                $data['dasar_3'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 3", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 3", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 3", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_3'] ++;
                if($latihan2)
                    $data['dasar_3'] ++;
                if($latihan3)
                    $data['dasar_3'] ++;
                $data['dasar_3'] = $data['dasar_3'] / 3* 100;
                
                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][3] = $tgl[0];
                // tgl
            // Mufrodat 3
            
            // Mufrodat 4
                $data['dasar_4'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 4", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 4", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 4", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_4'] ++;
                if($latihan2)
                    $data['dasar_4'] ++;
                if($latihan3)
                    $data['dasar_4'] ++;
                $data['dasar_4'] = $data['dasar_4'] / 3* 100;
                
                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][4] = $tgl[0];
                // tgl
            // Mufrodat 4

            // muannats mudzakkar
                $data['mm'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar", "latihan" => "Latihan 1"]);
                if($latihan1)
                    $data['mm'] ++;
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar", "latihan" => "Latihan 2"]);
                if($latihan2)
                    $data['mm'] ++;
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar", "latihan" => "Latihan 3"]);
                if($latihan3)
                    $data['mm'] ++;
                $latihan4 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar", "latihan" => "Latihan 4"]);
                if($latihan4)
                    $data['mm'] ++;
                $data['mm'] = $data['mm'] / 4 * 100;
                
                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu'],$latihan4['waktu']];
                    rsort($tgl);
                    $data['tgl'][5] = $tgl[0];
                // tgl
            // muannats mudzakkar
            
            // hadza hadzihi
                $data['hh'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Hadza Hadzihi", "latihan" => "Latihan 1"]);
                if($latihan1)
                    $data['hh'] ++;
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Hadza Hadzihi", "latihan" => "Latihan 2"]);
                if($latihan2)
                    $data['hh'] ++;
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Hadza Hadzihi", "latihan" => "Latihan 3"]);
                if($latihan3)
                    $data['hh'] ++;
                $latihan4 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Hadza Hadzihi", "latihan" => "Latihan 4"]);
                if($latihan4)
                    $data['hh'] ++;
                $data['hh'] = $data['hh'] / 4 * 100;
                
                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu'],$latihan4['waktu']];
                    rsort($tgl);
                    $data['tgl'][6] = $tgl[0];
                // tgl
            // hadza hadzihi

            // dzalika tilka
                $data['dt'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Dzalika Tilka", "latihan" => "Latihan 1"]);
                if($latihan1)
                    $data['dt'] ++;
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Dzalika Tilka", "latihan" => "Latihan 2"]);
                if($latihan2)
                    $data['dt'] ++;
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Dzalika Tilka", "latihan" => "Latihan 3"]);
                if($latihan3)
                    $data['dt'] ++;
                $latihan4 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Dzalika Tilka", "latihan" => "Latihan 4"]);
                if($latihan4)
                    $data['dt'] ++;
                $data['dt'] = $data['dt'] / 4 * 100;
                
                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu'],$latihan4['waktu']];
                    rsort($tgl);
                    $data['tgl'][7] = $tgl[0];
                // tgl
            // dzalika tilka
            
            // Mufrodat 5
                $data['dasar_5'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 5", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 5", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 5", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_5'] ++;
                if($latihan2)
                    $data['dasar_5'] ++;
                if($latihan3)
                    $data['dasar_5'] ++;
                $data['dasar_5'] = $data['dasar_5'] / 3* 100;
                
                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][8] = $tgl[0];
                // tgl
            // Mufrodat 5

            
            // Mufrodat 6
                $data['dasar_6'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 6", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 6", "latihan" => "Latihan 2"]);
                if($latihan1)
                    $data['dasar_6'] ++;
                if($latihan2)
                    $data['dasar_6'] ++;
                $data['dasar_6'] = $data['dasar_6'] / 2 * 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu']];
                    rsort($tgl);
                    $data['tgl'][9] = $tgl[0];
                // tgl
            // Mufrodat 6

            // kalimat 1
                $data['k1'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 1"]);
                if($latihan1)
                    $data['k1'] ++;
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 2"]);
                if($latihan2)
                    $data['k1'] ++;
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 3"]);
                if($latihan3)
                    $data['k1'] ++;
                $latihan4 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 4"]);
                if($latihan4)
                    $data['k1'] ++;
                $latihan5 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 1", "latihan" => "Latihan 5"]);
                if($latihan5)
                    $data['k1'] ++;
                $data['k1'] = $data['k1'] / 5 * 100;
                
                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu'],$latihan4['waktu'],$latihan5['waktu']];
                    rsort($tgl);
                    $data['tgl'][10] = $tgl[0];
                // tgl
            // kalimat 1
            
            // Alif Lam
                $data['al'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Alif Lam", "latihan" => "Latihan 1"]);
                if($latihan1)
                    $data['al'] ++;
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Alif Lam", "latihan" => "Latihan 2"]);
                if($latihan2)
                    $data['al'] ++;
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Alif Lam", "latihan" => "Latihan 3"]);
                if($latihan3)
                    $data['al'] ++;
                $latihan4 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Alif Lam", "latihan" => "Latihan 4"]);
                if($latihan4)
                    $data['al'] ++;
                $data['al'] = $data['al'] / 4 * 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu'],$latihan4['waktu']];
                    rsort($tgl);
                    $data['tgl'][11] = $tgl[0];
                // tgl
            // Alif Lam
            
            // Mufrodat 7
                $data['dasar_7'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 7", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 7", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 7", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_7'] ++;
                if($latihan2)
                    $data['dasar_7'] ++;
                if($latihan3)
                    $data['dasar_7'] ++;
                $data['dasar_7'] = $data['dasar_7'] / 3* 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][12] = $tgl[0];
                // tgl
            // Mufrodat 7
            
            // Mufrodat 8
                $data['dasar_8'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 8", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 8", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 8", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_8'] ++;
                if($latihan2)
                    $data['dasar_8'] ++;
                if($latihan3)
                    $data['dasar_8'] ++;
                $data['dasar_8'] = $data['dasar_8'] / 3* 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][13] = $tgl[0];
                // tgl
            // Mufrodat 8

            // Mufrodat 9
                $data['dasar_9'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 9", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 9", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 9", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_9'] ++;
                if($latihan2)
                    $data['dasar_9'] ++;
                if($latihan3)
                    $data['dasar_9'] ++;
                $data['dasar_9'] = $data['dasar_9'] / 3* 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][14] = $tgl[0];
                // tgl
            // Mufrodat 9

            // muannats mudzakkar 2
                $data['mm_2'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar 2", "latihan" => "Latihan 1"]);
                if($latihan1)
                    $data['mm_2'] ++;
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar 2", "latihan" => "Latihan 2"]);
                if($latihan2)
                    $data['mm_2'] ++;
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar 2", "latihan" => "Latihan 3"]);
                if($latihan3)
                    $data['mm_2'] ++;
                $latihan4 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Muannats Mudzakkar 2", "latihan" => "Latihan 4"]);
                if($latihan4)
                    $data['mm_2'] ++;
                $data['mm_2'] = $data['mm_2'] / 4 * 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu'],$latihan4['waktu']];
                    rsort($tgl);
                    $data['tgl'][15] = $tgl[0];
                // tgl
            // muannats mudzakkar 2

            // kalimat 2
                $data['k2'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 2", "latihan" => "Latihan 1"]);
                if($latihan1)
                    $data['k2'] ++;
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 2", "latihan" => "Latihan 2"]);
                if($latihan2)
                    $data['k2'] ++;
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 2", "latihan" => "Latihan 3"]);
                if($latihan3)
                    $data['k2'] ++;
                $latihan4 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 2", "latihan" => "Latihan 4"]);
                if($latihan4)
                    $data['k2'] ++;
                $data['k2'] = $data['k2'] / 4 * 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu'],$latihan4['waktu']];
                    rsort($tgl);
                    $data['tgl'][16] = $tgl[0];
                // tgl
            // kalimat 2

            // Mufrodat 10
                $data['dasar_10'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 10", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 10", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 10", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_10'] ++;
                if($latihan2)
                    $data['dasar_10'] ++;
                if($latihan3)
                    $data['dasar_10'] ++;
                $data['dasar_10'] = $data['dasar_10'] / 3* 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][17] = $tgl[0];
                // tgl
            // Mufrodat 10

            // Mufrodat 11
                $data['dasar_11'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 11", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 11", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 11", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_11'] ++;
                if($latihan2)
                    $data['dasar_11'] ++;
                if($latihan3)
                    $data['dasar_11'] ++;
                $data['dasar_11'] = $data['dasar_11'] / 3* 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][18] = $tgl[0];
                // tgl
            // Mufrodat 11

            // kalimat 3
                $data['k3'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 3", "latihan" => "Latihan 1"]);
                if($latihan1)
                    $data['k3'] ++;
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Kalimat 3", "latihan" => "Latihan 2"]);
                if($latihan2)
                    $data['k3'] ++;
                $data['k3'] = $data['k3'] / 2 * 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu']];
                    rsort($tgl);
                    $data['tgl'][19] = $tgl[0];
                // tgl
            // kalimat 3

            // Mufrodat 12
                $data['dasar_12'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 12", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 12", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 12", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_12'] ++;
                if($latihan2)
                    $data['dasar_12'] ++;
                if($latihan3)
                    $data['dasar_12'] ++;
                $data['dasar_12'] = $data['dasar_12'] / 3* 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][20] = $tgl[0];
                // tgl
            // Mufrodat 12
            
            // Mufrodat 13
                $data['dasar_13'] = 0;
                $latihan1 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 13", "latihan" => "Latihan 1"]);
                $latihan2 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 13", "latihan" => "Latihan 2"]);
                $latihan3 = $this->Admin_model->get_one("latihan", ["id_user" => $id, "materi" => "Mufrodat 13", "latihan" => "Latihan 3"]);
                if($latihan1)
                    $data['dasar_13'] ++;
                if($latihan2)
                    $data['dasar_13'] ++;
                if($latihan3)
                    $data['dasar_13'] ++;
                $data['dasar_13'] = $data['dasar_13'] / 3* 100;

                // tgl
                    $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                    rsort($tgl);
                    $data['tgl'][21] = $tgl[0];
                // tgl
            // Mufrodat 13

            $this->load->view("templates/header-user", $data);
            $this->load->view("pelajaran/index", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }
}