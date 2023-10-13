<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<h1>LOGIN</h1>
<form action="processlogin.php" method="post">
    <input type="text" name="txtuname" placeholder="Enter Username" required>
    <input type="password" name="txtpw" placeholder="Enter Password" required>
    <input type="submit" value="Login">
</form>    
<?php  
    if(isset($_GET['log'])){
        echo "INVALID USERNAME OR PASSWORD ";
    }
?>
</body>
</html>