<?php
//$destination = $_SERVER['DOCUMENT_ROOT']. '/img';
$destination = __DIR__ . '/img';
$fileCountPic =  __DIR__ . '/pic.txt';
$tmp = file($fileCountPic);
$numPic = $tmp[0];
if (count($_FILES)!=0) {
    if (is_uploaded_file($_FILES['upload']['tmp_name'])) {
        $fileTempName = $_FILES['upload']['tmp_name'];

        //Проверяем тип файла и меняем его имя в соответствии
        if ($_FILES['upload']['type'] == "image/jpeg") {
            $numPic = $numPic + 1;
            $newFilename = $destination . '/cat' . $numPic . '.jpg';
            //Перемещаем файл из временной папки в указанную
            move_uploaded_file($fileTempName, $newFilename);
            file_put_contents($fileCountPic, $numPic);
            echo "Новый фаил $newFilename";
        }
    }
}
include __DIR__ . '/templates/index_gallery.php';
