<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gardu extends CI_Controller
{
  function __construct()
	{
		parent::__construct();
		$this->load->model('M_gardu');
	}

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Gardu/vw_alldata';
    $data['content'] = 'Gardu/vw_alldatagangguan';
    $this->load->view('template/majestic_template', $data);
  }

  public function inspeksi()//inspeksi
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Gardu/vw_inspeksi';
    $data['judul'] = "Inspeksi";
    $data['join'] = $this->M_gardu->joindata();
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahData()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Gardu/vw_tambahData';
    $data['judul'] = "Tambah Data";
    $data['pelaksana'] = $this->M_gardu->getDataPelaksana();
    $data['jurusan'] = $this->M_gardu->getDataJurusan();

    $this->load->view('template/majestic_template', $data);
  }

  public function tambahpelaksana()
  {
    if ($this->M_gardu->getDataGarduPelaksana($_POST['no_gardu'])) {

      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Nomor Gardu Sudah Diinputkan.
      </div>');

      redirect('gardu/tambahData');

    } else {

      $datapelaksana = array(

        'no_gardu' => $this->input->post('no_gardu'),
        'tanggal' => $this->input->post('tanggal'),
        'petugas' => $this->input->post('petugas'),
        'penyulang' => $this->input->post('penyulang'),
        'lokasi' => $this->input->post('lokasi'),
        'type' => $this->input->post('type'),
        'kapasitas' => $this->input->post('kapasitas')

      );

      $this->M_gardu->insert_pelaksana($datapelaksana);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Pelaksana Berhasil Diinput.
        </div>');

      redirect('gardu/tambahData');

    }
  }

  public function tambahtrafo()
  {

    if ($this->M_gardu->getDataGarduTrafo($_POST['id_gardu'])) {

      $this->session->set_flashdata('message_trafo', '<div class="alert alert-danger" role="alert">
      Id Gardu Sudah Diinputkan.
      </div>');

      redirect('gardu/tambahData');

    } else {

      $datatrafo = array(

        'id_gardu' => $this->input->post('id_gardu'),
        'up3' => $this->input->post('up3'),
        'ulp' => $this->input->post('ulp'),
        'merk' => $this->input->post('merk'),
        'tahunpembuatan' => $this->input->post('tahunpembuatan'),
        'beratminyak' => $this->input->post('beratminyak'),
        'berattotal' => $this->input->post('berattotal')

      );

      $this->M_gardu->insert_trafo($datatrafo);

      $this->session->set_flashdata('message_trafo', '<div class="alert alert-success" role="alert">
        Data Trafo Berhasil Diinput.
        </div>');

      redirect('gardu/tambahData');

    }
  }

  public function tambahpemeriksaan()
  {

    if ($this->M_gardu->getDataGarduPemeriksa($_POST['id_gardu'])) {

      $this->session->set_flashdata('message_pemeriksa', '<div class="alert alert-danger" role="alert">
      Id Gardu Sudah Diinputkan.
      </div>');

      redirect('gardu/tambahData');

    } else {

      if(isset($_POST['save']))
        {
          $id_gardu = $this->input->post('id_gardu');//Pass the userid here
          $checkbox = $_POST['check'];
          for($i=0;$i<count($checkbox);$i++){
            $bidangyangdiperiksa = $checkbox[$i];
            $this->M_gardu->insert_pemeriksaan($id_gardu, $bidangyangdiperiksa);//Call the modal

          }
          $this->session->set_flashdata('message_pemeriksa', '<div class="alert alert-success" role="alert">
          Data Pemeriksaan Berhasil Diinput.
          </div>');

        redirect('gardu/tambahData');
        }
    }

  }

  public function tambahpemerhatikan()
  {

    for ($i=1; $i < 28; $i++) {

      if ($this->M_gardu->getDataGarduPemerhatikan($_POST['id_gardu'][$i])) {

        $this->session->set_flashdata('message_pemerhatikan', '<div class="alert alert-danger" role="alert">
        Id Gardu Sudah Diinputkan.
        </div>');

        redirect('gardu/tambahData');

      } else {

        $bidang = $this->input->post('nama_bidang');
        $result = array();
        foreach ($bidang as $bdg => $val) {
          $result[] = array(
            "id_gardu" => $_POST['id_gardu'][$bdg],
            "nama_bidang" => $_POST['nama_bidang'][$bdg],
            "kondisi" => $_POST['kondisi'][$bdg],
            "saran" => $_POST['saran'][$bdg],
            "tanggal" => $_POST['tanggal'][$bdg],
            "keterangan" => $_POST['keterangan'][$bdg]
          );
        }

        $query = $this->db->insert_batch('tb_pemerhatikan', $result);

        if ($query) {
          $this->session->set_flashdata('message_pemerhatikan', '<div class="alert alert-success" role="alert">
            Data Pemeriksaan Berhasil Diinput.
            </div>');

          redirect('gardu/tambahData');
        }
        else {
          $this->session->set_flashdata('message_pemerhatikan', '<div class="alert alert-danger" role="alert">
            Data Pemeriksaan Gagal Terinput.
            </div>');
        }

      }
    }

  }

  public function tambahnhfuse()
  {

    for ($i=1; $i < 5; $i++) {

      if ($this->M_gardu->getDataGarduNHFuse($_POST['id_gardu'])) {

        $this->session->set_flashdata('message_nhfuse', '<div class="alert alert-danger" role="alert">
        Id Gardu Sudah Diinputkan.
        </div>');

        redirect('gardu/tambahData');

      } else {

        $jurusan = $this->input->post('id_jurusan');
        $result = array();
        foreach ($jurusan as $jrs => $val) {
          $result[] = array(
            "id_gardu" => $_POST['id_gardu'][$jrs],
            "id_jurusan" => $_POST['id_jurusan'][$jrs],
            "r" => $_POST['r'][$jrs],
            "s" => $_POST['s'][$jrs],
            "t" => $_POST['t'][$jrs]
          );
        }

        $query = $this->db->insert_batch('tb_nhfuse', $result);

        if ($query) {
          $this->session->set_flashdata('message_nhfuse', '<div class="alert alert-success" role="alert">
            Data NHFUSE Berhasil Diinput.
            </div>');

          redirect('gardu/tambahData');
        }
        else {
          $this->session->set_flashdata('message_nhfuse', '<div class="alert alert-danger" role="alert">
            Data NHFUSE Gagal Terinput.
            </div>');
        }
      }
    }
  }

  public function tambahhasilpengukuran()
  {

    if ($this->M_gardu->getDataGarduPengukuran($_POST['id_gardu'])) {

      $this->session->set_flashdata('message_pengukuran', '<div class="alert alert-danger" role="alert">
      Id Gardu Sudah Diinputkan.
      </div>');

      redirect('gardu/tambahData');

    } else {

      $datapengukuran = array(

        'id_gardu' => $this->input->post('id_gardu'),
        'nol_omega' => $this->input->post('nol_omega'),
        'body_omega' => $this->input->post('body_omega'),
        'arrester_omega' => $this->input->post('arrester_omega'),
        'nol_ma' => $this->input->post('nol_ma'),
        'body_ma' => $this->input->post('body_ma'),
        'arrester_ma' => $this->input->post('arrester_ma')

      );

      $this->M_gardu->insert_hasil_pengukuran($datapengukuran);

      $this->session->set_flashdata('message_pengukuran', '<div class="alert alert-success" role="alert">
        Data Hasil Pengukuran Berhasil Diinput.
        </div>');

      redirect('gardu/tambahData');

    }
  }

  public function tambahinduk()
  {

    for ($i=1; $i < 3; $i++) {

      if ($this->M_gardu->getDataGarduInduk($_POST['id_gardu'])) {

        $this->session->set_flashdata('message_induk', '<div class="alert alert-danger" role="alert">
        Id Gardu Sudah Diinputkan.
        </div>');

        redirect('gardu/tambahData');

      } else {

        $r = $this->input->post('r');
        $result = array();
        foreach ($r as $valr => $val) {
          $result[] = array(
            "id_gardu" => $_POST['id_gardu'][$valr],
            "waktu" => $_POST['waktu'][$valr],
            "r" => $_POST['r'][$valr],
            "s" => $_POST['s'][$valr],
            "t" => $_POST['t'][$valr],
            "n" => $_POST['n'][$valr],
            "tegphb" => $_POST['tegphb'][$valr]
          );
        }

        $query = $this->db->insert_batch('tb_induk', $result);

        if ($query) {
          $this->session->set_flashdata('message_induk', '<div class="alert alert-success" role="alert">
            Data Induk Berhasil Diinput.
            </div>');

          redirect('gardu/tambahData');
        }
        else {
          $this->session->set_flashdata('message_induk', '<div class="alert alert-danger" role="alert">
            Data Induk Gagal Terinput.
            </div>');
        }
      }
    }

  }

  public function tambahjurusan()
  {
    for ($i=1; $i < 11; $i++) {
      if ($this->M_gardu->getDataGarduJurusan($_POST['id_gardu'])) {

        $this->session->set_flashdata('message_jurusan', '<div class="alert alert-danger" role="alert">
        Id Gardu Sudah Diinputkan.
        </div>');

        redirect('gardu/tambahData');

      } else {

        $id_gardu = $this->input->post('id_gardu')[0];
        $r = $this->input->post('r');
        $result = array();
        foreach ($r as $valr => $val) {
          $result[] = array(
            "id_gardu" => $_POST['id_gardu'][$valr],
            "id_jurusan" => $_POST['id_jurusan'][$valr],
            "waktu" => $_POST['waktu'][$valr],
            "r" => $_POST['r'][$valr],
            "s" => $_POST['s'][$valr],
            "t" => $_POST['t'][$valr],
            "n" => $_POST['n'][$valr],
            "tegphb" => $_POST['tegphb'][$valr]
          );
        }

        $query = $this->db->insert_batch('tb_jrs', $result);

        $query_bebanrealsiang="INSERT INTO tb_bebanreal (id_gardu, nilai, waktu) VALUES($id_gardu, (SELECT FORMAT(((tb_induk.r * tb_jrs.tegphb) + (tb_induk.s * (SELECT tb_jrs.tegphb FROM tb_jrs WHERE tb_jrs.id_jurusan = 5 AND tb_jrs.waktu = 'Siang')) + (tb_induk.t * tb_induk.tegphb)) / 1000, 2) FROM tb_pelaksana LEFT JOIN tb_jrs ON tb_jrs.id_gardu = tb_pelaksana.id LEFT JOIN tb_induk ON tb_induk.id_gardu = tb_pelaksana.id WHERE tb_jrs.waktu = 'Siang' AND tb_induk.waktu = 'Siang' AND tb_jrs.id_jurusan = 4), 'Siang')";
        $this->db->query($query_bebanrealsiang);

        $query_bebanrealmalam="INSERT INTO tb_bebanreal (id_gardu, nilai, waktu) VALUES($id_gardu, (SELECT FORMAT(((tb_induk.r * tb_jrs.tegphb) + (tb_induk.s * (SELECT tb_jrs.tegphb FROM tb_jrs WHERE tb_jrs.id_jurusan = 5 AND tb_jrs.waktu = 'Malam')) + (tb_induk.t * tb_induk.tegphb)) / 1000, 2) FROM tb_pelaksana LEFT JOIN tb_jrs ON tb_jrs.id_gardu = tb_pelaksana.id LEFT JOIN tb_induk ON tb_induk.id_gardu = tb_pelaksana.id WHERE tb_jrs.waktu = 'Malam' AND tb_induk.waktu = 'Malam' AND tb_jrs.id_jurusan = 4), 'Malam')";
        $this->db->query($query_bebanrealmalam);

        $query_nilaibebansiang = "INSERT INTO tb_beban (id_gardu, nilai, waktu, hasil) VALUES($id_gardu, (SELECT FORMAT(FORMAT(((SELECT tb_bebanreal.nilai FROM tb_bebanreal WHERE tb_bebanreal.id_gardu = $id_gardu AND tb_bebanreal.waktu = 'Siang') / tb_pelaksana.kapasitas), 2) * 100, 0) FROM tb_pelaksana WHERE tb_pelaksana.id = $id_gardu), 'Siang', (SELECT IF(FORMAT(FORMAT(((SELECT tb_bebanreal.nilai FROM tb_bebanreal WHERE tb_bebanreal.id_gardu = $id_gardu AND tb_bebanreal.waktu = 'Siang') / tb_pelaksana.kapasitas), 2) * 100, 0) > 85, 'LAPOR', 'TIDAK') FROM tb_pelaksana WHERE tb_pelaksana.id = $id_gardu))";
        $this->db->query($query_nilaibebansiang);

        $query_nilaibebanmalam = "INSERT INTO tb_beban (id_gardu, nilai, waktu, hasil) VALUES($id_gardu, (SELECT FORMAT(FORMAT(((SELECT tb_bebanreal.nilai FROM tb_bebanreal WHERE tb_bebanreal.id_gardu = $id_gardu AND tb_bebanreal.waktu = 'Malam') / tb_pelaksana.kapasitas), 2) * 100, 0) FROM tb_pelaksana WHERE tb_pelaksana.id = $id_gardu), 'Malam', (SELECT IF(FORMAT(FORMAT(((SELECT tb_bebanreal.nilai FROM tb_bebanreal WHERE tb_bebanreal.id_gardu = $id_gardu AND tb_bebanreal.waktu = 'Malam') / tb_pelaksana.kapasitas), 2) * 100, 0) > 85, 'LAPOR', 'TIDAK') FROM tb_pelaksana WHERE tb_pelaksana.id = $id_gardu))";
        $this->db->query($query_nilaibebanmalam);

        $query_penyeimbang = "INSERT INTO tb_penyeimbang (id_gardu, beban_puncak, max, min, selisih, hasil) VALUES($id_gardu, (SELECT IF(GREATEST((SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Malam'))=(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),'SIANG','MALAM')), (SELECT IF(IF(GREATEST((SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Malam'))=(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),'SIANG','MALAM')='MALAM', GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam')), GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang')))), (SELECT IF(IF(GREATEST((SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Malam'))=(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),'SIANG','MALAM')='MALAM', LEAST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam')), LEAST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang')))), (SELECT FORMAT(+((((SELECT IF(IF(GREATEST((SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Malam'))=(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),'SIANG','MALAM')='MALAM', GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam')), GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'))))-(SELECT IF(IF(GREATEST((SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Malam'))=(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),'SIANG','MALAM')='MALAM', LEAST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam')), LEAST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang')))))/(SELECT IF(IF(GREATEST((SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Malam'))=(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),'SIANG','MALAM')='MALAM', GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam')), GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang')))))*100),0)), (SELECT IF((SELECT FORMAT(+((((SELECT IF(IF(GREATEST((SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Malam'))=(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),'SIANG','MALAM')='MALAM', GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam')), GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'))))-(SELECT IF(IF(GREATEST((SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Malam'))=(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),'SIANG','MALAM')='MALAM', LEAST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam')), LEAST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang')))))/(SELECT IF(IF(GREATEST((SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Malam'))=(SELECT tb_beban.nilai FROM tb_beban WHERE tb_beban.id_gardu = $id_gardu AND tb_beban.waktu = 'Siang'),'SIANG','MALAM')='MALAM', GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Malam')), GREATEST((SELECT tb_induk.r FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.s FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang'), (SELECT tb_induk.t FROM tb_induk WHERE tb_induk.id_gardu = $id_gardu AND tb_induk.waktu = 'Siang')))))*100),0))<20,'SEIMBANG', 'PERLU PENYEIMBANGAN')))";
        $this->db->query($query_penyeimbang);

        if ($query) {
          $this->session->set_flashdata('message_jurusan', '<div class="alert alert-success" role="alert">
            Data Jurusan Berhasil Diinput.
            </div>');

          redirect('gardu/tambahData');
        }
        else {
          $this->session->set_flashdata('message_jurusan', '<div class="alert alert-danger" role="alert">
            Data Jurusan Gagal Terinput.
            </div>');
        }
      }
    }
  }

  public function detail($id)//detail inspeksi
  {
    $data['keterangan'] = $this->M_gardu->getKeterangan($id);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Gardu/vw_alldata';
    $data['judul'] = "Detail Inspeksi";
    $data['pelaksana'] = $this->M_gardu->getDataPelaksanaById($id);
    $data['pemeriksa'] = $this->M_gardu->getDataPeriksaById($id);
    $data['pemerhatikan'] = $this->M_gardu->getDataPemerhatikanById($id);
    $data['nhfuse'] = $this->M_gardu->getDataNHFUSEById($id);
    $data['beban'] = $this->M_gardu->getDataBebanById($id);
    $data['bebanreal'] = $this->M_gardu->getDataBebanRealById($id);
    $data['hslpengukuran'] = $this->M_gardu->getDataPengukuranById($id);
    $data['induk'] = $this->M_gardu->getDataIndukById($id);
    $data['jurusan'] = $this->M_gardu->getDataJurusan();
    $data['jrs'] = $this->M_gardu->getDataJrsSiang($id);
    $data['penyeimbang'] = $this->M_gardu->getDataPenyeimbanganById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function export($id)//export inspeksi
  {
    $data['pelaksana'] = $this->M_gardu->getDataPelaksanaById($id);
    $data['pemeriksa'] = $this->M_gardu->getDataPeriksaById($id);
    $data['pemerhatikan'] = $this->M_gardu->getDataPemerhatikanById($id);
    $data['nhfuse'] = $this->M_gardu->getDataNHFUSEById($id);
    $data['beban'] = $this->M_gardu->getDataBebanById($id);
    $data['bebanreal'] = $this->M_gardu->getDataBebanRealById($id);
    $data['hslpengukuran'] = $this->M_gardu->getDataPengukuranById($id);
    $data['induk'] = $this->M_gardu->getDataIndukById($id);
    $data['penyeimbang'] = $this->M_gardu->getDataPenyeimbanganById($id);
    $this->load->view('gardu/vw_exportdata', $data);
  }

  // for view data edit inspeksi controller
  public function edit($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Gardu/vw_editinspeksi';
    $data['judul'] = "Edit Inspeksi";
    $data['pelaksana'] = $this->M_gardu->getDataPelaksanaById($id);
    $data['pemeriksa'] = $this->M_gardu->getDataPeriksaById($id);
    // echo "<pre>";
    // var_dump($data['pemeriksa']);
    // die;

    // view for pills tab in edit inspeksi data form
    $data['pills_pelaksana'] = 'Gardu/component/pills/edit_inspeksi/pelaksana';
    $data['pills_trafo'] = 'Gardu/component/pills/edit_inspeksi/trafo';
    $data['pills_pemeriksaan'] = 'Gardu/component/pills/edit_inspeksi/pemeriksaan';
    $data['pills_pemerhatikan'] = 'Gardu/component/pills/edit_inspeksi/pemerhatikan';
    $data['pills_nhfuse'] = 'Gardu/component/pills/edit_inspeksi/nhfuse';
    $data['pills_hasilpengukuran'] = 'Gardu/component/pills/edit_inspeksi/hasilpengukuran';
    $data['pills_induk'] = 'Gardu/component/pills/edit_inspeksi/induk';
    $data['pills_datajurusan'] = 'Gardu/component/pills/edit_inspeksi/datajurusan';
    $data['pills_keterangan'] = 'Gardu/component/pills/edit_inspeksi/keterangan';

    $data['get_id'] = $id;

    $this->load->view('template/majestic_template', $data);


  }

  public function editinspeksi()
  {
    
    if($this->input->post('data') == "pelaksana" )
    {
      $id = $this->input->post('id');
      $datapelaksana = array (

          'no_gardu' => $this->input->post('no_gardu'),
          'tanggal' => $this->input->post('tanggal'),
          'petugas' => $this->input->post('petugas'),
          'penyulang' => $this->input->post('penyulang'),
          'lokasi' => $this->input->post('lokasi'),
          'type' => $this->input->post('type'),
          'kapasitas' => $this->input->post('kapasitas')
      );

      $this->M_gardu->update_pelaksana($datapelaksana, $id);

      $this->session->set_flashdata('message_data', '<div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">Data Pelaksana Berhasil Diedit<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      
    
      redirect('gardu/edit/'.$id);
    }
    

    if($this->input->post('data')== "trafo")
    {
      $id_gardu = $this->input->post('id_gardu');

      $datatrafo = array (

        // 'id_gardu' => $this->input->post('id_gardu'),
        'up3' => $this->input->post('up3'),
        'ulp' => $this->input->post('ulp'),
        'merk' => $this->input->post('merk'),
        'tahunpembuatan' => $this->input->post('tahunpembuatan'),
        'beratminyak' => $this->input->post('beratminyak'),
        'berattotal' => $this->input->post('berattotal')
      );

      

      $this->M_gardu->update_trafo($datatrafo, $id_gardu);

      $this->session->set_flashdata('message_data', '<div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">Data Trafo Berhasil Diedit<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      redirect('gardu/edit/'.$id_gardu);
    }

    if($this->input->post('data')== "pemeriksaan")
    {
      // $id_gardu = $this->input->post('id_gardu');

      // if(isset($_POST['save']))
      //   {
      //     $id_gardu = $this->input->post('id_gardu');//Pass the userid here
      //     $checkbox = $_POST['check'];
      //     for($i=0;$i<count($checkbox);$i++){
      //       $bidangyangdiperiksa = $checkbox[$i];
      //       $this->M_gardu->update_pemeriksaan($bidangyangdiperiksa, $id);//Call the modal

      //     }
      //     $this->session->set_flashdata('message_pemeriksa', '<div class="alert alert-success" role="alert">
      //     Data Pemeriksaan Berhasil Diedit .
      //     </div>');

      //   redirect('gardu/inspeksi');
      //   }
      var_dump($this->input->post('check[]'));

    }
    
    
  }
    

  function delete()//hapus inspeksi
    {
        $id = $this->uri->segment(3);

        $this->db->delete('tb_pelaksana', array('id' => $id));
        $this->db->delete('tb_beban', array('id_gardu' => $id));
        $this->db->delete('tb_bebanreal', array('id_gardu' => $id));
        $this->db->delete('tb_hasilpengukuran', array('id_gardu' => $id));
        $this->db->delete('tb_induk', array('id_gardu' => $id));
        $this->db->delete('tb_jrs', array('id_gardu' => $id));
        $this->db->delete('tb_nhfuse', array('id_gardu' => $id));
        $this->db->delete('tb_pemerhatikan', array('id_gardu' => $id));
        $this->db->delete('tb_pemeriksa', array('id_gardu' => $id));
        $this->db->delete('tb_penyeimbang', array('id_gardu' => $id));
        $this->db->delete('tb_trafo', array('id_gardu' => $id));
        $this->db->delete('tb_gangguangtardu', array('id' => $id));

        $this->session->set_flashdata('message_data', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus.
        </div>');

      redirect('gardu/inspeksi');

    }

  //Gangguan Gardu

  public function gangguan()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Gardu/vw_gangguan';
    $data['judul'] = "Gangguan";
    $data['gangguan'] = $this->M_gardu->getGangguan();
    // $data['join'] = $this->M_gardu->joindata();
    $this->load->view('template/majestic_template', $data);
  }

  public function detailgangguan($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Gardu/vw_alldatagangguan';
    $data['judul'] = "Detail Gangguan ";
    $data['gangguan'] = $this->M_gardu->getGangguan();
    $data['gangguan'] = $this->M_gardu->getGangguanById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahDatagangguan()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Gardu/vw_tambahDatagangguan';
    $data['judul'] = "Tambah Data";
    $data['gangguan'] = $this->M_gardu->getGangguan();
    $this->load->view('template/majestic_template', $data);
  }

  public function tambahgangguan()
  {
    $datagangguan = array(
      'no_gardu' => $this->input->post('no_gardu'),
      'kapasitas' => $this->input->post('kapasitas'),
      'tanggal' => $this->input->post('tanggal'),
      'komponen' => $this->input->post('komponen'),
      'jenis' => $this->input->post('jenis'),
      'keterangan' => $this->input->post('keterangan'),
      'penyebab_gangguan' => $this->input->post('penyebab_gangguan'),
      'uraian' => $this->input->post('uraian'),
      'material_terpakai' => $this->input->post('material_terpakai'),
      'vol' => $this->input->post('vol'),
      'frekuensi' => $this->input->post('frekuensi')
    );
      $this->M_gardu->insert_gangguan($datagangguan);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Gangguan Berhasil Diinput.
        </div>');

      redirect('gardu/tambahDatagangguan');
    }

  public function editdatagangguan($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['content'] = 'Gardu/vw_editgangguan';
    $data['judul'] = "Edit Gangguan";
    $data['gangguan'] = $this->M_gardu->getGangguanById($id);
    $this->load->view('template/majestic_template', $data);
  }

  public function editgangguan()
  {
    if($this->input->post('data')== "gangguan")
    {
      $id = $this->input->post('id');

      $datagangguan = array (
        'no_gardu' => $this->input->post('no_gardu'),
        'kapasitas' => $this->input->post('kapasitas'),
        'tanggal' => $this->input->post('tanggal'),
        'komponen' => $this->input->post('komponen'),
        'jenis' => $this->input->post('jenis'),
        'keterangan' => $this->input->post('keterangan'),
        'penyebab_gangguan' => $this->input->post('penyebab_gangguan'),
        'uraian' => $this->input->post('uraian'),
        'material_terpakai' => $this->input->post('material_terpakai'),
        'vol' => $this->input->post('vol'),
        'frekuensi' => $this->input->post('frekuensi')
      );

      $this->M_gardu->update_gangguan($datagangguan, $id);

      $this->session->set_flashdata('message_data', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Gangguan Berhasil Diedit<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      redirect('gardu/gangguan');
    }
  }

  public function exportgangguanById($id)
  {
    $data['gangguan'] = $this->M_gardu->getGangguanById($id);
    $this->load->view('gardu/vw_exportdatagangguan', $data);
  }  

  function deletegangguan()
  {
    $id = $this->uri->segment(3);

    $this->db->delete('tb_gangguan', array('id' => $id));

    $this->session->set_flashdata('message_data', '<div class="alert alert-danger" role="alert">
    Data Berhasil Dihapus.
    </div>');

    redirect('gardu/gangguan');
  }

    //untuk proses gambar
    function proses()
    {
      $config['upload_path']      ='./uploads/';
      $config['allowed_types']    ='gif|jpg|png';
      $config['max-size']         = 500; // size 500kb
      $config['max-width']        = 2048; // width 2048px
      $config['max-height']       = 1000; // height 768px
      $config['encrypt_name'] 		= true;
      $this->load->library('upload', $config);

      $jumlah_gambar = $this->input->post('jumlah_gambar');
      for ($i = 1; $i <= $jumlah_gambar; $i++) {
        if (!$this->upload->do_upload('dok' . $i)) {
          $this->session->set_flashdata('message_proses', '<div class="alert alert-danger" role="alert">
          Data gagal ditambahkan.
          </div>');
          redirect('gardu/tambahData');
        } else {
          $data = $this->upload->data();
          $imgdata = file_get_contents($data['full_path']);
          $file_encode = base64_encode($imgdata);
          $tipegambar = $data['file_type'];
          $ukurangambar = $data['file_size'];
          $namagambar = $data['orig_name'];
        }
      }

      $jumlah_gambar = $this->input->post('jumlah_gambar');
      for ($i = 1; $i <= $jumlah_gambar; $i++) {
				$dataGambar = [
					'id_gardu' => $this->input->post('id_gardu' . $i),
          'nama_gambar' => $namagambar,
          'tipe_gambar' => $tipegambar,
          'gambar' => $file_encode,
          'ukuran_gambar' => $ukurangambar
				];

				$this->db->insert('tb_gambar', $dataGambar);
      }
      
      $this->session->set_flashdata('message_proses', '<div class="alert alert-success" role="alert">
      Data gambar berhasil di tambahkan.
      </div>');
      redirect('gardu/tambahData');
    }
}
