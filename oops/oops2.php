<?php
class human 
{
	public $gender;
	
	public function __construct($der)
	{ 
		$this->gender = $der; 
	}
	
	public function set_gender($aa)
	{ 
		$this->gender=$aa; 
	}

	public function get_gender()
	{ 
		return $this->gender; 
	}
}


$Johnny = new human('male');

echo $Johnny->get_gender();

$Johnny->set_gender('female');

echo $Johnny->get_gender();
?>