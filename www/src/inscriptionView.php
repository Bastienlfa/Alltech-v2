<form action="inscriptionModel.php" method="post" onsubmit="return (valider())" name="register">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name"required>
        </div>
        <div>
            <label for="firstName">Prenom :</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        <div>
            <label for="busi">Societe :</label>
            <input type="text" id="busi" name="busi"required>
        </div>
        <div>
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse"required>
        </div>
        <div>
            <label for="mail">Mail :</label>
            <input type="email" id="mail" name="mail"required>
        </div>
        <div>
            <label for="langue">Votre pays :</label>
                <select name="pays" id="pays">
                        <option value="france">France</option>
                        <option value="allemagne">Allemagne</option>
                        <option value="belgique">Belgique</option>
                        <option value="espagne">Espagne</option>
                        <option value="italie">Italie</option>
                               
                </select>
        </div>
        <div>
            <label for="mdp">mot de passe :</label>
            <input type="password" id="mdp" name="mdp"required>
        </div>
        <div>
            <label for="cmdp">confirmation mot de passe :</label>
            <input type="password" id="cmdp" name="cmdp"required>
        </div>
        </div>
        <div class="button">
            <button type="submit" value="add">S'inscrire</button>
        </div>

        <script type="text/javascript" src="validation.js"></script>