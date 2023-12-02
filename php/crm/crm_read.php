<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/index.css">
    <script src="../../script/index.js" defer></script>
    <link rel="icon" type="image/x-icon" href="../img/blacks/logo_b.ico">
    <title>DSERP V3</title>
</head>
<body>
    <header>
        <h1>DSERP V3 read</h1>
    </header>
    <main>
        <p>TEMPLATE: id --- imie --- email --- status</p>
        <br>
        <?php
        
        include "./utils.php";
        
        foreach(getKlient() as $element){
            echo $element["klient_id"].', '. $element["klient_imie"].', '.$element["klient_email"].', '.(int)$element["klient_status"]."<br>";
        }
        
        ?>
    </main>
    <a href="./index.php">go to crm</a>
    <br>
    <a href="../main/index.php">go to main</a>

    <footer><p>&copy;DSERP INC</p></footer>
</body>
</html>