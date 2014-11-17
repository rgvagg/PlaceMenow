<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PlaceMeNow</title>
</head>

<body>

	<center>
		<form action="job_form_processing.php" method="post">
			<table cellpadding="3px" cellspacing="5px" >
			<caption><h1><b>Job's Application form</b></h1></caption>
						
			<tr>
			<td><strong>Company Name: </strong></td><td><input type="text" name="name" value="" maxlength="50"/></td></tr>
			
			<tr><td>
			<strong>Compensation Offered:</strong></td><td><input type="text" name="compensation" value="" ></td></tr>				
			<tr>
			<td><strong> Eligible Graduation Score:</strong> </td><td><input type="text" name="eligibility_graduation" value="" maxlength="5" /></td></tr>
			<tr>
			<td><strong>Eligible Senior Secondary Score:</strong> </td><td><input type="text" name="eligibility_senior_secondary" value="" maxlength="5" /></td></tr>
			<tr>
			<td><strong>Eligible Secondary Score:</strong> </td><td><input type="text" name="eligibility_secondary" value="" maxlength="5" /></td></tr>
			<tr>
			<td><strong>Application Deadline:</strong> </td><td><input type="text" name="app_deadline" value="yyyy-mm-dd" maxlength="10" /></td></tr>
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
