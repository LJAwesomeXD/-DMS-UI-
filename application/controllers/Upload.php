<?php
    /**
       * UPLOAD CONTROLLER
       * Controller for submissions.

     **/
    class Upload extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
        }

        public function index()
        {

        }

        //a function to upload profile image
        public function upload_profile_image()
        {
            $config['upload_path'] = "./uploads/";
            $config['allowed_types'] = "gif|jpg|png";
            $config['max_size'] = 10000;
            $config['max_width'] = 4000;
            $config['max_height'] = 4000;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file'))
            {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                print_r($data);
            }
        }

    }
