<?php

    class Multiupload extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->model('m_data');
        }

        function index() {
            $this->load->view('mahasiswa/upload');
        }

    }