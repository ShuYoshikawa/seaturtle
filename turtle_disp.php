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

        $sql = 'SELECT code,date,research,type,scl,mcl,scw,state,tag,tag2,tag3,tag4,place,latitude,longitude,remarks,member FROM turtle WHERE code=?';
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
        $turtle_latitude = $rec['latitude'];
        $turtle_longitude = $rec['longitude'];
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
    調査日：
    <?php print $turtle_date;?><br/>
    調査：
    <?php print $turtle_research;?><br/>
    種類：
    <?php print $turtle_type;?><br/>
    標準直甲長（SCL）：
    <?php print $turtle_scl;?><br/>
    最小直甲長（MCL）：
    <?php print $turtle_mcl;?><br/>
    標準直甲幅（SCW）：
    <?php print $turtle_scw;?><br/>
    状態：
    <?php print $turtle_state;?><br/>
    タグ番号（左前）：
    <?php print $turtle_tag;?><br/>
    タグ番号（右前）：
    <?php print $turtle_tag2;?><br/>
    タグ番号（左後ろ）：
    <?php print $turtle_tag3;?><br/>
    タグ番号（右後ろ）：
    <?php print $turtle_tag4;?><br/>
    調査場所：
    <?php print $turtle_place;?><br/>
    緯度 N：
    <?php print $turtle_latitude;?><br/>
    経度 E：
    <?php print $turtle_longitude;?><br/>
    備考：
    <?php print $turtle_remarks;?><br/>
    調査メンバー：
    <?php print $turtle_member;?><br/>
    
    <input type="button" onclick="history.back()" value="戻る">
    </form>
</body>

</html>