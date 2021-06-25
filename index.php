<?php
	session_start();
	require_once('classes/require.php');
	require_once('classes/panierSession.php');
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
		<div class="text-center">
			<a href="frmPanier.php" class="btn btn-primary">Aller au panier</a>
		</div>
		<div class="album py-5">
			<div class="container">
				<div class="row">
				<?php foreach ($produits as $p) {?>
					<div class="col-md-3 mt[1, 3]">
						<div class="card text-center" style="width: 18rem; height: 12rem">
							<div class="card-body">
								<h5 class="card-title"><?php echo ucwords($p->libelle)?></h5>
								<?php if (isset($p->marque)) {?><p class="card-subtitle"><?php echo $p->marque?></p><?php }?>
								<?php if (!isset($p->marque)) {?><p class="card-subtitle">Sans marque</p><?php }?>
								<div class="card-footer">
									<form method="POST">
									<button action="#" type="submit" class="card-link btn btn-primary" name="id" value="<?php echo $p->refProd?>">Ajouter au panier</button><br/>
									</form>
									<a href="<?php echo 'refprod.php?id='.$p->refProd;?>" class="card-link btn btn-primary">Voir</a>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</body>
</html>