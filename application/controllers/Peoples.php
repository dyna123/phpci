<?php

class Peoples extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'List Peoples';

        $this->load->model('Peoples_Model', 'peoples');

        // Pagination
        $this->load->library('pagination');

        // config
        $config['base_url'] = 'http://localhost/phpci/peoples/index';

        $data['peoples'] = $this->peoples->getPeoples(12, 30);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index');
        $this->load->view('templates/footer');
    }
}
