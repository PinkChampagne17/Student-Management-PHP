<?php
    require './until.php';

    setcookie("id", "", time() - 1);
    href('./index.php')
?>