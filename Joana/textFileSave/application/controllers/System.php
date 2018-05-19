<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends MY_Controller {

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

}
