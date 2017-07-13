var link;
var id = $('.iD').attr('id');

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 50, // Creates a dropdown of 15 years to control year
    format: 'yyyy-mm-dd'
  });
  $(function() {
    $('#linksButton').click(function( event ) {
        event.preventDefault();
        link = {
          'idProfile' : id,
          'Title' : $('#Title').val(),
          'Uri' : $('#Uri').val(),
          'Date' : $('#Date').val()
        };

        $.post('mySql/createLinks.php', { Link : link }, function(err) {
        });

        $("#content").load("view/home.php");
    });
   });
