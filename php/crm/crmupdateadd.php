<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/podstrony.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>CRM</h1>
    </header>
    <form action="#" method="POST">
        <label for="imie">Imie:</label><br>
        <input type="text" name="imie" placeholder="Spejson"><br>
        <label for="email">E-mail:</label><br>
        <input type="text" name="email"><br>
        <label for="status">Subskrybcja?    </label>
        <input type="checkbox" name="status" value="1">

        <?php

        echo `<input type="text" name="id" value=$workingId>`;

        ?>

        <input type="submit" value="ZMIEN USERA">
    </form>


    <a href="../php/crm.php?module=read">go to crmread</a>
    <br>


    <a href="../php/">go to main</a>
    <footer><p>&copy;DSERP INC</p></footer>
</body>
</html>