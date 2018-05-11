<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('templates/start');
		$this->load->view('home');
		$this->load->view('templates/end');
	}
	public function login()
	{
		$this->load->view('templates/start');
		$this->load->view('login');
		$this->load->view('templates/end');
	}
	public function academicResource()
	{
		$this->load->view('templates/start');
		$this->load->view('academicResource');
		$this->load->view('templates/end');
	}
	public function portfolio()
	{
		$this->load->view('templates/start');
		$this->load->view('portfolio');
		$this->load->view('templates/end');
	}
	public function portfolioUser()
	{
		$this->load->view('templates/start');
		$this->load->view('portfolioUser');
		$this->load->view('templates/end');
	}
}
