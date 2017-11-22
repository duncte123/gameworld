<?php
if(isset($_GET['item']) && !empty($_GET['item'])) {
    $redir = "";
    if(!empty($_GET['redir'])) $redir = $_GET['redir'];
    require("../php_includes/cart_system.php");
    $item = preg_replace("/[^0-9]/i", "", $_GET['item']);
    array_push($_SESSION["cart"], $item);
    header("location: /games.php$redir");
    die();
} else {
    header("location: /games.php");
    die();
}