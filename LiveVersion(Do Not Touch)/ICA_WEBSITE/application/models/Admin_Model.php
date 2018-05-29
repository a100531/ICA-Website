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
        $data = $this->db->select('tbl_vacancy', array('id' => $id));

        //redirect('adminVacancyList');
    }
    
    public function edit_vacancy($category, $date, $expiry, $link, $name, $description)
    {
        $data = array(
            'v_date'            => $date,
            'v_date_expiry'     => $expiry,
            'v_link'            => $link,
            'v_name'            => $name,
            'v_description'     => $description,
            'v_course'          => $category
            
        );
    );
    
        $this->db->where('id', $id);
        $this->db->update('tbl_vacancy', $data);

        redirect('adminVacancyList');
    }
}