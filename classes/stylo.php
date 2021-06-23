<?php
require_once("produit.php");
class Stylo extends produit
{
    private $couleur; 
    private $typeMine; 
    
    public function __construct() 
    {
        $ctp = func_num_args();
        $args = func_get_args();
        switch($ctp)
        {
            case 6:
                parent::__construct($args[0], $args[1], $$args[2], $args[3]);
                $couleur = $args[4]; 
                $typeMine = $args[5]; 
                break;
            case 7:
                parent::__construct($args[0], $args[1], $args[2], $args[3], $args[4]);
                $couleur = $args[5];
                $typeMine = $args[6]; 
                break;
            default:
                break;
        }
        $this->setCouleur($couleur); 
        $this->setTypeMine($typeMine); 
    }
 
    public function __toString()
    {
        return 'Infos stylo : '.parent::InfosProduit().' couleur '.$this->couleur.' typemine '.$this->typeMine;
    }

# Accesseurs
    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     */
    public function setCouleur($couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of typeMine
     */
    public function getTypeMine()
    {
        return $this->typeMine;
    }

    /**
     * Set the value of typeMine
     */
    public function setTypeMine($typeMine): self
    {
        $this->typeMine = $typeMine;

        return $this;
    }
}
?>