<?php
class Die_model extends CI_Model {


    public function rollDice()
    {
			if($this->input->post('numSides') > 100)
				return mt_rand(1, 100);
			else
        return mt_rand(1, $this->input->post('numSides'));
    }

}
