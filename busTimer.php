<html>
<head>
	<title>bus timer</title>


</head>
<body>

<div class="container" align="center">
	<p><font size = "10" id="time"></font></p>
</div>

<script type="text/javascript">


function getClock(){


var today = new Date();
var hour = today.getHours();
var min = today.getMinutes();
var sec = today.getSeconds();

document.getElementById('time').innerHTML = hour + ":" + min + ":" + sec;


}

getClock();
setInterval(getClock,1000);


</script>

</body>
</html>