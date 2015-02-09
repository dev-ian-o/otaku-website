
<?php
require_once('../classes/Auth.php');
require_once('../classes/Users.php');

if(isset($_POST['login']))
{
	print_r(Auth::signIn($_POST));
}

if(isset($_POST['signup']))
{
	print_r(Users::add($_POST));
}
