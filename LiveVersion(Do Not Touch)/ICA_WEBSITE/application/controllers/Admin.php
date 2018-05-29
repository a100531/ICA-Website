<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    public function adminVacancyList()
    {
        $data = array(
            'vacancies'     =>$this->system->all_vacancies_print(),
            'form_delete'   => 'admin/delete_vacancy',
            'buttons'       => array(
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
    public function editVacancy()
    {
        $category         = $this->input->post('category');
		$date      		  = $this->input->post('date');
		$link      		  = $this->input->post('link');
		$name      		  = $this->input->post('name');
		$description      = $this->input->post('description');
		$expiry 	      = strtotime($this->input->post('date'));
		
		$this->admin->edit_vacancy($category, $date, $expiry, $link, $name, $description);

		redirect('adminVacancyList');
    }

    public function editVacancyForm()
    {
        $id = $this->input->post('id');
        $data = $this->admin->get_vacancy($id);

        
    }
}