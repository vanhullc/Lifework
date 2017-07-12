  $(function() {
     $('#logo-container').click(function() {
       $('#content').empty().load('view/home.php', function() {
       });
     });
     
   });
