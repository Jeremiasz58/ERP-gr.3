<?php

require "./crm_utils.php";
require "../html/crm.html";

echo "kutas";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    addKlient($_POST["imie"], $_POST["email"], $_POST["status"]);
}
?>