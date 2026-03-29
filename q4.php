<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
username:
<input type="text" name="name" id="">
<br>
password:
<input type="password" name="pass" id="">
<br>
term and condition:
<input type="checkbox" name="check" id="" value="yes">
<button type="submit">submit</button>

    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]==="GET"){
    $username=$_GET['name'];
    $password=$_GET['pass'];
    $check=isset($_GET['check'])?"agreed":"not agreed";
}
    echo"welcome $username. you have $check to the terms and conditions.";

?>