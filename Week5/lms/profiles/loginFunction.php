<?php

session_start();

function secure(){
    if(!isset($_SESSION['id'])){
      header('Location: profiles/login.php');
    }
}

function uploadImage($file) {
  $targetDir = "../uploads";
  if (!is_dir($targetDir)) {
      mkdir($targetDir, 0777, true);
  }

  $targetFile = $targetDir . basename($file["name"]);
  move_uploaded_file($file["tmp_name"], $targetFile);
  return $targetFile;
}

?>

