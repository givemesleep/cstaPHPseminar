<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $rows=10;
        $cols=10;
        $multip_table="";
        $multip_table.="<table border=1>";
        for($x=1;$x<=$rows;$x++){
            $multip_table.= "<tr>";
            for($y=1;$y<=$cols;$y++){
                $multip_table.= "<td>".$x*$y."</td>";
            }
            $multip_table.= "</tr>";
        }
        $multip_table.= "</table>";
        echo $multip_table;

    ?>
</body>
</html>