<?php

  define("UPLOAD_DIR", "/afs/cad/u/j/c/jc675/public_html/UPLOADS/");
  
  if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
        }
    
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $i = 0;
    $parts = pathinfo($name);
    
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
        }
    
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
    
    if (!$success) {
        echo "<p>Unable to save file.</p>";
        print_r($_FILES);
        exit;
        }
    
    chmod(UPLOAD_DIR . $name, 0644);
    echo 'Uploaded file:' . $name;
    
    }

?>