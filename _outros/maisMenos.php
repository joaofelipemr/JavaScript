<html>
<head>
<script type="text/javascript">
function id( el ){
        alert( el );
        return document.getElementById( el );
}
window.onload = function(){
        id('mais').onclick = function(){
                id('format').value = parseInt( id('format').value )+1;
                
                id('total').value = id('multiplicando').value*id('format').value;
        }
        id('menos').onclick = function(){
                if( id('format').value>0 )
                        id('format').value = parseInt( id('format').value )-1;
                
                id('total').value = id('multiplicando').value*id('format').value;
        }
}       
</script>
</head>
<body>
		Multiplicando: <input type="text" name="format" value="0" id="multiplicando" size="2" />
        <br /><br />
        <input type="button" name="mais" id="mais" value="+" />
		<input type="text" name="format" value="0" id="format" size="2" />
        <input type="button" name="menos" id="menos" value="-" />
        
        <br /><br />
        Total: <input type="text" name="total" id="total" value="" />
</body>
</html>