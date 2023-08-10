<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ウミガメDB</title>
    </head>
    <body>
    <?php
            $turtle_date=$_POST['date'];
            $turtle_research=$_POST['research'];
            $turtle_type=$_POST['type'];
            $turtle_scl=$_POST['scl'];
            $turtle_mcl=$_POST['mcl'];
            $turtle_scw=$_POST['scw'];
            $turtle_state=$_POST['state'];
            $turtle_tag=$_POST['tag'];
            $turtle_tag2=$_POST['tag2'];
            $turtle_tag3=$_POST['tag3'];
            $turtle_tag4=$_POST['tag4'];
            $turtle_place=$_POST['place'];
            $turtle_latitude=$_POST['latitude'];
            $turtle_longitude=$_POST['longitude'];
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
            $turtle_tag2=htmlspecialchars($turtle_tag2,ENT_QUOTES,'UTF-8');
            $turtle_tag3=htmlspecialchars($turtle_tag3,ENT_QUOTES,'UTF-8');
            $turtle_tag4=htmlspecialchars($turtle_tag4,ENT_QUOTES,'UTF-8');
            $turtle_place=htmlspecialchars($turtle_place,ENT_QUOTES,'UTF-8');
            $turtle_latitude=htmlspecialchars($turtle_latitude,ENT_QUOTES,'UTF-8');
            $turtle_longitude=htmlspecialchars($turtle_longitude,ENT_QUOTES,'UTF-8');
            $turtle_remarks=htmlspecialchars($turtle_remarks,ENT_QUOTES,'UTF-8');
            $turtle_member=htmlspecialchars($turtle_member,ENT_QUOTES,'UTF-8');

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
            print'タグ番号<前足(左)>: ';
            print$turtle_tag;
            print'<br/>';
            print'タグ番号<前足(右)>: ';
            print$turtle_tag2;
            print'<br/>';
            print'タグ番号<後ろ足(左)>: ';
            print$turtle_tag3;
            print'<br/>';
            print'タグ番号<後ろ足(右)>: ';
            print$turtle_tag4;
            print'<br/>';
            print'場所: ';
            print$turtle_place;
            print'<br/>';
            print'緯度 N: ';
            print$turtle_latitude;
            print'<br/>';
            print'経度 E: ';
            print$turtle_longitude;
            print'<br/>';
            print'備考: ';
            print$turtle_remarks;
            print'<br/>';
            print'調査メンバー: ';
            print$turtle_member;
            print'<br/>';
            print'この内容で追加します';
            print'<br/>';


          
            print'<form method="post"action="turtle_add_done.php">';
            print'<input type="hidden"name="date"value="'.$turtle_date.'">';
            print'<input type="hidden"name="research"value="'.$turtle_research.'">';
            print'<input type="hidden"name="type"value="'.$turtle_type.'">';
            print'<input type="hidden"name="scl"value="'.$turtle_scl.'">';
            print'<input type="hidden"name="mcl"value="'.$turtle_mcl.'">';
            print'<input type="hidden"name="scw"value="'.$turtle_scw.'">';
            print'<input type="hidden"name="state"value="'.$turtle_state.'">';
            print'<input type="hidden"name="tag"value="'.$turtle_tag.'">';
            print'<input type="hidden"name="tag2"value="'.$turtle_tag2.'">';
            print'<input type="hidden"name="tag3"value="'.$turtle_tag3.'">';
            print'<input type="hidden"name="tag4"value="'.$turtle_tag4.'">';
            print'<input type="hidden"name="place"value="'.$turtle_place.'">';
            print'<input type="hidden"name="latitude"value="'.$turtle_latitude.'">';
            print'<input type="hidden"name="longitude"value="'.$turtle_longitude.'">';
            print'<input type="hidden"name="remarks"value="'.$turtle_remarks.'">';
            print'<input type="hidden"name="member"value="'.$turtle_member.'">';
            
            print'<br/>';
            print'<input type="button"onclick="history.back()"value="戻る">';
            print'<input type="submit"value="OK">';
            print'</form>';
            
        ?>
    </body>
</html>
