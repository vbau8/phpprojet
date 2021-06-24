<?php
    require_once('classes/require.php');
   // if(isset($_GET['id'])) {
        $pr = DTOProduit::selectById(6);
        echo $pr->__toString();
    //}
?>