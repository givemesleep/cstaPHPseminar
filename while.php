<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $row=10;
        $cols=10;
        $rowloop=1;
        $strTable="<table border=1>";
        while($rowloop<=$row){
            $strTable.="<tr>";
            $colloop=1;
            while($colloop<=$cols){
                $prod=$rowloop*$colloop;
                $strTable.="<td>{$prod}</td>";
            $colloop++;
            }
            $strTable.="</tr>";
            $rowloop++;
        }
        $strTable.="</table>";
        echo $strTable;
    ?>
</body>
</html>