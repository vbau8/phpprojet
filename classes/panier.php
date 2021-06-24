<?php 
class Panier
{
	private $refClient;
	private $montant;
	private $id;


	function __construct($refClient,$montant,$id='')
	{
	$this->setRefClient($refClient);
	$this->setMontant($montant);
	$this->setId($id);
	}
	public function getInfos()
	{
		//return "Panier <br> id : ".$this->id."<br> libelle : ".(new Produit)->getLibelle()."<br> refClient : ".$this->refClient."<br> montant : ".$this->montant." euro ";
//			return "Panier <br> id : ".$this->id."<br> libelle : ".$this->id."<br> refClient :".$this->refClient."<br> montant : ".$this->montant." euro ";
            $produit = DTOProduit::selectById($this->id);
        //    return $this->id."<br> libelle : ".$Produit->getLibelle()."<br> refClient :".$this->refClient."<br> montant : ".$this->montant." euro ";

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
	
	
	
}

 ?>
