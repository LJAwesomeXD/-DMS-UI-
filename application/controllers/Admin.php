<?php
    /**
       * ADMIN CONTROLLER
       * Controller for admin. related operations

       * [methods] no description
     **/
    class Admin extends CI_Controller
    {
       /** Constructor **/
        public function __construct()
        {
            parent::__construct();
            $this->load->library('layouter');
            $this->load->model('Admin_model');
        }

       /** Index Action - short description **/
        public function index()
        {
            $data = array("msg" => "Hello World");
            //$this->layouter->render('controller/index', $data);
        }
    }
