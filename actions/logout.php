<?php
    require '../untils/functions.php';

    setcookie("id", "", time() - 1, '/');
    alert('注销成功');
    href('../index.php')
?>