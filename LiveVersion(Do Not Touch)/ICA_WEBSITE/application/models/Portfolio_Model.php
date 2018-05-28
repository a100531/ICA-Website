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
    public function deleteProfile_Submit()
    {

        $session = $this->session->userdata;
        $email = $session['email'];

        $data = array(
            'u_portfolio'       => 0,
        );

        $this->db->where('u_email', $email)
                 ->update('tbl_users', $data);
    
        
    }

    public function get_portfolios()
    {
        $data = $this->db->select('id, u_email')
                         ->order_by('u_email', 'asc')
                         ->get_where('tbl_users',array('u_portfolio'=>'1'));

        return $data;
    }
}