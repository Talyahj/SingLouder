<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Artistes ⎸ SingLouder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../style/styleart.css" type="text/css" rel="stylesheet">
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
            <h1>ARTISTES</h1>
        </div>
       </div>
    </header>
    <main>
    <div class="whole">
        <div class="artiste" value="4">
            <h4>Aya Nakamura</h4>
            <img src="../img/aya.jpeg" width="240px"/><p>Aya Nakamura de son vrai nom Aya Danioko, est une auteure-compositrice-interprète franco-malienne, née le 10 mai 1995 à Bamako.</p>
        </div>

        <div class="artiste" value="4">
            <h4>Justin Bierber</h4>
            <img src="../img/justin.png" width="240px"/> <p>Justin Bieber né le 1ᵉʳ mars 1994 à London, est un auteur-compositeur-interprète, danseur, musicien et acteur canadien. </p>
         </div>

        <div class="artiste" value="4">
            <h4>SZA</h4>
            <img src="../img/sza.jpeg" width="240px"/> <p>SZA, de son vrai nom Solána Imani Rowe, née le 8 novembre 1989 à Saint-Louis, dans l'État du Missouri, est une auteure-compositrice-interprète de R&B américaine.  </p>
        </div>

        <div class="artiste" value="4">
            <h4>Tiakola</h4>
            <img src="../img/tiakola.png" width="240px"/> <p>Tiakola, de son vrai nom William Mundala, né le 4 décembre 1999 à Bondy, est un rappeur et chanteur français.</p>
        </div>
    </div>
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