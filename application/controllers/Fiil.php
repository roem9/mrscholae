<?php 
    class Fiil extends CI_CONTROLLER{
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

            $data['title'] = "Pola Fiil";

            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/index", $data);
            $this->load->view("templates/footer-user", $data);
        }

        public function mudhori(){
            $id = $this->session->userdata("id");
            $data['title'] = "Pola Fi'il Mudhori";

            $kata = [
                ["id" => "1", "kata" => "فَتَحَ - يَفْتَحُ - اِفْتَحْ", "arti" => "Membuka", "latihan" => "Latihan 4"],
                ["id" => "2", "kata" => "عَلَّقَ - يُعَلِّقُ - عَلِّقْ", "arti" => "Menggantungkan", "latihan" => "Latihan 5"],
                ["id" => "3", "kata" => "جَلَسَ - يَجْلِسُ - اِجْلِسْ", "arti" => "Duduk", "latihan" => "Latihan 6"],
                ["id" => "4", "kata" => "ذَهَبَ - يَذْهَبُ - اِذْهَبْ", "arti" => "Pergi", "latihan" => "Latihan 7"],
                ["id" => "5", "kata" => "خَرَجَ - يَخْرُجُ - اُخْرُجْ", "arti" => "Keluar", "latihan" => "Latihan 8"],
                ["id" => "6", "kata" => "كَتَبَ - يَكْتُبُ - اُكْتُبْ", "arti" => "Menulis", "latihan" => "Latihan 9"],
                ["id" => "7", "kata" => "لَعِبَ - يَلْعَبُ - اِلْعَبْ", "arti" => "Bermain", "latihan" => "Latihan 10"],
                ["id" => "8", "kata" => "طَبَخَ - يَطْبَخُ - اِطْبَخْ", "arti" => "Memasak", "latihan" => "Latihan 11"],
                ["id" => "9", "kata" => "نَظَّفَ - يُنَظِّفُ - نَظِّفْ", "arti" => "Membersihkan", "latihan" => "Latihan 12"],
                ["id" => "10", "kata" => "طَرَقَ - يَطْرُقُ - اُطْرُقْ", "arti" => "Mengetuk", "latihan" => "Latihan 13"],
                ["id" => "11", "kata" => "كَنَسَ - يَكْنُسُ - اُكْنُسْ", "arti" => "Menyapu", "latihan" => "Latihan 14"],
                ["id" => "12", "kata" => "أَشْعَلَ - يُشْعِلُ - اَشْعِلْ", "arti" => "Menyalakan", "latihan" => "Latihan 15"],
                ["id" => "13", "kata" => "رَتَّبَ - يُرَتِّبُ - رَتِّبْ", "arti" => "Merapikan", "latihan" => "Latihan 16"],
                ["id" => "14", "kata" => "سَقَطَ - يَسْقُطُ - اُسْقُطْ", "arti" => "Jatuh", "latihan" => "Latihan 17"],
                ["id" => "15", "kata" => "جَمَعَ - يَجْمَعُ - اِجْمَعْ", "arti" => "Mengumpulkan", "latihan" => "Latihan 18"],
                ["id" => "16", "kata" => "رَجَعَ - يَرْجِعُ - اِرْجِعْ", "arti" => "Kembali", "latihan" => "Latihan 19"],
                ["id" => "17", "kata" => "إِدَّخَرَ - يَدَّخِرُ - اِدَّخِرْ", "arti" => "Menabung", "latihan" => "Latihan 20"],
                ["id" => "18", "kata" => "إِحْتَرَمَ - يَحْتَرِمُ - اِحْتَرِمْ", "arti" => "Memuliakan", "latihan" => "Latihan 21"],
                ["id" => "19", "kata" => "طَلَبَ - يَطْلُبُ - اُطْلُبْ", "arti" => "Meminta", "latihan" => "Latihan 22"],
                ["id" => "20", "kata" => "لَبِسَ - يَلْبَسُ - اِلْبَسْ", "arti" => "Memakai (Pakaian)", "latihan" => "Latihan 23"],
                ["id" => "21", "kata" => "رَكِبَ - يَرْكَبُ - اِرْكَبْ", "arti" => "Mengendarai", "latihan" => "Latihan 24"],
                ["id" => "22", "kata" => "قَسَّمَ - يُقَسِّمُ - قَسِّمْ", "arti" => "Membagi", "latihan" => "Latihan 25"],
                ["id" => "23", "kata" => "حَرَقَ - يَحْرُقُ - اُحْرُقْ", "arti" => "Membakar", "latihan" => "Latihan 26"],
                ["id" => "24", "kata" => "سَاعَدَ - يُسَاعِدُ - سَاعِدْ", "arti" => "Menolong", "latihan" => "Latihan 27"],
                ["id" => "25", "kata" => "حَمَلَ - يَحْمِلُ - اِحْمِلْ", "arti" => "Membawa", "latihan" => "Latihan 28"],
                ["id" => "26", "kata" => "تَكَلَّمَ - يَتَكَلَّمُ - تَكَلَّمْ", "arti" => "Berbicara", "latihan" => "Latihan 29"],
                ["id" => "27", "kata" => "سَمِعَ - يَسْمَعُ - اِسْمَعْ", "arti" => "Mendengar", "latihan" => "Latihan 30"],
                ["id" => "28", "kata" => "حَفِظَ - يَحْفَظُ - اِحْفَظْ", "arti" => "Menghafal / Menjaga", "latihan" => "Latihan 31"],
                ["id" => "29", "kata" => "اِتَّجَهَ - يَتَّجِهُ - اِتَّجِهْ", "arti" => "Menghadap", "latihan" => "Latihan 32"],
                ["id" => "30", "kata" => "اِسْتَيْقَظَ - يَسْتَيْقِظُ - اِسْتَيْقِظْ", "arti" => "Bangun", "latihan" => "Latihan 33"]
            ];

            foreach ($kata as $i => $kata) {
                $data['kata'][$i] = $kata;
                $status = $this->Arab_model->get_latihan_by_id_user_latihan($id, $kata['latihan']);
                if($status){
                    $data['kata'][$i]['status'] = 'on';
                } else {
                    $data['kata'][$i]['status'] = 'off';
                }
            }
            
            usort($data['kata'], function($a, $b) {
                return $a['status'] <=> $b['status'];
            });

            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/mudhori", $data);
            $this->load->view("templates/footer-user", $data);

        }

        public function latihanmudhori(){
            $id = $this->session->userdata("id");
            $data['title'] = "Latihan Fi'il Mudhori";

            $kata = str_replace(" ", "", $this->input->post("kata"));
            $latihan = $this->input->post("latihan");

            $kata = explode("-", $kata);

            $data['kata_dasar'] = $this->input->post("kata");
            if($this->input->post("kata")){
                $data['kata'] = $kata[1];
            }
            $data['id'] = $this->input->post("id");
            $data['arti'] = $this->input->post("arti");
            $data['latih'] = $latihan;
            
            $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_latihan($id, $latihan);
                
            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/latihan-mudhori", $data);
            $this->load->view("templates/footer-user", $data);
        }
        
        public function madhi(){
            $id = $this->session->userdata("id");
            $data['title'] = "Pola Fi'il Madhi";

            $kata = [
                ["id" => "1", "kata" => "فَتَحَ - يَفْتَحُ - اِفْتَحْ", "arti" => "Membuka", "latihan" => "Latihan 34"],
                ["id" => "2", "kata" => "عَلَّقَ - يُعَلِّقُ - عَلِّقْ", "arti" => "Menggantungkan", "latihan" => "Latihan 35"],
                ["id" => "3", "kata" => "جَلَسَ - يَجْلِسُ - اِجْلِسْ", "arti" => "Duduk", "latihan" => "Latihan 36"],
                ["id" => "4", "kata" => "ذَهَبَ - يَذْهَبُ - اِذْهَبْ", "arti" => "Pergi", "latihan" => "Latihan 37"],
                ["id" => "5", "kata" => "خَرَجَ - يَخْرُجُ - اُخْرُجْ", "arti" => "Keluar", "latihan" => "Latihan 38"],
                ["id" => "6", "kata" => "كَتَبَ - يَكْتُبُ - اُكْتُبْ", "arti" => "Menulis", "latihan" => "Latihan 39"],
                ["id" => "7", "kata" => "لَعِبَ - يَلْعَبُ - اِلْعَبْ", "arti" => "Bermain", "latihan" => "Latihan 40"],
                ["id" => "8", "kata" => "طَبَخَ - يَطْبَخُ - اِطْبَخْ", "arti" => "Memasak", "latihan" => "Latihan 41"],
                ["id" => "9", "kata" => "نَظَّفَ - يُنَظِّفُ - نَظِّفْ", "arti" => "Membersihkan", "latihan" => "Latihan 42"],
                ["id" => "10", "kata" => "طَرَقَ - يَطْرُقُ - اُطْرُقْ", "arti" => "Mengetuk", "latihan" => "Latihan 43"],
                ["id" => "11", "kata" => "كَنَسَ - يَكْنُسُ - اُكْنُسْ", "arti" => "Menyapu", "latihan" => "Latihan 44"],
                ["id" => "12", "kata" => "أَشْعَلَ - يُشْعِلُ - اَشْعِلْ", "arti" => "Menyalakan", "latihan" => "Latihan 45"],
                ["id" => "13", "kata" => "رَتَّبَ - يُرَتِّبُ - رَتِّبْ", "arti" => "Merapikan", "latihan" => "Latihan 46"],
                ["id" => "14", "kata" => "سَقَطَ - يَسْقُطُ - اُسْقُطْ", "arti" => "Jatuh", "latihan" => "Latihan 47"],
                ["id" => "15", "kata" => "جَمَعَ - يَجْمَعُ - اِجْمَعْ", "arti" => "Mengumpulkan", "latihan" => "Latihan 48"],
                ["id" => "16", "kata" => "رَجَعَ - يَرْجِعُ - اِرْجِعْ", "arti" => "Kembali", "latihan" => "Latihan 49"],
                ["id" => "17", "kata" => "إِدَّخَرَ - يَدَّخِرُ - اِدَّخِرْ", "arti" => "Menabung", "latihan" => "Latihan 50"],
                ["id" => "18", "kata" => "إِحْتَرَمَ - يَحْتَرِمُ - اِحْتَرِمْ", "arti" => "Memuliakan", "latihan" => "Latihan 51"],
                ["id" => "19", "kata" => "طَلَبَ - يَطْلُبُ - اُطْلُبْ", "arti" => "Meminta", "latihan" => "Latihan 52"],
                ["id" => "20", "kata" => "لَبِسَ - يَلْبَسُ - اِلْبَسْ", "arti" => "Memakai (Pakaian)", "latihan" => "Latihan 53"],
                ["id" => "21", "kata" => "رَكِبَ - يَرْكَبُ - اِرْكَبْ", "arti" => "Mengendarai", "latihan" => "Latihan 54"],
                ["id" => "22", "kata" => "قَسَّمَ - يُقَسِّمُ - قَسِّمْ", "arti" => "Membagi", "latihan" => "Latihan 55"],
                ["id" => "23", "kata" => "حَرَقَ - يَحْرُقُ - اُحْرُقْ", "arti" => "Membakar", "latihan" => "Latihan 56"],
                ["id" => "24", "kata" => "سَاعَدَ - يُسَاعِدُ - سَاعِدْ", "arti" => "Menolong", "latihan" => "Latihan 57"],
                ["id" => "25", "kata" => "حَمَلَ - يَحْمِلُ - اِحْمِلْ", "arti" => "Membawa", "latihan" => "Latihan 58"],
                ["id" => "26", "kata" => "تَكَلَّمَ - يَتَكَلَّمُ - تَكَلَّمْ", "arti" => "Berbicara", "latihan" => "Latihan 59"],
                ["id" => "27", "kata" => "سَمِعَ - يَسْمَعُ - اِسْمَعْ", "arti" => "Mendengar", "latihan" => "Latihan 60"],
                ["id" => "28", "kata" => "حَفِظَ - يَحْفَظُ - اِحْفَظْ", "arti" => "Menghafal / Menjaga", "latihan" => "Latihan 61"],
                ["id" => "29", "kata" => "اِتَّجَهَ - يَتَّجِهُ - اِتَّجِهْ", "arti" => "Menghadap", "latihan" => "Latihan 62"],
                ["id" => "30", "kata" => "اِسْتَيْقَظَ - يَسْتَيْقِظُ - اِسْتَيْقِظْ", "arti" => "Bangun", "latihan" => "Latihan 63"]
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

            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/madhi", $data);
            $this->load->view("templates/footer-user", $data);

        }
        
        public function latihanmadhi(){
            $id = $this->session->userdata("id");
            $data['title'] = "Latihan Fi'il Madhi";

            $kata = str_replace(" ", "", $this->input->post("kata"));
            $latihan = $this->input->post("latihan");

            $kata = explode("-", $kata);

            $data['kata_dasar'] = $this->input->post("kata");
            if($this->input->post("kata")){
                $data['kata'] = $kata[0];
            }
            $data['id'] = $this->input->post("id");
            $data['arti'] = $this->input->post("arti");
            $data['latih'] = $latihan;
            
            $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_id_materi_latihan($id, "3", $latihan);
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/awwal/fiil/latihan-madhi", $data);
                $this->load->view("templates/footer-user", $data);
        }
        
        public function amr(){
            $id = $this->session->userdata("id");
            $data['title'] = "Pola Fi'il Amr";

            $kata = [
                ["id" => "1", "kata" => "فَتَحَ - يَفْتَحُ - اِفْتَحْ", "arti" => "Membuka", "latihan" => "Latihan 64"],
                ["id" => "2", "kata" => "عَلَّقَ - يُعَلِّقُ - عَلِّقْ", "arti" => "Menggantungkan", "latihan" => "Latihan 65"],
                ["id" => "3", "kata" => "جَلَسَ - يَجْلِسُ - اِجْلِسْ", "arti" => "Duduk", "latihan" => "Latihan 66"],
                ["id" => "4", "kata" => "ذَهَبَ - يَذْهَبُ - اِذْهَبْ", "arti" => "Pergi", "latihan" => "Latihan 67"],
                ["id" => "5", "kata" => "خَرَجَ - يَخْرُجُ - اُخْرُجْ", "arti" => "Keluar", "latihan" => "Latihan 68"],
                ["id" => "6", "kata" => "كَتَبَ - يَكْتُبُ - اُكْتُبْ", "arti" => "Menulis", "latihan" => "Latihan 69"],
                ["id" => "7", "kata" => "لَعِبَ - يَلْعَبُ - اِلْعَبْ", "arti" => "Bermain", "latihan" => "Latihan 70"],
                ["id" => "8", "kata" => "طَبَخَ - يَطْبَخُ - اِطْبَخْ", "arti" => "Memasak", "latihan" => "Latihan 71"],
                ["id" => "9", "kata" => "نَظَّفَ - يُنَظِّفُ - نَظِّفْ", "arti" => "Membersihkan", "latihan" => "Latihan 72"],
                ["id" => "10", "kata" => "طَرَقَ - يَطْرُقُ - اُطْرُقْ", "arti" => "Mengetuk", "latihan" => "Latihan 73"],
                ["id" => "11", "kata" => "كَنَسَ - يَكْنُسُ - اُكْنُسْ", "arti" => "Menyapu", "latihan" => "Latihan 74"],
                ["id" => "12", "kata" => "أَشْعَلَ - يُشْعِلُ - اَشْعِلْ", "arti" => "Menyalakan", "latihan" => "Latihan 75"],
                ["id" => "13", "kata" => "رَتَّبَ - يُرَتِّبُ - رَتِّبْ", "arti" => "Merapikan", "latihan" => "Latihan 76"],
                ["id" => "14", "kata" => "سَقَطَ - يَسْقُطُ - اُسْقُطْ", "arti" => "Jatuh", "latihan" => "Latihan 77"],
                ["id" => "15", "kata" => "جَمَعَ - يَجْمَعُ - اِجْمَعْ", "arti" => "Mengumpulkan", "latihan" => "Latihan 78"],
                ["id" => "16", "kata" => "رَجَعَ - يَرْجِعُ - اِرْجِعْ", "arti" => "Kembali", "latihan" => "Latihan 79"],
                ["id" => "17", "kata" => "إِدَّخَرَ - يَدَّخِرُ - اِدَّخِرْ", "arti" => "Menabung", "latihan" => "Latihan 60"],
                ["id" => "18", "kata" => "إِحْتَرَمَ - يَحْتَرِمُ - اِحْتَرِمْ", "arti" => "Memuliakan", "latihan" => "Latihan 61"],
                ["id" => "19", "kata" => "طَلَبَ - يَطْلُبُ - اُطْلُبْ", "arti" => "Meminta", "latihan" => "Latihan 62"],
                ["id" => "20", "kata" => "لَبِسَ - يَلْبَسُ - اِلْبَسْ", "arti" => "Memakai (Pakaian)", "latihan" => "Latihan 63"],
                ["id" => "21", "kata" => "رَكِبَ - يَرْكَبُ - اِرْكَبْ", "arti" => "Mengendarai", "latihan" => "Latihan 64"],
                ["id" => "22", "kata" => "قَسَّمَ - يُقَسِّمُ - قَسِّمْ", "arti" => "Membagi", "latihan" => "Latihan 65"],
                ["id" => "23", "kata" => "حَرَقَ - يَحْرُقُ - اُحْرُقْ", "arti" => "Membakar", "latihan" => "Latihan 66"],
                ["id" => "24", "kata" => "سَاعَدَ - يُسَاعِدُ - سَاعِدْ", "arti" => "Menolong", "latihan" => "Latihan 67"],
                ["id" => "25", "kata" => "حَمَلَ - يَحْمِلُ - اِحْمِلْ", "arti" => "Membawa", "latihan" => "Latihan 68"],
                ["id" => "26", "kata" => "تَكَلَّمَ - يَتَكَلَّمُ - تَكَلَّمْ", "arti" => "Berbicara", "latihan" => "Latihan 69"],
                ["id" => "27", "kata" => "سَمِعَ - يَسْمَعُ - اِسْمَعْ", "arti" => "Mendengar", "latihan" => "Latihan 70"],
                ["id" => "28", "kata" => "حَفِظَ - يَحْفَظُ - اِحْفَظْ", "arti" => "Menghafal / Menjaga", "latihan" => "Latihan 71"],
                ["id" => "29", "kata" => "اِتَّجَهَ - يَتَّجِهُ - اِتَّجِهْ", "arti" => "Menghadap", "latihan" => "Latihan 72"],
                ["id" => "30", "kata" => "اِسْتَيْقَظَ - يَسْتَيْقِظُ - اِسْتَيْقِظْ", "arti" => "Bangun", "latihan" => "Latihan 73"]
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

            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/amr", $data);
            $this->load->view("templates/footer-user", $data);
        }
        
        public function latihanamr(){
            $id = $this->session->userdata("id");
            $data['title'] = "Latihan Fi'il Amr";

            $kata = str_replace(" ", "", $this->input->post("kata"));
            $latihan = $this->input->post("latihan");

            $kata = explode("-", $kata);

            $data['kata_dasar'] = $this->input->post("kata");
            if($this->input->post("kata")){
                $data['kata'] = $kata[2];
            }
            $data['id'] = $this->input->post("id");
            $data['arti'] = $this->input->post("arti");
            $data['latih'] = $latihan;
            
            $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_id_materi_latihan($id, "3", $latihan);
                
            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/latihan-amr", $data);
            $this->load->view("templates/footer-user", $data);
        }
        // other function
            public function pesan_error($data){
                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/pesanerror", $data);
                $this->load->view("templates/footer-user", $data);
            }
        // other function
    }