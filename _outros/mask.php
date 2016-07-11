<script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
<input type="text" class="cpf" />
<script>
$(document).ready(function() {
	$('.cpf').mask('000.000.000-00', {reverse: true});
});
</script>