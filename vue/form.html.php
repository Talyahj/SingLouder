<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Formulaire ⎸ SingLouder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../style/stylef.css" type="text/css" rel="stylesheet">
</head>
<body>

    <header>
        <div class="container">
            <div class="navbar-top">
                <div class="search-bar">
                    <input type="text" placeholder="Rechercher...">
                </div>
                <div class="logo">
                    <a href="../vue/artistes.html.php"><img src="../img/logo.png" alt="" width="200px"></a> 
                </div>
                <div class="icons">
                    <a href="../vue/vueInscription.php"><img src="../img/inscription.webp" alt="inscription" width="30px"></a>
                    <a href="../vue/vueInscription.php"><img src="../img/heart.svg" alt="like" width="30px"></a>
                </div>

            </div>
        </div>
         
        <div class="main-content">
        <nav class="navbar navbar-expand-sm bg-bisque justify-content-center sticky-top">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../vue/artistes.html.php">Artistes</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="../vue/albums.html.php">Albums</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../vue/form.html.php">Formulaire</a>
              </li>
            </ul>
          </nav>
        <div class="content">
            <h1>FORMULAIRE</h1>
        </div>
       </div>
    <main>
        <form>
              <label for="prenom">Prénom:</label>
              <input type="text" id="prenom" name="prenom"><br>
      
              <label for="email">Adresse Email:</label>
              <input type="email" id="email" name="email"  autocomplete="mail" required><br>
      
              <label for="artiste_favoris">Artiste favoris</label>
              <input type="text" id="artiste_favoris" name="artiste_favoris"><br>
      
              <label for="album_favoris">Album Favoris:</label>
              <select id="album_favoris" name="album_favoris">
                  <option value="nakamura">Nakamura</option>
                  <option value="melo">Mélo</option>
                  <option value="sos">SOS</option>
                  <option value="purpose">Purpose</option>
              </select>
      <br><br><br>
          
       <label for="commentaire">Commente les albums que tu aimerais voir bientôt sur notre  site :</label>
              <textarea id="commentaire" name="commentaire" rows="4" cols="50"></textarea><br>
      
              <button id="mon-bouton">Envoyer la réponse</button>
              <div id="mon-alerte" role="alert"></div>
              <script type="text/template" id="contenu-alerte">
                  <p>Informations manquantes</p>
              </script>
          <script>
              let monBouton = document.querySelector('#mon-bouton');
              monBouton.addEventListener('click', afficherAlerte);
      
              function afficherAlerte() {
                  let monAlerte = document.querySelector('#mon-alerte');
                  let contenuAlerte = document.querySelector('#contenu-alerte').innerHTML;
      
                  monAlerte.innerHTML = contenuAlerte;
              } 
          </script></form>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li><a href="../vue/mentions.html.php">Mentions Légales</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body> 
</html>