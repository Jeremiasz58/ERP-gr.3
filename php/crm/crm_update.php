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

        if(!$_POST){
            include "./crm_update_search.html";
        }
        elseif($_POST["mode"] == "search"){

            if(getKlient()[findKlient($_POST["id"])]){
                $imie = getKlient()[findKlient($_POST["id"])]["klient_imie"];
                $email = getKlient()[findKlient($_POST["id"])]["klient_email"];
                $status = (int)getKlient()[findKlient($_POST["id"])]["klient_status"];

                include "./crm_update_add.php";
            }
            else{
                echo "nie ma takiego usera";
            }
        }
        elseif($_POST["mode"] == "add"){
            updateKlient($_POST["id"], $_POST["imie"], $_POST["email"], $_POST["status"]);
            include "./crm_update_search.html";

        }


    ?>



    <a href="./index.php">go to crm</a>
    <br>
    <a href="../main/index.php">go to main</a>



    <footer><p>&copy;DSERP INC</p></footer>
</body>
</html>