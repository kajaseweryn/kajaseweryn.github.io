<html>
   <head>
      <link href="css/stylesheet.css" rel="stylesheet" media="screen, projection"/>
      <link href="css/hover.css" rel="stylesheet">

      <title>kaja seweryn</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <script type="text/javascript" src="script/captionHover.dev.js"></script>
      <script type="text/javascript" src="script/digital.js"></script>
   </head>
   <body>
     <div class="header">
         kaja seweryn
         <hr/>
     </div>

     <!-- <figure class="tile-5">
				<img src="./images/menu/digital.jpg" />
 						<figcaption>
   							<h2>This is <span> Zoe</span></h2>
   							<p class="description">Zoe has a hidden caption tile and icons.</p>
	           </figcaption>
		</figure> -->

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
           echo '<figure class="tile">';
           echo '<img src="'.$dir.'/photo.jpg" class="digital_image" id="'.$basename.'"/>';
           echo '<figcaption><h2>This is <span> Zoe</span></h2><p class="description">Zoe has a hidden caption tile and icons.</p></figcaption>';
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

         <div id="video">
           <div class="videoWrapper" id="yt_video">
              <iframe id="film" width="640" height="360" frameborder="0" src="" allowfullscreen></iframe>
           </div>
         </div>
      </div>
    </div>

   </body>
</html>
