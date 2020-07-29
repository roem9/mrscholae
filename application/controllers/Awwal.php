<?php 
class Awwal extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        $this->load->model("Admin_model");
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login/user"));
        }
    }

    public function index(){
        $id = $this->session->userdata('id');

        $data['title'] = "Mustawa Awwal";
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['kelas'] = $this->Admin_model->get_one("kelas", ["id_kelas" => $data['user']['id_kelas']]);

        $this->load->view("templates/header-user", $data);
        $this->load->view("materi/awwal/index", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function dhomir($text = ""){
        $id = $this->session->userdata('id');
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['kelas'] = $this->Admin_model->get_one("kelas", ["id_kelas" => $data['user']['id_kelas']]);
        if($text == "muttashil"){
    
            $data['title'] = "Dhomir Muttasil";
            
            $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, "Latihan 2", "dhomir");
    
            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/dhomir/dhomir-muttasil", $data);
            $this->load->view("templates/footer-user", $data);
        } else if($text == "munfashil"){
    
            $data['title'] = "Dhomir Munfashil";
            
            $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, "Latihan 1", "dhomir");
    
            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/dhomir/dhomir-munfashil", $data);
            $this->load->view("templates/footer-user", $data);
        } else {
            $id = $this->session->userdata('id');
    
            $data['title'] = "Dhomir";
            
            $data['latihan'][0] = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, "Latihan 1", "dhomir");
            $data['latihan'][1] = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, "Latihan 2", "dhomir");
    
            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/dhomir/index", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }

    public function fiil($text = ""){
        $id = $this->session->userdata("id");
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['kelas'] = $this->Admin_model->get_one("kelas", ["id_kelas" => $data['user']['id_kelas']]);
        if($text == ""){
            $data['title'] = "Pola Fiil";

            $data['mudhori'] = COUNT($this->Arab_model->get_latihan_by_id_user_by_materi($id, "mudhori"));
            $data['madhi'] = COUNT($this->Arab_model->get_latihan_by_id_user_by_materi($id, "madhi"));
            $data['amr'] = COUNT($this->Arab_model->get_latihan_by_id_user_by_materi($id, "amr"));

            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/index", $data);
            $this->load->view("templates/footer-user", $data);
        } else if($text == "mudhori"){
            $data['title'] = "Pola Fi'il Mudhori";

            $kata = [
                ["id" => "1", "kata" => "فَتَحَ - يَفْتَحُ - اِفْتَحْ", "arti" => "Membuka", "latihan" => "Latihan 1"],
                ["id" => "2", "kata" => "عَلَّقَ - يُعَلِّقُ - عَلِّقْ", "arti" => "Menggantungkan", "latihan" => "Latihan 2"],
                ["id" => "3", "kata" => "جَلَسَ - يَجْلِسُ - اِجْلِسْ", "arti" => "Duduk", "latihan" => "Latihan 3"],
                ["id" => "4", "kata" => "ذَهَبَ - يَذْهَبُ - اِذْهَبْ", "arti" => "Pergi", "latihan" => "Latihan 4"],
                ["id" => "5", "kata" => "خَرَجَ - يَخْرُجُ - اُخْرُجْ", "arti" => "Keluar", "latihan" => "Latihan 5"],
                ["id" => "6", "kata" => "كَتَبَ - يَكْتُبُ - اُكْتُبْ", "arti" => "Menulis", "latihan" => "Latihan 6"],
                ["id" => "7", "kata" => "لَعِبَ - يَلْعَبُ - اِلْعَبْ", "arti" => "Bermain", "latihan" => "Latihan 7"],
                ["id" => "8", "kata" => "طَبَخَ - يَطْبَخُ - اِطْبَخْ", "arti" => "Memasak", "latihan" => "Latihan 8"],
                ["id" => "9", "kata" => "نَظَّفَ - يُنَظِّفُ - نَظِّفْ", "arti" => "Membersihkan", "latihan" => "Latihan 9"],
                ["id" => "10", "kata" => "طَرَقَ - يَطْرُقُ - اُطْرُقْ", "arti" => "Mengetuk", "latihan" => "Latihan 10"],
                ["id" => "11", "kata" => "كَنَسَ - يَكْنُسُ - اُكْنُسْ", "arti" => "Menyapu", "latihan" => "Latihan 11"],
                ["id" => "12", "kata" => "أَشْعَلَ - يُشْعِلُ - اَشْعِلْ", "arti" => "Menyalakan", "latihan" => "Latihan 12"],
                ["id" => "13", "kata" => "رَتَّبَ - يُرَتِّبُ - رَتِّبْ", "arti" => "Merapikan", "latihan" => "Latihan 13"],
                ["id" => "14", "kata" => "سَقَطَ - يَسْقُطُ - اُسْقُطْ", "arti" => "Jatuh", "latihan" => "Latihan 14"],
                ["id" => "15", "kata" => "جَمَعَ - يَجْمَعُ - اِجْمَعْ", "arti" => "Mengumpulkan", "latihan" => "Latihan 15"],
                ["id" => "16", "kata" => "رَجَعَ - يَرْجِعُ - اِرْجِعْ", "arti" => "Kembali", "latihan" => "Latihan 16"],
                ["id" => "17", "kata" => "إِدَّخَرَ - يَدَّخِرُ - اِدَّخِرْ", "arti" => "Menabung", "latihan" => "Latihan 17"],
                ["id" => "18", "kata" => "إِحْتَرَمَ - يَحْتَرِمُ - اِحْتَرِمْ", "arti" => "Memuliakan", "latihan" => "Latihan 18"],
                ["id" => "19", "kata" => "طَلَبَ - يَطْلُبُ - اُطْلُبْ", "arti" => "Meminta", "latihan" => "Latihan 19"],
                ["id" => "20", "kata" => "لَبِسَ - يَلْبَسُ - اِلْبَسْ", "arti" => "Memakai (Pakaian)", "latihan" => "Latihan 20"],
                ["id" => "21", "kata" => "رَكِبَ - يَرْكَبُ - اِرْكَبْ", "arti" => "Mengendarai", "latihan" => "Latihan 21"],
                ["id" => "22", "kata" => "قَسَّمَ - يُقَسِّمُ - قَسِّمْ", "arti" => "Membagi", "latihan" => "Latihan 22"],
                ["id" => "23", "kata" => "حَرَقَ - يَحْرُقُ - اُحْرُقْ", "arti" => "Membakar", "latihan" => "Latihan 23"],
                ["id" => "24", "kata" => "سَاعَدَ - يُسَاعِدُ - سَاعِدْ", "arti" => "Menolong", "latihan" => "Latihan 24"],
                ["id" => "25", "kata" => "حَمَلَ - يَحْمِلُ - اِحْمِلْ", "arti" => "Membawa", "latihan" => "Latihan 25"],
                ["id" => "26", "kata" => "تَكَلَّمَ - يَتَكَلَّمُ - تَكَلَّمْ", "arti" => "Berbicara", "latihan" => "Latihan 26"],
                ["id" => "27", "kata" => "سَمِعَ - يَسْمَعُ - اِسْمَعْ", "arti" => "Mendengar", "latihan" => "Latihan 27"],
                ["id" => "28", "kata" => "حَفِظَ - يَحْفَظُ - اِحْفَظْ", "arti" => "Menghafal / Menjaga", "latihan" => "Latihan 28"],
                ["id" => "29", "kata" => "اِتَّجَهَ - يَتَّجِهُ - اِتَّجِهْ", "arti" => "Menghadap", "latihan" => "Latihan 29"],
                ["id" => "30", "kata" => "اِسْتَيْقَظَ - يَسْتَيْقِظُ - اِسْتَيْقِظْ", "arti" => "Bangun", "latihan" => "Latihan 30"]
            ];

            foreach ($kata as $i => $kata) {
                $data['kata'][$i] = $kata;
                $status = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, $kata['latihan'], "mudhori");
                if($status){
                    $data['kata'][$i]['status'] = 'on';
                } else {
                    $data['kata'][$i]['status'] = 'off';
                }
            }
            
            // usort($data['kata'], function($a, $b) {
            //     return $a['status'] <=> $b['status'];
            // });

            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/mudhori", $data);
            $this->load->view("templates/footer-user", $data);
        } else if($text == "madhi"){
            $data['title'] = "Pola Fi'il Madhi";
            
            $kata = [
                ["id" => "1", "kata" => "فَتَحَ - يَفْتَحُ - اِفْتَحْ", "arti" => "Membuka", "latihan" => "Latihan 1"],
                ["id" => "2", "kata" => "عَلَّقَ - يُعَلِّقُ - عَلِّقْ", "arti" => "Menggantungkan", "latihan" => "Latihan 2"],
                ["id" => "3", "kata" => "جَلَسَ - يَجْلِسُ - اِجْلِسْ", "arti" => "Duduk", "latihan" => "Latihan 3"],
                ["id" => "4", "kata" => "ذَهَبَ - يَذْهَبُ - اِذْهَبْ", "arti" => "Pergi", "latihan" => "Latihan 4"],
                ["id" => "5", "kata" => "خَرَجَ - يَخْرُجُ - اُخْرُجْ", "arti" => "Keluar", "latihan" => "Latihan 5"],
                ["id" => "6", "kata" => "كَتَبَ - يَكْتُبُ - اُكْتُبْ", "arti" => "Menulis", "latihan" => "Latihan 6"],
                ["id" => "7", "kata" => "لَعِبَ - يَلْعَبُ - اِلْعَبْ", "arti" => "Bermain", "latihan" => "Latihan 7"],
                ["id" => "8", "kata" => "طَبَخَ - يَطْبَخُ - اِطْبَخْ", "arti" => "Memasak", "latihan" => "Latihan 8"],
                ["id" => "9", "kata" => "نَظَّفَ - يُنَظِّفُ - نَظِّفْ", "arti" => "Membersihkan", "latihan" => "Latihan 9"],
                ["id" => "10", "kata" => "طَرَقَ - يَطْرُقُ - اُطْرُقْ", "arti" => "Mengetuk", "latihan" => "Latihan 10"],
                ["id" => "11", "kata" => "كَنَسَ - يَكْنُسُ - اُكْنُسْ", "arti" => "Menyapu", "latihan" => "Latihan 11"],
                ["id" => "12", "kata" => "أَشْعَلَ - يُشْعِلُ - اَشْعِلْ", "arti" => "Menyalakan", "latihan" => "Latihan 12"],
                ["id" => "13", "kata" => "رَتَّبَ - يُرَتِّبُ - رَتِّبْ", "arti" => "Merapikan", "latihan" => "Latihan 13"],
                ["id" => "14", "kata" => "سَقَطَ - يَسْقُطُ - اُسْقُطْ", "arti" => "Jatuh", "latihan" => "Latihan 14"],
                ["id" => "15", "kata" => "جَمَعَ - يَجْمَعُ - اِجْمَعْ", "arti" => "Mengumpulkan", "latihan" => "Latihan 15"],
                ["id" => "16", "kata" => "رَجَعَ - يَرْجِعُ - اِرْجِعْ", "arti" => "Kembali", "latihan" => "Latihan 16"],
                ["id" => "17", "kata" => "إِدَّخَرَ - يَدَّخِرُ - اِدَّخِرْ", "arti" => "Menabung", "latihan" => "Latihan 17"],
                ["id" => "18", "kata" => "إِحْتَرَمَ - يَحْتَرِمُ - اِحْتَرِمْ", "arti" => "Memuliakan", "latihan" => "Latihan 18"],
                ["id" => "19", "kata" => "طَلَبَ - يَطْلُبُ - اُطْلُبْ", "arti" => "Meminta", "latihan" => "Latihan 19"],
                ["id" => "20", "kata" => "لَبِسَ - يَلْبَسُ - اِلْبَسْ", "arti" => "Memakai (Pakaian)", "latihan" => "Latihan 20"],
                ["id" => "21", "kata" => "رَكِبَ - يَرْكَبُ - اِرْكَبْ", "arti" => "Mengendarai", "latihan" => "Latihan 21"],
                ["id" => "22", "kata" => "قَسَّمَ - يُقَسِّمُ - قَسِّمْ", "arti" => "Membagi", "latihan" => "Latihan 22"],
                ["id" => "23", "kata" => "حَرَقَ - يَحْرُقُ - اُحْرُقْ", "arti" => "Membakar", "latihan" => "Latihan 23"],
                ["id" => "24", "kata" => "سَاعَدَ - يُسَاعِدُ - سَاعِدْ", "arti" => "Menolong", "latihan" => "Latihan 24"],
                ["id" => "25", "kata" => "حَمَلَ - يَحْمِلُ - اِحْمِلْ", "arti" => "Membawa", "latihan" => "Latihan 25"],
                ["id" => "26", "kata" => "تَكَلَّمَ - يَتَكَلَّمُ - تَكَلَّمْ", "arti" => "Berbicara", "latihan" => "Latihan 26"],
                ["id" => "27", "kata" => "سَمِعَ - يَسْمَعُ - اِسْمَعْ", "arti" => "Mendengar", "latihan" => "Latihan 27"],
                ["id" => "28", "kata" => "حَفِظَ - يَحْفَظُ - اِحْفَظْ", "arti" => "Menghafal / Menjaga", "latihan" => "Latihan 28"],
                ["id" => "29", "kata" => "اِتَّجَهَ - يَتَّجِهُ - اِتَّجِهْ", "arti" => "Menghadap", "latihan" => "Latihan 29"],
                ["id" => "30", "kata" => "اِسْتَيْقَظَ - يَسْتَيْقِظُ - اِسْتَيْقِظْ", "arti" => "Bangun", "latihan" => "Latihan 30"]
            ];

            foreach ($kata as $i => $kata) {
                $data['kata'][$i] = $kata;
                $status = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, $kata['latihan'], "madhi");
                if($status){
                    $data['kata'][$i]['status'] = 'on';
                } else {
                    $data['kata'][$i]['status'] = 'off';
                }
            }
            // usort($data['kata'], function($a, $b) {
            //     return $a['status'] <=> $b['status'];
            // });

            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/madhi", $data);
            $this->load->view("templates/footer-user", $data);
        } else if($text == "amr"){
            $data['title'] = "Pola Fi'il Amr";
            
            $kata = [
                ["id" => "1", "kata" => "فَتَحَ - يَفْتَحُ - اِفْتَحْ", "arti" => "Membuka", "latihan" => "Latihan 1"],
                ["id" => "2", "kata" => "عَلَّقَ - يُعَلِّقُ - عَلِّقْ", "arti" => "Menggantungkan", "latihan" => "Latihan 2"],
                ["id" => "3", "kata" => "جَلَسَ - يَجْلِسُ - اِجْلِسْ", "arti" => "Duduk", "latihan" => "Latihan 3"],
                ["id" => "4", "kata" => "ذَهَبَ - يَذْهَبُ - اِذْهَبْ", "arti" => "Pergi", "latihan" => "Latihan 4"],
                ["id" => "5", "kata" => "خَرَجَ - يَخْرُجُ - اُخْرُجْ", "arti" => "Keluar", "latihan" => "Latihan 5"],
                ["id" => "6", "kata" => "كَتَبَ - يَكْتُبُ - اُكْتُبْ", "arti" => "Menulis", "latihan" => "Latihan 6"],
                ["id" => "7", "kata" => "لَعِبَ - يَلْعَبُ - اِلْعَبْ", "arti" => "Bermain", "latihan" => "Latihan 7"],
                ["id" => "8", "kata" => "طَبَخَ - يَطْبَخُ - اِطْبَخْ", "arti" => "Memasak", "latihan" => "Latihan 8"],
                ["id" => "9", "kata" => "نَظَّفَ - يُنَظِّفُ - نَظِّفْ", "arti" => "Membersihkan", "latihan" => "Latihan 9"],
                ["id" => "10", "kata" => "طَرَقَ - يَطْرُقُ - اُطْرُقْ", "arti" => "Mengetuk", "latihan" => "Latihan 10"],
                ["id" => "11", "kata" => "كَنَسَ - يَكْنُسُ - اُكْنُسْ", "arti" => "Menyapu", "latihan" => "Latihan 11"],
                ["id" => "12", "kata" => "أَشْعَلَ - يُشْعِلُ - اَشْعِلْ", "arti" => "Menyalakan", "latihan" => "Latihan 12"],
                ["id" => "13", "kata" => "رَتَّبَ - يُرَتِّبُ - رَتِّبْ", "arti" => "Merapikan", "latihan" => "Latihan 13"],
                ["id" => "14", "kata" => "سَقَطَ - يَسْقُطُ - اُسْقُطْ", "arti" => "Jatuh", "latihan" => "Latihan 14"],
                ["id" => "15", "kata" => "جَمَعَ - يَجْمَعُ - اِجْمَعْ", "arti" => "Mengumpulkan", "latihan" => "Latihan 15"],
                ["id" => "16", "kata" => "رَجَعَ - يَرْجِعُ - اِرْجِعْ", "arti" => "Kembali", "latihan" => "Latihan 16"],
                ["id" => "17", "kata" => "إِدَّخَرَ - يَدَّخِرُ - اِدَّخِرْ", "arti" => "Menabung", "latihan" => "Latihan 17"],
                ["id" => "18", "kata" => "إِحْتَرَمَ - يَحْتَرِمُ - اِحْتَرِمْ", "arti" => "Memuliakan", "latihan" => "Latihan 18"],
                ["id" => "19", "kata" => "طَلَبَ - يَطْلُبُ - اُطْلُبْ", "arti" => "Meminta", "latihan" => "Latihan 19"],
                ["id" => "20", "kata" => "لَبِسَ - يَلْبَسُ - اِلْبَسْ", "arti" => "Memakai (Pakaian)", "latihan" => "Latihan 20"],
                ["id" => "21", "kata" => "رَكِبَ - يَرْكَبُ - اِرْكَبْ", "arti" => "Mengendarai", "latihan" => "Latihan 21"],
                ["id" => "22", "kata" => "قَسَّمَ - يُقَسِّمُ - قَسِّمْ", "arti" => "Membagi", "latihan" => "Latihan 22"],
                ["id" => "23", "kata" => "حَرَقَ - يَحْرُقُ - اُحْرُقْ", "arti" => "Membakar", "latihan" => "Latihan 23"],
                ["id" => "24", "kata" => "سَاعَدَ - يُسَاعِدُ - سَاعِدْ", "arti" => "Menolong", "latihan" => "Latihan 24"],
                ["id" => "25", "kata" => "حَمَلَ - يَحْمِلُ - اِحْمِلْ", "arti" => "Membawa", "latihan" => "Latihan 25"],
                ["id" => "26", "kata" => "تَكَلَّمَ - يَتَكَلَّمُ - تَكَلَّمْ", "arti" => "Berbicara", "latihan" => "Latihan 26"],
                ["id" => "27", "kata" => "سَمِعَ - يَسْمَعُ - اِسْمَعْ", "arti" => "Mendengar", "latihan" => "Latihan 27"],
                ["id" => "28", "kata" => "حَفِظَ - يَحْفَظُ - اِحْفَظْ", "arti" => "Menghafal / Menjaga", "latihan" => "Latihan 28"],
                ["id" => "29", "kata" => "اِتَّجَهَ - يَتَّجِهُ - اِتَّجِهْ", "arti" => "Menghadap", "latihan" => "Latihan 29"],
                ["id" => "30", "kata" => "اِسْتَيْقَظَ - يَسْتَيْقِظُ - اِسْتَيْقِظْ", "arti" => "Bangun", "latihan" => "Latihan 30"]
            ];

            foreach ($kata as $i => $kata) {
                $data['kata'][$i] = $kata;
                $status = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, $kata['latihan'], "amr");
                if($status){
                    $data['kata'][$i]['status'] = 'on';
                } else {
                    $data['kata'][$i]['status'] = 'off';
                }
            }
            // usort($data['kata'], function($a, $b) {
            //     return $a['status'] <=> $b['status'];
            // });
            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/amr", $data);
            $this->load->view("templates/footer-user", $data);
        } else if($text == "latihanmudhori"){
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
            
            $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, $latihan, "mudhori");
                
            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/latihan-mudhori", $data);
            $this->load->view("templates/footer-user", $data);
        }  else if($text == "latihanmadhi"){
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
            
            $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, $latihan, "madhi");
                
            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/latihan-madhi", $data);
            $this->load->view("templates/footer-user", $data);
        }  else if($text == "latihanamr"){
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
            
            $data['latihan'] = $this->Arab_model->get_latihan_by_id_user_latihan_materi($id, $latihan, "amr");
                
            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/fiil/latihan-amr", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }

    public function ungkapan($text = "", $latihan = ""){
        $id = $this->session->userdata("id");
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['kelas'] = $this->Admin_model->get_one("kelas", ["id_kelas" => $data['user']['id_kelas']]);
        if($text == ""){
            $data['title'] = "At-Ta'bir";

            $s_19 = COUNT($this->Admin_model->get_all("latihan", ["materi" => "attabir", "hal" => "s-19", "id_user" => $id]));
            if($s_19 >= 3)
                $data['s_19'] = "Lulus";
            else
                $data['s_19'] = "Tidak Lulus";
                
            $s_20 = COUNT($this->Admin_model->get_all("latihan", ["materi" => "attabir", "hal" => "s-20", "id_user" => $id]));
            if($s_20 >= 3)
                $data['s_20'] = "Lulus";
            else
                $data['s_20'] = "Tidak Lulus";
                
            $s_22 = COUNT($this->Admin_model->get_all("latihan", ["materi" => "attabir", "hal" => "s-22", "id_user" => $id]));
            if($s_22 >= 3)
                $data['s_22'] = "Lulus";
            else
                $data['s_22'] = "Tidak Lulus";
                
            $s_23 = COUNT($this->Admin_model->get_all("latihan", ["materi" => "attabir", "hal" => "s-23", "id_user" => $id]));
            if($s_23 >= 3)
                $data['s_23'] = "Lulus";
            else
                $data['s_23'] = "Tidak Lulus";

            $this->load->view("templates/header-user", $data);
            $this->load->view("materi/awwal/tabir/index", $data);
            $this->load->view("templates/footer-user", $data);
        } else if($text == "s-19"){
            if($latihan == "latihan"){
                $data['materi'] = [
                    "fiil" => $this->input->post("fiil"),
                    "ket" => $this->input->post("ket"),
                    "latihan" => $this->input->post("latihan")
                ];
                // var_dump($_POST);

                $data['title'] = "التدريب";
    
                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/awwal/tabir/latihan/s-19", $data);
                $this->load->view("templates/footer-user", $data);
            } else {
                $data['materi'] = [
                    "fiil" => "حَفِظَ",
                    "ket" => "الدَّرْسَ"
                ];
                $data['title'] = "صفحة ١٩";
                $data['latihan1'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-19", "latihan" => "Latihan 1", "id_user" => $id]);
                $data['latihan2'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-19", "latihan" => "Latihan 2", "id_user" => $id]);
                $data['latihan3'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-19", "latihan" => "Latihan 3", "id_user" => $id]);
                if($data['latihan1'] && $data['latihan2'] && $data['latihan3']){
                    $data['message'] = '<div class="alert alert-success"><i class="fa fa-check-circle text-success mr-2"></i> Anda telah menyelesaikan latihan ini</div>';
                }

                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/awwal/tabir/materi/s-19", $data);
                $this->load->view("templates/footer-user", $data);
            }
        } else if($text == "s-20"){
            if($latihan == "latihan"){
                $data['latihan'] = $this->input->post("latihan");

                if($data['latihan'] == "Latihan 1"){
                    $data['materi'] = [
                        [
                            "soal" => "هَلْ أَخَذْتَ الْمِفْتَاحَ؟",
                            "kata" => "أَخَذْتُ",
                            "jawaban" => "أَخَذْتُهُ"
                        ],
                        [
                            "soal" => "هَلْ فَتَحْتَ النَّافِذَةَ؟",
                            "kata" => "فَتَحْتُ",
                            "jawaban" => "فَتَحْتُهَا"
                        ],
                        [
                            "soal" => "هَلْ أَشْعَلْتَ الْمِصْبَاحَ؟",
                            "kata" => "أَشْعَلْتُ",
                            "jawaban" => "أَشْعَلْتُهُ"
                        ],
                        [
                            "soal" => "هَلْ سَاعَدْتَ الْمُدَرِّسَ؟",
                            "kata" => "سَاعَدْتُ",
                            "jawaban" => "سَاعَدْتُهُ"
                        ],
                        [
                            "soal" => "هَلْ حَمَلْتَ الْمُذَكِّرَةَ؟",
                            "kata" => "حَمَلْتُ",
                            "jawaban" => "حَمَلْتُهَا"
                        ]
                    ];
                } else if($data['latihan'] == "Latihan 2"){
                    $data['materi'] = [
                        [
                            "soal" => "هَلْ وَجَدْتَ الْفُلُوْسَ؟",
                            "kata" => "وَجَدْتُ",
                            "jawaban" => "وَجَدْتُهُ"
                        ],
                        [
                            "soal" => "هَلْ شَرِبْتَ اللَّبَنَ؟",
                            "kata" => "شَرِبْتُ",
                            "jawaban" => "شَرِبْتُهُ"
                        ],
                        [
                            "soal" => "هَلْ قَطَعْتَ اللَّحْمَ؟",
                            "kata" => "قَطَعْتُ",
                            "jawaban" => "قَطَعْتُهُ"
                        ],
                        [
                            "soal" => "هَلْ قَابَلْتَ الْمُدِيْرَ؟",
                            "kata" => "قَابَلْتُ",
                            "jawaban" => "قَابَلْتُهُ"
                        ],
                        [
                            "soal" => "هَلْ أَغْلَقْتَ الْبَابَ؟",
                            "kata" => "أَغْلَقْتُ",
                            "jawaban" => "أَغْلَقْتُهُ"
                        ]
                    ];
                } else if($data['latihan'] == "Latihan 3"){
                    $data['materi'] = [
                        [
                            "soal" => "هَلْ حَفِظْتَ الدَّرْسَ؟",
                            "kata" => "حَفِظْتُ",
                            "jawaban" => "حَفِظْتُهُ"
                        ],
                        [
                            "soal" => "هَلْ سَمِعْتَ الْقِصَّةَ؟",
                            "kata" => "سَمِعْتُ",
                            "jawaban" => "سَمِعْتُهَا"
                        ],
                        [
                            "soal" => "هَلْ طَبَخْتَ الرُّزَّ؟",
                            "kata" => "طَبَخْتُ",
                            "jawaban" => "طَبَخْتُهُ"
                        ],
                        [
                            "soal" => "هَلْ مَسَحْتَ السَّبُّوْرَةَ؟",
                            "kata" => "مَسَحْتُ",
                            "jawaban" => "مَسَحْتُهَا"
                        ],
                        [
                            "soal" => "هَلْ غَسَلْتَ الْغَسْلَ؟",
                            "kata" => "غَسَلْتُ",
                            "jawaban" => "غَسَلْتُهُ"
                        ]
                    ];
                }
                
                $data['title'] = "التدريب";
    
                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/awwal/tabir/latihan/s-20", $data);
                $this->load->view("templates/footer-user", $data);
            } else {
                $data['title'] = "صفحة ٢٠";
                $data['latihan1'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-20", "latihan" => "Latihan 1", "id_user" => $id]);
                $data['latihan2'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-20", "latihan" => "Latihan 2", "id_user" => $id]);
                $data['latihan3'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-20", "latihan" => "Latihan 3", "id_user" => $id]);
                if($data['latihan1'] && $data['latihan2'] && $data['latihan3']){
                    $data['message'] = '<div class="alert alert-success"><i class="fa fa-check-circle text-success mr-2"></i> Anda telah menyelesaikan latihan ini</div>';
                }

                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/awwal/tabir/materi/s-20", $data);
                $this->load->view("templates/footer-user", $data);
            }
        }else if($text == "s-22"){
            if($latihan == "latihan"){
                $data['latihan'] = $this->input->post("latihan");

                if($data['latihan'] == "Latihan 1"){
                    $data['materi'] = [
                        [
                            "soal" => "هَلْ ذَهَبْتَ إِلَى السُّوْقِ؟",
                            "jawaban" => "ذَهَبْتُ إِلَيْهِ"
                        ],
                        [
                            "soal" => "هَلْ أَكَلْتَ بِالْمِلْعَقَةِ؟",
                            "jawaban" => "أَكَلْتُ بِهَا"
                        ],
                        [
                            "soal" => "هَلْ بَحَثْتَ عَنِ الْإِجَابَةِ؟",
                            "jawaban" => "بَحَثْتُ عَنْهَا"
                        ],
                        [
                            "soal" => "هَلْ نَجَحْتَ مِنَ الْإِمْتِحَانِ؟",
                            "jawaban" => "نَجَحْتُ مِنْهَا"
                        ],
                        [
                            "soal" => "هَلْ اِنْتَهَيْتَ مِنَ الْقِرَاءَةِ؟",
                            "jawaban" => "اِنْتَهَيْتُ مِنْهَا"
                        ],
                    ];
                    $data['pilihan1'] = ["ذَهَبْتُ ", "أَكَلْتُ ", "بَحَثْتُ ", "نَجَحْتُ ", "اِنْتَهَيْتُ "];
                    $data['pilihan2'] = ["إِلَيْهِ", "إِلَيْهَا", "بِهِ", "بِهَا", "مِنْهُ", "مِنْهَا", "عَنْهَا", "عَنْهُ"];
                    shuffle($data['pilihan1']);
                    shuffle($data['pilihan2']);
                } else if($data['latihan'] == "Latihan 2"){
                    $data['materi'] = [
                        [
                            "soal" => "هَلْ وَصَلْتَ إِلَى الْمَعْهَدِ؟",
                            "jawaban" => "وَصَلْتُ إِلَيْهِ"
                        ],
                        [
                            "soal" => "هَلْ كَتَبْتَ فِي الْكِتَابِ؟",
                            "jawaban" => "كَتَبْتُ فِيْهِ"
                        ],
                        [
                            "soal" => "هَلْ دَرَسْتَ فِي الْمَعْمَلِ؟",
                            "jawaban" => "دَرَسْتُ فِيْهِ"
                        ],
                        [
                            "soal" => "هَلْ ذَهَبْتَ مِنَ الْحَدِيْقَةِ؟",
                            "jawaban" => "ذَهَبْتُ مِنْهَا"
                        ],
                        [
                            "soal" => "هَلْ سَافَرْتَ بِالطَّيَّارَةِ؟",
                            "jawaban" => "سَافَرْتُ بِهَا"
                        ],
                    ];
                    $data['pilihan1'] = ["وَصَلْتُ ", "كَتَبْتُ ", "دَرَسْتُ ", "ذَهَبْتُ ", "سَافَرْتُ "];
                    $data['pilihan2'] = ["إِلَيْهِ", "إِلَيْهَا", "بِهِ", "بِهَا", "مِنْهُ", "مِنْهَا", "فِيْهِ", "فِيْهَا"];
                    shuffle($data['pilihan1']);
                    shuffle($data['pilihan2']);
                } else if($data['latihan'] == "Latihan 3"){
                    $data['materi'] = [
                        [
                            "soal" => "هَلْ تَكَلَّمْتَ بِاللُّغَةِ الْعَرَبِيَّةِ؟",
                            "jawaban" => "تَكَلَّمْتُ بِهَا"
                        ],
                        [
                            "soal" => "هَلْ اِسْتَعْدَدْتَ لِلدِّرَاسَةِ؟",
                            "jawaban" => "اِسْتَعْدَدْتُ لَهَا"
                        ],
                        [
                            "soal" => "هَلْ دَرَسْتَ لِلْإِمْتِحَانِ؟",
                            "jawaban" => "دَرَسْتُ لَهُ"
                        ],
                        [
                            "soal" => "هَلْ صَبَرْتَ عَلَى الْمُصِيْبَةِ؟",
                            "jawaban" => "صَبَرْتُ عَلَيْهَا"
                        ],
                        [
                            "soal" => "هَلْ شَاوَرْتَ مَعَ الْأُسْتَاذِ؟",
                            "jawaban" => "شَاوَرْتُ مَعَهُ"
                        ],
                    ];
                    $data['pilihan1'] = ["تَكَلَّمْتُ ", "اِسْتَعْدَدْتُ ", "دَرَسْتُ ", "صَبَرْتُ ", "شَاوَرْتُ "];
                    $data['pilihan2'] = ["بِهِ", "بِهَا", "لَهُ", "لَهَا", "عَلَيْهِ", "عَلَيْهَا", "مَعَهُ", "مَعَهَا"];
                    shuffle($data['pilihan1']);
                    shuffle($data['pilihan2']);
                }
                
                $data['title'] = "التدريب";
    
                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/awwal/tabir/latihan/s-22", $data);
                $this->load->view("templates/footer-user", $data);
            } else {
                $data['title'] = "صفحة ٢٢";
                $data['latihan1'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-22", "latihan" => "Latihan 1", "id_user" => $id]);
                $data['latihan2'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-22", "latihan" => "Latihan 2", "id_user" => $id]);
                $data['latihan3'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-22", "latihan" => "Latihan 3", "id_user" => $id]);
                if($data['latihan1'] && $data['latihan2'] && $data['latihan3']){
                    $data['message'] = '<div class="alert alert-success"><i class="fa fa-check-circle text-success mr-2"></i> Anda telah menyelesaikan latihan ini</div>';
                }
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/awwal/tabir/materi/s-22", $data);
                $this->load->view("templates/footer-user", $data);
            }
        }else if($text == "s-23"){
            if($latihan == "latihan"){
                $data['latihan'] = $this->input->post("latihan");

                if($data['latihan'] == "Latihan 1"){
                    $data['materi'] = [
                        [
                            "soal" => "هَمْزَةُ قَرَأَ الْجَرِيْدَةَ",
                            "jawaban" => "لَمْ يَقْرَإِ",
                            "isim" => ["هَمْزَةُ", "الْجَرِيْدَةَ"]
                        ],
                        [
                            "soal" => "سَلْمَانُ طَبَخَ الرُّزَّ",
                            "jawaban" => "لَمْ يَطْبَخِ",
                            "isim" => ["سَلْمَانُ", "الرُّزَّ"]
                        ],
                        [
                            "soal" => "أَحْمَدُ لَعِبَ الْكُرَةَ",
                            "jawaban" => "لَمْ يَلْعَبِ",
                            "isim" => ["أَحْمَدُ", "الْكُرَةَ"]
                        ],
                        [
                            "soal" => "رَشِيْدٌ شَرِبَ الْعَصِيْرَ",
                            "jawaban" => "لَمْ يَشْرَبِ",
                            "isim" => ["رَشِيْدٌ", "الْعَصِيْرَ"]
                        ],
                        [
                            "soal" => "مُحَمَّدٌ فَتَحَ الْبَابَ",
                            "jawaban" => "لَمْ يَفْتَحِ",
                            "isim" => ["مُحَمَّدٌ", "الْبَابَ"]
                        ],
                    ];
                    $data['pilihan1'] = ["لَمْ يَقْرَإِ", "لَمْ يَقْرَأُ", "لَمْ يَطْبَخِ", "لَمْ يَطْبَخُ", "لَمْ يَلْعَبِ", "لَمْ يَلْعَبُ", "لَمْ يَفْتَحِ", "لَمْ يَفْتَحُ", "لَمْ يَشْرَبِ", "لَمْ يَشْرَبُ"];
                    shuffle($data['pilihan1']);
                } else if($data['latihan'] == "Latihan 2"){
                    $data['materi'] = [
                        [
                            "soal" => "عُمَرُ أَشْعَلَ الْمِصْبَاحَ",
                            "jawaban" => "لَمْ يُشْعِلِ",
                            "isim" => ["عُمَرُ", "الْمِصْبَاحَ"]
                        ],
                        [
                            "soal" => "مَحْمُوْدٌ كَتَبَ الدَّرْسَ",
                            "jawaban" => "لَمْ يَكْتُبِ",
                            "isim" => ["مَحْمُوْدٌ", "الدَّرْسَ"]
                        ],
                        [
                            "soal" => "سُلَيْمَانُ حَرَقَ الْخَشَبَ",
                            "jawaban" => "لَمْ يَحْرُقِ",
                            "isim" => ["سُلَيْمَانُ", "الْخَشَبَ"]
                        ],
                        [
                            "soal" => "عُثْمَانُ أَخَذَ الطَّعَامَ",
                            "jawaban" => "لَمْ يَأْخُذِ",
                            "isim" => ["عُثْمَانُ", "الطَّعَامَ"]
                        ],
                        [
                            "soal" => "هَمْزَةُ رَكِبَ السَّيَّارَةَ",
                            "jawaban" => "لَمْ يَرْكَبِ",
                            "isim" => ["هَمْزَةُ", "السَّيَّارَةَ"]
                        ],
                    ];
                    $data['pilihan1'] = ["لَمْ يُشْعِلِ", "لَمْ يُشْعِلُ", "لَمْ يَكْتُبِ", "لَمْ يَكْتُبُ", "لَمْ يَحْرُقِ", "لَمْ يَحْرُقُ", "لَمْ يَأْخُذِ", "لَمْ يَأْخُذُ", "لَمْ يَرْكَبِ", "لَمْ يَرْكَبُ"];
                    shuffle($data['pilihan1']);
                } else if($data['latihan'] == "Latihan 3"){
                    $data['materi'] = [
                        [
                            "soal" => "آدَمُ اِسْتَعْمَلَ الْحِذَاءَ",
                            "jawaban" => "لَمْ يَسْتَعْمِلِ",
                            "isim" => ["آدَمُ", "الْحِذَاءَ"]
                        ],
                        [
                            "soal" => "بِلَالُ أَصْلَحَ الْمِرْوَحَةَ",
                            "jawaban" => "لَمْ يُصْلِحِ",
                            "isim" => ["بِلَالُ", "الْمِرْوَحَةَ"]
                        ],
                        [
                            "soal" => "مُحَمَّدٌ أَطْعَمَ الْمِسْكِيْنَ",
                            "jawaban" => "لَمْ يُطْعِمِ",
                            "isim" => ["مُحَمَّدٌ", "الْمِسْكِيْنَ"]
                        ],
                        [
                            "soal" => "الأُسْتَاذُ أَعْلَنَ نَتَائِجَ الْإِمْتِحَانِ",
                            "jawaban" => "لَمْ يُعْلِنِ",
                            "isim" => ["الأُسْتَاذُ", "نَتَائِجَ الْإِمْتِحَانِ"]
                        ],
                        [
                            "soal" => "سَلْمَانُ أَقْفَلَ الْبَوَّابَةَ",
                            "jawaban" => "لَمْ يُقْفِلِ",
                            "isim" => ["سَلْمَانُ", "الْبَوَّابَةَ"]
                        ],
                    ];
                    $data['pilihan1'] = ["لَمْ يَسْتَعْمِلِ", "لَمْ يَسْتَعْمِلُ", "لَمْ يُصْلِحِ", "لَمْ يُصْلِحُ", "لَمْ يُطْعِمِ", "لَمْ يُطْعِمُ", "لَمْ يُعْلِنِ", "لَمْ يُعْلِنُ", "لَمْ يُقْفِلِ", "لَمْ يُقْفِلُ"];
                    shuffle($data['pilihan1']);
                }
                
                $data['title'] = "التدريب";
    
                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/awwal/tabir/latihan/s-23", $data);
                $this->load->view("templates/footer-user", $data);
            } else {
                $data['title'] = "صفحة ٢٣";
                $data['latihan1'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-23", "latihan" => "Latihan 1", "id_user" => $id]);
                $data['latihan2'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-23", "latihan" => "Latihan 2", "id_user" => $id]);
                $data['latihan3'] = $this->Admin_model->get_one("latihan", ["materi" => "attabir", "hal" => "s-23", "latihan" => "Latihan 3", "id_user" => $id]);
                if($data['latihan1'] && $data['latihan2'] && $data['latihan3']){
                    $data['message'] = '<div class="alert alert-success"><i class="fa fa-check-circle text-success mr-2"></i> Anda telah menyelesaikan latihan ini</div>';
                }
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("materi/awwal/tabir/materi/s-23", $data);
                $this->load->view("templates/footer-user", $data);
            }
        }
    }
}