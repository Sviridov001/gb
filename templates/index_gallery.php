<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css" />
    <title>Фотогалерея</title>
    <style>
        article {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px double darkseagreen;
        }
    </style>
</head>
<body>


<?php include __DIR__ . '/header.php' ?>

<div id="content">
    <h1>Фотогалерея</h1>
    <hr>
    <table border='0' width="80%" align="center">
        <?php
       // $numPic=6;
        $z=0;
        for($i=0;$i<($numPic/3);$i++){ ?>
        <tr>
            <?php  for($j=1;($j<=3 && $z<$numPic);$j++,$z++){ ?>
            <td><a href= <?php echo "/img/cat" . ($i*3+$j) . ".jpg";?>><img src=<?php echo "/img/cat" . ($i*3+$j) . ".jpg";?> width="180" alt="котик"></a></td>
            <?php }?>
        </tr>
        <?php }?>
        <?php ?>
    </table>

    <hr>
    <p>Загрузка новой картинки в галерею:</p>

    <form method="POST" enctype="multipart/form-data">
        <input name="upload" type="file">
        <br><br>
        <input type="submit" value="Отправить">
    </form>
</div>

<?php include __DIR__ . '/menu.php' ?>

</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2017
    <!-- Нижняя часть страницы -->
</div>

</body>
</html>