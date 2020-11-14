<?php
    $fileToMove = $_FILES["file1"]["tmp_name"];
    $destination = "./imgs/" . $_FILES["file1"]["name"];
    if(move_uploaded_file($fileToMove, $destination)){
        echo "The file was uploaded and moved successfully!";
        echo "<img src='$destination'/>";

    }else{
        echo "There was a problem moving the file! <br>";
    }
  }
 ?>
