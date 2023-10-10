<?php

    class Notif extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('notifmod');
        }

        function index()
        {
            $data = [
                'title' => 'Notify',
                'notif' => $this->notifmod->getnotifnot(),
                'countnot' => $this->notifmod->countNotif()
            ];
            $this->load->view('notif',$data);
        }

        function all()
        {
            $data = [
                'title' => 'Notify All',
                'notif' => $this->notifmod->getnotifnot(),
                'notifall' => $this->notifmod->getnotif(),
                'countnot' => $this->notifmod->countNotif()
            ];

            $this->load->view('allnot',$data);
        }

        function detail()
        {
            $data = [
                'title' => 'Notify',
                'notif' => $this->notifmod->getnotif(),
                'countnot' => $this->notifmod->countNotif()
            ];

            $this->load->view('notif',$data);
        }
    }