<?php

    class M_data extends CI_Model
    {
        public function add($data,$table)
        {
            return $this->db->insert($table,$data);
        }

        public function edit($where,$table)
        {
            return $this->db->get($table,$where);
        }

        public function update($where,$data,$table)
        {
            $this->db->where($where);
            return $this->db->update($table,$data);
        }

        public function delete($where,$table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function read($table,$where)
        {
            return $this->db->get_where($table,$where);
        }
        
        public function readw($table)
        {
            return $this->db->get($table);
        }
    }
    