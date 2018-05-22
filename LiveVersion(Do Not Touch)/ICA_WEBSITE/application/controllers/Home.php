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

	public function nav()
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
				'id'         => 'dropdown-id-lol'
			)
		);
		
		$this->load->view('navbar', $data);
	}

	public function login()
	{
		$data = array(
			'form_action'   => 'login/submit',
			'form_inputs'	=> array(
				array(
					'type' 					=> "email",
					'class' 				=> "form-control",
					'id' 						=> "email",
					'name' 					=> "email",
					'placeholder' 	=> "Email"
				),
				array(
					'type'					=> "password",
					'class'					=> "form-control",
					'id'						=> "password",
					'name' 					=> "password",
					'placeholder' 	=> "Password"
				)
			),
			'buttons'       => array(
					'submit'        => array(
					'type'          => 'submit',
					'class'					=> 'btn btn-outline-secondary okayButton',
					'content'       => 'Login'
								)
			)

		);

		$this->load->view('templates/start');
		$this->load->view('login', $data);
		$this->load->view('templates/end');
	}

	# The logout page
	public function logout()
	{
		#1. remove the login data from the database
		$data = $this->session->userdata;
		$this->system->delete_session($data['id'], $data['session_code']);


		# 2. remove te information form the session.
		$this->session->unset_userdata(array(
			'id', 'email', 'name','surname','session_code'
		));

		# 3. take the user home
		redirect('addStudent');
	}


	public function login_submit()
    {
        # 1. Check the form for validation errors
        if ($this->fv->run('login') === FALSE)
        {
            echo validation_errors();
            return;
        }

        # 2. Retrieve the data for checking
        $email          = $this->input->post('email');
        $password       = $this->input->post('password');

        # 3. Use the System Model to verify the password_strength
        # this avoids exposing information (sry h4xx0rs lol)
        $check = $this->system->check_password($email, $password);

        # 4. if check came back as false, the password is wrong
        if($check === FALSE)
        {
          echo "the email and password don't match.";
          return;
        }

        # 5. Retieve the information from the database
        # bin2hex converts binary data to hex(0-9, a-f)
        $code =  bin2hex($this->encryption->create_key(16));

        # 6. try to log in.
        $data = $this->system->set_login_data($check, $code);

        # 7. if there's an error, stop Here
        if($data === FALSE)
        {
          echo "we could not log you in :D";
          return;
        }
        # 8. we'll check back in an hour
        $data['refresh'] = time() + 60 * 60;

        # 9. write everythign to CodeIgniter's cookie
        $this->session->set_userdata($data);

        # 10. redirect hostname
        redirect('home');
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
	public function editPortfolioUser()
	{
		$this->load->view('templates/start');
		$this->load->view('editPortfolioUser');
		$this->load->view('templates/end');
	}
	public function addAcademicResource()
	{
		$this->load->view('templates/start');
		$this->load->view('addAcademicResource');
		$this->load->view('templates/end');
	}
	public function	addStudent()
	{
		$data_links = array(
			'navbar'        => array(
				'STUDENT PORTFOLIO'        => 'portfolio',
				'STUDENT LINKS'      => array(
					'RESOURCES'        => 'academicResource',
					'TIMETABLES'        => 'timetable'
				),
				'VACANCIES'        => 'vacancies',
				'CONTACTUS'        => 'contactUs',
				'LOG IN'        => 'login'
			)
			// this is an optional parameter, if you would like to add custom CSS to your navbar
			//'extra'         => array(
			//	'id'         => 'dropdown-id-lol'
			//)
		);
		
		$data = array(
			'form_action'   => 'addStudent/submit',
			'form_inputs'	=> array(
				array(
					'type' 			=> "email",
					'class' 		=> "form-control",
					'id' 			=> "emailAddStudent",
					'name' 			=> "emailS",
					'placeholder' 	=> "Email"
				),
				array(
					'type'			=> "password",
					'class'			=> "form-control",
					'id'			=> "passwordAddStudent",
					'name' 			=> "passwordS",
					'placeholder' 	=> "Password"
				),
				array(
					'type'			=> "text",
					'class'			=> "form-control",
					'id'			=> "nameAddStudent",
					'name' 			=> "nameS",
					'placeholder' 	=> "Name"
				),
				array(
					'type'			=> "text",
					'class'			=> "form-control",
					'id'			=> "surnameAddStudent",
					'name' 			=> "surnameS",
					'placeholder' 	=> "Surname"
				)
			),
			'buttons'       => array(
                'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary okayButton',
                    'content'       => 'Ok'
                )
			)

		);

		$this->load->view('templates/start');
		$this->load->view('navbar',$data_links);
		$this->load->view('addStudent', $data);
		$this->load->view('templates/end');
	}
	public function register_submit()
    {
        # 1. Check the form for validation errors
        if ($this->fv->run('addStudent') === FALSE)
        {
            echo validation_errors();
            return;
        }

        # 2. Retrieve the first set of data
        $email      = $this->input->post('emailS');
				$password   = $this->input->post('passwordS');


        # 3. Generate a random keyword for added protection
        # Since the encrypted key is in binary, we should change it to a hex string (0-9, a-f)
        $salt       = bin2hex($this->encryption->create_key(8));

        # 3. Add them to the database, and retrieve the ID
        $id = $this->system->add_user($email, $password, $salt);

        # 4. If the ID didn't register, we can't continue.
        if ($id === FALSE)
        {
            echo "We couldn't register the user because of a database error.";
            return;
        }

        # 5. Retrieve the next data
        $name       = $this->input->post('nameS');
        $surname    = $this->input->post('surnameS');

        # 6. Add the details to the next table
        $check = $this->system->user_details($id, $name, $surname);

        # 7. If the query failed, delete the user to avoid partial data.
        if ($check === FALSE)
        {
            $this->system->delete_user($id);
            echo "We couldn't register the user because of a database error.";
            return;
        }

        # 8. Everything is fine, return to the home page.
        redirect('login');
    }
	public function	addVacancy()
	{
		$this->load->view('templates/start');
		$this->load->view('addVacancy');
		$this->load->view('templates/end');
	}
	public function	contactUs()
	{
		$this->load->view('templates/start');
		$this->load->view('contactUs');
		$this->load->view('templates/end');
	}
	public function	editTimetable()
	{
		$this->load->view('templates/start');
		$this->load->view('editTimetable');
		$this->load->view('templates/end');
	}
	public function	sickLeave()
	{
		$this->load->view('templates/start');
		$this->load->view('sickLeave');
		$this->load->view('templates/end');
	}
	public function	studentList()
	{
		$this->load->view('templates/start');
		$this->load->view('studentList');
		$this->load->view('templates/end');
	}
	public function	timetable()
	{
		$this->load->view('templates/start');
		$this->load->view('timetable');
		$this->load->view('templates/end');
	}
	public function	vacancies()
	{
		$this->load->view('templates/start');
		$this->load->view('vacancies');
		$this->load->view('templates/end');
	}
}
