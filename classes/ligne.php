<?php 

class Ligne
{
	private $id;
	private $idPanier;
	private $produit;
    private $qte;
	private $prix;

	function __construct($idPanier,$produit,$qte,$prix,$id='')
	{
		$this->setIdPanier($idPanier);
		$this->setProduit($produit);
		$this->setQte($qte);
		$this->setPrix($prix);
		$this->setId($id);
	}
	public function getInfos()
	{
		return "Ligne[id=".$this->id.",idPanier=".$this->idPanier.",idProduit=".$this->produit.",qte=".$this->qte."]";
	}

	public function __toString()
	{
		return $this->qte." ".$this->idPanier." ".$this->produit." ".$this->prix;
	}
	public function getIdPanier()
	{
		return $this->idPanier;
	}
	public function setIdPanier($idPanier)
	{
		$this->idPanier = $idPanier;
	}   
	public function getProduit()
	{
		return $this->produit;
	}
	public function setProduit($produit)
	{
		$this->produit = $produit;
	}
    public function getQte()
	{
		return $this->qte;
	}
	public function setQte($qte)
	{
		$this->qte = $qte;
	}
	public function getPrix()
	{
		return $this->prix;
	}
	public function setPrix($prix)
	{
		$this->prix = $prix;
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
