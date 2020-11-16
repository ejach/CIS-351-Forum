<?php
session_start();
//   foreach($_FILES["file1"] as $key => $value){
//     echo $key . " = " . $value . "<br>";
// }
//
// foreach($_FILES as $key => $value){
//     if($value["error"] != UPLOAD_ERR_OK){
//         echo "Error: " . $key . " has error" . $value["error"] . "<br>";
//     }else{
//         echo $key . " uploaded successfully " . "<br>";
//     }
// }


$allowedExt = array("jpg");
$ext = end(explode('.', $_FILES["file1"]["name"]));
if(in_array($ext, $allowedExt)){
  $name = $_SESSION["username"] . '.' . $ext;
  $fileToMove = $_FILES["file1"]["tmp_name"];
  $destination = "/var/www/html/imgs/" . $_SESSION["username"] . "/" ;
  $path = $destination . $name;
  if(move_uploaded_file($fileToMove, $path)){
      echo "The file was uploaded and moved successfully!";
      header("Location: http://talkoforum.ngrok.io/account.php");
  }else{
      echo "There was a problem moving the file! <br>";
  }
}else{
  echo 'please select a jpg file';
}

 ?>
