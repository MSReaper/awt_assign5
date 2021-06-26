<?php 

$cookie_name = "user";

$cookie_value = "mokshith saliyan";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cookies data!</title>
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

<style type="text/css">

body{

background-color: lightcyan ;
}

.frame{
background-color: whitesmoke;

border: 2px solid white;
border-radius: 20px;

} 

header h1{

text-align: center;
}

.container{

background-color: lightyellow;

border: 3px solid sandybrown;

border-radius: 15px;

}

</style>
</head>
<body>

<div class="frame">

<header>


<h1>COOKIES COUNT SITE</h1>

</header>



</div>

<div class="container">


<form action="" method="post">

<label>Emter your details .......</label>
<br>
<br>
<label>Enter the first name</label>
<input type="text" name="fname" required>
<br>
<br>
<label>Enter the second name</label>
<input type="text" name="sname" required>

<br>
<br>

<label>Enter the email </label>
<input type="email" name="email" required>
<br>
<br>

<label>Enter the contact number</label>
<input type="tel" name="contact" required>

<br>
<br>

<button clas="btn btn-primary"><input type="submit" name="submit" value="submit"></button> <button class="btn btn-danger"><input type="reset" name="" 
value="reset"></button>


</form>

<?php

$fname;



if(isset($_POST['submit']))
{

$fname  =  $_POST["fname"];
$sname =  $_POST['sname'];
$email =  $_POST['email'];
$phone  =  $_POST['contact'];

echo "the first name is:" . $fname . "<br>";

echo "\nthe second name is:" . $sname . "<br>";

echo "\nthe email is:" . $email . "<br>";

echo "\nthe contact no is:" . $phone . "<br>";

}



?>

<hr>

<?php

if(!isset($_COOKIE[$cookie_name])){

echo "cookie named  " . $cookie_name . "is not set";

}else{

echo "cookie " . $cookie_name . "is set!<br>";

echo "value is " . " " . $_COOKIE[$cookie_name];
}
?>
<hr>

<?php 

//set visit cookie....

$timedate = 60 * 60 * 24 * 60 +time();

setcookie('lastvisit', date("G:i - m/d/y"), $timedate);

if(isset($_COOKIE['lastvisit'])){

$visit = $_COOKIE['lastvisit']; 

echo"your last visit was - ". $visit;

}else

echo"welcome to the website this is your first visit";

?>


</div>
<hr>
<p><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>


</body>
</html>