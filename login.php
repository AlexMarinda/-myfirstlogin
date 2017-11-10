    <!doctype html>  
    <html>  
    <head>  
    <title>Login</title>  
        <style>   
            body{  
                  
        margin-top: 100px;  
        margin-bottom: 100px;  
        margin-right: 100px;  
        margin-left: 70px;  
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
            h3 {  
        color: indigo;  
        font-family: verdana;  
        font-size: 100%;  
    } </style>  
    </head>  
    <body>  
    	<CENTER>
    	<table>
    		
          
       <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p> 
       <br><br> 
    <h3><u>Login Form</u></h3>  
    
    		<br>
    <form action="" method="POST"> 
    	
    <tr>
   <td> Username: <input type="text" name="user"></dt> </tr> 
    <tr><td>Password:&nbsp;&nbsp;<input type="password" name="pass"></td> </tr>  
  <center><tr> <td><input type="submit" value="Login" name="submit" /></td></tr></center> 
    
    </form> 
    <?php 
    include 'connect.php';  
    if(isset($_POST["submit"])){  
      
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];
		$hashe=hash('sha512',$pass); 
           
        $query="SELECT * FROM users WHERE username='$user' AND password='$hashe'"; 
        $result=mysql_query($query);  
if($result)
{
    if(mysql_num_rows($result) >0 )
	{
		echo "succefull";
}
	else 
	{
	
	echo "INVALID password OR username";
        
	}

} 
	}}
    ?> 
    </table> 
    </CENTER>
    </body>  
    </html>   