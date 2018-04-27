<?php
class	Harry extends	Sorcier
{
	public function	__construct()
	{
		$this->setPotion(2);
		$this->setLife(100);
		$this->setName("Harry Potter");
		$this->setColor("blue");
		print_color($this->getName(), $this->getColor());
		echo " entre dans l'arène l'air inquiet." . PHP_EOL;
	}

	public function	__destruct()
	{
		parent::__destruct();
	}

	public function	__toString()
	{
		return ("Harry Potter, celui qui a survécu.");
	}

	public function	warCries()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		$alea = rand(1, 4);
		if ($alea == 1)
			echo "\"Je jure solennellement que mes intentions sont mauvaises !\"" . PHP_EOL;
		else if ($alea == 2)
			echo "\"Pour Gryffondor !\"" . PHP_EOL;
		else if ($alea == 3)
			echo "\"Mes parents ne sont pas morts en vaint !\"" . PHP_EOL;
		else
			echo "\"Ça c'est de la part de mes amis !\"" . PHP_EOL;
	//	echo "(" . $this->getLife() . ")" . PHP_EOL;
	}

	public function	hurtCries()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		$alea = rand(1, 4);
		if ($alea == 1)
			echo "\"Je pensais que tu étais mon ami !\"" . PHP_EOL;
		else if ($alea == 2)
			echo "\"Pourquoiiiiiiiiiii ?!\"" . PHP_EOL;
		else if ($alea == 3)
			echo "\"Je n'abandonnerai pas !\"" . PHP_EOL;
		else
			echo "\"J'ai survécu a bien pire que ça !\"" . PHP_EOL;
	}

	public function	lastsWords()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		echo "\"Je pars retrouver mes parents ...\"" . PHP_EOL;
	}
}
?>
