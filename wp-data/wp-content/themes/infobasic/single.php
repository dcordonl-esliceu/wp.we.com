<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoserras la web</title>
</head>
<body>
    <h1>Bienvenidos a Motoserras la web</h1>
    <p>Este es el tema Infobasic desarrollado por Dleon.</p>

<?php
    while(have_posts()) {
        the_post();
        ?>
    <h2><a href="<?=the_permalink()?>"><?=the_title()?></a></h2>
    <p><?=the_content()?></p>
    <?php
    }
?>

</body>
</html>