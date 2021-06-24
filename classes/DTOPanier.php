<?php
require_once("panier.php");
require_once("ligne.php");
require_once("produit.php");
class DTOPanier
{

	public static function insert(Panier $data)
	{
		try {
			$connex = self::getBdd();
			$req = "INSERT INTO panier (montant) VALUES (?)";

			$prep = $connex->prepare($req);
			//$lignePanier=$data->Line.getLine();
			$prep->bindParam(1, $lignePanier);
			$montant = $data->getMontant();
			$prep->bindParam(1, $montant);

			$prep->execute();
			$data->setId($connex->lastInsertId());
		} catch (PDOException $e) {
			echo 'Erreur avec la BD!: ' . $e->getMessage() . '<br/>';
			die();
		}
	}
	public static function delete(Panier $data)
	{
		try {
			$connex = self::getBdd();
			$id = $data->getId();
			$req = "delete from panier where id=?";
			$prep = $connex->prepare($req);
			$prep->bindParam(1, $id, PDO::PARAM_INT);
			$prep->execute();
		} catch (PDOException $e) {
			echo 'Erreur avec la BD!: ' . $e->getMessage() . '<br/>';
			die();
		}
	}

	public static function update(Panier $data)
	{
		try {
			$connex = self::getBdd();
			$req = "UPDATE panier set montant = ? WHERE id = ?";
			$prep = $connex->prepare($req);
			$prep = $connex->prepare($req);
			$id = $data->getId();
			//	$refClient=$data->getRefClient();
			$montant = $data->getMontant();
			//	$prep->bindParam(1,$refClient);
			$prep->bindParam(1, $montant);
			$prep->bindParam(2, $id, PDO::PARAM_INT);
			$prep->execute();
		} catch (PDOException $e) {
			echo 'Erreur avec la BD!: ' . $e->getMessage() . '<br/>';
			die();
		}
	}
	public static function selectAll()
	{
		try {

			$connex = self::getBdd();
			//$req = "select * from panier";
			$req = "SELECT panier.id, produit.id, panier.montant, produit.libelle
		FROM produit
		INNER JOIN ligne ON produit.id = ligne.id
		INNER JOIN panier ON ligne.idPanier=panier.id
		ORDER BY panier.id";
			/*$req = "SELECT * 
		FROM produit p inner join pdtnonperis pnp
		 on p.pdtNonPeriss = pnp.id";*/
			$resultat = $connex->query($req);
			while ($data = $resultat->fetchObject()) {
				$paniers[] = new Panier($data->id, $data->montant,
				 $data->libelle);
			}
		} catch (PDOException $e) {
			echo 'Erreur avec la BD!: ' . $e->getMessage() . '<br/>';
			die();
		}
		return $paniers;
	}

    private static function getBdd()
	{
		require("localData.php");
		return new PDO($dns, $user, $mdp);
	}
}