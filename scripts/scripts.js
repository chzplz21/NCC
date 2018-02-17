
document.addEventListener("DOMContentLoaded", function(event) { 
	jQuery(document).ready(function($) {
		
		
		//Inserts Leader role/title before entry
		var leaderBoxes = $('.leadership');
		console.log(leaderBoxes[0]);
		
		for (var i = 0; i < leaderBoxes.length; i++) {
			
			var LeaderFooter = $(leaderBoxes[i]).find("footer");
			var entry = $(leaderBoxes[i]).find('.entry-summary');
			$(LeaderFooter).insertBefore(entry);
			
		}
		
		//Inserts single post image before entry
		var postImage = $('.size-full');
		var postTitle = $('.entry-title');
		$(postImage).insertBefore(postTitle);
		
		
		
		
		
		
		/*Makes link red after click */
		$("a").click(function(){
			
			$(this).css("color", "#940A0E");
			var id = $(this).find("div").attr("id");
		
			if (id == 'CircularLogo') {
					
					$(this).find("div").css("border", "solid #940A0E");
			}
			else {
				$(this).find("div").css("border", "solid #FEF100");
			}
			
		});
		
	
		
		$(".PowerpointText").click(function() {
			$(this).css("color", "#940A0E");
		});
		
		$("#SupportMattersRed").click(function() {
			$(this).css("border", "solid #FEF100");
		});

		
	});		
});
