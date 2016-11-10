$(window).load(function() {
     // + any other carousel related stuff that has to wait for the images to complete loading
     $('.carousel').carousel({
        interval:5000,
        pause: "false"
    });
});
    
$("button").click(function () {
    if ($(this).attr("id") === "pauseButton") {
      $('#myCarousel').carousel('pause');
    	$(this).attr("id", "playButton");
      $('#icono-play').toggleClass("glyphicon-play glyphicon-pause");
    } else {
   	  $('#myCarousel').carousel('cycle');
    	$(this).attr("id", "pauseButton");
      $('#icono-play').toggleClass("glyphicon-pause glyphicon-play");
    }
});