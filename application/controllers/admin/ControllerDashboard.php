<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerDashboard extends CI_Controller
{

    public function index()
    {
        $data = array(
            'folder'                            => 'beranda',
            'halaman'                           => 'index'
        );
        $this->load->view('admin/include/index', $data);
    }
}
        
    /* End of file  ControllerDashboard.php */
