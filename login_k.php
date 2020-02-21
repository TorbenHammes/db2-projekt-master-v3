<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=master-projekt-db2', 'master-projekt-db2', 'Xj41t^h3');
 
if(isset($_GET['login'])) {
    $email = $_POST['E-Mail'];
    $passwort = $_POST['PW'];
    
    $statement = $pdo->prepare("SELECT * FROM TBL_K_Zugang WHERE email = :E-Mail");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
        
    Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['PW'])) {
        $_SESSION['userid'] = $user['id'];
        die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }

    
}
?>

<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>    
</head> 
<body>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
 
<form action="?login=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Abschicken">
</form> 
</body>
</html>