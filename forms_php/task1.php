<?php

error_reporting(0);
echo "<br>";

echo "Меня зовут ". $_POST['fname']. " ".$_POST['sname']. "<br>Мне " .$_POST['age'] . "<br> Я писал на языках <br>";

foreach($_POST['checklist'] as $selected){
    echo "<li>" .$selected. "</li>";
}

echo "Мой любимый язык ".$_POST['fav_lang']. "<br> Моя оценка опросу " .$_POST['grade']. "<br>";
echo $_POST['opinion']. "<br>";

if (!file_exists($_FILES['uploadfile']['tmp_name']) || !is_uploaded_file($_FILES['uploadfile']['tmp_name']))
{
    echo 'No upload';
}
else
{
    echo "Ваш файл был успешно загружен <br>";
    echo "Вы загрузили файл " .$_FILES['uploadfile']['name']. "<br>Он весит ".$_FILES['uploadfile']['size']. "байт"; 
}

?>
