<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ウミガメDB</title>
</head>

<body>
    <?php
    try {
        $turtle_code = $_GET['turtlecode'];

        $dsn = 'mysql:dbname=seaturtle;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT code,date,research,type,scl,mcl,scw,state,tag,place,remarks,member FROM turtle WHERE code=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $turtle_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $turtle_date = $rec['date'];
        $turtle_research = $rec['research'];
        $turtle_type = $rec['type'];
        $turtle_scl = $rec['scl'];
        $turtle_mcl = $rec['mcl'];
        $turtle_scw = $rec['scw'];
        $turtle_state = $rec['state'];
        $turtle_tag = $rec['tag'];
        $turtle_place = $rec['place'];
        $turtle_remarks = $rec['remarks'];
        $turtle_member = $rec['member'];

        $dbh = null;
    } catch (Exception $e) {
        print 'エラーが起きています';
        exit();
    }
    ?>

    情報参照<br />
    <br />
    <?php print $turtle_date;?>
    
    <input type="button" onclick="history.back()" value="戻る">
    </form>
</body>

</html>