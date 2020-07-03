<?php
require "core.inc.php";
require "connect.inc.php";

if (loggedin()) {
    echo "You are Logged in"."</br>";
    echo '<a href="logout.php"> Log out</a>';
}else {
    include 'loginform.inc.php';

}

?>