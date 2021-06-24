<?php
require_once("produit.php");
class DTOProduit 
{
	public static function selectById($id)
	{
		try {
			$maCo = self::getBdd();
			$req = "select * from produit p
                    inner join pdtnonperis pnp on p.pdtNonPeriss = pnp.id
                    inner join pdtperis pnp on p.pdtPeriss = pnp.id
                    where p.id = ?";
			$prep = $maCo->prepare($req);
			$prep->bindParam(1, $id, PDO::PARAM_INT); 
			$prep->execute(); 
			$mesData = $prep->fetchObject();
            if (empty($mesData->pdtPeriss)) {
                if (empty($mesData->auteur)){
                    $unProduit = new Stylo( $mesData->id, $mesData->libelle, $mesData->marque,  $mesData->qteStock, $mesData->prixUnit, $mesData->couleur, $mesData->type);
                } else {
                    $unProduit = new CartePostale($mesData->id, $mesData->libelle, $mesData->marque,  $mesData->qteStock, $mesData->prixUnit, $mesData->type, $mesData->auteur);
                }
            } else {
                if (empty($mesData->parfum)){
                    $unProduit = new Pain($mesData->id, $mesData->libelle, $mesData->marque,  $mesData->qteStock, $mesData->prixUnit, $mesData->poids);
                } else {
                    $unProduit = new Glace($mesData->id, $mesData->libelle, $mesData->marque,  $mesData->qteStock, $mesData->prixUnit, $mesData->parfum, $mesData->tempConserv);
                }
            }
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
			while($mesData = $resultat->fetchObject()) {
                if (empty($mesData->pdtPeriss)) {
                    if (empty($mesData->auteur)){
                        $lesProduits[] = new Stylo( $mesData->id, $mesData->libelle, $mesData->marque,  $mesData->qteStock, $mesData->prixUnit, $mesData->couleur, $mesData->type);
                    } else {
                        $lesProduits[] = new CartePostale($mesData->id, $mesData->libelle, $mesData->marque,  $mesData->qteStock, $mesData->prixUnit, $mesData->type, $mesData->auteur);
                    }
                } else {
                    if (empty($mesData->parfum)){
                        $lesProduits[] = new Pain($mesData->id, $mesData->libelle, $mesData->marque,  $mesData->qteStock, $mesData->prixUnit, $mesData->poids);
                    } else {
                        $lesProduits[] = new Glace($mesData->id, $mesData->libelle, $mesData->marque,  $mesData->qteStock, $mesData->prixUnit, $mesData->parfum, $mesData->tempConserv);
                    }
                }
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