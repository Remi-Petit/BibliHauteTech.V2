<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/BibliHauteTech/style.css">
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
        }
        else{
            echo "Bonjour {$nom} ";
        }

        if(empty($prenom)){
            echo "Vous n'avez pas renseigné votre nom.";
        }
        else{
            echo "{$prenom} ! <br>";
        }


        if(empty($option1)){
            echo "<ul><li>Vous n'avez pas rensigné votre probleme.</li></ul>";
        }
        else{
            echo "<ul><li>Votre probleme est : '{$option1}'.</li></ul>";
        }


        if(empty($demandes)){
            echo "<ul><li>Vous n'avez pas rensigné votre demandes.</li></ul>";
        }
        else{
            echo "<ul><li>Votre demande est : '{$demandes}'.</li></ul>";
        }

}
?>


</div>


</body>
</html>