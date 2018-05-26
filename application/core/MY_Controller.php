<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author Admin
 */
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function initialize($section)
    {
        switch ($section) {
            case 'auth':
                
                $this->template->add_css('assets/css/bootstrap.min.css');
                $this->template->add_js('assets/js/bootstrap.min.js');

                break;

            default:
                break;
        }
    }
}
