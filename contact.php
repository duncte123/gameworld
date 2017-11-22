<?php require("php_includes/cart_system.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Contact | GameWorld</title>
        <link rel="stylesheet" href="/css/gameworld.css" />
    </head>
    <body>
        <div class="container">
            <?php require("templates/menu.php"); ?>
                <form action="/php_parsers/sendMail.php" id="mailForm" onsubmit="sendMailForm(); return false;" method="post" autocomplete="off">
                    <div class="form">
                        <div class="form-group">
                            <label for="n">Name: </label>
                            <input type="text" id="n" name="n" placeholder="John Doe" required />
                        </div>
                        <div class="form-group">
                            <label for="e">Email: </label>
                            <input type="email" name="e" id="e" placeholder="someone@example.com" required />
                        </div>
                        <div class="form-group">
                            <label for="m">Your message:</label>
                            <textarea name="m" id="m" required cols="52" rows="10"></textarea>
                        </div>
                        <p><span id="ajaxStatus"></span> <input type="submit" id="submit" value="Send" /></p>
                    </div>
                </form>
            <?php require("templates/footer.php"); ?>
        </div>
        <script src="/js/main.js"></script>
    </body>
</html>