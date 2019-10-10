<?php

require('classes/Carro.php');

$sedan = new Carro;

$sedan->setChassi('- 0120882 -');
$sedan->setRodas('- BBS aro 18 -');
$sedan->setNumP('- 4 portas -');
$sedan->setCor('- branco -');
$sedan->setLogo("- BMW -");

$sedan->getChassi();
$sedan->getRodas();
$sedan->getNumP();
$sedan->getCor();
$sedan->getLogo();

?>