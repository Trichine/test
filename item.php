<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booki DW P2</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/tablette.css" media="screen and (max-width: 992px)">
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width: 768px)">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo/Booki@3x.png" />
    <meta name="google-site-verification" content="g_p0XZ2oWk4-WIp1xi39VJNtdGsVVaMJRXLhtLliBAI" />
</head>

<body>
    <?php
    include "header.php"
    ?>

    <?php
    $userAge = 17;
    $userAge = 23;
    $userAge = 55;
    $fullname = "trichine";
    $email = 'trichineaboubakeur@le-camppus-numerique.fr';
    $isAuthor = true;
    $isAdministrator = false;
    echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !<br>'; // méthode d'affichage la plus utilisé car "lisible"//
    $number = 10;
    $result = ($number + 5) * $number; // $result prend la valeur 150 //
    $isEnabled = true;
    if ($isEnabled == true) { //écrire un boolean//
        echo "Vous êtes autorisé(e) à accéder au site ✅<br>";
    } elseif ($isEnabled == false) { // peut s'écrire aussi (! $isEnabled) //
        echo "Accès refusé ❌ <br>";
    } else {
        echo "j'ai pas tout compris <br>";
    }
    ?>
    <?php
    $produits = [
        "hotel Annecy" => array(
            "name" => "le beau Arivage",
            "price" => "120€",
            "weight" => "150",
            "discount" => NULL,
            "picture_url" => "/img/hebergements/annie-spratt-Eg1qcIitAuA-unsplash.jpg",
        ),
        //var_dump($proucts); pour tester/afficher une le tableau pour debug.

        "aeroport roissy charles de gaulle" => array(
            "name" => "IBis",
            "price" => "70€",
            "weight" => "120",
            "discount" => NULL,
            "picture_url" => "/img/hebergements/fred-kleber-gTbaxaVLvsg-unsplash.jpg",
        ),

        "Hotel la Canbieer" => array(
            "name" => "la nuit douce",
            "price" => "29,90€",
            "weight" => "250",
            "discount" => "10%",
            "picture_url" => "/img/hebergements/febrian-zakaria-sjvU0THccQA-unsplash.jpg",
        ),
    ];
    ?>


<?php
    foreach ($produits as $produit) {

        foreach ($produit as $key => $value) {


            if ($key === 'name') {

                echo '<h3>' . $value . '</h3>';
            } elseif ($key === 'price') {
                echo '<p>' . $value . '</p>';
            } elseif ($key === 'picture_url') {
                echo '<img src ="' .$value. '"alt="'.$produit['name'] .'">';
            }
        }
    }
    ?>
    <?php include "footer.php" ?>
</body>