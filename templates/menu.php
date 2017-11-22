<?php
/**
 * Created by PhpStorm.
 * User: dunca
 * Date: 15-Nov-17
 * Time: 13:59
 */

function printMenu() {
    //Get the current page name that we are on
    $currentPage = basename($_SERVER['PHP_SELF']);
    //Create an array with buttons for the menu
    $pages = [
        "Home" => "index.php",
        "About us" => "about.php",
        "Contact" => "contact.php"
    ];
    //Loop over them and create buttons
    foreach($pages as $pageName => $fileName) {
        $li = "li";
        //If we are on a page that is in the menu give it the active class
        if($currentPage == $fileName) {
            $li .= ' class="active"';
        }
        echo "<$li><a href='/$fileName'>$pageName</a></li>";
    }
}
?>
<header>
    <h1 class="logo hover" onclick="window.location.replace('/')"><span>G</span>ameWorld.</h1>
    <!-- cart-display is floating right -->
    <div class="cart-display">
        <p><?php echo $cart_display; ?></p>
    </div>
    <div class="clearfix"></div>
    <nav class="nav">
        <ul class="nav nav-items">
            <?php printMenu(); ?>
        </ul>
    </nav>
</header>
