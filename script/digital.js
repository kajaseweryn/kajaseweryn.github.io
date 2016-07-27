$( document ).ready(function() {
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $( ".tile").captionHover({
      fx: 'lily',
      overlay: '#BDBDBD'
    });

    $( ".digital_image" ).click(function(event) {
      var id = event.target.id;
      var path = "./projects/" + id + "/";

      $("#title_photo").attr("src", path + "title.jpg");
      $("#first_photo").attr("src", path + "1.jpg");
      $("#second_photo").attr("src", path + "2.jpg");
      $("#third_photo").attr("src", path + "3.jpg");
      $("#fourth_photo").attr("src", path + "4.jpg");

      $.ajax({
          type: "GET",
          url: path + "project.xml",
          dataType: "xml",
          success: function(xml) {

            $(xml).find('name').each(function() {
              var $name = $(this).text();
              $("#title").text($name);
            });

            $(xml).find('title_text').each(function() {
              var $titleText = $(this).text();
              $("#title_text").text($titleText);
            });

            $(xml).find('content_text').each(function() {
              var $contentText = $(this).text();
              $("#content_text").text($contentText);
            });

            $(xml).find('film').each(function() {
              var film = $(this).text();

              $("#yt_video").remove();
              $( "#video" ).append( '<div class="videoWrapper" id="yt_video"><iframe id="film" width="640" height="360" frameborder="0" src="" allowfullscreen></iframe></div>' );

              if(film) {
                $("#film").attr("src", film);
              }
              else {
                $("#yt_video").remove();
              }
            });

            modal.style.display = "block";
          }
      });
  });
});
