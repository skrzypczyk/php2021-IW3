<?php

/*


	Plan du maison : Class House (Pascal Case)
	-> 4 murs
	-> 1 toit
	-> 1 porte
	-> 1 fenetre
	-> 1 fondation
*/
class House {

	//Une variable dans une classe = propriete ou attributs
	private $wall = 4;
	private $roof = 1;
	private $door = 1;
	private $window = 1;
	private $fundation = 1;

	//Function -> method
	public function addRoom()
	{
		$this->wall += 3;
		$this->roof++;
		$this->door++;
		$this->window++;
		$this->fundation++;
	}

}


//création d'une maison
//Créer un objet basé sur le plan qui s'appel House
//Créer un objet basé sur la class House
//Création d'une instance de la class House

$myHouse = new House();
$myHouse->addRoom();
$myHouse->addRoom();





echo "<pre>";
//var_dump($myHouse);
print_r($myHouse);







