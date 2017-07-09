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
    class Contests_model extends CI_Model
    {
        /**
            * Constructor
        **/
        public function __construct()
        {
            $this->load->database();
        }

        /**
            * create_contest(contest_data);
            * -> creates a new contest in the database
            * given a contest data
        **/
     	public function create_contest($contest_data)
		{
			$this->db->insert('contests', $contest_data);
		}

        /**
            * get_contests()
            * -> gets specific contests from the database
            * given a limit and an offfset
         **/
		public function get_contests($limit, $offset)
		{
			$this->db->select('contest_id, title, prize, summary')
                       ->limit($limit, $offset);
			return $this->db->get('contests')->result_array();
		}
    }
