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
			'profile'         => array(
                'type'          => 'file',
                'placeholder'   => 'Upload your image',
                'name'          => 'profileImage',
                'id'            => 'input-image',
				'size'          => '20',
				'class'			=> 'inputImage'
			),
			'portfolio1'         => array(
                'type'          => 'file',
                'placeholder'   => 'Upload your image',
                'name'          => 'portfolioImage1',
                'id'            => 'input-image',
                'size'          => '20',
				'class'			=> 'inputImage'
			),
			'portfolio2'         => array(
                'type'          => 'file',
                'placeholder'   => 'Upload your image',
                'name'          => 'portfolioImage2',
                'id'            => 'input-image',
                'size'          => '20',
				'class'			=> 'inputImage'
			),
			'portfolio3'         => array(
                'type'          => 'file',
                'placeholder'   => 'Upload your image',
                'name'          => 'portfolioImage3',
                'id'            => 'input-image',
                'size'          => '20',
				'class'			=> 'inputImage'
            ),
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
		
		$profile = $this->input->post('profileImage');
		$portfolioImage1 = $this->input->post('portfolioImage1');
		$portfolioImage2 = $this->input->post('portfolioImage2');
		$portfolioImage3 = $this->input->post('portfolioImage3');
		
		$array = array(
			'profile' => $profile,
			'portfolio1' => $portfolioImage1,
			'portfolio2' => $portfolioImage2,
			'portfolio3' => $portfolioImage3
		);

		var_dump($profile);
		die;
		
        $session = $this->session->userdata;

        $folder = $session['id'];

		$path = "portfolioUploads/$folder";
        
        if(is_dir($path)) //create the folder if it's not already exists
        {	
			delete_files($path, true);
			rmdir($path);
			mkdir($path,0755,TRUE);
		}
		else{
			mkdir($path,0755,TRUE);
		}
		

        redirect('editPortfolioUser');
    }
    
}