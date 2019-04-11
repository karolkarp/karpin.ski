<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {
    public function index()
    {
        die();
        $this->load->library('migration');

        if ( ! $this->migration->current()){
            echo 'Error' . $this->migration->error_string();
        } else {
            echo 'Migrations ran successfully!';
        }   
    }    
}