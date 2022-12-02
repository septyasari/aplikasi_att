<?php
/**
 *
 */
class M_wo extends CI_Model
{
  function getDataMonitoring()
  {
    $this->db->select('*');
    $this->db->from('tb_monitoring');
    return $this->db->get()->result_array();
  }

  function insert_monitoring($datamonitoring)
  {
    $this->db->insert('tb_monitoring', $datamonitoring);
  }
  
  function getDataWo()
  {
    $this->db->select('*');
    $this->db->from('tb_wo');
    return $this->db->get()->result_array();
  }

  function insert_wo($datawo)
  {
    $this->db->insert('tb_wo', $datawo);
  }

  function getDataMonitoringById($id)
  {
    return $this->db->query("SELECT * FROM tb_monitoring WHERE tb_monitoring.id = $id LIMIT 1")->result_array();
  }

  function getDataWoById($id)
  {
    return $this->db->query("SELECT * FROM tb_wo WHERE tb_wo.id = $id LIMIT 1")->result_array();
  }

  function update_monitoring($datamonitoring, $id)
  {
    $this->db->update('tb_monitoring', $datamonitoring, array('id' => $id));
  }

  function update_inputwo($datawo, $id)
  {
    $this->db->update('tb_wo', $datawo, array('id' => $id));
  }
}
