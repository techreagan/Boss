<?php 
$names['name'] = 'reagan';
$names['meaning'] = 'noble';
$names['gender'] = 'boy';

try {
  require_once('inc/pdo_connect.php');
  $sql = "INSERT INTO names(name, meaning, gender) 
          VALUES(?, ?, ?)";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(1, $names['name']);
  $stmt->bindParam(2, $names['meaning']);
  $stmt->bindParam(3, $names['gender']);
  $stmt->execute();
  $errorInfo = $stmt->errorInfo();
  if(!$errorInfo[2]) {
    echo 'successful';
  }
} catch (Exception $e) {
  $errors = $e->getMessage();
}

if(isset($errors)) {
  var_dump($errors);
}