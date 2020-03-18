<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Усовершенствованние скрипта блокировки сервера</title>
  <meta charset='utf-8'>
</head>
<body>
<?php if (!isset($_REQUEST['doGo1'])) {?>
  <form action="<?=$_SERVER['SCRIPT_NAME']?>">
  Логин: <input type="text" name="login" value=""><br />
  Пароль: <input type="password" name="password" value=""><br />
  <input type="submit" name="doGo" value="Нажмите кнопку!">
  </form>
<?php } else {
  if ($_REQUEST['login'] == "php" && $_REQUEST['password'] == "phplang1") {
    echo "Доступ открыт для пользователя {$_REQUEST['login']} Заходите на сайт";
    // Команда блокирования рабочей станции (работает в NT-системах)
    system("rundll32.exe user32.dll,LockWorkStation");
  } else {
    echo "Доступ закрыт пока не введете правильный логин и пароль!";
  }
} ?>
</html>
</body>
