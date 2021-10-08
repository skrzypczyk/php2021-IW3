<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Titre de ma page</title>
	<meta name="description" content="<?php    ?>">
</head>
<body>
	<?php   

		//commentaire sur une ligne
		/*
			pls lignes 
		*/
		//Int string boolean float null
		$firstname = "Yves";
		$firstname = 2;


		$age = 20;
		echo $age; //20
		$age= $age +1;
		echo $age; //21
		echo $age+1; //22
		echo 1+$age; //22
		echo $age++; //21
		echo $age; //22
		echo ++$age; //23

		echo $age; //23
		echo $age=$age+1; //24
		echo $age+1=$age; //Error

		$age = 20;

		//Dans 1 an il aura 21 ans
		echo "Dans 1 an il aura ". ($age+1) ." ans";


		$age = 12;

		if($age>18) 
			echo "majeur";
		elseif($age == 18) 
			echo "tout juste majeur";
		else 
			echo "mineur";
		

		$scope = "user";

		switch ($scope) {
			case 'admin':
				echo "create";
			
			case 'author':
				echo "update";

			default:
				echo "read";
				break;
		}
		

		//conditions ternaires

		$age = 20;

		if($age >= 18){
			echo "Majeur";
		}else{
			echo "Mineur";
		}

		// instruction (condition)?vrai:faux;

		echo ($age >= 18)?"Majeur":"Mineur";

		//null coalescent

		if(empty($_POST["email"]))echo $_POST["email"];else echo "";

		echo $_POST["email"]??"";


		for($cpt=0; $cpt<20; ++$cpt){
			echo $cpt;
		}

		foreach($array as $key=>$value){

		}

		$age = 20

		while($age>0){
			$age--;
		}



		$age = 20
		do{
			$age--;
		}while($age>0);


		//Les tableaux
		// $myArray = array();
		$myArray = [0=>"Cherigui", 1=>"Amine", 2=>13, 3=>2, 4=>3];
		//Amine a une moyenne de 6/20
		echo $myArray[1]." a une moyenne de ".(($myArray[2]+$myArray[3]+$myArray[4])/3)."/20";


		$myArray = [
						"lastname"=>"Pierre", 
						"firstname"=>"Michelle", 
						"average"=>13, 
						"fr"
					];
		//Prénom nom a une moyenne de 13

		echo $myArray["firstname"]." ".$myArray["lastname"]." a une moyenne de ".$myArray["average"];



		$myArray = [
						"lastname"=>"Pierre", 
						"firstname"=>["Michelle", "Paul"], 
						"average"=>13, 
						"fr"
					];

		$myArray = [
						0=>[],
						1=>[
							0=>[],
							1=>[
								[
									[
										[],
										[0=>"test"]
									],
									[]
								]
							]
						]
					]; //6


			//Afficher test :
			echo $myArray[1][1][0][0][1][0];




			helloWorld(12);

			helloWorld();



			function helloWorld (int $age=0): void
			{
				echo $age;
			}




			$firstname = ";;YvES";

			cleanFirstname($firstname); //Yves


			function cleanFirstname(&$firstname): void
			{	
				$firstname = ltrim($firstname, ";");
				$firstname = strtolower($firstname);
				$firstname = ucwords($firstname);
			}


			//Super globale =
			//-> accessible partout
			//-> commence par $_ et majuscule
			//-> contient toujours un array
			//-> créées et alimentées par le serveur PHP
			//-> POST GET FILES REQUEST COOKIE SESSION  SERVER  ENV




	 ?>


	 <form method="POST" enctype="multipart/form">
	 	<input type="email" name="email" value="<?php if(empty($_POST["email"]))echo $_POST["email"];else echo ""; ?>">

	 	<input type="file" name="avatar">
	 	<input type="file" name="CI">
	 </form>


</body>
</html>