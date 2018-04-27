<?php
class	Aragorn extends	Guerrier
{
	public function	__construct()
	{
		$this->setPotion(2);
		$this->setLife(100);
		$this->setName("Aragorn");
		$this->setColor("green");
		print_color($this->getName(), $this->getColor());
		echo " entre dans l'arène l'air serein." . PHP_EOL;
	}

	public function	__destruct()
	{
		parent::__destruct();
	}

	public function	__toString()
	{
		return ("Aragorn, roi du Gondor.");
	}

	public function	warCries()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		$alea = rand(1, 4);
		if ($alea == 1)
			echo "\"Pour Fredon !\"" . PHP_EOL;
		else if ($alea == 2)
			echo "\"Je fais ça pour les habitants de la Terre du Milieu !\"" . PHP_EOL;
		else if ($alea == 3)
			echo "\"Le mal ne triomphera pas !\"" . PHP_EOL;
		else
			echo "\"Goute à ma lame !\"" . PHP_EOL;
		//echo "(" . $this->getLife() . ")" . PHP_EOL;
	}

	public function	hurtCries()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		$alea = rand(1, 4);
		if ($alea == 1)
			echo "\"Ta haine te consumera ...\"" . PHP_EOL;
		else if ($alea == 2)
			echo "\"Ça ne m'arrêtera pas !\"" . PHP_EOL;
		else if ($alea == 3)
			echo "\"Comment oses-tu ?\"" . PHP_EOL;
		else
			echo "\"Je m'en souviendrais !\"" . PHP_EOL;
	}

	public function	lastsWords()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		echo "\"Je meurs pour le que les hommes puissent vivre libre ...\"" . PHP_EOL;
	}
}
?>
