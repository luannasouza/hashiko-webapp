<?php
class Account_model extends CI_Model
{
  function __construct() 
  {
		parent::__construct();
		$this->load->database();
	}

		public function insertPerson($data)
		{
      $this->db->insert('persons', $data);      
		}
}