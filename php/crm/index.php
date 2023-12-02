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
        <h1>DSERP V3 crm</h1>
    </header>
    <main>
        <section id="CRM" class="btn">
            <img src="" alt="create">
            <p>CREATE</p>
        </section>
        <section id="SPR" class="btn">
            <img src="" alt="read">
            <p>READ</p>
        </section>
        <section id="HR" class="btn">
            <img src="" alt="update">
            <p>UPDATE</p>
        </section>
    </main>

    <a href="./crm_create.php">go to create</a>
    <br>
    <a href="./crm_read.php">go to read</a>
    <br>
    <a href="./crm_update.php">go to update</a>
    <br>
    <a href="./crm_delete.php">go to delete</a>
    <br>
    <a href="../main/index.php">go to main</a>
    
    <footer><p>&copy;DSERP INC</p></footer>

    <?php

        include "./utils.php";
        print_r(getKlient());    
    ?>
</body>
</html>
