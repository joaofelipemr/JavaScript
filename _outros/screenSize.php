<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<div id="contador"></div>

<script>


var wh = $(window).height();   // returns height of browser viewport
var dh = $(document).height(); // returns height of HTML document

var ww = $(window).width();   // returns width of browser viewport
var dw = $(document).width(); // returns width of HTML document

var sh = screen.height;
var sw = screen.width;


$("#contador").html("<p>$(window).height() = " + wh + "</p>"+
					"<p>$(document).height() = " + dh + ", </p>"+
					"<p>$(window).width() = " + ww + ", </p>"+
					"<p>$(document).width() = " + dw + ", </p>"+
					"<p>$(screen).height() = " + sh + ", </p>"+
					"<p>$(screen).width() = " + sw + ". </p>");
</script>