<?php 
if (!$_POST[''] === '') {
  header('location: index.php');
}
  $file = "form-submit.json";
  $formdata = array(
    'name' => $_POST['name'], 
    'phone' => $_POST['phone'],
    'email' => $_POST['email'],
    'message' => $_POST['message']
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