<?php
    require_once('pdtperis.php');

    class Pain extends pdtPeris {
        public $poids;

        function __construct()
        {
            $nb_args = func_num_args();
            $args = func_get_args();
            switch ($nb_args) {
                case 5:
                    parent::__construct($args[0], $args[1], $args[2], $args[3]);
                    $this->setPoids($args[4]);
                    break;
                case 6:
                    parent::__construct($args[0], $args[1], $args[2], $args[3], $args[4]);
                    $this->setPoids($args[5]);
                    break;
            }
        }
        public function getPoids() {
            return $this->poids;
        }
        public function setPoids($poids) {
            $this->poids = $poids;
        }
        public function __toString()
        {
<<<<<<< HEAD
            return $this->marque.'<br/>'.$this->libelle.'<br/>'.$this->poids;
=======
            return $this->InfosProduit().'<br/>Poids du pain: '.$this->poids;
>>>>>>> 72ed590760cae2b9440d07599afd7601d5da568f
        }
    }
?>