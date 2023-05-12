<?php

if (isset($_POST['disp']) == true) {
    if (isset($_POST['turtlecode']) == false) {
        header('Location:turtle_ng.php');
        exit();
    }
    $turtle_code = $_POST['turtlecode'];
    header('Location:turtle_disp.php?turtlecode='.$turtle_code);
    exit();
}

if (isset($_POST['edit']) == true) {
    if (isset($_POST['turtlecode']) == false) {
        header('Location:turtle_ng.php');
        exit();
    }
    $turtle_code = $_POST['turtlecode'];
    header('Location:turtle_edit.php?turtlecode='.$turtle_code);
    exit();
}

if (isset($_POST['delete']) == true) {
    if (isset($_POST['turtlecode']) == false) {
        header('Location:turtle_ng.php');
        exit();
    }
    $turtle_code = $_POST['turtlecode'];
    header('Location:turtle_delete.php?turtlecode='.$turtle_code);
    exit();
}
