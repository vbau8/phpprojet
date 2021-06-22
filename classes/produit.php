<?php
    require_once('../localData.php');

    class Produit {
        public $refProd;
        public $libelle;
        public $marque;
        public $prixUnitaire;
        public $qteStock;

        function __construct($refProd, $libelle, $marque, $prixUnitaire, $qteStock)
        {
            $this->setRefProd($refProd);
            $this->setLibelle($libelle);
            $this->setMarque($marque);
            $this->setPrixUnitaire($prixUnitaire);
            $this->setQteStock($qteStock);
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