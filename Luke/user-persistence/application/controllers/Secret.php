<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secret extends MY_Controller {

    # This will make sure the permissions work on this controller.
    function __construct()
    {
        parent::__construct();
        $this->has_permission('ACCESS_SECRET_PAGE') or show_404();
    }

    function index()
    {
        echo "This will be our little secret ;)";
    }

}
