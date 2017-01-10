<?php

/**
 * Created by PhpStorm.
 * User: ABorisov
 * Date: 25.11.2016
 * Time: 13:39
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lists extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null)
    {
        $this->load->view('example.php',$output);
    }

    public function offices()
    {
        $output = $this->grocery_crud->render();

        $this->_example_output($output);
    }

    public function index()
    {
        $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }

   public function ipadress ()
   {

   }

}