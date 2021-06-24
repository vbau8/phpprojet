<?php
require_once('classes/pain.php');
require_once('classes/glace.php');
require_once('classes/auteur.php');
require_once('classes/stylo.php');
require_once('classes/cartepostale.php');
require_once('classes/panier.php');
require_once('classes/produit.php');
require_once('classes/DTOProduit.php');
$unProduit = DTOProduit::selectById(4);
echo $unProduit->InfosProduit().'<br/>';
$lesProduits = DTOProduit::selectAll();
foreach($lesProduits as $produit) {
	echo $produit->InfosProduit().'<br/>';
}
	/*require_once('classes/DTOProduit.php');
	$produits = DTOProduit::selectAll();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

	<body>
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">Ma belle boutique</h1>
				<p class="lead text-muted">Ma belle boutique propose à la vente différents articles (des cartes postales, des stylos mais aussi des produits régionaux : des pains et des glaces).</p>
			</div>
		</section>
		<div class="album py-5">
			<div class="container">
				<div class="row">
				<?php foreach ($produits as $p) {?>
					<div class="col-md-3 mt[1, 3]">
						<div class="card text-center" style="width: 18rem; height: 9rem">
							<div class="card-body">
								<h5 class="card-title"><?php echo ucwords($p->libelle)?></h5>
								<?php if (isset($p->marque)) {?><p class="card-subtitle"><?php echo $p->marque?></p><?php }?>
								<?php if (!isset($p->marque)) {?><p class="card-subtitle">Sans marque</p><?php }?>
								<div class="card-footer row">
									<a href="#" class="card-link btn btn-primary">Ajouter au panier</a>
									<a href="<?php echo 'produit.php/refProd='.$p->refProd;?>" class="card-link btn btn-primary">Voir</a>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</body>
</html>*/?>