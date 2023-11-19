<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="/css/1-fonts.css" type="text/css">
    <link rel="stylesheet" href="/css/2-resetAndStyleGlobal.css">
    <link rel="stylesheet" href="/css/3-navbar.css" type="text/css">
    <link rel="stylesheet" href="/css/4-sections.css" type="text/css">
    <link rel="stylesheet" href="/css/5-accueil.css" type="text/css">
    <link rel="stylesheet" href="/css/6-a-propos.css" type="text/css">
    <link rel="stylesheet" href="/css/7-galerie.css" type="text/css">
    <link rel="stylesheet" href="/css/8-contact.css" type="text/css">
    <link rel="stylesheet" href="/css/100-mediaqueries.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <script src="/js/scrollOnPage.js" defer></script>
    <script src="/js/smokeText.js" defer></script>
    <script src="/js/menuBurger.js" defer></script>
    <script src="/js/slider.js" defer></script>
    <script src="/js/script.js" defer></script>
    <title>Corine-Avanzini</title>
</head>

<body>

    <header class="header-nav flex f-just-between">
        <a href="/c-corine"><img src="images/Logo.png" alt="Logo Egaïa" class="navbar__logo"></a>
        <nav class="navbar">
            <ul class="navbar__ul flex f-center">
                <li class="navbar__li"><a class="navbar__link" href="#home" class="active">Accueil</a></li>
                <li class="navbar__li navbar__li--span"><span>&#47;</span></li>
                <li class="navbar__li"><a class="navbar__link" href="#a-propos">A propos</a></li>
                <li class="navbar__li navbar__li--span"><span>&#47;</span></li>
                <li class="navbar__li"><a class="navbar__link" href="#galery">Galerie</a></li>
                <li class="navbar__li navbar__li--span"><span>&#47;</span></li>
                <li class="navbar__li"><a class="navbar__link" href="#contact">Contact</a></li>
            </ul>

            <div class="navbar__div--burger">
                <span class="navbar__span--burgerBar"></span>
                <span class="navbar__span--burgerBar"></span>
                <span class="navbar__span--burgerBar"></span>
            </div>
        </nav>
    </header>

    <main class="main">
        <?= $content ?>
    </main>

</body>

</html>