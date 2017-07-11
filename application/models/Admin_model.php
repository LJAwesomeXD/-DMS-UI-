<?php
    /**
        * :: MODEL SOURCE FILE ::
        * Contest
        * Contest management and participation operations
        *
        * __construct()
        * create_contest(contest)
        * join_contest()
        * get_contests(limit, offset)
     **/
    class Admin_model extends CI_Model
    {
        /**
            * Constructor
        **/
        public function __construct()
        {
            $this->load->database();
        }

       
    }
