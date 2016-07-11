<html>

  <head>
    <meta charset="utf-8">
    <link href="css/stylesheet.css" rel="stylesheet" media="screen, projection"/>
    <title>art</title>
  </head>

  <body>
    <?php include 'header_art.php';?>


    <!--art menu section-->
    <div class="inkgallery">

    <?php
      $count = 0;
      $dir = 'images/ink/';

      if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
              $count++;
            }
          }

          echo '<div class="inkcolumn">';
          for ($i = 0; $i < ($count / 2) ; $i++) {
            $dig = 'ink'.(string)$i.'.jpg';
            echo '<img src="../images/ink/'.$dig.'"\>';
          }
          echo '</div>';

          echo '<div class="inkcolumn">';
          for (; $i < $count ; $i++) {
            $dig = 'ink'.(string)$i.'.jpg';
            echo '<img src="../images/ink/'.$dig.'"\>';
          }

          echo '</div>';
    ?>

  </div>
    <?php include 'footer.php';?>
  </body>
</html>
