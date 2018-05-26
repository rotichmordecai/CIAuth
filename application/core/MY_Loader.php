<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Loader
 *
 * @author Mordecai
 */
class MY_Loader extends CI_Loader
{
    /**
     * Database Loader
     *
     * @access    public
     * @param    string    the DB credentials
     * @param    bool    whether to return the DB object
     * @param    bool    whether to enable active record (this allows us to override the config setting)
     * @return    object
     */
    public function database($params = '', $return = false, $active_record = null)
    {
        // Grab the super object
        $CI = &get_instance();

        // Do we even need to load the database class?
        if (class_exists('CI_DB') and $return == false and $active_record == null and isset($CI->db) and is_object($CI->db)) {
            return false;
        }

        require_once BASEPATH . 'database/DB.php';

        // Load the DB class
        $db = &DB($params, $active_record);

        $my_driver = config_item('subclass_prefix') . 'DB_' . $db->dbdriver . '_driver';
        $my_driver_file = APPPATH . 'core/' . $my_driver . '.php';

        if (file_exists($my_driver_file)) {
            require_once $my_driver_file;
            $db = new $my_driver(get_object_vars($db));
        }

        if ($return === true) {
            return $db;
        }

        // Initialize the db variable.  Needed to prevent
        // reference errors with some configurations
        $CI->db = '';
        $CI->db = $db;
    }
}
