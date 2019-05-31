<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="96x96" href="/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="911x911" href="/images/icons/favicon-911x911.png">
    
    <title><?php site_name(); ?> | <?php page_title(); ?></title>


    <link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/static/css/base.css" rel="stylesheet">

    <link href="/static/css/home.css" rel="stylesheet">

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
                     src="/static/images/logo_resel_flat.png" alt="Logo ResEl">
              </a>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-top-links navbar-left navbar-collapse">
            
            <li class="dropdown">
                <a href="/wiki/lassociation" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users fa-fw" aria-hidden="true"></i> <span class="hidden-sm">L&#39;Association</span></a>
                <ul class="dropdown-menu">
                    
                      <li>
                        <a href="https://resel.fr/become" class="container dropdown-link">
                          <div class="row">
                            <div class="col-xs-2 icon">
                              <span class="glyphicon glyphicon-sunglasses"></span>
                            </div>
                            <div class="col-xs-10">
                              <div class="link-name">Devenez Administrateur ResEl</div>
                              <div class="link-description">Devenez Administrateur ResEl</div>
                            </div>
                          </div>
                        </a>
                      </li>
                    
                      <li>
                        <a href="/wiki/lassociation/lhistoire-de-lassociation" class="container dropdown-link">
                          <div class="row">
                            <div class="col-xs-2 icon">
                              <span class="glyphicon glyphicon-align-left"></span>
                            </div>
                            <div class="col-xs-10">
                              <div class="link-name">L&#39;histoire de l&#39;association</div>
                              <div class="link-description">Cette page retrace l&#39;histoire du ResEl des origines jusqu&#39;à nos jours.</div>
                            </div>
                          </div>
                        </a>
                      </li>
                    
                      <li>
                        <a href="/wiki/lassociation/lequipe-resel" class="container dropdown-link">
                          <div class="row">
                            <div class="col-xs-2 icon">
                              <span class="glyphicon glyphicon-star"></span>
                            </div>
                            <div class="col-xs-10">
                              <div class="link-name">L&#39;équipe ResEl</div>
                              <div class="link-description">Les administrateurs ResEl au fil des années</div>
                            </div>
                          </div>
                        </a>
                      </li>
                    
                      <li>
                        <a href="https://resel.fr/faq/" class="container dropdown-link">
                          <div class="row">
                            <div class="col-xs-2 icon">
                              <span class="glyphicon glyphicon-question-sign"></span>
                            </div>
                            <div class="col-xs-10">
                              <div class="link-name">Questions Fréquentes</div>
                              <div class="link-description">Les questions les plus fréquentes au ResEl</div>
                            </div>
                          </div>
                        </a>
                      </li>
                    
                      <li>
                        <a href="https://resel.fr/wiki/tutoriaux" class="container dropdown-link">
                          <div class="row">
                            <div class="col-xs-2 icon">
                              <span class="glyphicon glyphicon-info-sign"></span>
                            </div>
                            <div class="col-xs-10">
                              <div class="link-name">Tutos ResEl</div>
                              <div class="link-description">Les tutoriaux du ResEl</div>
                            </div>
                          </div>
                        </a>
                      </li>
                    
                      <li>
                        <a href="https://resel.fr/eggdrop/" class="container dropdown-link">
                          <div class="row">
                            <div class="col-xs-2 icon">
                              <span class="glyphicon glyphicon-comment"></span>
                            </div>
                            <div class="col-xs-10">
                              <div class="link-name">Historique IRC</div>
                              <div class="link-description">Historique des conversations IRC</div>
                            </div>
                          </div>
                        </a>
                      </li>
                    
                </ul>
            </li>
            

            
            <li class="dropdown">
                <a href="/wiki/services" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-futbol-o fa-fw" aria-hidden="true"></i> <span class="hidden-sm">Services</span></a>
                <ul class="dropdown-menu">
                    
                    <li>
                      <a href="/wiki/services/internet-tres-haut-debit" class="container dropdown-link">
                        <div class="row">
                          <div class="col-xs-2 icon">
                            <span class="glyphicon glyphicon-flash"></span>
                          </div>
                          <div class="col-xs-10">
                            <div class="link-name">Internet très haut débit</div>
                            <div class="link-description">Le ResEl propose un internet neutre à tous ses adhérents</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="https://resel.fr/tv" class="container dropdown-link">
                        <div class="row">
                          <div class="col-xs-2 icon">
                            <span class="glyphicon glyphicon-film"></span>
                          </div>
                          <div class="col-xs-10">
                            <div class="link-name">La Télévision</div>
                            <div class="link-description">Grâce au ResEl il est possible de regarder plus de 30 chaines en direct sur son ordinateur</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="https://mlistes.resel.fr" class="container dropdown-link">
                        <div class="row">
                          <div class="col-xs-2 icon">
                            <span class="glyphicon glyphicon-envelope"></span>
                          </div>
                          <div class="col-xs-10">
                            <div class="link-name">Listes de diffusion</div>
                            <div class="link-description">Les listes de diffusion du ResEl permettent de faire vivre le campus de l&#39;IMT Atlantique à Brest !</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="https://garbage.resel.fr" class="container dropdown-link">
                        <div class="row">
                          <div class="col-xs-2 icon">
                            <span class="glyphicon glyphicon-search"></span>
                          </div>
                          <div class="col-xs-10">
                            <div class="link-name">Garbage</div>
                            <div class="link-description">Moteur de recheche</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="https://stages.resel.fr" class="container dropdown-link">
                        <div class="row">
                          <div class="col-xs-2 icon">
                            <span class="glyphicon glyphicon-list-alt"></span>
                          </div>
                          <div class="col-xs-10">
                            <div class="link-name">Stages</div>
                            <div class="link-description">Trouvez des offres de stages sur notre plateforme interactive</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="https://git.resel.fr" class="container dropdown-link">
                        <div class="row">
                          <div class="col-xs-2 icon">
                            <span class="glyphicon glyphicon-console"></span>
                          </div>
                          <div class="col-xs-10">
                            <div class="link-name">Gitlab</div>
                            <div class="link-description">Gestion de projets avec tickets, revue de code, et intégration continue</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="http://sandstorm.resel.fr" class="container dropdown-link">
                        <div class="row">
                          <div class="col-xs-2 icon">
                            <span class="glyphicon glyphicon-education"></span>
                          </div>
                          <div class="col-xs-10">
                            <div class="link-name">Sandstorm</div>
                            <div class="link-description">Plateforme de services cloud</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="https://resel.fr/contact/" class="container dropdown-link">
                        <div class="row">
                          <div class="col-xs-2 icon">
                            <span class="glyphicon glyphicon-cloud"></span>
                          </div>
                          <div class="col-xs-10">
                            <div class="link-name">Hébergement cloud</div>
                            <div class="link-description">Hébergez tous vos sites ou applications web pour votre club ou association</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                </ul>
            </li>
            

            <li>
                <a class="btn-campus" href="/campus/"><i class="fa fa-bicycle fa-fw"></i> <span class="hidden-sm btn-campus-text">Campus</span></a>
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
                
                <hr class="visible-xs"/>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">FR</a>
                    <ul class="dropdown-menu">
                        
                        
                        <form action="/lang/setlang/" method="post">
                            <input name="next" type="hidden" value="/"/>
                            
                            <button class="btn btn-link" name="language" type="submit" value="fr">Français</button>
                            
                            <button class="btn btn-link" name="language" type="submit" value="en">English</button>
                            
                        </form>
                    </ul>
                </li>
          <li>
            
            <a href="/status/" 
              data-toggle="tooltip" 
              data-placement="bottom" 
              title="Tous les services sont nominaux">
              <i class="fa fa-heartbeat fa-fw success"></i>
              
            </a>
            
          </li>
        </ul>
        </div>
    </div><!-- /.container -->
</nav>

<div id="page-wrapper">
    
  <div class="jumbotron">
    <div class="jumbotron-sep hidden-xs"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <h2 class="assos-title">Le Réseau des Élèves de l'IMT Atlantique</h2>
          <p class="assos-slogan">Le fournisseur d'accès associatif par les teubreux pour les teubreux</p>
        </div>
        <div class="col-md-offset-1 col-md-6">
          <img src="/static/images/logo_resel.png" alt="logo ResEl" class="img-responsive logo">
        </div>
      </div>
    </div>
    <div class="jumbotron-sep hidden-xs"></div>
  </div>

    

    
        <style>.navbar-brand { display: none; }</style>
        
            <div class="home-fragment home-presentation home-user-management">
              <div class="jumbotron-sep hidden-xs"></div>
                <div class="container article">
                    <h2>Le ResEl fournit un accès Internet aux campus brestois et rennais de <a href="https://www.imt-atlantique.fr/">l'IMT Atlantique</a></h2>
                    <div class="diagram">
                        <div class="fa fa-cloud"></div>
                        <div class="line"></div>
                        <div class="wifi"></div>
                        <div class="wifi wifi-poper"></div>
                        <div class="packet packet1"></div>
                    </div>
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
            </div>
        
        <div class="home-fragment home-bg-img">
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
            </div>
        </div>











<div id="header-section" class="header-section">
    <nav
        id="main-menu"
        class="menu-block main-menu">
        <!-- data-ffgym-viewcomponents="{&quot;MainMenuExpand&quot;:[]}"> -->
        <ul class="menu">
        <li class="home-link active">
            <a href="//www.portetgym.fr">
                Accueil
            </a>
        </li>
        </ul>
    </nav>

    <header>
        <h1><?php site_name(); ?></h1>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
        <section
            id="connexion"    class="login-expand-block "
                                data-ffgym-viewcomponents="{&quot;LoginExpand&quot;:[]}"
                        >
                <a class="visibility-switch visibility-disabled">
                Connexion
            </a>
            <div class="expandable">
                    <section class="push">
            <h1>Nouvel utilisateur?</h1>
            <p>Vous êtes un nouvel utilisateur, vous pouvez dès maintenant vous inscrire sur votre nouveau site. Si vous disposez déjà d&#039;un compte, vous pouvez vous enregistrer ci-contre.
        Bienvenue !</p>
            <a href="/temp" target="_self">
                Créer votre compte
            </a>
        </section>
    </header>
</div>
<div id="content" class="content">
    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
    </footer>

</div>
<!-- jQuery -->
<script src="/static/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/static/boostrap/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->


<!-- Custom Javascript -->

    <script>
        var rennes_loaded = false;
        $('a[href="#graph-rennes"]').click(function (e) {
            if (!rennes_loaded) {
                $( '#iframe-rennes' ).attr( 'src', function ( i, val ) { return val; });
                rennes_loaded = true;
            }
        });

    </script>
</body>
</html>