<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
if ($formfield == "username") {
if (strlen($value) < 4) {
echo "Username too short";
} else {
echo "<span>Username ok!</span>";
}
}
?>
