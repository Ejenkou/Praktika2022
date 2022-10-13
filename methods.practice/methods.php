<?php

#Задача 1.5

if ($_FILES && $_FILES["image"]["error"]== UPLOAD_ERR_OK)
{
    $name = $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], $name);
    echo "Файл загружен:".$_FILES['image']['name'].$_FILES['image']['type'];
    echo " - "." Фильм под названием ".$_POST['fname']. ", который ".$_POST['inthecinema']."показывали в кинотеатрах".$_POST['cinema1'].$_POST['cinema2'].$_POST['cinema3'].$_POST['Zanr'].$_POST['rating']."Кассовые сборы составили ".$_POST['money']."$ и выше, посмотрело фильм примерно ".$_POST['views']." или более людей. Описание его гласит: '".$_POST['descript']."'";
}


