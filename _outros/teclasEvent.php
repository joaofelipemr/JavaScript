<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>event.which demo</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<input id="whichkey" placeholder="digite aqui">
<div id="log"></div>
 
<script>
$( "#whichkey" ).on( "keydown", function( event ) {
  $( "#log" ).html( event.type + ": " +  event.which );
});
</script>


<!--script>
$("body").on("keydown", function( event ) {
  alert(event.which );
});
</script-->
 
</body>
</html>