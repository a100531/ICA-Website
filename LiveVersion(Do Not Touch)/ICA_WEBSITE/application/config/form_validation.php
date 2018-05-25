<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(

    # The login form rules
    'login'         => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        )
    ),

    # The register form rules
    'addAccount'      => array(
        array(
            'field' => 'nameS',
            'label' => 'Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'surnameS',
            'label' => 'Surname',
            'rules' => 'required'
        ),
        array(
            'field' => 'emailS',
            'label' => 'Email',
            'rules' => 'required|valid_email|is_unique[tbl_users.u_email]'
        ),
        array(
            'field' => 'passwordS',
            'label' => 'Password',
            'rules' => 'required|min_length[8]|password_strength'
        )
    ),
    // The sick leave form rules
    'sickLeave'      => array(
        array(
            'field' => 'date',
            'label' => 'date',
            'rules' => 'required'
        )
    ),
    'editPortfolioUser'      => array(
        array(
            'field' => 'description',
            'label' => 'description',
            'rules' => 'required'
        ),
        array(
            'field' => 'link',
            'label' => 'link',
            'rules' => 'required'
        )
    ),

);
