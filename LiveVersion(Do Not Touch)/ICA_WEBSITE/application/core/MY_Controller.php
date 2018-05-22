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
        $this->load->view('navbar', $this->nav());
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
        // basic page
        $nav = [];
        $nav['STUDENT PORTFOLIO'] = 'portfolio';

            $dropdown = [];
            $dropdown['RESOURCES'] = 'academicResource';
            $dropdown['TIMETABLES'] = 'timetable';    
        $nav['STUDENT LINKS'] = $dropdown;

        $nav['VACANCIES'] = 'vacancies';
        $nav['CONTACTUS'] = 'contactUs';

        if(!$this->check_login())
        {
            $nav['LOG IN'] = 'login';
        }
        else
        { 
            $nav['LOG OUT'] = 'logout';
        }
        

		$data = array(
			'navbar'        => $nav,
			// this is an optional parameter, if you would like to add custom CSS to your navbar
			'extra'         => array(
				'class'         => 'ml-auto'
			)
        );
        
        return $data;
		
    }
    
    protected function check_login()
    {
        # 1. Get the current session data into a variable.
        $data = $this->session->userdata;

        # 2. Stop here if there is no sessions data
        if(!array_key_exists('session_code',$data))
        {
            return FALSE;
        }
        # 3. If there is no refresh data or an hour has passed
        # check the login data.
        if(!array_key_exists('refresh', $data) || $data['refresh'] < time() )
        {
            if($this->system->check_data($data['id'], $data['email'], $data['session_code']))
            {
                $data['refresh'] = time() + 60 * 60;
                return TRUE;
            }
            return FALSE;
        }
        # We don't have to check the data
        return TRUE;
    }

}