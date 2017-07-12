var profile;
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  $(function() {
    $('#accountButton').click(function( event ) {
        event.preventDefault();
        profile = {
          'Name' : $('#Name').val(),
          'Pic' : $('#Pic').val(),
          'Title' : $('#Title').val(),
          'Uri' : $('#Uri').val(),
          'Date' : $('#Date').val()
        };

        $.post('mySql/createProfile.php', { Profile : profile }, function(err) {
        });

        $("#content").load("view/home.php");
    });
   });
