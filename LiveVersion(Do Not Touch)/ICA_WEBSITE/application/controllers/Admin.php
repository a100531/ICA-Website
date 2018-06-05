<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
    public function adminVacancyList()
    {
        $data = array(
            'vacancies'     =>$this->system->all_vacancies_print(),
            'form_edit'   => 'editVacancyForm',
            'form_delete'   => 'admin/delete_vacancy',
            'Edit'       => array(
                'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary portfolioDeleteButton',
                    'content'       => 'Edit'
                )
            ),
            'Delete'       => array(
                'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary portfolioDeleteButton',
                    'content'       => 'Delete'
                )
			)
        );
        
        $this->build('adminVacancyList',$data);
    }
    public function delete_vacancy()
    {
        $id = $this->input->post('id');

        $this->admin->delete_vacancy($id);
    }
    public function editVacancySubmit()
    {   

        $id               = $this->input->post('id'); 
        $category         = $this->input->post('category');
		$date      		  = $this->input->post('date');
		$link      		  = $this->input->post('link');
		$name      		  = $this->input->post('name');
		$description      = $this->input->post('description');
		$expiry 	      = strtotime($this->input->post('date'));
		
		$this->admin->edit_vacancy($id,$category, $date, $expiry, $link, $name, $description);

		redirect('adminVacancyList');
    }

    public function editVacancyForm()
    {
        $id = $this->input->post('id');
        $vacancy = $this->admin->get_vacancy($id);

        $data = array(
			'form_action'   => 'editVacancySubmit/submit',
			'expiry_date'	=> array(
					'type' 			=> "date",
					'class' 		=> "form-control",
					'id' 			=> "expiryDate",
					'name' 			=> "date",
                    'placeholder' 	=> "DD/MM/YYY",
                    'value'         => $vacancy['v_date']
			),
			'vacancy_name'	=> array(
				'type' 			=> "text",
				'class' 		=> "form-control",
				'id' 			=> "vacancy_Name",
				'name' 			=> "name",
                'placeholder' 	=> "Enter vacancy Title",
                'value'         => $vacancy['v_name']
			),
			'vacancy_link'	=> array(
				'type' 			=> "text",
				'class' 		=> "form-control",
				'id' 			=> "vacancy_Link",
				'name' 			=> "link",
                'placeholder' 	=> "Enter vacancy link",
                'value'         => $vacancy['v_link']
			),
			'vacancy_description'      => array(
				'name'        => 'description',
				'id'          => 'vc_desc',
				'rows'        => '5',
				'cols'        => '50',
				'class'       => 'form-control',
				'value'		  => $vacancy['v_description'],
				'placeholder' => 'Enter vacancy description'
            ),
            'dropdownDefault' => $vacancy['v_course'],
            'dropdownCourse'=> $this->system->all_courses_dropdown(),
            'id'	=> array(
				'type' 			=> "hidden",
				'class' 		=> "form-control",
				'id' 			=> "id",
				'name' 			=> "id",
                'value'         => $id
			),
			'buttons'       => array(
                'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary okayButton',
                    'content'       => 'Ok'
                )
			)

		);

		$this->build('editVacancyForm',$data);
        
	}
	
	public function addAcademicResourceSubmit()
	{
		$title = $this->input->post('title');
		$link = $this->input->post('link');

		$imagename = strtolower(urlencode($title));
		//echo $imagename;

		$config['file_name']            = $imagename;
		$config['upload_path']          = 'txt';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		//$config['max_width']            = 1024;
		//$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('resourceImage'))
		{
				$error = array('error' => $this->upload->display_errors());
				var_dump ($error);

			  //  $this->load->view('upload_form', $error);
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());

				echo 'File written!';

				//$this->load->view('upload_success', $data);
		}

		$content = $title .PHP_EOL. $link .PHP_EOL;
		write_file("txt/resources.txt", $content, 'a+');
		redirect('adminAcademicResource');

	}

	function resourceDelete()
	{

		//$theOneIWantToDelete = $this->input->post('title');
		//var_dump($theOneIWantToDelete);
		//die;
		$content = '';
		while ($line = fgets($file))
		{
			$img = glob("txt/" . strtolower(urlencode(trim($line))) . ".*");

			if ($line === $this->input->post('title'))
			{	
				fgets($file); // to move one more line down
				if (count($img) > 0) unlink($img[0]);
			}
			else
			{
				$content .= $line . PHP_EOL . fgets($file) . PHP_EOL;
			}
		}
		//link the file path and the content to write the txt file
		//add the formaction to the form in adminResourceList
		write_file("txt/resources.txt", $content);
		redirect('adminAcademicResource');

	}

	public function adminAcademicResource()
	{
		// text file links
		$file = fopen('txt/resources.txt', 'r');
		$links = array();
		while ($line = fgets($file))
		{
			$img = glob("txt/" . strtolower(urlencode(trim($line))) . ".*");
			if (count($img) > 0) $img = $img[0];
			else $img = 'assets/images/no-photo.png';

			$links[] = array(
				'image' => $img,
				'title' => $line,
				'link' => fgets($file),
			);

		}
		//var_dump($links);
		//die;
		$data = array(
			'links' => $links,
			'resource_delete'   => 'resourceDelete',
			'Delete'       => array(
                'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary portfolioDeleteButton',
                    'content'       => 'Delete'
                )
			),
			
		);

		$this->build('adminAcademicResource',$data);
	}

	public function admin()
	{

		$data = array(
			'form_action'  => 'userDelete',
			'users' 	   => $this->admin->retrieveAllUsers(),
			'delete'       => array(
                'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary portfolioDeleteButton',
                    'content'       => 'Delete'
                )
            ),

		);

		$this->build('admin',$data);
	}
	public function accountDelete()
	{
		$id = $this->input->post('id');

		$this->admin->deleteAccount($id);

		$path = "portfolioUploads/$id";
		
		if(is_dir($path)) //if the folder already exists recreate it on submit to cater for editing portfolio too
		{	
			mkdir($path,0755,TRUE);
			delete_files($path, true);
			rmdir($path);
			//mkdir($path,0755,TRUE);
		}

		redirect('admin');
	}
}