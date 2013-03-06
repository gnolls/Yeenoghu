<?php
class Die_model extends CI_Model {
	
	var $numSides = 6;
	
	function __construct()
	{
    	parent::__construct();
	}
	
	function setNumSides($sides)
	{	
		if($sides < 1 || $sides > 18)
			$numSides = $sides;
	}

    function rollDie()
    {
        return mt_rand(1, $numSides);
    }

}
