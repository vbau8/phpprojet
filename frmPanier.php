<?php require './base/header.php'; 
	require_once('classes/require.php');
	require_once('classes/DTOPanier.php');
  
  if (isset($_SESSION["panier"])) // Vérifie si erreur
  {
      echo '<p style="color:red;">Panier en erreur</p>'; 
  }
  $_SESSION["panier"] = 1;
  $panier = DTOPanier::selectById($_SESSION["panier"]);
?>

    <div class="section">
    </div>
    <div class="container py-3">
      <div class="row">
        <div class="col-md-8">
          <h2>Contenu du panier</h2>
          <!-- turn this into an alert (warning) -->
          <div class="alert alert-warning" role="alert">
            Vous devez valider votre panier pour finaliser votre commande.
          </div>
          <?php 
          require_once("classes/DTOProduit.php");   
          $produits = DTOProduit::selectAll();
          //$produits = $Panier->getLignes();
          foreach ($produits as $p) {?>
          <div class="card p-3 mb-3">
            <p class=""><strong><?=$p->getLibelle()?></strong></p>
            <p class=""><small>Marque : <?=$p->getMarque()?></small></p>
            <p class=""><small><span class="input-group-text"> Quantité <input type="number" id="qtePanier" size="5" min="0" max=<?=$p->getQteStock()?> />  Disponible en stock : <?=$p->getQteStock()?></small></span><span class="input-group-text" id="inputGroup-sizing-sm"> Prix unitaire : <?=$p->getPrixUnit()?> €</span></p>
            <p class="" ><small><span class="col align-self-end"><a>Supprimer</a></span></small></p>
          </div>
          <?php }?>
        </div>

        <div class="col-md-4">
          <h2>Récapitulatif</h2>
          <!-- checkout -->
          <div class="bg-white border p-3 sticky-top">
            <a href="#" class="btn btn-primary w-100">Valider</a>   

            <div class="d-flex justify-content-between mt-3">
              <p><strong>Total</strong></p>
              <p><strong><?=$panier->getMontant()?> €</strong></p>
            </div>
          </div>
          <!-- /checkout -->
        </div>
      </div>
    <div>

<?php require './base/footer.php'; ?>