<?php
//session
session_start();
 //connect to db 
   $conn = mysqli_connect('localhost','root','','login');

   //check connection
   if (!$conn) {
       die('error connecting to database');
   }else{
      echo'connection done';
   }
      
   //ini variables
   $username='';
   $password='';
   $namedelete='';
   
   

   // insert to db
   if (isset($_POST['save'])) {
       $username=$_POST['username'];
       $cne=$_POST['cne'];
       $password=$_POST['password'];
       // $insert="INSERT INTO etudiant (username, password)  VALUES ('$username', '$password');";
    //session get
    $_SESSION['username']=$username;
    $_SESSION['cne']=$cne;
        //get db
      $db="select * from etudiant where username ='$username' and  password ='$password'; ";  
     $query= mysqli_query($conn,$db);
        $rows=mysqli_num_rows($query);
     if ($rows==1) {

        echo'wewe';
        header('location:main.php');
            
    } else {
        echo'login failed';
        header('location:login.php');
    } }


if (isset($_POST['savetodelete'])) {
    $namedelete=$_POST['namedelete'];
     //get db
     $db="DELETE FROM etudiant
     WHERE username = '$namedelete' ; ";  
     $query= mysqli_query($conn,$db);
        //$rows=mysqli_num_rows($query);
     if ( $query) {

        echo'delete done';
       // header('location:main.php');
            
    } else {
        echo'login failed';
       // header('location:login.php');
    }
    
}

if (isset($_POST['add'])) {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $nom=$_POST['nom'];
    $cne=$_POST['cne'];
    $prenom=$_POST['prenom'];
    $_SESSION['username']=$username;
    $_SESSION['cnee']=$cne;
     //get db
     $db="INSERT INTO etudiant (cne,username, password, prenom, nom) VALUES
     ('$cne',' $username','$password ', '$prenom', '$nom');";  
   
     $result= mysqli_query($conn,$db);
        //$rows=mysqli_num_rows($query);
     if ( $result) {

        echo' done';
       header('location:main.php');
            
    } else {
        echo'tsjal failed';
        header('location:login.php');
    }
    
}




if (isset($_POST['bara'])) {
 //   $name=$_SESSION['username'];
    session_destroy();
    header('location:login.php');
    
}

  
?>