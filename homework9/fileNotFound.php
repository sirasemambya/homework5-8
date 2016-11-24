<?php
  
  class FileExistException extends Exception{}
  class FileReadException extends Exception{}
  class FileWriteException extends Exception{}
  $csv_file = 'fileDoesntExist.csv';
  try{
    try{
      $data = file_get_contents($csv_file);
      if($data === false){
        throw new Exception();
        }
      }
  catch(Exception $e){
    if(!file_exists($csv_file)){
      throw new FileExistException($csv_file." //// The file you are looking for does not exist. ////");
    }
    elseif(!is_writable($csv_file)){
      throw new FileWriteException($csv_file."File cannot be overwritten.");
    }
    else{
      throw new Exception("Error");
    }
  }
}
catch(FileExistException $fE){
  echo $fE->getMessage();
  error_log($fE->getTraceAsString());
}
catch(FileReadException $fR){
  echo $fR->getMessage();
  error_log($fR->getTraceAsString());
}
catch(FileWriteException $fW){
  echo $fW->getMessage();
  error_log($fW->getTraceAsString());
}
?>