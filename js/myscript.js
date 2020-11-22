$(document).ready(function(){
	$(".links").click(function(){
		var links_class =$(this).attr("id");
		if (links_class == "index" ) {
			$("body").load(links_class + ".php");
		} else {
			$("#ajax_loader_div").load(links_class + ".php");
		}
	});

	$("picture img").click(function(){
		alert("hii")
		var links_class =$(this).attr("class");
		if (links_class == "index" ) {
			$("body").load(links_class + ".php");
		} else {
			$("#ajax_loader_div").load(links_class + ".php");
		}
	});
});