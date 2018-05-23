<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends MY_Controller {


	function __construct()
	{
		parent::__construct();
    }
    
    public function portfolio()
	{
		$this->build('portfolio');
	}
	public function portfolioUser()
	{
		$this->build('portfolioUser');
	}
    public function editPortfolioUser()
	{

        $data = array(
            'form_action'   => 'editPortfolioUser/submit',
			'buttons'       => array(
                'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary okayButton',
                    'content'       => 'Ok'
                )
			)

		);

		$this->build('editPortfolioUser',$data);
    }

    public function editPortfolioUser_submit()
	{
        
        $data = $this->session->userdata;

        $folder = $data['id'];

		$path = "portfolioUploads/$folder";
        
        if(!is_dir($path)) //create the folder if it's not already exists
        {
            mkdir($path,0755,TRUE);
        } 

        redirect('editPortfolioUser');
    }
    
}