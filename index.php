<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fullname="Harold Lucero";
        $prelim=80;
        $midterm=75;
        $finals=90;
        $average = ($prelim+$midterm+$finals)/3;
        echo "The average is : {$average}<br/>";
        $average -=20;
        $equiv=0;
        echo "The average is : {$average}";
        //$remarks=$average>=75?"PASSED":"FAILED";
        if($average>=75){ 
           $equiv=3;
            //$remarks="PASSED";
        }elseif($average>=78){
            $equiv=2.75;
            //$remarks="PASSED";
        } else {
          //  $remarks="FAILED";
            $equiv=5;
        }

        //echo $remarks;
        echo $equiv;

        switch($equiv){
            case 1: 
                $remarks="PASSED";
                break;
            case 2: 
                $remarks="PASSED";
                break;
            case 5: 
                $remarks="FAILED";
                break;
        }
        echo $remarks;

    ?>
</body>
</html>