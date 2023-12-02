<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/podstrony.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>CRM</h1>
    </header>

    <?php

        require "./utils.php";

        if($_POST){
            deleteKlient($_POST["id"]);
        }



    ?>

    <form action="#" method="POST">
        <label for="id">Id:</label><br>
        <input type="text" name="id">
        <br>
        <input type="submit" value="USUN USERA">
    </form>


    <a href="./index.php">go to crm</a>
    <br>


    <a href="../main/index.php/">go to main</a>
    <footer><p>&copy;DSERP INC</p></footer>
</body>
</html>