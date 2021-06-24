<?php
require_once("produit.php");
class DTOProduit 
{
	public static function selectById($id)
	{
		try {
			$maCo = self::getBdd();
			$req = "select * from produit where id=?";
			$prep = $maCo->prepare($req);
			$prep->bindParam(1, $id, PDO::PARAM_INT); 
			$prep->execute(); 
			$mesData = $prep->fetchObject();
			$unProduit = new Produit($mesData->id, $mesData->libelle, $mesData->modele, $mesData->prixUnit, $mesData->qteStock);
		} 
		catch (PDOException $e) 
		{
			echo 'Erreur avec la BD!: '.$e->getMessage().'<br/>';
			die();
		}
	  return $unProduit;
	}

	public static function selectAll()
	{
		try {
			$maCo = self::getBdd();
		  	$req = "select * from produit";
			$resultat = $maCo->query($req);            
			while($mesData = $resultat->fetchObject()){
				$lesProduits[] = new Produit($mesData->id, $mesData->libelle, $mesData->modele, $mesData->prixUnit, $mesData->qteStock);
			}
		} 
		catch (PDOException $e) 
		{
			echo 'Erreur avec la BD!: '.$e->getMessage().'<br/>';
			die();
		}
	    return $lesProduits;
	}
	
    private static function getBdd() 
	{
		require("localData.php");
		return new PDO($dns, $user, $mdp);
	}
}
?>