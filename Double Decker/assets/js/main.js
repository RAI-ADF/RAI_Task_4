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
	});
	function slider(slide){
		var img1 = $("#slide .images").eq(0).attr("data-src");
		slide.css({"background-image":"url("+img1+")"});
		console.log(img1);
		var temp = $("#slide .images").eq(0);
		slide.append(temp);
	}
})();