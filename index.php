<?php require("php_includes/cart_system.php");
require("php_includes/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Home | GameWorld</title>
        <link rel="stylesheet" href="/css/gameworld.css" />
    </head>
    <body>
        <div class="container">
            <?php require("templates/menu.php"); ?>
            <div class="main-container">
                <div class="main-content">
                    <h1>Welcome to GameWorld</h1>
                    <p>The most complete webshop!</p>
                </div>
            </div>
            <div class="platform-container">
                <?php

                $platforms = $db->query("SELECT * FROM platforms");
                foreach ($platforms->fetchAll(PDO::FETCH_ASSOC) as $p ) {
                    echo '<div class="platform platform'.$p["platform_id"].' hover" onclick="window.location.replace(\'games.php?g='.$p["platform_id"].'\')" style="background: '.$p["platform_color"].';">';
                        echo '<h1><a href="games.php?g='.$p["platform_id"].'">'.$p["platform_name"].'</a></h1>';
                    echo '</div>';
                }
                ?>
                <div class="clearfix"></div>
            </div>
            <?php require("templates/footer.php"); ?>
        </div>
    </body>
</html>