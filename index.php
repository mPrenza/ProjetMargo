<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8" />
        <title>Margo</title>
    </head>
    
    <body>

        <header>
        	<h1 id="margo">Margo</h1> 
            <h2 id="enseignants">Espace Enseignants</h2>
            <nav id="navHeader"></nav>
        </header>

        <nav id="navGauche">
            <ul>
		<h4 id="titreMenuNav">Menu principal<h4>
                <li class="menuP" id="accueil"><a href="#">Accueil</a></li>
            </ul>
        </nav>
        <section>
            <article>                
                <h1 id="compte">Mon compte</h1>

                <form method="post" action="traitement.php" id="form1">
                    <label for="nom">Nom d'utilisateur</label>
                    <input type="text" name="nom" id="nom" />
                    </br>
                    <label for="prenom">Mot de passe</label>
                    <input type="password" name="prenom" id="prenom" />
                    </br>
                    <input type="submit" value="Connexion" id="btnEnvoyer" />
                </form>
            </article>
        </section>
        <footer></footer>



    </body>
</html>
</html>