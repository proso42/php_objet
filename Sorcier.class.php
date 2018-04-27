<?php
abstract class	Sorcier extends	personnage
{
	public function	__destruct()
	{
		parent::__destruct();
	}

	public function	expeliarmus($target)
	{
		$this->warCries();
		print_color($this->getName(), $this->getColor());
		echo " lance un expeliarmus sur ";
		print_color($target->getName(), $target->getColor());
		echo " et lui inflige ";
		print_color("30 points de dégats !" . PHP_EOL, "yellow");
		$target->setLife($target->getLife() - 30);
		if ($target->getLife() > 0)
			$target->hurtCries();
		else
		{
			$target->lastsWords();
			return (1);
		}
		return (0);
	}

	public function	avadaKedavra($target)
	{
		$this->warCries();
		print_color($this->getName(), $this->getColor());
		echo " lance un avada kedavra sur ";
		print_color($target->getName(), $target->getColor());
		echo " et le blesse grievement en lui infligant ";
		print_color("50 points de dégats !" . PHP_EOL, "yellow");
		$target->setLife($target->getLife() - 50);
		if ($target->getLife() > 0)
			$target->hurtCries();
		else
		{
			$target->lastsWords();
			return (1);
		}
		return (0);
	}

	public function	sectusempra($target)
	{
		$this->warCries();
		print_color($this->getName(), $this->getColor());
		echo " lance un sectusempra sur ";
		print_color($target->getName(), $target->getColor());
		echo " et lui inflige ";
		print_color("10 points de dégats et le fait saigner !" . PHP_EOL, "yellow");
		$target->setLife($target->getLife() - 10);
		$target->setBleeding(TRUE);
		if ($target->getLife() > 0)
			$target->hurtCries();
		else
		{
			$target->lastsWords();
			return (1);
		}
		return (0);
	}
}
?>
