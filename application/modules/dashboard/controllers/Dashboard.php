<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // cek_login();
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['judul'] = "Beranda";
    $data['content'] = 'vw_dashboard';
    $this->load->view('template/majestic_template', $data);
  }
}

