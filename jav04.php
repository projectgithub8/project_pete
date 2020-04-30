<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function check(form)
	{
	return confirm("Do you really want to submit the form?");
	}
</SCRIPT>
</HEAD>
<BODY>
	<FORM METHOD="POST" ACTION="help.php" id="form_std"
	onsubmit="return check(this)">
	<INPUT TYPE="TEXT" NAME="std" ID="std">
	<INPUT TYPE="submit" VALUE="send">
	<INPUT TYPE="reset" VALUE="cancel">
	</FORM>
</BODY>
</html>