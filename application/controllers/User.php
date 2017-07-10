<?php
    /**
       * USER CONTROLLER
       *

       * [methods] no description
     **/
    session_start();

    class User extends CI_Controller
    {
       /** Constructor **/
        public function __construct()
        {
            parent::__construct();
            $this->load->library('layouter');
            $this->load->model('user_model');
            $this->load->helper('url');
        }

       /** Signs Up a User **/
        public function do_signup()
        {
            $data = $_POST;
           /** $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_data($data);

            print_r($data);
            $config = array(
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email'
                ),
                array(
                    'field' => 'first_name',
                    'label' => 'First Name',
                    'rules' => 'required|alpha_numeric_spaces'
                ),
                array(
                    'field' => 'last_name',
                    'label' => 'Last Name',
                    'rules' => 'required|alpha_numeric_spaces'
                ),
                array(
                    'field' => 'contact_number',
                    'label' => 'Contact No.',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'address',
                    'label' => 'Address',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'gender',
                    'label' => 'Gender',
                    'rules' => 'required'
                )
            );

            $this->form_validation->set_rules($config);

            if($this->form_validation->run() == FALSE)
            {
                echo "#FAIL";
            }
            else 
            {
                $this->user_model->create_new_user($data);
                echo "#SUCCESS";
            }
        } **/

         $this->user_model->create_new_user($data);
                echo "#SUCCESS";

            }

       /** Signs In a User **/
        public function do_signin()
        {
            //check if not logged in
            if(!isset($_SESSION["username"]))
            {
                $un = $_POST["username"];
                $pw = $_POST["password"];

                //check credentials
                if($this->user_model->auth($un, $pw))
                {
                    //successful
                    $_SESSION["username"] = $un;
                    echo "#SUCCESS";
                }
                else
                {
                    //fail
                    echo "#FAIL";
                }
            }
        }

        /** Sign Out **/
        public function do_logout()
        {
            unset($_SESSION["username"]);
            echo header("Location: " . base_url());
        }

        /** Profile Page **/
        public function profile()
        {
            $profile_info = $this->user_model->get_profile_info()[0];
            $data["fname"] = $profile_info["first_name"];
            $data["lname"] = $profile_info["last_name"];
            $data["username"] = $profile_info["username"];
            $data["gender"] = $profile_info["gender"];
            $this->layouter->render($data);
        }
    }
