<script>
	function chk_frm() {
		if(document.join.user_id.value){
			window.alert("ENTER THE USER_ID.");
			document.join.user_id.focus();
			return false;
		}
		
		if(document.join.password.value) {
			window.alert("ENTER THE PASSWORD.");
			document.join.password.focus();
			return false;
		}
	}
	return true;
	}
</script>

<form action='createAccountPost.php' method='post' onsubmit='return chk_frm()' name='createAccount'>
	<table width=500 border=1 align=center>
	<tr>
		<td> Name
		<td><input type=text name=name size=25 maxlength=30>
	<tr>
		<td>User ID 
		<td><input type=text name=user_id size=10 maxlength=15>
	<tr>
		<td>Password
		<td><input type=password name=password size=10 maxlength=15>
	<tr>
		<td  colspan=2 align=center>
		<input type=submit value="Create Account">
	</table>
</form>