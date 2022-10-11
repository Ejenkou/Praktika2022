<?php

#Задача 1.1

echo $_FILES['image']['size']."Фильм c названием ".$_POST['fname']. ", который ".$_POST['inthecinema']."показывали в кинотеатрах".$_POST['cinema'].$_POST['Zanr'].$_POST['rating']."Кассовые сборы составили ".$_POST['money']."$ и выше, посмотрело фильм примерно ".$_POST['views']." или более людей. Описание его гласит: '".$_POST['descript']."'";