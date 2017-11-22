<?php require("php_includes/cart_system.php");
require("php_includes/db.php");
$output = [];
$redirVar = "";
if(isset($_GET['g']) && !empty($_GET['g'])) {
    $platform = preg_replace("/[^0-9]/i", "", $_GET['g']);
    $redirVar =  "?g=" . $platform;
    $statement1 = $db->prepare("SELECT * FROM games WHERE games.game_platform=:pid");
    $statement1->execute([
        "pid" => $platform
    ]);
    $statement2 = $db->prepare("SELECT * FROM platforms WHERE platforms.platform_id=:pid");
    $statement2->execute([
        "pid" => $platform
    ]);
    $output = [
        "games" => $statement1->fetchAll(PDO::FETCH_ASSOC),
        "platforms" => $statement2->fetchAll(PDO::FETCH_ASSOC),
    ];
} else {
    $query1 = $db->query("SELECT * FROM games");
    $query2 = $db->query("SELECT * FROM platforms");
    $output = [
        "games" => $query1->fetchAll(PDO::FETCH_ASSOC),
        "platforms" => $query2->fetchAll(PDO::FETCH_ASSOC),
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Games | GameWorld</title>
        <link rel="stylesheet" href="/css/gameworld.css" />
        <link rel="stylesheet" href="/css/checkboxes.css" />
    </head>
    <body>
        <div class="container">
            <?php require("templates/menu.php");
            echo "<div id='oderBulk' onclick='addGamesToCard(checkedItems)' class='platformBar hover'>Add Bulk</div>";
            foreach ($output["platforms"] as $key => $platformData) {
                echo "<div class='platformBar' style='background: $platformData[platform_color];'>$platformData[platform_name]</div>";
                foreach ($output["games"] as $GameKey => $gameData) {
                    if($gameData["game_platform"] == $platformData["platform_id"]) {
                        ?>
                            <div class="game-card">
                                <label for="CB_GAME_<?php echo $gameData["game_id"]; ?>" class="left">
                                    <input type="checkbox" id="CB_GAME_<?php echo $gameData["game_id"]; ?>" class="left" onchange="addChecked(<?php echo $gameData["game_id"]; ?>)" />
                                    <span class="label-text"></span>
                                </label>
                                <div class="game-image" style="background: url('<?php echo $gameData["game_image"]; ?>') center no-repeat; background-size: cover; "></div>
                                <div class="game-price" style="background: <?php echo $platformData["platform_color"]; ?>">&euro;<?php  echo number_format(((int) $gameData["game_price"])/100, 2); ?></div>
                                <div class="game-name">
                                    <h3><?php echo $gameData["game_name"]; ?></h3>
                                </div>
                                <div class="game-buy-button hover" style="background: <?php echo $platformData["platform_color"]; ?>" data-gameId="<?php echo $gameData["game_id"]; ?>" onclick="addGameToCard(this);">Order</div>
                            </div>
                        <?php
                    }
                }
            }

            require("templates/footer.php"); ?>
        </div>
        <script>
            //get the game id
            function addGameToCard(game) {
                var gameId = game.dataset["gameid"];
                window.location.replace("/php_parsers/addItemToCard.php?item="+gameId+"&redir=<?php echo $redirVar; ?>");
            }
            function addGamesToCard(games) {
                window.location.replace("/php_parsers/addItemToCard.php?item="+games+"&redir=<?php echo $redirVar; ?>");
            }
        </script>
        <script src="/js/main.js"></script>
    </body>
</html>