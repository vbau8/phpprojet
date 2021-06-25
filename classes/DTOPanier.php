<?php
require_once("require.php");
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
	public static function calculeMontant($id)
	{
		try {
			$connex=self::getBdd();
			$req = " SELECT ligne.id,produit.id,qte,prixUnit
			from ligne
			inner join produit on ligne.idProduit = produit.id
			where idPanier = ? ";
			 $prep = $connex->prepare($req);
			 $prep->bindParam(1, $id, PDO::PARAM_INT);
			 $prep->execute();
			 $montant= 0;
			 while ($data = $prep->fetchObject()) {
				 $montant = $montant+ $data->qte* $data->prixUnit;
				 }
			}
			catch (PDOException $e)
			{
				echo 'Erreur avec la BD!: '.$e->getMessage().'<br/>';
				die();
			}
		  return $montant;
		
		
	}

	public static function update(Panier $data)
	{
		try {
			$connex = self::getBdd();
			$req = "UPDATE panier set montant = ? WHERE id = ?";
			$prep = $connex->prepare($req);
			$id = $data->getId();
			$montant = $data->getMontant();
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
			$req = "SELECT panier.id, produit.id, panier.montant, produit.libelle
		            FROM produit
		            INNER JOIN ligne ON produit.id = ligne.id
		            INNER JOIN panier ON ligne.idPanier=panier.id
		            ORDER BY panier.id";

			$resultat = $connex->query($req);
			while ($data = $resultat->fetchObject()) {
				$paniers[] = new Panier($data->id, $data->montant, $data->libelle);

			}
		} catch (PDOException $e) {
			echo 'Erreur avec la BD!: ' . $e->getMessage() . '<br/>';
			die();
		}
		return $paniers;
	}
	public static function selectById($id)
    {
        try {
            $maCo = self::getBdd();
            $req = "select * from panier p inner join ligne l on p.id = l.idpanier where p.id=?";
            $prep = $maCo->prepare($req);
            $prep->bindParam(1, $id, PDO::PARAM_INT);
            $prep->execute();
            while ($data = $prep->fetchObject()) {
                $paniers[] = new Panier($data->id, $data->montant, $data->libelle);
            }
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: '.$e->getMessage().'<br/>';
            die();
        }
      return $paniers;
    }
	public function ajouteLigne(Produit $data)
	{
		try {
			$connex = self::getBdd();
			$req = "INSERT INTO ligne (produit, qte) VALUES (?,?)";

			$prep = $connex->prepare($req);
      		$prep->bindParam(1, $ajoutLigne);
			$produit = $data->getRefProd();
			$qte = $data->getQteStock();
			$prep->bindParam(1, $produit);
			$prep->bindParam(2, $qte);

			$prep->execute();
			//$data->setId($connex->lastInsertId());
		} catch (PDOException $e) {
			echo 'Erreur avec la BD!: ' . $e->getMessage() . '<br/>';
			die();
		}	
	}
	public static function deleteLigne(Panier $data)
	{
		try {
			$connex = self::getBdd();
			$id = $data->getId();
			$req = "delete from ligne where id=?";
			$prep = $connex->prepare($req);
			$prep->bindParam(1, $id, PDO::PARAM_INT);
			$prep->execute();
		} catch (PDOException $e) {
			echo 'Erreur avec la BD!: ' . $e->getMessage() . '<br/>';
			die();
		}
	}

	public static function updateLigne(Ligne $data)
	{
		try {
			$connex = self::getBdd();
			$req = "UPDATE ligne set qte = ? WHERE id = ?";
			$prep = $connex->prepare($req);
			$id = $data->getId();
			$qte = $data->getQte();
			$prep->bindParam(1, $qte);
			$prep->bindParam(2, $id, PDO::PARAM_INT);
			$prep->execute();
		} catch (PDOException $e) {
			echo 'Erreur avec la BD!: ' . $e->getMessage() . '<br/>';
			die();
		}
	}
<<<<<<< HEAD
=======
	public static function selectById($id)
	{
		try {
			$maCo = self::getBdd();
			$req = "select * from panier p inner join ligne l on p.id = l.idpanier where p.id=?";
			$prep = $maCo->prepare($req);
			$prep->bindParam(1, $id, PDO::PARAM_INT); 
			$prep->execute(); 
			//$resultat = $maCo->query($req);
			while ($data = $prep->fetchObject()) {
				$paniers[] = new Panier($data->id, $data->montant, $data->libelle);
			}
		} 
		catch (PDOException $e) 
		{
			echo 'Erreur avec la BD!: '.$e->getMessage().'<br/>';
			die();
		}
	  return $paniers;
	}
>>>>>>> view
	
    private static function getBdd()
	{
		require("localData.php");
		return new PDO($dns, $user, $mdp);
	}
}