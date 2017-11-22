<?php require("php_includes/cart_system.php");
require("php_includes/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Cart | GameWorld</title>
        <link rel="stylesheet" href="/css/gameworld.css" />
    </head>
    <body>
        <div class="container">
            <?php require("templates/menu.php");
            $games = $db->query("SELECT * FROM games");
            $platforms = $db->query("SELECT * FROM platforms");
            $games = $games->fetchAll(PDO::FETCH_ASSOC);
            $platforms = $platforms->fetchAll(PDO::FETCH_ASSOC);
            echo "<div class='platformBar' style='background: limegreen'>Checkout</div>";

            $totalPrice = 0;
            echo "<table class='cart'>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Game</th>
                                <th>Platform</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>";
            foreach ($games as $game) {
                foreach($_SESSION["cart"] as $c) {
                    if($game["game_id"] == $c) {
                        $gamePrice = number_format(((int) $game["game_price"])/100, 2);
                        $totalPrice += $gamePrice;
                        ?>
                        <tr>
                            <td><img src="<?php echo $game["game_image"]; ?>" /></td>
                            <td><?php echo $game["game_name"]; ?></td>
                            <td><?php foreach($platforms as $p){
                                    if($p["platform_id"] == $game["game_platform"]) echo $p["platform_name"];
                                } ?></td>
                            <td><?php echo $game["game_description"]; ?></td>
                            <td>&euro;<?php echo $gamePrice; ?></td>
                        </tr>
                        <?php
                    }
                }
            }
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Total: &euro;<?php echo $totalPrice; ?></td>
            </tr>
            <?php
            echo "</tbody>\n</table>";
            require("templates/footer.php"); ?>
        </div>
    </body>
</html>