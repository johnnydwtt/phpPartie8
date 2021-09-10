<?php
    $login= $_COOKIE['login'];
    $password= $_COOKIE['password'];
    setcookie('login', 'johnny',time()+30, '/');
    setcookie('password', 'monmotdepasse',time()+30, '/');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>reprise d'info</title>
</head>
<body>
<div class="text-white d-flex justify-content-center bg-danger">

</div>
<hr class="bg-light">
<div class="text-white d-flex justify-content-center">

<div class="text-white d-flex justify-content-center text-center flex-column">
        Vos informations :<br>
        <hr>
        Identifiant = <?=$login;?></br>
        Mot de passe = <?=$password;?></br>
        <hr>
</div>

</div>
<hr class="bg-light">

</body>
</html>