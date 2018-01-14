<?php

class Utilisateur{
	public $pseudo;
	private $mdp;
	public $nom;
	public $prenom;
	public $sexe;
	public $mail;
	public $tel;
	public $favoris;
	public $photo;
	public $dateNaissance;
	public $bio;
	public $villes;

	private $pdo = null;
	private $table;

	public function __construct($table){
		$this->pdo = new PDO('mysql:host=localhost;dbname=bts', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		$this->table = $table;
	}

	public function __destruct(){
		unset($this->pdo);
	}


	public function ajoutUtilisateur($pseudo, $mdp, $mail){
		$ajout = $this->pdo->prepare("INSERT INTO $this->table (pseudo, mdp, mail) VALUES (:pseudo, :mdp, :mail)");
		$ajout->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
		$ajout->bindValue(':mdp', $mdp, PDO::PARAM_STR);
		$ajout->bindValue(':mail', $mail, PDO::PARAM_STR);
		$ajout->execute();
	}

	
}

