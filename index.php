<?php
/*	session_start();
	require_once("classes/produit");
	$produit = new Produit();
	$produits = $produits->showAll();*/
	$x = 10;
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<body>
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">Ma belle boutique</h1>
				<p class="lead text-muted">Ma belle boutique propose à la vente différents articles (des cartes postales, des stylos mais aussi des produits régionaux : des pains et des glaces).</p>
			</div>
		</section>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">
				<?php foreach ($produits as $p) {?>
					<div class="col-md-4">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title"><?php $p->marque?></h5>
								<p class="card-text"><?php $p->libelle?></p>
								<div class="row">
									<a href="#" class="btn btn-primary">Ajouter au panier</a>
									<a href="<?php echo 'produit.php/id='.$p->id;?>" class="btn btn-primary">Voir</a>
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