<?php
    session_start();
    require_once('classes/require.php');
    require_once('classes/panierSession.php');
   if(isset($_GET['id'])) {
        $p = DTOProduit::selectById($_GET['id']);
    }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<body>
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading"><?php if (isset($p->marque)) echo ucwords($p->libelle).' de la marque '.ucwords($p->marque);
                else echo ucwords($p->libelle);?></h1>
			</div>
		</section>
		<div class="album py-5 text-center">
		    <h5><?php echo ucwords($p->libelle);?></h5>
            <h6><?php if (isset($p->marque)) echo ucwords($p->marque.'<br/>'.$p->prixUnit.'€<br/>');
            else echo ucwords('Marque distributeur<br/>'.$p->prixUnit.'€<br/>')?></h6>
                <form method="POST">
					<input type="number" class="form-control" name="qte" min="1" max=<?=$p->qteStock?> value="1"><br/>
			        <button action="#" type="submit" class="card-link btn btn-primary" name="id" value="<?php echo $p->refProd?>">Ajouter au panier</button><br/>
				</form>
			    <a href="<?php echo 'index.php';?>" class="card-link btn btn-primary">Retourner a l'accueil</a>
		</div>
	</body>
</html>