<?php
    session_start();
    if (!$_SESSION['panier']) $_SESSION['panier'] = array();
 	if (isset($_POST['id'])) {
        for($x = 0; $_SESSION['panier'][$x]; $x++) {
            if ($_POST['id'] == $_SESSION['panier'][$x]) {
                $y = 1;
            }
        }
        if ($y !== 1) {
            array_push($_SESSION['panier'] ,$_POST['id']);
        }
        $y = 0;
    }
?>