<?php
class sanitize {
  public function sanEmail($fieldname) {
    if(isset($_POST[$fieldname])) {
      return filter_var($_POST[$fieldname], FILTER_SANITIZE_EMAIL);
    }
  }
  public function sanURL($fieldname) {
    if(isset($_POST[$fieldname])) {
      return filter_var($_POST[$fieldname], FILTER_SANITIZE_URL);
    }
  }

}
class validate {
  public function valEmail($fieldname) {
    $email = filter_var($_POST[$fieldname], FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return TRUE;
    } else {
      return FALSE;
    }

  }
  public function valURL($fieldname) {
    $url = filter_var($_POST[$fieldname], FILTER_SANITIZE_URL);
    // Adds http to beginning of URL if its not there
    //if($parts = parse_url($url)) {
      //if(!isset($parts["scheme"])) {
        //$url = "http://$url";
      //}
    //}
    if (filter_var($url, FILTER_VALIDATE_URL)) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
  
}
// Sanitize examples
$san = new sanitize();
echo $san->sanEmail('email');
echo '<br>';
echo $san->sanURL('url');
// Validate examples
$val = new validate();
echo '<br>';
if($val->valEmail('email')) {
  echo 'This email is valid';
}
echo '<br>';
if($val->valURL('url')) {
  echo 'This URL is valid';
}

?>
