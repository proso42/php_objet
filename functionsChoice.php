<?php
function	choiceTarget($fighters, $attacker)
{
	$alea = rand(0,3);
	if ($fighters[$alea]->getName() == $attacker->getName())
		$alea = ($alea == 3) ? 0 : $alea + 1;
	while ($fighters[$alea]->getLife() <= 0)
	{
		$alea = ($alea == 3) ? 0 : $alea + 1;
		if ($fighters[$alea]->getName() == $attacker->getName())
			$alea = ($alea == 3) ? 0 : $alea + 1;
	}
	return ($fighters[$alea]);
}

function	choiceAttack($warrior, $target)
{
	if ($warrior->getSpc() && ($warrior->getPotion() && $warrior->getLife() < 100))
		$alea = rand(0,3);
	else if ($warrior->getSpc())
		$alea = rand(1,3);
	else if ($warrior->getPotion() && $warrior->getLife() < 100)
		$alea = rand(0,2);
	else
		$alea = rand(1,2);
	if ($alea == 0)
		return ($warrior->lifePotion());
	else if ($alea == 1)
		return ($warrior->ligthAttack($target));
	else if ($alea == 2)
		return ($warrior->heavyAttack($target));
	else
		return ($warrior->specialAttack($target));
}

function	choiceSpell($wizard, $target)
{
	if ($wizard->getLife() <= 15 && ($wizard->getPotion() && $wizard->getLife() < 100))
		$alea = rand(0,3);
	else if ($wizard->getLife() <= 15)
		$alea = rand(1,3);
	else if ($wizard->getPotion() && $wizard->getLife() < 100)
		$alea = rand(0,2);
	else
		$alea = rand(1,2);
	if ($alea == 0)
		return ($wizard->lifePotion());
	else if ($alea == 1)
		return ($wizard->expeliarmus($target));
	else if ($alea == 2)
		return ($wizard->sectusempra($target));
	else
		return ($wizard->avadaKedavra($target));
}
?>
