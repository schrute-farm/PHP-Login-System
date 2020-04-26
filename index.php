<?php 

  // Allow the config
  define('__CONFIG__', true);
  // Require the config
  require_once "inc/config.php"; 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Project</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/php_login_course/css/index.css">


  </head>

  <body>

    <div class="uk-section uk-container">
      <h1><?php 
        echo "Hello! Today is: ";
        echo date("Y m d");
      ?> </h1>
      <p>
        <a href="/php_login_course/login.php">Login</a>
        <a href="/php_login_course/register.php">Register</a>
      </p>
    </div>

    <?php require_once "inc/footer.php"; ?> 
  </body>
</html>
