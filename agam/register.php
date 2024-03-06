<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	</head>
	<body>
		<form class="cd-form" method="POST" action="#">
			<center><legend>REGISTER</legend><p></p></center>
			
				<div class="error-message" id="error-message">
					<p id="error"></p>
				</div>

				<div class="col-4">
					<input class="m-email" type="email" name="m_email" id="m_email" placeholder="Email" required />
				</div>
				
				<div class="col-4">
					<input class="m-user" type="text" name="m_user" id="m_user" placeholder="Username" required />
				</div>
				
				<div class="col-4">
					<input class="m-pass" type="text" name="m_pass" placeholder="Password" required />
				</div>
			
				<br />
				<input type="submit" name="m_register" value="Submit" />
		</form>
	</body>