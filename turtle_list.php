<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"> <!--Add viewport meta tag for responsiveness -->
    <title>ウミガメDB</title>
    <style>
        body{
            margin:0;
            font-family:Arial,sans-serif;
        }

        @media(min-width:600px){
            div{
                background-color:rgb(100,255,255);
                padding:30px;
                text-align:center;
            }


        }

        @media (max-width: 599px){
            div{
                background-color:rgb(100,255,255);
                padding:15px;
                text-align:center;
            }
        }

        table,
        td,
        th {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        div {
            background-color: rgb(100, 255, 255);
            padding: 30px 30px 30px 30px;
        }
    </style>
</head>

<body>
    <div>ウミガメ一覧</div><br />
    <?php


    $dsn = 'mysql:dbname=seaturtle;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT code,date,research,type,scl,mcl,scw,state,tag,tag2,tag3,tag4,place,remarks,latitude,longitude,member FROM turtle WHERE 1';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dbh = null;
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);

    print '<form method="post"action="turtle_branch.php">';

    if ($rec != false) {
        echo "<table><tr><th> </th><th>No</th><th>日付</th><th>調査名</th><th>種類</th><th>タグ番号(前足の左)</th><th>タグ番号(前足の右)</th><th>タグ番号(後足の左)</th><th>タグ番号(後足の右)</th><th>備考</th></tr>";
        while ($rec = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td><a href='turtle_disp.php?turtlecode=" . $rec["code"] . "'>詳細</a></td>";
            echo "<td>" . $rec["code"] . "</td>";
            echo "<td>" . $rec["date"] . "</td>";
            echo "<td>" . $rec["research"] . "</td>";
            echo "<td>" . $rec["type"] . "</td>";
            echo "<td>" . $rec["tag"] . "</td>";
            echo "<td>" . $rec["tag2"] . "</td>";
            echo "<td>" . $rec["tag3"] . "</td>";
            echo "<td>" . $rec["tag3"] . "</td>";
            echo "<td>" . $rec["remarks"] . "</td>";

            echo "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    ?>
    <a href="turtle_top.php">トップメニューへ</a><br />


</body>

</html>