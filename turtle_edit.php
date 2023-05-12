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

    修正<br />
    <br />
    <form method="post" action="turtle_edit_check.php">
        <input type="hidden" name="code" value="<?php print $turtle_code; ?>">
  
    <input type="text" name="date" style="width:200px" value="<?php print $turtle_date; ?>"><br />
    <input type="text" name="research" style="width:200px" value="<?php print $turtle_research; ?>"><br />
    <input type="text" name="type" style="width:200px" value="<?php print $turtle_type; ?>"><br />
    <input type="text" name="scl" style="width:200px" value="<?php print $turtle_scl; ?>"><br />
    <input type="text" name="mcl" style="width:200px" value="<?php print $turtle_mcl; ?>"><br />
    <input type="text" name="scw" style="width:200px" value="<?php print $turtle_scw; ?>"><br />
    <input type="text" name="state" style="width:200px" value="<?php print $turtle_state; ?>"><br />
    <input type="text" name="tag" style="width:200px" value="<?php print $turtle_tag; ?>"><br />
    <input type="text" name="place" style="width:200px" value="<?php print $turtle_place; ?>"><br />
    <input type="text" name="remarks" style="width:200px" value="<?php print $turtle_remarks; ?>"><br />
    <input type="text" name="member" style="width:200px" value="<?php print $turtle_member; ?>"><br />

    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="OK">
    </form>
</body>

</html>