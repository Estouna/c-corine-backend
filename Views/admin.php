<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="/css/1-fonts.css" type="text/css">
    <link rel="stylesheet" href="/css/2-resetAndStyleGlobal.css">
    <link rel="stylesheet" href="/css/100-mediaqueries.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <title>Corine-Avanzini</title>
</head>

<body>


    
    <main class="main column f-center">
        <!-- 
            -------------------------------------------------------- MESSAGES -------------------------------------------------------- 
        -->
        <?php if (!empty($_SESSION['erreur'])) : ?>
            <div class="alert alert-danger text-center" role="alert">
                <?php
                echo $_SESSION['erreur'];
                unset($_SESSION['erreur']);
                ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($_SESSION['success'])) : ?>
            <div class="alert alert-success text-center" role="alert">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
        <?php endif; ?>

        <?= $content ?>
    </main>

</body>

</html>