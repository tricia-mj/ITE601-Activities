<?php  

class Payroll {

	private string $firstname = "Tricia";
	private string $lastname = "Jabadan";

	private int $tax = 50;
	private int $salary = 100;

	public function computeNet() {
		$net = $this->salary - $this->tax; 
		return $net;
	}

	public function getEmployeeName() {
		return $this->firstname.",".$this->lastname; 

	}

	public function getEmployeeName() {
		return $this->firstname.",".$this->lastname; 

	}

}



echo "Employee Name: ". $Payroll = new getEmployeeName();
echo "Net Pay : ". $Payroll = new computeNet();

?>