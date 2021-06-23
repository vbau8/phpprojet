<?php 

class Ligne
{
	private $id;
	private $idPanier;
	private $idProduit;
    private $qte;

	function __construct($idPanier,$idProduit,$qte,$id='')
	{
	$this->setIdPanier($idPanier);
	$this->setIdProduit($idProduit);
    $this->setQte($qte);
	$this->setId($id);
	}
	public function getInfos()
	{
		return "Ligne[id=".$this->id.",idPanier=".$this->idPanier.",idProduit=".$this->idProduit.",qte=".$this->qte."]";
	}
	public function getIdPanier()
	{
		return $this->idPanier;
	}
	public function setIdPanier($idPanier)
	{
		$this->idPanier = $idPanier;
	}   
	public function getIdProduit()
	{
		return $this->idProduit;
	}
	public function setIdProduit($idProduit)
	{
		$this->idProduit = $idProduit;
	}
    public function getQte()
	{
		return $this->qte;
	}
	public function setQte($qte)
	{
		$this->qte = $qte;
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
