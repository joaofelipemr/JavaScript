<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>

var myWindow;

function openWin() {
    myWindow = window.open("https://www.youtube.com/watch?v=2ZfBWCCb6zs");
}setTimeout(closeWin, 15000);

function closeWin() {
    myWindow.close();
	location.reload();
}setTimeout(openWin, 10000);


/*
function openTab(){
	//alert("new tab");
	$("#target").click();
	location.reload();
}setTimeout(openTab, 5000);

function newOpen(){
	window.open('https://www.google.com', '_blank');
};
*/
</script>

<a href="google.com.br" id="target" onclick="newOpen()">Click me</a>