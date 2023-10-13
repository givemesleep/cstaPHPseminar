<?php
require_once("includes/connect.php");

if (isset($_GET['delid'])) {
    $id = $_GET['delid'];
    try {
        $sql = "DELETE FROM users WHERE id=?";
        $data = array($id);
        $stmt = $con->prepare($sql);
        $stmt->execute($data);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header('location:user.php');

}else {
    $id=strip_tags(trim($_POST['txtid']));;
    $fname = strip_tags(trim($_POST['txtfullname']));
    $email = strip_tags(($_POST['txtemail']));
    $uname = strip_tags(($_POST['txtusername']));
    $pw = sha1($_POST['txtpassword']);
    try {
        if($id==0){
            $sql = "INSERT INTO users(fullname,email,username,pword)VALUES(?,?,?,?)";
            $data = array($fname, $email, $uname, $pw);    
        }else{
            $sql="UPDATE users SET fullname=?,email=?,username=?,pword=? WHERE id=?";
            $data = array($fname, $email, $uname, $pw,$id);
        }
        $stmt = $con->prepare($sql);
        $stmt->execute($data);
        header('location:user.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>