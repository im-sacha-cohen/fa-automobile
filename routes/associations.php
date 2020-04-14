<?php
  session_start();

  if ($_SESSION['connected']) {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
      <head>
        <meta charset="utf-8">

        <!-- Fichier CSS téléchargé depuis le CDN de Bootstrap pour optimiser le chargement de la page -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Scripts JavaScript pour Bootstrap provenant du CDN -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- JQuery téléchargé depuis le CDN de Google pour optimiser le chargement de la page -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no"/>

        <!-- Fichier CSS Principal du site -->
        <link rel="stylesheet" href="public\css\style.css">
        <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <title>CESI</title>
      </head>

      <body>
        <header class="Banner">
          <nav id="navbar-example2" class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="accueil.php">
                <img src="public\images\logo-CESI.png" width="230" height="70" class="d-inline-block align-top" alt=""> 
              </a>
              <ul class="nav nav-pills">
                <li class="nav-item" href="panier.php">
                    <img src="public\images\panier.png" width="55" height="55" class="d-inline-block align-top" alt="">
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="profil.php">
                      <img src="public\images\profil.png" width="55" height="55" class="d-inline-block align-top" alt=""></a>
                </li>
                <li class="nav-item">
                    <p><?php echo $_SESSION['prenom'];?></p>
                </li>
                <?php
            if ($_SESSION['connected']) {
              ?>
              <form action="controler.php" method="post">
                <input type="submit" class="btn btn-dark" name="btn-deconnect" value="Se déconnecter">
              </form>
              <?php
            } else {
              ?>
              <a href="connexion.php">
                <button class="btn btn-dark">Se connecter</button>
              </a>
              <?php
            }
          ?>
              </ul>
            </nav>

          </header>

          
    

    <div id="wrapper" class="active">  
        
        <div id="sidebar-wrapper">
            <ul id="sidebar_menu" class="sidebar-nav">
              <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="fa fa-align-justify"></span></a></li>
            </ul>
            <ul class="sidebar-nav" id="sidebar">
              <li class="nav-item">
                <a class="nav-link" href="accueil.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="boutique.php">Boutique</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bde.php">BDE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="events.php">Evenements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="associations.php">Associations</a>
              </li>

            </ul>
          </div>

          <div class="card-deck">
      <div class="card">
        <img src="public\images\club_basketball.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CESI Basketball</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="public\images\club_football.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CESI Football</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="public\images\club_gaming.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CESI Gaming</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="card-deck">
      <div class="card">
        <img src="public\images\club_musique.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CESI Musique</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="public\images\club_oenologie.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CESI Alcoolo</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="public\images\club_voile.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CESI Voile</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="card-deck">
      <div class="card">
        <img src="public\images\club_workout.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CESI Workout</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="public\images\club_cinema.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CESI Cinéma</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="public\images\club_palace.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CESI Palace</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    </div>

    <script type="text/javascript">
      $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("active");
    });
    </script>

    <footer class="py-5 bg-dark">

        <div class="foot" align="center">

          <a class="" href="legal.php">Mentions Légales</a>

          <!-- Add icon library -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <!-- Add font awesome icons -->

    <a href="https://www.facebook.com/pg/BDECESINanter/posts/" class="fa fa-facebook"></a>

    <a href="https://www.instagram.com/bdecesinanterre/" class="fa fa-instagram"></a>

    

      </footer>
      </body>
    </html>
    <?php
  } else {
    header('Location: connexion.php');
  }
?>