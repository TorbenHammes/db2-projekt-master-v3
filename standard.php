<?php
$dblink=new mysqli('localhost','hammes','hammes','mango');

function kopfbereich() {
print '<html>
<head>
<title>Regiokarte</title>

<style>
footer {position: fixed;bottom:0;left:0;right:0;}
</style>
</head>
<body>
<header>
<h1>Standard</h1>
</header>
<nav>
<a href="index.php">Startseite</a>
</nav>
';
}

function fussbereich() {
print '
<footer>
</footer>
</body>
</html>
';
}
?>