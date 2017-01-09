<!DOCTYPE html>
<html lang='fr'>
	<head>
			<meta charset="utf-8"/>
			<title>Site PPP - TEST !</title>
			<link rel="Stylesheet" href="accueil.css"/>
	</head>
	<body>
		<header>
			<h1> Entreprises et organisations </h1>
		</header>

		<nav>
			<ul>
								<li><a href=accueil.html><p>Coucou !</p></a></li>
        				<li><a href=spe.html><p>Spécialisée et non spécialisée</p></a></li>
        				<li><a href=privee.html><p>Privée et publique</p></a></li>
        				<li><a href=grande.html><p>Grande et petite</p></a></li>
        				<li><a id="active" href=test.html><p>TEST !</p></a></li>
        				<li><a href=annexe.html><p>Annexe</p></a></li>
        				<li><a href=apropos.html><p>A propos</p></a></li>
        			</ul>
		</nav>

		<h1>TEST !</h1>

    <?php

    $spe = 0;
    $non_spe = 0;

    $reponses = array ($_POST["Q1"], $_POST["Q2"], $_POST["Q3"], $_POST["Q4"], $_POST["Q5"], $_POST["Q6"], $_POST["Q7"]);

    foreach ($reponses as $repX)
    {
      switch ($repX)
      {
        case "spe":
        $spe = $spe + 1;
        break;
        case "non_spe":
        $non_spe = $non_spe + 1;
        break;
      }
    }

    if ($spe>$non_spe)
    {
      $res1 = "Entreprise spécialisée";
    }
    else
    {
      $res1 = "Entreprise non spécialisée";
    }

    ?>

    <h2>Résultats !</h2>

    <article>
      <?php
      echo '<p>'.$res1.'</p>';
      ?>
    </article>

    <footer>
      <p>IUT Orléans - Département Informatique - Adresse : 3 Rue d'Amboise, 45100 Orléans</p>
      <img src='http://celene.univ-orleans.fr/pluginfile.php/1/theme_celene/iconcat10/1478685570/IUT%20Orleans.jpg'>
    </footer>
  </body>
</html>
