<?php 

class ToyMachine{

	private $toys;

	//get the amount of toys still in the machine
	public function getToys(){
		return $this->toys;
	}

	//set the amount of toys in the machine
	public function setToys($amount){
		$this->toys = $amount;
	}

	//the user turns the whell, machine dispenses toy
	public function turnWheel(){
		$this->setToys($this->getToys() -1);
	}
}

?>