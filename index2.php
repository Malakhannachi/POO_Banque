<?php

spl_autoload_register(function($class_name){

    require 'classe/'. $class_name . '.php';

});


$titulaire = new Titulaire ("Stephen", "King","26-10-1989","Strasbourg");
$compteBancaire = new CompteBancaire ("compte courant", 100, "dollar", $titulaire);
$titulaire2 = new Titulaire ("Stephen", "King","26-10-1989","Strasbourg");
$compteBancaire2 = new CompteBancaire ("livret", 100, "dollar", $titulaire);

//var_dump($compteBancaire);
//var_dump($titulaire);

echo $titulaire->getInfos()."<br>";
echo $compteBancaire->getInfos()."<br>";

echo $titulaire2->getInfos()."<br>";
echo $compteBancaire2->getInfos()."<br>";
echo $compteBancaire->crediter(200)."<br>";
echo $compteBancaire->debiter(100)."<br>";
echo $compteBancaire->getSoldeInitial()."<br>";
echo $compteBancaire->effectuerVirement($compteBancaire2,90)."<br>";
echo $compteBancaire2->getSoldeInitial()."<br>";
echo $compteBancaire->getSoldeInitial()."<br>";
//$compteBancaire->crediter(100);