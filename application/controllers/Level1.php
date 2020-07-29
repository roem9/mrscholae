<?php 
    class Level1 extends CI_CONTROLLER{
        public function __construct(){
            parent::__construct();
            $this->load->model("Arab_model");
            if($this->session->userdata('status') != "login"){
                $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
                redirect(base_url("login/user"));
            }
        }

        public function index(){
            $id = $this->session->userdata('id');

            $data['title'] = "Level 1";

            // $data['materi'] = $this->Arab_model->get_all_materi_by_id_user($id);
            $materi = $this->Arab_model->get_all_materi_by_level("1");
            foreach ($materi as $i => $materi) {
                $on = $this->Arab_model->get_materi_by_id_user_id_materi($id, $materi['id_materi']);
                $data['materi'][$i] = $materi;
                if($on){
                    $data['materi'][$i]['status'] = 'on';
                } else {
                    $data['materi'][$i]['status'] = 'off';
                }
            }

            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/level1/index", $data);
            $this->load->view("templates/footer-user", $data);
        }

        public function materi($bab){
            $id = $this->session->userdata('id');

            if ($bab == "pertama"){
                $data['title'] = "Dhomir";
                
                // cek materi ada atau tidak
                $cek = $this->Arab_model->get_materi_by_id_user_id_materi($id, '1');
                
                $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_id_materi($id, "1");

                if($cek){
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("materi/level1/materi/materi-1", $data);
                    $this->load->view("templates/footer-user", $data);
                } else {
                    $this->pesan_error($data);
                }

            } else if($bab == "kedua"){

                $data['title'] = "Fi'il Mudhori";
                
                $cek = $this->Arab_model->get_materi_by_id_user_id_materi($id, '2');
                
                $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_id_materi($id, "2");
                
                if($cek){
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("materi/level1/materi/materi-2", $data);
                    $this->load->view("templates/footer-user", $data);
                } else {
                    $this->pesan_error($data);
                }

            } else if($bab == "ketiga") {
                
                $data['title'] = "Contoh Fi'il Mudhori";

                $kata = [
                    ["id" => "1", "kata" => "فَتَحَ - يَفْتَحُ", "latihan" => "Latihan 4"],
                    ["id" => "2", "kata" => "عَلَّقَ - يُعَلِّقُ", "latihan" => "Latihan 5"],
                    ["id" => "3", "kata" => "جَلَسَ - يَجْلِسُ", "latihan" => "Latihan 6"],
                    ["id" => "4", "kata" => "ذَهَبَ - يَذْهَبُ", "latihan" => "Latihan 7"],
                    ["id" => "5", "kata" => "خَرَجَ - يَخْرُجُ", "latihan" => "Latihan 8"],
                    ["id" => "6", "kata" => "كَتَبَ - يَكْتُبُ", "latihan" => "Latihan 9"],
                    ["id" => "7", "kata" => "لَعِبَ - يَلْعَبُ", "latihan" => "Latihan 10"],
                    ["id" => "8", "kata" => "طَبَخَ - يَطْبَخُ", "latihan" => "Latihan 11"],
                    ["id" => "9", "kata" => "نَظَّفَ - يُنَظِّفُ", "latihan" => "Latihan 12"],
                    ["id" => "10", "kata" => "طَرَقَ - يَطْرُقُ", "latihan" => "Latihan 13"],
                    ["id" => "11", "kata" => "كَنَسَ - يَكْنُسُ", "latihan" => "Latihan 14"],
                    ["id" => "12", "kata" => "أَشْعَلَ - يُشْعِلُ", "latihan" => "Latihan 15"],
                    ["id" => "13", "kata" => "رَتَّبَ - يُرَتِّبُ", "latihan" => "Latihan 16"],
                    ["id" => "14", "kata" => "سَقَطَ - يَسْقُطُ", "latihan" => "Latihan 17"],
                    ["id" => "15", "kata" => "جَمَعَ - يَجْمَعُ", "latihan" => "Latihan 18"],
                    ["id" => "16", "kata" => "رَجَعَ - يَرْجِعُ", "latihan" => "Latihan 19"],
                    ["id" => "17", "kata" => "إِدَّخَرَ - يَدَّخِرُ", "latihan" => "Latihan 20"],
                    ["id" => "18", "kata" => "إِحْتَرَمَ - يَحْتَرِمُ", "latihan" => "Latihan 21"],
                    ["id" => "19", "kata" => "طَلَبَ - يَطْلُبُ", "latihan" => "Latihan 22"],
                    ["id" => "20", "kata" => "لَبِسَ - يَلْبَسُ", "latihan" => "Latihan 23"],
                    ["id" => "21", "kata" => "رَكِبَ - يَرْكَبُ", "latihan" => "Latihan 24"],
                    ["id" => "22", "kata" => "قَسَّمَ - يُقَسِّمُ", "latihan" => "Latihan 25"],
                    ["id" => "23", "kata" => "حَرَقَ - يَحْرُقُ", "latihan" => "Latihan 26"],
                    ["id" => "24", "kata" => "سَاعَدَ - يُسَاعِدُ", "latihan" => "Latihan 27"],
                    ["id" => "25", "kata" => "حَمَلَ - يَحْمِلُ", "latihan" => "Latihan 28"],
                    ["id" => "26", "kata" => "تَكَلَّمَ - يَتَكَلَّمُ", "latihan" => "Latihan 29"],
                    ["id" => "27", "kata" => "سَمِعَ - يَسْمَعُ", "latihan" => "Latihan 30"],
                    ["id" => "28", "kata" => "حَفِظَ - يَحْفَظُ", "latihan" => "Latihan 31"],
                    ["id" => "29", "kata" => "اِتَّجَهَ - يَتَّجِهُ", "latihan" => "Latihan 32"],
                    ["id" => "30", "kata" => "اِسْتَيْقَظَ - يَسْتَيْقِظُ", "latihan" => "Latihan 33"]
                ];

                foreach ($kata as $i => $kata) {
                    $data['kata'][$i] = $kata;
                    $status = $this->Arab_model->get_latihan_by_id_user_id_materi_latihan($id, "3", $kata['latihan']);
                    if($status){
                        $data['kata'][$i]['status'] = 'on';
                    } else {
                        $data['kata'][$i]['status'] = 'off';
                    }
                }
                
                usort($data['kata'], function($a, $b) {
                    return $a['status'] <=> $b['status'];
                });

                $cek = $this->Arab_model->get_materi_by_id_user_id_materi($id, '3');

                if($cek){
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("materi/level1/materi/materi-3", $data);
                    $this->load->view("templates/footer-user", $data);
                } else {
                    $this->pesan_error($data);
                }
            } else if($bab == "keempat"){
                
                $data['title'] = "Menyusun Kalimat Menggunakan Fi'il Mudhori";
                
                $latihan = [
                    ["latihan" => "Latihan 34"],
                    ["latihan" => "Latihan 35"],
                    ["latihan" => "Latihan 36"],
                    ["latihan" => "Latihan 37"],
                    ["latihan" => "Latihan 38"]
                ];

                foreach ($latihan as $i => $latihan) {
                    $data['latihan'][$i] = $latihan;

                    $status = $this->Arab_model->get_latihan_by_id_user_id_materi_latihan($id, "4", $latihan['latihan']);
                    if($status){
                        $data['latihan'][$i]['status'] = 'on';
                    } else {
                        $data['latihan'][$i]['status'] = 'off';
                    }
                }

                $cek = $this->Arab_model->get_materi_by_id_user_id_materi($id, '4');

                if($cek){
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("materi/level1/materi/materi-4", $data);
                    $this->load->view("templates/footer-user", $data);
                } else {
                    $this->pesan_error($data);
                }
            } else {
                redirect("level1");
            }
        }

        public function latihan($bab){
            $id = $this->session->userdata('id');

            if($bab == 'fiilmudhori'){
                $data['title'] = "Latihan Fi'il Mudhori";

                $kata = str_replace(" ", "", $this->input->post("kata"));
                $latihan = $this->input->post("latihan");

                $kata = explode("-", $kata);

                $data['kata_dasar'] = $this->input->post("kata");
                $data['kata'] = $kata[1];
                $data['id'] = $this->input->post("id");
                $data['latih'] = $latihan;
                
                $cek = $this->Arab_model->get_materi_by_id_user_id_materi($id, '3');

                $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_id_materi_latihan($id, "3", $latihan);

                if($cek){
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("materi/level1/latihan/detail-contoh-mudhori", $data);
                    $this->load->view("templates/footer-user", $data);
                } else {
                    $this->pesan_error($data);
                }
            } else if($bab == 'menyusunmudhori'){
                $data['title'] = "Menyusun Kalimat Menggunakan Fi'il Mudhori";

                $latihan = $this->input->post("latihan");
                $data['urut'] = $this->input->post("urut");

                $data['kalimat'] = [];
                $data['latihan'] = $latihan;

                if($latihan == 'Latihan 34'){
                    $data['kalimat'] = [
                        [   
                            "id" => "0",
                            "kalimat" => "Kami memadamkan lampu di pagi hari",
                            "arab" => "نَحْنُ نُطْفِئُ الْمِصْبَاحَ فِيْ الصَّبَاحِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "نَحْنُ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يُطْفِئُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْمِصْبَاحَ"],
                                ["id" => "3", "jenis" => "huruf", "kata" => "فِيْ"],
                                ["id" => "4", "jenis" => "isim", "kata" => "الصَّبَاحِ"],
                            ],
                        ],
                        [   
                            "id" => "1",
                            "kalimat" => "Kamu (Pr) menutup jendela di malam hari",
                            "arab" => "أَنْتِ تُغْلِقِيْنَ النَّافِذَةَ فِيْ اللَّيْلِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتِ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يُغْلِقُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "النَّافِذَةَ"],
                                ["id" => "3", "jenis" => "huruf", "kata" => "فِيْ"],
                                ["id" => "4", "jenis" => "isim", "kata" => "اللَّيْلِ"],
                            ],
                        ],
                        [   
                            "id" => "2",
                            "kalimat" => "Kalian (Lk) membuka pintu menggunakan kunci",
                            "arab" => "أَنْتُمْ تَفْتَحُوْنَ الْبَابَ بِالْمِفْتَاحِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتُمْ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَفْتَحُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْبَابَ"],
                                ["id" => "3", "jenis" => "huruf", "kata" => "بِ"],
                                ["id" => "4", "jenis" => "isim", "kata" => "الْمِفْتَاحِ"],
                            ],
                        ],
                        [   
                            "id" => "3",
                            "kalimat" => "Kalian (Pr) duduk di atas lantai",
                            "arab" => "أَنْتُنَّ تَجْلِسْنَ عَلَى الْبِلَاطَةِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتُنَّ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَجْلِسُ"],
                                ["id" => "2", "jenis" => "huruf", "kata" => "عَلَى"],
                                ["id" => "3", "jenis" => "isim", "kata" => "الْبِلَاطَةِ"],
                            ],
                        ],
                        [   
                            "id" => "4",
                            "kalimat" => "Mereka (Pr) menggantungkan cermin di tembok",
                            "arab" => "هُنَّ يُعَلِّقْنَ الْمِرْآةَ فِيْ الْجِدَارِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتُمْ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يُعَلِّقُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْمِرْآةَ"],
                                ["id" => "3", "jenis" => "huruf", "kata" => "فِي"],
                                ["id" => "4", "jenis" => "isim", "kata" => "الْجِدَارِ"],
                            ],
                        ]
                    ];
                } else if($latihan == 'Latihan 35'){
                    $data['kalimat'] = [
                        [   
                            "id" => "0",
                            "kalimat" => "Mereka Berdua (Pr) keluar dari kelas",
                            "arab" => "هُمَا تَخْرُجَانِ مِنْ الْفَصْلِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "هُمَا"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَخْرُجُ"],
                                ["id" => "2", "jenis" => "huruf", "kata" => "مِنْ"],
                                ["id" => "3", "jenis" => "isim", "kata" => "الْفَصْلِ"]
                            ],
                        ],
                        [   
                            "id" => "1",
                            "kalimat" => "Mereka Berdua (Lk) pergi ke masjid",
                            "arab" => "هُمَا يَذْهَبَانِ إلَى الْمَسْجِدِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "هُمَا"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَذْهَبُ"],
                                ["id" => "2", "jenis" => "huruf", "kata" => "إلَى"],
                                ["id" => "3", "jenis" => "isim", "kata" => "الْمَسْجِدِ"],
                            ],
                        ],
                        [   
                            "id" => "2",
                            "kalimat" => "Kalian Berdua (Lk) meminum air",
                            "arab" => "أَنْتُمَا تَشْرَبَانِ الْمَاءَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتُمَا"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَشْرَبُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْمَاءَ"]
                            ],
                        ],
                        [   
                            "id" => "3",
                            "kalimat" => "Kami belajar di rumah",
                            "arab" => "نَحْنُ نَدْرُسُ فِيْ الْبَيْتِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "نَحْنُ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَدْرُسُ"],
                                ["id" => "2", "jenis" => "huruf", "kata" => "فِيْ"],
                                ["id" => "3", "jenis" => "isim", "kata" => "الْبَيْتِ"],
                            ],
                        ],
                        [   
                            "id" => "4",
                            "kalimat" => "Kalian (Pr) menulis pelajaran",
                            "arab" => "أَنْتُنَّ تَكْتُبْنَ الدَّرْسَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتُمْ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَكْتُبُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الدَّرْسَ"]
                            ],
                        ]
                    ];
                } else if($latihan == 'Latihan 36'){
                    $data['kalimat'] = [
                        [   
                            "id" => "0",
                            "kalimat" => "Mereka (Lk) bermain di lapangan",
                            "arab" => "هُمْ يَلْعَبُوْنَ فِيْ الْمَيْدَانِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "هُمْ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَلْعَبُ"],
                                ["id" => "2", "jenis" => "huruf", "kata" => "فِيْ"],
                                ["id" => "3", "jenis" => "isim", "kata" => "الْمَيْدَانِ"],
                            ],
                        ],
                        [   
                            "id" => "1",
                            "kalimat" => "Kalian (Lk) membersihkan kamar",
                            "arab" => "أَنْتُمْ تُنَظِّفُوْنَ الْغُرفَةَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتِ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يُنَظِّفُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْغُرفَةَ"]
                            ],
                        ],
                        [   
                            "id" => "2",
                            "kalimat" => "Mereka (Pr) mengetuk pintu",
                            "arab" => "هُنَّ يَطْرُقْنَ الْبَابَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "هُنَّ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَطْرُقُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْبَابَ"]
                            ],
                        ],
                        [   
                            "id" => "3",
                            "kalimat" => "Saya memasak makanan",
                            "arab" => "أَنَا أَطْبَخُ الطَّعَامَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنَا"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَطْبَخُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الطَّعَامَ"]
                            ],
                        ],
                        [   
                            "id" => "4",
                            "kalimat" => "Kami merapikan kasur",
                            "arab" => "نَحْنُ نُرَتِّبُ الْفِرَاشَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتُمْ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يُرَتِّبُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْفِرَاشَ"]
                            ],
                        ]
                    ];
                } else if($latihan == 'Latihan 37'){
                    $data['kalimat'] = [
                        [   
                            "id" => "0",
                            "kalimat" => "Kalian berdua (Lk) menyalakan lampu",
                            "arab" => "أَنْتُمَا تُشْعِلَانِ الْمِصْبَاحَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتُمَا"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يُشْعِلُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْمِصْبَاحَ"]
                            ],
                        ],
                        [   
                            "id" => "1",
                            "kalimat" => "Kalian berdua (Pr) menyapu lantai",
                            "arab" => "أَنْتُمَا تَكْنُسَانِ الْبِلاَطَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتُمَا"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَكْنُسُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْبِلاَطَ"]
                            ],
                        ],
                        [   
                            "id" => "2",
                            "kalimat" => "Mereka (Lk) pergi ke pasar",
                            "arab" => "هُمْ يَذْهَبُوْنَ إلَى السُّوْقِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "هُمْ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَذْهَبُ"],
                                ["id" => "2", "jenis" => "huruf", "kata" => "إِلَى "],
                                ["id" => "3", "jenis" => "isim", "kata" => "السُّوْقِ"],
                            ],
                        ],
                        [   
                            "id" => "3",
                            "kalimat" => "Kalian (Pr) pulang ke rumah",
                            "arab" => "أَنْتُنَّ تَرْجِعْنَ إلَى الْبَيْتِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتُنَّ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَرْجِعُ"],
                                ["id" => "2", "jenis" => "huruf", "kata" => "إِلَى "],
                                ["id" => "3", "jenis" => "isim", "kata" => "الْبَيْتِ"],
                            ],
                        ],
                        [   
                            "id" => "4",
                            "kalimat" => "Kami mengumpulkan sampah",
                            "arab" => "نَحْنُ نَجْمَعُ الزُّبَالَةَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "نَحْنُ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَجْمَعُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الزُّبَالَةَ"]
                            ],
                        ]
                    ];
                } else if($latihan == 'Latihan 38'){
                    $data['kalimat'] = [
                        [   
                            "id" => "0",
                            "kalimat" => "Kamu (Pr) jatuh di kamar mandi",
                            "arab" => "أَنْتِ تَسْقُطِيْنَ فِيْ الْحَمَّامِ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "أَنْتِ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَسْقُطُ"],
                                ["id" => "2", "jenis" => "huruf", "kata" => "فِيْ"],
                                ["id" => "3", "jenis" => "isim", "kata" => "الْحَمَّامِ"]
                            ],
                        ],
                        [   
                            "id" => "1",
                            "kalimat" => "Kami menghormati guru",
                            "arab" => "نَحْنُ نَحْتَرِمُ الْمُدَرِّسَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "نَحْنُ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَحْتَرِمُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْمُدَرِّسَ"]
                            ],
                        ],
                        [   
                            "id" => "2",
                            "kalimat" => "Dia (Lk) bertanya kepada guru",
                            "arab" => "هُوَ يَسْأَلُ الْمُدَرِّسَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "هُوَ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَسْأَلُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْمُدَرِّسَ"]
                            ],
                        ],
                        [   
                            "id" => "3",
                            "kalimat" => "Mereka berdua (Pr) menabung uang",
                            "arab" => "هُمَا تَدَّخِرَانِ الْفُلُوْسَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "هُمَا"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يَدَّخِرُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الْفُلُوْسَ"]
                            ],
                        ],
                        [   
                            "id" => "4",
                            "kalimat" => "Dia (Pr) mengajar murid-murid",
                            "arab" => "هِيَ تُعَلِّمُ الطُّلَّابَ",
                            "kata" => [
                                ["id" => "0", "jenis" => "dhomir", "kata" => "هِيَ"],
                                ["id" => "1", "jenis" => "mudhori", "kata" => "يُعَلِّمُ"],
                                ["id" => "2", "jenis" => "isim", "kata" => "الطُّلَّابَ"]
                            ],
                        ]
                    ];
                }
                
                $cek = $this->Arab_model->get_materi_by_id_user_id_materi($id, '4');

                if($cek){
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("materi/level1/latihan/latihan-materi-4", $data);
                    $this->load->view("templates/footer-user", $data);
                } else {
                    $this->pesan_error($data);
                }

            }
        }

        public function get_tujuan_by_id_materi(){
            $id = $this->input->post("id");
            $data = $this->Arab_model->get_tujuan_by_id_materi($id);
            echo json_encode($data);
        }

        // other function
            public function pesan_error($data){
                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/pesanerror", $data);
                $this->load->view("templates/footer-user", $data);
            }
        // other function
    }