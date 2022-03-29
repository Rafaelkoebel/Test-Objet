<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Object</h1>

    <h2>Instanciation</h2>
    <?php
        include_once("user.class.php");
        $user1 = new User();
        $user2 = new User();
        $user3 = new User();
        $user4 = new User();
        $user1->setPseudo("Dupont");
        $user1->setEmail("test@afpa.fr");
        $user2->setPseudo("Durand");
        $user3->setPseudo("Dubois");
        $user4->setPseudo("Bonjour");
        $user1->envoyerEmail("Le titre", "Le texte du mail");
        //var_dump($user1);
    ?>
</body>
</html>