<?php 

$admin_login = 'admin';
$admin_password = 'admin';

if (isset($_GET['logout'])) {
	setcookie('authorized', 0);
	header('Location: /admin.php');
}

if ($_COOKIE["authorized"] == 1) {
	echo '
<p>Welcome to adminka!</p>
<a href="admin.php?logout=1">Logout</a>
';
}

if ($_COOKIE["authorized"] == 0 && empty($_POST)) {
	echo '
<form action="admin.php" method="post">
<p>Login: <input type="text" name="login"/></p>
<p>Pass: <input type="text" name="pass"/></p>
<p><input type="submit"/></p>
</form>
';
}

if (isset($_POST['login']) && isset($_POST['pass'])){
	if ($_POST['login'] == $admin_login &&
		$_POST['pass'] == $admin_password) {
		setcookie('authorized', 1);
		header('Location: /admin.php');
	}
}