<?php
?>
<body background = "pw.jpg">
<form method="POST">
ID:<input type = "text" name = "id"><br>
when is your birthday<input type = "date" name = "security"><br>
new password:<input type = "password" name = "pw"><br>
enter new password again: <input type = "password" name = "pw2"><br>
<input type = "submit" value ="finish"><input type = "button" value = "return" onclick = "javascript:location.href='index.php'">
</form>
</body>
<?php
    require_once('login.php');
    $dsn = 'mysql:host=localhost;dbname=s106062131';
    $dbh = new PDO($dsn,$CFG['username'],$CFG['pw']);
    $sth = $dbh->prepare('select count(*) as r from users where id = ? and date = ? ;');
    $sth->execute(array($_POST['id'],$_POST['security']));
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    if($result['r'] == 1 && $_POST['pw'] == $_POST['pw2']){
        $sth = $dbh->prepare('update  users set pw = ? where id = ?');
        $sth->execute(array($_POST['pw'],$_POST['id']));
    }
?> 