<?php
    session_start();
    if (!$_SESSION['panier']) $_SESSION['panier'] = array();
    if (!$_SESSION['qte']) $_SESSION['qte'] = array();
    if (isset($_POST['id'])) {
        if(!$_POST['qte']) $_POST['qte'] = 1;
        for($x = 0; $_SESSION['panier'][$x]; $x++) {
            if ($_POST['id'] == $_SESSION['panier'][$x]) {
                $_SESSION['qte'][$x] += $_POST['qte'];
                $y = 1;
            }
        }
        if ($y !== 1) {
            array_push($_SESSION['panier'] ,$_POST['id']);
            array_push($_SESSION['qte'], $_POST['qte']);
        }
        $y = 0;
    }
?>