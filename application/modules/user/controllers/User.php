<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_user');
    // cek_login();
  }
  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['judul'] = "Profil Saya";
    $data['content'] = 'v_user';
    $this->load->view('template/majestic_template', $data);
  }

  public function edit()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('name', 'Full Name', 'required|trim', [
      'required' => 'Nama Panjang harus diisi'
    ]);
    if ($this->form_validation->run() == false) {
      $data['judul'] = "Edit Profil";
      $data['content'] = 'v_edit';
      $this->load->view('template/majestic_template', $data);
    }
    else {
      $name = $this->input->post('name');
      $email = $this->input->post('email');

      // cek Gambar
      $upload_image = $_FILES['image']['name'];
      // echo($upload_image);
      print($upload_image);

      if ($upload_image) {
        $config['upload_path'] = './assets/img/profile/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '2048';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
          $old_image = $data['user']['image'];
          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('image', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }


      $this->M_user->update_profil($name, $email);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><small><strong>Profil</strong> anda sudah berubah !</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      redirect('user');
    }
  }

  public function changePassword()
  {
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim', [
      'required' => 'Password harus diisi',
    ]);
    $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]', [
      'required' => 'Password baru harus diisi',
      'matches' => 'Password baru tidak sama dengan Konfirmasi password',
      'min_length' => 'Password terlalu pendek'
    ]);
    $this->form_validation->set_rules('new_password2', 'Comfirm New Password', 'required|trim|min_length[3]|matches[new_password2]', [
      'required' => 'Konfirmasi Password harus diisi',
      'matches' => 'Password baru tidak sama dengan Konfirmasi password',
      'min_length' => 'Password terlalu pendek'
    ]);
    if ($this->form_validation->run() == false) {
      $data['judul'] = "Ubah Password";
      $data['content'] = 'v_changePs';
      $this->load->view('template/majestic_template', $data);
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');
      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><small><strong>Password</strong> saat ini salah!</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('user/changePassword');
      }
      else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><small><strong>Password</strong> tidak boleh sama dengan password yang saat ini!</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          redirect('user/changePassword');
        }
        else {
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');

          $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><small><strong>Password</strong> berhasil diubah!</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          redirect('user/changePassword');
        }
      }
    }
  }
}
