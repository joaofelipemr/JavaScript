<input type='text' id='text'/>
<p id="contador"></p>

<script>

function textLength(value){
   var maxLength = 0;
   if(value.length > maxLength) return false;
   return true;
}

document.getElementById('text').onkeyup = function(){
     if(!textLength(this.value)) document.getElementById('contador').innerHTML = this.value.length;
     if(textLength(this.value) > 21) alert('campo excedeu 21 caracteres');
}

//alert(document.getElementById('text').value.length);
</script>