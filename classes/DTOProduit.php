<?php
require_once("produit.php");
class DTOProduit 
{
	public static function selectById($id)
	{
		try {
			$maCo = self::getBdd();
			$req = "select p.id, libelle, marque, qteStock, prixUnit, couleur, type, idauteur, NULL poids, NULL parfum, NULL tempConserv, pdtNonPeriss, pdtPeriss
                    from produit p
                    inner join pdtnonperis pnp on p.pdtNonPeriss = pnp.id
                    where p.id = ?
                    union 
                    select p.id, libelle, marque, qteStock, prixUnit, null, null, null, poids, parfum, tempConserv, pdtNonPeriss, pdtPeriss
                    from produit p
                    inner join pdtperis pp on p.pdtPeriss = pp.id
                    where p.id = ? order by id";
            
			$prep = $maCo->prepare($req);
			$prep->bindParam(1, $id, PDO::PARAM_INT); 
            $prep->bindParam(2, $id, PDO::PARAM_INT); 
			$prep->execute(); 
			$mesData = $prep->fetchObject();
            if (empty($mesData->pdtPeriss)) {
                if (empty($mesData->auteur)){
                    $unProduit = new Stylo($mesData->id, $mesData->marque, $mesData->libelle, $mesData->qteStock, $mesData->prixUnit, $mesData->couleur, $mesData->type);
                } else {
                    $unProduit = new CartePostale($mesData->id, $mesData->marque, $mesData->libelle, $mesData->qteStock, $mesData->prixUnit, $mesData->type, $mesData->auteur);
                }
            } else {
                if (empty($mesData->parfum)){
                    $unProduit = new Pain($mesData->id, $mesData->marque, $mesData->libelle, $mesData->qteStock, $mesData->prixUnit, $mesData->poids);
                } else {
                    $unProduit = new Glace($mesData->id, $mesData->marque, $mesData->libelle, $mesData->qteStock, $mesData->prixUnit, $mesData->parfum, $mesData->tempConserv);
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
		  	$req = "select p.id, libelle, marque, qteStock, prixUnit, couleur, type, idauteur, NULL poids, NULL parfum, NULL tempConserv, pdtNonPeriss, pdtPeriss
                    from produit p
                    inner join pdtnonperis pnp on p.pdtNonPeriss = pnp.id
                    union 
                    select p.id, libelle, marque, qteStock, prixUnit, null, null, null, poids, parfum, tempConserv, pdtNonPeriss, pdtPeriss
                    from produit p
                    inner join pdtperis pp on p.pdtPeriss = pp.id order by id";
			$resultat = $maCo->query($req);            
			while($mesData = $resultat->fetchObject()) {
                if (empty($mesData->pdtPeriss)) {
                    if (empty($mesData->auteur)){
                        $lesProduits[] = new Stylo( $mesData->id, $mesData->marque, $mesData->libelle, $mesData->qteStock, $mesData->prixUnit, $mesData->couleur, $mesData->type);
                    } else {
                        $lesProduits[] = new CartePostale($mesData->id, $mesData->marque, $mesData->libelle,  $mesData->qteStock, $mesData->prixUnit, $mesData->type, $mesData->auteur);
                    }
                } else {
                    if (empty($mesData->parfum)){
                        $lesProduits[] = new Pain($mesData->id, $mesData->marque, $mesData->libelle, $mesData->qteStock, $mesData->prixUnit, $mesData->poids);
                    } else {
                        $lesProduits[] = new Glace($mesData->id, $mesData->marque, $mesData->libelle, $mesData->qteStock, $mesData->prixUnit, $mesData->parfum, $mesData->tempConserv);
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