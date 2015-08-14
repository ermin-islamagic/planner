<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
    'login' => array(
        array(
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'trim|required|valid_email|min_length[5]|max_length[255]'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[5]|max_length[255]|md5'
        )
    ),
    'reset' => array(
        array(
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'trim|required|valid_email|min_length[5]|max_length[255]'
        )
    ),
);