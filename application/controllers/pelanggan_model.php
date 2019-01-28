<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class pelanggan_model extends CI_Model {
  public function SaveDataPelanggan()
  {
    $Data = array(
       "nama_pembeli" => $this->input->post('NamaPelanggan'),
       "alamat"       => $this->input->post('Alamat'),
       "no_telp"      => $this->input->post('NoTelp'),
       "username"     => $this->input->post('Username'),
       "Password"     => $this->input->post('Password'),
    )
  }
}
 ?>
