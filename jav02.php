<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function check()
	{
		var v_name = document.getElementById("stdname").value;
		if (!v_name)
		{
		alert("กรุณากรอก ชื่อด้วยค่ะ");
		form_std.stdname.focus();
		}else{
			alert("สวัสดีคุณ"+v_name);
		}
	}
</script>
</body>
</html>
	<FORM METHOD="POST" ACTION="" id="form_std">
	ชื่อ<INPUT TYPE="TEXT" NAME="stdname" id="stdname">
	<INPUT TYPE="button" VALUE="Send" onclick="check()">
	</FORM>
</BODY>
</HTML>