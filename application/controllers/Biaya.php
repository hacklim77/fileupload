<?php

    class Biaya extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_data');
        }

        function index()
        {
            $data = [
                'title' => 'Cek Biaya',
                'cek' => $this->m_data->readw('biaya',['id_cama' => 1])->row(),
                'num1' => [
                    "biaya1" => ['1000','2000','3000'],
                    "biaya2" => ['2500','2700'],
                    "biaya3" => ['3500','4500','5000']
                    ]
            ];
            $this->load->view('biaya',$data);
        }

    }