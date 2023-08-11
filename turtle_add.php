<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ウミガメDB</title>
   
</head>

<body>
    
    <br />
    <form method="post" action="turtle_add_check.php">
        日付<br />
        <input type="date" name="date" style="width:200px"><br />
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
        <input type="SCL" name="scl" style="width:200px" placeholder="SCL"><br />
        最小直甲長(MCL)<br />
        <input type="MCL" name="mcl" style="width:200px" placeholder="MCL"><br />
        標準直甲幅(SCW)<br />
        <input type="SCW" name="scw" style="width:200px" placeholder="SCW"><br />
        状態<br />
        <input type="state" name="state" style="width:200px" placeholder="産卵あり、産卵なし、食害、etc..."><br />
        タグ番号＜前足（左）＞<br />
        <input type="tag" name="tag" style="width:200px" placeholder="タグ番号（左前）"><br />
        タグ番号＜前足（右）＞<br />
        <input type="tag2" name="tag2" style="width:200px" placeholder="タグ番号（右前）"><br />
        タグ番号＜後ろ足（左）＞<br />
        <input type="tag3" name="tag3" style="width:200px" placeholder="タグ番号（左後ろ）"><br />
        タグ番号＜後ろ足（右）＞<br />
        <input type="tag4" name="tag4" style="width:200px" placeholder="タグ番号（右後ろ）"><br />
        場所<br />
        <input type="place" name="place" style="width:200px" placeholder="吹上浜、野間池、etc..."><br />
        緯度 N<br />
        <input type="latitude" name="latitude" style="width:200px" placeholder="数字のみでお願いします"><br />
        経度 E<br />
        <input type="longitude" name="longitude" style="width:200px" placeholder="数字のみでお願いします"><br />
        備考<br />
        <input type="remarks" name="remarks" style="width:200px" placeholder="メモ"><br />
        メンバー<br />
        <input type="member" name="member" style="width:200px" placeholder="その日の調査メンバーは？"><br />
        <br />
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="OK">

    </form>
</body>

</html>