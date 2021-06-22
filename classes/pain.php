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
                    parent::__construct($args[1], $args[2], $args[3], $args[4]);
                    $this->setPoids($args[0]);
                    break;
                case 6:
                    parent::__construct($args[1], $args[2], $args[3], $args[4], $args[5]);
                    $this->setPoids($args[0]);
            }
        }
        public function getPoids() {
            return $this->poids;
        }
        public function setPoids($poids) {
            $this->poids = $poids;
        }
    }
?>