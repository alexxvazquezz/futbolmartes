<?php
include('inc/header.php');

if($_SERVER ["REQUEST_METHOD"] == POST) {
  $name = trim(filter_input(INPUT_POST, "name" , FILTER_SANITIZE_STRING));
  $phonenumber = trim(filter_input(INPUT_POST,"phonenumber",FILTER_SANITIZE_SPECIAL_CHARS));
  $password = filter_input(INPUT_POST."password",FILTER_SANITIZE_STRING);
  }

if($name == "" || $phonenumber == "" || $password == ""){
  echo "<h1>Please don't forget to enter a name, number or password</h1>";
}


?>


    <form class="register-form" action="inc/data.php" method="post">
      <input type="text" name="email" value="Email"><br>
      <input type="text" name="phonenumber" value="PhoneNumber"><br>
      <input type="text" name="password" value="Password"><br>
      <input type="button" name="submit" value="Submit"><br>
    </form>
  </body>
</html>
