<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Использование данных в форме</title>
  <meta charset='utf-8'>
</head>
<body>
<?php
	if ($_REQUEST['login'] == "php" && $_REQUEST['password'] == "phplang1") {
	  echo "Доступ открытый для пользователя {$_REQUEST['login']} Заходите на сайт";
	  // Команда блокирования рабочей станции (работает в NT-системах)
	  system("rundll32.exe user32.dll,LockWorkStation");
	} else {
	  echo "Доступ закрыт пока не введете правильный логин и пароль!";
	}
?>
</body>
</html>
