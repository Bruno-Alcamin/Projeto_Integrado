// JavaScript Document
$(document).ready(function(e) {
    $("#videob").click(function(){
		$("#videob").trigger("play");
		$("#videoa").trigger("pause");		
	})
});