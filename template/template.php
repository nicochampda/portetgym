<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="/template/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header-section" class="header-section">
    <nav
        id="main-menu"
        class="menu-block main-menu">
        <!-- data-ffgym-viewcomponents="{&quot;MainMenuExpand&quot;:[]}"> -->
        <ul class="menu">
        <li class="home-link active">
            <a href=<?php site_url(); ?>>
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
            <a href="//www.ffgym.fr/Creation_d_un_nouveau_compte" target="_self">
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
</body>
</html>