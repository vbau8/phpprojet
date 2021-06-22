<?php
    class Produit {
        public $refProd;
        public $libelle;
        public $marque;
        public $prixUnitaire;
        public $qteStock;

        function __construct()
        {
            $nb_args = func_num_args();
            $args = func_get_args();
            switch ($nb_args) {
                case 4:
                    $this->setMarque($args[0]);
                    $this->setLibelle($args[1]);
                    $this->setQteStock($args[2]);
                    $this->setPrixUnitaire($args[3]);
                    break;
                case 5:
                    $this->setRefProd($args[0]);
                    $this->setMarque($args[1]);
                    $this->setLibelle($args[2]);
                    $this->setQteStock($args[3]);
                    $this->setPrixUnitaire($args[4]);
                    break;
                default:
                    break;

            }
        }
        public function InfosProduit()
        {
            return $this->libelle.' '.$this->marque.' '.$this->prixUnitaire.' '.$this->qteStock;
        }
        public function getRefProd() {
            return $this->refProd;
        }
        public function setRefProd($refProd) {
            $this->refProd = $refProd;
        }
        public function getLibelle() {
            return $this->libelle;
        }
        public function setLibelle($libelle) {
            $this->libelle = $libelle;
        }
        public function getMarque() {
            return $this->marque;
        }
        public function setMarque($marque) {
            $this->marque = $marque;
        }
        public function getPrixUnitaire() {
            return $this->prixUnitaire;
        }
        public function setPrixUnitaire($prixUnitaire) {
            $this->prixUnitaire = $prixUnitaire;
        }
        public function getQteStock() {
            return $this->qteStock;
        }
        public function setQteStock($qteStock) {
            $this->qteStock = $qteStock;
        }
    }
?>