<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends MY_Controller {

    public function index()
    {
        echo anchor('example/image/1', 'delete image 1'), '<br>', anchor('example/image/2', 'delete image 2'),'<br>';

        $array = array('one' => 1, 'two' => 2);
        var_dump($array);
        echo "<br>";
        unset($array['one']);
        var_dump($array);
    }

    public function image($i)
    {
        echo 'portfolioImage'.$i.'.png';

    }

    public function remove()
    {
        $array = read_xml('portfolioUploads/6/paths.xml');
        unset($array['profileImage3']);
        var_dump($array);
        $data = array(
            'root'  => 'paths',
            'data'  => $array
        );
        write_xml($data, 'portfolioUploads/6/paths.xml');
    }

}