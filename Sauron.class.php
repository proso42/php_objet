<?php
class	Sauron extends	Guerrier
{
	public function	__construct()
	{
		$this->setPotion(2);
		$this->setLife(100);
		$this->setName("Sauron");
		$this->setColor("red");
		print_color($this->getName(), $this->getColor());
		echo " entre dans l'arène plein de haine." . PHP_EOL;
	}

	public function	__destruct()
	{
		parent::__destruct();
	}

	public function	__toString()
	{
		return ("Sauron, seigneur des ténèbres.");
	}

	public function	warCries()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		$alea = rand(1, 4);
		if ($alea == 1)
			echo "\"וועט אַלע שטאַרבן\"" . PHP_EOL;
		else if ($alea == 2)
			echo "\"יהיה לי העור האנושי העלוב שלך\"" . PHP_EOL;
		else if ($alea == 3)
			echo "\"אני היצור החזק ביותר של האדמה האמצעית\"" . PHP_EOL;
		else
			echo "\"יהיה לי העור האנושי העלוב שלך\"" . PHP_EOL;
	}

	public function	hurtCries()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		$alea = rand(1, 4);
		if ($alea == 1)
			echo "\"יהיה לי העור האנושי העלוב שלך\"" . PHP_EOL;
		else if ($alea == 2)
			echo "\"וועט אַלע שטאַרבן\"" . PHP_EOL;
		else if ($alea == 3)
			echo "\"אני היצור החזק ביותר של האדמה האמצעית\"" . PHP_EOL;
		else
			echo "\"וועט אַלע שטאַרבן\"" . PHP_EOL;
	}

	public function	lastsWords()
	{
		print_color($this->getName() . " (" . $this->getLife() . ") : ", $this->getColor());
		echo "\"אני היצור החזק ביותר של האדמה האמצעית\"" . PHP_EOL;
	}
}
?>
