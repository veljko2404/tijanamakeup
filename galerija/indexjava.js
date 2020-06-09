$(document).ready(function(){
 
    $("#totop, li a, h3 a").on('click', function(event) {

    if (this.hash !== "") {

    event.preventDefault();

    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
      
      window.location.hash = hash;
      });
    } 
  });
})
window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("totop").style.right = "10%";
		}
		else { document.getElementById("totop").style.right = "-21%";
		}
	}

    