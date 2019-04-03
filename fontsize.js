   $(document).ready(function() {

    $("#sizeUp").click(function() {

        var curFontSize = $('body').css('font-size');
           $("body").css("font-size",parseInt(curFontSize)+1); //Font size in CSS +1
		   localStorage.setItem = Number(localStorage.fontSize) + 1;
//Saves font size to local storage -- Doesn't work 
    });

    $("#normal").click(function() {
        $("body").css("font-size","16px");
		localStorage.setItem("fontSize", "16"); //Font size in CSS to 16

    })

    $("#sizeDown").click(function() {
        var curFontSize = $('body').css('font-size');
           $("body").css("font-size",parseInt(curFontSize)-1);
		  localStorage.setItem = Number(localStorage.fontSize) -1; //Font size in CSS -1

    })
	localStorage.setItem
});