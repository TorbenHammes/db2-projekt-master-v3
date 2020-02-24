<?php
  include("./db.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<meta http-equiv="refresh" content="0; URL=locations_admin.php">
</head>
<?php

$v_nickname=strip_tags($_GET['v_nickname']);
$plz=strip_tags($_GET['plz']);
$nr=strip_tags($_GET['nr']);
$strasse=strip_tags($_GET['strasse']);
$l_k_id=strip_tags($_GET['l_k_id']);

$update="update TBL_Locations set v_nickname='$v_nickname', plz='$plz', hausnummer='$nr', strasse='$strasse', l_k_id='$l_k_id' where v_nickname='$v_nickname'";
print $update;
$dblink->query($update);

?>
