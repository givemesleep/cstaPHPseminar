<?php 
    require_once("includes/connect.php");
    $id="";
    $fname="";
    $email="";
    $uname="";
    if(isset($_GET['editid'])){
        try {
            $sql="SELECT * FROM users WHERE id=?";
            $id=$_GET['editid'];
            $data=array($id);
            $stmt=$con->prepare($sql);
            $stmt->execute($data);
            $row=$stmt->fetch();
            $id=$row['id'];
            $fname=$row['fullname'];
            $email=$row['email'];
            $uname=$row['username'];
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>User Registration</h3>
    <hr>
    <table border=1>
        <tr>
            <th>ID</th><th>Fullname</th><th>Email</th><th>Username</th><th>Actions</th>
        </tr>
        <?php 
                $sql="SELECT * FROM users";
                try {
                    $stmt=$con->prepare($sql);
                    $stmt->execute();
                    $tbl="";
                    while($row=$stmt->fetch()){
                        $tbl.="<tr>";
                        $tbl.="<td>{$row['id']}</td>";
                        $tbl.="<td>{$row['fullname']}</td>";
                        $tbl.="<td>{$row['email']}</td>";
                        $tbl.="<td>{$row['username']}</td>";
                        $tbl.="<td> <a href='processuser.php?delid={$row['id']}'><button>Delete</button></a>
                                            <a href='user.php?editid={$row['id']}'><button>Edit</button></a></td>";
                        $tbl.="<tr>";
                    }
                    echo $tbl;
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

        ?>
    </table>
    <hr>
    <form action="processuser.php" method="post">
                <input type="hidden" name="txtid" value="<?php echo $id; ?>"><br/>
            <input type="text" name="txtfullname"  placeholder="Enter Fullname" required value="<?=$fname?>"><br/>
            <input type="email" name="txtemail" placeholder="Enter email" required value="<?=$email?>"><br/>
            <input type="text" name="txtusername" placeholder="Enter Username" required value="<?=$uname?>"><br/>
            <input type="password" name="txtpassword" placeholder="Enter Password" required><br/>
            <input type="submit">
            
    </form>
</body>
</html>