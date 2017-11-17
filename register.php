
<!doctype html>  
<html>  
<head>  
<title>Register</title>  
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
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
         h2 {  
    color: green;  
    font-family: verdana;  
    font-size: 100%;  
  
}</style>  
</head>  
<body> 
	<center>  
     <table>
    
   <p><a href="register.php">Register</a> | <a href="index.php">Login</a></p>  
   <br><br>
     <CENTER><h2><u>REGISTRATION Form</u></h2>  </CENTER>
    
<form action="register.php" method="POST">  
	
     
   
      
<tr>
<td>FIRSTNAME: </td><td><input type="text" name="fn" placeholder="Please Enter firstname....." autocomplete="off" ></td></tr>
<tr><td>SECONDNAME: </td><td><input type="text" name="sn"  placeholder="Please Enter secondname....." autocomplete="off" ></td></tr>
<tr><td>USERNAME:</td><td> <input type="text" name="user"></td></tr>
<tr><td>PASSWORD: </td><td><input type="password" name="pass"></td></tr>
<tr><td><input type="submit" value="submit" name="submit"></td></tr>
           </center> 
       
          
</form> 
</div> 
<?php 
include 'connect.php'; 
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$fn=$_POST['fn'];  
    $sn=$_POST['sn'];   
    $user=$_POST['user'];  
    $pass=$_POST['pass']; 
	$hashe=hash('sha512', $pass) ;
	/*$filename=$_FILES['file']['name'];
$picname=$_FILES['file']['tmp_name'];
$filesize=$_FILES['file']['size'];
$filetype=$_FILES['file']['type'];
$upload="picperson/";
$ext = substr(strrchr($filename,"."),1);
$rand=(rand() * time());
$path=$upload.$rand.'.'.$ext;
$fch=$rand.".".$ext;
if($_FILES['file']['size']>0){
if(isset($filename)){
$mv=move_uploaded_file($picname,$path);
}
if(!$mv)
 {
 exit;
 }
} */
    $query=pg_query("SELECT * FROM users WHERE username='".$user."'");  
    $number_rows=pg_num_rows($query);  
    if($number_rows==0)  
    {  
    $sql=("Insert into users VALUES('$fn','$sn','$user','$hashe');"); 
  
    $result=pg_query($sql);  
        if($result){  
    echo " Successfully ";  
    } else {  
    echo "Failure !".error_reporting();  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?> 
</table> 
</body>  