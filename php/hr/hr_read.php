<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/podstrony.css">
    <script src="../../script/index.js" defer></script>
    <link rel="icon" type="image/x-icon" href="../../img/blacks/logo_b.ico">
    <title>DSERP V3</title>
</head>
<body>
    <header>
        <h1>DSERP V3 HR read</h1>
    </header>
    <main>

        <br>
        <?php
        
        include "./utils.php";
                ?>
        <div id="just">
        <?php
        foreach(getPracownicy() as $element){




            if(!$element["pracownik_id"]) continue;
            echo $element["pracownik_id"].', '. $element["pracownik_imie"].', '.$element["pracownik_nazwisko"].', '.$element["pracownik_data_ur"].', '.$element["pracownik_clearance"].', '.$element["pracownik_department"]."<br>";

        }
        ?>
        </div>

    </main>
        <a href="index.php" id="backbtn">↶</a>

    <footer><p>&copy;DSERP INC</p></footer>
</body>
</html>