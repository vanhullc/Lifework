var result = [];
var id = $('.idCol').attr('id');
var name;
var pic;
var j;
var i = 0;
var html = "";
/*
$.ajax({
    url : 'view/profile.php',
    type : 'POST',
		//data : "$iD",
    dataType : 'json',
    success : function (data) {
			result = data;
       alert(result['iD']); // "Hello world!" alerted
    },
    error : function () {
       alert("error");
    }
})
*/
$.getJSON('mySql/getProfile.php', { iD : id }, function(data) {
		result = JSON.parse(JSON.stringify(data));


					html += "<div class=\"col s2\">"+
				"<img src=\""+
				result[0].Pic+
				"\" alt=\"\" class=\"circle responsive-img\">"+
				"</div>"+
				"<div class=\"col s10\">"+
					"<span class=\"black-text\">"+
						result[0].Name+
					"</span>"+
			"</div>";

			$('#'+result[0].iD).append(html);

			$.getJSON('mySql/getLinks.php', { iD : id }, function(data) {

				result = JSON.parse(JSON.stringify(data));

				while(result[i]){
					html = "<div class=\"cd-timeline-block\" id=\"result"+i+"\">"+

						"<div class=\"cd-timeline-img\">"+
							"<img src=\"media/cd-icon-picture.svg\" alt=\"Picture\">"+
						"</div>"+

						"<div class=\"cd-timeline-content\">"+
							"<h2>"+				result[i].Name			+"</h2>"+
							"<div>"+
								 "<a href=\""+
								 result[i].Uri+
								 "\">"+
								 result[i].Uri+
								 "</a>"+
							 "</div>"+
							"<span class=\"cd-date\">"+
							result[i].Date+
							"</span>"+
						"</div>"+
					"</div>";
					if(i==0) {
						$("#cd-timeline").append(html);
					}
					else {
						j = i - 1;
						$("#result"+j).append(html);
					}

					i++;
				}

			});
});


$(function() {
	 $('#linksButton').click(function() {
		 $('#content').empty().load('view/createLinks.php', {"iD" : id},  function() {
		 });
	 });
 });



$(window).on('scroll', function(){
	$timeline_block.each(function(){
		if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		}
	});
});
