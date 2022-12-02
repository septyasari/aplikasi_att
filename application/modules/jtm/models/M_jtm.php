<?php
/**
 *
 */
class M_jtm extends CI_Model
{
  function getDataALL()
  {
    $this->db->select('*');
    $this->db->from('tb_pelaksanajtm');
    $this->db->join('tb_kontruksijtm', 'tb_kontruksijtm.id_penyulang = tb_pelaksanajtm.id', 'left');
    return $this->db->get()->result_array();
  }

  function getDataPelaksanajtm()
  {
    $this->db->select('*');
    $this->db->from('tb_pelaksanajtm');
    return $this->db->get()->result_array();
  }

  function getDataKontruksijtm()
    {
        $this->db->select('*');
        $this->db->from('tb_kontruksijtm');
      return $this->db->get()->result_array();
    }

  function getDataPelaksanajtmById($id)
  {
    return $this->db->query("SELECT * FROM tb_pelaksanajtm LEFT JOIN tb_kontruksijtm ON tb_kontruksijtm.id_penyulang = tb_pelaksanajtm.id WHERE tb_kontruksijtm.id_penyulang = $id LIMIT 1")->result_array();
  }

  function getDataKontruksijtmById($id)
  {
    return $this->db->query("SELECT tb_kontruksijtm.* FROM tb_pelaksanajtm LEFT JOIN tb_kontruksijtm ON tb_kontruksijtm.id_penyulang = tb_pelaksanajtm.id WHERE tb_kontruksijtm.id_penyulang = $id")->result_array();
  }

  function joindata()
	{
		$this->db->select("tb_pelaksanajtm.id, tb_pelaksanajtm.tanggal, tb_pelaksanajtm.penyulang, tb_kontruksijtm.nomor, tb_kontruksijtm.konstruksi, tb_kontruksijtm.alamat,
		tb_kontruksijtm.masalah, tb_kontruksijtm.utuh, tb_kontruksijtm.atas,tb_kontruksijtm.bawah, tb_kontruksijtm.saran");
		$this->db->from("tb_pelaksanajtm");
		$this->db->join("tb_kontruksijtm", "tb_kontruksijtm.id_penyulang = tb_pelaksanajtm.id");
		return $this->db->get()->result_array();
	}

  function insert_pelaksanajtm($datapelaksanajtm)
  {
      $this->db->insert('tb_pelaksanajtm', $datapelaksanajtm);
  }

  function update_pelaksanajtm($datapelaksanajtm, $id)
  {
    $this->db->update('tb_pelaksanajtm', $datapelaksanajtm, array('id' => $id));
  }

  function insert_konstruksijtm($datakontruksijtm)
  {
      $this->db->insert('tb_kontruksijtm', $datakontruksijtm);
  }

  function update_konstruksijtm($datakontruksijtm, $id)
  {
    $this->db->update('tb_kontruksijtm', $datakontruksijtm, array('id' => $id));
  }
}
