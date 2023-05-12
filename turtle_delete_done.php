<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ウミガメDB</title>
</head>

<body>
    <?php
    try {
        $turtle_code = $_POST['code'];
       
        $dsn = 'mysql:dbname=seaturtle;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'DELETE FROM turtle WHERE code=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $turtle_code;
      
        $stmt->execute($data);
        $dbh = null;
 
        print '<br/>';
    } catch (Exception $e) {
        print 'エラーが起きています';
        exit();
    }
    ?>

    削除しました<br />
    <br />

    <a href="turtle_list.php">戻る</a>

</body>

</html>