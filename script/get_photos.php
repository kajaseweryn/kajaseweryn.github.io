<?php
  $path = array_key_exists('data', $_GET) ? $_GET['data'] : 'oil';

  $filenameArray = array();
  $directory = '';
  $directory = './../traditional/'.$path.'/photos/';

  $images = scandir($directory);
  $images = preg_grep ('/\.jpg$/i', $images);

  echo json_encode($images);
 ?>
