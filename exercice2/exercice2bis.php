<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>exercice 2php</title>
</head>
<body>
    
<?php
echo '<div class="text-white text-center"> Voici toutes vos informations : <br> <hr>Prénom :' . ' ' .  $_SESSION['firstname'] . '<br> Nom :' . ' ' .  $_SESSION['lastname'] . '<br> Age :' . ' ' . $_SESSION['age'] . 'ans<hr></div>';
?>


</body>
</html>