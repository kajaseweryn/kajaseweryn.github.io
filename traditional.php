<html>
    <head>
        <meta charset="utf-8">
        <link href="css/stylesheet.css" rel="stylesheet" media="screen, projection"/>
        <link href="css/hover.css" rel="stylesheet">

        <title>kaja seweryn</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <script type="text/javascript" src="script/captionHover.dev.js"></script>
        <script type="text/javascript" src="script/traditional.js"></script>
    </head>
    <body>
          <div class="header">
            <a href="index.php"><img src="./images/all/backbutton.jpg"/></a>
            kaja seweryn
            <hr/>
            traditional
          </div>

          <?php
             $somePath = './traditional/';
             $directories = glob($somePath . '*' , GLOB_ONLYDIR);
             $nextRow = true;
             foreach ($directories as $dir) {
               $path = $dir."/project.xml";

               if($nextRow == true)
                 echo '<div class="wrap">';

               $basename = basename ($dir);

               $xml = simplexml_load_file($path) or die("Error: Cannot create object");

               echo '<div class="digital_column">';
               echo '<figure class="tile">';
               echo '<img src="'.$dir.'/button.jpg" class="digital_image" id="'.$basename.'"/>';
               echo '<figcaption><h2><span>'.($xml->name).'</span></h2></figcaption>';
               echo '</figure>';
               echo '</div>';

               if($nextRow == false)
                 echo '</div>';

               $nextRow = !$nextRow;
             }
             ?>

          <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
               <span class="close">x</span>

               <div class="header">
                  Kaja Seweryn
               </div>
               <hr/>

               <div class="header">
                  <p id="title">Calendar</p>
               </div>

              <div class="image_top_container">
                <div class="image_container">
                </div>
              </div>
           </div>
         </div>
    </body>
</html>
