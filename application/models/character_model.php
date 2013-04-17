<?php
class Character_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_character($userID = FALSE)
	{

		if($character_id === FALSE)
		{
			return FALSE;
		}
		
			$query = $this->db->get_where('character', array('user_id' => $userID));
			return $query->row_array();	
	
		
	}

}

