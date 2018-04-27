<?php
abstract class	Personnage
{
	abstract public function	warCries();
	abstract public function	lastsWords();
	abstract public	function	hurtCries();

	private	$_potion;
	private	$_life;
	private	$_name;
	private	$_color;
	private	$_bleeding = FALSE;

	public function	__destruct()
	{
		if ($this->getLife() <= 0)
		{
			echo "Le corps de ";
			print_color($this->getName(), $this->getColor());
			echo " pourri dans l'arène..." . PHP_EOL;
		}
		else
		{
			print_color($this->getName(), $this->getColor());
			echo " quitte l'arène fier de sa victoire !" . PHP_EOL;
		}
	}

	public function	getPotion()
	{
		return ($this->_potion);
	}

	public function	getLife()
	{
		return ($this->_life);
	}

	public function	getName()
	{
		return ($this->_name);
	}

	public function	getColor()
	{
		return ($this->_color);
	}

	public function	isBleeding()
	{
		return ($this->_bleeding);
	}

	protected function	setPotion($nb)
	{
		$this->_potion = $nb;
	}

	protected function	setLife($nb)
	{
		$this->_life = $nb;
	}

	protected function	setName($name)
	{
		$this->_name = $name;
	}

	protected function	setColor($color)
	{
		$this->_color = $color;
	}

	protected function	setBleeding($statut)
	{
		$this->_bleeding = ($statut) ? TRUE : FALSE;
	}

	public function	lifePotion()
	{
		$healing = rand(10,40);
		$this->setLife($this->getLife() + $healing);
		print_color($this->getName(), $this->getColor());
		echo " bois une potion de soin et régénére ";
		print_color($healing . " points de vie." . PHP_EOL, "yellow");
		if ($this->isBleeding())
		{
			echo "Il guérrit également de son saignement." . PHP_EOL;
			$this->setBleeding(FALSE);
		}
		$this->setPotion($this->getPotion() - 1);
		return (0);
	}

	public function	bleeding($target)
	{
		$target->setLife($target->getLife() - 10);
		print_color($target->getName(), $target->getColor());
		if ($target->getLife() <= 0)
		{
			echo " meurt du saignement !" . PHP_EOL;
			$target->lastsWords();
			return (1);
		}
		else
		{
			echo " saigne beaucoup et perd ";
			print_color("10 points de vie." . PHP_EOL, "yellow");
			return (0);
		}
	}
}
?>
