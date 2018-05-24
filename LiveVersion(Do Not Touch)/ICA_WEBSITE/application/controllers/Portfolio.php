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
		$session = $this->session->userdata;
		
		$folder = $session['id'];
		
		$path = "portfolioUploads/$folder";
		
		if(is_dir($path)) //if the folder already exists recreate it on submit to cater for editing portfolio too
		{	
			$data = array(
				'form_action'   => 'editPortfolioUser/submit',
				'profileImage'	=> '/'.$path.'/'.$folder.'portfolioImage.png',
				'profile'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage1',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage',
					'set_value'			=> '/'.$path.'/'.$folder.'portfolioImage.png'
				),
				'profileImage1'	=> '/'.$path.'/'.$folder.'portfolioImage1.png',
				'portfolio1'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage2',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage',
					'set_value'			=> '/'.$path.'/'.$folder.'portfolioImage1.png'
				),
				'profileImage2'	=> '/'.$path.'/'.$folder.'portfolioImage2.png',
				'portfolio2'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage3',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage',
					'set_value'			=> '/'.$path.'/'.$folder.'portfolioImage2.png'
				),
				'profileImage3'	=> '/'.$path.'/'.$folder.'portfolioImage3.png',
				'portfolio3'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage4',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage',
					'set_value'			=> '/'.$path.'/'.$folder.'portfolioImage3.png'
				),
				'link'         => array(
					'type'          => 'text',
					'placeholder'   => 'Insert your link',
					'name'          => 'link',
					'id'            => 'input-link',
					'class'			=> 'form-control'
				),
				'description'      => array(
					'name'        => 'description',
					'id'          => 'vc_desc',
					'rows'        => '5',
					'cols'        => '50',
					'class'       => 'form-control'
				),
				'buttons'       => array(
					'submit'        => array(
						'type'          => 'submit',
						'class'			=> 'btn btn-outline-secondary okayButton',
						'content'       => 'Ok'
					)
				)
	
			);
		}
		else{
			$data = array(
				'form_action'   => 'editPortfolioUser/submit',
				'profileImage'	=> '/assets/images/no-photo.png',
				'profile'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage1',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage'
				),
				'profileImage1'	=> '/assets/images/no-photo.png',
				'portfolio1'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage2',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage'
				),
				'profileImage2'	=> '/assets/images/no-photo.png',
				'portfolio2'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage3',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage'
				),
				'profileImage3'	=> '/assets/images/no-photo.png',
				'portfolio3'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage4',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage'
				),
				'link'         => array(
					'type'          => 'text',
					'placeholder'   => 'Insert your link',
					'name'          => 'link',
					'id'            => 'input-link',
					'class'			=> 'form-control'
				),
				'description'      => array(
					'name'        => 'description',
					'id'          => 'vc_desc',
					'rows'        => '5',
					'cols'        => '50',
					'class'       => 'form-control'
				),
				'buttons'       => array(
					'submit'        => array(
						'type'          => 'submit',
						'class'			=> 'btn btn-outline-secondary okayButton',
						'content'       => 'Ok'
					)
				)
	
			);
		}

        

		$this->build('editPortfolioUser',$data);
    }

    public function editPortfolioUser_submit()
	{	

		if ($this->fv->run('editPortfolioUser') === FALSE)
        {
            echo validation_errors();
            return;
        }

		$session = $this->session->userdata;

		$folder = $session['id'];
		
		$path = "portfolioUploads/$folder";
		
		if(!is_dir($path)) //if the folder already exists recreate it on submit to cater for editing portfolio too
		{	
			mkdir($path,0755,TRUE);
			//delete_files($path, true);
			//rmdir($path);
			//mkdir($path,0755,TRUE);
		}else{
			delete_files($path, true);
		}
		

		$id_num = $session['id'] ;
		$savePath = array();

		for ($i=1; $i < 5 ; $i++) {

			$id_num_profile = $id_num.'portfolioImage';
			$config['file_name']            = $id_num_profile;
			$config['upload_path']          = $path;
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			//$config['max_width']            = 1024;
			//$config['max_height']           = 768;
	  
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('portfolioImage'.$i))
			{
					$error = array('error' => $this->upload->display_errors());
					//var_dump ($error);
					redirect('editPortfolioUser');
	  
				  //  $this->load->view('upload_form', $error);
			}
			else
			{		
					array_push($savePath,'/'.$path.'/'.$folder.'portfolioImage'.$i.'.png');
					$data = array('upload_data' => $this->upload->data());
					
					//echo 'File written!';
	  
					//$this->load->view('upload_success', $data);
			}
		}

		$paths = array(
			
			# This key is optional, used to define what kind of data you're writing.
			'root'      => 'paths',
	
			# The structured information goes here.
			'data'      => array(
				'profileImage1'         => $savePath[0],
				'profileImage2'         => $savePath[1],
				'profileImage3'         => $savePath[2],
				'profileImage4'         => $savePath[3],
				'description'			=> $this->input->post('description'),
				'link'					=> $this->input->post('link')
				
			)
		);
		write_xml($paths,$path.'/paths.xml');
		$this->portfolio->editPortfolioUser_Submit();
		//print_r($savePath);
		//die;
		redirect('editPortfolioUser');
		
		
    }
    
}