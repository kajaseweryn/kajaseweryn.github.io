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
      fx: 'sarah',
      overlay: '#CFD8DC'
    });

    $( ".digital_image" ).click(function(event) {
      var id = event.target.id;
      var path = "./traditional/" + id + "/";

      $.ajax({
          type: "GET",
          url: path + "project.xml",
          dataType: "xml",
          success: function(xml) {
            $(".image_container").empty();

            $(xml).find('name').each(function() {
              var $name = $(this).text();
              $("#title").text($name);
            });

            var fileextension = ".jpg";
            path = path + 'photos/';
            $.ajax({
                url: path,
                success: function (data) {
                    $(data).find("a:contains(" + fileextension + ")").each(function () {
                        var filename = this.href.replace(window.location.host, "").replace("http://", "");
                        $(".image_container").append("<img src='" + path + filename + "' class='traditional_image'>");
                    });
                }
            });

            modal.style.display = "block";
          }
      });

  });
});
