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

        $sql = 'SELECT code,date,research,type,scl,mcl,scw,state,tag,tag2,tag3,tag4,place,remarks,member FROM turtle WHERE code=?';
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
        $turtle_tag2 = $rec['tag2'];
        $turtle_tag3 = $rec['tag3'];
        $turtle_tag4 = $rec['tag4'];
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
    <?php print $turtle_date;?><br/>
    <?php print $turtle_research;?><br/>
    <?php print $turtle_type;?><br/>
    <?php print $turtle_scl;?><br/>
    <?php print $turtle_mcl;?><br/>
    <?php print $turtle_scw;?><br/>
    <?php print $turtle_state;?><br/>
    <?php print $turtle_tag;?><br/>
    <?php print $turtle_tag2;?><br/>
    <?php print $turtle_tag3;?><br/>
    <?php print $turtle_tag4;?><br/>
    <?php print $turtle_place;?><br/>
    <?php print $turtle_remarks;?><br/>
    <?php print $turtle_member;?><br/>
    
    <input type="button" onclick="history.back()" value="戻る">
    </form>
</body>

</html>