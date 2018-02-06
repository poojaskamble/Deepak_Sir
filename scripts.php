<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/hoverIntent.js" type="text/javascript"></script>
<script>
	jQuery(document).ready(function () {
		"use strict";
		var $ = jQuery.noConflict();
	  
			function showMenu() {
				$(this).removeClass("drop-collapsed");
				$(this).addClass("open");
			}
			function hideMenu(){
				$(this).removeClass("open");
				var $dropdown = $(".dropdown");

				$dropdown.each(function () {
					$(this).addClass("drop-collapsed");
				});
			}
	  
			var $dropdown = $(".dropdown");
				$dropdown.each(function () {
					var $this = $(this);

					var $dropmenu = $this.find(".dropdown-menu");
					$dropmenu.css("height", $dropmenu.outerHeight());
					$this.addClass("drop-collapsed");
				});
				var hovsettings = {
						timeout:0,
					interval: 0,
					over: showMenu,
					out: hideMenu
				};
				$(".dropdown").hoverIntent(hovsettings);
	  
	});

	jQuery(document).ready(function($) {

	 $("input").on("focus",function(){
	   $('#serachLabel').addClass("active");
	
	  }).blur(function(){
		   $('#serachLabel').removeClass("active");
	  })
	
	});    

/*
$(function(){
    $.fn.extend({
        slidingSelect: function(options)
        {
            var select= $(this);
            var selector=select.selector;

            var selectedValue=select.val();

            if(selectedValue=="undefined")
                selectedValue=select.find("option:first").val();                

            var divToggle=$("<div>"+selectedValue+"</div>").attr({id:select.attr("id")+"Toggle"}).css({width:select.width()}).click(function(){
                $(selector).slideToggle();
            }).insertBefore(select);

            select.attr("size",6);  
            select.change(function(){
                divToggle.html(select.val());
                $(selector).slideToggle();
            });

        }       
    });
    $("#catergory").hide().slidingSelect();

});
*/
</script>