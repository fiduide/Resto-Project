<!DOCTYPE html>
	<head>
		<meta charset="utf-8"/>
			<title> Facture </title>
			<link rel="stylesheet" href="facture.css"/>
		</head>	
	<body>
			<div id="adresse">
			<img src="public/img/logo/logo_fond_vide.png" height="100" alt="pizza lab">
			<p>1 bis Rue Jangot<br/>69007 LYON<br />FRANCE</p>
		</div>
		<div id="document">
			<p style="text-align:center"><strong>FACTURE</strong></p>
		</div>
		<div id="Date">
				<?php
				$num = mt_rand(16.000,16.999);
				echo("Numéro de facture : ".$num."");
				?>
            <br>
				<?php
				$date = date("d/m/Y");
				echo("Date d'établissement".$date."");
				?>
            <br>
		</div>
		<div id="clients">
			
		</div>
		<hr>
		<hr>
	</body>
	<footer>
		<div id="mentions">
			<p>
			Mentions légales<br/> Pas d'escompte pour paiement anticipé.<br /> Conformément à la loi 92.1142, en cas de retard de paiement, toute somme, y compris l'acompte, non payée à sa date d'éxigibilité produira de plein droit des intérêts de retard équivalents au triple du taux d'intérêt légal de l'année en cours ainsi que le paiement d'une somme forfaitaire de quarante (40) euros due au titre des frais de recouvrement conformément au décret N°2012-1115.
			</p>
		</div>
		<div id="coordonnées">
			<p><em>Mode de paiement : Paiement comptant par carte bancaire.</em></p>
		</div>
	</footer>
</html>