<?php

  class FileExistException extends Exception{}
  class FileReadException extends Exception{}
  class FileWriteException extends Exception{}

  $csvfilename = 'badCSV.csv';
  try{
    try{
      $data = file_get_contents($csvfilename);
      if($data === false){
        throw new Exception();
        }
      }
  catch(Exception $e){
    if(!file_exists($csvfilename)){
      throw new FileExistException($csvfilename."The file that you are looking for does not exist.");
    }
    elseif(!is_writable($filename)){
      throw new FileWriteException($csvfilename." /// This file cannot be overwritten. ///");
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