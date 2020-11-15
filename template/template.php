<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="96x96" href="/static/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="911x911" href="/static/images/icons/favicon-911x911.png">
    
    <title><?php site_name(); ?> | <?php page_title(); ?></title>

    <!-- Main Functionnalities -->
    <script src="/static/jquery/jquery.min.js"></script>
    <link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="/static/bootstrap/js/bootstrap.min.js"></script>

    <!-- style -->
    <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/static/css/all.css" rel="stylesheet" type="text/css">
    <link href="/static/css/base.css" rel="stylesheet" type="text/css">
    <link href="/static/css/home.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <link href="/template/style.css" rel="stylesheet" type="text/css" /> -->
</head>
<body>

<!-- Navigation -->

<div id="page-wrapper">

  <!-- <div class="jumbotron"> -->
  <!-- </div> -->

  <div class="jumbotron">
    <div class="image-background">
      <div class="jumbotron-sep hidden-xs"></div>
      <div class="jumbotron-sep hidden-xs"></div>   
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-md-offset-1"> 
            <h2 class="assos-title">PORTET GYM</h2>
            <p class="assos-slogan">Club de gymnastique artistique, babygym, loisirs et compétition GAM GAF</p>   
          </div>
          <div class="col-md-offset-1 col-md-5">
            <img src="/static/images/portetgym2.png" alt="logo Portetgym" class="img-responsive logo" style="width: 50%; height: 50%;">
          </div>
        </div>
      </div>
  </div>

  <!-- <div class="jumbotron">
    <div class="general_background">
      <div class="news1">
        <div class="row">
          <h2 class="assos-title-1">INSCRIPTIONS</h2>
         
          <p class="assos-infos-1">Nous mettons en place cette année un nouveau système d'<a href="/inscriptions" style="color:red">inscription</a> avec un formulaire à remplir en ligne. Il sera disponible sur ce site internet à partir de mi-août. Il faudra ensuite venir aux inscriptions en personne <b> le samedi 29 août de 10h à 13h</b> ou <b>le mercredi 2 septembre de 17h à 20h.</b></p>
        </div>
        <br>
        <br>
        <div class="row">
          <p class="assos-notif">Notez que remplir le formulaire en ligne ne garantit pas de place.</p>
        </div>
      </div>
    </div>
  </div> -->
  <div class="jumbotron">
    <div class="general_background">
      <div class="news1">
        <div class="row">
          <h2 class="assos-title-1">INFORMATIONS COVID</h2>
         
          <p class="assos-infos-1">Pour des raisons indépendantes de notre volonté la salle de gym est fermée jusqu'à nouvel ordre.</p>
        </div>
        <br>
        <br>
        <div class="row">
          <p class="assos-notif">Plus d'informations vous seront communiquées par mail</p>
        </div>
      </div>
    </div>
  </div>
  
    
        
  <!-- <div class="home-fragment home-presentation home-user-management">
    <div class="jumbotron-sep hidden-xs"></div>
      <div class="container article">
          <h2>Ici des infos intéressantes de <a href="http://club.quomodo.com/portetgym" target="_blank">Portet Gym</a> et surtout des photos ! </h2>
      </div>
      <div class="container">
          <div class="row home-login">
              <div class="col-md-3 col-md-offset-3">
                  <a href="/login" class="btn btn-default">
                    Connexion
                  </a>
              </div>
              <div class="col-md-3">
                  <a href="/how-to-signup" class="btn btn-default btn-outline">
                    Comment s'inscrire ?
                  </a>
              </div>
          </div>
      </div>
    <div class="jumbotron-sep hidden-xs"></div>
  </div> -->
        
  <!-- <div class="home-fragment home-bg-img">
      <div id="carousel-quotes" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carousel-quotes" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-quotes" data-slide-to="1"></li>
              <li data-target="#carousel-quotes" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
              <div class="container item active" role="option">
                  <div class="row">
                      <div class="col-sm-4 col-sm-offset-1">
                          <span class="fa fa-heart-o service-icon bigger" aria-hidden="true"></span>
                      </div>
                      <div class="col-sm-6">
                          <h2>Le ResEl relie à Internet 600 chambres à Brest et 100 chambres à Rennes</h2>
                      </div>
                  </div>
              </div>
              <div class="container item" role="option">
                  <div class="row">
                      <div class="col-sm-4 col-sm-offset-1">
                          <span class="fa fa-graduation-cap service-icon bigger" aria-hidden="true"></span>
                      </div>
                      <div class="col-sm-6">
                          <h2>Depuis 1996 l'association a fourni internet à des milliers d'étudiants</h2>
                      </div>
                  </div>
              </div>
              <div class="container item" role="option">
                  <div class="row">
                      <div class="col-sm-4 col-sm-offset-1">
                          <span class="fa fa-code-fork service-icon bigger" aria-hidden="true"></span>
                      </div>
                      <div class="col-sm-6">
                          <h2>Nous utilisons exclusivement que des logiciels libres, ce qui permet une grande flexibilité</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div> -->


</div>

</div>
<style>.navbar-brand { display: none; }</style>


</body>
</html>