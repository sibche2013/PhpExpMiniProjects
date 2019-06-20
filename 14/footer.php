<script src="<?=BASE_URL?>assets/js/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function() {
  $("#result").css("display", "none");
  $("#usersSearch").keyup(function() {
    $('#result').slideDown();
    $('#result').html("در حال جستجو ... لطفا کمی صبر کنید ...");
    $.ajax({
      type: 'POST',
      url: 'init.php',
      data: $("#usersSearch").serialize(),
      success: function(response) {
        $('#result').html(response);
        //if search result was empty
        if (response == '') {
          $("#result").html("جستجوی شما نتیجه ای در بر نداشت لطفا با کلمه ای دیگر جستجو نمایید.");
        }
      }
    });

  });


});
</script>
</div>
</body>

</html>