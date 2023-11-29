<?php
error_reporting(E_ERROR | E_PARSE); // shhhhh

require "./crm_utils.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "../html/crm.html";
    addKlient($_POST["imie"], $_POST["email"], (int)$_POST["status"]);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET["module"] == "create") {
    require "../html/crm.html";
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET["module"] == "read") {
    require "./crmread.php";
}
?>