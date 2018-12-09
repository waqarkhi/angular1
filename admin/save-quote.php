<?php 
$file = "quote-submit.json";
$formdata = array(
    'name' => $_POST['name'], 
    'contact' => $_POST['contact'],
    'website' => $_POST['site'],
    'websiteLike' => $_POST['like_site'],
    'email' => $_POST['email'],
    'message' => $_POST['message'],
    'package' => $_POST['package']
    );
  $data_array = array();
  if (file_exists($file)) {
      $jsonform = file_get_contents($file);
      $data_array = json_decode($jsonform);
    } 
      $data_array[] = $formdata;
      $jsonform = json_encode($data_array, JSON_PRETTY_PRINT);
      file_put_contents($file, $jsonform);

?>