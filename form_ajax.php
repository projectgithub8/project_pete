<!DOCTYPE html>
<HTML>
<HEAD>
<script language="javascript" type="text/javascript">
		function send ()
		{
			var ajaxRequest;
			if(window.XMLHttpRequest) {
			// for Netscpe, Firefox
		ajaxRequest= new XMLHttpRequest();
		} else if(window.ActiveXObject) {
			// for IE
		ajaxRequest= new ActiveXObject("Microsoft.XMLHTTP");
		} else {
			alert("Browser error");
			return false;
		}
		ajaxRequest.onreadystatechange = function()
		{
			if(ajaxRequest.readyState == 4)
			{
				var area = document.getElementById('area');
				area.innerHTML = ajaxRequest.responseText;
			}
		}
		var name = document.myform.name.value;
		ajaxRequest.open("GET","hel.php?"+"name="+name,true);
		ajaxRequest.send(null);
}
</script>
</HEAD>
<BODY>
<IMG SRC="progress-bar-Loader.gif" WIDTH="150" HEIGHT="100" BORDER="0"0 ALT="">
<FORM name="myform">NAME<INPUT TYPE="text" NAME="name"><BR>
<INPUT TYPE="button" value="Send" onclick="send();">
</FORM>
<div id='area'>
	Your result will display here.
</div>
</BODY>
</html>