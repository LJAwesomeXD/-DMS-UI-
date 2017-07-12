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

        public function get_users($limit,$offset)
        {
            $this->db->select('last_name,first_name,username,gender,email')
                       ->limit($limit, $offset);
            return $this->db->get('user')->result_array();
        
         }

        public function get_contests($limit,$offset)
        {
            $this->db->select('title,prize,description,gender,length')
                       ->limit($limit, $offset);
            return $this->db->get('contests')->result_array();
        
         } 

       
    }
