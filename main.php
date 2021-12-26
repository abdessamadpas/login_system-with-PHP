<?php include('checkconx.php');
//session_start();
  $name= $_SESSION['username'];
  $cne =  $_SESSION['cne'] ;
 // $cne=$_SESSION['cnen'];

    $name=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main page</title>
  
    <link rel="stylesheet" href="wewe.css">


</head>
<body>


<div class="wewe">GG u are in  , welcome <?php echo htmlspecialchars( $name ); ?> </div>


<div class="wewe">GG u are in  , welcome <?php echo htmlspecialchars( $cne ); ?> </div>

  

<div>

<table  class="rwd-table">
<tr>
<th>  idm</th>
<th>cne</th>

<th>note</th>
<th>appreciation</th>
</tr>
<?php
$conn = mysqli_connect('localhost','root','','login');

//check connection
//if (!$conn) {
 //   die('error connecting to database');
//}else{
//   echo'connection done';
//}
$dbnote="SELECT * FROM resultat where cne='$cne'";  

$result= mysqli_query($conn,$dbnote);

while($row = $result->fetch_assoc()){?>

<tr>
<td><?php echo htmlspecialchars( $row['idm'] ); ?></td>
<td>  <?php echo htmlspecialchars($row['cne'] ); ?></td>

<td> <?php echo htmlspecialchars($row['note'] ); ?>
<td>  <?php echo htmlspecialchars( $row['appreciation']); ?></td>
</tr>
<?php } ?>
</table>
<div class="moyen">
<?php 
  $conn = mysqli_connect('localhost','root','','login');

  //check connection
  //if (!$conn) {
   //   die('error connecting to database');
  //}else{
  //   echo'connection done';
  //}
  $avg="SELECT  AVG(note) FROM resultat where cne='$cne'";  
  
  $result= mysqli_query($conn,$avg);
  if ($result) {
    $wewe=$result->fetch_assoc();
    echo'le moyen est ';    
    echo htmlspecialchars( $wewe['AVG(note)'] );
  
  }
?>



</div>


</div>

<div>
  <form action="checkconx.php" method="post">
<input
       type="submit"
       value="baraaaaaaaa"
       name="bara" >
</form>






</div>

</div>
</body>
</html>   


