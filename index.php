<!DOCTYPE html>
<html>
<head>
	<title>Formulaire avec Get</title>
</head>
<body>
	<form action="traitement.php" method="get" >
		Nom :<input type="text" name="nom" required />
		Prénom :<input type="text" name="prenom" required />
		Numéro de la rue :<input type="text" name="numero" />
			<SELECT name="voie" size="1">
				<OPTION>rue
				<OPTION>avenue
				<OPTION>chemin
			</SELECT>

		Nom de la rue :<input type="text" name="nomrue" required />
		Code Postal :<input type="text" name="codepostal" required />
		Ville :<input type="text" name="ville" required/>

		<input type="submit" value="Envoyer le formulaire">
	</form>
</body>
</html>