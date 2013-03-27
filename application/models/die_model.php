<?php
class Die_model extends CI_Model {


    public function rollDice()
    {
        return mt_rand(1, $this->input->post('numSides'));
    }

}
