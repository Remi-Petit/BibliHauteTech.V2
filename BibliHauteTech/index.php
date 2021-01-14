<?php require "head.php"; ?>



<p>Voici une bibliothèque improvisée. 

	<br> 
	
Groupe: <abbr title="Doleac Grégoire">D.Grégoire</abbr> ainsi que <abbr title="Petit Rémi">P.Rémi</abbr> </p>

<hr>

	<?php
		$link = mysqli_connect("localhost", "root", "", "bibliotheque");
		if(!$link){
			echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
    		echo "Erreur de débogage : " . mysqli_connect_errno() . PHP_EOL;
    		echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    		exit;
		}


		$req = "SELECT * FROM livre li JOIN auteur au ON li.isbn = idLivre JOIN personne  pe ON au.idPersonne = pe.id JOIN editeur ed ON li.editeur = ed.id JOIN role  ro ON au.idRole = ro.id JOIN genre ge ON li.genre = ge.id JOIN langue la ON li.langue = la.id;";
		$result = mysqli_query($link,$req);
		var_dump($result);

		if($result){
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

			//echo 	'<a href="' . $row["isbn"] . '.php" title="Dragon ball">
			echo 	'<a href="/BibliHauteTech/livres/' . $row["isbn"] . '" title="' . $row["titre"] . '">
						<img src="img/' . $row["isbn"] . '.jpg"
						alt="' . $row["titre"] . '"
						width="200"
						height="250">
					</a>';

			}
				//mysqli_fetch-array donc mysqli_free_result
			mysqli_free_result($result);		
		}
			// connect donc close
		mysqli_close($link);
		
		?>

</div>

<?php require "formulaire.php"; ?>

<?php require "footer.php"; ?>