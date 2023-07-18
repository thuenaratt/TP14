<!-- <?php
// storing session data
session_start();

$_SESSION ["username"] = "thuenaratt";
$_SESSION ["email"] = "thuenaratt@gmail.com";
// retrieve session data
echo $_SESSION ["username"] ;
echo "<br>";

echo $_SESSION["email"] ;

?> -->
<form action=" registrationGet.php" method="post">
Name: <input type="text" name="name"><br><br>
Number: <input type="text" name="num"><br><br>
Email: <input type="text" name="email"><br><br>
<input type="submit"><br><br>

</form>
