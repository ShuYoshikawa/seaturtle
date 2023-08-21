<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Add viewport meta tag for responsiveness -->

    <title>ウミガメDB</title>
    <style>
        body{
            margin:0;
            font-family:Arial,sans-serif;
        }

        @media(min-width:600px){
            
            input{
                width:200px;
                margin:0 auto;
            
            }

            form{
                width:200px;
                margin:0 auto;
            }        
        }

        @media(max-width:599px){
            input{
                width:200px;
                margin:0 auto;
            }

            form{
                width:200px;
                margin:0 auto;
            }
        }
    </style> 
</head>

<body>
    
    <br />
    <form method="post" action="turtle_add_check.php">
        日付<br />
        <input type="date" name="date" ><br />
        調査<br />
        <select name="research">
            <option value="産卵調査">産卵調査</option>
            <option value="混獲調査">混獲調査</option>
            <option value="ストランディング調査">ストランディング調査</option>
            <option value="その他">その他</option>
        </select><br />
        ウミガメの種類<br />
        <select name="type">
            <option value="アカウミガメ">アカウミガメ</option>
            <option value="アオウミガメ">アオウミガメ</option>
            <option value="その他">その他</option>
        </select><br />
        標準直甲長(SCL)<br />
        <input type="SCL" name="scl"  placeholder="SCL"><br />
        最小直甲長(MCL)<br />
        <input type="MCL" name="mcl"  placeholder="MCL"><br />
        標準直甲幅(SCW)<br />
        <input type="SCW" name="scw"  placeholder="SCW"><br />
        状態<br />
        <input type="state" name="state"  placeholder="産卵あり、産卵なし、食害、etc..."><br />
        タグ番号＜前足（左）＞<br />
        <input type="tag" name="tag"  placeholder="タグ番号（左前）"><br />
        タグ番号＜前足（右）＞<br />
        <input type="tag2" name="tag2"  placeholder="タグ番号（右前）"><br />
        タグ番号＜後ろ足（左）＞<br />
        <input type="tag3" name="tag3"  placeholder="タグ番号（左後ろ）"><br />
        タグ番号＜後ろ足（右）＞<br />
        <input type="tag4" name="tag4"  placeholder="タグ番号（右後ろ）"><br />
        場所<br />
        <input type="place" name="place"  placeholder="吹上浜、野間池、etc..."><br />
        緯度 N<br />
        <input type="latitude" name="latitude"  placeholder="数字のみでお願いします"><br />
        経度 E<br />
        <input type="longitude" name="longitude"  placeholder="数字のみでお願いします"><br />
        備考<br />
        <input type="remarks" name="remarks"><br />
        メンバー<br />
        <input type="member" name="member"  placeholder="その日の調査メンバーは？"><br />
        <br />
        <button type="button" onclick="location.href='turtle_top.php'">戻る</button>
        <button type="submit" onclick="location.href='turtle_add_done.php'">OK</button>

    </form>
</body>

</html>