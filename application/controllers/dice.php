<?php

    class Dice extends CI_Controller
    {
        public function __construct()
        {
            parent::__constuct();
            $this->load->model("die_model");
        }
        
        public function index()
        {
             $data['title'] = "Roll your fate";
             $this->load->view('templates/header', $data);
             $this->load->view('dice/index');
             $this->load->view('templates/footer')
	    }

        public function set($sides)
        {
            if(ctype_digit($sides)
            {
              $this->die_model->setNumSides($sides);
            }
        }

        public function roll()
        { 
            $data['title'] = "Your fate is...";
            $this->load->view('templates/header', $data);
            $data['roll'] = $this->die_model->rollDie();
            $this->load->view('dice/roll', $data);
            $this->load->view('templates/footer');           
        }
}
?>
