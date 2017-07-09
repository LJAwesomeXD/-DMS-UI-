<?php
    /**
        * :: MODEL SOURCE FILE ::
        * User
        * Stuff related to users
        *
        * __construct()
        * create_contest(contest)
        * join_contest()
        * get_contests(limit, offset)
     **/
    class User_model extends CI_Model
    {
        // true if user is an admin.
        public $is_admin = false;

        /** Constructor **/
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        // getter for $is_admin

        public function get_admin_state()
        {
            return $this->is_admin;
        }

        // creates new user in the database
        public function create_new_user($data)
        {
            $data["password"] = md5($data["password"]);
            $this->db->insert('user', $data);
        }

        // signs in a user
        public function auth($username, $password)
        {
            $pw = md5($password);
            //checks if there is a match username, password in db
            $match = count($this->db->select('username')
                  ->where('username', $username)
                  ->where('password', $pw)
                  ->get('user')->result_array());


            //if there is a match
            if($match > 0)
            {
                //check if user is admin
                $admin_state =
                $this->db->select('is_admin')
                     ->where('username', $username)
                     ->get('user')
                     ->result_array();


                $this->is_admin = $admin_state[0]['is_admin'];
                return true;
            }
            else
            {

            }
            return false;
        }

        // gets the profile info data of a user
        public function get_profile_info()
        {
            $result =
                $this->db->select("*")
                     ->where("username", $_SESSION["username"])
                     ->get("user")
                     ->result_array();

            return $result;
        }

        // gets specific users from the database given a limit and
        // an offset
        public function get_some_users($limit, $offset)
        {
            $result =
                $this->db->select("username, first_name, last_name")
                    ->limit($limit, $offset)
                    ->get('user');

             return $result->result_array();
        }

        // counts the number of users in the database
        public function count_total_users()
        {
            $result =
                $this->db->count_all_results("user");
            return $result;
        }

    }
