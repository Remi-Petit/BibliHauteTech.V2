<?php  
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$client_nom = $_POST["nom"];
		$client_prenom = $_POST["prenom"];
		$mail = $_POST["client_mail"];
		$option3 = $_POST["client_pack"];
		$duration = $_POST["duration"];
		$option1 = $_POST["client_pack"];
		$option2 = $_POST["client_pack"];
        $option4 = $_POST["client_pack"];
		$demande_comp = $_POST["client_pack"];
		if(empty($client_nom)){
			echo "Vous 'n'avez pas renseigné votre nom.";
		}else{
			echo "Bonjour $name !";
		}
		if(empty($client_prenom)){
            echo"Vous n'avez pas rensigné votre type d'utilisateur.";
        }
        else{
            echo" Vous êtes dans la catégorie {$type}. ";
        }    
		if(empty($mail)){
            echo"Vous n'avez pas rensigné votre mail.";
        }
        else{
            echo" Votre adresse mail est {$mail}.";
        }
        if(empty($duration)){
            echo"Vous n'avez pas rensigné la durée de votre forfait.";
        }
        else{
            echo" Vous avez choisis une durée de {$duration} pour votre forfait.";
        }
        	if(empty($opt1)){
            	echo"Vous n'avez pas rensigné votre forfait.";
        	}
        	else{
            	echo" Vous avez choisis le forfait {$forfait}.";
        	}	
            if(empty($opt2)){
                echo"Vous n'avez pas rensigné votre forfait.";
            }
            else{
                echo" Vous avez choisis le forfait {$forfait}.";
            }   
            if(empty($opt3)){
                echo"Vous n'avez pas rensigné votre forfait.";
            }
            else{
                echo" Vous avez choisis le forfait {$forfait}.";
            }   
            if(empty($opt4)){
                echo"Vous n'avez pas rensigné votre forfait.";
            }
            else{
                echo" Vous avez choisis le forfait {$forfait}.";
            }   

    }
?>