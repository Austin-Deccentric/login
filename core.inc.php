<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_refer = $_SERVER["HTTP_REFERER"];

function loggedin() {
    if(isset($_SESSION["user_id"]) && !empty($_SESSION['user_id'])) {
        return true;
    }
    return false;
}
?>