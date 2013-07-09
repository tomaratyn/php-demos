<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		header("Location: http://xkcd.com");
		exit();
	}
?>
<!doctype html>
<html>
	<body>
		<form method="post">
			<input type="submit">
		</form>
	</body>
</html>
