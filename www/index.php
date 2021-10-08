<?php

class User
{
	private $id = null;
	private $firstname;
	private $lastname;
	private $email;
	private $pwd;
	private $createdAt;
	private $updatedAt = null;


	public function __construct($email, $pwd)
	{
		//$this->id = null;
		$this->setEmail($email) ;
		$this->setPwd($pwd);
	}


	//SETTERS
	public function setFirstname(string $firstname): void
	{
		$firstname = trim($firstname);
		$firstname = strtolower($firstname);
		$firstname = ucwords($firstname);
		$this->firstname = $firstname;
	}
	public function setLastname(string $lastname): void
	{
		$lastname = trim($lastname);
		$lastname = strtoupper($lastname);
		$this->lastname = $lastname;
	}
	public function setEmail(string $email): void
	{
		$email = trim($email);
		$email = strtolower($email);
		$this->email = $email;
	}
	public function setPwd(string $pwd): void
	{
		$this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
	}

	public function setCreatedAt(): void
	{
		$this->createdAt = time();
	}

	public function setUpdated(): void
	{
		$this->updatedAt = time();
	}

	//GETTER
	public function getFirstname(): string
	{
		return $this->firstname;
	}
	public function getLastname(): string
	{
		return $this->lastname;
	}
}



$user = new User("y.SKRZypczYK@gmail.com", "Test1234");

/*
$user->firstname= "   YvES  ";
$user->lastname= "SkrzYPCZYK  ";
$user->email= "y.SKRZypczYK@gmail.com";
$user->pwd= "Test1234";
//time -> timestamp -> Nb de secondes depuis le 1er Jan 1970 (Creation de l'unix)
$user->createdAt= time();
*/
$user->setFirstname("   YvES  ");
$user->setLastname("SkrzYPCZYK  ");
//$user->setEmail("y.SKRZypczYK@gmail.com");
//$user->setPwd("Test1234");
$user->setCreatedAt();



// Bonjour Yves SKRZYPCZYK
echo "Bonjour ".$user->getFirstname()." ".$user->getLastname();


echo "<pre>";
print_r($user);













