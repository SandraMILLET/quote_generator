
// JQuery //
$(document).ready(function () {
  $("button").click(function () {


      // Ajax call on button click
      $.ajax({
          url: "dbco.php",
          succes: function (response) {
              $('quotes').html(response);
          }

          // When call successful
      }).done(function (result) {
          // fade in html
          $(".quotes").hide().html(result).fadeIn();


          // s'il y a une erreur //
      }).fail(function (err) {
          $("quotes").html(err);
          console.log(err);
      });
  });
});

