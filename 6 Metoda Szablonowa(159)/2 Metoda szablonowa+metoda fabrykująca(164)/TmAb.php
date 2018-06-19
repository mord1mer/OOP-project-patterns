<?php
//TmAb.php
//abstrakcyjna klasa wzorca Metoda Szablonowa
abstract class TmAb {
	protected $pix;
	protected $cap;
	public function templateMethod() {
		$this->addPix();
		$this->addCaption();
	}
	protected abstract function addPix();
	protected abstract function addCaption();
}
?>