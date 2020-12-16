<?php
    Class Kontak extends CI_Controller{
        var $API = "";

        function __construct(){
            parent::__construct();
            $this->API="http://localhost/rest_ci/index.php";
            $this->load->library('session');
            $this->load->library('curl');
            $this->load->helper('form');
            $this->load->helper('url');

        }

        //menampilkan data kontak
        function index() {
            $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak'));
            $this->load->view('kontak/list', $data);
        }

        //insert data kontak
        function create(){
            if(isset($_POST['submit'])){
                $data = array(
                    'id' => $this->input->post('id'),
                    'nama' => $this->input->post('nama'),
                    'nomor' => $this->input->post('nomor')
                );
                $insert = $this->curl->simple_post($this->API.'/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));
                if($insert) {
                    $this->session->set_flashdata('hasil','Insert Data Berhasil');
                } else {
                    $this->session->set_flashdata('hasil','Insert Data Gagal');
                }
                redirect('kontak');
            } else {
               $this->load->view('kontak/create');
            }
        }

        //edit data kontak
        function edit(){
            if(isset($_POST['submit'])){
                $data = array(
                    'id' => $this->input->post('id'),
                    'nama' => $this->input->post('nama'),
                    'nomor' => $this->input->post('nomor')
                );
                $update = $this->curl->simple_put($this)
            }
        }


    }

?>