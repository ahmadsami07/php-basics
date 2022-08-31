<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
   
    <?php
        function cube($num){
            return $num*$num*$num;
        }

        $cubeResult=cube(2);

        echo $cubeResult;
    ?>
</body>

</html>