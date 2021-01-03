
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/BibliHauteTech/style2.css">
    <title> BibliHauteTech </title>
    <link rel="shortcut icon" href="/BibliHauteTech/img/Logo.ico" type="/BibliHauteTech/img/x-icon"/>
</head> 
    
<body>

<h1> Formulaire </h1>


<div id="conteneur1">
<?php  
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $option1 = $_POST["probleme"];
        $demandes = $_POST["demandes"];


        if(empty($nom)){
            echo "Vous n'avez pas renseigné votre nom.";
        }else{
            echo "Bonjour {$nom} {$prenom} !";
        }
        if(empty($mail)){
            echo"Vous n'avez pas rensigné votre mail.";
        }
        else{
            echo" Votre adresse mail est {$mail}.";
        }
        if(empty($option1)){
            echo"Vous n'avez pas rensigné votre probleme.";
        }
        else{
            echo" Votre probleme est {$option1}.";
        }
        if(empty($demandes)){
            echo"Vous n'avez pas rensigné votre demandes.";
        }
        else{
            echo" Votre demande est {$demande}.";
        }

}
?>

</div>


</body>
</html>