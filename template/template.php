<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="96x96" href="/static/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="911x911" href="/static/images/icons/favicon-911x911.png">
    
    <title><?php site_name(); ?> | <?php page_title(); ?></title>


    <link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

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
<nav class="navbar navbar-main navbar-static-top" role="navigation">
  <div class="container">
    <div class="nav navbar-left navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="menu-text">Menu</span>
          <span class="menu-bar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </span>
      </button>
        <div>
          <a class="navbar-brand" href="/">
            <img style="width: auto; height: 45px; margin-top: -13px;"
                  src="/static/images/portetgym.png" alt="Logo portet gym">
          </a>
        </div>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-top-links navbar-left navbar-collapse">
        
        <!-- L'association -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users fa-fw" aria-hidden="true"></i> <span class="hidden-sm">L&#39;Association</span></a>
            <ul class="dropdown-menu">
                
              <li>
                <a href="/bureau" class="container dropdown-link">
                  <div class="row">
                    <div class="col-xs-2 icon">
                      <i class="fa fa-user-tie glyphicon"></i>
                    </div>
                    <div class="col-xs-10">
                      <div class="link-name">Le Bureau</div>
                      <div class="link-description">Les Bénévoles de l'association</div>
                    </div>
                  </div>
                </a>
              </li>
                
              <li>
                <a href="/entraineurs" class="container dropdown-link">
                  <div class="row">
                    <div class="col-xs-2 icon">
                      <i class="fa fa-user-ninja glyphicon"></i>
                    </div>
                    <div class="col-xs-10">
                      <div class="link-name">Les entraineurs</div>
                      <div class="link-description">Les entraineurs du club</div>
                    </div>
                  </div>
                </a>
              </li>
            
              <li>
                <a href="/planning" class="container dropdown-link">
                  <div class="row">
                    <div class="col-xs-2 icon">
                      <i class="fa fa-clock glyphicon"></i>
                    </div>
                    <div class="col-xs-10">
                      <div class="link-name">Planning</div>
                      <div class="link-description">Horaire des entrainements</div>
                    </div>
                  </div>
                </a>
              </li>
            
              <li>
                <a href="/cotisations" class="container dropdown-link">
                  <div class="row">
                    <div class="col-xs-2 icon">
                      <i class="fa fa-euro-sign glyphicon"></i>
                    </div>
                    <div class="col-xs-10">
                      <div class="link-name">Cotisations</div>
                      <div class="link-description">Prix de la cotisation 2019-2020</div>
                    </div>
                  </div>
                </a>
              </li>
              
            </ul>
        </li>
        
        <!-- Calendrier -->
        <li class="dropdown">
          <a href="/calendrier/" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar-check fa-fw" aria-hidden="true"></i> <span class="hidden-sm">Calendrier</span></a>
        </li>

        <!-- Résultats -->
        <li class="dropdown">
          <a href="https://www.ffgym.fr/Competition/resultats" class="dropdown-toggle" data-toggle="dropdown" target="_blank"><i class="fa fa-trophy fa-fw" aria-hidden="true"></i> <span class="hidden-sm">Résultats</span></a>
        </li>


        <!-- Fédérations -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info fa-fw" aria-hidden="true"></i> <span class="hidden-sm">Fédérations</span></a>
          <ul class="dropdown-menu">
              
              <li>
                <a href="https://www.ufolepgym.com/" class="container dropdown-link" target="_blank">
                  <div class="row">
                    <div class="col-xs-2 icon">
                      <img src="/static/images/ufolep.jpg" alt="logo ufolep" class="img-responsive logo">
                    </div>
                    <div class="col-xs-10">
                      <div class="link-name">UFOLEP</div>
                      <div class="link-description">Le site de l'UFOLEP</div>
                    </div>
                  </div>
                </a>
              </li>
              
              <li>
                <a href="https://ffgym.fr/" class="container dropdown-link" target="_blank">
                  <div class="row">
                    <div class="col-xs-2 icon">
                      <img src="/static/images/ffgym.jpeg" alt="logo ffgym" class="img-responsive logo">
                    </div>
                    <div class="col-xs-10">
                      <div class="link-name">FFGym</div>
                      <div class="link-description">Toutes les informations de la fédération française</div>
                    </div>
                  </div>
                </a>
              </li>
              
          </ul>
        </li>

      </ul>

      <ul class="nav navbar-top-links navbar-right navbar-collapse">
        <li>
          <a href="/contact/"> Contact</a>
        </li>

        <hr class="visible-xs"/>

        <li>
            <a href="/login">Connexion</a>
        </li> 

      </ul>
    </div>
  </div><!-- /.container -->
</nav>

<div id="page-wrapper">

  <!-- <div class="jumbotron"> -->
  <!-- </div> -->

  <div class="jumbotron">
    <div class="image-background">
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
    <div class="jumbotron-sep hidden-xs"></div>
  </div>

  
    
  <style>.navbar-brand { display: none; }</style>
        
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

<!-- jQuery -->
<script src="/static/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/static/boostrap/js/bootstrap.min.js"></script>

</body>
</html>