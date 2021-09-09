<?php
$serverName = $_SERVER['SERVER_NAME'];
$serverIP = $_SERVER['SERVER_ADDR'];
$browser = strtolower($_SERVER['HTTP_USER_AGENT']);

if (strpos($browser, 'edg')){
    $result = 'Tu utilises Internet Explorer.';

} elseif (strpos($browser, 'chrome')) {
  $result = 'Tu utilises google chrome.';

} elseif (strpos($browser, 'firefox')) {
  $result = 'Tu utilises firefox.';

} else {
  $result = 'Tu utilises un navigateur peu connu';
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>exercice 1 php</title>
</head>
<body>
    
<div class="text-white d-flex justify-content-center">

<?php

echo "<div class='text-white text-center'> Voici toutes vos informations : <br> <hr>Server : [ $serverName ]<br> IP : [ $serverIP ]<br> Navigateur : [ $result ] <hr></div> "

?>

</div>

</body>
</html>