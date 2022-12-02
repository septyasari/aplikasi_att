<?php
/**
 *
 */
class M_lapdis extends CI_Model
{
  function getGsp()
  {
    $this->db->select('*');
    $this->db->from('tb_gsp');
    return $this->db->get()->result_array();
  }
    // function insert_gsp($datagsp)
    // {
    //     $this->db->insert('tb_gsp', $datagsp);
    // }

  function getDataGsp()
  {
    $this->db->select('*');
    $this->db->from('tb_gsp');
    $this->db->LIMIT('1');
    return $this->db->get()->result_array();
  }

  function getGspById($id)
  {
    $this->db->select('*');
    $this->db->from('tb_gsp');
    $this->db->where('id', $id);
    return $this->db->get()->row_array();
  }

  function insert_gsp($datagsp)
  {
    $this->db->insert('tb_gsp', $datagsp);
  }

  function update_gsp($datagsp, $id)
  {
    $this->db->update('tb_gsp', $datagsp, array('id' => $id));
  }


  function getPp()
  {
    $this->db->select('*');
    $this->db->from('tb_pp');
    return $this->db->get()->result_array();
  }
    function insert_pp($datapp)
    {
      $this->db->insert('tb_pp', $datapp);
    }

  function getDataPp()
  {
    $this->db->select('*');
    $this->db->from('tb_pp');
    $this->db->LIMIT('1');
    return $this->db->get()->result_array();
  }

  function getSe()
    {
      $this->db->select('*');
      $this->db->from('tb_se');
      return $this->db->get()->result_array();
    }
      function insert_se($datase)
      {
        $this->db->insert('tb_se', $datase);
      }

  function getDataSe()
  {
    $this->db->select('*');
    $this->db->from('tb_se');
    $this->db->LIMIT('1');
    return $this->db->get()->result_array();
  }

  function getDataPpById($id)
  {
    return $this->db->query("SELECT * FROM tb_pp WHERE tb_pp.id = $id LIMIT 1")->result_array();
  }

  function update_pp($datapp, $id)
  {
    $this->db->update('tb_pp', $datapp, array('id' => $id));
  }

  function getDataSeById($id)
  {
    return $this->db->query("SELECT * FROM tb_se WHERE tb_se.id = $id LIMIT 1")->result_array();
  }
  
  function update_se($datase, $id)
  {
    $this->db->update('tb_se', $datase, array('id' => $id));
  }
}
