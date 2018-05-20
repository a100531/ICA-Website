<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function success()
	{
		echo "YOU ARE LOGGED IN :D";
		echo anchor('logout', 'Piss off');
	}

	# THIS IS THE NAVIGATION EXAMPLE! :D
	function nav()
	{
		# if we're using hard-coded navs, we need the perms
		$role = strtolower($this->session->userdata('role'));

		$data = array(
			'nav'			=> $this->nav_links(),
			# The below is for hardcoded nav links
			'permissions'	=> $this->config->item('permissions')[$role]
		);

		$this->load->view('nav_page', $data);
	}


	# This will go in MY_Controller (ideally) >:D
	protected function nav_links()
	{
		$nav = array();
		$nav['Home']	= '/';

		if ($this->has_permission('ACCESS_SECRET_PAGE'))
		{
			$nav['Secret']	= 'secret';
		}

		if ($this->has_permission('IM_SO_FAKE'))
		{
			$nav['Nonexistent'] = 'fake/page';
		}

		return $nav;
	}

}
