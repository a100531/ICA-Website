<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_Model extends CI_Model {
    # Register a user into the first table
    public function add_user($email, $password, $salt, $role)
    {

        $data = array(
            'u_email'       => $email,
            'u_password'    => password_hash($salt.$password, CRYPT_BLOWFISH),
            'u_salt'        => strrev($salt),
            'role_id'       => $role
        );

        $this->db->insert('tbl_users', $data);

        return $this->db->insert_id();

    }


    # Associate user details with the login data
    public function user_details($id, $name, $surname)
    {
        if ($this->check_user_details($id, $name, $surname))
        {
            return TRUE;
        }

        $data = array(
            'user_id'       => $id,
            'u_name'        => $name,
            'u_surname'     => $surname,
            'u_creation'    => time()
        );

        $this->db->insert('tbl_user_details', $data);

        return $this->db->affected_rows() == 1;
    }

    # Deletes a user from the database
    public function delete_user($id)
    {
        $this->db->delete('tbl_users', array('id' => $id));
    }

    # Checks the user details table for unchanged/existing data
    public function check_user_details($id, $name, $surname)
    {

        $data = array(
            'user_id'       => $id,
            'u_name'        => $name,
            'u_surname'     => $surname
        );

        return $this->db->get_where('tbl_user_details', $data)->num_rows() == 1;
    }

    # checks the password provided by the user
    public function check_password($email, $password)
    {
      $info = $this->db->select('id,  u_password, u_salt')
                      ->where('u_email', $email)
                      ->get('tbl_users')
                      ->row_array();

      $checkstr =  strrev($info['u_salt']).$password;

      return password_verify($checkstr, $info['u_password']) ? $info['id'] : FALSE;

    }

    public function set_login_data($id, $code)
    {
      #1. write the login information or stop the code Here
      if (!$this->persist($id,$code))
      {
        return FALSE;
      }
      return $this->db->select('
                          tbl_users.id,
                          tbl_roles.name AS role,
                          tbl_users.u_email AS email,
                          tbl_user_details.u_name AS name,
                          tbl_user_details.u_surname AS surname,
                          tbl_login_info.u_persistence AS session_code,')
                      ->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.id', 'left')
                      ->join('tbl_login_info', 'tbl_login_info.user_id = tbl_users.id', 'left')
                      ->join('tbl_roles', 'tbl_roles.id = tbl_users.role_id', 'left')
                      ->where('tbl_users.id',$id)
                      ->get('tbl_users')
                      ->row_array();
    }
    # writes the login information to the database
    public function persist($id, $code)
    {
      $data = array(
        'user_id'           => $id,
        'u_login_time'      => time(),
        'u_persistence'     => $code
      );

      $this->db->insert('tbl_login_info',$data);

      return $this->db->affected_rows() == 1;
    }
    public function delete_session ($id, $code)
    {
        $data = array(
            'user_id'                   =>$id,
            'u_persistence'             =>$code
        );

        $this->db->delete('tbl_login_info', $data);
    }
    public function check_data($id, $email, $code)
    {
        $data = array(
            'tbl_users.id'                  =>$id,
            'tbl_users.u_email'             =>$email,
            'tbl_login_info.U_persistence'  =>$code
        );
        return $this->db->select('tbl_users.id')
                        ->join('tbl_login_info', 'tbl_login_info.user.id = tbl_users.id', 'left')
                        ->get_where('tbl_users', $data)
                        ->num_rows() == 1;
    }
    public function all_courses_dropdown() 
    {

        // these lines are preparing the
        // query to be run.
        $courses = $this->db->select('id, c_name')
                                ->order_by('c_name', 'asc')
                                ->get('tbl_courses');

        $array = [];
        foreach ($courses->result_array() as $row)
        {
            $array[$row['id']] = $row['c_name'];
        }

        return $array;
        
    }

    public function all_roles_dropdown() 
    {

        // these lines are preparing the
        // query to be run.
        $courses = $this->db->select('id, name')
                                ->order_by('id', 'asc')
                                ->get('tbl_roles');

        $array = [];
        foreach ($courses->result_array() as $row)
        {
            $array[$row['id']] = $row['name'];
        }

        return $array;
        
    }

    public function all_lecturers_dropdown() 
    {

        // these lines are preparing the
        // query to be run.
        $lecturers = $this->db->select('id, u_email')
                              ->order_by('u_email', 'asc')
                              ->get_where('tbl_users',array('role_id'=>'4'));

        $array = [];
        foreach ($lecturers->result_array() as $row)
        {
            $array[$row['u_email']] = $row['u_email'];
        }

        return $array;
        
    }
    public function all_sick_print() 
    {
        $currentDate = time();
        // these lines are preparing the
        // query to be run.
        $lecturers = $this->db->select('id,s_name,s_surname,s_dateLong,s_date')
                              ->order_by('s_date', 'desc')
                              ->where('s_date >',$currentDate)
                              ->get('tbl_sick');

        return $lecturers;
        
        
        
    }

    public function add_sick($lecturer, $date, $dateLong)
    {   
        $session = $this->session->userdata; 

        $data = array(
            's_name'        => $session['name'],
            's_surname'     => $session['surname'],
            's_dateLong'    => $dateLong,
            's_date'        => $date
            
        );

        $this->db->insert('tbl_sick', $data);

        return $this->db->insert_id();

    }

    

}
