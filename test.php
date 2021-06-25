<?php
<<<<<<< HEAD:test.php
	require_once("classes/require.php");
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
    }/*
	require_once("classes/DTOStylo.php");
	$unStylo = DTOStylo::selectById(3);
    echo $unStylo.'<br/>';
    $lesStylos = DTOStylo::selectAll();
    foreach($lesStylos as $stylo) {
        echo $stylo."<br/>";
    }*/
	/*require_once("classes/DTOCartePostale.php");
	$uneCarte = DTOCartePostale::selectById(4);
    echo $uneCarte.'<br/>';
    $lesCartes = DTOCartePostale::selectAll();
    foreach($lesCartes as $carte) {
        echo $carte."<br/>";
    }*//*
	require_once("classes/DTOProduit.php");
	//$unProduit = DTOProduit::selectById(4);
    //echo $unProduit->InfosProduit().'<br/>';
    $lesProduits = DTOProduit::selectAll();
    foreach($lesProduits as $produit) {
        echo $produit->InfosProduit()."<br/>";
    }*/
	require_once("classes/DTOPanier.php");
	$unMontant=DTOPanier::calculeMontant(1);
	var_dump($unMontant);
	
	require_once("classes/ligne.php");
	$ligne= new Ligne(1,1,2,5);
	echo $ligne;
	 
	/*
	$unPanier = new Panier('Hugo', 120, 1);
	echo $unPanier->getInfos();
	$x = 10;*/
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

=======
	session_start();
	require_once('classes/require.php');
	$produits = DTOProduit::selectAll();
	if (isset($_POST['id'])) {
        array_push($_SESSION['panier'] ,$_POST['id']);
    }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
>>>>>>> 72ed590760cae2b9440d07599afd7601d5da568f:index.php
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
<<<<<<< HEAD:test.php
				<?php foreach ($lesProduits as $p) {?>
					<div class="col-md-4">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title"><?php $p->marque?></h5>
								<p class="card-text"><?php $p->libelle?></p>
								<div class="row">
									<a href="#" class="btn btn-primary">Ajouter au panier</a>
									<a href="<?php echo 'produit.php/id='.$p->id;?>" class="btn btn-primary">Voir</a>
=======
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
>>>>>>> 72ed590760cae2b9440d07599afd7601d5da568f:index.php
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