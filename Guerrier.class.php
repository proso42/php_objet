<?php
abstract class	Guerrier extends	personnage
{
	protected	$_specialAttack = 1;

	public function	getSpc()
	{
		return ($this->_specialAttack);
	}

	protected function	decreaseSpc()
	{
		$this->_specialAttack = 0;
	}

	public function	__destruct()
	{
		parent::__destruct();
	}

	public function	ligthAttack($target)
	{
		$this->warCries();
		print_color($this->getName(), $this->getColor());
		echo " lance une attaque légère sur ";
		print_color($target->getName(), $target->getColor());
		echo " et lui inflige ";
		print_color("20 points de dégats !" . PHP_EOL, "yellow");
		$target->setLife($target->getLife() - 20);
		if ($target->getLife() > 0)
			$target->hurtCries();
		else
		{
			$target->lastsWords();
			return (1);
		}
		return (0);
	}

	public function	heavyAttack($target)
	{
		$this->warCries();
		print_color($this->getName(), $this->getColor());
		echo " tente une attaque lourde sur ";
		print_color($target->getName() . PHP_EOL, $target->getColor());
		if (rand(1,2) == 1)
		{
			echo "Malheureusement il manque son coup et se vautre lamentablement dans la boue !" . PHP_EOL;
			return ;
		}
		else
			echo "Le frappant alors de toutes ses forces il lui inflige ";
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

	public function	specialAttack($target)
	{
		$this->decreaseSpc();
		$this->warCries();
		print_color($this->getName(), $this->getColor());
		if ($this->getName() == "Aragorn")
		{
			echo " fonce sur ";
			print_color($target->getName(), $target->getColor());
			echo " et le pourfend avec son immense épée, lui ôtant ";
			print_color("65 points de vie !" . PHP_EOL, "yellow");
		}
		else
		{
			echo " jette sa puissante masse d'arme sur ";
			print_color($target->getName(), $target->getColor());
			echo " lui ôtant ";
			print_color("65 points de vie !" . PHP_EOL, "yellow");
		}
		$target->setLife($target->getLife() - 65);
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
