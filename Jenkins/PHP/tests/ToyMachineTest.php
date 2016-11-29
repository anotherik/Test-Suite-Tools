<?php 

require '../ToyMachine.php';

class ToyMachineTest extends PHPUnit_Framework_TestCase{
	public $toyMachineInstance;

	public function setUp(){
		$this->toyMachineInstance = new ToyMachine();
	}

	public function testIfWheelWorks(){
		// lets say we have 200 toys
		$this->toyMachineInstance->setToys(200);

		// ... and we turn the wheel once
		$this->toyMachineInstance->turnWheel();

		// ... we should now have 199 toys, so:
		$this->assertEquals(199, $this->toyMachineInstance->getToys());

		// ... if we use the turnWheel2  (it takes 2 toys)
		$this->toyMachineInstance->turnWheel2();

		// ... we should now have 197 toys, so:
		$this->assertEquals(197, $this->toyMachineInstance->getToys());

	}
}

?>