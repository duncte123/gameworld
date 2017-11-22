<?php
/**
 * Created by PhpStorm.
 * User: dunca
 * Date: 15-Nov-17
 * Time: 19:12
 */

require("db_config.php");

$db = new PDO("mysql:host=$db_host;dbname=$db_name;", $db_user, $db_pass);