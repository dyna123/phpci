<?php

class Peoples_Model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function getPeoples($limit, $start)
    {
        return $this->db->get('peoples', $limit, $start)->result_array();
    }
}
