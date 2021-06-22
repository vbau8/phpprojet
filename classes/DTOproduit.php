<?php
require_once('produit.php');
class DTOproduit {
	public static function selectAll() {
		try {
			$maCo=self::getBdd();
			$req="select * from produit";
			$resultat = $maCo->query($req);
			while($mesDataProd=$resultat->fetchObject()) {
				$lesProduits[]=new Produit($mesDataProd->refProd,$mesDataProd->libelle,$mesDataProd->marque, $mesDataProd->prixUnitaire, $mesDataProd->qteStock);
			}
		}
		catch (PDOException $e) 
			{
			echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
			die();
			}
	return $lesProduits;
	}
	
	private static function getBdd() {
		// Création de la connexion
		require("localData.php");
		return new PDO($dns,$user,$mdp);
	}
}
?>