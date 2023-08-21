<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>ウミガメDB</title>
    <style>
            body{
                margin:0;
                font-family:Arial,sans-serif;
            }

        </style>
</head>

<body>
    <?php
    try {
        $turtle_date = $_POST['date'];
        $turtle_research = $_POST['research'];
        $turtle_type = $_POST['type'];
        $turtle_scl = $_POST['scl'];
        $turtle_mcl = $_POST['mcl'];
        $turtle_scw = $_POST['scw'];
        $turtle_state = $_POST['state'];
        $turtle_tag = $_POST['tag'];
        $turtle_tag2 = $_POST['tag2'];
        $turtle_tag3 = $_POST['tag3'];
        $turtle_tag4 = $_POST['tag4'];
        $turtle_place = $_POST['place'];
        $turtle_latitude = $_POST['latitude'];
        $turtle_longitude = $_POST['longitude'];
        $turtle_remarks = $_POST['remarks'];
        $turtle_member = $_POST['member'];


        $turtle_date = htmlspecialchars($turtle_date, ENT_QUOTES, 'UTF-8');
        $turtle_research = htmlspecialchars($turtle_research, ENT_QUOTES, 'UTF-8');
        $turtle_type = htmlspecialchars($turtle_type, ENT_QUOTES, 'UTF-8');
        $turtle_scl = htmlspecialchars($turtle_scl, ENT_QUOTES, 'UTF-8');
        $turtle_mcl = htmlspecialchars($turtle_mcl, ENT_QUOTES, 'UTF-8');
        $turtle_scw = htmlspecialchars($turtle_scw, ENT_QUOTES, 'UTF-8');
        $turtle_state = htmlspecialchars($turtle_state, ENT_QUOTES, 'UTF-8');
        $turtle_tag = htmlspecialchars($turtle_tag, ENT_QUOTES, 'UTF-8');
        $turtle_tag2 = htmlspecialchars($turtle_tag2, ENT_QUOTES, 'UTF-8');
        $turtle_tag3 = htmlspecialchars($turtle_tag3, ENT_QUOTES, 'UTF-8');
        $turtle_tag4 = htmlspecialchars($turtle_tag4, ENT_QUOTES, 'UTF-8');
        $turtle_place = htmlspecialchars($turtle_place, ENT_QUOTES, 'UTF-8');
        $turtle_latitude = htmlspecialchars($turtle_latitude, ENT_QUOTES, 'UTF-8');
        $turtle_longitude = htmlspecialchars($turtle_longitude, ENT_QUOTES, 'UTF-8');
        $turtle_remarks = htmlspecialchars($turtle_remarks, ENT_QUOTES, 'UTF-8');
        $turtle_member = htmlspecialchars($turtle_member, ENT_QUOTES, 'UTF-8');

        $dsn = 'mysql:dbname=seaturtle;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO turtle(date,research,type,SCL,MCL,SCW,state,tag,tag2,tag3,tag4,place,latitude,longitude,remarks,member) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = $dbh->prepare($sql);
        $data[] = $turtle_date;
        $data[] = $turtle_research;
        $data[] = $turtle_type;
        $data[] = $turtle_scl;
        $data[] = $turtle_mcl;
        $data[] = $turtle_scw;
        $data[] = $turtle_state;
        $data[] = $turtle_tag;
        $data[] = $turtle_tag2;
        $data[] = $turtle_tag3;
        $data[] = $turtle_tag4;
        $data[] = $turtle_place;
        $data[] = $turtle_latitude;
        $data[] = $turtle_longitude;
        $data[] = $turtle_remarks;
        $data[] = $turtle_member;
        $stmt->execute($data);


        $dbh = null;

        print 'データを追加しました。<br/>';
    } catch (Exception $e) {
        print 'エラーが起きています';
        exit();
    }
    ?>

    <a href="turtle_list.php">完了</a>

</body>

</html>