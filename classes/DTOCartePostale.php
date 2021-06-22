<?php
require_once("cartepostale.php");
class DTOCartePostale 
{
	public static function selectById($id)
	{
	try {
		$maCo=self::getBdd();
	  	$req="select * from produit p inner join pdtnonperis pnp on p.pdtNonPeriss = pnp.id where idAuteur is null and id=?";
		$prep=$maCo->prepare($req);
		$prep->bindParam(1,$id,PDO::PARAM_INT); 
		$prep->execute(); 
		$mesData=$prep->fetchObject();
		$uneCarte=new CartePostale($mesData->type);
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
		  	$req="select * from produit p inner join pdtnonperis pnp on p.pdtNonPeriss = pnp.id where idAuteur is null";
			$resultat = $maCo->query($req);            
			while($mesData=$resultat->fetchObject())
			{

				$lesCartes[]=new CartePostale($mesData->type);
			}
			} 
		catch (PDOException $e) 
			{
			echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
			die();
			}
	return $lesCartes;
	}
	
    private static function getBdd() 
	{
		require("localData.php");
		return new PDO($dns,$user,$mdp);
	}
}
