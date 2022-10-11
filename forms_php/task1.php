<?php

echo "<br>";
error_reporting(0);

// Задача 1.1
echo "Меня зовут ". $_POST['fname']. " ".$_POST['sname']. "<br>Мне " .$_POST['age'] . "<br> Я писал на языках <br>";
    
foreach($_POST['checklist'] as $selected){
    echo "<li>" .$selected. "</li>";
}

echo "Мой любимый язык ".$_POST['fav_lang']. "<br>";
echo $_POST['opinion']. "<br>";

echo "Вы загрузили файл " .$_FILES['uploadfile']['name']. "<br>Он весит ".$_FILES['uploadfile']['size']. "байт"; 
     
 ?>
