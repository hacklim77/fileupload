<?php

    class Notifmod extends CI_Model
    {
        function getnotif()
        {
            return $this->db->get('notifikasi')->result();
        }
        
        function getnotifnot()
        {
            $this->db->where('status',0);
            $this->db->from('notifikasi');
            return $this->db->get()->result();
        }

        function countNotif()
        {
            $this->db->count_all_results('notifikasi');
            $this->db->where('status',0);
            $this->db->from('notifikasi');
            return $this->db->count_all_results();
        }

        function countNotif2()
        {
            return $this->db->count_all('notifikasi');
        }
    }
    