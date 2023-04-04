<?php
  require '../untils/functions.php';
  
  $uid = $_COOKIE['id'];
  $sid = $_POST['sid'];
  $name = $_POST['name'];
  $sub = $_POST['sub'];
  $score = $_POST['score'];
  
  if ($sid == '' || $name == '' || $sub =='' || $score == '') {
    alert('请写填完所有项');
    href('../scoreinfo.php');
    return;
  }

  require '../untils/connect_db.php';

  $sql = "INSERT INTO scoreinfo (sid, name, sub ,score, uid) VALUES ($sid, '$name', '$sub', '$score', $uid)";

  if ($conn->query($sql) === TRUE) {
      href('../scoreinfo.php');
  }
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>  
