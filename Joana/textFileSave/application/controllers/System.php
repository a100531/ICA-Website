<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends MY_Controller {

  public function __construct() {
    parent::__construct();
    //$this->load->helper(array('form', 'url'));
}

  public function saveText()
	{
        $data = array(
            'page_title'    => 'saveText',
            'form_action'   => 'saveText/submit',
            'form'          => array(
                'Link'         => array(
                    'type'          => 'text',
                    'placeholder'   => 'Insert your link',
                    'name'          => 'link',
                    'id'            => 'input-link'
                ),
                'Description'      => array(
                    'type'          => 'text',
                    'placeholder'   => 'Insert your description',
                    'name'          => 'description',
                    'id'            => 'input-description'
                )
            ),
            'buttons'       => array(
                'submit'        => array(
                    'type'          => 'submit',
                    'content'       => 'Save'
                )
            )
        );

        $this->load->view('saveText', $data);
	}

  public function saveText_submit()
  {
        $data = $this->input->post('description');
        $username = time();
    if ( ! write_file('./assets/textFiles/'.$username.'.txt', $data))
    {
            echo 'Unable to write the file';
    }
    else
    {
            echo 'File written!';
    }
  }



  public function saveImage()
  {

    $data = array(
        'page_title'    => 'saveImage',
        'form_action'   => 'system/do_upload',
        'form'          => array(
            'Picture'         => array(
                'type'          => 'file',
                'placeholder'   => 'Upload your image',
                'name'          => 'userfile',
                'id'            => 'input-image',
                'size'          => '20'

            )
        ),
        'buttons'       => array(
            'submit'        => array(
                'type'          => 'submit',
                'content'       => 'Save',
                'value'         => 'upload'
            )
        )
    );

    $this->load->view('saveImage', $data);

  }


  public function index()
      {
        $this->load->view('upload_form', array('error' => ' ' ));
      }

  public function do_upload()
    {
            $config['file_name']            = 'mypic.jpg';
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000000;
            //$config['max_width']            = 1024;
            //$config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
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
    }




}
