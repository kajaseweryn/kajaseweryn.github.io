<div class="up">
  <a href="<?php $_SERVER['REQUEST_URI'] ;?>"><img src="../images/all/upbutton.JPG" alt="go up"></a>
</div>

<script>
$(document).ready(function(){
    $("a").click(function(){
        $("div").scrollTop(0);
    });
});

</script>
