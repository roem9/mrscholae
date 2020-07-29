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
            if(!empty($_GET['id'])){
                if($_GET['id'] == MD5('Mufrodat 1')){
                    $data['materi'] = "Mufrodat 1";
                    $data['title'] = "الْأُسْرَةُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 1");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "أَبٌ / وَالِدٌ",
                            "arti" => "Ayah"
                        ],
                        [
                            "kata_arab" => "أُمٌّ / وَالِدَةٌ",
                            "arti" => "Ibu"
                        ],
                        [
                            "kata_arab" => "جَدٌّ",
                            "arti" => "Kakek"
                        ],
                        [
                            "kata_arab" => "جَدَّةٌ",
                            "arti" => "Nenek"
                        ],
                        [
                            "kata_arab" => "زَوْجٌ",
                            "arti" => "Suami"
                        ],
                        [
                            "kata_arab" => "زَوْجَةٌ",
                            "arti" => "Istri"
                        ],
                        [
                            "kata_arab" => "أَخٌ",
                            "arti" => "Saudara (lk)"
                        ],
                        [
                            "kata_arab" => "أُخْتٌ",
                            "arti" => "Saudara (pr)"
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 2')){
                    $data['materi'] = "Mufrodat 2";
                    $data['title'] = "الْأُسْرَةُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 2");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "إِبْنٌ / وَلَدٌ",
                            "arti" => "Anak (lk) / Putra"
                        ],
                        [
                            "kata_arab" => "إِبْنَةٌ / بِنْتٌ",
                            "arti" => "Anak (pr) / Putri"
                        ],
                        [
                            "kata_arab" => "عَمٌّ",
                            "arti" => "Paman (dr Ayah)"
                        ],
                        [
                            "kata_arab" => "عَمَّةٌ",
                            "arti" => "Bibi (dr Ayah)"
                        ],
                        [
                            "kata_arab" => "خَالٌ",
                            "arti" => "Paman (dr Ibu)"
                        ],
                        [
                            "kata_arab" => "خَالَةٌ",
                            "arti" => "Bibi (dr Ibu)"
                        ],
                        [
                            "kata_arab" => "حَفِيْدٌ",
                            "arti" => "Cucu (lk)"
                        ],
                        [
                            "kata_arab" => "حَفِيْدَةٌ",
                            "arti" => "Cucu (pr)"
                        ],
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 3')){
                    $data['materi'] = "Mufrodat 3";
                    $data['title'] = "أَعْضَاءُ الْجِسْمِ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 3");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "جِسْمٌ / بَدَنٌ",
                            "arti" => "Tubuh / Badan"
                        ],
                        [
                            "kata_arab" => "رَأْسٌ",
                            "arti" => "Kepala"
                        ],
                        [
                            "kata_arab" => "شَعْرٌ",
                            "arti" => "Rambut"
                        ],
                        [
                            "kata_arab" => "وَجْهٌ",
                            "arti" => "Wajah / Muka"
                        ],
                        [
                            "kata_arab" => "عَيْنٌ",
                            "arti" => "Mata"
                        ],
                        [
                            "kata_arab" => "أَنْفٌ" ,
                            "arti" => " Hidung"
                        ],
                        [
                            "kata_arab" => "خَدٌّ",
                            "arti" => "Pipi"
                        ],
                        [
                            "kata_arab" => "فَمٌ",
                            "arti" => "Mulut"
                        ],
                        [
                            "kata_arab" => "شَفَةٌ",
                            "arti" => "Bibir"
                        ],
                        [
                            "kata_arab" => "سِنٌّ",
                            "arti" => "Gigi"
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 4')){
                    $data['materi'] = "Mufrodat 4";
                    $data['title'] = "أَعْضَاءُ الْجِسْمِ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 4");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "لِسَانٌ",
                            "arti" => "Lidah / lisan"
                        ],
                        [
                            "kata_arab" => "أُذُنٌ",
                            "arti" => "Telinga"
                        ],
                        [
                            "kata_arab" => "ذَقَنٌ",
                            "arti" => "Dagu"
                        ],
                        [
                            "kata_arab" => "شَارِبٌ",
                            "arti" => "Kumis"
                        ],
                        [
                            "kata_arab" => "لِحْيَةٌ",
                            "arti" => "Jenggot"
                        ],
                        [
                            "kata_arab" => "عُنُقٌ / رَقَبَةٌ",
                            "arti" => "Leher"
                        ],
                        [
                            "kata_arab" => "صَدْرٌ",
                            "arti" => "Dada"
                        ],
                        [
                            "kata_arab" => "بَطْنٌ",
                            "arti" => "Perut"
                        ],
                        [
                            "kata_arab" => "يَدٌ",
                            "arti" => "Tangan"
                        ],
                        [
                            "kata_arab" => "رِجْلٌ",
                            "arti" => "Kaki"
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 5')){
                    $data['materi'] = "Mufrodat 5";
                    $data['title'] = "الدِّرَاسَةُ وَ أَدَوَاتُهَا ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 5");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "كِتَابٌ",
                            "arti" => "Buku"
                        ],
                        [
                            "kata_arab" => "دَفْتَرٌ",
                            "arti" => "Buku Tulis"
                        ],
                        [
                            "kata_arab" => "مَجَلَّةٌ",
                            "arti" => "Majalah"
                        ],
                        [
                            "kata_arab" => "صَحِيْفَةٌ",
                            "arti" => "Koran"
                        ],
                        [
                            "kata_arab" => "إِخْتِبَارٌ / إِمْتِحَانٌ",
                            "arti" => "Ujian"
                        ],
                        [
                            "kata_arab" => "مِقَصٌّ",
                            "arti" => "Gunting"
                        ],
                        [
                            "kata_arab" => "قَلَمٌ",
                            "arti" => "Pulpen / spidol"
                        ],
                        [
                            "kata_arab" => "قَلَمُ الرَّصَاصِ",
                            "arti" => "Pensil"
                        ],
                        [
                            "kata_arab" => "تَوْقِيْعٌ",
                            "arti" => "Tanda tangan"
                        ],
                        [
                            "kata_arab" => "مِمْسَحَةٌ",
                            "arti" => "Penghapus"
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 6')){
                    $data['materi'] = "Mufrodat 6";
                    $data['title'] = "الدِّرَاسَةُ وَ أَدَوَاتُهَا ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 6");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "طَبْشُوْرٌ",
                            "arti" => "Kapur"
                        ],
                        [
                            "kata_arab" => "قِرْطَاسٌ / وَرَقَةٌ",
                            "arti" => "Kertas"
                        ],
                        [
                            "kata_arab" => "مِسْطَرَةٌ",
                            "arti" => "Penggaris"
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
                            "kata_arab" => "مَادَّةٌ",
                            "arti" => "Mata pelajaran"
                        ],
                        [
                            "kata_arab" => "حِصَّةٌ",
                            "arti" => "Jam pelajaran"
                        ],
                        [
                            "kata_arab" => "دَرْسٌ",
                            "arti" => "Pelajaran"
                        ],
                        [
                            "kata_arab" => "مُدَرِّسٌ",
                            "arti" => "Guru"
                        ],
                        [
                            "kata_arab" => "تَقْوِيْمٌ",
                            "arti" => "Kalender"
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 7')){
                    $data['materi'] = "Mufrodat 7";
                    $data['title'] = "الْأَثَاثُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 7");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "أَرِيْكَةٌ",
                            "arti" => "Sofa"
                        ],
                        [
                            "kata_arab" => "كُرْسِيٌّ",
                            "arti" => "Kursi"
                        ],
                        [
                            "kata_arab" => "مَقْعَدٌ",
                            "arti" => "Bangku"
                        ],
                        [
                            "kata_arab" => "مِرْوَحَةٌ",
                            "arti" => "Kipas angin"
                        ],
                        [
                            "kata_arab" => "مُكَيِّفٌ",
                            "arti" => "AC"
                        ],
                        [
                            "kata_arab" => "سَجَّادَةٌ",
                            "arti" => "Permadani"
                        ],
                        [
                            "kata_arab" => "حَصِيْرٌ",
                            "arti" => "Tikar"
                        ],
                        [
                            "kata_arab" => "تِلْفَازٌ",
                            "arti" => "Televisi"
                        ],
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 8')){
                    $data['materi'] = "Mufrodat 8";
                    $data['title'] = "الْأَثَاثُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 8");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "رَفٌّ",
                            "arti" => "Rak"
                        ],
                        [
                            "kata_arab" => "مِفْتَاحٌ",
                            "arti" => "Kunci"
                        ],
                        [
                            "kata_arab" => "مِكْوَاةٌ",
                            "arti" => "Setrika"
                        ],
                        [
                            "kata_arab" => "هَاتِفٌ",
                            "arti" => "Telepon"
                        ],
                        [
                            "kata_arab" => "سِتَارٌ",
                            "arti" => "Gorden"
                        ],
                        [
                            "kata_arab" => "مِكْنَسَةٌ",
                            "arti" => "Sapu"
                        ],
                        [
                            "kata_arab" => "مِرْآةٌ",
                            "arti" => "Cermin"
                        ],
                        [
                            "kata_arab" => "غَسَّالَةٌ",
                            "arti" => "Mesin cuci"
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 9')){
                    $data['materi'] = "Mufrodat 9";
                    $data['title'] = "الطَّعَامُ وَ الشَّرَابُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 9");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "طَعَامٌ",
                            "arti" => "Makanan"
                        ],
                        [
                            "kata_arab" => "شَرَابٌ",
                            "arti" => "Minuman"
                        ],
                        [
                            "kata_arab" => "غَدَاءٌ",
                            "arti" => "Makan siang"
                        ],
                        [
                            "kata_arab" => "عَشَاءٌ",
                            "arti" => "Makan malam"
                        ],
                        [
                            "kata_arab" => "مَسْلُوْقٌ",
                            "arti" => "Direbus"
                        ],
                        [
                            "kata_arab" => "مَقْلِيٌّ",
                            "arti" => "Digoreng"
                        ],
                        [
                            "kata_arab" => "رُزٌّ",
                            "arti" => "Nasi"
                        ],
                        [
                            "kata_arab" => "بَيْضٌ",
                            "arti" => "Telur"
                        ],
                        [
                            "kata_arab" => "لَحْمٌ",
                            "arti" => "Daging"
                        ],
                        [
                            "kata_arab" => "دَجَاجٌ",
                            "arti" => "Ayam"
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 10')){
                    $data['materi'] = "Mufrodat 10";
                    $data['title'] = "الطَّعَامُ وَ الشَّرَابُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 10");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "سَمَكٌ",
                            "arti" => "Ikan"
                        ],
                        [
                            "kata_arab" => "خُبْزٌ",
                            "arti" => "Roti"
                        ],
                        [
                            "kata_arab" => "سُكَّرٌ",
                            "arti" => "Gula"
                        ],
                        [
                            "kata_arab" => "مِلْحٌ",
                            "arti" => "Garam"
                        ],
                        [
                            "kata_arab" => "فَطُوْرٌ",
                            "arti" => "Sarapan"
                        ],
                        [
                            "kata_arab" => "ثَلْجٌ",
                            "arti" => "Es"
                        ],
                        [
                            "kata_arab" => "شَايٌ",
                            "arti" => "Teh"
                        ],
                        [
                            "kata_arab" => "قَهْوَةٌ",
                            "arti" => "Kopi"
                        ],
                        [
                            "kata_arab" => "لَبَنٌ",
                            "arti" => "Susu"
                        ],
                        [
                            "kata_arab" => "عَصِيْرٌ",
                            "arti" => "Jus"
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 11')){
                    $data['materi'] = "Mufrodat 11";
                    $data['title'] = "الْفَاكِهَةُ وَ الْخَضْرَوَاتُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 11");
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
                            "kata_arab" => "تُفَّاحٌ",
                            "arti" => "Apel",
                            "huruf" => array_unique(["تُ","فَّ","ا","حٌ"])
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
                            "kata_arab" => "بُرْتُقَالٌ",
                            "arti" => "Jeruk",
                            "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 12')){
                    $data['materi'] = "Mufrodat 12";
                    $data['title'] = "الْفَاكِهَةُ وَ الْخَضْرَوَاتُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 12");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَانْغَا",
                            "arti" => "Mangga",
                            "huruf" => array_unique(["مَ","ا","نْ","غَ","ا"])
                        ],
                        [
                            "kata_arab" => "بِطِّيْخٌ",
                            "arti" => "Semangka",
                            "huruf" => array_unique(["بِ","طِّ","يْ","خٌ"])
                        ],
                        [
                            "kata_arab" => "طَمَاطِمُ",
                            "arti" => "Tomat",
                            "huruf" => array_unique(["طَ","مَ","ا","طِ","مُ"])
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
                        ],
                        [
                            "kata_arab" => "بَطَاطِسُ",
                            "arti" => "Kentang",
                            "huruf" => array_unique(["بَ","طَ","ا","طِ","سُ"])
                        ],
                        [
                            "kata_arab" => "خِيَارٌ",
                            "arti" => "Mentimun",
                            "huruf" => array_unique(["خِ","يَ","ا","رٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 13')){
                    $data['materi'] = "Mufrodat 13";
                    $data['title'] = "الطَّعْمُ";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 13");
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
                } else if($_GET['id'] == MD5('Mufrodat 14')){
                    $data['materi'] = "Mufrodat 14";
                    $data['title'] = "اللَّوْنُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 14");
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
                            "huruf" => array_unique(['حَ',"مْ","رَ","ا","ءُ"])
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
                } else if($_GET['id'] == MD5('Mufrodat 15')){
                    $data['materi'] = "Mufrodat 15";
                    $data['title'] = "اللَّوْنُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 15");
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
                } else if($_GET['id'] == MD5('Mufrodat 16')){
                    $data['materi'] = "Mufrodat 16";
                    $data['title'] = "الشَّكْلُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 16");
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
                            "kata_arab" => "هَرَمٌ",
                            "arti" => "Limas",
                            "huruf" => array_unique(["هَ","رَ","مٌ"])
                        ],
                        [
                            "kata_arab" => "مُسْتَقِيْمٌ",
                            "arti" => "Lurus",
                            "huruf" => array_unique(["مُ","سْ","تَ","قِ","يْ","مٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 17')){
                    $data['materi'] = "Mufrodat 17";
                    $data['title'] = "الشَّكْلُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 17");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مُتَوَازِيْ الْمُسْتَطِيْلَاتِ",
                            "arti" => "Balok",
                            "huruf" => array_unique(["ا","لْ","مُ","سْ","تَ","طِ","يْ","لَ","ا","تِ","مُ","تَ","وَ","ا","زِ","يْ","-"])
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
                } else if($_GET['id'] == MD5('Mufrodat 18')){
                    $data['materi'] = "Mufrodat 18";
                    $data['title'] = "الْجَهَاتُ";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 18");
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
                            "kata_arab" => "شَرْقٌ",
                            "arti" => "Timur",
                            "huruf" => array_unique(["شَ","رْ","قٌ"])
                        ],
                        [
                            "kata_arab" => "غَرْبٌ",
                            "arti" => "Barat",
                            "huruf" => array_unique(["غَ","رْ","بٌ"])
                        ],
                        [
                            "kata_arab" => "شَمَالٌ شَرْقِيٌّ",
                            "arti" => "Timur laut",
                            "huruf" => array_unique(["شَ","مَ","ا","لٌ","-","شَ","رْ","قِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "جَنُوْبٌ غَرْبِيٌّ",
                            "arti" => "Barat daya",
                            "huruf" => array_unique(["جَ","نُ","وْ","بٌ","غَ","رْ","بِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "شَمَالٌ غَرْبِيٌّ",
                            "arti" => "Barat laut",
                            "huruf" => array_unique(["شَ","مَ","ا","لٌ","-","غَ","رْ","بِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "جَنُوْبٌ شَرْقِيٌّ",
                            "arti" => "Tenggara",
                            "huruf" => array_unique(["جَ","نُ","وْ","بٌ","شَ","رْ","قِ","يٌّ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 19')){
                    $data['materi'] = "Mufrodat 19";
                    $data['title'] = "الْجَوُّ وَ الْفَصْلُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 19");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "الْجَوُّ",
                            "arti" => "Cuaca",
                            "huruf" => array_unique(["ا","لْ","جَ","وُّ"])
                        ],
                        [
                            "kata_arab" => "الْفَصْلُ",
                            "arti" => "Musim",
                            "huruf" => array_unique(["ا","لْ","فَ","صْ","لُ"])
                        ],
                        [
                            "kata_arab" => "فَصْلُ الشِّتَاءِ",
                            "arti" => "Musim dingin",
                            "huruf" => array_unique(["فَ","صْ","لُ","ا","ل","شِّ","تَ","ا","ءِ","-"])
                        ],
                        [
                            "kata_arab" => "فَصْلُ الصَّيْفِ",
                            "arti" => "Musim panas",
                            "huruf" => array_unique(["فَ","صْ","لُ","-","ا","ل","صَّ","يْ","فِ","-"])
                        ],
                        [
                            "kata_arab" => "فَصْلُ الرَّبِيْعِ",
                            "arti" => "Musim semi",
                            "huruf" => array_unique(["فَ","صْ","لُ","ا","ل","رَّ","بِ","يْ","عِ","-"])
                        ],
                        [
                            "kata_arab" => "فَصْلُ الْخَرِيْفِ",
                            "arti" => "Musim gugur",
                            "huruf" => array_unique(["فَ","صْ","لُ","-","ا","لْ","خَ","رِ","يْ","فِ"])
                        ],
                        [
                            "kata_arab" => "مَطَرٌ",
                            "arti" => "Hujan",
                            "huruf" => array_unique(["مَ","طَ","رٌ"])
                        ],
                        [
                            "kata_arab" => "تَحْتَ الصِّفْرِ",
                            "arti" => "Dibawah nol derajat",
                            "huruf" => array_unique(["تَ","حْ","تَ","-","ا","ل","صِّ","فْ","رِ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 20')){
                    $data['materi'] = "Mufrodat 20";
                    $data['title'] = "الْجَوُّ وَ الْفَصْلُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 20");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "فَيَضَانُ",
                            "arti" => "Banjir",
                            "huruf" => array_unique(["فَ","يَ","ضَ","ا","نُ"])
                        ],
                        [
                            "kata_arab" => "صَحْوٌ",
                            "arti" => "Cerah",
                            "huruf" => array_unique(["صَ","حْ","وٌ"])
                        ],
                        [
                            "kata_arab" => "غَائِمٌ",
                            "arti" => "Berawan",
                            "huruf" => array_unique(["غَ","ا","ئِ","مٌ"])
                        ],
                        [
                            "kata_arab" => "بَرْقٌ",
                            "arti" => "Petir",
                            "huruf" => array_unique(["بَ","رْ","قٌ"])
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
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 21')){
                    $data['materi'] = "Mufrodat 21";
                    $data['title'] = "الْأَمْرَاضُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 21");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَرَضٌ، أَلَمٌ، وَجَعٌ، دَاءٌ",
                            "arti" => "Sakit / penyakit",
                            "huruf" => array_unique(["مَ","رَ","ضٌ"])
                        ],
                        [
                            "kata_arab" => "أَمْرَاضٌ حِسِّيَّةٌ",
                            "arti" => "Alergi",
                            "huruf" => array_unique(["حِ","سِّ","يَّ","ةٌ","-","أَ","مْ","رَ","ا","ضٌ","-"])
                        ],
                        [
                            "kata_arab" => "مَرِيْضٌ",
                            "arti" => "Pasien (orang sakit)",
                            "huruf" => array_unique(["مَ","رِ","يْ","ضٌ"])
                        ],
                        [
                            "kata_arab" => "صَحِيْحٌ",
                            "arti" => "Sehat",
                            "huruf" => array_unique(["صَ","حِ","يْ","حٌ"])
                        ],
                        [
                            "kata_arab" => "صُدَاعٌ",
                            "arti" => "Sakit kepala",
                            "huruf" => array_unique(["صُ","دَ","ا","عٌ"])
                        ],
                        [
                            "kata_arab" => "وَجَعُ السِّنِّ",
                            "arti" => "Sakit gigi",
                            "huruf" => array_unique(["ا","ل","سِّ","نِّ","-","وَ","جَ","عُ"])
                        ],
                        [
                            "kata_arab" => "مَبْطُوْنٌ",
                            "arti" => "Sakit perut",
                            "huruf" => array_unique(["مَ","بْ","طُ","وْ","نٌ"])
                        ],
                        [
                            "kata_arab" => "إِسْهَالٌ",
                            "arti" => "Diare / mencret",
                            "huruf" => array_unique(["إِ","سْ","هَ","ا","لٌ"])
                        ],
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 22')){
                    $data['materi'] = "Mufrodat 22";
                    $data['title'] = "الْأَمْرَاضُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 22");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَغْصٌ",
                            "arti" => "Mules",
                            "huruf" => array_unique(["مَ","غْ","صٌ"])
                        ],
                        [
                            "kata_arab" => "حُمَّى",
                            "arti" => "Demam",
                            "huruf" => array_unique(["حُ","مَّ","ى"])
                        ],
                        [
                            "kata_arab" => "زُكَامٌ",
                            "arti" => "Flu / pilek",
                            "huruf" => array_unique(["زُ","كَ","ا","مٌ"])
                        ],
                        [
                            "kata_arab" => "بَرْدٌ",
                            "arti" => "Masuk angin",
                            "huruf" => array_unique(["بَ","رْ","دٌ"])
                        ],
                        [
                            "kata_arab" => "سُعَالٌ",
                            "arti" => "Batuk",
                            "huruf" => array_unique(["سُ","عَ","ا","لٌ"])
                        ],
                        [
                            "kata_arab" => "حُكَّةٌ",
                            "arti" => "Gatal-gatal",
                            "huruf" => array_unique(["حُ","كَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "دَوَاءٌ",
                            "arti" => "Obat",
                            "huruf" => array_unique(["دَ","وَ","ا","ءٌ"])
                        ],
                        [
                            "kata_arab" => "مُنَمِّلَةٌ",
                            "arti" => "Kesemutan",
                            "huruf" => array_unique(["مُ","نَ","مِّ","لَ","ةٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 23')){
                    $data['materi'] = "Mufrodat 23";
                    $data['title'] = "وَسَائِلُ الْمُوَاصَلَاتِ";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 23");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "سَيَّارَةٌ",
                            "arti" => "Mobil",
                            "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "حَافِلَةٌ",
                            "arti" => "Bis",
                            "huruf" => array_unique(["حَ","ا","فِ","لَ","ةٌ"])
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
                        ],
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
                            "kata_arab" => "تَذْكِرَةٌ",
                            "arti" => " Tiket",
                            "huruf" => array_unique(["تَ","ذْ","كِ","رَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مُسَافِرٌ",
                            "arti" => "Penumpang",
                            "huruf" => array_unique(["مُ","سَ","ا","فِ","رٌ"])
                        ],
                        [
                            "kata_arab" => "أُجْرَةُ السَّفَرِ",
                            "arti" => "Ongkos",
                            "huruf" => array_unique(["أُ","جْ","رَ","ةُ","-","ا","ل","سَّ","فَ","رِ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 24')){
                    $data['materi'] = "Mufrodat 24";
                    $data['title'] = "الْمَلَابِسُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 24");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَلَابِسُ / لِبَاسٌ",
                            "arti" => "Pakaian",
                            "huruf" => array_unique(["لِ","بَ","ا","سٌ"])
                        ],
                        [
                            "kata_arab" => "قَمِيْصٌ",
                            "arti" => "Kemeja",
                            "huruf" => array_unique(["قَ","مِ","يْ","صٌ"])
                        ],
                        [
                            "kata_arab" => "ثَوْبٌ",
                            "arti" => "Jubah",
                            "huruf" => array_unique(["ثَ","وْ","بٌ"])
                        ],
                        [
                            "kata_arab" => "فَانِلَّةٌ",
                            "arti" => "Kaos",
                            "huruf" => array_unique(["فَ","ا","نِ","لَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "سِرْوَالٌ",
                            "arti" => "Celana pendek",
                            "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ"])
                        ],
                        [
                            "kata_arab" => "بَنْطَلُوْنٌ",
                            "arti" => "Celana panjang",
                            "huruf" => array_unique(["بَ","نْ","طَ","لُ","وْ","نٌ"])
                        ],
                        [
                            "kata_arab" => "سِرْوَالٌ دَاخِلِيٌّ",
                            "arti" => "Celana dalam",
                            "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ","-","دَ","ا","خِ","لِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "فُسْتَانٌ",
                            "arti" => "Longdress",
                            "huruf" => array_unique(["فُ","سْ","تَ","ا","نٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 25')){
                    $data['materi'] = "Mufrodat 25";
                    $data['title'] = "الْمَلَابِسُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 25");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "جَاكِـتَّةٌ",
                            "arti" => "Jaket",
                            "huruf" => array_unique(["جَ","ا","كِ","تَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "حِزَامٌ",
                            "arti" => "Ikat pinggang",
                            "huruf" => array_unique(["حِ","زَ","ا","مٌ"])
                        ],
                        [
                            "kata_arab" => "نَعْلٌ",
                            "arti" => "Sandal",
                            "huruf" => array_unique(["نَ","عْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "حِذَاءٌ",
                            "arti" => "Sepatu",
                            "huruf" => array_unique(["حِ","ذَ","ا","ءٌ"])
                        ],
                        [
                            "kata_arab" => "قَلَنْسُوَةٌ",
                            "arti" => "Songkok",
                            "huruf" => array_unique(["قَ","لَ","نْ","سُ","وَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "إِزَارٌ",
                            "arti" => "Sarung",
                            "huruf" => array_unique(["إِ","زَ","ا","رٌ"])
                        ],
                        [
                            "kata_arab" => "جَوْرَبٌ",
                            "arti" => "Kaos kaki",
                            "huruf" => array_unique(["جَ","وْ","رَ","بٌ"])
                        ],
                        [
                            "kata_arab" => "خِمَارٌ",
                            "arti" => "Kerudung wanita",
                            "huruf" => array_unique(["خِ","مَ","ا","رٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 26')){
                    $data['materi'] = "Mufrodat 26";
                    $data['title'] = "الرِّيَاضَةُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 26");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "رِيَاضَةٌ",
                            "arti" => "Olahraga",
                            "huruf" => array_unique(["رِ","يَ","ا","ضَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ الْقَدَمِ",
                            "arti" => "Sepak bola",
                            "huruf" => array_unique(["كُ","رَ","ةُ","-","ا","لْ","قَ","دَ","مِ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ الْيَدِ",
                            "arti" => "Bola voli",
                            "huruf" => array_unique(["كُ","رَ","ةُ","ا","لْ","يَ","دِ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ السَّلَّةِ",
                            "arti" => "Bola basket",
                            "huruf" => array_unique(["كُ","رَ","ةُ","-","ا","ل","سَّ","لَّ","ةِ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ الرِّيْشَةِ",
                            "arti" => "Badminton",
                            "huruf" => array_unique(["كُ","رَ","ةُ","-","ا","ل","رِّ","يْ","شَ","ةِ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ الطَّاوِلَةِ",
                            "arti" => "Tenis meja",
                            "huruf" => array_unique(["كُ","رَ","ةُ","-","ا","ل","طَّ","ا","وِ","لَ","ةِ"])
                        ],
                        [
                            "kata_arab" => "مُلَاكَمَةٌ",
                            "arti" => "Tinju",
                            "huruf" => array_unique(["مُ","لَ","ا","كَ","مَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "الشَّطْرَنْجُ",
                            "arti" => "Catur",
                            "huruf" => array_unique(["ا","ل","شَّ","طْ","رَ","نْ","جُ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 27')){
                    $data['materi'] = "Mufrodat 27";
                    $data['title'] = "الرِّيَاضَةُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 27");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "سِبَاحَةٌ",
                            "arti" => "Renang",
                            "huruf" => array_unique(["سِ","بَ","ا","حَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مُبَارَاةٌ",
                            "arti" => "Pertandingan",
                            "huruf" => array_unique(["مُ","بَ","ا","رَ","ا","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مَلْعَبٌ",
                            "arti" => "Stadion / lapangan",
                            "huruf" => array_unique(["مَ","لْ","عَ","بٌ"])
                        ],
                        [
                            "kata_arab" => "مِضْرَبٌ",
                            "arti" => "Raket",
                            "huruf" => array_unique(["مِ","ضْ","رَ","بٌ"])
                        ],
                        [
                            "kata_arab" => "كُرَةٌ",
                            "arti" => "Bola",
                            "huruf" => array_unique(["كُ","رَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "لَاعِبٌ",
                            "arti" => "Pemain",
                            "huruf" => array_unique(["لَ","ا","عِ","بٌ"])
                        ],
                        [
                            "kata_arab" => "حَاكِمٌ",
                            "arti" => "Wasit",
                            "huruf" => array_unique(["حَ","ا","كِ","مٌ"])
                        ],
                        [
                            "kata_arab" => "جَوْلَةٌ",
                            "arti" => "Ronde",
                            "huruf" => array_unique(["جَ","وْ","لَ","ةٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 28')){
                    $data['materi'] = "Mufrodat 28";
                    $data['title'] = "الصِّفَاتُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 28");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "صَغِيْرٌ",
                            "arti" => "Kecil",
                            "huruf" => array_unique(["صَ","غِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "كَبِيْرٌ",
                            "arti" => "Besar",
                            "huruf" => array_unique(["كَ","بِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "قَبِيْحٌ",
                            "arti" => "Jelek",
                            "huruf" => array_unique(["قَ","بِ","يْ","حٌ"])
                        ],
                        [
                            "kata_arab" => "جَمِيْلٌ",
                            "arti" => "Bagus",
                            "huruf" => array_unique(["جَ","مِ","يْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "قَصِيْرٌ",
                            "arti" => "Pendek",
                            "huruf" => array_unique(["قَ","صِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "طَوِيْلٌ",
                            "arti" => "Panjang / tinggi",
                            "huruf" => array_unique(["طَ","وِ","يْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "وَسِخٌ",
                            "arti" => "Kotor",
                            "huruf" => array_unique(["وَ","سِ","خٌ"])
                        ],
                        [
                            "kata_arab" => "نَظِيْفٌ",
                            "arti" => "Bersih",
                            "huruf" => array_unique(["نَ","ظِ","يْ","فٌ"])
                        ],
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 29')){
                    $data['materi'] = "Mufrodat 29";
                    $data['title'] = "الصِّفَاتُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 29");
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
                            "kata_arab" => "بَطِيْءٌ",
                            "arti" => "Lambat",
                            "huruf" => array_unique(["بَ","طِ","يْ","ءٌ"])
                        ],
                        [
                            "kata_arab" => "سَرِيْعٌ",
                            "arti" => "Cepat",
                            "huruf" => array_unique(["سَ","رِ","يْ","عٌ"])
                        ],
                        [
                            "kata_arab" => "جَاهِلٌ",
                            "arti" => "Bodoh",
                            "huruf" => array_unique(["جَ","ا","هِ","لٌ"])
                        ],
                        [
                            "kata_arab" => "عَالِمٌ / مَاهِرٌ / ذَكِيٌّ",
                            "arti" => "Pintar",
                            "huruf" => array_unique(["ذَ","كِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "كَسْلَانُ",
                            "arti" => "Malas",
                            "huruf" => array_unique(["كَ","سْ","لَ","ا","نُ"])
                        ],
                        [
                            "kata_arab" => "مُجْتَهِدٌ / نَشِيْطٌ",
                            "arti" => "Rajin",
                            "huruf" => array_unique(["نَ","شِ","يْ","طٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 30')){
                    $data['materi'] = "Mufrodat 30";
                    $data['title'] = "الْحَيَوَانَاتُ ١";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 30");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "دِيْكٌ",
                            "arti" => "Ayam jago",
                            "huruf" => array_unique(["دِ","يْ","كٌ"])
                        ],
                        [
                            "kata_arab" => "دَجَاجَةٌ",
                            "arti" => "Ayam betina",
                            "huruf" => array_unique(["دَ","جَ","ا","جَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "بَطَّةٌ",
                            "arti" => "Bebek / itik",
                            "huruf" => array_unique(["بَ","طَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "طَيْرٌ",
                            "arti" => "Burung",
                            "huruf" => array_unique(["طَ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "غَنَمٌ",
                            "arti" => "Kambing",
                            "huruf" => array_unique(["غَ","نَ","مٌ"])
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
                            "kata_arab" => "جَمَلٌ",
                            "arti" => "Unta",
                            "huruf" => array_unique(["جَ","مَ","لٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 31')){
                    $data['materi'] = "Mufrodat 31";
                    $data['title'] = "الْحَيَوَانَاتُ ٢";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 31");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "هِرٌّ / قِطٌّ",
                            "arti" => "Kucing",
                            "huruf" => array_unique(["قِ","طٌّ"])
                        ],
                        [
                            "kata_arab" => "كَلْبٌ",
                            "arti" => "Anjing",
                            "huruf" => array_unique(["كَ","لْ","بٌ"])
                        ],
                        [
                            "kata_arab" => "قِرْدٌ",
                            "arti" => "Monyet",
                            "huruf" => array_unique(["قِ","رْ","دٌ"])
                        ],
                        [
                            "kata_arab" => "فِيْلٌ",
                            "arti" => "Gajah",
                            "huruf" => array_unique(["فِ","يْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "ثُعْبَانُ",
                            "arti" => "Ular",
                            "huruf" => array_unique(["ثُ","عْ","بَ","ا","نُ"])
                        ],
                        [
                            "kata_arab" => "نَمْلٌ (نَمْلَةٌ)",
                            "arti" => "Semut",
                            "huruf" => array_unique(["نَ","مْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "فَأْرٌ",
                            "arti" => "Tikus",
                            "huruf" => array_unique(["فَ","أْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "غُرَابٌ",
                            "arti" => "Burung gagak",
                            "huruf" => array_unique(["غُ","رَ","ا","بٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 32')){
                    $data['materi'] = "Mufrodat 32";
                    $data['title'] = "النَّبَاتَاتُ";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 32");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "شَجَرٌ (شَجَرَةٌ)",
                            "arti" => "Pohon",
                            "huruf" => array_unique(["شَ","جَ","رٌ"])
                        ],
                        [
                            "kata_arab" => "عُشْبٌ",
                            "arti" => "Rumput",
                            "huruf" => array_unique(["عُ","شْ","بٌ"])
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
                            "kata_arab" => "يَاسْمِيْن",
                            "arti" => "Melati",
                            "huruf" => array_unique(["يَ","ا","سْ","مِ","يْ","ن"])
                        ],
                        [
                            "kata_arab" => "أُشْنَةٌ",
                            "arti" => "Lumut",
                            "huruf" => array_unique(["أُ","شْ","نَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "صُبَارٌ",
                            "arti" => "Kaktus",
                            "huruf" => array_unique(["صُ","بَ","ا","رٌ"])
                        ],
                        [
                            "kata_arab" => "بَشْنِيْنْ",
                            "arti" => "Teratai",
                            "huruf" => array_unique(["بَ","شْ","نِ","يْ","نْ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 33')){
                    $data['materi'] = "Mufrodat 33";
                    $data['title'] = "الصِّفَاتُ ٣";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 33");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "رَخِيْصٌ",
                            "arti" => "Murah",
                            "huruf" => array_unique(["رَ","خِ","يْ","صٌ"])
                        ],
                        [
                            "kata_arab" => "غَالٍ",
                            "arti" => "Mahal",
                            "huruf" => array_unique(["غَ","ا","لٍ"])
                        ],
                        [
                            "kata_arab" => "ضَيِّقٌ",
                            "arti" => "Sempit",
                            "huruf" => array_unique(["ضَ","يِّ","قٌ"])
                        ],
                        [
                            "kata_arab" => "وَاسِعٌ",
                            "arti" => "Luas",
                            "huruf" => array_unique(["وَ","ا","سِ","عٌ"])
                        ],
                        [
                            "kata_arab" => "رَقِيْقٌ",
                            "arti" => "Tipis",
                            "huruf" => array_unique(["رَ","قِ","يْ","قٌ"])
                        ],
                        [
                            "kata_arab" => "ثَخِيْنٌ",
                            "arti" => "Tebal",
                            "huruf" => array_unique(["ثَ","خِ","يْ","نٌ"])
                        ],
                        [
                            "kata_arab" => "مُنْخَفِضٌ",
                            "arti" => "Rendah",
                            "huruf" => array_unique(["مُ","نْ","خَ","فِ","ضٌ"])
                        ],
                        [
                            "kata_arab" => "مُرْتَفِعٌ",
                            "arti" => "Tinggi",
                            "huruf" => array_unique(["مُ","رْ","تَ","فِ","عٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 34')){
                    $data['materi'] = "Mufrodat 34";
                    $data['title'] = "الصِّفَاتُ ٤";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 34");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "ضَعِيْفٌ",
                            "arti" => "Lemah",
                            "huruf" => array_unique(["ضَ","عِ","يْ","فٌ"])
                        ],
                        [
                            "kata_arab" => "قَوِيٌّ",
                            "arti" => "Kuat",
                            "huruf" => array_unique(["قَ","وِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "كَدِرٌ",
                            "arti" => "Keruh",
                            "huruf" => array_unique(["كَ","دِ","رٌ"])
                        ],
                        [
                            "kata_arab" => "صَافٍ",
                            "arti" => "Jernih",
                            "huruf" => array_unique(["صَ","ا","فٍ"])
                        ],
                        [
                            "kata_arab" => "ضَحْلٌ",
                            "arti" => "Dangkal",
                            "huruf" => array_unique(["ضَ","حْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "عَمِيْقٌ",
                            "arti" => "Dalam",
                            "huruf" => array_unique(["عَ","مِ","يْ","قٌ"])
                        ],
                        [
                            "kata_arab" => "مَبْلُوْلٌ / مُبْتَلٌّ",
                            "arti" => "Basah",
                            "huruf" => array_unique(["مُ","بْ","تَ","لٌّ"])
                        ],
                        [
                            "kata_arab" => "جَافٌّ",
                            "arti" => "Kering",
                            "huruf" => array_unique(["جَ","ا","فٌّ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 35')){
                    $data['materi'] = "Mufrodat 35";
                    $data['title'] = "الصِّفَاتُ ٥";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 35");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "سَهْلٌ",
                            "arti" => "Mudah",
                            "huruf" => array_unique(["سَ","هْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "صَعْبٌ",
                            "arti" => "Sulit",
                            "huruf" => array_unique(["صَ","عْ","بٌ"])
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
                            "kata_arab" => "مُتَكَبِّرٌ",
                            "arti" => "Sombong",
                            "huruf" => array_unique(["مُ","تَ","كَ","بِّ","رٌ"])
                        ],
                        [
                            "kata_arab" => "مُتَوَاضِعٌ",
                            "arti" => "Rendah hati",
                            "huruf" => array_unique(["مُ","تَ","وَ","ا","ضِ","عٌ"])
                        ],
                        [
                            "kata_arab" => "غَنِيٌّ",
                            "arti" => "Kaya",
                            "huruf" => array_unique(["غَ","نِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "مَذْمُوْمٌ",
                            "arti" => "Tercela",
                            "huruf" => array_unique(["مَ","ذْ","مُ","وْ","مٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 36')){
                    $data['materi'] = "Mufrodat 36";
                    $data['title'] = "الصِّفَاتُ ٦";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 36");
                    $data['mufrodat'] = [

                        [
                            "kata_arab" => "مَحْمُوْدٌ",
                            "arti" => "Terpuji",
                            "huruf" => array_unique(["مَ","حْ","مُ","وْ","دٌ"])
                        ],
                        [
                            "kata_arab" => "قَلِيْلٌ",
                            "arti" => "Sedikit",
                            "huruf" => array_unique(["قَ","لِ","يْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "كَثِيْرٌ",
                            "arti" => "Banyak",
                            "huruf" => array_unique(["كَ","ثِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "نَحِيْفٌ",
                            "arti" => "Kurus",
                            "huruf" => array_unique(["نَ","حِ","يْ","فٌ"])
                        ],
                        [
                            "kata_arab" => "سَمِيْنٌ",
                            "arti" => "Gemuk",
                            "huruf" => array_unique(["سَ","مِ","يْ","نٌ"])
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
                            "kata_arab" => "شُجَاعٌ",
                            "arti" => "Berani",
                            "huruf" => array_unique(["شُ","جَ","ا","عٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 37')){
                    $data['materi'] = "Mufrodat 37";
                    $data['title'] = "الصِّفَاتُ ٧";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 37");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "خَائِفٌ",
                            "arti" => "Takut",
                            "huruf" => array_unique(["خَ","ا","ئِ","فٌ"])
                        ],
                        [
                            "kata_arab" => "كَامِلٌ / تَامٌّ",
                            "arti" => "Sempurna",
                            "huruf" => array_unique(["كَ","ا","مِ","لٌ"])
                        ],
                        [
                            "kata_arab" => "نَاقِصٌ",
                            "arti" => "Kurang",
                            "huruf" => array_unique(["نَ","ا","قِ","صٌ"])
                        ],
                        [
                            "kata_arab" => "مُنَاسِبٌ",
                            "arti" => "Pantas",
                            "huruf" => array_unique(["مُ","نَ","ا","سِ","بٌ"])
                        ],
                        [
                            "kata_arab" => "صَالِحٌ",
                            "arti" => "Shalih",
                            "huruf" => array_unique(["صَ","ا","لِ","حٌ"])
                        ],
                        [
                            "kata_arab" => "مُهِمٌّ / ضَرُوْرِيٌّ",
                            "arti" => "Penting",
                            "huruf" => array_unique(["ضَ","رُ","وْ","رِ","يٌّ"])
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
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat 38')){
                    $data['materi'] = "Mufrodat 38";
                    $data['title'] = "الصِّفَاتُ ٨";
                    $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 38");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "نَافِعٌ",
                            "arti" => "Bermanfaat",
                            "huruf" => array_unique(["نَ","ا","فِ","عٌ"])
                        ],
                        [
                            "kata_arab" => "مُضِرٌّ",
                            "arti" => "Berbahaya",
                            "huruf" => array_unique(["مُ","ضِ","رٌّ"])
                        ],
                        [
                            "kata_arab" => "كَرِيْمٌ",
                            "arti" => "Mulia",
                            "huruf" => array_unique(["كَ","رِ","يْ","مٌ"])
                        ],
                        [
                            "kata_arab" => "حَسَنٌ",
                            "arti" => "Baik",
                            "huruf" => array_unique(["حَ","سَ","نٌ"])
                        ],
                        [
                            "kata_arab" => "سَيِّئٌ",
                            "arti" => "Buruk",
                            "huruf" => array_unique(["سَ","يِّ","ئٌ"])
                        ]
                    ];
                } else if($_GET['id'] == MD5('Mufrodat ')){
                    $data['materi'] = "Mufrodat ";
                    $data['title'] = "";
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
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 1");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "وَالِدٌ",
                            "arti" => "Ayah",
                            "huruf" => array_unique(["وَ","ا","لِ","دٌ"])
                        ],
                        [
                            "kata_arab" => "وَالِدَةٌ",
                            "arti" => "Ibu",
                            "huruf" => array_unique(["وَ","ا","لِ","دَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "جَدٌّ",
                            "arti" => "Kakek",
                            "huruf" => array_unique(["جَ","دٌّ","جَ","دَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "جَدَّةٌ",
                            "arti" => "Nenek",
                            "huruf" => array_unique(["جَ","دٌّ","جَ","دَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "زَوْجٌ",
                            "arti" => "Suami",
                            "huruf" => array_unique(["زَ","وْ","جٌ","زَ","وْ","جَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "زَوْجَةٌ",
                            "arti" => "Istri",
                            "huruf" => array_unique(["زَ","وْ","جٌ","زَ","وْ","جَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "أَخٌ",
                            "arti" => "Saudara (lk)",
                            "huruf" => array_unique(["أَ","خٌ","أُ","خْ","تٌ"])
                        ],
                        [
                            "kata_arab" => "أُخْتٌ",
                            "arti" => "Saudara (pr)",
                            "huruf" => array_unique(["أَ","خٌ","أُ","خْ","تٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 2')){
                    $data['materi'] = "Mufrodat 2";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 2");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "وَلَدٌ",
                            "arti" => "Anak (lk) / Putra",
                            "huruf" => array_unique(["وَ","لَ","دٌ"])
                        ],
                        [
                            "kata_arab" => "بِنْتٌ",
                            "arti" => "Anak (pr) / Putri",
                            "huruf" => array_unique(["بِ","نْ","تٌ"])
                        ],
                        [
                            "kata_arab" => "عَمٌّ",
                            "arti" => "Paman (dr Ayah)",
                            "huruf" => array_unique(["عَ","مٌّ","عَ","مَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "عَمَّةٌ",
                            "arti" => "Bibi (dr Ayah)",
                            "huruf" => array_unique(["عَ","مٌّ","عَ","مَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "خَالٌ",
                            "arti" => "Paman (dr Ibu)",
                            "huruf" => array_unique(["خَ","ا","لٌ","خَ","ا","لَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "خَالَةٌ",
                            "arti" => "Bibi (dr Ibu)",
                            "huruf" => array_unique(["خَ","ا","لٌ","خَ","ا","لَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "حَفِيْدٌ",
                            "arti" => "Cucu (lk)",
                            "huruf" => array_unique(["حَ","فِ","يْ","دٌ","حَ","فِ","يْ","دَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "حَفِيْدَةٌ",
                            "arti" => "Cucu (pr)",
                            "huruf" => array_unique(["حَ","فِ","يْ","دٌ","حَ","فِ","يْ","دَ","ةٌ"])
                        ],
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 3')){
                    $data['materi'] = "Mufrodat 3";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 3");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "بَدَنٌ",
                            "arti" => "Tubuh / Badan",
                            "huruf" => array_unique(["بَ","دَ","نٌ"])
                        ],
                        [
                            "kata_arab" => "رَأْسٌ",
                            "arti" => "Kepala",
                            "huruf" => array_unique(["رَ","أْ","سٌ"])
                        ],
                        [
                            "kata_arab" => "شَعْرٌ",
                            "arti" => "Rambut",
                            "huruf" => array_unique(["شَ","عْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "وَجْهٌ",
                            "arti" => "Wajah / Muka",
                            "huruf" => array_unique(["وَ","جْ","هٌ"])
                        ],
                        [
                            "kata_arab" => "عَيْنٌ",
                            "arti" => "Mata",
                            "huruf" => array_unique(["عَ","يْ","نٌ"])
                        ],
                        [
                            "kata_arab" => "أَنْفٌ",
                            "arti" => " Hidung",
                            "huruf" => array_unique(["أَ","نْ","فٌ"])
                        ],
                        [
                            "kata_arab" => "خَدٌّ",
                            "arti" => "Pipi",
                            "huruf" => array_unique(["خَ","دٌّ","فَ","مٌ"])
                        ],
                        [
                            "kata_arab" => "فَمٌ",
                            "arti" => "Mulut",
                            "huruf" => array_unique(["خَ","دٌّ","فَ","مٌ"])
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
                } else if($_GET['latihan'] == MD5('Mufrodat 4')){
                    $data['materi'] = "Mufrodat 4";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 4");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "لِسَانٌ",
                            "arti" => "Lidah / lisan",
                            "huruf" => array_unique(["لِ","سَ","ا","نٌ"])
                        ],
                        [
                            "kata_arab" => "أُذُنٌ",
                            "arti" => "Telinga",
                            "huruf" => array_unique(["أُ","ذُ","نٌ"])
                        ],
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
                            "kata_arab" => "رَقَبَةٌ",
                            "arti" => "Leher",
                            "huruf" => array_unique(["رَ","قَ","بَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "صَدْرٌ",
                            "arti" => "Dada",
                            "huruf" => array_unique(["صَ","دْ","رٌ"])
                        ],
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
                            "kata_arab" => "رِجْلٌ",
                            "arti" => "Kaki",
                            "huruf" => array_unique(["رِ","جْ","لٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 5')){
                    $data['materi'] = "Mufrodat 5";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 5");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "كِتَابٌ",
                            "arti" => "Buku",
                            "huruf" => array_unique(["كِ","تَ","ا","بٌ"])
                        ],
                        [
                            "kata_arab" => "دَفْتَرٌ",
                            "arti" => "Buku Tulis",
                            "huruf" => array_unique(["دَ","فْ","تَ","رٌ"])
                        ],
                        [
                            "kata_arab" => "مَجَلَّةٌ",
                            "arti" => "Majalah",
                            "huruf" => array_unique(["مَ","جَ","لَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "صَحِيْفَةٌ",
                            "arti" => "Koran",
                            "huruf" => array_unique(["صَ","حِ","يْ","فَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "إِمْتِحَانٌ",
                            "arti" => "Ujian",
                            "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ"])
                        ],
                        [
                            "kata_arab" => "مِقَصٌّ",
                            "arti" => "Gunting",
                            "huruf" => array_unique(["مِ","قَ","صٌّ"])
                        ],
                        [
                            "kata_arab" => "قَلَمٌ",
                            "arti" => "Pulpen / spidol",
                            "huruf" => array_unique(["قَ","لَ","مٌ"])
                        ],
                        [
                            "kata_arab" => "قَلَمُ الرَّصَاصِ",
                            "arti" => "Pensil",
                            "huruf" => array_unique(["قَ","لَ","مُ","-","ا","ل","رَّ","صَ","ا","صِ"])
                        ],
                        [
                            "kata_arab" => "تَوْقِيْعٌ",
                            "arti" => "Tanda tangan",
                            "huruf" => array_unique(["تَ","وْ","قِ","يْ","عٌ"])
                        ],
                        [
                            "kata_arab" => "مِمْسَحَةٌ",
                            "arti" => "Penghapus",
                            "huruf" => array_unique(["مِ","مْ","سَ","حَ","ةٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 6')){
                    $data['materi'] = "Mufrodat 6";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 6");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "طَبْشُوْرٌ",
                            "arti" => "Kapur",
                            "huruf" => array_unique(["طَ","بْ","شُ","وْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "قِرْطَاسٌ",
                            "arti" => "Kertas",
                            "huruf" => array_unique(["قِ","رْ","طَ","ا","سٌ"])
                        ],
                        [
                            "kata_arab" => "مِسْطَرَةٌ",
                            "arti" => "Penggaris",
                            "huruf" => array_unique(["مِ","سْ","طَ","رَ","ةٌ"])
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
                            "kata_arab" => "مَادَّةٌ",
                            "arti" => "Mata pelajaran",
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
                            "kata_arab" => "مُدَرِّسٌ",
                            "arti" => "Guru",
                            "huruf" => array_unique(["مُ","دَ","رِّ","سٌ"])
                        ],
                        [
                            "kata_arab" => "تَقْوِيْمٌ",
                            "arti" => "Kalender",
                            "huruf" => array_unique(["تَ","قْ","وِ","يْ",'مٌ'])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 7')){
                    $data['materi'] = "Mufrodat 7";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 7");
                    $data['mufrodat'] = [
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
                            "kata_arab" => "مِرْوَحَةٌ",
                            "arti" => "Kipas angin",
                            "huruf" => array_unique(["مِ","رْ","وَ","حَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مُكَيِّفٌ",
                            "arti" => "AC",
                            "huruf" => array_unique(["مُ","كَ","يِّ","فٌ"])
                        ],
                        [
                            "kata_arab" => "سَجَّادَةٌ",
                            "arti" => "Permadani",
                            "huruf" => array_unique(["سَ","جَّ","ا","دَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "حَصِيْرٌ",
                            "arti" => "Tikar",
                            "huruf" => array_unique(["حَ","صِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "تِلْفَازٌ",
                            "arti" => "Televisi",
                            "huruf" => array_unique(["تِ","لْ","فَ","ا","زٌ"])
                        ],
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 8')){
                    $data['materi'] = "Mufrodat 8";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 8");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "رَفٌّ",
                            "arti" => "Rak",
                            "huruf" => array_unique(["رَ","فٌّ"])
                        ],
                        [
                            "kata_arab" => "مِفْتَاحٌ",
                            "arti" => "Kunci",
                            "huruf" => array_unique(["مِ","فْ","تَ","ا","حٌ"])
                        ],
                        [
                            "kata_arab" => "مِكْوَاةٌ",
                            "arti" => "Setrika",
                            "huruf" => array_unique(["مِ","كْ","وَ","ا","ةٌ"])
                        ],
                        [
                            "kata_arab" => "هَاتِفٌ",
                            "arti" => "Telepon",
                            "huruf" => array_unique(["هَ","ا","تِ","فٌ"])
                        ],
                        [
                            "kata_arab" => "سِتَارٌ",
                            "arti" => "Gorden",
                            "huruf" => array_unique(["سِ","تَ","ا","رٌ"])
                        ],
                        [
                            "kata_arab" => "مِكْنَسَةٌ",
                            "arti" => "Sapu",
                            "huruf" => array_unique(["مِ","كْ","نَ","سَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مِرْآةٌ",
                            "arti" => "Cermin",
                            "huruf" => array_unique(["مِ","رْ","آ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "غَسَّالَةٌ",
                            "arti" => "Mesin cuci",
                            "huruf" => array_unique(["غَ","سَّ","ا","لَ","ةٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 9')){
                    $data['materi'] = "Mufrodat 9";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 9");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "طَعَامٌ",
                            "arti" => "Makanan",
                            "huruf" => array_unique(["طَ","عَ","ا","مٌ"])
                        ],
                        [
                            "kata_arab" => "شَرَابٌ",
                            "arti" => "Minuman",
                            "huruf" => array_unique(["شَ","رَ","ا","بٌ"])
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
                        ],
                        [
                            "kata_arab" => "مَسْلُوْقٌ",
                            "arti" => "Direbus",
                            "huruf" => array_unique(["مَ","سْ","لُ","وْ","قٌ"])
                        ],
                        [
                            "kata_arab" => "مَقْلِيٌّ",
                            "arti" => "Digoreng",
                            "huruf" => array_unique(["مَ","قْ","لِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "رُزٌّ",
                            "arti" => "Nasi",
                            "huruf" => array_unique(["رُ","زٌّ"])
                        ],
                        [
                            "kata_arab" => "بَيْضٌ",
                            "arti" => "Telur",
                            "huruf" => array_unique(["بَ","يْ","ضٌ"])
                        ],
                        [
                            "kata_arab" => "لَحْمٌ",
                            "arti" => "Daging",
                            "huruf" => array_unique(["لَ","حْ","مٌ"])
                        ],
                        [
                            "kata_arab" => "دَجَاجٌ",
                            "arti" => "Ayam",
                            "huruf" => array_unique(["دَ","جَ","ا","جٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 10')){
                    $data['materi'] = "Mufrodat 10";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 10");
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "سَمَكٌ",
                            "arti" => "Ikan",
                            "huruf" => array_unique(["سَ","مَ","كٌ"])
                        ],
                        [
                            "kata_arab" => "خُبْزٌ",
                            "arti" => "Roti",
                            "huruf" => array_unique(["خُ","بْ","زٌ"])
                        ],
                        [
                            "kata_arab" => "سُكَّرٌ",
                            "arti" => "Gula",
                            "huruf" => array_unique(["سُ","كَّ","رٌ"])
                        ],
                        [
                            "kata_arab" => "مِلْحٌ",
                            "arti" => "Garam",
                            "huruf" => array_unique(["مِ","لْ","حٌ"])
                        ],
                        [
                            "kata_arab" => "فَطُوْرٌ",
                            "arti" => "Sarapan",
                            "huruf" => array_unique(["فَ","طُ","وْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "ثَلْجٌ",
                            "arti" => "Es",
                            "huruf" => array_unique(["ثَ","لْ","جٌ"])
                        ],
                        [
                            "kata_arab" => "شَايٌ",
                            "arti" => "Teh",
                            "huruf" => array_unique(["شَ","ا","يٌ"])
                        ],
                        [
                            "kata_arab" => "قَهْوَةٌ",
                            "arti" => "Kopi",
                            "huruf" => array_unique(["قَ","هْ","وَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "لَبَنٌ",
                            "arti" => "Susu",
                            "huruf" => array_unique(["لَ","بَ","نٌ"])
                        ],
                        [
                            "kata_arab" => "عَصِيْرٌ",
                            "arti" => "Jus",
                            "huruf" => array_unique(["عَ","صِ","يْ","رٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 11')){
                    $data['materi'] = "Mufrodat 11";
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 11");
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
                            "kata_arab" => "تُفَّاحٌ",
                            "arti" => "Apel",
                            "huruf" => array_unique(["تُ","فَّ","ا","حٌ"])
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
                            "kata_arab" => "بُرْتُقَالٌ",
                            "arti" => "Jeruk",
                            "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 12')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 12");
                    $data['materi'] = "Mufrodat 12";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَانْغَا",
                            "arti" => "Mangga",
                            "huruf" => array_unique(["مَ","ا","نْ","غَ","ا"])
                        ],
                        [
                            "kata_arab" => "بِطِّيْخٌ",
                            "arti" => "Semangka",
                            "huruf" => array_unique(["بِ","طِّ","يْ","خٌ"])
                        ],
                        [
                            "kata_arab" => "طَمَاطِمُ",
                            "arti" => "Tomat",
                            "huruf" => array_unique(["طَ","مَ","ا","طِ","مُ"])
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
                        ],
                        [
                            "kata_arab" => "بَطَاطِسُ",
                            "arti" => "Kentang",
                            "huruf" => array_unique(["بَ","طَ","ا","طِ","سُ"])
                        ],
                        [
                            "kata_arab" => "خِيَارٌ",
                            "arti" => "Mentimun",
                            "huruf" => array_unique(["خِ","يَ","ا","رٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 13')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 13");
                    $data['materi'] = "Mufrodat 13";
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
                } else if($_GET['latihan'] == MD5('Mufrodat 14')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 14");
                    $data['materi'] = "Mufrodat 14";
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
                            "huruf" => array_unique(['حَ',"مْ","رَ","ا","ءُ"])
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
                } else if($_GET['latihan'] == MD5('Mufrodat 15')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 15");
                    $data['materi'] = "Mufrodat 15";
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
                } else if($_GET['latihan'] == MD5('Mufrodat 16')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 16");
                    $data['materi'] = "Mufrodat 16";
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
                            "kata_arab" => "هَرَمٌ",
                            "arti" => "Limas",
                            "huruf" => array_unique(["هَ","رَ","مٌ"])
                        ],
                        [
                            "kata_arab" => "مُسْتَقِيْمٌ",
                            "arti" => "Lurus",
                            "huruf" => array_unique(["مُ","سْ","تَ","قِ","يْ","مٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 17')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 17");
                    $data['materi'] = "Mufrodat 17";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مُتَوَازِيْ الْمُسْتَطِيْلَاتِ",
                            "arti" => "Balok",
                            "huruf" => array_unique(["ا","لْ","مُ","سْ","تَ","طِ","يْ","لَ","ا","تِ","مُ","تَ","وَ","ا","زِ","يْ","-"])
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
                } else if($_GET['latihan'] == MD5('Mufrodat 18')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 18");
                    $data['materi'] = "Mufrodat 18";
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
                            "kata_arab" => "شَرْقٌ",
                            "arti" => "Timur",
                            "huruf" => array_unique(["شَ","رْ","قٌ"])
                        ],
                        [
                            "kata_arab" => "غَرْبٌ",
                            "arti" => "Barat",
                            "huruf" => array_unique(["غَ","رْ","بٌ"])
                        ],
                        [
                            "kata_arab" => "شَمَالٌ شَرْقِيٌّ",
                            "arti" => "Timur laut",
                            "huruf" => array_unique(["شَ","مَ","ا","لٌ","-","شَ","رْ","قِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "جَنُوْبٌ غَرْبِيٌّ",
                            "arti" => "Barat daya",
                            "huruf" => array_unique(["جَ","نُ","وْ","بٌ","غَ","رْ","بِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "شَمَالٌ غَرْبِيٌّ",
                            "arti" => "Barat laut",
                            "huruf" => array_unique(["شَ","مَ","ا","لٌ","-","غَ","رْ","بِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "جَنُوْبٌ شَرْقِيٌّ",
                            "arti" => "Tenggara",
                            "huruf" => array_unique(["جَ","نُ","وْ","بٌ","شَ","رْ","قِ","يٌّ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 19')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 19");
                    $data['materi'] = "Mufrodat 19";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "الْجَوُّ",
                            "arti" => "Cuaca",
                            "huruf" => array_unique(["ا","لْ","جَ","وُّ"])
                        ],
                        [
                            "kata_arab" => "الْفَصْلُ",
                            "arti" => "Musim",
                            "huruf" => array_unique(["ا","لْ","فَ","صْ","لُ"])
                        ],
                        [
                            "kata_arab" => "فَصْلُ الشِّتَاءِ",
                            "arti" => "Musim dingin",
                            "huruf" => array_unique(["فَ","صْ","لُ","ا","ل","شِّ","تَ","ا","ءِ","-"])
                        ],
                        [
                            "kata_arab" => "فَصْلُ الصَّيْفِ",
                            "arti" => "Musim panas",
                            "huruf" => array_unique(["فَ","صْ","لُ","-","ا","ل","صَّ","يْ","فِ","-"])
                        ],
                        [
                            "kata_arab" => "فَصْلُ الرَّبِيْعِ",
                            "arti" => "Musim semi",
                            "huruf" => array_unique(["فَ","صْ","لُ","ا","ل","رَّ","بِ","يْ","عِ","-"])
                        ],
                        [
                            "kata_arab" => "فَصْلُ الْخَرِيْفِ",
                            "arti" => "Musim gugur",
                            "huruf" => array_unique(["فَ","صْ","لُ","-","ا","لْ","خَ","رِ","يْ","فِ"])
                        ],
                        [
                            "kata_arab" => "مَطَرٌ",
                            "arti" => "Hujan",
                            "huruf" => array_unique(["مَ","طَ","رٌ"])
                        ],
                        [
                            "kata_arab" => "تَحْتَ الصِّفْرِ",
                            "arti" => "Dibawah nol derajat",
                            "huruf" => array_unique(["تَ","حْ","تَ","-","ا","ل","صِّ","فْ","رِ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 20')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 20");
                    $data['materi'] = "Mufrodat 20";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "فَيَضَانُ",
                            "arti" => "Banjir",
                            "huruf" => array_unique(["فَ","يَ","ضَ","ا","نُ"])
                        ],
                        [
                            "kata_arab" => "صَحْوٌ",
                            "arti" => "Cerah",
                            "huruf" => array_unique(["صَ","حْ","وٌ"])
                        ],
                        [
                            "kata_arab" => "غَائِمٌ",
                            "arti" => "Berawan",
                            "huruf" => array_unique(["غَ","ا","ئِ","مٌ"])
                        ],
                        [
                            "kata_arab" => "بَرْقٌ",
                            "arti" => "Petir",
                            "huruf" => array_unique(["بَ","رْ","قٌ"])
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
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 21')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 21");
                    $data['materi'] = "Mufrodat 21";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَرَضٌ",
                            "arti" => "Sakit / penyakit",
                            "huruf" => array_unique(["مَ","رَ","ضٌ"])
                        ],
                        [
                            "kata_arab" => "أَمْرَاضٌ حِسِّيَّةٌ",
                            "arti" => "Alergi",
                            "huruf" => array_unique(["حِ","سِّ","يَّ","ةٌ","-","أَ","مْ","رَ","ا","ضٌ","-"])
                        ],
                        [
                            "kata_arab" => "مَرِيْضٌ",
                            "arti" => "Pasien (orang sakit)",
                            "huruf" => array_unique(["مَ","رِ","يْ","ضٌ"])
                        ],
                        [
                            "kata_arab" => "صَحِيْحٌ",
                            "arti" => "Sehat",
                            "huruf" => array_unique(["صَ","حِ","يْ","حٌ"])
                        ],
                        [
                            "kata_arab" => "صُدَاعٌ",
                            "arti" => "Sakit kepala",
                            "huruf" => array_unique(["صُ","دَ","ا","عٌ"])
                        ],
                        [
                            "kata_arab" => "وَجَعُ السِّنِّ",
                            "arti" => "Sakit gigi",
                            "huruf" => array_unique(["ا","ل","سِّ","نِّ","-","وَ","جَ","عُ"])
                        ],
                        [
                            "kata_arab" => "مَبْطُوْنٌ",
                            "arti" => "Sakit perut",
                            "huruf" => array_unique(["مَ","بْ","طُ","وْ","نٌ"])
                        ],
                        [
                            "kata_arab" => "إِسْهَالٌ",
                            "arti" => "Diare / mencret",
                            "huruf" => array_unique(["إِ","سْ","هَ","ا","لٌ"])
                        ],
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 22')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 22");
                    $data['materi'] = "Mufrodat 22";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَغْصٌ",
                            "arti" => "Mules",
                            "huruf" => array_unique(["مَ","غْ","صٌ"])
                        ],
                        [
                            "kata_arab" => "حُمَّى",
                            "arti" => "Demam",
                            "huruf" => array_unique(["حُ","مَّ","ى"])
                        ],
                        [
                            "kata_arab" => "زُكَامٌ",
                            "arti" => "Flu / pilek",
                            "huruf" => array_unique(["زُ","كَ","ا","مٌ"])
                        ],
                        [
                            "kata_arab" => "بَرْدٌ",
                            "arti" => "Masuk angin",
                            "huruf" => array_unique(["بَ","رْ","دٌ"])
                        ],
                        [
                            "kata_arab" => "سُعَالٌ",
                            "arti" => "Batuk",
                            "huruf" => array_unique(["سُ","عَ","ا","لٌ"])
                        ],
                        [
                            "kata_arab" => "حُكَّةٌ",
                            "arti" => "Gatal-gatal",
                            "huruf" => array_unique(["حُ","كَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "دَوَاءٌ",
                            "arti" => "Obat",
                            "huruf" => array_unique(["دَ","وَ","ا","ءٌ"])
                        ],
                        [
                            "kata_arab" => "مُنَمِّلَةٌ",
                            "arti" => "Kesemutan",
                            "huruf" => array_unique(["مُ","نَ","مِّ","لَ","ةٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 23')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 23");
                    $data['materi'] = "Mufrodat 23";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "سَيَّارَةٌ",
                            "arti" => "Mobil",
                            "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "حَافِلَةٌ",
                            "arti" => "Bis",
                            "huruf" => array_unique(["حَ","ا","فِ","لَ","ةٌ"])
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
                        ],
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
                            "kata_arab" => "تَذْكِرَةٌ",
                            "arti" => " Tiket",
                            "huruf" => array_unique(["تَ","ذْ","كِ","رَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مُسَافِرٌ",
                            "arti" => "Penumpang",
                            "huruf" => array_unique(["مُ","سَ","ا","فِ","رٌ"])
                        ],
                        [
                            "kata_arab" => "أُجْرَةُ السَّفَرِ",
                            "arti" => "Ongkos",
                            "huruf" => array_unique(["أُ","جْ","رَ","ةُ","-","ا","ل","سَّ","فَ","رِ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 24')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 24");
                    $data['materi'] = "Mufrodat 24";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "مَلَابِسُ / لِبَاسٌ",
                            "arti" => "Pakaian",
                            "huruf" => array_unique(["لِ","بَ","ا","سٌ"])
                        ],
                        [
                            "kata_arab" => "قَمِيْصٌ",
                            "arti" => "Kemeja",
                            "huruf" => array_unique(["قَ","مِ","يْ","صٌ"])
                        ],
                        [
                            "kata_arab" => "ثَوْبٌ",
                            "arti" => "Jubah",
                            "huruf" => array_unique(["ثَ","وْ","بٌ"])
                        ],
                        [
                            "kata_arab" => "فَانِلَّةٌ",
                            "arti" => "Kaos",
                            "huruf" => array_unique(["فَ","ا","نِ","لَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "سِرْوَالٌ",
                            "arti" => "Celana pendek",
                            "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ"])
                        ],
                        [
                            "kata_arab" => "بَنْطَلُوْنٌ",
                            "arti" => "Celana panjang",
                            "huruf" => array_unique(["بَ","نْ","طَ","لُ","وْ","نٌ"])
                        ],
                        [
                            "kata_arab" => "سِرْوَالٌ دَاخِلِيٌّ",
                            "arti" => "Celana dalam",
                            "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ","-","دَ","ا","خِ","لِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "فُسْتَانٌ",
                            "arti" => "Longdress",
                            "huruf" => array_unique(["فُ","سْ","تَ","ا","نٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 25')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 25");
                    $data['materi'] = "Mufrodat 25";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "جَاكِـتَّةٌ",
                            "arti" => "Jaket",
                            "huruf" => array_unique(["جَ","ا","كِ","تَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "حِزَامٌ",
                            "arti" => "Ikat pinggang",
                            "huruf" => array_unique(["حِ","زَ","ا","مٌ"])
                        ],
                        [
                            "kata_arab" => "نَعْلٌ",
                            "arti" => "Sandal",
                            "huruf" => array_unique(["نَ","عْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "حِذَاءٌ",
                            "arti" => "Sepatu",
                            "huruf" => array_unique(["حِ","ذَ","ا","ءٌ"])
                        ],
                        [
                            "kata_arab" => "قَلَنْسُوَةٌ",
                            "arti" => "Songkok",
                            "huruf" => array_unique(["قَ","لَ","نْ","سُ","وَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "إِزَارٌ",
                            "arti" => "Sarung",
                            "huruf" => array_unique(["إِ","زَ","ا","رٌ"])
                        ],
                        [
                            "kata_arab" => "جَوْرَبٌ",
                            "arti" => "Kaos kaki",
                            "huruf" => array_unique(["جَ","وْ","رَ","بٌ"])
                        ],
                        [
                            "kata_arab" => "خِمَارٌ",
                            "arti" => "Kerudung wanita",
                            "huruf" => array_unique(["خِ","مَ","ا","رٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 26')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 26");
                    $data['materi'] = "Mufrodat 26";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "رِيَاضَةٌ",
                            "arti" => "Olahraga",
                            "huruf" => array_unique(["رِ","يَ","ا","ضَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ الْقَدَمِ",
                            "arti" => "Sepak bola",
                            "huruf" => array_unique(["كُ","رَ","ةُ","-","ا","لْ","قَ","دَ","مِ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ الْيَدِ",
                            "arti" => "Bola voli",
                            "huruf" => array_unique(["كُ","رَ","ةُ","ا","لْ","يَ","دِ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ السَّلَّةِ",
                            "arti" => "Bola basket",
                            "huruf" => array_unique(["كُ","رَ","ةُ","-","ا","ل","سَّ","لَّ","ةِ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ الرِّيْشَةِ",
                            "arti" => "Badminton",
                            "huruf" => array_unique(["كُ","رَ","ةُ","-","ا","ل","رِّ","يْ","شَ","ةِ"])
                        ],
                        [
                            "kata_arab" => "كُرَةُ الطَّاوِلَةِ",
                            "arti" => "Tenis meja",
                            "huruf" => array_unique(["كُ","رَ","ةُ","-","ا","ل","طَّ","ا","وِ","لَ","ةِ"])
                        ],
                        [
                            "kata_arab" => "مُلَاكَمَةٌ",
                            "arti" => "Tinju",
                            "huruf" => array_unique(["مُ","لَ","ا","كَ","مَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "الشَّطْرَنْجُ",
                            "arti" => "Catur",
                            "huruf" => array_unique(["ا","ل","شَّ","طْ","رَ","نْ","جُ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 27')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 27");
                    $data['materi'] = "Mufrodat 27";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "سِبَاحَةٌ",
                            "arti" => "Renang",
                            "huruf" => array_unique(["سِ","بَ","ا","حَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مُبَارَاةٌ",
                            "arti" => "Pertandingan",
                            "huruf" => array_unique(["مُ","بَ","ا","رَ","ا","ةٌ"])
                        ],
                        [
                            "kata_arab" => "مَلْعَبٌ",
                            "arti" => "Stadion / lapangan",
                            "huruf" => array_unique(["مَ","لْ","عَ","بٌ"])
                        ],
                        [
                            "kata_arab" => "مِضْرَبٌ",
                            "arti" => "Raket",
                            "huruf" => array_unique(["مِ","ضْ","رَ","بٌ"])
                        ],
                        [
                            "kata_arab" => "كُرَةٌ",
                            "arti" => "Bola",
                            "huruf" => array_unique(["كُ","رَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "لَاعِبٌ",
                            "arti" => "Pemain",
                            "huruf" => array_unique(["لَ","ا","عِ","بٌ"])
                        ],
                        [
                            "kata_arab" => "حَاكِمٌ",
                            "arti" => "Wasit",
                            "huruf" => array_unique(["حَ","ا","كِ","مٌ"])
                        ],
                        [
                            "kata_arab" => "جَوْلَةٌ",
                            "arti" => "Ronde",
                            "huruf" => array_unique(["جَ","وْ","لَ","ةٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 28')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 28");
                    $data['materi'] = "Mufrodat 28";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "صَغِيْرٌ",
                            "arti" => "Kecil",
                            "huruf" => array_unique(["صَ","غِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "كَبِيْرٌ",
                            "arti" => "Besar",
                            "huruf" => array_unique(["كَ","بِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "قَبِيْحٌ",
                            "arti" => "Jelek",
                            "huruf" => array_unique(["قَ","بِ","يْ","حٌ"])
                        ],
                        [
                            "kata_arab" => "جَمِيْلٌ",
                            "arti" => "Bagus",
                            "huruf" => array_unique(["جَ","مِ","يْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "قَصِيْرٌ",
                            "arti" => "Pendek",
                            "huruf" => array_unique(["قَ","صِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "طَوِيْلٌ",
                            "arti" => "Panjang / tinggi",
                            "huruf" => array_unique(["طَ","وِ","يْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "وَسِخٌ",
                            "arti" => "Kotor",
                            "huruf" => array_unique(["وَ","سِ","خٌ"])
                        ],
                        [
                            "kata_arab" => "نَظِيْفٌ",
                            "arti" => "Bersih",
                            "huruf" => array_unique(["نَ","ظِ","يْ","فٌ"])
                        ],
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 29')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 29");
                    $data['materi'] = "Mufrodat 29";
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
                            "kata_arab" => "بَطِيْءٌ",
                            "arti" => "Lambat",
                            "huruf" => array_unique(["بَ","طِ","يْ","ءٌ"])
                        ],
                        [
                            "kata_arab" => "سَرِيْعٌ",
                            "arti" => "Cepat",
                            "huruf" => array_unique(["سَ","رِ","يْ","عٌ"])
                        ],
                        [
                            "kata_arab" => "جَاهِلٌ",
                            "arti" => "Bodoh",
                            "huruf" => array_unique(["جَ","ا","هِ","لٌ"])
                        ],
                        [
                            "kata_arab" => "عَالِمٌ / مَاهِرٌ / ذَكِيٌّ",
                            "arti" => "Pintar",
                            "huruf" => array_unique(["ذَ","كِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "كَسْلَانُ",
                            "arti" => "Malas",
                            "huruf" => array_unique(["كَ","سْ","لَ","ا","نُ"])
                        ],
                        [
                            "kata_arab" => "مُجْتَهِدٌ / نَشِيْطٌ",
                            "arti" => "Rajin",
                            "huruf" => array_unique(["نَ","شِ","يْ","طٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 30')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 30");
                    $data['materi'] = "Mufrodat 30";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "دِيْكٌ",
                            "arti" => "Ayam jago",
                            "huruf" => array_unique(["دِ","يْ","كٌ"])
                        ],
                        [
                            "kata_arab" => "دَجَاجَةٌ",
                            "arti" => "Ayam betina",
                            "huruf" => array_unique(["دَ","جَ","ا","جَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "بَطَّةٌ",
                            "arti" => "Bebek / itik",
                            "huruf" => array_unique(["بَ","طَّ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "طَيْرٌ",
                            "arti" => "Burung",
                            "huruf" => array_unique(["طَ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "غَنَمٌ",
                            "arti" => "Kambing",
                            "huruf" => array_unique(["غَ","نَ","مٌ"])
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
                            "kata_arab" => "جَمَلٌ",
                            "arti" => "Unta",
                            "huruf" => array_unique(["جَ","مَ","لٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 31')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 31");
                    $data['materi'] = "Mufrodat 31";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "هِرٌّ / قِطٌّ",
                            "arti" => "Kucing",
                            "huruf" => array_unique(["قِ","طٌّ"])
                        ],
                        [
                            "kata_arab" => "كَلْبٌ",
                            "arti" => "Anjing",
                            "huruf" => array_unique(["كَ","لْ","بٌ"])
                        ],
                        [
                            "kata_arab" => "قِرْدٌ",
                            "arti" => "Monyet",
                            "huruf" => array_unique(["قِ","رْ","دٌ"])
                        ],
                        [
                            "kata_arab" => "فِيْلٌ",
                            "arti" => "Gajah",
                            "huruf" => array_unique(["فِ","يْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "ثُعْبَانُ",
                            "arti" => "Ular",
                            "huruf" => array_unique(["ثُ","عْ","بَ","ا","نُ"])
                        ],
                        [
                            "kata_arab" => "نَمْلٌ (نَمْلَةٌ)",
                            "arti" => "Semut",
                            "huruf" => array_unique(["نَ","مْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "فَأْرٌ",
                            "arti" => "Tikus",
                            "huruf" => array_unique(["فَ","أْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "غُرَابٌ",
                            "arti" => "Burung gagak",
                            "huruf" => array_unique(["غُ","رَ","ا","بٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 32')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 32");
                    $data['materi'] = "Mufrodat 32";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "شَجَرٌ (شَجَرَةٌ)",
                            "arti" => "Pohon",
                            "huruf" => array_unique(["شَ","جَ","رٌ"])
                        ],
                        [
                            "kata_arab" => "عُشْبٌ",
                            "arti" => "Rumput",
                            "huruf" => array_unique(["عُ","شْ","بٌ"])
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
                            "kata_arab" => "يَاسْمِيْن",
                            "arti" => "Melati",
                            "huruf" => array_unique(["يَ","ا","سْ","مِ","يْ","ن"])
                        ],
                        [
                            "kata_arab" => "أُشْنَةٌ",
                            "arti" => "Lumut",
                            "huruf" => array_unique(["أُ","شْ","نَ","ةٌ"])
                        ],
                        [
                            "kata_arab" => "صُبَارٌ",
                            "arti" => "Kaktus",
                            "huruf" => array_unique(["صُ","بَ","ا","رٌ"])
                        ],
                        [
                            "kata_arab" => "بَشْنِيْنْ",
                            "arti" => "Teratai",
                            "huruf" => array_unique(["بَ","شْ","نِ","يْ","نْ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 33')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 33");
                    $data['materi'] = "Mufrodat 33";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "رَخِيْصٌ",
                            "arti" => "Murah",
                            "huruf" => array_unique(["رَ","خِ","يْ","صٌ"])
                        ],
                        [
                            "kata_arab" => "غَالٍ",
                            "arti" => "Mahal",
                            "huruf" => array_unique(["غَ","ا","لٍ"])
                        ],
                        [
                            "kata_arab" => "ضَيِّقٌ",
                            "arti" => "Sempit",
                            "huruf" => array_unique(["ضَ","يِّ","قٌ"])
                        ],
                        [
                            "kata_arab" => "وَاسِعٌ",
                            "arti" => "Luas",
                            "huruf" => array_unique(["وَ","ا","سِ","عٌ"])
                        ],
                        [
                            "kata_arab" => "رَقِيْقٌ",
                            "arti" => "Tipis",
                            "huruf" => array_unique(["رَ","قِ","يْ","قٌ"])
                        ],
                        [
                            "kata_arab" => "ثَخِيْنٌ",
                            "arti" => "Tebal",
                            "huruf" => array_unique(["ثَ","خِ","يْ","نٌ"])
                        ],
                        [
                            "kata_arab" => "مُنْخَفِضٌ",
                            "arti" => "Rendah",
                            "huruf" => array_unique(["مُ","نْ","خَ","فِ","ضٌ"])
                        ],
                        [
                            "kata_arab" => "مُرْتَفِعٌ",
                            "arti" => "Tinggi",
                            "huruf" => array_unique(["مُ","رْ","تَ","فِ","عٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 34')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 34");
                    $data['materi'] = "Mufrodat 34";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "ضَعِيْفٌ",
                            "arti" => "Lemah",
                            "huruf" => array_unique(["ضَ","عِ","يْ","فٌ"])
                        ],
                        [
                            "kata_arab" => "قَوِيٌّ",
                            "arti" => "Kuat",
                            "huruf" => array_unique(["قَ","وِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "كَدِرٌ",
                            "arti" => "Keruh",
                            "huruf" => array_unique(["كَ","دِ","رٌ"])
                        ],
                        [
                            "kata_arab" => "صَافٍ",
                            "arti" => "Jernih",
                            "huruf" => array_unique(["صَ","ا","فٍ"])
                        ],
                        [
                            "kata_arab" => "ضَحْلٌ",
                            "arti" => "Dangkal",
                            "huruf" => array_unique(["ضَ","حْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "عَمِيْقٌ",
                            "arti" => "Dalam",
                            "huruf" => array_unique(["عَ","مِ","يْ","قٌ"])
                        ],
                        [
                            "kata_arab" => "مَبْلُوْلٌ / مُبْتَلٌّ",
                            "arti" => "Basah",
                            "huruf" => array_unique(["مُ","بْ","تَ","لٌّ"])
                        ],
                        [
                            "kata_arab" => "جَافٌّ",
                            "arti" => "Kering",
                            "huruf" => array_unique(["جَ","ا","فٌّ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 35')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 35");
                    $data['materi'] = "Mufrodat 35";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "سَهْلٌ",
                            "arti" => "Mudah",
                            "huruf" => array_unique(["سَ","هْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "صَعْبٌ",
                            "arti" => "Sulit",
                            "huruf" => array_unique(["صَ","عْ","بٌ"])
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
                            "kata_arab" => "مُتَكَبِّرٌ",
                            "arti" => "Sombong",
                            "huruf" => array_unique(["مُ","تَ","كَ","بِّ","رٌ"])
                        ],
                        [
                            "kata_arab" => "مُتَوَاضِعٌ",
                            "arti" => "Rendah hati",
                            "huruf" => array_unique(["مُ","تَ","وَ","ا","ضِ","عٌ"])
                        ],
                        [
                            "kata_arab" => "غَنِيٌّ",
                            "arti" => "Kaya",
                            "huruf" => array_unique(["غَ","نِ","يٌّ"])
                        ],
                        [
                            "kata_arab" => "مَذْمُوْمٌ",
                            "arti" => "Tercela",
                            "huruf" => array_unique(["مَ","ذْ","مُ","وْ","مٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 36')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 36");
                    $data['materi'] = "Mufrodat 36";
                    $data['mufrodat'] = [

                        [
                            "kata_arab" => "مَحْمُوْدٌ",
                            "arti" => "Terpuji",
                            "huruf" => array_unique(["مَ","حْ","مُ","وْ","دٌ"])
                        ],
                        [
                            "kata_arab" => "قَلِيْلٌ",
                            "arti" => "Sedikit",
                            "huruf" => array_unique(["قَ","لِ","يْ","لٌ"])
                        ],
                        [
                            "kata_arab" => "كَثِيْرٌ",
                            "arti" => "Banyak",
                            "huruf" => array_unique(["كَ","ثِ","يْ","رٌ"])
                        ],
                        [
                            "kata_arab" => "نَحِيْفٌ",
                            "arti" => "Kurus",
                            "huruf" => array_unique(["نَ","حِ","يْ","فٌ"])
                        ],
                        [
                            "kata_arab" => "سَمِيْنٌ",
                            "arti" => "Gemuk",
                            "huruf" => array_unique(["سَ","مِ","يْ","نٌ"])
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
                            "kata_arab" => "شُجَاعٌ",
                            "arti" => "Berani",
                            "huruf" => array_unique(["شُ","جَ","ا","عٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 37')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 37");
                    $data['materi'] = "Mufrodat 37";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "خَائِفٌ",
                            "arti" => "Takut",
                            "huruf" => array_unique(["خَ","ا","ئِ","فٌ"])
                        ],
                        [
                            "kata_arab" => "كَامِلٌ / تَامٌّ",
                            "arti" => "Sempurna",
                            "huruf" => array_unique(["كَ","ا","مِ","لٌ"])
                        ],
                        [
                            "kata_arab" => "نَاقِصٌ",
                            "arti" => "Kurang",
                            "huruf" => array_unique(["نَ","ا","قِ","صٌ"])
                        ],
                        [
                            "kata_arab" => "مُنَاسِبٌ",
                            "arti" => "Pantas",
                            "huruf" => array_unique(["مُ","نَ","ا","سِ","بٌ"])
                        ],
                        [
                            "kata_arab" => "صَالِحٌ",
                            "arti" => "Shalih",
                            "huruf" => array_unique(["صَ","ا","لِ","حٌ"])
                        ],
                        [
                            "kata_arab" => "مُهِمٌّ / ضَرُوْرِيٌّ",
                            "arti" => "Penting",
                            "huruf" => array_unique(["ضَ","رُ","وْ","رِ","يٌّ"])
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
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat 38')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 38");
                    $data['materi'] = "Mufrodat 38";
                    $data['mufrodat'] = [
                        [
                            "kata_arab" => "نَافِعٌ",
                            "arti" => "Bermanfaat",
                            "huruf" => array_unique(["نَ","ا","فِ","عٌ"])
                        ],
                        [
                            "kata_arab" => "مُضِرٌّ",
                            "arti" => "Berbahaya",
                            "huruf" => array_unique(["مُ","ضِ","رٌّ"])
                        ],
                        [
                            "kata_arab" => "كَرِيْمٌ",
                            "arti" => "Mulia",
                            "huruf" => array_unique(["كَ","رِ","يْ","مٌ"])
                        ],
                        [
                            "kata_arab" => "حَسَنٌ",
                            "arti" => "Baik",
                            "huruf" => array_unique(["حَ","سَ","نٌ"])
                        ],
                        [
                            "kata_arab" => "سَيِّئٌ",
                            "arti" => "Buruk",
                            "huruf" => array_unique(["سَ","يِّ","ئٌ"])
                        ]
                    ];
                } else if($_GET['latihan'] == MD5('Mufrodat ')){
                    $data['redirect'] = "mufrodat?id=".MD5("Mufrodat ");
                    $data['materi'] = "Mufrodat ";
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

            // Mufrodat
                $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 1","الْأُسْرَةُ ١", "Anggota Keluarga", 8);
                $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 2","الْأُسْرَةُ ٢", "Anggota Keluarga", 8);
                $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 3","أَعْضَاءُ الْجِسْمِ ١", "Anggota Badan", 10);
                $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 4","أَعْضَاءُ الْجِسْمِ ٢", "Anggota Badan", 10);
                $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 5","الدِّرَاسَةُ وَ أَدَوَاتُهَا ١", "Perangkat Belajar", 10);
                $data['mufrodat'][6] = $this->latihan($id, "Mufrodat 6","الدِّرَاسَةُ وَ أَدَوَاتُهَا ٢", "Perangkat Belajar", 10);
                $data['mufrodat'][7] = $this->latihan($id, "Mufrodat 7","الْأَثَاثُ ١", "Perkakas Rumah", 8);
                $data['mufrodat'][8] = $this->latihan($id, "Mufrodat 8","الْأَثَاثُ ٢", "Perkakas Rumah", 8);
                $data['mufrodat'][9] = $this->latihan($id, "Mufrodat 9","الطَّعَامُ وَ الشَّرَابُ ١", "Makanan & Minuman", 10);
                $data['mufrodat'][10] = $this->latihan($id, "Mufrodat 10","الطَّعَامُ وَ الشَّرَابُ ٢", "Makanan & Minuman", 10);
                $data['mufrodat'][11] = $this->latihan($id, "Mufrodat 11","الْفَاكِهَةُ وَ الْخَضْرَوَاتُ ١", "Buah & Sayur", 8);
                $data['mufrodat'][12] = $this->latihan($id, "Mufrodat 12","الْفَاكِهَةُ وَ الْخَضْرَوَاتُ ٢", "Buah & Sayur", 8);
                $data['mufrodat'][13] = $this->latihan($id, "Mufrodat 13","الطَّعْمُ", "Rasa", 9);
                $data['mufrodat'][14] = $this->latihan($id, "Mufrodat 14","اللَّوْنُ ١", "Warna", 8);
                $data['mufrodat'][15] = $this->latihan($id, "Mufrodat 15","اللَّوْنُ ٢", "Warna", 8);
                $data['mufrodat'][16] = $this->latihan($id, "Mufrodat 16","الشَّكْلُ ١", "Bentuk", 8);
                $data['mufrodat'][17] = $this->latihan($id, "Mufrodat 17","الشَّكْلُ ٢", "Bentuk", 5);
                $data['mufrodat'][18] = $this->latihan($id, "Mufrodat 18","الْجَهَاتُ", "Arah Mata Angin", 8);
                $data['mufrodat'][19] = $this->latihan($id, "Mufrodat 19","الْجَوُّ وَ الْفَصْلُ ١", "Cuaca & Musim", 8);
                $data['mufrodat'][20] = $this->latihan($id, "Mufrodat 20","الْجَوُّ وَ الْفَصْلُ ٢", "Cuaca & Musim", 7);
                $data['mufrodat'][21] = $this->latihan($id, "Mufrodat 21","الْأَمْرَاضُ ١", "Penyakit", 8);
                $data['mufrodat'][22] = $this->latihan($id, "Mufrodat 22","الْأَمْرَاضُ ٢", "Penyakit", 8);
                $data['mufrodat'][23] = $this->latihan($id, "Mufrodat 23","وَسَائِلُ الْمُوَاصَلَاتِ", "Sarana Transportasi", 10);
                $data['mufrodat'][24] = $this->latihan($id, "Mufrodat 24","الْمَلَابِسُ ١", "Pakaian", 8);
                $data['mufrodat'][25] = $this->latihan($id, "Mufrodat 25","الْمَلَابِسُ ٢", "Pakaian", 8);
                $data['mufrodat'][26] = $this->latihan($id, "Mufrodat 26","الرِّيَاضَةُ ١", "Olahraga", 8);
                $data['mufrodat'][27] = $this->latihan($id, "Mufrodat 27","الرِّيَاضَةُ ٢", "Olahraga", 8);
                $data['mufrodat'][28] = $this->latihan($id, "Mufrodat 28","الصِّفَاتُ ١", "Kata Sifat", 8);
                $data['mufrodat'][29] = $this->latihan($id, "Mufrodat 29","الصِّفَاتُ ٢", "Kata Sifat", 8);
                $data['mufrodat'][30] = $this->latihan($id, "Mufrodat 30","الْحَيَوَانَاتُ ١", "Hewan-hewan", 8);
                $data['mufrodat'][31] = $this->latihan($id, "Mufrodat 31","الْحَيَوَانَاتُ ٢", "Hewan-hewan", 8);
                $data['mufrodat'][32] = $this->latihan($id, "Mufrodat 32","النَّبَاتَاتُ", "Tumbuhan", 8);
                $data['mufrodat'][33] = $this->latihan($id, "Mufrodat 33","الصِّفَاتُ ٣", "Kata Sifat", 8);
                $data['mufrodat'][34] = $this->latihan($id, "Mufrodat 34","الصِّفَاتُ ٤", "Kata Sifat", 8);
                $data['mufrodat'][35] = $this->latihan($id, "Mufrodat 35","الصِّفَاتُ ٥", "Kata Sifat", 8);
                $data['mufrodat'][36] = $this->latihan($id, "Mufrodat 36","الصِّفَاتُ ٦", "Kata Sifat", 8);
                $data['mufrodat'][37] = $this->latihan($id, "Mufrodat 37","الصِّفَاتُ ٧", "Kata Sifat", 8);
                $data['mufrodat'][38] = $this->latihan($id, "Mufrodat 38","الصِّفَاتُ ٨", "Kata Sifat", 5);
            // Mufrodat

            $this->load->view("templates/header-user", $data);
            $this->load->view("pelajaran/index-mufrodat", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }

    // add
        public function add_mufrodat(){
            $id = $this->session->userdata('id');
            $redirect = $this->input->post("redirect", TRUE);
            $latihan = $this->input->post("latihan", TRUE);
            $materi = $this->input->post("materi", TRUE);

            $cek = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "latihan" => $latihan, "materi" => $materi]);

            $data = [
                "latihan" => $latihan,
                "id_user" => $id,
                "materi" => $materi
            ];
            
            // var_dump($data);
            if(!$cek)
                $this->Admin_model->add_data("mufrodat", $data);

            redirect($redirect);
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