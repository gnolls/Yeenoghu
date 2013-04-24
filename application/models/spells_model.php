<?php
class Spells_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_spells($spell_id = FALSE)
	{

		if($spell_id === FALSE)
		{
			$query = $this->db->get('spells');
			return $query->result_array();
		}
		
			$query = $this->db->get_where('spells', array('spell_id' => $spell_id));
			return $query->row_array();	
	
		
	}

	public function get_spells_by_class($class = FALSE)
	{
			$this->db->group_by("level");
			$query = $this->db->get_where('spells', array('class' => $class));
			return $query->result_array();	
	
		
	}
}

