<?php
include "print_color.php";
include "Personnage.class.php";
include "Sorcier.class.php";
include "Guerrier.class.php";
include "Harry.class.php";
include "Dumbledor.class.php";
include "Sauron.class.php";
include "Aragorn.class.php";
include "functionsChoice.php";

function	nextFighter($f)
{
	$random = rand(1,4);
	foreach ($f as $key)
	{
		if ($random == 1 && $key instanceof Harry)
			return (nextFighter($f));
		else if ($random == 2 && $key instanceof Dumbledor)
			return (nextFighter($f));
		else if ($random == 3 && $key instanceof Sauron)
			return (nextFighter($f));
		else if ($random == 4 && $key instanceof Aragorn)
			return (nextFighter($f));
	}
	if ($random == 1)
		return (new Harry);
	else if ($random == 2)
		return (new Dumbledor);
	else if ($random == 3)
		return (new Sauron);
	return (new Aragorn);
}

function	isWinner($f)
{
	foreach ($f as $key)
	{
		if ($key->getLife() > 0)
		{
			print_color($key->getName(), $key->getColor());
			echo " gagne le combat !" . PHP_EOL;
			return ;
		}
	}
}

srand(time(NULL));
$death_count = 0;
$i = 0;
$fighters = array();
$fighters[] = nextFighter($fighters);
$fighters[] = nextFighter($fighters);
$fighters[] = nextFighter($fighters);
$fighters[] = nextFighter($fighters);
while ($death_count < 3)
{
	//echo "Tour " . $i . PHP_EOL;
	if ($fighters[$i]->isBleeding())
			$death_count += $fighters[$i]->bleeding($fighters[$i]);
	if ($death_count >= 3)
		break;
	if ($fighters[$i]->getLife() > 0)
	{
		if ($fighters[$i] instanceof Sorcier)
			$death_count += choiceSpell($fighters[$i], choiceTarget($fighters, $fighters[$i]));
		else
			$death_count += choiceAttack($fighters[$i], choiceTarget($fighters, $fighters[$i]));
	}
	$i = ($i == 3) ? 0 : $i + 1;
	while ($fighters[$i]->getLife() <= 0)
	{
		$i = ($i == 3) ? 0 : $i + 1;
	}
}
 isWinner($fighters);
?>
