<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/index.css">
    <script src="../../script/crm_index.js" defer></script>
    <link rel="icon" type="image/x-icon" href="../../img/blacks/logo_b.ico">
    <title>DSERP V3 CRM</title>
</head>
<body>
    <header>
        <h1>CRM</h1>
    </header>
    <main>
        <section id="CRM_c" class="btn">
            <img src="../../img/blacks/crm_create.jpg" alt="create">
            <p>CREATE</p>
        </section>
        <section id="CRM_r" class="btn">
            <img src="../../img/blacks/crm_read.jpg" alt="read">
            <p>READ</p>
        </section>
        <section id="CRM_u" class="btn">
            <img src="../../img/blacks/crm_update.jpg" alt="update">
            <p>UPDATE</p>
        </section>
        <section id="CRM_d" class="btn">
            <img src="../../img/blacks/crm_delete.jpg" alt="delete">
            <p>DELETE</p>
        </section>
        <section id="CRM_q" class="btn">
            <img src="../../img/blacks/crm_queries.jpg" alt="queries">
            <p>QUERIES</p>
        </section>
        
    </main>
    <section id="back">
            <p id="backbtn" >↶</p>
        </section>
    <!-- <a href="./crm_create.php">go to create</a>
    <br>
    <a href="./crm_read.php">go to read</a>
    <br>
    <a href="./crm_update.php">go to update</a>
    <br>
    <a href="./crm_delete.php">go to delete</a>
    <br>-->
    <!-- <a href="./crm_query.php">go to query</a>  -->
    
    <footer ><p>&copy;DSERP INC</p></footer>

    <?php

        include "./utils.php";
        updateKlient(29, "Albrech", "Hochenzollern@1911.com", 1);
        // print_r(getKlient());    
    ?>
</body>
</html>
