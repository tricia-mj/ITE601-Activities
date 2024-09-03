<?php  

class Payroll {

	private string $firstname = "Tricia";
	private string $lastname = "Jabadan";

	private int $tax = 50;
	private int $salary = 100;

	public function computeNet() : float {
		$net = $this->salary - $this->tax; 
		return $net;
	}

	public function getEmployeeName() : string {
		return $this->firstname.", ".$this->lastname; 

	}


}

$Payroll = new Payroll();

echo "Employee Name: ". $Payroll->getEmployeeName() . "<br/>";
echo "Net Pay : ". $Payroll->computeNet();

?>