<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
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
}