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
            //$this->load->model('Controller_model');
        }

       /** Index Action - short description **/
        public function home()
        {
            $data = array("msg" => "Hello World");
            $this->layouter->render($data);
        }

    }
