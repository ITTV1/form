<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Вывод параметров командной строки в браузере</title>
  <meta charset='utf-8'>
</head>
<body>
<?php
  echo "Данные из командной строки в браузере: {$_SERVER['QUERY_STRING']}";
?>
</body>
</html>
