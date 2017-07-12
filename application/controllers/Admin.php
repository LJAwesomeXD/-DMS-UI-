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

              $limit = 10;
             $offset  = 0;

            //Users_Panel

            
           $get_info = $this->admin_model->get_users($limit,$offset);
            $data["users"] = $get_info;
           // print_r($data['users']);die();
            $this->layouter->render($data);

            //Contests_Panel


             $get_info_contest = $this->admin_model->get_contests($limit,$offset);
            $data["contests"] = $get_info_contest;
            //print_r($data['contests']);die();
            $this->layouter->render($data);

              
        }

    }
