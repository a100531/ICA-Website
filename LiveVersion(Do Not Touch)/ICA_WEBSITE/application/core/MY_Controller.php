<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


	function __construct()
	{
		parent::__construct();
	}

    protected function build($page = NULL, $param = NULL)
    {

        $this->load->view('templates/start');
        $this->nav();
        if ($page != NULL)
        {
            if (is_array($page))
            {
                foreach ($page as $key => $data)
                {
                    $this->load->view($key, $data);
                }
            }
            else
            {
                $this->load->view($page, $param);
            }
        }
        $this->load->view('templates/end');

    }

    private function nav()
	{
		$data = array(
			'navbar'        => array(
				'STUDENT PORTFOLIO'        => 'portfolio',
				'STUDENT LINKS'      => array(
					'RESOURCES'        => 'academicResource',
					'TIMETABLES'        => 'timetable'
				),
				'VACANCIES'        => 'vacancies',
				'CONTACTUS'        => 'contactUs',
				'LOG IN'        => 'login'
			),
			// this is an optional parameter, if you would like to add custom CSS to your navbar
			'extra'         => array(
				'class'         => 'ml-auto'
			)
        );
        
        $this->load->view('navbar', $data);
		
	}

}