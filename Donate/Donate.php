<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://codingapp.net/Donate/style.css">
    <link rel="icon" type="image/x-icon" href="https://codingapp.net/Donate/coffee.ico">
    <title>Donate ☕</title>
</head>
<body>
    <div class="page">
        <form action="https://www.paypal.com/donate" method="post" target="_top">
            <input type="hidden" name="hosted_button_id" value="2F3KTHC27VMTC" />
            <input type="image" src="https://www.paypalobjects.com/en_US/IT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" style="width: 350px;" class="paypal_img" />
            <img alt="" border="0" src="https://www.paypal.com/en_IT/i/scr/pixel.gif" width="1" height="1" />
        </form>
    </div>
    <a class="back" href='<?php echo $_SERVER['HTTP_REFERER']?>'>GO BACK</a>
</body>
</html>
