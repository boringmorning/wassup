<?php
session_start();
?>
<body background = "pw.jpg">
    <form method="POST">
        new password:<input type = "password" name = "npw"><br>
        enter new password again: <input type = "password" name = "npw2"><br>
        <input type = "submit" value ="修改密碼">
        <input type = "button" value = "return"  onclick="history.back()">
    </form>
</body>
<?php
    require_once('login.php');
    $dsn = 'mysql:host=localhost;dbname=wassup';
    $dbh = new PDO($dsn,$CFG['username'],$CFG['pw']);
    if(@$_POST['npw'] == @$_POST['npw2']){
        $sth = $dbh->prepare('update  users set pw = ? where id = ?');
        $sth->execute(array(@$_POST['npw'],$_SESSION['login']));
    }
    else echo "<script>alert('兩次密碼不一樣')</script>";
    
?> 