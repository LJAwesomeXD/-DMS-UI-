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
            $this->load->model('admin_model');
            $this->load->model('contests_model');
            $this->load->model('user_model');
        }

        
        public function admin_panel()
        {


          $data = array("msg" => "Hello World");
            $this->layouter->render($data);

        }

    }
