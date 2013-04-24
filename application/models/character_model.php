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
			'name' => $this->input->post('name'),
			'ecl'  => $this->input->post('ecl'),
			'race' => $this->input->post('race'),
			'size' => $this->input->post('size'),
			'gender' => $this->input->post('gender'),
			'alignment' => $this->input->post('alignment'),
			'deity' => $this->input->post('deity'),
			'height' => $this->input->post('height'),
			'weight' => $this->input->post('weight'),
			'class' => $this->input->post('class'),
			'looks' => $this->input->post('looks'),
			'weight' => $this->input->post('weight'),
			'weight' => $this->input->post('weight')
			);

		return $this->db->insert('characters', $data);
	}

}

