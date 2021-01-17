<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php require "config.php" ?>
    <link rel="stylesheet" href="<?php echo $CONFIG['root_path'] ?>style10.css">
    <title> BibliHauteTech </title>
    <link rel="shortcut icon" href="<?php echo $CONFIG['root_path'] ?>img/Logo.ico" type="<?php echo $CONFIG['root_path'] ?>img/x-icon"/>
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

            if(isset($_POST)&& !empty($_POST['nom'])&& !empty($_POST['prenom'])&& !empty($_POST['mail'])&& !empty($_POST['probleme'])){
            extract($_POST);
            $destinataire='remi.petit93370@gmail.com';
            $expediteur=$nom.' <'.$mail.'>';
            $objet=$option1;
            $message=$demandes;
            $email=email($destinataire,$expediteur,$demandes,.' : BibliHauteTech :' . $option1 . '');
            if($mail) echo 'Email envoyé avec succés !!';
            else echo'Echec envoi ';
        }else echo"Formulaire non soumis ou des champs vides";
}
?>


</div>


</body>
</html>