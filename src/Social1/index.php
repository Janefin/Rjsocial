<!doctype html>
<html lang="th">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width;initail-scale=1">
        <title>SICC Social</title>
    </head>
    <body>
        <?php 
        if(!isset($_GET['page'])) 
         $_GET['page'] = 'login';
        include $_GET['page'].'.php';
        ?>
    </body>
</html>