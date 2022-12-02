<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WO extends CI_Controller
{
  function __construct()
	{
		parent::__construct();
		$this->load->model('M_wo'); 
	}

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Wo/vw_alldata';
    $data['content'] = 'Wo/vw_alldatawo';
    $this->load->view('template/majestic_template', $data);

  }

  public function detail($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Wo/vw_alldata';
    $data['judul'] = " Detail Monitoring";
    $data['monitoring'] = $this->M_wo->getDataMonitoring($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function detailwo($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Wo/vw_alldatawo';
    $data['judul'] = " Detail Input Wo";
    $data['inputwo'] = $this->M_wo->getDataWo($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function exportwo($id)
  {
    $data['wo'] = $this->M_wo->getDataWo();
    $this->load->view('wo/vw_exportdatawo', $data);
  }

  public function export($id)
  {
    $data['monitoring'] = $this->M_wo->getDataMonitoring();
    $this->load->view('wo/vw_exportdata', $data);
  }

  public function inputwo()
  {
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Wo/vw_wo';
    $data['judul'] = "Input Wo";
    $data['wo'] = $this->M_wo->getDataWo();
    $this->load->view('template/majestic_template', $data);
  }

  public function monitoring()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Wo/vw_monitoring';
    $data['judul'] = "Monitoring";
    $data['monitoring'] = $this->M_wo->getDataMonitoring();
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahData()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Wo/vw_tambahData';
    $data['judul'] = "Tambah Data";
    $data['monitoring'] = $this->M_wo->getDataMonitoring();
   
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahDatawo()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Wo/vw_tambahDatawo';
    $data['judul'] = "Tambah Data Input Wo";
    $data['monitoring'] = $this->M_wo->getDataWo();
   
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahwo()
  {
    $datawo = array(
      'nomor' => $this->input->post('nomor'),
      'perihal' => $this->input->post('perihal'),
      'tugas' => $this->input->post('tugas'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'lokasi' => $this->input->post('lokasi'),
      'target' => $this->input->post('target'),
      'realisasi' => $this->input->post('realisasi')
    );

      $this->M_wo->insert_wo($datawo);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Input Wo Berhasil Diinput.
        </div>');

        redirect('wo/tambahDatawo');

  }

  public function editdatawo($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Wo/vw_editwo';
    $data['judul'] = "Edit Input Wo";
    $data['wo'] = $this->M_wo->getDataWoById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function editwo()
  {
    if($this->input->post('data') == "input wo")
    {
      $id = $this->input->post('id');

      $datawo = array(
      'nomor' => $this->input->post('nomor'),
      'perihal' => $this->input->post('perihal'),
      'tugas' => $this->input->post('tugas'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'lokasi' => $this->input->post('lokasi'),
      'target' => $this->input->post('target'),
      'realisasi' => $this->input->post('realisasi')
      );
      //  var_dump($datawo);

      $this->M_jtm->update_inputwo($datawo, $id);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Input Wo Berhasil Diedit.
        </div>');
    }
    
      redirect('wo/Input Wo');
  }

  public function tambahmonitoring()
  {
    $datamonitoring = array(

      'no_wo' => $this->input->post('no_wo'),
      'tgl_terbit' => $this->input->post('tgl_terbit'),
      'uraian_pekerjaan' => $this->input->post('uraian_pekerjaan'),
      'lokasi' => $this->input->post('lokasi'),
      'vol_target' => $this->input->post('vol_target'),
      'satuan_target' => $this->input->post('satuan_target'),
      'vol_realisasi' => $this->input->post('vol_realisasi'),
      'satuan_realisasi' => $this->input->post('satuan_realisasi'),
      'tgl_realisasi' => $this->input->post('tgl_realisasi'),
      'keterangan' => $this->input->post('keterangan'),
      'status' => $this->input->post('status'),
      'pencapaian' => $this->input->post('pencapaian')
    );
    
      $this->M_wo->insert_monitoring($datamonitoring);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Monitoring Berhasil Diinput.
        </div>');

      redirect('wo/tambahData');
  }

  public function edit($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Wo/vw_edit';
    $data['judul'] = "Edit Monitoring";
    $data['monitoring'] = $this->M_wo->getDataMonitoringById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function editmonitoring()
  {
    if($this->input->post('data') == "monitoring")
    {
      $id = $this->input->post('id');

      $datamonitoring = array(
      'no_wo' => $this->input->post('no_wo'),
      'tgl_terbit' => $this->input->post('tgl_terbit'),
      'uraian_pekerjaan' => $this->input->post('uraian_pekerjaan'),
      'lokasi' => $this->input->post('lokasi'),
      'vol_target' => $this->input->post('vol_target'),
      'satuan_target' => $this->input->post('satuan_target'),
      'vol_realisasi' => $this->input->post('vol_realisasi'),
      'satuan_realisasi' => $this->input->post('satuan_realisasi'),
      'tgl_realisasi' => $this->input->post('tgl_realisasi'),
      'keterangan' => $this->input->post('keterangan'),
      'status' => $this->input->post('status'),
      'pencapaian' => $this->input->post('pencapaian')
      );
      //  var_dump($datamonitoring);

      $this->M_jtm->update_monitoring($datamonitoring, $id);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Monitoring Berhasil Diedit.
        </div>');
    }
    
      redirect('wo/monitoring');
  }

  function delete()
    {
        $id = $this->uri->segment(3);

        $this->db->delete('tb_monitoring', array('id' => $id));

        $this->session->set_flashdata('message_data', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus.
        </div>');

      redirect('wo/monitoring');

    }
}
