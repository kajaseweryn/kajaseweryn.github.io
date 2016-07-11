<html>

  <head>
    <meta charset="utf-8">
    <link href="css/stylesheet.css" rel="stylesheet" media="screen, projection"/>
    <title>digital</title>
  </head>

  <body>
    <?php include 'header_art.php';?>


    <!--art menu section-->
    <div class="oilgallery">
      <?php
        $count = 0;
        $dir = 'images/dig/';
         if ($handle = opendir($dir)) {
             while (($file = readdir($handle)) !== false){
                 if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
                     $count++;
             }
         }

      for ($i = 0; $i < $count; $i++) {
        $dig = 'dig'.(string)$i.'.jpg';
        echo '<img src="../images/dig/'.$dig.'"\>';
      }
      ?>

    </div>

    <?php include 'footer.php';?>
  </body>
</html>
