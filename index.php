<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'functions.php';

session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

  <?php
    require_once 'view/menu.php';
    require_once 'route.php';

    if (array_key_exists('error', $_SESSION)) {
      echo '<h4>'.$_SESSION['error'].'</h4>';
      unset($_SESSION['error']);
    }
  ?>

  <form action="action.php"
        method="POST"
        enctype="multipart/form-data">

    Email: <input type="email" name="email" required>
    <br>
    Pass: <input type="password" name="password" required>
    <br>
    <input type="submit" value="Envoyer">

  </form>

</body>
</html>

