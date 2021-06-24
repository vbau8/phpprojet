<?php
    abstract class Produit {
        protected $refProd;
        protected $libelle;
        protected $marque;
        protected $prixUnit;
        protected $qteStock;

        public function __construct()
        {
            $nb_args = func_num_args();
            $args = func_get_args();
            switch ($nb_args) {
                case 4:
                    $this->setMarque($args[0]);
                    $this->setLibelle($args[1]);
                    $this->setQteStock($args[2]);
                    $this->setPrixUnit($args[3]);
                    break;
                case 5:
                    $this->setRefProd($args[0]);
                    $this->setMarque($args[1]);
                    $this->setLibelle($args[2]);
                    $this->setQteStock($args[3]);
                    $this->setPrixUnit($args[4]);
                    break;
                default:
                    break;
            }
        }
        public function InfosProduit()
        {
            $argRefProd = (empty($this->refProd)) ?  '' : $this->refProd.' ';
            return $argRefProd.$this->libelle.' '.$this->marque.' '.$this->prixUnit.' '.$this->qteStock;
        }

    # Accesseurs
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
        public function getPrixUnit() {
            return $this->prixUnit;
        }
        public function setPrixUnit($prixUnit) {
            $this->prixUnit = $prixUnit;
        }
        public function getQteStock() {
            return $this->qteStock;
        }
        public function setQteStock($qteStock) {
            $this->qteStock = $qteStock;
        }
        public function __toStringProd()
        {
            return 'Nom: '.$this->libelle.'<br/>Marque: '.$this->marque.'<br/>Prix: '.$this->prixUnit.'<br/>Quantité en Stock: '.$this->qteStock;
        }
    }
?>