<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ウミガメDB</title>
</head>

<body>
    <?php
    $turtle_code = $_POST['code'];
    $turtle_date = $_POST['date'];
    $turtle_research = $_POST['research'];
    $turtle_type = $_POST['type'];
    $turtle_scl = $_POST['scl'];
    $turtle_mcl = $_POST['mcl'];
    $turtle_scw = $_POST['scw'];
    $turtle_state = $_POST['state'];
    $turtle_tag = $_POST['tag'];
    $turtle_place = $_POST['place'];
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
    $turtle_place = htmlspecialchars($turtle_place, ENT_QUOTES, 'UTF-8');
    $turtle_remarks = htmlspecialchars($turtle_remarks, ENT_QUOTES, 'UTF-8');
    $turtle_member = htmlspecialchars($turtle_member, ENT_QUOTES, 'UTF-8');

    print '日付: ';
    print $turtle_date;
    print '<br/>';
    print '調査: ';
    print $turtle_research;
    print '<br/>';
    print 'ウミガメの種類: ';
    print $turtle_type;
    print '<br/>';
    print 'SCL: ';
    print $turtle_scl;
    print '<br/>';
    print 'MCL: ';
    print $turtle_mcl;
    print '<br/>';
    print 'SCW: ';
    print $turtle_scw;
    print '<br/>';
    print '状態: ';
    print $turtle_state;
    print '<br/>';
    print 'タグ番号: ';
    print $turtle_tag;
    print '<br/>';
    print '場所: ';
    print $turtle_place;
    print '<br/>';
    print '備考: ';
    print $turtle_remarks;
    print '<br/>';
    print '調査メンバー: ';
    print $turtle_member;
    print '<br/>';
    print 'この内容であってますか？あってたら修正します。';
    print '<br/>';



    print '<form method="post"action="turtle_edit_done.php">';
    print '<input type="hidden"name="code"value="' . $turtle_code . '">';
    print '<input type="hidden"name="date"value="' . $turtle_date . '">';
    print '<input type="hidden"name="research"value="' . $turtle_research . '">';
    print '<input type="hidden"name="type"value="' . $turtle_type . '">';
    print '<input type="hidden"name="scl"value="' . $turtle_scl . '">';
    print '<input type="hidden"name="mcl"value="' . $turtle_mcl . '">';
    print '<input type="hidden"name="scw"value="' . $turtle_scw . '">';
    print '<input type="hidden"name="state"value="' . $turtle_state . '">';
    print '<input type="hidden"name="tag"value="' . $turtle_tag . '">';
    print '<input type="hidden"name="place"value="' . $turtle_place . '">';
    print '<input type="hidden"name="remarks"value="' . $turtle_remarks . '">';
    print '<input type="hidden"name="member"value="' . $turtle_member . '">';

    print '<br/>';
    print '<input type="button"onclick="history.back()"value="戻る">';
    print '<input type="submit"value="OK">';
    print '</form>';

    ?>
</body>

</html>