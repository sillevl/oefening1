<?php 

if(isset($_POST["pass"])){
	setcookie("password" , md5($_POST["pass"]+"qmslkdjfmqslkdjfmlqksjdf"));
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php 
 if(isset($_COOKIE["password"]) && $_COOKIE["password"] == md5("test"+"qmslkdjfmqslkdjfmlqksjdf")){
	 echo "hallo, welkom terug";
	} else {
 ?>
 	<form method="post">
 		<input type="password" name="pass">
 		<input type="submit">
 	</form>	
 	<?php 
 		}
  ?>
 </body>
 </html> 	
