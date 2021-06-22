<?php
require_once("auteur.php");
class DTOAuteur 
{
    public static function selectById($id)
	{
	try {
		$maCo=self::getBdd();
	  	$req="select * from auteur where id=?";
		$prep=$maCo->prepare($req);
		$prep->bindParam(1,$id,PDO::PARAM_INT); 
		$prep->execute(); 
		$mesData=$prep->fetchObject();
		$unAuteur=new Auteur($mesData->nom,$mesData->prenom,$mesData->id);
		} 
	catch (PDOException $e) 
		{
		echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
		die();
		}
	  return $unAuteur;
	}
	public static function selectAll()
	{
	try {
			$maCo=self::getBdd();
		  	$req="select id, nom, prenom from auteur";
			$resultat = $maCo->query($req);
			while($mesDataAuteur=$resultat->fetchObject())
			{
				$lesAuteurs[]=new Auteur($mesDataAuteur->nom,$mesDataAuteur->prenom,$mesDataAuteur->id);
			}
			} 
		catch (PDOException $e) 
			{
			echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
			die();
			}
	return $lesAuteurs;
	}
	
    private static function getBdd() 
	{
		require("localData.php");
		return new PDO($dns,$user,$mdp);
	}
}