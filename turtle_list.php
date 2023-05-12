<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ウミガメDB</title>
    </head>
    <body>
        <?php
        try{
           
            $dsn='mysql:dbname=seaturtle;host=localhost;charset=utf8';
            $user='root';
            $password='';
            $dbh=new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           
            $sql='SELECT code,date,research,type,scl,mcl,scw,state,tag,place,remarks,member FROM turtle WHERE 1';
            $stmt=$dbh->prepare($sql);
            $stmt->execute();


            $dbh=null;
            
           print'ウミガメ一覧<br/><br/>';
           
           
           print'<form method="post"action="turtle_branch.php">';
           
           while(true)
           {
            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }

            print'<input type="radio"name="turtlecode"value="'.$rec['code'].'">';
            print $rec['date'];
            print $rec['research'];
            print $rec['type'];
            print $rec['scl'];
            print $rec['mcl'];
            print $rec['scw'];
            print $rec['state'];
            print $rec['tag'];
            print $rec['place'];
            print $rec['remarks'];
            print $rec['member'];

            print'<br/>';
           }

        print'<input type="submit"name="edit" value="修正">';
        print'<input type="submit"name="delete"value="削除">';
        print'<br/>';
        }
        catch(Exception $e)
        {
            print'エラーが起きています';
            exit();
        }
        ?>

    </body>
</html>



