<?php
  include("./db.php");
?>
<html>
<head>
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