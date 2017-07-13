var profiles = [];
var profile = [];
var id;
var name;
var pic;
var i = 0;
var html = "";
var result = [];
var search = $('.cheatingSearchGet').attr('id');

$.getJSON('mySql/search.php', { search : search }, function(data) {
    result = JSON.parse(JSON.stringify(data));
    while(result[i]){
      if(i == 0) {
        html += "<div class=\"row\" style=\"margin-bottom:0px\">\n";
      }
      else if(i%2 == 0) {
        html += "</div>\n<div class=\"row\" style=\"margin-bottom:0px\">\n";
      }
      html += "<div class=\"col s12 m6 profile\" id=\"";
      html += result[i].iD;
      html += "\"\>\n"+
        "<div class=\"card-panel z-depth-1 white\">\n"+
          "<div class=\"row valign-wrapper\" style=\"margin-bottom:0px\"\>\n"+
            "<div class=\"col s2\"\>\n"+
               "<img src=\"";
       html += result[i].Pic;
       html += "\" alt=\"\" class=\"circle responsive-img\"/\>\n"+
             "</div>"+
             "<div class=\"col s10\"\>\n"+
               "<span class=\"black-text\"\>\n";
       html += result[i].Name;
       html += "</span>"+
             "</div>"+
          "</div>"+
        "</div>"+
      "</div>";
      i++;
    }
    $("#home").append(html);
    $(function() {
       $('.profile').click(function() {
         $('#content').empty().load('view/profile.php', {"iD" : $(this).attr('id')}, function() {
         });
       });
     });
     $(function() {
        $('#accountButton').click(function() {
          $('#content').empty().load('view/createProfile.php',function() {
          });
        });
      });
});
