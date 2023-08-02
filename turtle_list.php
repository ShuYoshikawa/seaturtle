<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ウミガメDB</title>
</head>

<body>
    <?php
    try {

        $dsn = 'mysql:dbname=seaturtle;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT code,date,research,type,scl,mcl,scw,state,tag,tag2,tag3,tag4,place,remarks,member FROM turtle WHERE 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();


        $dbh = null;

        print 'ウミガメ一覧<br/><br/>';


        print '<form method="post"action="turtle_branch.php">';

        while (true) {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($rec == false) {
                break;
            }

            print '<input type="radio"name="turtlecode"value="' . $rec['code'] . '">';

            print '日付:';
            print $rec['date'];
            print '調査種類:';
            print $rec['research'];
            print 'ウミガメの種類:';
            print $rec['type'];
            print '状態:';
            print $rec['state'];
            print 'タグ番号<前足(左)>:';
            print $rec['tag'];
            print 'タグ番号<前足(右)>:';
            print $rec['tag2'];
            print 'タグ番号<後ろ足(左)>:';
            print $rec['tag3'];
            print 'タグ番号<後ろ足(右)>:';
            print $rec['tag4'];
            print '場所:';
            print $rec['place'];
            print '備考:';
            print $rec['remarks'];
            
            print '<br/>';
        }

        print '<input type="submit"name="disp" value="参照">';

        print '<br/>';
    } catch (Exception $e) {
        print 'エラーが起きています';
        exit();
    }
    ?>
    <a href="turtle_top.php">トップメニューへ</a><br />


</body>

</html>