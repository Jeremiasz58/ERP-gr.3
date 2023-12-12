<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/podstrony.css">
    <script src="../../script/index.js" defer></script>
    <link rel="icon" type="image/x-icon" href="../../img/blacks/logo_b.ico">
    
    <title>DSERP V3 CRM - QUERIES</title>
</head>
<body>
    <header>
        <h1>CRM - QUERIES</h1>
    </header>
    <main>
        <?php
        include "./crm_query_select.html";
        ?>
        <div id="just" style="display: none;">
        <?php
        include "./utils.php";
        
        if($_POST){
        ?><style type="text/css">
                  #just {
                  margin-top:1vw;
                          display: block!important;
                }
                br:first-of-type{
                display:none}
            </style>
            <?php
            switch($_POST["id"]){
                case 1:
                    foreach(qEmail() as $element){
                        echo $element;
                        echo "<br>";
                    }
                    break;
            }
        }


        ?>
        </div>

    </main>
    <a id="backbtn" href="index.php">↶
    </a>
    <!-- <a href="./index.php">go to crm</a>
    <br>
    <a href="../main/index.php">go to main</a> -->

    <footer><p>&copy;DSERP INC</p></footer>
</body>
</html>