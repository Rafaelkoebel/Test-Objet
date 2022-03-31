<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TEST RIB</h1>
    <?php
    include_once("rib.class.php");
    $rib = new RibValidator("12345", "67891", "1324567agb", "51");

    var_dump($rib);
    echo "<br/>";

    if ($rib->isValid()){
        echo "ce rib est valide";
    }
    else{
        echo "pas valide";
    };

    ?>
</body>
</html>