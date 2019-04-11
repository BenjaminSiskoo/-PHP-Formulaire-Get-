    <html>
    <head>
    <title>Traitement du get depuis le formulaire</title>
    </head>
    <body>
    <?php


    // on teste la déclaration de nos variables
    if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['numero']) && isset($_GET['voie']) && isset($_GET['nomrue']) && isset($_GET['codepostal']) && isset($_GET['ville'])) {
    	// on affiche nos résultats
    	echo htmlentities ('Bonjour '.$_GET['nom'].' '.$_GET['prenom'].' vous habitez au '.$_GET['numero'] .$_GET['voie'] .$_GET['nomrue']. ' au '.$_GET['codepostal'] .$_GET['ville']);    	
    }
    ?>
    </body>
    </html>