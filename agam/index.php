<?php
	require "koneksi.php";
	session_start();
	
	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "librarian") == 0)
		header("Location: librarian/home.php");
	else if(strcmp($_SESSION['type'], "member") == 0)
		header("Location: member/home.php");
?>

<html>
	<head>
		<title>LMS</title>

	</head>
	<body>
		<div id="allTheThings">
			<div id="member">
				<a href="member">
				</a>
			</div>
			<div id="verticalLine">
				<div id="librarian">
					<a id="librarian-link" href="librarian">
						&nbsp;&nbsp;&nbsp;Librarian Login
					</a>
				</div>
			</div>
		</div>
	</body>
</html>