<?php

class Main extends CI_Controller{

    public function index(){
        $this->load->view('main_view',array('error'=>''));
    }

    public function upload()
    {
        $config['upload_path'] = "./images/";
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
            $this ->load->view('main_view',$error);
        }else{
            $file_data = $this->upload->data();
            $data['img'] = base_url().'/images/'.$file_data['file_name'];
            $this->load->view('success_msg',$data); 
        }
    }
}
