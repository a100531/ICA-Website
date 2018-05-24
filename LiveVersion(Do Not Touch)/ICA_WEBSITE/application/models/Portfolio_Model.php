<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_Model extends CI_Model 
{
    public function editPortfolioUser_Submit()
    {

        $session = $this->session->userdata;
        $email = $session['email'];

        $data = array(
            'u_portfolio'       => 1,
        );

        $this->db->where('u_email', $email)
                 ->update('tbl_users', $data);
    
        
    }
}