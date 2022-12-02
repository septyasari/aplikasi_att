<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jtm extends CI_Controller
{
  function __construct()
	{
		parent::__construct();
		$this->load->model('M_jtm'); 
	}

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Jtm/vw_alldata';
    $this->load->view('template/majestic_template', $data);
  }

  public function detail($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Jtm/vw_alldata';
    $data['judul'] = " Detail JTM";
    $data['pelaksana'] = $this->M_jtm->getDataPelaksanajtmById($id);
    $data['kontruksi'] = $this->M_jtm->getDataKontruksijtmById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function export($id)
  {
    $data['pelaksana'] = $this->M_jtm->getDataPelaksanajtmById($id);
    $data['kontruksi'] = $this->M_jtm->getDataKontruksijtmById($id);
    $this->load->view('jtm/vw_exportdata', $data);
  }

  public function inspeksi()
  {
    $data['join'] = $this->M_jtm->joindata();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Jtm/vw_inspeksi';
    $data['judul'] = "Inspeksi";
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahData()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Jtm/vw_tambahData';
    $data['judul'] = "Tambah Data";
    $data['pelaksana'] = $this->M_jtm->getDataPelaksanajtm();

    $this->load->view('template/majestic_template', $data);
  }

  public function tambahpelaksana()
  {
    if (!$this->M_jtm->getDataPelaksanajtm($_POST['penyulang'])) {
      
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      data Sudah Diinputkan.
      </div>');
      
      redirect('jtm/tambahData');

    } else {

      $datapelaksanajtm = array(
        'garduinduk' => $this->input->post('garduinduk'),
        'penyulang' => $this->input->post('penyulang'),
        'petugas' => $this->input->post('petugas'),
        'tanggal' => $this->input->post('tanggal'),
        'total' => $this->input->post('total'),
      );
      
      $this->M_jtm->insert_pelaksanajtm($datapelaksanajtm);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Pelaksana Berhasil Diinput.
        </div>');

      redirect('jtm/tambahData');

    }
  }

  public function tambahkontruksijtm()
  {
    $config['upload_path']      ='./uploads/';
    $config['allowed_types']    ='gif|jpg|png';
    $config['max-size']         = 500; // size 500kb
    $config['max-width']        = 2048; // width 2048px
    $config['max-height']       = 1000; // height 768px
    $config['encrypt_name'] 		= true;
    $this->load->library('upload', $config);

    echo '<pre>';
      // print_r ($this->upload->do_upload('file'));
      print_r ($this->upload->data());
      // print_r ($_FILES['gambaratas']);
      die;

    if (!$this->M_jtm->getDataKontruksijtm($_POST['id_penyulang'])) {

      $this->session->set_flashdata('message_kontruksi', '<div class="alert alert-danger" role="alert">
      Data gagal diinput.   
      </div>');

      redirect('jtm/tambahData');

    } else {

      $datakonstruksijtm = array(

        'id_penyulang' => $this->input->post('id_penyulang'),
        'nomor' => $this->input->post('nomor'),
        'jenis' => $this->input->post('jenis'),
        'keadaan' => $this->input->post('keadaan'),
        'tinggi' => $this->input->post('tinggi'),
        'kekuatan' => $this->input->post('kekuatan'),
        'penghalangpanjat' => $this->input->post('penghalangpanjat'),
        'kepemilikan' => $this->input->post('kepemilikan'),
        'panjanghantaran' => $this->input->post('panjanghantaran'),
        'jenispenghantar' => $this->input->post('jenispenghantar'),
        'jeniskawat' => $this->input->post('jeniskawat'),
        'jenisikatanhantaran' => $this->input->post('jenisikatanhantaran'),
        'jenistegangan' => $this->input->post('jenistegangan'),
        // 'tiang' => $this->input->post('tiang'),
        // 'row' => $this->input->post('row'),
        'masalah' => $this->input->post('masalah'),
        'saran' => $this->input->post('saran'),
        // 'utuh' => $this->input->post('utuh'),
        // 'atas' => $this->input->post('atas'),
        // 'bawah' => $this->input->post('bawah'),
        'konstruksi' => $this->input->post('konstruksi'),
        'alamat' => $this->input->post('alamat')
      );

      
      $this->M_jtm->insert_konstruksijtm($datakonstruksijtm);

      $this->session->set_flashdata('message_kontruksi', '<div class="alert alert-success" role="alert">
        Data Konstruksi Berhasil Diinput.
        </div>');

      redirect('jtm/tambahData');

    }
  }

  public function edit($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'JTM/vw_editinspeksi';
    $data['judul'] = "Edit Inspeksi";
    $data['pelaksana'] = $this->M_jtm->getDataPelaksanajtmById($id);
    $data['kontruksi'] = $this->M_jtm->getDataKontruksijtmById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function editinspeksi()
  {
    if($this->input->post('data') == "pelaksana")
    {
      $id = $this->input->post('id');

      $datapelaksanajtm = array(
        'garduinduk' => $this->input->post('garduinduk'),
        'penyulang' => $this->input->post('penyulang'),
        'petugas' => $this->input->post('petugas'),
        'tanggal' => $this->input->post('tanggal'),
        'total' => $this->input->post('total'),
      );
      //  var_dump($datapelaksanajtm);

      $this->M_jtm->update_pelaksanajtm($datapelaksanajtm, $id);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Pelaksana Berhasil Diedit.
        </div>');
    }

    if($this->input->post('data') == "kontruksi")
    {
      $id = $this->input->post('id');

      $datakontruksijtm = array(

        'id_penyulang' => $this->input->post('id_penyulang'),
        'nomor' => $this->input->post('nomor'),
        'jenis' => $this->input->post('jenis'),
        'keadaan' => $this->input->post('keadaan'),
        'tinggi' => $this->input->post('tinggi'),
        'kekuatan' => $this->input->post('kekuatan'),
        'penghalangpanjat' => $this->input->post('penghalangpanjat'),
        'kepemilikan' => $this->input->post('kepemilikan'),
        'panjanghantaran' => $this->input->post('panjanghantaran'),
        'jenispenghantar' => $this->input->post('jenispenghantar'),
        'jeniskawat' => $this->input->post('jeniskawat'),
        'jenisikatanhantaran' => $this->input->post('jenisikatanhantaran'),
        'jenistegangan' => $this->input->post('jenistegangan'),
        // 'tiang' => $this->input->post('tiang'),
        // 'row' => $this->input->post('row'),
        'masalah' => $this->input->post('masalah'),
        'saran' => $this->input->post('saran'),
        // 'utuh' => $this->input->post('utuh'),
        // 'atas' => $this->input->post('atas'),
        // 'bawah' => $this->input->post('bawah'),
        'konstruksi' => $this->input->post('konstruksi'),
        'alamat' => $this->input->post('alamat')
      );

      $this->M_jtm->update_konstruksijtm($datakontruksijtm, $id);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Kontruksi Berhasil Diedit.
        </div>');

    }
    
      redirect('jtm/inspeksi');
  }



  function delete()
    {
        $id = $this->uri->segment(3);

        $this->db->delete('tb_pelaksanajtm', array('id' => $id));
        $this->db->delete('tb_kontruksijtm', array('id_penyulang' => $id));

        $this->session->set_flashdata('message_data', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus.
        </div>');

      redirect('jtm/inspeksi');

    }

}
