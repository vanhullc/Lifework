var searchName;

  $(function() {
     $('#logo-container').click(function() {
       $('#content').empty().load('view/home.php', function() {
       });
     });
   });

   $(function() {
     $('#search').keypress(function( event ) {
       if (event.which === 13) {
         event.preventDefault();
         searchName = $('#search').val();

         $("#content").empty().load("view/homeSearch.php", { "SearchName" : searchName });
       }
     });
    });
