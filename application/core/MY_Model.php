<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Model
 *
 * @author Mordecai
 */
class MY_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        echo 'lol';
        exit();
    }
}
