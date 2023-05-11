<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ウミガメDB</title>
    </head>
    <body>
        <br/>
        <form method="post"action="turtle_add_check.php">
            日付<br/>
            <input type="date"name="date"style="width:200px"><br/>
            調査<br/>
            <input type="research"name="research"style="width:200px"><br/>
            ウミガメの種類<br/>
            <input type="type"name="type"style="width:200px"><br/>
            標準直甲長(SCL)<br/>
            <input type="SCL"name="scl"style="width:200px"><br/>
            最小直甲長(MCL)<br/>
            <input type="MCL"name="mcl"style="width:200px"><br/>
            標準直甲長(SCW)<br/>
            <input type="SCW"name="scw"style="width:200px"><br/>
            状態<br/>
            <input type="state"name="state"style="width:200px"><br/>
            タグ番号<br/>
            <input type="tag"name="tag"style="width:200px"><br/>
            場所<br/>
            <input type="place"name="place"style="width:200px"><br/>
            備考<br/>
            <input type="remarks"name="remarks"style="width:200px"><br/>
            メンバー<br/>
            <input type="member"name="member"style="width:200px"><br/>
            <br/>
            <input type="button"onclick="history.back()"value="戻る">
            <input type="submit"value="OK">        

        </form>
    </body>
</html>
