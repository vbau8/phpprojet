<?php
    require_once('pdtperis.php');

    class Glace extends pdtPeris {
        public $parfum;
        public $tempConserv;

        function __construct()
        {
            $nb_args = func_num_args();
            $args = func_get_args();
            switch($nb_args) {
                case 7:
                    parent::__construct($args[0], $args[1], $args[2], $args[3], $args[4]);
                    $this->setParfum($args[5]);
                    $this->setTempConserv($args[6]);
                    break;
                case 8:
                    parent::__construct($args[0], $args[1], $args[2], $args[3], $args[4], $args[5]);
                    $this->setParfum($args[6]);
                    $this->setTempConserv($args[7]);
                    break;
            }
        }
        public function getParfum() {
            return $this->parfum;
        }
        public function setParfum($parfum) {
            $this->parfum = $parfum;
        }
        public function getTempConserv() {
            return $this->tempConserv;
        }
        public function setTempConserv($tempConserv) {
            $this->tempConserv = $tempConserv;
        }
        public function __toString()
        {
            return $this->__toStringProd().'<br/>Gout: '.$this->parfum.'<br/>Temperature de conservation: '.$this->tempConserv.'°C';
        }
    }
?>