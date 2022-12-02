<?php

/**
 *
 */
class M_user extends CI_Model
{
  function update_profil($name, $email)
  {
    $this->db->set('name', $name);
    $this->db->where('email', $email);
    $this->db->update('user');
  }

}
