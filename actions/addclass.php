<?php
  require '../untils/functions.php';
  
  $uid = $_COOKIE['id'];
  $sid = $_POST['sid'];
  $name = $_POST['name'];
  $sc = $_POST['sc'];
  $class = $_POST['class'];
  
  if ($sid == '' || $name == '' || $sc == '' || $class=='' ) {
    alert('请写填完所有项');
    href('../classinfo.php');
    return;
  }

  require '../untils/connect_db.php';

  $sql = "INSERT INTO classinfo (sid, name, sc, class, uid) VALUES ($sid, '$name', '$sc', '$class', $uid)";

  if ($conn->query($sql) === TRUE) {
      href('../classinfo.php');
  }
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>  
