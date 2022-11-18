<?php
$search = $_GET['searchphp'];
if ($search == "google") {
header('Location: https://google.com');
}else{
echo $search;
}
if ($search == "no"){
echo '<BR><strong><font size="7" color="green"></font><font size="7" color="green"> No</font></strong>';
}
?>
