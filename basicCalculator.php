<!DOCTYPE html>

<head>
    <meta charset="UTF-8">

    <title>
        Document

    </title>
</head>

<body>

    <form action="basicCalculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
    </form>


    Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>



</body>

</html>