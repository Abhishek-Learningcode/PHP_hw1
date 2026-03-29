<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Full name:
        <input type="text" name="name" id="">
        <br>
        Phone number:
        <input type="number" name="pn" id="">
        <br>
        <select name="dropdown" id="">                
        <option value="Toyota">Toyota</option>
        <option value="Ford">Ford</option>
        <option value="Tesla">Tesla</option>
        <br>
</select>
        <button type="submit">submit</button>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST['name'];
    $phone=$_POST['pn'];
    $drop=$_POST['dropdown'];
}
    echo "Hello $name you phone number is $phone and your perfferred car band is $drop ";

?> 