<html>
   <head>
      <link href="css/stylesheet.css" rel="stylesheet" media="screen, projection"/>
      <title>kaja seweryn</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <script type="text/javascript" src="script/digital.js"></script>
   </head>
   <body>
      <div class="titleandback">
         <div class="top">
            <div class="backbutton">
               <a href="index.php"><img src="../images/all/backbutton.JPG" alt="back"></a>
            </div>
         </div>
         <div class="top">
            <div class="header">
               <h1>kaja seweryn</h1>
            </div>
         </div>
      </div>
      <hr/>
      <?php
         $somePath = './projects/';
         $directories = glob($somePath . '*' , GLOB_ONLYDIR);
         $nextRow = true;
         foreach ($directories as $dir) {
           $path = $dir."/project.xml";

           if($nextRow == true)
             echo '<div class="wrap">';

           $basename = basename ($dir);

           echo '<div class="digital_column">';
           echo '<img src="'.$dir.'/photo.jpg" class="digital_image" id="'.$basename.'"/>';
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
            <h1>Kaja Seweryn</h1>
         </div>
         <hr/>

         <div class="header">
            <h1 id="title">Calendar</h1>
         </div>

         <div id="title_photo">
            <img src="./projects/calendar/title.jpg">
         </div>

         <div id="title_text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
         </div>

         <div class="wrap">
            <div class="modal_column">
               <img id="first_photo"/>
            </div>
            <div class="modal_column">
               <img id="second_photo"/>
            </div>
         </div>
         <div class="wrap">
            <div class="modal_column">
               <img id="third_photo"/>
            </div>
            <div class="modal_column">
               <img id="fourth_photo"/>
            </div>
         </div>

         <p id="content_text">
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
         </p>

         <div class="videoWrapper">
            <iframe id="film" width="640" height="360" frameborder="0" src="" allowfullscreen></iframe>
         </div>

      </div>
    </div>

   </body>
</html>
