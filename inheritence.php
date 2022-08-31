<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    class Chef{
        
        function makeChicken(){
            echo "The chef makes chicken <br>";
        }

        function makeSalad(){
            echo "The chef makes salad <br>";
        }

        function makeSpecialDish(){
            echo "The chef makes bbq ribs <br>";
        }
    }

    class ItalianChef extends Chef{
        function makePasta(){
            echo "The chef makes pasta.";
        }

        function makeSpecialDish(){
            echo "The italian chef makes chicken parm. <br>";
        }
    }
    $chef = new Chef();
    $chef->makeChicken();
    echo "<br>";
    $italianChef = new ItalianChef();
    $italianChef->makeChicken();
    echo "<br>";
    $italianChef->makePasta();
?>
    
</body>
</html>