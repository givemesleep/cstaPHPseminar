<?php 
require_once("includes/connect.php");
$uname=strip_tags(trim($_POST['txtuname']));
$pw=sha1($_POST['txtpw']);
try {
    $sql="SELECT * FROM users WHERE username=? AND pword=?";
    $data=array($uname,$pw);
    $stmt=$con->prepare($sql);
    $stmt->execute($data);
    $rc=$stmt->rowCount();
    if($rc){
        header("location:user.php");
    }else{
        header("location:login.php?log=1");
    }
} catch (PDOException $th) {
    echo $th->getMessage();
}

?>