<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model 
{
    public function delete_vacancy($id)
    {
        $this->db->delete('tbl_vacancy', array('id' => $id));

        redirect('adminVacancyList');
    }

    public function get_vacancy($id)
    {
        return $this->db->get_where('tbl_vacancy', array('id' => $id))->row_array();
        //redirect('adminVacancyList');
    }
    
    public function edit_vacancy($id,$category, $date, $expiry, $link, $name, $description)
    {
        $data = array(
            'v_date'            => $date,
            'v_date_expiry'     => $expiry,
            'v_link'            => $link,
            'v_name'            => $name,
            'v_description'     => $description,
            'v_course'          => $category
            
        );
    
    
        $this->db->where('id', $id);
        $this->db->update('tbl_vacancy', $data);

        redirect('adminVacancyList');
    }

    public function retrieveAllUsers()
    {
        return $this->db->select('
                          tbl_users.id,
                          tbl_roles.name AS role,
                          tbl_users.u_email AS email,
                          tbl_user_details.u_name AS name,
                          tbl_user_details.u_surname AS surname,')
                      ->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.id', 'left')
                      ->join('tbl_roles', 'tbl_roles.id = tbl_users.role_id', 'left')
                      ->get('tbl_users');
    }

    public function deleteAccount($id)
    {
        return $this->db->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.id', 'left')
                        ->join('tbl_login_info', 'tbl_login_info.user_id = tbl_users.id', 'left')
                        ->join('tbl_roles', 'tbl_roles.id = tbl_users.role_id', 'left')
                        ->where('tbl_users.id',$id)
                        ->delete('tbl_users');
        
    
    }
      
}