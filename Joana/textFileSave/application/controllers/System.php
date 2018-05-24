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
                ),
                'Start date '      => array(
                    'type'          => 'date',
                    'placeholder'   => 'Choose the holiday',
                    'name'          => 'date_start',
                    'id'            => 'input-date_start'
                ),
                'End date '      => array(
                    'type'          => 'date',
                    'placeholder'   => 'Choose the holiday',
                    'name'          => 'date_end',
                    'id'            => 'input-date_end'
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

      $data = $this->input->post('link');
      $data2 = $this->input->post('description');
      $data3 = $this->input->post('date_start');
      $data4 = $this->input->post('date_end');

      $this->link($data);
      $this->description($data2);
      $this->date_start($data3);
      $this->date_end($data4);

    //  $username = time();
    //  if ( ! write_file('./assets/textFiles/'.$username.'.txt', $data))
    //  {
    //          echo 'Unable to write the file';
    //  }
    //  else
    //  {
    //          echo 'File written!';
    //  }


    //  $date_name = time();
    //  if ( ! write_file('./assets/textFiles/'.$date_name.'.txt', $data2))
    //  {
    //          echo 'Unable to write the file';
    //  }
    //  else
    //  {
    //          echo 'File written!';
    //  }


  }

  public function link($data)
  {
    $date_name = time();
      if ( ! write_file('./assets/textFiles/'.$date_name.'.txt', $data))
      {
              echo 'Unable to write the file';
      }
      else
      {
              echo 'File written!';
      }
  }

  public function description($data2)
  {
    $date_name = time();
    $date_name1 = $date_name +1;
      if ( ! write_file('./assets/textFiles/'.$date_name1.'.txt', $data2))
      {
              echo 'Unable to write the file';
      }
      else
      {
              echo 'File written!';
      }
  }

  public function date_start($data3)
  {
    $date_name = time();
    $date_name2 = $date_name +2;
    if ( ! write_file('./assets/textFiles/'.$date_name2.'.txt', $data3))
    {
            echo 'Unable to write the file';
    }
    else
    {
            echo 'File written!';
    }
  }

  public function date_end($data4)
  {
    $date_name = time();
    $date_name3 = $date_name +3;
    if ( ! write_file('./assets/textFiles/'.$date_name3.'.txt', $data4))
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

   /*
    public function addInfo($email, $password, $salt)
    {

      $data = array(
            'u_email'       => $email,
            'u_password'    => password_hash($salt.$password, CRYPT_BLOWFISH),
            'u_salt'        => strrev($salt)
        );

        $this->db->insert('tbl_users', $data);

        return $this->db->insert_id();

    }
    */

    public function addInfo()
	{
        $data = array(
            'page_title'    => 'addInfo',
            'form_action'   => 'addInfo/submit',
            'form'          => array(
                'Name'          => array(
                    'type'          => 'text',
                    'placeholder'   => 'Joseph',
                    'name'          => 'name',
                    'id'            => 'input-name'
                ),
                'Surname'       => array(
                    'type'          => 'text',
                    'placeholder'   => 'Borg',
                    'name'          => 'surname',
                    'id'            => 'input-surname'
                ),
                'Email'         => array(
                    'type'          => 'email',
                    'placeholder'   => 'me@example.com',
                    'name'          => 'email',
                    'id'            => 'input-email'
                ),
                'Password'      => array(
                    'type'          => 'password',
                    'placeholder'   => 'password',
                    'name'          => 'password',
                    'id'            => 'input-password'
                ),
            ),
            'buttons'       => array(
                'submit'        => array(
                    'type'          => 'submit',
                    'content'       => 'Log In'
                )
            )
        );

        $this->load->view('addInfo', $data);
	}

  public function addInfo_submit()
  {
    # 1. Check the form for validation errors
        if ($this->fv->run('addInfo') === FALSE)
        {
            echo validation_errors();
            return;
        }

        # 2. Retrieve the first set of data
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        # 3. Generate a random keyword for added protection
        # Since the encrypted key is in binary, we should change it to a hex string (0-9, a-f)
        $salt       = bin2hex($this->encryption->create_key(8));

        # 3. Add them to the database, and retrieve the ID
        $id = $this->system->add_user($email, $password, $salt);

        # 4. If the ID didn't register, we can't continue.
        if ($id === FALSE)
        {
            echo "We couldn't register the user because of a database error.";
            return;
        }

        # 5. Retrieve the next data
        $name       = $this->input->post('name');
        $surname    = $this->input->post('surname');

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
        redirect('/');
  }

  public function portfolio()
  {
    $data = array(
        'page_title'    => 'portfolio',
        'form_action'   => 'portfolio/submit',
        'form'          => array(
            'Profile'         => array(
                'type'          => 'file',
                'placeholder'   => 'Upload your image',
                'name'          => 'portfolioImage',
                'id'            => 'input-image',
                'size'          => '20'
            ),
            'Portfolio'         => array(
                'type'          => 'file',
                'placeholder'   => 'Upload your image',
                'name'          => 'portfolioImage2',
                'id'            => 'input-image2',
                'size'          => '20'
            ),
            'Link'         => array(
                'type'          => 'text',
                'placeholder'   => 'Insert your link',
                'name'          => 'portfolio_link',
                'id'            => 'input-link'
            ),
            'Description'      => array(
                'type'          => 'text',
                'placeholder'   => 'Insert your description',
                'name'          => 'portfolio_description',
                'id'            => 'input-description'
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

    $this->load->view('portfolio', $data);
  }

  public function portfolio_submit()
  {
    // 1 image at a time
    $data  = $this->do_uploadProfile();
    // image array
    $data2 = $this->do_uploadPortfolio();
    $data3 = $this->input->post('portfolio_link');
    $data4 = $this->input->post('portfolio_description');


    $this->portfolio_link($data3);
    $this->portfolio_description($data4);

  }
  // this creates a text file for the link
  public function portfolio_link($data3)
  {
    //$date_name = time();
    $id_num = 1;
      if ( ! write_file('./assets/portfolio/'.$id_num.'link.txt', $data3))
      {
              echo 'Unable to write the file';
      }
      else
      {
              echo 'File written!';
      }
  }
  // this creates a text file for the description
  public function portfolio_description($data4)
  {
    //$date_name = time();
    //$date_name1 = $date_name +1;
    $id_num = 1;
      if ( ! write_file('./assets/portfolio/'.$id_num.'description.txt', $data4))
      {
              echo 'Unable to write the file';
      }
      else
      {
              echo 'File written!';
      }
  }

  public function do_uploadProfile()
    {
      $id_num = 1;
      $id_num_profile = $id_num.'profile.jpg';
      $config['file_name']            = $id_num_profile;
      $config['upload_path']          = './assets/portfolio/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 10000;
      //$config['max_width']            = 1024;
      //$config['max_height']           = 768;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('portfolioImage'))
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

    public function do_uploadPortfolio()
      {
        $id_num = 1;
        $id_num_portfolio = $id_num.'portfolio.jpg';
        $config['file_name']            = $id_num_portfolio;
        $config['upload_path']          = './assets/portfolio/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['overwrite']            = true;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('portfolioImage2'))
        {
                $error = array('error' => $this->upload->display_errors());
                var_dump ($error);

              //  $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                echo 'Files written!';

                //$this->load->view('upload_success', $data);
        }
      }

}
