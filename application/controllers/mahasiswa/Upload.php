<?php

    class Upload extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_data');
            
            date_default_timezone_set("ASIA/JAKARTA");
        }

        function index()
        {
            $data = [
                'title' => 'Upload File',
            ];
            $this->load->view('mahasiswa/index',$data);
        }

        function proses(){

            $fullname = $this->input->post('fullname');
            $nim = $this->input->post('nim');
            $subject = $this->input->post('subject');

            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|doc|docx|pdf|jpeg';
            $config['max_size']             = 5000;
            $config['file_name']            = $nim.'-'.$fullname.'-'.$subject;
            $config['overwrite']            = FALSE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userFile')) {
                $date = date('Y-m-d H:i:s');
                $fullname = $this->input->post('fullname');
                $name = $this->upload->data(file_name);
                $this->db->insert('file',['files' => $name, 'date' => $date,'fullname' => $fullname,'nim' => $nim,'subjek' => $subject]);
                $this->session->set_flashdata('Msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>File Upload Sukses!</strong>
                </div>');
                redirect('mahasiswa/upload');
            }

        }

        function remove_file(){
            
        }

        
    }