<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
		<title> Facture - N° </title>
		<link rel="stylesheet" href="facture.css"/>
</head>
		<header>
			<div id="adresse">
			<img src="public/img/logo/logo_fond_vide.png" height="100" alt="pizza lab">
			<p>1 bis Rue Jangot<br/>69007 LYON<br />FRANCE</p>
			</div>
				<div id="document">
				<p><center><strong>FACTURE</strong></center></p>
				</div>
					<div id="Date">
					<?php
					$numerofacture = mt_rand(16.000,16.999);
					echo("Numéro de facture".$numerofacture."");
					?>
                    <br>
					<?php
					$jour = date("d/m/Y");
					echo("Date d'établissement".$jour."");
					?>
                    <br>
					</div>
				<div id="clients">
				<?php
				/* Tableau assiciatif dans lequel je stocke les clients */
				$entete = array("Nom","Prénom","Adresse","CP","Ville");
 
				$clients = array(
				array(
				"nom" => "DO",
				"prenom" => "Dominique",
				"Adresse" => "20 impasse Beethoven",
				"CP" => "75011",
				"Ville" =>"Paris"
				),
				array(
				"nom" => "RE",
				"prenom" => "Remi",
				"Adresse" => "1 allée des Musiciens",
				"CP" => "92220",
				"Ville" =>"NEUILY SUR SEINE"
				),
				array(
				"nom" => "MI",
				"prenom" => "Michel",
				"Adresse" => "15 impasse Mozart",
				"CP" => "91000",
				"Ville" =>"EVRY"
				),
 
				array(
				"nom" => "FA",
				"prenom" => "Fabrice",
				"Adresse" => "3 rue du Paradis",
				"CP" => "75009",
				"Ville" => "Paris"
				),
 
				array(
				"nom" => "SOL",
				"prenom" => "Solène",
				"Adresse" => "45 boulevard des danseurs",
				"CP" => "94140",
				"Ville" => "ALFORTVILLE"
				),
				);
				?>
				</div>
		</header>
					<body>
						<?php
						/* Tableau où je stocke les articles */
						$entete = array("Code article","Désignation", "Quantité", "Prix unitaire HT", "Prix total HT");
						$article = array(
						array(
						"Code article" => "30797",
						"Designation" => "Basse - Eagletone Sun State Bass P Sunburt",
						"Quantite" => "",
						"Prix unitaire HT" => "129€",
						"Prix total HT" => ""
                        ),
 
						array(
						"Code article" => "20717",
						"Designation" => "Basse - Ibanez SR 500BM Acajou",
						"Quantite" => "",
						"Prix unitaire HT" => "629€",
						"Prix total HT" => ""
							),
 
						array(
						"Code article" => "213659",
						"Designation" => "Piano - Bird Fullpack XP1",
						"Quantite" => "",
						"Prix unitaire HT" => "329€",
						"Prix total HT" => ""
							),
 
						array(
						"Code article" => "213888",
						"Designation" => "Piano - Roland F20DW",
						"Quantite" => "",
						"Prix unitaire HT" => "599€",
						"Prix total HT" => ""
						),
 
						array(
						"Code article" => "184171",
						"Designation" => "Batterie - Roland TD1K V-Drums",
						"Quantite" => "",
						"Prix unitaire HT" => "449€",
						"Prix total HT" => ""
						),
 
						array(
						"Code article" => "21455",
						"Designation" => "Zildjian - Modulo electro acoustique",
						"Quantite" => "",
						"Prix unitaire HT" => "399€",
						"Prix total HT" => ""
						),
 
						array(
						"Code article" => "81494",
						"Designation" => "Yamaha - Set Violoncelle",
						"Quantite" => "",
						"Prix unitaire HT" => "1099€",
						"Prix total HT" => ""
						),
 
						array(
						"Code article" => "183724",
						"Designation" => "BAM - Housse avion violoncelle - Noir",
						"Quantite" => "",
						"Prix unitaire HT" => "490€",
						"Prix total HT" => ""
						),
 
						array(
						"Code article" => "190221",
						"Designation" => "Nuark - Mix Track pro 3",
						"Quantite" => "",
						"Prix unitaire HT" => "329€",
						"Prix total HT" => ""
						 ),
 
						array(
						"Code article" => "162850",
						"Designation" => "Native Instruments - Tracktor X1 NKZ",
						"Quantite" => "",
						"Prix unitaire HT" => "559€",
						"Prix total HT" => ""
						),
						);
						?>
					</body>
						<footer>
							<div id="mentions">
							<p>
							Mentions légales<br/> Pas d'escompte pour paiement anticipé.<br /> Conformément à la loi 92.1142, en cas de retard de paiement, toute somme, y compris l'acompte, non payée à sa date d'éxigibilité produira de plein droit des intérêts de retard équivalents au triple du taux d'intérêt légal de l'année en cours ainsi que le paiement d'une somme forfaitaire de quarante (40) euros due au titre des frais de recouvrement conformément au décret N°2012-1115.
							</p>
							</div>
							<div id="coordonnées">
							<p><em>Mode de paiement : virement bancaire (frais bancaires à la charge du client). <br /> SOCIETE D'EPARGNE Ile de France - 19 rue des Artistes - 75001 PARIS<br /> BIC : CEPAFRPP000 <br /> IBAN : FR76 0000 0000 0000 0000 0000 0000 </em></p>
							</div>
						</footer>
</html>