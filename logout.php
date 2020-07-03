<?php
require "core.inc.php";
session_destroy();
header('Location: '.$http_refer);

echo $http_refer;
?>