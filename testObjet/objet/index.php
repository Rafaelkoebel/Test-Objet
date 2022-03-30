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
        $user1 = new User("Dupond", "email@mail.com", "Dup");
        $user2 = new User("Durant", "email2@mail.com", "Dur");
        $user3 = new User("Duboit", "email3@mail.com", "Dub");
        $user4 = new User("Bonjour", "email4@mail.com", "Bon");
        $user1->setPseudo("Dupont");
        $user1->setEmail("test@afpa.fr");
        $user2->setPseudo("Durand");
        $user3->setPseudo("Dubois");
        $user4->setPseudo("Bonjour");
        $user1->envoyerEmail("Le titre", "Le texte du mail");
        var_dump($user1);

        $user1->bloquer();

        var_dump($user1);
        var_dump($user2);
        var_dump($user3);
        var_dump($user4);
    ?>

    <h2>Héritage</h2>

    <?php
        include_once("admin.class.php");
        $admin1 = new Admin("Admin1", "admin1@mail.com", "AMD");
        var_dump($admin1);
    ?>
</body>
</html>