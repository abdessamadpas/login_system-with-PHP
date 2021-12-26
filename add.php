<?php include('checkconx.php');
 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remove a profile</title>
    
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
     
      <form class="login__form" method="post" action="checkconx.php">
        <div class="login__row">
         
        <input type="text" name="namedelete" class="login__input name" placeholder="Username"/>
        </div>
        
        <input type="submit" name="savetodelete"  value="login" class="login__submit"/>
       
      </form>


    </div>
   
    
    
</body>
</html>