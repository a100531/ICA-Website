<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_controller {

  public function index()
  {
    $this->load->view('home');
    //$this->load->view('saveImage', array('error' => ' ' ));
  }

}