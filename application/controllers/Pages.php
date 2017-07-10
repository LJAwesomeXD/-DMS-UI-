<?php
    /**
       * PAGES CONTROLLER
       * Displays site's general pages

       * ACTIONS
            * /home/ - homepage
       * METHODS
            * _
     **/
    class Pages extends CI_Controller
    {
        private $_uri;

       /** Constructor **/
        public function __construct()
        {
            parent::__construct();
            $this->load->library('layouter');
            $this->load->model('user_model');
            //$this->load->model('Controller_model');
        }

       /** Index Action - short description **/
        public function home()
        {
            $data = array("msg" => "Hello World");
            $this->layouter->render($data);
        }

        public function about()
        {
           $data = array("msg" => "Hello World");
          $this->layouter->render($data);
        }

        public function designers()
        {   
             $limit = 10;
             $offset  = 0;
           $get_info = $this->user_model->rank_user($limit,$offset);
            $data["users"] = $get_info;
            $this->layouter->render($data);
       
        }

        
    }
