<?php
if (!isset($_GET['input'])) {
    $json = file_get_contents('php://input');
} else {
    $json = $_GET['input'];
}
header('content-type:text/json');
echo $json;
?>
