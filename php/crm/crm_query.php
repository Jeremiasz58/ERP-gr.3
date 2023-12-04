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
        <h1>DSERP V3 CRM QUERY</h1>
    </header>
    <main>
        <?php
        
        include "./utils.php";
        
        // 1 - qEmail
        if($_POST){
            switch($_POST["id"]){
                case 1:
                    foreach(qEmail() as $element){
                        echo $element."<br>";
                    }
                    break;
            }
        }

        include "./crm_query_select.html";

        ?>
    </main>
    <a href="./index.php">go to crm</a>
    <br>
    <a href="../main/index.php">go to main</a>

    <footer><p>&copy;DSERP INC</p></footer>
</body>
</html>