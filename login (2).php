<?php include('checkconx.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>


    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    
    
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

        <link rel="stylesheet" href="style.css">

    
    
    
  </head>

  <body>

    <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="text">
        <a href="add.php">delete a profile</a>
        <a href="addd.php">add a profile</a>
      </div>
      <form class="login__form" method="post" action="checkconx.php">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>

          <input type="text" name="username" class="login__input name" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="text" name="cne" class="login__input name" placeholder="cne"/>

        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" name="password" class="login__input pass" placeholder="Password"/>

        </div>

        <input type="submit" name="save"  value="login" class="login__submit"/>
       
      </form>


    </div>
   
    
    
    
  </body>


</html>