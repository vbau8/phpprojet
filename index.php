<?php
	require_once('classes/pain.php');
	require_once('classes/glace.php');
	require_once("classes/auteur.php");
	require_once('classes/stylo.php');
	require_once("classes/cartepostale.php");
	/*$g = new Glace('Hagen Daas', 'Cookie Dough', 80, 5, '10/01/2001', 'Cookie', 0);
	$p = new Pain(50, 'Boule Ange Riz', 'Pain au cereales', 50, 4, 1);
	echo $p;
	echo $g.'<br/>';
	$stylo = new Stylo('libellé', 'marque', 5, 10, 'Bleu', 'Epais');
    echo $stylo.'<br/>';
	$stylo1 = new Stylo('STY1','libellé', 'marque1',2, 20, 'Rouge', 'Epais');
    echo $stylo1.'<br/>';
	$stylo3 = new Stylo('libellé2', 'marque2', 1, 7, 'Noir', 'Fin');
    echo $stylo3.'<br/>';
	$cartepostale1 = new CartePostale('t','carte', 'bloum','2.5', 5, 'Fête');
    echo $cartepostale1."<br/>";
	$auteur = new Auteur('pre','nom');
    echo $auteur;*/
	//session_start();
	/*require_once("classes/produit");
	$produit = new Produit();
	$produits = $produits->selectAll();
	require_once("classes/DTOAuteur.php");
	$unAuteur = DTOAuteur::selectById(2);
    echo $unAuteur.'<br/>';
    $lesAuteurs = DTOAuteur::selectAll();
    foreach($lesAuteurs as $auteur) {
        echo $auteur."<br/>";
    }*/
	require_once("classes/DTOStylo.php");
	$unStylo = DTOStylo::selectById(3);
    echo $unStylo.'<br/>';
    $lesStylos = DTOStylo::selectAll();
	//var_dump($lesCartes);
    foreach($lesStylos as $stylo) {
        echo $stylo."<br/>";
    }
	require_once("classes/DTOCartePostale.php");
	$uneCarte = DTOCartePostale::selectById(4);
    echo $uneCarte.'<br/>';
    $lesCartes = DTOCartePostale::selectAll();
	//var_dump($lesCartes);
    foreach($lesCartes as $carte) {
        echo $carte."<br/>";
    }
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