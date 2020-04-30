<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}
.out{
    float: right;
    text-decoration:none
}  
              
          
    </style>  
</head>  
<body>  
    <center><h1>WELCOME TO BETTING WORLD</h1></center>  
      
<h2>Welcome, <?=$_SESSION['sess_user'];?>! </h2>  
<p>  
GOOD LUCK... 

<div class="out">
<a href="help.php"> hlp </a>
<a href="hello.html">suru</a>  
<a href="logout.php">Logout</a>
</div>
</p>  
</body>  
</html>  
<?php  
 }
?> 
 <?php
 
 
 $host="localhost";
 $user="root";
 $password="";
 $db="user_registration";
  
 mysql_connect($host,$user);
 mysql_select_db($db);
 
 $uname=$_GET['username'];
     
     
     $sql="select * from login where user='".$uname."'";
     
     $result=mysql_query($sql);

    print $result;
     
         
 
 ?>
