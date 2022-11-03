<?php
$cot = $_GET['cot'];
if ($cot == "google.com") {
header('Location: https://google.com');
}else {
header('Location: index.htm');
}
if ($cot == "intro") {
header('Location: index.htm');
}
