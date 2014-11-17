<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PlaceMeNow</title>
</head>

<body>

	<center>
		<form action="student_form_processing.php" method="post">
			<table cellpadding="3px" cellspacing="5px" >
			<caption><h1><b>Student's Application form</b></h1></caption>
			<tr>
			<td><strong> University Roll No: </strong></td><td><input type="text" name="roll_no" value="" maxlength="11"/></td></tr>
			<tr><tr>
			<td><strong> Name: </strong></td><td><input type="text" name="roll_no" value="" maxlength="50"/></td></tr>
			
			<tr>
			<td>
			<strong>Sex:</strong></td><td><input type="radio" name="sex" value="male" >Male
				<input type="radio" name="sex" value="female" >Female</td></tr>
				<tr>
			<td><strong>Graduation Score:</strong> </td><td><input type="text" name="score_graduation" value="" maxlength="5" /></td></tr>
			<tr>
			<td><strong>Senior Secondary Score:</strong> </td><td><input type="text" name="score_senior_secondary" value="" maxlength="5" /></td></tr>
			<tr>
			<td><strong>Secondary Score:</strong> </td><td><input type="text" name="score_secondary" value="" maxlength="5" /></td></tr>
			<tr>
			<td><strong>Present Offered Pay:</strong> </td><td><input type="text" name="present_offered_pay" value="" maxlength="5" /></td></tr>
			<!--<tr>
			<td><strong>Present Offered Pay:</strong></td><td><input type="checkbox" name="opt">Donate money
			<input type="checkbox" name="opt">Subscribe to email</td></tr>
			<tr>
			<td><strong>Message:</strong> </td><td><textarea cols="50" rows="10">Enter your message here . . . </textarea></td></tr>
			 -->
			 <tr><td colspan="2"><center>
			<input type="submit" value="Submit" name="submit" /></center></td>	</tr>
			</table>
		</form>
		</center>
</body>
</html>
