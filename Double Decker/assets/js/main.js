(function(){
	$(window).load(function(){
		var slide = $("#slide");
		var header = $("#header");
		var content = $("#site-content");
		slide.css({"height":window.innerHeight-header.outerHeight(), "margin-top":header.outerHeight()});
		content.css({"margin-top":header.outerHeight()});

		// alert(header.height());
		slider(slide);
		setInterval(function(){
			slider(slide);
		}, 3000);
		var siteContent = $("#site-content");
		siteContent.html("<div id='blurred'></div>"+siteContent.html());

		var blurredContent = $("#blurred");
		siteContent.css({
		        "background-image":"url('"+$("#backgrounds").attr("data-src")+"')",
		        "position":"relative", 
		        "background-size":"cover",
		        "height":window.innerHeight-header.outerHeight(),
		        "z-index":"-2"
		});
		blurredContent.css({
		        "position":"absolute",
		        "width":"100%",
		        "height":"100%",
		        "top":"0",
		        "left":"0",
		        "-webkit-filter":"blur(50px)",
		        "-o-filter":"blur(50px)",
		        "-ms-filter":"blur(50px)",
		        "filter":"blur(50px)",
		        "z-index":"-1",
		        "background-color":"rgba(255,255,255,0.7)"
		});
	});
	function slider(slide){
		var img1 = $("#slide .images").eq(0).attr("data-src");
		slide.css({"background-image":"url("+img1+")"});
		console.log(img1);
		var temp = $("#slide .images").eq(0);
		slide.append(temp);
	}
})();