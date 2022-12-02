<?php
class M_menu extends CI_Model
{
  function edit_data($where,$table){
    return $this->db->get_where($table,$where);
  }

  function update_data($where,$data,$table)
  {
		$this->db->where($where);
		$this->db->update($table,$data);
  }

  function delete_data($where,$table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function get_menu()
  {
    return $this->db->get('user_menu')->result_array();
  }

  public function get_subMenu()
  {
    return $this->db->get('user_sub_menu')->result_array();
  }

  public function get_subMenuid()
  {

    $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
              FROM `user_sub_menu` JOIN `user_menu`
              ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
              ";

    return $this->db->query($query)->result_array();
  }

  public function get_menuList()
  {
    return $this->db->get('user_menu')->result_array();
  }

  public function get_access()
  {
    return $this->db->get('user_role')->result_array();
  }

  public function get_roleId($role_id)
  {
    return $this->db->get_where('user_role', ['id' => $role_id])->row_array();
  }

  function get_user()
  {
    return $this->db->get('user')->result_array();
  }
  function get_user_byId($id)
  {
    return $this->db->get_where('user', ['id' => $id])->result_array();
  }
}
