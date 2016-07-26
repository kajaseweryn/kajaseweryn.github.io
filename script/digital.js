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

    $( ".digital_image").mouseover(function(event) {
      var id = event.target.id;
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
              console.log("Działa " + film);
              $("#film").attr("src", film);
            });

            modal.style.display = "block";
          }
      });
  });
});
