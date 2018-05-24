<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {


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

		$data = array(
			'sickLeave' =>$this->system->all_sick_print()
		);

		$this->build('home',$data);
	}

	public function login()
	{
		$data = array(
			'form_action'   => 'login/submit',
			'form_inputs'	=> array(
				array(
					'type' 					=> "email",
					'class' 				=> "form-control",
					'id' 					=> "email",
					'name' 					=> "email",
					'placeholder' 			=> "Email"
				),
				array(
					'type'					=> "password",
					'class'					=> "form-control",
					'id'					=> "password",
					'name' 					=> "password",
					'placeholder' 			=> "Password"
				)
			),
			'buttons'       => array(
					'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary okayButton',
					'content'       => 'Login'
								)
			)

		);

		
		$this->build('login', $data);
		
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
		redirect('home');
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
		$this->build('academicResource');
	}
	
	public function addAcademicResource()
	{
		$this->build('addAcademicResource');
	}
	public function	addAccount()
	{
		

		$data = array(
			'form_action'   => 'addAccount/submit',
			'form_inputs'	=> array(
				array(
					'type' 			=> "email",
					'class' 		=> "form-control",
					'id' 			=> "emailAddAccount",
					'name' 			=> "emailS",
					'placeholder' 	=> "Email"
				),
				array(
					'type'			=> "password",
					'class'			=> "form-control",
					'id'			=> "passwordAddAccount",
					'name' 			=> "passwordS",
					'placeholder' 	=> "Password"
				),
				array(
					'type'			=> "text",
					'class'			=> "form-control",
					'id'			=> "nameAddAccount",
					'name' 			=> "nameS",
					'placeholder' 	=> "Name"
				),
				array(
					'type'			=> "text",
					'class'			=> "form-control",
					'id'			=> "surnameAddAccount",
					'name' 			=> "surnameS",
					'placeholder' 	=> "Surname"
				)
				
			),
			'dropdownCourse'=> $this->system->all_courses_dropdown(),
			'dropdownRoles'	=> $this->system->all_roles_dropdown(),
			'buttons'       => array(
                'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary okayButton',
                    'content'       => 'Ok'
                )
			)

		);
		
		$this->build('addAccount',$data);
	}
	public function register_submit()
    {
        # 1. Check the form for validation errors
        if ($this->fv->run('addAccount') === FALSE)
        {
            echo validation_errors();
            return;
        }

        # 2. Retrieve the first set of data
        $email      = $this->input->post('emailS');
		$password   = $this->input->post('passwordS');
		$role   	= $this->input->post('roles');


        # 3. Generate a random keyword for added protection
        # Since the encrypted key is in binary, we should change it to a hex string (0-9, a-f)
        $salt       = bin2hex($this->encryption->create_key(8));

        # 3. Add them to the database, and retrieve the ID
        $id = $this->system->add_user($email, $password, $salt, $role);

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
		$this->build('addVacancy');
	}
	public function	contactUs()
	{
		$this->build('contactUs');
	}
	public function	editTimetable()
	{
		$this->build('editTimetable');
	}
	public function	sickLeave()
	{
		
		$session = $this->session->userdata;

		$data = array(
			'form_action'   => 'sickLeave/submit',
			'form_inputs'	=> array(
				array(
					'type' 			=> "date",
					'class' 		=> "form-control",
					'id' 			=> "emailAddAccount",
					'name' 			=> "date",
					'placeholder' 	=> "DD/MM/YYY"
				
				),
			),
			'Name' 		=> $session['name'],
			'Surname' 	=> $session['surname'],
			'dropdownLecturers'	=> $this->system->all_lecturers_dropdown(),
			'buttons'       => array(
				'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary okayButton',
					'content'       => 'Ok'
					)
			)
			
		);

		
		
		$this->build('sickLeave',$data);
		
	}
	public function	sickLeave_submit()
	{
        # 2. Retrieve the first set of data
        $lecturer      = $this->input->post('lecturers');
		$date   	   = strtotime($this->input->post('date'));
		$dateLong      = $this->input->post('date');

		$this->system->add_sick($lecturer, $date,$dateLong);

		redirect('home');

	}
	public function	studentList()
	{
		$this->build('studentList');
	}
	public function	timetable()
	{
		$this->build('timetable');
	}
	public function	vacancies()
	{
		$this->build('vacancies');
	}
}
