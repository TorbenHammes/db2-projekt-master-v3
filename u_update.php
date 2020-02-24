<?php
  include("./db.php");
?>
<html>
<head>
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