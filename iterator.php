<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


    <?php
    // $index=1;
    // while($index <=5){
    //     echo "$index <br>";
    //     $index++;
    // }


    // $index=6;
    // do{
    //     echo "$index <br>";
    //     $index++;
    // }while($index <=5);


    $luckyNumbers=array(4,8,14,16,23,42);

    for ($i=0; $i<count($luckyNumbers); $i++){
        echo "$luckyNumbers[$i] <br>";
    }
  
    ?>

</body>

</html>