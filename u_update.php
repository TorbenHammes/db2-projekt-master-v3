<?php
  include("./db.php");
?>
<html>
<head>
  <title>Einstellungen | Regio Karte</title>
  <meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<meta http-equiv="refresh" content="0; URL=sellerliste_admin.php">
</head>
<?php

$email=strip_tags($_GET['email']);
$vname=strip_tags($_GET['vname']);
$nname=strip_tags($_GET['nname']);

$update="update users set email='$email', vorname='$vname', nachname='$nname' where email='$email'";
print $update;
$dblink->query($update);

?>
