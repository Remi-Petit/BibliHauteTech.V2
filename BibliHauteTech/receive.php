<?php $page_title = "Espace commentaires"; require "head.php"; ?>

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