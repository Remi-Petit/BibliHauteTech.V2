<div id="conteneur3">
    <form method="post" action="/BibliHauteTech/receive.php">
            
        <fieldset>
                <legend>Espace commentaire</legend>     
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" autofocus required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" autofocus required><br>

            <label for="mail">Couriel :</label>
            <input type="email" id="mail" name="mail" required><br>

            <label for="probleme">Quel est votre soucis?</label>
            <select name="probleme" required>
                <option value="option1">La page web ne s'affiche pas correctement.</option>
                <option value="option2">Il y a une erreur concercant les informations d'un/des livre(s).</option>
                <option value="option3">Il manque des informations sur un/des livre(s).</option>
                <option value="option4" selected>Autre..</option>
            </select><br>
                    
        <label for="demandes">Demandes complémentaires</label><br>
        <textarea id="demandes" name="demandes" placeholder="Entrez ici vos demandes"></textarea><br>
        <button type="reset">Tout effacer</button>
        <button type="submit">Envoyer</button>
        </fieldset>
    </form>
</div>