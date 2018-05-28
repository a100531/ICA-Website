<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends MY_Controller {


	function __construct()
	{
		parent::__construct();
    }
    
    public function portfolio()
	{
		$data = array(
			'portfolios' =>$this->portfolio->get_portfolios()
		);
		$this->build('portfolio',$data);
	}
	public function portfolioUser()
	{
		$session = $this->session->userdata;
		$id = $session['id'];
		$data = read_xml('portfolioUploads/'.$id.'/paths.xml');
		if($data != NULL)
		{
			$portfolio = array(
				'portfolioImage'	=> 'portfolioUploads/'.$id.'/'.$id.'portfolioImage.png',
				'description'		=> $data['description'],
				'link'				=> $data['link'],
				'name'				=> $session['name'],
				'surname'			=> $session['surname'],
				);
			
	
			
	
			$this->build('portfolioUser',$portfolio);
		}
		else{
			redirect('editPortfolioUser');
		}
		

		
	}
	/*
    public function editPortfolioUser()
	{
		$folder = $this->session->userdata('id');

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
					'class'			=> 'inputImage'
					//'set_value'			=> '/'.$path.'/'.$folder.'portfolioImage.png'
				),
				'profileImage1'	=> '/'.$path.'/'.$folder.'portfolioImage1.png',
				'portfolio1'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage2',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage'
					//'set_value'			=> '/'.$path.'/'.$folder.'portfolioImage1.png'
				),
				'profileImage2'	=> '/'.$path.'/'.$folder.'portfolioImage2.png',
				'portfolio2'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage3',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage'
					//'set_value'			=> '/'.$path.'/'.$folder.'portfolioImage2.png'
				),
				'profileImage3'	=> '/'.$path.'/'.$folder.'portfolioImage3.png',
				'portfolio3'         => array(
					'type'          => 'file',
					'placeholder'   => 'Upload your image',
					'name'          => 'portfolioImage4',
					'id'            => 'input-image',
					'size'          => '20',
					'class'			=> 'inputImage'
					//'set_value'			=> '/'.$path.'/'.$folder.'portfolioImage3.png'
				),
				'link'         => array(
					'type'          => 'text',
					'placeholder'   => 'http://example.com',
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
					'placeholder'   => 'http://example.com',
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
	*/

 	/*   public function editPortfolioUser_submit()
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
				if($i === 1)
				{
					array_push($savePath,'/'.$path.'/'.$folder.'portfolioImage.png');
					$data = array('upload_data' => $this->upload->data());
				}
				else if($i === 2)
				{
					
					array_push($savePath,'/'.$path.'/'.$folder.'portfolioImage1.png');
					$data = array('upload_data' => $this->upload->data());
				}
				else if($i === 3)
				{
					
					array_push($savePath,'/'.$path.'/'.$folder.'portfolioImage2.png');
					$data = array('upload_data' => $this->upload->data());
				}
				else if($i === 4)
				{
					
					array_push($savePath,'/'.$path.'/'.$folder.'portfolioImage3.png');
					$data = array('upload_data' => $this->upload->data());
				}
					
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
		redirect('portfolioUser');
		
		
    }*/

	public function editPortfolioUser()
	{
		
		$folder = $this->session->userdata('id');

		$path = "portfolioUploads/$folder";
		if(file_exists($path.'/paths.xml'))
		{
			$isxml = true;
			$xml = read_xml($path.'/paths.xml');
		}
		else
		{
			$isxml = false;
		}

		$data = array(
			'form_action'   => 'uploadProfileInfo/submit',
			'form_image'   => 'uploadProfileImage/submit',
			'profileImage'	=> is_dir($path) ? '/'.$path.'/'.$folder.'portfolioImage.png' : '/assets/images/no-photo.png',
			'File'      => array(
				'type'          => 'file',
				'name'          => 'portfolioImage',
				'accept-type'   => 'image/*',
				'class'			=> 'inputImage',
			),
			'link'         => array(
				'type'          => 'text',
				'placeholder'   => 'http://example.com',
				'name'          => 'link',
				'id'            => 'input-link',
				'class'			=> 'form-control',
				'value'			=> ($isxml) ? $xml['link'] : ''
			),
			'description'      => array(
				'name'        => 'description',
				'id'          => 'vc_desc',
				'rows'        => '5',
				'cols'        => '50',
				'class'       => 'form-control',
				'value'			=> ($isxml) ? $xml['description'] : ''
			),
			'submitImage'       => array(
				'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary okayButton uploadBtn',
				)
			),
			'submitLinkDesc'       => array(
				'submit'        => array(
					'type'          => 'submit',
					'class'			=> 'btn btn-outline-secondary okayButton',
					'content'       => 'Upload Description and Link'
				)
			)

		);
			
		$this->build('editPortfolioUser',$data);
	}
	public function uploadProfileImage()
	{
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
			unlink($path.'/'.$folder.'portfolioImage.png');
		}
		
		$id_num_profile = $folder.'portfolioImage';
		$config['file_name']            = $id_num_profile;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		//$config['max_width']            = 1024;
		//$config['max_height']           = 768;
	
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('portfolioImage'))
		{
				$error = array('error' => $this->upload->display_errors());
				//var_dump ($error);
				redirect('editPortfolioUser');
	
				//  $this->load->view('upload_form', $error);
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());
				$this->portfolio->editPortfolioUser_Submit();
				redirect('portfolioUser');
		}
	}
	public function uploadProfileInfo()
	{
		$session = $this->session->userdata;

		$folder = $session['id'];
		
		$path = "portfolioUploads/$folder";
		
		if(!is_dir($path)) //if the folder already exists recreate it on submit to cater for editing portfolio too
		{	
			mkdir($path,0755,TRUE);
			//delete_files($path, true);
			//rmdir($path);
			//mkdir($path,0755,TRUE);
		}else
		{
			unlink($path.'/paths.xml');
		}
		$paths = array(
			
			# This key is optional, used to define what kind of data you're writing.
			'root'      => 'paths',
	
			# The structured information goes here.
			'data'      => array(
				'description'			=> $this->input->post('description'),
				'link'					=> $this->input->post('link')
				
			)
		);
		write_xml($paths,$path.'/paths.xml');
		$this->portfolio->editPortfolioUser_Submit();
		//print_r($savePath);
		//die;
		redirect('portfolioUser');
	}

	public function deleteProfile()
	{
		$session = $this->session->userdata;

		$folder = $session['id'];
		
		$path = "portfolioUploads/$folder";

		delete_files($path, true);
		rmdir($path);
		$this->portfolio->deleteProfile_Submit();
		redirect('editPortfolioUser');
	}

// this submit function which work submits the whole form to an xml file show this to redd tomorrow 
/*	public function editPortfolioUser_submit()
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
		$id_num_profile = $id_num.'portfolioImage';

		# Configuration - generic for all images to upload.
		$config['file_name']		= $id_num_profile;
		$config['upload_path']      = $path;
		$config['allowed_types']    = 'gif|jpg|png';
		$config['max_size']         = 10240;
		$config['max_width']        = 4000;
		$config['max_width']        = 4000;
	
		# Start the library with the above config setup.
		$this->load->library('upload', $config);
	
		# Create a new "name" in the $_FILES submission.
		# This is to separate all the items for upload.
		$_FILES['single-image'] = array();
	
		# Loop through all the images uploaded.
		# The attributes are all collected in their own definitions (name, type, etc.)
		for ($i = 0; $i < count($_FILES['images']['name']); $i++)
		{
			# Here, recreate a single submission for each of the images uploaded.
			foreach ($_FILES['images'] as $key => $value)
				$_FILES['single-image'][$key] = $value[$i];
	
			# Upload the new "single-image" name, which we have just created by hand.
			if (!$this->upload->do_upload('single-image'))
			{
				# If the file didn't upload, here's an error.
				echo $this->upload->display_errors(), "<br>";
			}
			else
			{	
				if($i === 0)
				{
					array_push($savePath,'/'.$path.'/'.$folder.'portfolioImage.png');
				}
				else
				{
					array_push($savePath,'/'.$path.'/'.$folder.'portfolioImage'.$i.'.png');
				# If the file was uploaded, then we're all good.
					echo "{$_FILES['single-image']['name']} uploaded!", "<br>";
				}
				
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
		redirect('portfolioUser');
		
		
    }*/
}