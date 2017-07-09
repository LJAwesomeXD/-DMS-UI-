<?php
    class Contests extends CI_Controller
    {
        //initialize controller
        public function __construct()
        {
            session_start();
            parent::__construct();
            $this->load->model('contests_model');
            $this->load->library('layouter');
            $this->load->helper('form');
        }


        // adds a new contest to the database through the Contests model
        public function create_contest()
        {
            //stop user from accessing this page when not logged it
            if(isset($_SESSION["username"])) {

                $data = $_POST;

                //createcontest
                $this->contests_model->create_contest($data);

            }


        }

        //displays a specific contest
        public function view()
        {
            $this->layouter->render("contests/view");
        }

        //action for create new contest page
        public function create()
        {
            //if logged in
            if(isset($_SESSION["username"]))
                $this->layouter->render('contests/create');
            else
                header("Location: ../pages/auth");
        }


        //action for the page that will display all contests
        public function all()
        {
            $data['contests'] = $this->contests_model->get_contests();
            $this->layouter->render('contests/all', $data);
        }


        //homepage
        public function home()
        {
            $data["contests"] = $this->contests_model->get_contests(100, 0);
            $this->layouter->render($data);
        }
    }
