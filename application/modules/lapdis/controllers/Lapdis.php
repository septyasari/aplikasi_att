<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapdis extends CI_Controller
{
  function __construct()
	{
		parent::__construct();
		$this->load->model('M_lapdis'); 
	}

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_alldata';
    $data['content'] = 'Lapdis/vw_alldatapp';
    $data['content'] = 'Lapdis/vw_alldatase';
    $this->load->view('template/majestic_template', $data);
  }

  public function pp()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_pp';
    $data['judul'] = "Pekerjaan Pemeliharaan";
    $data['pp'] = $this->M_lapdis->getPp();
    $this->load->view('template/majestic_template', $data);
  }

  public function detail($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_alldatapp';
    $data['judul'] = " Detail Pekerjaan Pemeliharaan";
    $data['pp'] = $this->M_lapdis->getDataPp();
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahDatapp()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_tambahDatapp';
    $data['judul'] = "Tambah Data";
    $data['pp'] = $this->M_lapdis->getPp();
    $this->load->view('template/majestic_template', $data);
  }

   public function tambahpp()
  {
      $datapp = array(

        'tgl_pekerjaan' => $this->input->post('tgl_pekerjaan'),
        'no_tiang/gardu' => $this->input->post('no_tiang/gardu'),
        'penyulang' => $this->input->post('penyulang'),
        'kontruksi' => $this->input->post('kontruksi'),
        'jumlah' => $this->input->post('jumlah'),
        'lokasi' => $this->input->post('lokasi'),
        'uraian_pekerjaan' => $this->input->post('uraian_pekerjaan'),
        'sebelum' => $this->input->post('sebelum'),
        'pekerjaan' => $this->input->post('pekerjaan'),
        'sesudah' => $this->input->post('sesudah'),
        'petugas_pelaksana' => $this->input->post('petugas_pelaksana'),
        'keterangan' => $this->input->post('keterangan')
      );

      $this->M_lapdis->insert_pp($datapp);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Pekerjaan Pemeliharaan Berhasil Diinput.
        </div>');

      redirect('lapdis/tambahDatapp');
  }

  public function editdatapp($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_editpp';
    $data['judul'] = "Edit Pekerjaan Pemeliharaan";
    $data['pp'] = $this->M_lapdis->getDataPpById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function editpp()
  {
    if($this->input->post('data') == "pp")
    {
      $id = $this->input->post('id');

      $datapp = array(
      'tgl_pekerjaan' => $this->input->post('tgl_pekerjaan'),
      'no_tiang/gardu' => $this->input->post('no_tiang/gardu'),
      'penyulang' => $this->input->post('penyulang'),
      'kontruksi' => $this->input->post('kontruksi'),
      'jumlah' => $this->input->post('jumlah'),
      'lokasi' => $this->input->post('lokasi'),
      'uraian_pekerjaan' => $this->input->post('uraian_pekerjaan'),
      'sebelum' => $this->input->post('sebelum'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'sesudah' => $this->input->post('sesudah'),
      'petugas_pelaksana' => $this->input->post('petugas_pelaksana'),
      'keterangan' => $this->input->post('keterangan')
      );
      //  var_dump($datapp);

      $this->M_jtm->update_pp($datapp, $id);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Pekerjaan Pemeliharaan Berhasil Diedit.
        </div>');
    }
    
      redirect('lapdis/pp');
  }

  public function exportpp()
  {
    $data['pp'] = $this->M_lapdis->getDataPp();
    $this->load->view('lapdis/vw_exportdatapp', $data);
  }

  public function gsp()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_gsp';
    $data['judul'] = "GSP";
    $data['gsp'] = $this->M_lapdis->getGsp();
    $this->load->view('template/majestic_template', $data);
  }

  public function detailgsp($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_alldatagsp';
    $data['judul'] = " Detail GSP";
    $data['gsp'] = $this->M_lapdis->getDataGsp();
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahData()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_tambahData';
    $data['judul'] = "Tambah Data";
    $data['gsp'] = $this->M_lapdis->getGsp();
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahgsp()
  {
      $datagsp = array(

        'tanggal' => $this->input->post('tanggal'),
        'regu_perampalan' => $this->input->post('regu_perampalan'),
        'no_tiang/gardu' => $this->input->post('no_tiang/gardu'),
        'penyulang' => $this->input->post('penyulang'),
        'jenis_pohon' => $this->input->post('jenis_pohon'),
        'pohon' => $this->input->post('pohon'),
        'gardu' => $this->input->post('gardu'),
        'layangan' => $this->input->post('layangan'),
        'akar' => $this->input->post('akar'),
        'animal_guard' => $this->input->post('animal_guard'),
        'rantas' => $this->input->post('rantas'),
        'lokasi' => $this->input->post('lokasi'),
        'status' => $this->input->post('status'),
        'keterangan' => $this->input->post('keterangan')
      );

      $this->M_lapdis->insert_gsp($datagsp);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data GSP Berhasil Diinput.
        </div>');

      redirect('lapdis/tambahData');
  }

  public function editdatagsp($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_editgsp';
    $data['judul'] = "Edit GSP";
    $data['gsp'] = $this->M_lapdis->getGspById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function editGsp()
  {
    if($this->input->post('data') == "gsp")
    {
      $id = $this->input->post('id');

      $datagsp = array(
      'tanggal' => $this->input->post('tanggal'),
      'regu_perampalan' => $this->input->post('regu_perampalan'),
      'no_tiang/gardu' => $this->input->post('no_tiang/gardu'),
      'penyulang' => $this->input->post('penyulang'),
      'jenis_pohon' => $this->input->post('jenis_pohon'),
      'pohon' => $this->input->post('pohon'),
      'gardu' => $this->input->post('gardu'),
      'layangan' => $this->input->post('layangan'),
      'akar' => $this->input->post('akar'),
      'animal_guard' => $this->input->post('animal_guard'),
      'rantas' => $this->input->post('rantas'),
      'lokasi' => $this->input->post('lokasi'),
      'status' => $this->input->post('status'),
      'keterangan' => $this->input->post('keterangan')
      );
      //  var_dump($datagsp);

      $this->M_lapdis->update_gsp($datagsp, $id);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data GSP Berhasil Diedit.
        </div>');
    }
    
      redirect('lapdis/gsp');
  }

  public function exportgsp()
  {
    $data['gsp'] = $this->M_lapdis->getDataGsp();
    $this->load->view('lapdis/vw_exportdata', $data);
  }

   public function se()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_se';
    $data['judul'] = "SE 017";
    $data['se'] = $this->M_lapdis->getSe();
    $this->load->view('template/majestic_template', $data);
  }

  public function detailse($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_alldatase';
    $data['judul'] = " Detail SE";
    $data['se'] = $this->M_lapdis->getDataSe();
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahDatase()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_tambahDatase';
    $data['judul'] = "Tambah Data";
    $data['se'] = $this->M_lapdis->getSe();
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahse()
  {

      $datase = array(

        'nama_gardu' => $this->input->post('nama_gardu'),
        'lokasi_gardu' => $this->input->post('lokasi_gardu'),
        'ulp' => $this->input->post('ulp'),
        'up3' => $this->input->post('up3'),
        'waktu_pelaksana' => $this->input->post('waktu_pelaksana'),
        'kva' => $this->input->post('kva'),
        'tipe_seal' => $this->input->post('tipe_seal'),
        'kelas' => $this->input->post('kelas'),
        'kategori' => $this->input->post('kategori'),
        'inspeksi_fisik' => $this->input->post('inspeksi_fisik'),
        'karakteristik_tier1' => $this->input->post('karakteristik_tier1'),
        'health_tier1' => $this->input->post('health_tier1'),
        'karakteristik_tier2' => $this->input->post('karakteristik_tier2'),
        'health_tier2' => $this->input->post('health_tier2'),
        'tier3' => $this->input->post('tier3'),
        'health_index' => $this->input->post('health_index'),
        'catatan_perbaikan' => $this->input->post('catatan_perbaikan')
      );

      $this->M_lapdis->insert_se($datase);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Se 017 Berhasil Diinput.
        </div>');

      redirect('lapdis/tambahDatase');
  }

  public function editdatase($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Lapdis/vw_editse';
    $data['judul'] = "Edit SE 017";
    $data['se'] = $this->M_lapdis->getDataSeById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function editSe()
  {
    if($this->input->post('data') == "se")
    {
      $id = $this->input->post('id');

      $datase = array(
      'nama_gardu' => $this->input->post('nama_gardu'),
      'lokasi_gardu' => $this->input->post('lokasi_gardu'),
      'ulp' => $this->input->post('ulp'),
      'up3' => $this->input->post('up3'),
      'waktu_pelaksana' => $this->input->post('waktu_pelaksana'),
      'kva' => $this->input->post('kva'),
      'tipe_seal' => $this->input->post('tipe_seal'),
      'kelas' => $this->input->post('kelas'),
      'kategori' => $this->input->post('kategori'),
      'inspeksi_fisik' => $this->input->post('inspeksi_fisik'),
      'karakteristik_tier1' => $this->input->post('karakteristik_tier1'),
      'health_tier1' => $this->input->post('health_tier1'),
      'karakteristik_tier2' => $this->input->post('karakteristik_tier2'),
      'health_tier2' => $this->input->post('health_tier2'),
      'tier3' => $this->input->post('tier3'),
      'health_index' => $this->input->post('health_index'),
      'catatan_perbaikan' => $this->input->post('catatan_perbaikan')
      );
      //  var_dump($datase);

      $this->M_lapdis->update_se($datase, $id);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data SE 017 Berhasil Diedit.
        </div>');
    }
    
      redirect('lapdis/se');
  }

  public function exportse()
  {
    $data['se'] = $this->M_lapdis->getDataSe();
    $this->load->view('lapdis/vw_exportdatase', $data);
  }
  


  

  function delete()
    {
        $id = $this->uri->segment(3);

        $this->db->delete('tb_gsp', array('id' => $id));

        $this->session->set_flashdata('message_data', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus.
        </div>');

      redirect('lapdis/gsp');

    }

}
