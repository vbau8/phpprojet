<?php
require_once("produit.php");
class CartePostale extends produit
{
    private $type; 
    
    public function __construct() 
    {
        $ctp = func_num_args();
        $args = func_get_args();
        switch($ctp)
        {
            case 5:
                parent::__construct($args[0], $args[1], $$args[2], $args[3]);
                $type = $args[4]; 
                break;
            case 6:
                parent::__construct($args[0], $args[1], $args[2], $args[3], $args[4]);
                $type = $args[5];
                break;
            default:
                break;
        }
        $this->setType($type); 
    }
 
    public function __toString()
    {
        return 'Infos carte postale : '.parent::InfosProduit().' type ='.$this->type;
    }

# Accesseurs
    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }
}
?>