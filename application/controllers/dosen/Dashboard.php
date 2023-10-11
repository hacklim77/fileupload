<?php

    class Dashboard extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->model('m_data');
        }

        function index(){

            $data = [
                'title' => 'Dashboard Dosen',
                'tugas' => $this->m_data->readw('file')->result()
            ];

            $this->load->view('dosen/index',$data);
        }

    }