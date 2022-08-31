<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
   
    <?php
        // $isMale = false;
        // $isTall=false;
        // if($isMale && $isTall){
        //     echo "You are male and tall.";
        // }
        // elseif($isMale && !$isTall){
        //     echo ("You are a male but not tall");
        // }
        // elseif(!$isMale && $isTall)
        // {
        //     echo("You are not male but are tall");
        // }
        // else
        // {
        //     echo("You are not male and not tall");
        // }
            
        function getMax($num1,$num2, $num3)
        {
            if($num1>=$num2 && $num1>=$num3)
            {
                return $num1;
            }
            else if($num2>=$num1 && $num2>=$num3)
            {
                return $num2;
            }
            else
            {
                return $num3;
            }
            
        }

        echo getMax(82,94,22);
    ?>
</body>

</html>