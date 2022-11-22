<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    <?php
    $my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
    $check = htmlspecialchars($_POST['check'], ENT_QUOTES);
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES);
    ?>
    <p>私の名前は、<?php echo $my_name; ?></p>
    <p>ご希望商品は、<?php echo $check; ?></p>
    <p>注文数は、<?php echo $number; ?></p>
</body>
</html>
