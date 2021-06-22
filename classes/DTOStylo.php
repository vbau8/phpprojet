<?php
require_once("stylo.php");
class DTOStylo
{
	public static function selectById($id)
	{
	try {
		$maCo=self::getBdd();
	  	$req="select * from produit p inner join pdtnonperis pnp on p.pdtNonPeriss = pnp.id where idAuteur is not null and id=?";
		$prep=$maCo->prepare($req);
		$prep->bindParam(1,$id,PDO::PARAM_INT); 
		$prep->execute(); 
		$mesData=$prep->fetchObject();
		$uneCarte=new Stylo($mesData->type, $mesData->type);
		} 
	catch (PDOException $e) 
		{
		echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
		die();
		}
	  return $uneCarte;
	}
	public static function selectAll()
	{
	try {
			$maCo=self::getBdd();
		  	$req="select * from produit p inner join pdtnonperis pnp on p.pdtNonPeriss = pnp.id where idAuteur is not null";
			$resultat = $maCo->query($req);            
			while($mesData=$resultat->fetchObject())
			{

				$lesStylo[]=new Stylo($mesData->couleur, $mesData->type);
			}
			} 
		catch (PDOException $e) 
			{
			echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
			die();
			}
	return $lesStylo;
	}
	
    private static function getBdd() 
	{
		require("localData.php");
		return new PDO($dns,$user,$mdp);
	}
}
