<?php
class Auteur
{
    private $prenom;
    private $nom;

    public function __construct($prenom, $nom)
    {
        $this->setPrenom($prenom);
        $this->setNom($nom);    
    }

    public function __toString()
    {
        return 'Infos auteur : '.$this->prenom.' '.$this->nom;
    }
# Accesseurs
    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
            return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom): self
    {
            $this->prenom = $prenom;

            return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
            return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
            $this->nom = $nom;

            return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}
?>