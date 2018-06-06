<?php
//Client.php
function __autoload($class_name) {
	include $class_name . '.php';
}
class Client {
	private $market;
	private $manage;
	private $engineer;
	public function __construct() {
		$this->makeConProto();
		$Tess = clone $this->market;
		$this->setEmployee($Tess, "Teresa Kowalska", 101, "tk101-1234", "tess.png");
		$this->showEmployee($Tess);
		$Jacob = clone $this->market;
		$this->setEmployee($Jacob, "Jakub Jonas", 102, "jj101-2234", "jacob.png");
		$this->showEmployee($Jacob);

		$Ricky = clone $this->manage;
		$this->setEmployee($Ricky, "Ryszard Rodzyn", 203, "rr203-5634", "ricky.png");
		$this->showEmployee($Ricky);
		$Olivia = clone $this->engineer;
		$this->setEmployee($Olivia, "Oliwia Perzyna", 302, "op301-1278", "olivia.png");
		$this->showEmployee($Olivia);
		$John = clone $this->engineer;
		$this->setEmployee($John, "Jan Jackowski", 301, "jj302-1454", "john.png");
		$this->showEmployee($John);
	}
	private function makeConProto() {
		$this->market = new Marketing();
		$this->manage = new Management();
		$this->engineer = new Engineering();
	}
	private function showEmployee(IAcmePrototype $employeeNow) {
		$px = $employeeNow->getPic();
		echo "<img src=$px width='150' height='150'><br/>";
		echo $employeeNow->getName() . "<br/>";
		echo $employeeNow->getDept() . ": " . $employeeNow::UNIT . "<br/>";
		echo $employeeNow->getID() . "<p/>";
	}
	private function setEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px) {
		$employeeNow->setName($nm);
		$employeeNow->setDept($dp);
		$employeeNow->setID($id);
		$employeeNow->setPic("pix/$px");
	}
}
$worker = new Client();
?>