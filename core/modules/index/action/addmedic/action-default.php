<?php

$m = new MedicData();
$m->name = $_POST["name"];
$m->lastname = $_POST["lastname"];
$m->address = $_POST["address"];
$m->email = $_POST["email"];
$m->phone = $_POST["phone"];
$m->category_id = $_POST["category_id"];
$m->add();

Core::redir("./index.php?view=medics");
?>