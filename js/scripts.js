var shiftWindow = function() { scrollBy(0, -50) };
if (location.hash) shiftWindow();

$(document).ready(function(e) {
    
	// Autoscrolling
    $("a[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		console.log($(hash).offset())
		// animate
		$('html, body').animate({scrollTop: $(hash).offset().top-50},
		 300, function(){
		   window.location.hash = hash;
		});
	});

    // Typing animation on cover
    $(function(){
	    $("#coverText").typed({
	      strings: ["Software Delvoper","veloper"],
	      typeSpeed: 80,
	      showCursor: false,
	      backDelay: 30,
	      // callback: function() {
	      //   $("#coverText").mouseover(function(){
	      //     $("#coverText").text(" cd /index.html")
	      //   });
	      //   $("#coverText").mouseout(function(){
	      //     $("#coverText").text(" michael hu")
	      //   });
	      // }
	    });
	});

    // Project thumbnail hover
	// $(document).delegate('#projects .thumbnail img', 'mouseover', function() {
 //   		$(this).fadeTo(300, .5);
	// });
	// $(document).delegate('#projects .thumbnail img', 'mouseout', function() {
 //   		$(this).fadeTo(300, 1);
	// });
});