<?php
    /**
       * [CONTROLLER NAME]
       * [controller description]

       * [methods] no description
     **/

    class Controller extends CI_Controller
    {
       /** Constructor **/
        public function __construct()
        {
            parent::__construct();
            //$this->load->library('layouter');
            //$this->load->model('Controller_model');
        }

       /** Index Action - short description **/
       // url param 1 - description
       // url param ... - description
        public function index()
        {
            $data = array("msg" => "Hello World");
            //$this->layouter->render('controller/index', $data);
        }
    }
