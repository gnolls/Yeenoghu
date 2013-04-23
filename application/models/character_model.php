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
		
			$query = $this->db->get_where('characters', array('user_id' => $userID));
			return $query->row_array();	
	
		
	}

	public function set_character($userId)
	{
		$this->load->helper('url');

		$data = array(
			'user_id' => $userId,
			'name' => $this->input->post('title'),
			'class' => $this->input->post('class')
			);

		return $this->db->insert('characters', $data);
	}

}

