<?php
/**
 *
 */
class M_gardu extends CI_Model
{
  function getDataALL()
  {
    $this->db->select('*');
    $this->db->from('tb_pelaksana');
    $this->db->join('tb_beban', 'tb_beban.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_bebanreal', 'tb_bebanreal.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_hasilpengukuran', 'tb_hasilpengukuran.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_induk', 'tb_induk.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_jrs', 'tb_jrs.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_keterangan', 'tb_keterangan.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_nhfuse', 'tb_nhfuse.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_pemerhatikan', 'tb_pemerhatikan.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_pemeriksa', 'tb_pemeriksa.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_penyeimbang', 'tb_penyeimbang.id_gardu = tb_pelaksana.id', 'left');
    $this->db->join('tb_trafo', 'tb_trafo.id_gardu = tb_pelaksana.id', 'left');

    return $this->db->get()->result_array();
  }

  function getDataPelaksana()
  {
    $this->db->select('*');
    $this->db->from('tb_pelaksana');
    return $this->db->get()->result_array();
  }

  function getDataJurusan()
  {
    $this->db->select('*');
    $this->db->from('tb_jurusan');
    return $this->db->get()->result_array();
  }

  function getDataJrsSiang($id)
  {
    return $this->db->query("SELECT * FROM `tb_jrs` WHERE tb_jrs.id_gardu = 9 AND tb_jrs.waktu = 'siang'")->result_array();
  }

  function getDataPelaksanaById($id)
  {
    return $this->db->query("SELECT * FROM tb_pelaksana LEFT JOIN tb_trafo ON tb_trafo.id_gardu = tb_pelaksana.id WHERE tb_trafo.id_gardu = $id")->result_array();
  }


  function getDataPemerhatikanById($id)
  {
    return $this->db->query("SELECT tb_pemerhatikan.* FROM tb_pelaksana LEFT JOIN tb_pemerhatikan ON tb_pemerhatikan.id_gardu = tb_pelaksana.id WHERE tb_pemerhatikan.id_gardu = $id")->result_array();
  }

  function getDataNHFUSEById($id)
  {
    return $this->db->query("SELECT tb_nhfuse.*, tb_jurusan.* FROM tb_pelaksana LEFT JOIN tb_nhfuse ON tb_nhfuse.id_gardu = tb_pelaksana.id LEFT JOIN tb_jurusan ON tb_nhfuse.id_jurusan = tb_jurusan.id WHERE tb_nhfuse.id_gardu = $id")->result_array();
  }

  function getDataPeriksaById($id)
  {
      return $this->db->query("SELECT tb_pemeriksa.* FROM tb_pelaksana LEFT JOIN tb_pemeriksa ON tb_pemeriksa.id_gardu = tb_pelaksana.id WHERE tb_pemeriksa.id_gardu = $id")->result_array();
  }

  function getDataBebanRealById($id)
  {
    return $this->db->query("SELECT tb_bebanreal.* FROM tb_pelaksana LEFT JOIN tb_bebanreal ON tb_bebanreal.id_gardu = tb_pelaksana.id WHERE tb_bebanreal.id_gardu = $id")->result_array();
  }

  function getDataBebanById($id)
  {
    return $this->db->query("SELECT tb_beban.* FROM tb_pelaksana LEFT JOIN tb_beban ON tb_beban.id_gardu = tb_pelaksana.id WHERE tb_beban.id_gardu = $id")->result_array();
  }

  function getDataPengukuranById($id)
  {
    return $this->db->query("SELECT tb_hasilpengukuran.* FROM tb_pelaksana LEFT JOIN tb_hasilpengukuran ON tb_hasilpengukuran.id_gardu = tb_pelaksana.id WHERE tb_hasilpengukuran.id_gardu = $id")->result_array();
  }

  function getDataIndukById($id)
  {
    return $this->db->query("SELECT tb_induk.* FROM tb_pelaksana LEFT JOIN tb_induk ON tb_induk.id_gardu = tb_pelaksana.id WHERE tb_induk.id_gardu = $id")->result_array();
  }

  function getDataPenyeimbanganById($id)
  {
    return $this->db->query("SELECT tb_penyeimbang.* FROM tb_pelaksana LEFT JOIN tb_penyeimbang ON tb_penyeimbang.id_gardu = tb_pelaksana.id WHERE tb_penyeimbang.id_gardu = $id")->result_array();
  }

  function getGangguan()
  {
    $this->db->select('*');
    $this->db->from('tb_gangguangardu');
    return $this->db->get()->result_array();
  }

  function getGangguanById($id)
  {
    return $this->db->query("SELECT * FROM tb_gangguangardu WHERE tb_gangguangardu.id = $id LIMIT 1")->result_array();
  }
  

  function joindata()
	{
		$this->db->select("tb_pelaksana.id, tb_pelaksana.no_gardu, tb_pelaksana.tanggal, tb_pelaksana.penyulang, tb_pelaksana.kapasitas, tb_pelaksana.lokasi,
		tb_trafo.tahunpembuatan, tb_trafo.merk");
		$this->db->from("tb_pelaksana");
		$this->db->join("tb_trafo", "tb_trafo.id_gardu = tb_pelaksana.id");
		return $this->db->get()->result_array();
	}

    function insert_pelaksana($datapelaksana)
    {
        $this->db->insert('tb_pelaksana', $datapelaksana);
    }

    function update_pelaksana($datapelaksana, $id)
    {
      $this->db->update('tb_pelaksana', $datapelaksana, array('id' => $id));
    }

    function insert_trafo($datatrafo)
    {
        $this->db->insert('tb_trafo', $datatrafo);
    }
    
    function update_trafo($datatrafo, $id)
    {
      $this->db->update('tb_trafo', $datatrafo, array('id_gardu' => $id));
    }

    function insert_pemeriksaan($id_gardu, $bidangyangdiperiksa)
    {
        $query="insert into tb_pemeriksa (id_gardu, bidangyangdiperiksa) values($id_gardu, '$bidangyangdiperiksa')";
        $this->db->query($query);
    }

    function update_pemeriksaan($bidangyangdiperiksa, $id)
    {
      $this->db->update('tb_pemeriksa', $bidangyangdiperiksa, array('id' => $id));
    }

    function insert_hasil_pengukuran($datapengukuran)
    {
        $this->db->insert('tb_hasilpengukuran', $datapengukuran);
    }

    function update_hasil_pengukuran($datapengukuran, $id)
    {
      $this->db->update('tb_hasilpengukuran', $datapengukuran, array('id' => $id));
    }

    function insert_bebanreal_siang($databebanrealsiang)
    {
        $this->db->insert('tb_bebanreal', $databebanrealsiang);
    }

    function update_bebanreal_siang($databebanrealsiang, $id)
    {
      $this->db->update('tb_bebanreal', $databebanrealsiang, array('id' => $id));
    }

    function insert_bebanreal_malam($databebanrealmalam)
    {
        $this->db->insert('tb_bebanreal', $databebanrealmalam);
    }

    function update_bebanreal_malam($databebanrealmalam, $id)
    {
      $this->db->update('tb_bebanreal', $databebanrealmalam, array('id' => $id));
    }

    function insert_gangguan($datagangguan)
    {
      $this->db->insert('tb_gangguangardu', $datagangguan);
    }

    function update_gangguan($datagangguan, $id)
    {
      $this->db->update('tb_gangguangardu', $datagangguan, array('id' => $id));
    }

    function getDataGarduTrafo($id_gardu)
    {
        return $this->db->get_where('tb_trafo', ['id_gardu' => $id_gardu])->row();
    }

    function getDataGarduPemeriksa($id_gardu)
    {
        return $this->db->get_where('tb_pemeriksa', ['id_gardu' => $id_gardu])->row();
    }

    function getDataGarduPemerhatikan($id_gardu)
    {
        return $this->db->get_where('tb_pemerhatikan', ['id_gardu' => $id_gardu])->row();
    }

    function getDataGarduNHFuse($id_gardu)
    {
        return $this->db->get_where('tb_nhfuse', ['id_gardu' => $id_gardu])->row();
    }

    function getDataGarduPengukuran($id_gardu)
    {
        return $this->db->get_where('tb_hasilpengukuran', ['id_gardu' => $id_gardu])->row();
    }

    function getDataGarduInduk($id_gardu)
    {
        return $this->db->get_where('tb_induk', ['id_gardu' => $id_gardu])->row();
    }

    function getDataGarduJurusan($id_gardu)
    {
        return $this->db->get_where('tb_jrs', ['id_gardu' => $id_gardu])->row();
    }

    function getDataGarduPelaksana($no_gardu)
    {
      return $this->db->get_where('tb_pelaksana', ['no_gardu' => $no_gardu])->row();
    }

    function getTbImage($id_gardu)
    {
      $this->db->select('*');
      $this->db->from('tb_gambar');
      $this->db->where('id_gardu', $id_gardu);
      return $this->db->get()->result_array();
    }

    function getKeterangan($id_gardu)
    {
      $this->db->select('*');
      $this->db->from('tb_keterangan');
      $this->db->where('id_gardu' , $id_gardu);
      $this->db->limit(1);
      return $this->db->get()->result_array();
    }
}
