<?php
/**
 * Created by PhpStorm.
 * User: Fadi
 * Date: 10/8/2015
 * Time: 6:12 PM
 */

$USERS["fadi"] = "fadi";
$USERS["ranin"] = "ranin";
$USERS["william"] = "william";

function check_logged(){
    global $_SESSION, $USERS;
    if (!array_key_exists($_SESSION["logged"],$USERS)) {
        header("Location: login.php");
    };
};
?>