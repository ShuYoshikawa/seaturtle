<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ウミガメDB</title>
    </head>
    <body>
        <?php
        try{
            $turtle_date=$_POST['date'];
            $turtle_research=$_POST['research'];
            $turtle_type=$_POST['type'];
            $turtle_scl=$_POST['scl'];
            $turtle_mcl=$_POST['mcl'];
            $turtle_scw=$_POST['scw'];
            $turtle_state=$_POST['state'];
            $turtle_tag=$_POST['tag'];
            $turtle_place=$_POST['place'];
            $turtle_remarks=$_POST['remarks'];
            $turtle_member=$_POST['member'];


            $turtle_date=htmlspecialchars($turtle_date,ENT_QUOTES,'UTF-8');
            $turtle_research=htmlspecialchars($turtle_research,ENT_QUOTES,'UTF-8');
            $turtle_type=htmlspecialchars($turtle_type,ENT_QUOTES,'UTF-8');
            $turtle_scl=htmlspecialchars($turtle_scl,ENT_QUOTES,'UTF-8');
            $turtle_mcl=htmlspecialchars($turtle_mcl,ENT_QUOTES,'UTF-8');
            $turtle_scw=htmlspecialchars($turtle_scw,ENT_QUOTES,'UTF-8');
            $turtle_state=htmlspecialchars($turtle_state,ENT_QUOTES,'UTF-8');
            $turtle_tag=htmlspecialchars($turtle_tag,ENT_QUOTES,'UTF-8');
            $turtle_place=htmlspecialchars($turtle_place,ENT_QUOTES,'UTF-8');
            $turtle_remarks=htmlspecialchars($turtle_remarks,ENT_QUOTES,'UTF-8');
            $turtle_member=htmlspecialchars($turtle_member,ENT_QUOTES,'UTF-8');

            $dsn='mysql:dbname=seaturtle;host=localhost;charset=utf8';
            $user='root';
            $password='';
            $dbh=new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql='INSERT INTO turtle(date,research,type,SCL,MCL,SCW,state,tag,place,remarks,member) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
            $stmt=$dbh->prepare($sql);
            $data[]=$turtle_date;
            $data[]=$turtle_research;
            $data[]=$turtle_type;
            $data[]=$turtle_scl;
            $data[]=$turtle_mcl;
            $data[]=$turtle_scw;
            $data[]=$turtle_state;
            $data[]=$turtle_tag;
            $data[]=$turtle_place;
            $data[]=$turtle_remarks;
            $data[]=$turtle_member;

            $dbh=null;
            
            print'日付: ';
            print$turtle_date;
            print'<br/>';
            print'調査: ';
            print$turtle_research;
            print'<br/>';
            print'ウミガメの種類: ';
            print$turtle_type;
            print'<br/>';
            print'SCL: ';
            print$turtle_scl;
            print'<br/>';
            print'MCL: ';
            print$turtle_mcl;
            print'<br/>';
            print'SCW: ';
            print$turtle_scw;
            print'<br/>';
            print'状態: ';
            print$turtle_state;
            print'<br/>';
            print'タグ番号: ';
            print$turtle_tag;
            print'<br/>';
            print'場所: ';
            print$turtle_place;
            print'<br/>';
            print'備考: ';
            print$turtle_remarks;
            print'<br/>';
            print'調査メンバー: ';
            print$turtle_member;
            print'<br/>';
            print'この内容で追加します';
            print'<br/>';
        
        }
        catch(Exception $e)
        {
            print'エラーが起きています';
            exit();
        }
        ?>

        <a href="staff_list.php">戻る</a>
              
    </body>
</html>