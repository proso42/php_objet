<?php
class	Dumbledor extends	Sorcier
{
	public function	__construct()
	{
		$this->setPotion(2);
		$this->setLife(100);
		$this->setName("Albus Dumbledor");
		$this->setColor("magenta");
		print_color($this->getName(), $this->getColor());
		echo " entre dans l'arène plein de sagesse." . PHP_EOL;
	}

	public function	__destruct()
	{
		parent::__destruct();
	}

	public function	__toString()
	{
		return ("Albus Dumbledor, directeur de Poudlard.");
	}

	public function	warCries()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		$alea = rand(1, 4);
		if ($alea == 1)
			echo "\"Je regrette vraiment se qui va se passer !\"" . PHP_EOL;
		else if ($alea == 2)
			echo "\"La sécurité de mes élèves est ma priorité !\"" . PHP_EOL;
		else if ($alea == 3)
			echo "\"La magie n'a pas de secret pour moi, tu en sera témoin !\"" . PHP_EOL;
		else
			echo "\"Ma fonction de directeur m'octroie quelques privilèges ...\"" . PHP_EOL;
	//	echo "(" . $this->getLife() . ")" . PHP_EOL;
	}

	public function	hurtCries()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		$alea = rand(1, 4);
		if ($alea == 1)
			echo "\"C'est tout ce dont tu es capable ?\"" . PHP_EOL;
		else if ($alea == 2)
			echo "\"La vie ne s'éteindra pas en moi !\"" . PHP_EOL;
		else if ($alea == 3)
			echo "\"Les conséquences seront désastreuses !\"" . PHP_EOL;
		else
			echo "\"Tu ne m'arrêteras pas !\"" . PHP_EOL;
	}

	public function	lastsWords()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		echo "\"Pour un esprit équilibré, la mort n'est qu'une grande aventure de plus\"" . PHP_EOL;
	}
}
?>
