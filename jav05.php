<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function co10()
	{
		var i = 20;
		document.getElementById("v_i").value = i;
		document.getElementById("show").innerHTML = i;
	}
</SCRIPT>
</HEAD>
<BODY>
	<input type="button" value="count" onclick="co10()">
	<input type="text" name="v_i" id="v_i">
	<div id="show">Hello</div>
</BODY>
</html>