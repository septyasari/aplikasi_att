<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // cek_login();
    $this->load->model('M_menu');
  }
  public function index()
  {
    // if ($this->session->userdata('email')) {
    //   redirect('user');
    // }
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    // $data['menu'] = $this->M_menu->get_menu();
    // $data['judul'] = "Menu";
    // $data['content'] = 'v_manajement';

    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->M_menu->get_menu();
        $data['judul'] = "Menu";
        $data['content'] = 'v_manajement';

        $this->form_validation->set_rules('menu', 'Menu', 'required', [
          'required' => 'Nama menu harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
          $this->load->view('template/majestic_template', $data);
        } else {
          $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
          $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Menu berhasil ditambahkan !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          redirect('menu');
        }
      } else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }
  function edit($id)
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['menu'] = $this->M_menu->edit_data($where, 'user_menu')->result_array();
        $data['content'] = 'v_edit_menu';
        $data['judul'] = 'Edit Menu';
        $this->load->view('template/majestic_template', $data);
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  function menu_update()
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $id = $this->input->post('id');
        $data = array('menu' => $this->input->post('menu'));
        $where = array('id' => $id);
        $this->M_menu->update_data($where,$data,'user_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><small>Data berhasil diubah</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('menu');
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  function menu_delete($id)
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $where = array('id' => $id);
        $this->M_menu->delete_data($where,'user_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><small>Data berhasil dihapus</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('menu');
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  public function submenu()
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->M_menu->get_subMenu();
        $data['judul'] = "Submenu";
        $data['content'] = 'v_smmanajement';
        $data['menu'] = $this->M_menu->get_subMenuid();
        $data['get_menu'] = $this->M_menu->get_menuList();
        if (isset($_POST['is_active'])) {
          $is_active = $_POST['is_active'];
        } else {
          $is_active = 0;
        }
        // var_dump($is_active);
        // die;
        $this->form_validation->set_rules('title', 'Title', 'required', [
          'required' => 'Nama menu harus diisi!'
        ]);
        $this->form_validation->set_rules('menu_id', 'Menu', 'required', [
          'required' => 'Kolom menu tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('url', 'URL', 'required', [
          'required' => 'Url menu harus diisi!'
        ]);
        $this->form_validation->set_rules('icon', 'icon', 'required', [
          'required' => 'Icon menu harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
          $this->load->view('template/majestic_template', $data);
        } else {
          $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $is_active
          ];

          $this->db->insert('user_sub_menu', $data);
          $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Submenu berhasil ditambahkan !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          redirect('menu/submenu');
        }

      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }

  }

  function edit_sub($id)
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['menu'] = $this->M_menu->get_menu();
        $data['submenu'] = $this->M_menu->edit_data($where, 'user_sub_menu')->result_array();
        $data['content'] = 'v_edit_submenu';
        $data['judul'] = 'Edit Submenu';
        $this->load->view('template/majestic_template', $data);
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  function sub_update()
  {
    // $aktif = $this->input->post('aktif');
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        if (isset($_POST['aktif'])) {
          $aktif = $_POST['aktif'];
        } else {
          $aktif = 0;
        }
        // var_dump($aktif);

        $id = $this->input->post('id');
        $data = array(
          'menu_id' => $this->input->post('menu'),
          'title' => $this->input->post('title'),
          'url' => $this->input->post('url'),
          'icon' => $this->input->post('icon'),
          'is_active' => $aktif,

        );
        $where = array('id' => $id);
        $this->M_menu->update_data($where,$data,'user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><small>Data berhasil diubah</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('menu/submenu');
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  function sub_delete($id)
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $where = array('id' => $id);
        $this->M_menu->delete_data($where,'user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><small>Data berhasil dihapus</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('menu/submenu');
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  public function role()
  {
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['role'] = $this->M_menu->get_access();
        $data['judul'] = "Role Akses";
        $data['content'] = 'v_accessrole';

        $this->load->view('template/majestic_template', $data);
      } else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  public function roleAccess($role_id)
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->db->where('id !=', 2);
        $data['role'] = $this->M_menu->get_roleId($role_id);
        $data['menu'] = $this->M_menu->get_menuList();
        $data['judul'] = "Akses Manajement";
        $data['content'] = 'v_accessrole-role';

        $this->load->view('template/majestic_template', $data);
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  public function changeAccess()
  {
    $menu_id =  $this->input->post('menuId');
    $role_id =  $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id
    ];

    $result = $this->db->get_where('user_access_menu', $data);
    if ($result->num_rows() < 1) {
      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Role akses telah diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

  }

  public function user_akses()
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['data_user'] = $this->M_menu->get_user();
        $data['data_role'] = $this->M_menu->get_access();
        $data['judul'] = "User Akses";
        $data['content'] = 'v_user_akses';

        $this->load->view('template/majestic_template', $data);
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  public function akses_role($id)
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['data_role'] = $this->M_menu->get_access();
        $data['data_user'] = $this->M_menu->get_user_byId($id);
        $data['judul'] = "Akses Role";
        $data['content'] = 'v_akses_role';

        $this->load->view('template/majestic_template', $data);
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }

  function akses_role_update()
  {
    if (isset($_POST['aktif'])) {
      $aktif = $_POST['aktif'];
    } else {
      $aktif = 0;
    }
    // var_dump($aktif);

    $data = array (
      'role_Id' => $this->input->post('role_Id'),
      'is_active' => $aktif
    );
    $id = $this->input->post('id');

    $where = array('id' => $id);
    $this->M_menu->update_data($where,$data,'user');
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><small>Data berhasil diubah</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('menu/user_akses');
  }

  function akses_role_delete($id)
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    } else {
      $role_id = $this->session->userdata('role_id');
      if ($role_id == 1) {
        $where = array('id' => $id);
        $this->M_menu->delete_data($where,'user');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><small>Data berhasil dihapus</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('menu/user_akses');
      }
      else if ($role_id == 2) {
        $this->load->view('menu/v_error');
      }
    }
  }
}