<?php require './base/header.php'; 
    session_start();
	require_once('classes/require.php');
	require_once('classes/DTOPanier.php');
    require_once('classes/DTOProduit.php');
  
  if (!isset($_SESSION['panier'])) // Vérifie si erreur
  {
    echo '<p style="color:red;">Panier en erreur</p>'; 
  }
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
          foreach ($_SESSION['panier'] as $p) {
              $p = DTOProduit::selectById($p);?>
          <div class="card p-3 mb-3">
            <h5 class="card-title"><strong><?=$p->getLibelle()?></strong></h5>
            <p class="card-text"><small>Marque : <?=$p->getMarque()?></small></p>
            <p class="card-text"><small><span class="input-group-text"> Quantité <input type="number" id="qtePanier" size="5" min="0" max=<?=$p->getQteStock()?> /> <small class="text-muted">Disponible en stock : <?=$p->getQteStock()?></small></small></span><span class="input-group-text" id="inputGroup-sizing-sm"> Prix unitaire : <?=$p->getPrixUnit()?> €</span></p>
            <p class="text-end" ><small class="text-muted"><a href="#" class="btn btn-primary">Détail</a><span class="col align-self-end"><a href="#">Supprimer</a></span></small></p>
          </div>
          <?php }?>
        </div>

        <div class="col-md-4">
          <h2>Récapitulatif</h2>
          <div class="bg-white border p-3 sticky-top">
            <a href="#" class="btn btn-primary w-100">Valider</a>   

            <div class="d-flex justify-content-between mt-3">
              <p><strong>Total</strong></p>
            </div>
          </div>
        </div>
      </div>
    <div>

<?php require './base/footer.php'; ?>