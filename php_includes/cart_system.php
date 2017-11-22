<?php
/**
 * Created by PhpStorm.
 * User: dunca
 * Date: 17-Nov-17
 * Time: 13:43
 */

session_start();

if(empty($_SESSION["cart"])) $_SESSION["cart"] = [];

$_SESSION["cart"] = array_unique($_SESSION["cart"]);

$cart_count = count($_SESSION["cart"]);

$cart_display = "";
if($cart_count > 0) $cart_display = 'Items in cart: ' . $cart_count . ' <a href="/cart.php">View your cart</a>';