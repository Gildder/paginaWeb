<?php
$medic = MedicData::getById($_GET["id"]);
$medic->del();
print "<script>window.location='index.php?view=medics';</script>";

?>