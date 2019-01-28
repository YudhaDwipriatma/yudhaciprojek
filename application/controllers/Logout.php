<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
  public function Logout(){
  		$this->session->sess_destroy();
  		$this->session->view('Login');
  }
}
?>
