<?php
    /**
      * [MODEL NAME]
      * [MODEL DESCRIPTION]

      * functions
     **/

    class Model_model extends CI_Model
    {
        /** constructor **/
         public function __construct()
         {
             parent::__construct();
             $this->load->database();
         }

        /** operations **/
         public function get()
         {
             return $this->db->???;
         }
    }
