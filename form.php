<?php
    echo $_POST['fname']."<br>";
   echo  $_POST['email']."<br>";

?>


<form action="form.php" method = "POST">

Name : <input type="text" name="fname"><br><br>
Email : <input type="email" name = "email"><br><br>
<input type="submit" value = "submit">



</form>