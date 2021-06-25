<?php 
class Panier
{
	private $refClient;
	private $montant;
	private $id;
	private $lignes;
	


	function __construct($refClient,$montant,$lignes,$id='')
	{
	$this->setRefClient($refClient);
	$this->setMontant($montant);
	$this->setId($id);
	}
	public function getInfos()
	{
		require_once("require.php");
		$ligne= DTOProduit::selectById(2);
        echo $ligne->libelle;

	}
     
	
	public function __toString():string
	{
		return $this->lignes;
	}
	
	public function getRefClient()
	{
		return $this->refClient;
	}
	public function setRefClient($refClient)
	{
		$this->refClient = $refClient;
	}   
	public function getMontant()
	{
		return $this->montant;
	}
	public function setMontant($montant)
	{
		$this->montant = $montant;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Get the value of lignes
	 */
	public function getLignes()
	{
		return $this->lignes;
	}

	/**
	 * Set the value of lignes
	 */
	public function setLignes($lignes): self
	{
		$this->lignes = $lignes;

		return $this;
	}
}

 ?>
