<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Nav
{
	public function get_Nav() {
	    $atr = array('id' => 'nav');
		$links = array(anchor(base_url(), 'Home'),
				anchor(site_url('dice/index'), 'Roll Dice'),
				anchor(site_url('spells/index'), 'Spells'),
				anchor(site_url('character/index'), 'Character'),
				anchor(site_url('about/index'), 'About'),
				anchor("http://noleptr.com/gnolls/phpBB3", 'Forum')
				);
		return array('attributes' => $atr, 'links' => $links);
	}  


/* TODO WILL ADD FUNCTIONALITY TO CREATE CUSTOM LINKS*/
//	public function set_links($items) {
//
//
//	}	

} //end nav library
