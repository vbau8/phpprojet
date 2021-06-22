<?php
    require_once('produit.php');

    class pdtPeris extends Produit {
        public $dateExpir;

        function __construct() 
        {
            $nb_args = func_num_args();
            $args = func_get_args();
            switch($nb_args) {
                case 4:
                    parent::__construct($args[0], $args[1], $args[2], $args[3]);
                    break;
                case 5:
                    if (is_numeric($args[4])) parent::__construct($args[0], $args[1], $args[2], $args[3], $args[4]);
                    else {
                        parent::__construct($args[0], $args[1], $args[2], $args[3]);
                        $this->dateExpir = $args[4];
                    }
                    break;
                case 6:
                    parent::__construct($args[0], $args[1], $args[2], $args[3], $args[4]);
                    $this->setDateExpir($args[5]);
                    break;
                default:
                    break;
            }
        }
        public function getDateExpir() {
            return $this->dateExpir;
        }
        public function setDateExpir($date) {
            $this->dateExpir = $date;
        }
    }
?>