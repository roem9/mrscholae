<?php
    class Login extends CI_CONTROLLER{
        public function __construct(){
            parent::__construct();
            $this->load->model('Admin_model');
            $this->load->helper('form');
        }

        public function index(){
            if($_POST){
                $this->cek_login_user();
            } else {
                $data['header'] = 'Login User';
                $data['title'] = 'Login User';
                $this->load->view("templates/header-login", $data);
                $this->load->view("login/login-user");
                $this->load->view("templates/footer");
            }
        }

        public function cek_login_user(){
            $email = $this->input->post("email");
            $password = md5($this->input->post("password", TRUE));
            $cek = $this->Admin_model->get_one("user", ["email" => $email, "password" => $password]);
            if($cek){
                $date = date('Y-m-d');
                // $langganan = $this->Admin_model->get_one("user", "email = '$email' AND password = '$password' AND tgl_langganan = '$date'");
                if($cek['tgl_langganan'] >= $date){
                    $data_session = array(
                        'id' => $cek['id_user'],
                        'status' => "login"
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url('mufrodat/listmurojaah'));
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-times-circle text-danger mr-1"></i>Maaf, waktu langganan Anda telah habis di tanggal <strong>'.date("d-M-Y", strtotime($cek['tgl_langganan'])).'</strong>. Silahkan hubungi Admin untuk memperpanjang langganan Anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    $data['header'] = 'Login User';
                    $data['title'] = 'Login User';
                    $this->load->view("templates/header-login", $data);
                    $this->load->view("login/login-user");
                    $this->load->view("templates/footer");
                }
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-times-circle text-danger mr-1"></i>Maaf, kombinasi email dan password salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                $data['header'] = 'Login User';
                $data['title'] = 'Login User';
                $this->load->view("templates/header-login", $data);
                $this->load->view("login/login-user");
                $this->load->view("templates/footer");
            }
        }

        function logout_user(){
            $this->session->sess_destroy();
            redirect(base_url("login"));
        }
    }