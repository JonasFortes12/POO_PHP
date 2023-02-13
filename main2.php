<?php
require_once './autoload.php';

use MyBank\Model\CPF;
use MyBank\Model\Employees\{Employee, Developer, Director, Manager};
use MyBank\Service\BonusControl;


$employer1 = new Developer(
    'José Ferreira',
     new CPF('884.996.743-97'),
    'Marketing Analyst',
    6500.00);

$employer2 = new Manager(
    'Lupita Manuela',
    new CPF('140.492.915-05'),
    'Secretary',
    4400.00);

$employer3 = new Director(
    'Laiane Moreira',
    new CPF('720.064.821-70'),
    'General Supervisor',
    10500.00);


$bonusControl = new BonusControl();
$bonusControl->addBonus($employer1);
$bonusControl->addBonus($employer2);
$bonusControl->addBonus($employer3);

$text = <<<TEXT
    
    {$employer1->getName()} bonus: {$employer1->calculateBonus()}
    {$employer2->getName()} bonus: {$employer2->calculateBonus()}
    {$employer3->getName()} bonus: {$employer3->calculateBonus()}
    
    AllBonus: {$bonusControl->getAllBonus()}

TEXT;

echo $text . PHP_EOL;


