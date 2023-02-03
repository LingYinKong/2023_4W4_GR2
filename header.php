<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php wp_head(); ?>
<body>
    <header>
        <?php wp_nav_menu(array(
            "menu" => "principal"
        )) ?>
        <h1><a href="<?php echo bloginfo('url') ?>"><?php echo bloginfo('name') ?></a> - <?php echo bloginfo('description') ?></h1>
    </header>