<script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
	var x = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
	if(x){
		alert("acessando por mob");
	}else{
		alert("acessando por desk");
	}
});
</script>
<?php
echo "ok";