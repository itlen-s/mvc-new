<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <p>Главная страница</P>

<!-- <p> Имя:  <?php echo $name?></p> -->
<!-- <p> Возраст: <?php echo $age?></p> -->

    <?php
    foreach ($news as $val):
    // debug($news); 
    ?>
    <h3><?=$val['title']; ?></h3>
    <p><?=$val['description']; ?></p>
    <hr>
    <?php endforeach; ?>

</body>
</html>