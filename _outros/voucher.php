<script>

function uid(qtd, type, string) {
	//qtd = quantidade que será retornado
	//type	0 = default caracteres minusculos e maiusculos
	//		1 = lowercase apenas caracteres minúsculos
	//		2 = uppercase apenas caracteres maiúsculos
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"
	var cLowercase = "0123456789abcdefghijklmnopqrstuvwxyz";
	var cUppercase = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	var string_length = qtd;
	
	if(type !== ""){
		if(type === "low"){
			chars = cLowercase;
		}else if(type === "upp"){
			chars = cUppercase;
		}
	}
	
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	
	if(side === "" || side === "left"){
		randomstring = txt + randomstring;
	}else if(side === "right"){
		randomstring = randomstring + txt;
	}else{
		randomstring = "erro in side or text";
	}
	
	//return randomstring;
	document.getElementById("teste").innerHTML = randomstring;
}
</script>

<?php 

echo '<h2>Teste</h2>

<p id="teste">

<script>
var qtd = 8;
var type = "upp";
var txt = "0102";
var side = "rightS";

uid(qtd, type, txt, side)</script>

</p>';