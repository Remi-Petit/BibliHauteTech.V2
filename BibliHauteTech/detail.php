<?php require "head.php"; ?>

	<?php

	require "config.php" 

	$link = mysqli_connect("echo $CONFIG['dbhost']", "echo $CONFIG['dbuser']", "echo $CONFIG['dbpwd']", "echo $CONFIG['dbname']");
		if(!$link){
			echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
    		echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
    		echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
    		exit;
		}


		$req = "SELECT *, ge.libelle AS genre, la.libelle AS langue, ed.libelle AS editeur FROM livre li JOIN auteur au ON li.isbn = idLivre JOIN personne pe ON au.idPersonne = pe.id JOIN editeur ed ON li.editeur = ed.id JOIN role ro ON au.idRole = ro.id JOIN genre ge ON li.genre = ge.id JOIN langue la ON li.langue = la.id WHERE isbn =  ". $_GET['isbn'] . ";";
		$result = mysqli_query($link,$req);
		var_dump($result);

		if($result){
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			
			echo 
			"<ul>
    			<li>
			<h2> ". $row["titre"] ."</h2>
    			</li>
			</ul>

			<div class='grid0'>
			    <img src='img/" . $row["isbn"] . ".jpg'
			        alt='Le livre:" . $row["titre"] . "'
			        width='350'
			        height='400'>
			        
			        <div class='grid'>
			            <div class='element'>genre</div>
			            <div class='element'>" . $row["genre"] . "</div>

			            <div class='element'>isbn</div>
			            <div class='element'>" . $row["isbn"] ."</div>

			            <div class='element'>prénom, nom de l'écrivain</div>
			            <div class='element'>" . $row["prenom"] . " " . $row["nom"] . "</div>

			            <div class='element'>éditeur</div>
			            <div class='element'>" . $row["editeur"] . "</div>

			            <div class='element'>année de sortie</div>
			            <div class='element'><time datetime='" . $row["annee"] . "'>" . $row["annee"] . "</time></div>
			        </div>
			</div>";
			
			}
				//mysqli_fetch-array donc mysqli_free_result
			mysqli_free_result($result);		
		}
			// connect donc close
		mysqli_close($link);

		?>

</div>

<?php require "formulaire.php"; ?>

		<div id="conteneur2">
			<footer> 
				<p>  
					<span>©Copyright <time datetime="2020-11-22">2020</time> par Grégoire et Rémi:p </span> 
				</p> 
			</footer> 
		</div>
	</body> 
</html>

