<?php
  require '../untils/functions.php';
  
  $uid = $_COOKIE['id'];
  $sid = $_POST['sid'];
  $name = $_POST['name'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  
  if ($sid == '' || $name == '' || $age == '') {
    alert('请写填完所有项');
    href('../home.php');
    return;
  }

  require '../untils/connect_db.php';

  $sql = "INSERT INTO student (sid, name, age, sex, uid) VALUES ($sid, '$name', $age, '$sex', $uid)";

  if ($conn->query($sql) === TRUE) {
      href('../home.php');
  }
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>  