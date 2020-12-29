<div id="conteneur3">
    <form method="post" action="receive.php">
            
        <fieldset>
                <legend>Espace commentaire</legend>     
            <label for="name">Nom :</label>
            <input type="text" id="nom" name="client_nom" autofocus required><br>

            <label for="name">Prénom :</label>
            <input type="text" id="prenom" name="client_prenom" autofocus required><br>

            <label for="mail">Couriel :</label>
            <input type="email" id="mail" name="client_mail" required><br>

            <label for="duration">Quel est votre soucis?</label>
            <select name="duration" required>
                <option value="opt1">La page web ne s'affiche pas correctement.</option>
                <option value="opt2">Il y a une erreur concercant les informations d'un/des livre(s).</option>
                <option value="opt3">Il manque des informations sur un/des livre(s).</option>
                <option value="opt4">Autre..</option>
            </select><br>
                    
        <label for="addreq">Demandes complémentaires</label><br>
        <textarea id="addreq" placeholder="Entrez ici vos demandes"></textarea><br>

        <button type="reset">Tout effacer</button>
        <button type="submit">Envoyer</button>
        </fieldset>

    </form>
</div>