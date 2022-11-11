<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function index_user()
  {
    $data['title'] = "User's Page";
    $data_siswa['siswa'] = $this->M_siswa->SemuaData();

    $this->load->view('templates/header', $data);
    // $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('user/index_user', $data_siswa);
    $this->load->view('templates/footer');
  }
}
